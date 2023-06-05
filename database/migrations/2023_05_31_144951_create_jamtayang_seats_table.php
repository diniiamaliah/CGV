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
        Schema::create('jamtayang_seats', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('jam_id');
            $table->unsignedBigInteger('hari_id');
            $table->unsignedBigInteger('movies_id');
     
            $table->timestamps();
            $table->foreign('jam_id')->references('id')->on('jamtayangs');
            $table->foreign('movies_id')->references('id')->on('movies');
            $table->foreign('hari_id')->references('id')->on('haris');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jamtayang_seats');
    }
};
