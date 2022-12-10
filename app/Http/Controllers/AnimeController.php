<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Services\AnimeService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

final class AnimeController extends Controller
{
    public function __construct(
        protected AnimeService $animeService,
    )
    {
    }

    public function details(string $slug): Factory|View|Application
    {
        $anime = $this->animeService
            ->getBySlug($slug)
            ->with('genres')
            ->first();
        $genre = $anime->genres()->first();
        $animesRelated = $this->animeService
            ->getByGenre($genre->slug)
            ->limit(3)
            ->get();

        return view('anime.details', compact('anime', 'animesRelated'));
    }

    public function show(Request $request, string $slug): Factory|View|Application
    {
        $episode = $request->query('episode') ?? 1;

        $anime = $this->animeService
            ->getBySlug($slug)
            ->with('genres')
            ->with('episodesList', function ($q) {
                $q->orderBy('episode');
            })
            ->first();
        $genre = $anime->genres()->first();
        $animesRelated = $this->animeService
            ->getByGenre($genre->slug)
            ->limit(4)
            ->get();
        $totalEpisodes = $anime->episodesList()->count();

        return view('anime.show', compact('anime', 'animesRelated', 'episode', 'totalEpisodes'));
    }
}
