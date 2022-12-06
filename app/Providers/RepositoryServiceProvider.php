<?php

namespace App\Providers;

use App\Repositories\AnimeRepository;
use App\Repositories\Contract\AnimeContract;
use App\Repositories\Contract\EpisodeContract;
use App\Repositories\Contract\GenreContract;
use App\Repositories\EpisodeRepository;
use App\Repositories\GenreRepository;
use Illuminate\Support\ServiceProvider;

final class RepositoryServiceProvider extends ServiceProvider
{
    public function boot()
    {}

    public function register()
    {
        $this->app->bind(
            AnimeContract::class,
            AnimeRepository::class
        );
        $this->app->bind(
            GenreContract::class,
            GenreRepository::class
        );
        $this->app->bind(
            EpisodeContract::class,
            EpisodeRepository::class
        );
    }
}
