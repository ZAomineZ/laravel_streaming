<?php

declare(strict_types=1);

namespace App\Concern\Scrapp;

use App\Concern\Request\RequestGoutte;
use App\Services\AnimeService;
use App\Services\EpisodeService;
use App\Services\GenreService;
use DateTime;
use Exception;
use Illuminate\Support\Str;
use Symfony\Component\DomCrawler\Crawler;

final class NekoSamaAnime
{
    public function __construct(
        protected RequestGoutte $requestGoutte,
        protected NekoSamaEpisodes $nekoSamaEpisodes,
        protected AnimeService $animeService,
        protected GenreService $genreService,
        protected EpisodeService $episodeService
    )
    {
    }

    /**
     * @throws Exception
     */
    public function scrapp(): void
    {
        $animesRequest = $this->requestGoutte->get(NekoSama::animes);

        // Get pagination
        $pagesPagination = $animesRequest->filter('.nekosama.pagination a')->each(function ($node) {
            return $node->text();
        });
        $pagesPagination = array_filter($pagesPagination);
        $lastPagePagination = (int)end($pagesPagination);
        $pageCurrent = 1;

        while ($pageCurrent !== $lastPagePagination) {
            $pageCurrent++;

            // Save animes by page
            $paginationAnimeRequest = $this->requestGoutte->get(NekoSama::animes . $pageCurrent);
            $this->saveAnimes($paginationAnimeRequest);
        }
    }

    /**
     * @throws Exception
     */
    protected function saveAnimes(Crawler $animesRequest): void
    {
        // Get animes card
        $animes = $animesRequest->filter('.listing-animes#regular-list-animes .anime .info')
            ->each(function ($node) {
                return [
                    'title' => $node->filter('.title div')->text(),
                    'link' => $node->filter('.title')->attr('href')
                ];
            });
        foreach ($animes as $anime) {
            // Get anime current
            $link = $anime['link'] ?? "";
            $title = $anime['title'];
            $requestAnime = $this->requestGoutte->get(NekoSama::HOME . $link);

            // Data on current anime
            $genres = $requestAnime->filter('.content .container .tag a')
                ->each(fn($node) => $node->text());
            $description = $requestAnime->filter('#anime-main #stats .synopsis')->text();
            $stats = $requestAnime->filter('#anime-main #details #anime-info-list .item')
                ->each(function ($node) {
                    $key = $node->filter('small')->text();
                    $value = $node->text();
                    return $key . Str::replace($key, ":", $value);
                });
            $coverImage = $requestAnime->filter('#anime-main #details .cover img')
                ->attr('src');
            $bannerImage = $requestAnime->filter('#info #head')
                ->attr('style');
            preg_match("/\bhttps?:\/\/\S+(?:png|jpg)\b/", $bannerImage, $matches);
            $bannerImage = $matches[0] ?? "";

            foreach ($stats as $k => $stat) {
                $statParts = explode(': ', $stat);
                $key = $statParts[0];
                if (!isset($statParts[1]) && $key === "Format:") {
                    $statParts[0] = "Format";
                    $statParts[1] = "tv";
                    $key = $statParts[0];
                }
                $value = $statParts[1];

                $stats[$key] = $value;
                unset($stats[$k]);
            }

            // Data stats
            $score = $stats['Score moyen'];
            $scoreParts = explode('/', $score);
            $score = (float)$scoreParts[0];

            $format = $stats['Format'];
            $status = $stats['Status'];
            $episodes = $stats['Episodes'];
            $aired = $stats['Diffusion'];
            $airedParts = explode(' - ', $aired);
            $airedFrom = isset($airedParts[0]) && $airedParts[0] !== '?' ? new DateTime($airedParts[0]) : null;
            $airedTo = isset($airedParts[1]) && $airedParts[1] !== '?' ? new DateTime($airedParts[1]) : null;

            // Save anime
            $anime = $this->animeService->create([
                'title' => $title,
                'slug' => Str::slug($title),
                'description' => $description,
                'score' => $score,
                'format' => $format,
                'status' => $status,
                'episodes' => $episodes,
                'cover_image' => $coverImage,
                'banner_image' => $bannerImage,
                'aired_from' => $airedFrom,
                'aired_to' => $airedTo
            ]);

            // Episodes
            $episodes = $this->nekoSamaEpisodes->episodes($requestAnime);
            foreach ($episodes as $episode) {
                $time = (int)Str::replace(' min', '', $episode->time);
                $episodeNumber = (int)Str::replace('Ep. ', '', $episode->episode);

                $this->episodeService->create([
                    'time' => $time,
                    'episode' => $episodeNumber,
                    'title' => $episode->title,
                    'url' => $episode->url,
                    'url_image' => $episode->url_image,
                    'anime_id' => $anime->id
                ]);
            }

            // Save genre if exist
            foreach ($genres as $genre) {
                if (!$genreEntity = $this->genreService->getByName($genre)) {
                    $genreEntity = $this->genreService
                        ->create(['name' => $genre, 'slug' => Str::slug($genre)]);
                }
                // Add relation genres for current anime
                if (!$anime->genres->contains($genreEntity)) {
                    $anime->genres()->attach($genreEntity);
                }
            }
        }
    }
}
