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
        Schema::create('mbkm', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_kegiatan', 15)->nullable(true);
            $table->string('jumlah_sks', 25)->nullable(true);
            $table->string('potongan_spp', 10)->nullable(true);
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
        Schema::dropIfExists('mbkm');
    }
};
