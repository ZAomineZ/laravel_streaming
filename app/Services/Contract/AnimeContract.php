<?php

namespace App\Services\Contract;

use App\Models\Anime;
use Illuminate\Database\Eloquent\Collection;

interface AnimeContract
{
    public function get(int $id): ?Anime;

    public function all(): Collection;

    public function create(array $data = []): Anime;

    public function update(int $id, array $data = []): int;

    public function delete(int $id): bool;
}
