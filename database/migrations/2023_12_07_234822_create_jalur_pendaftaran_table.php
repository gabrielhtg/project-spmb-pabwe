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
        Schema::create('jalur_pendaftaran', function (Blueprint $table) {
            $table->id();
            $table->string('jalurPendaftaran');
            $table->text('desk_pers_umum');
            $table->string('created by');
            $table->string('created at');
            $table->string('updated by');
            $table->string('updated at');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jalur_pendaftaran');
    }
};
