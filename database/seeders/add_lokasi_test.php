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
            [
                'lokasiTes' => 'Kampus Institut Teknologi Del',
                'alamatLokasi' => 'Jl. Sisingamangaraja, Sitoluama Laguboti, Toba Samosir Sumatera Utara',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'lokasiTes' => 'Medan',
                'alamatLokasi' => 'Kampus Universitas HKBP Nommensen (Medan), Jl. Perintis Kemerdekaan No.23, Perintis, Medan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'lokasiTes' => 'Jakarta',
                'alamatLokasi' => 'Sopo Del Office Towers & Lifestyle Tower A Lt.9, Jl. Mega Kuningan Barat III Lot 10.1-6, Jakarta Selatan 12950, No.tlp : 021 - 5080 6565',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            
        ]);
    }
}
