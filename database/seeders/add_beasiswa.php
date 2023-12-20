<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class add_beasiswa extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('beasiswa')->insert([
            [
                'judul' => '',
                'deskripsi' => '',
                'gambar' => '',
                'file' => '',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'judul' => '',
                'deskripsi' => '',
                'gambar' => '',
                'file' => '',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'judul' => '',
                'deskripsi' => '',
                'gambar' => '',
                'file' => '',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'judul' => '',
                'deskripsi' => '',
                'gambar' => '',
                'file' => '',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
