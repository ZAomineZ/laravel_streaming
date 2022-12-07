<?php

declare(strict_types=1);

namespace App\Services;

use App\Enums\AnimeFormat;
use App\Models\Anime;
use App\Services\Contract\AnimeContract;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;

final class AnimeService implements AnimeContract
{
    public function __construct(
        protected \App\Repositories\Contract\AnimeContract $animeRepository
    )
    {
    }

    public function get(int $id): ?Anime
    {
        return $this->animeRepository->find($id);
    }

    public function getByNames(array $names = []): Builder
    {
        return $this->animeRepository->findByNames($names);
    }

    public function getBySlug(?string $slug = null): Builder
    {
        return $this->animeRepository
            ->findBySlug($slug);
    }

    public function getTopRated(): Builder
    {
        return $this->animeRepository->findTopRated();
    }

    public function getByGenre(?string $slugGenre = null): Builder
    {
        return $this->animeRepository->findByGenre($slugGenre);
    }

    public function latestAnimes(string $format = AnimeFormat::TV): Builder
    {
        return $this->animeRepository->latestAnimes($format);
    }

    public function all(): Collection
    {
        return $this->animeRepository->findAll();
    }

    public function create(array $data = []): Anime
    {
        return $this->animeRepository->create($data);
    }

    public function update(int $id, array $data = []): int
    {
        return $this->animeRepository->update($id, $data);
    }

    public function delete(int $id): bool
    {
        return $this->animeRepository->delete($id);
    }
}
