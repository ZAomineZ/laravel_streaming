<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Enums\AnimeFormat;
use App\Services\AnimeService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

final class HomeController extends Controller
{
    public function __construct(
        protected AnimeService $animeService
    )
    {
    }

    public function __invoke(): Factory|View|Application
    {
        $animeTopRated = $this->animeService
            ->getTopRated()
            ->limit(12)
            ->get();
        $animesLatest = $this->animeService
            ->latestAnimes()
            ->limit(12)
            ->get();
        $animeMoviesLatest = $this->animeService
            ->latestAnimes(AnimeFormat::MOVIE)
            ->limit(12)
            ->get();
        $animeOvaLatest = $this->animeService
            ->latestAnimes(AnimeFormat::OVA)
            ->limit(12)
            ->get();

        return view('home', compact('animeTopRated', 'animesLatest', 'animeMoviesLatest', 'animeOvaLatest'));
    }
}
