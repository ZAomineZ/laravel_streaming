<?php

declare(strict_types=1);

namespace App\View\Components\Anime;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

final class SliderAnimes extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View|Closure|string
     */
    public function render(): View|string|Closure
    {
        return view('components.anime.slider-animes');
    }
}
