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
        Schema::create('sub_jalur_pendaftaran', function (Blueprint $table) {
            $table->id();
            $table->string('title', 30)->nullable(true);
            $table->string('jalurPen', 10)->nullable(true);
            $table->string('deskripsi_jalur', 1500)->nullable(true);
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
        Schema::dropIfExists('sub_jalur_pendaftaran');
    }
};
