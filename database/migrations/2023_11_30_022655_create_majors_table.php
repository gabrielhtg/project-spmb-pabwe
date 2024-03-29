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
        Schema::create('majors', function (Blueprint $table) {
            $table->id();
            $table->string('kode_prodi')->unique();
            $table->string('nama');
            $table->unsignedBigInteger('kode_fakultas');
            $table->foreign('kode_fakultas')->references('id')->on('faculties')->onDelete('cascade');
            $table->text('deskripsi');
            $table->string('gambar');
            $table->text('visi');
            $table->text('misi');
            $table->text('prospek');
            $table->string('gelar');
            $table->string('lama');
            $table->string('biaya');
            $table->text('syarat');
            $table->string('lokasi');
            $table->string('akreditasi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('majors');
    }
};
