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
     * Find latest animes.
     *
     * @param string $format
     * @return Builder
     */
    public function latestAnimes(string $format = AnimeFormat::TV): Builder;

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
