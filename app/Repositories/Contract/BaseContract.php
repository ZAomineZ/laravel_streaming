<?php

namespace App\Repositories\Contract;

use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

interface BaseContract
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
     * @return Collection
     */
    public function findAll(): Collection;

    /**
     * Find with paginate.
     *
     * @param Builder $builder
     * @param int $perPage
     * @param int $currentPage
     * @return array
     */
    public function paginate(Builder $builder, int $perPage = 10, int $currentPage = 1): array;

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
