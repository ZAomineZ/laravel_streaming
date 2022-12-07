<?php

namespace App\Models;

use App\Models\Attributes\AnimeAttributes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Anime extends Model
{
    use HasFactory, AnimeAttributes;

    protected $table = "animes";

    protected $guarded = [];

    public $timestamps = true;

    public function genres(): BelongsToMany
    {
        return $this->belongsToMany(Genre::class);
    }

    public function episodesList(): HasMany
    {
        return $this->hasMany(Episodes::class);
    }

    public function episodeCurrent(int $episode)
    {
        return $this->episodesList()->where('episode', '=', $episode)->first();
    }
}
