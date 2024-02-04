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
        Schema::create('cards', function (Blueprint $table) {
            $table->id();
            $table->integer('rating');
            $table->string('image');
            $table->string('played_champion_1');
            $table->string('record_with_champion_1');
            $table->string('played_champion_2');
            $table->string('record_with_champion_2');
            $table->foreignId('player_id')->constrained();
            $table->string('week');

            $table->unsignedBigInteger('against_1');
            $table->foreign('against_1')->references('id')->on('teams');

            $table->unsignedBigInteger('against_2');
            $table->foreign('against_2')->references('id')->on('teams');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cards');
    }
};
