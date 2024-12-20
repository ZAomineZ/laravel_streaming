<?php

declare(strict_types=1);

namespace App\View\Components\Layout;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;

final class Header extends Component
{
    public Collection $animes;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(Collection $animes)
    {
        $this->animes = $animes;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View|Closure|string
     */
    public function render(): View|string|Closure
    {
        return view('components.header');
    }
}
