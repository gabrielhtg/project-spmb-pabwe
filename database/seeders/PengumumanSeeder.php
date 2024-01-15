<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PengumumanSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('pengumuman')->insert([
            'kategoriPengumuman' => 'PMDK',
            'judulPengumuman' => 'Surat Rekomendasi PMDK 2023',
            'filePengumuman' => 'Surat_Rekomendasi_PMDK_2023.pdf',
            'tanggalPengumuman' => '2023-12-20',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
