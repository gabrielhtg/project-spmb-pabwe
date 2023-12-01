<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJadwalTable extends Migration
{
    public function up()
    {
        Schema::create('jadwal', function (Blueprint $table) {
            $table->id('idJadwal');
            $table->bigInteger('idGelombang')->unsigned(); // Menggunakan tipe data yang sesuai
            $table->foreign('idGelombang')->references('idGelombang')->on('gelombang');
            $table->string('jenisUjian');
            $table->string('lokasiUjian');
            $table->dateTime('jadwalTest');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::table('jadwal', function (Blueprint $table) {
            $table->dropForeign(['idGelombang']);
        });

        Schema::dropIfExists('jadwal');
    }
}
