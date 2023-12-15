<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('majors', function (Blueprint $table) {
            $table->text('deskripsi')->change(); // Ubah tipe menjadi teks
            $table->text('misi')->change(); // Ubah tipe menjadi teks
            $table->text('visi')->change(); // Ubah tipe menjadi teks
            $table->text('prospek')->change(); // Ubah tipe menjadi teks
            $table->text('syarat')->change(); // Ubah tipe menjadi teks
            // $table->dropUnique(['kode_fakultas']);
        });
    }

    public function down()
    {
        Schema::table('majors', function (Blueprint $table) {
            $table->string('deskripsi')->change(); // Kembalikan tipe menjadi string jika perlu
            $table->string('misi')->change(); // Kembalikan tipe menjadi string jika perlu
            $table->string('visi')->change(); // Kembalikan tipe menjadi string jika perlu
            $table->string('prospek')->change(); // Kembalikan tipe menjadi string jika perlu
            $table->string('syarat')->change(); // Kembalikan tipe menjadi string jika perlu
            // $table->unique(['kode_fakultas']);
        });
    }
};
