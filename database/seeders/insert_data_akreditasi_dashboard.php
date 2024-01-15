<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class insert_data_akreditasi_dashboard extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('akreditasi_dashboard')->insert([
            'header' => 'Akreditasi Institusi',
            'description' => 'Institut Teknologi Del sekarang terakreditasi B sejak tahun 2018 hingga saat ini. Akreditasi ini diterbitkan oleh Ban-PT'
        ]);
    }
}
