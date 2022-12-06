<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Episodes extends Model
{
    use HasFactory;

    protected $table = "episodes";

    protected $guarded = [];

    public $timestamps = true;

    public function anime(): BelongsTo
    {
        return $this->belongsTo(Anime::class);
    }
}
