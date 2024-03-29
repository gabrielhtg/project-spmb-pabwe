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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('kode_prodi');
            $table->foreign('kode_prodi')->references('kode_prodi')->on('majors')->onDelete('cascade');
            $table->unsignedBigInteger('kode_fakultas');
            $table->foreign('kode_fakultas')->references('kode_fakultas')->on('majors')->onDelete('cascade');
            $table->string('nama');
            $table->string('nidn');
            $table->string('jabatan');
            $table->string('pendidikan');
            $table->string('gambar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
