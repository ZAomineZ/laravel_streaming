<?php

namespace App\Models\Attributes;

use Carbon\Carbon;

trait AnimeAttributes
{
    public static array $formats = [
        "Movie" => "movie",
        "Ona" => "ona",
        "Ova" => "ova",
        "Special" => "special",
        "Tv" => "tv",
        "Tv Short" => 'tv_short'
    ];

    public function year(string $field = "aired_from"): string|int
    {
        $carbon = new Carbon($this->{$field});

        return $carbon->year;
    }

    public function date(string $field = 'aired_from'): string
    {
        $carbon = new Carbon($this->{$field});

        return "{$carbon->shortMonthName} {$carbon->year}";
    }
}
