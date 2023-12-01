<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class insert_social_media extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('social_media_institusi')->insert([
            [
                'nama' => 'Instagram',
                'link' => 'https://www.instagram.com/it.del/?hl=id',
                'icon' => '<i class="bi bi-instagram"></i>'
            ],
            [
                'nama' => 'Facebook',
                'link' => 'https://www.facebook.com/Institut.Teknologi.Del',
                'icon' => '<i class="bi bi-facebook"></i>'
            ]
        ]);
    }
}
