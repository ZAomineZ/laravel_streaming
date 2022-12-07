<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

final class AnimeController extends Controller
{
    public function index(): Factory|View|Application
    {
        return view('anime.index');
    }

    public function details(): Factory|View|Application
    {
        return view('anime.details');
    }

    public function show(): Factory|View|Application
    {
        return view('anime.show');
    }
}
