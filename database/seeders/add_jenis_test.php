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
            'gelombang' => 'PMDK',
            'jenisUjian' => 'Seleksi Administrasi + Ujian Psikotes',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
