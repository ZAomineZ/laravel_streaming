<?php

declare(strict_types=1);

namespace App\Providers;

use App\Models\Anime;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

final class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register(): void
    {
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(): void
    {
        View::composer('layouts.app', function ($view) {
            $animes = [
                'Black Clover',
                'Bleach',
                'Blue Dragon',
                'Blue Lock',
                'Boku no Hero Academia',
                'One Piece',
                'SPY x FAMILY',
                'Death Note',
                'Hunter x Hunter'
            ];
            $animesHeader = Anime::whereIn('title', $animes)->get();

            $view->with('animesHeader', $animesHeader);
        });
    }
}
