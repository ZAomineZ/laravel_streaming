<?php

declare(strict_types=1);

namespace App\Services\Contract;

use App\Models\Genre;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;

interface GenreContract
{
    public function get(int $id): ?Genre;

    public function getByName(string $name): ?Genre;

    public function all(): Collection;

    public function create(array $data = []): Genre;

    public function update(int $id, array $data = []): int;

    public function delete(int $id): bool;
}
