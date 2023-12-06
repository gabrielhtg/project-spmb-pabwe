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
        Schema::create('data_institusi', function (Blueprint $table) {
            $table->id();
            $table->string('nama_institusi', 30)->nullable(true);
            $table->string('singkatan_nama_institusi', 10)->nullable(true);
            $table->string('akreditasi', 1)->nullable(true);
            $table->string('jargon', 50)->nullable(true);
            $table->integer('jumlah_dosen')->nullable(true);
            $table->integer('jumlah_mahasiswa')->nullable(true);
            $table->integer('jumlah_alumni')->nullable(true);
            $table->string('logo_institusi', 100)->nullable(true);
            $table->string('sertifikat_akreditasi', 100)->nullable(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_institusi');
    }
};
