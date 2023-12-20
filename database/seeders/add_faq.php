<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class add_faq extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('faq')->insert([
            [
                'kategori' => '',
                'pertanyaan' => '',
                'jawaban' => '',
                'created_at' => '',
                'updated_at' => ''
            ],
            [
                'kategori' => '',
                'pertanyaan' => '',
                'jawaban' => '',
                'created_at' => '',
                'updated_at' => ''
            ],
            [
                'kategori' => '',
                'pertanyaan' => '',
                'jawaban' => '',
                'created_at' => '',
                'updated_at' => ''
            ],
            [
                'kategori' => '',
                'pertanyaan' => '',
                'jawaban' => '',
                'created_at' => '',
                'updated_at' => ''
            ],
            [
                'kategori' => '',
                'pertanyaan' => '',
                'jawaban' => '',
                'created_at' => '',
                'updated_at' => ''
            ],
            [
                'kategori' => '',
                'pertanyaan' => '',
                'jawaban' => '',
                'created_at' => '',
                'updated_at' => ''
            ],
            
        ]);
    }
}
