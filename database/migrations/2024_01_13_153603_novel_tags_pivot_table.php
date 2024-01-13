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
        Schema::create('novels_tags_pivot', function (Blueprint $table) {
            $table->unsignedBigInteger('novel_id');
            $table->foreign('novel_id', 'novel_id_fk_098732')->references('id')->on('novels');
            $table->unsignedBigInteger('tag_id');
            $table->foreign('tag_id', 'tag_id_fk_21324123')->references('id')->on('novels_tags');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('novels_tags_pivot');
    }
};
