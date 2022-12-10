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

    public function getByGenreName(?string $genreName = null, ?Builder $builder = null): Builder
    {
        return $this->animeRepository->findByGenreName($genreName, $builder);
    }

    public function getByFormat(?string $format = null, ?Builder $builder = null): Builder
    {
        return $this->animeRepository->findByFormat($format, $builder);
    }

    public function getByStatus(?string $status = null, ?Builder $builder = null): Builder
    {
        return $this->animeRepository->findByStatus($status, $builder);
    }

    public function getByYear(string $year, ?Builder $builder = null)
    {
        return $this->animeRepository->findByYear($year, $builder);
    }

    public function getSearch(string $search, ?Builder $queryBuilder = null): Builder
    {
        return $this->animeRepository->findSearch($search, $queryBuilder);
    }

    public function latestAnimes(string $format = AnimeFormat::TV): Builder
    {
        return $this->animeRepository->latestAnimes($format);
    }

    public function groupYears(): \Illuminate\Support\Collection
    {
        return $this->animeRepository->groupYears();
    }

    public function sortTitle(?Builder $builder, string $direction = 'ASC'): Builder
    {
        return $this->animeRepository->sortTitle($builder, $direction);
    }

    public function sortScore(?Builder $builder, string $direction = 'ASC'): Builder
    {
        return $this->animeRepository->sortScore($builder, $direction);
    }

    public function sortLatest(?Builder $builder): Builder
    {
        return $this->animeRepository->sortLatest($builder);
    }
    public function sortStartLetterTitle(?Builder $builder, string $letter): Builder
    {
        return $this->animeRepository->sortStartLetterTitle($builder, $letter);
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
