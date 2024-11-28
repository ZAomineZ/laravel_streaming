<?php

namespace App\Services\Contract;

use App\Models\Episodes;
use Illuminate\Database\Eloquent\Collection;

interface EpisodeContract
{
    public function get(int $id): ?Episodes;

    public function all(): Collection;

    public function create(array $data = []): Episodes;

    public function update(int $id, array $data = []): int;

    public function delete(int $id): bool;
}
