<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class input_image_header_admisi extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('header_admisi')->insert([
            'letak_foto' => 'assets/img/admisi/header_admisi.jpg'
        ]);
    }
}
