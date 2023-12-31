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
        Schema::create('alamat_institusi', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 50);
            $table->string('alamat', 150);
            $table->string('created_by', 20);
            $table->string('updated_by', 20)->nullable(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alamat_institusi');
    }
};
