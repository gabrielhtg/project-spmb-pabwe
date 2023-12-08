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
            $table->foreign('kode_prodi')->references('kode_prodi')->on('majors');
            // $table->string('fakultas'); 
            // $table->foreign('fakultas')->references('kode_fakultas')->on('faculties');
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
