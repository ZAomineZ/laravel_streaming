<?php

namespace App\Services\Contract;

use App\Enums\AnimeFormat;
use App\Models\Anime;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;

interface AnimeContract
{
    public function get(int $id): ?Anime;

    public function getByNames(array $names = []): Builder;

    public function getBySlug(?string $slug = null): Builder;

    public function getByGenre(?string $slugGenre = null): Builder;

    public function getByGenreName(?string $genreName = null, ?Builder $builder = null): Builder;

    public function getByFormat(?string $format = null, ?Builder $builder = null): Builder;

    public function getByStatus(?string $status = null, ?Builder $builder = null): Builder;

    public function getByYear(string $year, ?Builder $builder = null);

    public function getTopRated(): Builder;

    public function getSearch(string $search, ?Builder $queryBuilder = null): Builder;

    public function latestAnimes(string $format = AnimeFormat::TV): Builder;

    public function groupYears(): \Illuminate\Support\Collection;

    public function sortTitle(?Builder $builder, string $direction = 'ASC'): Builder;

    public function sortScore(?Builder $builder, string $direction = 'ASC'): Builder;

    public function sortLatest(?Builder $builder): Builder;

    public function sortStartLetterTitle(?Builder $builder, string $letter): Builder;

    public function all(): Collection;

    public function create(array $data = []): Anime;

    public function update(int $id, array $data = []): int;

    public function delete(int $id): bool;
}
