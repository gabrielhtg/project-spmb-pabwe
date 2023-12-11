<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGelombangTable extends Migration
{
    public function up()
    {
        Schema::create('gelombang', function (Blueprint $table) {
            $table->id();
            $table->string('namaGelombang');
            $table->timestamps();
        });
    }

    public function down()
    {

        Schema::disableForeignKeyConstraints();

        Schema::dropIfExists('gelombang');

            Schema::enableForeignKeyConstraints();
    }
};
