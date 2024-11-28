<?php

namespace App\Repositories\Contract;

use App\Enums\AnimeFormat;
use App\Models\Anime;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

interface AnimeContract
{
    /**
     * Find resource.
     *
     * @param int $id
     * @return Model|null
     */
    public function find(int $id): ?Model;

    /**
     * Find all resources.
     *
     * @param array $names
     * @return Builder
     */
    public function findByNames(array $names = []): Builder;

    /**
     * Find resource by slug.
     *
     * @param string|null $slug
     * @return Builder
     */
    public function findBySlug(?string $slug = null): Builder;

    /**
     * Find resource by slug genre.
     *
     * @param string|null $slugGenre
     * @return Builder
     */
    public function findByGenre(?string $slugGenre = null): Builder;

    /**
     * Find resource by name genre.
     *
     * @param string|null $nameGenre
     * @param Builder|null $builder
     * @return Builder
     */
    public function findByGenreName(?string $nameGenre = null, ?Builder $builder = null): Builder;

    /**
     * Find resource by format
     *
     * @param string|null $format
     * @param Builder|null $builder
     *
     * @return Builder
     */
    public function findByFormat(?string $format = null, ?Builder $builder = null): Builder;

    /**
     * Find resource by status
     *
     * @param string|null $status
     * @param Builder|null $builder
     * @return Builder
     */
    public function findByStatus(?string $status = null, ?Builder $builder = null): Builder;

    /**
     * Find resource by year
     *
     * @param string $year
     * @param Builder|null $builder
     * @return Builder
     */
    public function findByYear(string $year, ?Builder $builder = null): Builder;

    /**
     * Find top rated ressources.
     *
     * @return Builder
     */
    public function findTopRated(): Builder;

    /**
     * Find all resources.
     *
     * @return Collection
     */
    public function findAll(): Collection;

    /**
     * Find by search param
     *
     * @param string $search
     * @param Builder|null $queryBuilder
     * @return Builder
     */
    public function findSearch(string $search, ?Builder $queryBuilder = null): Builder;

    /**
     * Find latest animes.
     *
     * @param string $format
     * @return Builder
     */
    public function latestAnimes(string $format = AnimeFormat::TV): Builder;

    /**
     * Group all years.
     *
     * @return Collection
     */
    public function groupYears(): \Illuminate\Support\Collection;

    /**
     * Sort by title
     *
     * @param Builder|null $builder
     * @param string $direction
     * @return Builder
     */
    public function sortTitle(?Builder $builder, string $direction = "ASC"): Builder;

    /**
     * Sort by score
     *
     * @param Builder|null $builder
     * @param string $direction
     * @return Builder
     */
    public function sortScore(?Builder $builder, string $direction = "ASC"): Builder;

    /**
     * Sort last (aired_from field) animes
     *
     * @param Builder|null $builder
     * @return Builder
     */
    public function sortLatest(?Builder $builder): Builder;

    /**
     * Sort by start letter
     *
     * @param Builder|null $builder
     * @param string $letter
     * @return Builder
     */
    public function sortStartLetterTitle(?Builder $builder, string $letter): Builder;

    /**
     * Create new resource.
     *
     * @param array $data
     * @return Model
     */
    public function create(array $data): Model;

    /**
     * Update existing resource.
     *
     * @param int $id
     * @param array $data
     * @return int
     */
    public function update(int $id, array $data): int;

    /**
     * Delete existing resource.
     *
     * @param int $id
     * @return bool
     */
    public function delete(int $id): bool;
}
