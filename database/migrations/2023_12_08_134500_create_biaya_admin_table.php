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
        Schema::create('biaya_admin', function (Blueprint $table) {
            $table->id();
            $table->integer('biayaasrama');
            $table->integer('biayamakan');
            $table->integer('biayawisuda');
            $table->integer('biayadeposit');
            $table->integer('biayatingkatakhir');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('biaya_admin');
    }
};
