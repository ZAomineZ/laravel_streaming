<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Models\Anime;
use App\Repositories\Contract\AnimeContract;
use Illuminate\Database\Eloquent\Model;

final class AnimeRepository extends BaseRepository implements AnimeContract
{
    public function __construct(
        protected Anime $anime
    )
    {
        parent::__construct($this->anime);
    }
}
