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
            $table->id('kode_prodi');
            $table->string('nama');
            $table->string('fakultas');
            $table->foreign('fakultas')->references('kode_fakultas')->on('faculties');
            $table->string('kaprodi');
            $table->foreign('kaprodi')->references('id')->on('employees');
            $table->text('deskripsi');
            $table->string('gambar');
            $table->text('visi');
            $table->text('misi');
            $table->string('prospek');
            $table->string('gelar');
            $table->string('lama');
            $table->string('biaya');
            $table->text('syarat');
            $table->text('lokasi');
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
