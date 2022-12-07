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

    public function getTopRated(): Builder;

    public function latestAnimes(string $format = AnimeFormat::TV): Builder;

    public function all(): Collection;

    public function create(array $data = []): Anime;

    public function update(int $id, array $data = []): int;

    public function delete(int $id): bool;
}
