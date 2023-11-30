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
        Schema::create('faculties', function (Blueprint $table) {
            $table->id('kode_fakultas');
            $table->string('nama');
            $table->string('dekan');
            $table->foreign('dekan')->references('id')->on('employees');
            $table->string('deskripsi');
            $table->string('gambar');
            $table->string('lokasi');
            $table->string('visi');
            $table->string('misi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('faculties');
    }
};
