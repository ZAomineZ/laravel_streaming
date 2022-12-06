<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('genres', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->string('slug', 255);
            $table->timestamps();
        });

        Schema::create('anime_genre', function (Blueprint $table) {
            $table->bigInteger('anime_id')->unsigned();
            $table->bigInteger('genre_id')->unsigned();
            $table->foreign('anime_id')
                ->references('id')
                ->on('animes')
                ->onDelete('cascade');
            $table->foreign('genre_id')
                ->references('id')
                ->on('genres')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::table('anime_genre', function(Blueprint $table)
        {
            $table->dropForeign('anime_genre_anime_id_foreign');
            $table->dropForeign('anime_genre_genre_id_foreign');
        });
        Schema::dropIfExists('genres');
    }
};
