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
        Schema::create('biaya_studi', function (Blueprint $table) {
            $table->id();
            $table->string('fakultas');
            $table->string('pro_stud');
            $table->string('biaya_spp');
            $table->string('uang_pengembangan');
            $table->string('uang_pangkal');
            $table->string('perlengkapan_mahasiswa');
            $table->string('perlengkapan_makan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('biaya_studi');
    }
};