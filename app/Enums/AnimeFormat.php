<?php

namespace App\Enums;

use Illuminate\Validation\Rules\Enum;

final class AnimeFormat extends Enum
{
    const MOVIE = "movie";

    const ONA = "ona";

    const OVA = "ova";

    const SPECIAL = "special";

    const TV = "tv";

    const TV_SHORT = "tv_short";
}
