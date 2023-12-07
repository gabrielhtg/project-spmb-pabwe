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
            $table->string('jalur_pendaftaran');
            $table->text('desk_pers_umum');
            $table->string('created_by', 50);
            $table->string('updated_by', 50);
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
