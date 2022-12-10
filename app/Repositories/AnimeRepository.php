<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Enums\AnimeFormat;
use App\Models\Anime;
use App\Repositories\Contract\AnimeContract;
use Illuminate\Database\Eloquent\Builder;

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

    public function findByGenreName(?string $nameGenre = null, ?Builder $builder = null): Builder
    {
        $query = $queryBuilder ?? $this->anime->newQuery();
        return $query
            ->whereHas('genres', function ($q) use ($nameGenre) {
                $q->where('name', '=', $nameGenre);
            });
    }

    public function findSearch(string $search, ?Builder $queryBuilder = null): Builder
    {
        $query = $queryBuilder ?? $this->anime->newQuery();
        $search = mb_strtolower($search);
        return $query
            ->whereRaw("LOWER(title) LIKE ?", ['%' . $search . '%']);
    }

    public function findByFormat(?string $format = null, ?Builder $builder = null): Builder
    {
        $query = $builder ?? $this->anime->newQuery();
        return $query->where('format', '=', $format);
    }

    public function findByStatus(?string $status = null, ?Builder $builder = null): Builder
    {
        $query = $builder ?? $this->anime->newQuery();
        return $query->where('status', '=', $status);
    }

    public function findByYear(string $year, ?Builder $builder = null): Builder
    {
        $query = $builder ?? $this->anime->newQuery();
        return $query->whereYear('aired_from', '=', $year);
    }

    public function latestAnimes(string $format = AnimeFormat::TV): Builder
    {
        return $this->anime
            ->orderByDesc('aired_from')
            ->where('format', '=', $format);
    }

    public function groupYears(): \Illuminate\Support\Collection
    {
        return $this->anime
            ->selectRaw('EXTRACT(year from aired_from) as year')
            ->where('aired_from', '!=', null)
            ->groupBy('year')
            ->orderByDesc('year')
            ->get()
            ->map(fn (Anime $anime) => $anime->year);
    }

    public function sortTitle(?Builder $builder, string $direction = 'ASC'): Builder
    {
        $query = $builder ?? $this->anime->newQuery();
        return $query->orderBy('title', $direction);
    }

    public function sortScore(?Builder $builder, string $direction = "ASC"): Builder
    {
        $query = $builder ?? $this->anime->newQuery();
        return $query->orderBy('score', $direction);
    }

    public function sortLatest(?Builder $builder): Builder
    {
        $query = $builder ?? $this->anime->newQuery();
        return $query
            ->orderByDesc('aired_from');
    }

    public function sortStartLetterTitle(?Builder $builder, string $letter): Builder
    {
        $query = $builder ?? $this->anime->newQuery();
        return $query
            ->where('title', 'LIKE', "$letter%");
    }
}
