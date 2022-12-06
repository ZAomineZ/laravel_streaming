<?php

declare(strict_types=1);

namespace App\Services;

use App\Models\Genre;
use App\Services\Contract\GenreContract;
use Illuminate\Database\Eloquent\Collection;

final class GenreService implements GenreContract
{
    public function __construct(
        protected \App\Repositories\Contract\GenreContract $genreRepository
    )
    {
    }

    public function get(int $id): ?Genre
    {
        return $this->genreRepository->find($id);
    }

    public function getByName(string $name): ?Genre
    {
        return $this->genreRepository->findByName($name);
    }

    public function all(): Collection
    {
        return $this->genreRepository->findAll();
    }

    public function create(array $data = []): Genre
    {
        return $this->genreRepository->create($data);
    }

    public function update(int $id, array $data = []): int
    {
        return $this->genreRepository->update($id, $data);
    }

    public function delete(int $id): bool
    {
        return $this->genreRepository->delete($id);
    }
}
