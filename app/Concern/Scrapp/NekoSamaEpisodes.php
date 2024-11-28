<?php

declare(strict_types=1);

namespace App\Concern\Scrapp;

use App\Concern\Request\RequestGoutte;
use Illuminate\Support\Str;
use Symfony\Component\DomCrawler\Crawler;

final class NekoSamaEpisodes
{
    public function episodes(Crawler|string $requestOrUri)
    {
        if ($requestOrUri instanceof Crawler) {
            $html = $requestOrUri->html();
        } else {
            $html = (new RequestGoutte())
                ->get(NekoSama::HOME . $requestOrUri)->html();
        }

        preg_match("/var episodes = (\[.+]);/", $html, $matcheEpisodes);
        $stringEpisodes = mb_substr($matcheEpisodes[0], 0, mb_strlen($matcheEpisodes[0]) - 1) ?? "";
        $stringEpisodes = Str::replace('var episodes = ', '', $stringEpisodes);

        return json_decode($stringEpisodes) ?? [];
    }
}
