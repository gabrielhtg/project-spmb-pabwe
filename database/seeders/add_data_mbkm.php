<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class add_data_mbkm extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mbkm')->insert([
            'jenis_kegiatan' => 'Non Kompetisi',
            'jumlah_sks' => '2 - 10 SKS',
            'potongan_spp' => '10%',
            'created_by' => 'admin',
            'updated_by' => 'admin',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
