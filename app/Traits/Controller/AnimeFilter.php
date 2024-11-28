<?php

declare(strict_types=1);

namespace App\Traits\Controller;

use Illuminate\Database\Eloquent\Builder;

trait AnimeFilter
{
    public function sort(array $query, ?Builder $builder = null): Builder
    {
        if (isset($query['sort_title']) && $query['sort_title'] === "A-Z") {
            $builder = $this->animeService->sortTitle($builder);
        }

        if (isset($query['sort']) && $query['sort'] === 'rating') {
            $builder = $this->animeService->sortScore($builder, 'DESC');
        }

        if (isset($query['sort']) && $query['sort'] === 'newest') {
            $builder = $this->animeService->sortLatest($builder);
        }

        if (isset($query['sort_title']) && $query['sort_title'] !== "A-Z") {
            $builder = $this->animeService->sortStartLetterTitle($builder, $query['sort_title']);
        }

        return $builder;
    }
}
