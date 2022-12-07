<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Enums\AnimeFormat;
use App\Models\Anime;
use App\Repositories\Contract\AnimeContract;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

final class AnimeRepository extends BaseRepository implements AnimeContract
{
    public function __construct(
        protected Anime $anime
    )
    {
        parent::__construct($this->anime);
    }

    public function findByNames(array $names = []): Builder
    {
        return $this->anime
            ->whereIn('title', $names);
    }

    public function findBySlug(?string $slug = null): Builder
    {
        return $this->anime
            ->where('slug', '=', $slug);
    }

    public function findTopRated(): Builder
    {
        return $this->anime
            ->orderByDesc('score');
    }

    public function findByGenre(?string $slugGenre = null): Builder
    {
        return $this->anime
            ->whereHas('genres', function ($q) use ($slugGenre) {
                $q->where('slug', '=', $slugGenre);
            });
    }

    public function latestAnimes(string $format = AnimeFormat::TV): Builder
    {
        return $this->anime
            ->orderByDesc('aired_from')
            ->where('format', '=', $format);
    }
}
