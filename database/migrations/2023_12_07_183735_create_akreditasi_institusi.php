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
        Schema::create('akreditasi_institusi', function (Blueprint $table) {
            $table->id();
            $table->string('akreditasi', 6)->nullable(true);
            $table->string('lembaga_akreditasi', 10)->nullable(true);
            $table->string('sertifikat_akreditasi', 100)->nullable(true);
            $table->integer('tahun_akreditasi')->nullable(true);
            $table->string('created_by', 20)->nullable(true);
            $table->string('updated_by', 20)->nullable(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('akreditasi_institusi');
    }
};
