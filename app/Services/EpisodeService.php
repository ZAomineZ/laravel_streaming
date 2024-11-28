<?php

declare(strict_types=1);

namespace App\Services;

use App\Models\Episodes;
use App\Services\Contract\EpisodeContract;
use Illuminate\Database\Eloquent\Collection;

final class EpisodeService implements EpisodeContract
{
    public function __construct(
        protected \App\Repositories\Contract\EpisodeContract $episodeRepository
    )
    {
    }

    public function get(int $id): ?Episodes
    {
        return $this->episodeRepository->find($id);
    }

    public function all(): Collection
    {
        return $this->episodeRepository->findAll();
    }

    public function create(array $data = []): Episodes
    {
        return $this->episodeRepository->create($data);
    }

    public function update(int $id, array $data = []): int
    {
        return $this->episodeRepository->update($id, $data);
    }

    public function delete(int $id): bool
    {
        return $this->delete($id);
    }
}
