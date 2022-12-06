<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Models\Episodes;
use App\Repositories\Contract\EpisodeContract;

final class EpisodeRepository extends BaseRepository implements EpisodeContract
{
    public function __construct(
        protected Episodes $episodes
    )
    {
        parent::__construct($this->episodes);
    }
}
