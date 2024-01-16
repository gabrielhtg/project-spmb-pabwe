<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class add_lokasi_test extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('lokasi')->insert([
            'lokasiTes' => 'Institut Teknologi Del',
            'alamatLokasi' => 'JL.Sisingamangaraja, Sitoluama, Laguboti, Toba Samosir, Sumatera Utara, Indonesia.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
