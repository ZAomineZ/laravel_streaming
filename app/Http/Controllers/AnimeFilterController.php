<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Anime;
use App\Services\AnimeService;
use App\Services\GenreService;
use App\Traits\Controller\AnimeFilter;
use Illuminate\Http\Request;

final class AnimeFilterController extends Controller
{
    use AnimeFilter;

    public function __construct(
        protected AnimeService $animeService,
        protected GenreService $genreService
    )
    {
    }

    public function __invoke(Request $request)
    {
        $query = $request->query() ?? [];

        $search = $query['search_anime'] ?? "";

        if (isset($query['reset'])) {
            return redirect()->route('anime.index');
        }

        $queryBuilder = null;
        $perPage = 20;
        if (!empty($search)) {
            $queryBuilder = $this
                ->animeService
                ->getSearch($search);
        }

        if (!empty($query) && (isset($query['sort']) || isset($query['sort_title']))) {
            $queryBuilder = $this->sort($query, $queryBuilder);
        }

        if (isset($query['format']) && $query['format'] !== "Tous") {
            $queryBuilder = $this->animeService
                ->getByFormat(Anime::$formats[$query['format']] ?? Anime::$formats['tv'], $queryBuilder);
        }

        if (isset($query['status']) && $query['status'] !== "Tous") {
            $queryBuilder = $this->animeService
                ->getByStatus($query['status'], $queryBuilder);
        }

        if (isset($query['year'])) {
            $queryBuilder = $this->animeService
                ->getByYear($query['year'], $queryBuilder);
        }

        if (isset($query['genre'])) {
            $queryBuilder = $this->animeService
                ->getByGenreName($query['genre'], $queryBuilder);
        }

        if (null === $queryBuilder) {
            $queryBuilder = $this->animeService->getTopRated();
        }

        $animes = $queryBuilder->paginate($perPage);
        $years = $this->animeService->groupYears();
        $genres = $this->genreService->groupNames();

        return view('anime.index', compact('animes', 'years', 'genres', 'query'));
    }
}
