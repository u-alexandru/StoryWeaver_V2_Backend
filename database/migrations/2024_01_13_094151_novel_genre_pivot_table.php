<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('novels_genres_pivot', function (Blueprint $table) {
            $table->unsignedBigInteger('novel_id');
            $table->foreign('novel_id', 'novel_id_fk_6325323')->references('id')->on('novels');
            $table->unsignedBigInteger('genre_id');
            $table->foreign('genre_id', 'genre_id_fk_326345')->references('id')->on('novels_genres');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('novels_genres_pivot');
    }
};
