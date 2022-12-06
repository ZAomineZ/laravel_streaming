<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Repositories\Contract\BaseContract;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

abstract class BaseRepository implements BaseContract
{
    public function __construct(
        protected Model $model
    )
    {
    }

    public function find(int $id): ?Model
    {
        return $this->model->find($id);
    }

    public function findAll(): Collection
    {
        return $this->model->get();
    }

    public function paginate(Builder $builder, int $perPage = 10, int $currentPage = 1): array
    {
        $count = $builder->count();
        $totalPages = ceil($count / $perPage);

        return [
            'items' => $builder
                ->skip(($currentPage - 1) * $perPage)
                ->take($perPage)
                ->get(),
            'totalPages' => $totalPages
        ];
    }

    public function create(array $data): Model
    {
        return $this->model->create($data);
    }

    public function update(int $id, array $data): int
    {
        return $this->model
            ->where('id', $id)
            ->update($data);
    }

    public function delete(int $id): bool
    {
        return $this->model->delete($id);
    }
}
