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
        Schema::create('dropdown_admisi', function (Blueprint $table) {
            $table->id();
            $table->string('judul', 500)->nullable(true);
            $table->text('isi')->nullable(true);
            $table->string('jalur')->nullable(true);
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
        Schema::dropIfExists('dropdown_admisi');
    }
};
