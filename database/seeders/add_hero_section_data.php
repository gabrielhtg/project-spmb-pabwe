<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class add_hero_section_data extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('hero_section')->insert([
            [
                'header' => 'Institut Teknologi Del',
                'paragraph' => 'Menjadi lembaga selangkah lebih depan dalam pengembangan talenta manusia yang memberikan kontribusi berarti pada inovasi teknologi dan keberlanjutan sosial',
                'bg_image' => '/assets/img/gambar-hero-2.jpg'
            ]
        ]);
    }
}
