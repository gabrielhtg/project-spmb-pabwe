<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class add_jenis_test extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('jenis')->insert([
            [
                'gelombang' => 'PMDK',
                'jenisUjian' => 'Nilai Rapor + Wawancara + Psikotes',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'gelombang' => 'USM 1',
                'jenisUjian' => 'Tes Akademik + Psikotes',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'gelombang' => 'USM 2',
                'jenisUjian' => 'Tes Akademik + Psikotes',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'gelombang' => 'USM 3',
                'jenisUjian' => 'Tes Akademik + Psikotes',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'gelombang' => 'UTBK',
                'jenisUjian' => 'Nilai UTBK+ Psikotes',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
