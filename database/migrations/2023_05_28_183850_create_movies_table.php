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
        Schema::create('movies', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->primary();
            $table->unsignedBigInteger('hari_id');
            $table->unsignedBigInteger('jam_id');
            $table->string('judul');
            $table->text('sinopsis');
            $table->float('harga');
            $table->string('image')->nullable();
            $table->integer('durasi');
            $table->text('linktrailer');
            $table->timestamps();
            $table->foreign('hari_id')->references('id')->on('haris');
            $table->foreign('jam_id')->references('id')->on('jamtayangs');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movies');
    }
};
