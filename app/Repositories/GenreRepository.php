<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Models\Genre;
use App\Repositories\Contract\GenreContract;
use Illuminate\Database\Eloquent\Model;

final class GenreRepository extends BaseRepository implements GenreContract
{
    public function __construct(
        protected Genre $genre
    )
    {
        parent::__construct($this->genre);
    }

    public function findByName(string $name): ?Model
    {
        return $this->genre
            ->where('name', '=', $name)
            ->first();
    }
}
