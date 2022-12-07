<?php

declare(strict_types=1);

namespace App\Enums;

use Illuminate\Validation\Rules\Enum;

final class AnimeStatus extends Enum
{
    const IN_PROGRESS = "En cours";

    const FINISHED = "Terminé";
}
