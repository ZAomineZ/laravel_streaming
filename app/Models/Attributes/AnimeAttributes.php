<?php

namespace App\Models\Attributes;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Relations\HasMany;

trait AnimeAttributes
{
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
