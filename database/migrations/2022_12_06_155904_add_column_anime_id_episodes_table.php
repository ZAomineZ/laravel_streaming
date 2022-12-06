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
        Schema::table('episodes', function (Blueprint $table) {
            $table->bigInteger('anime_id')->unsigned();
            $table->foreign('anime_id')
                ->references('id')
                ->on('animes')
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
        Schema::dropColumns('episodes', ['anime_id']);
    }
};
