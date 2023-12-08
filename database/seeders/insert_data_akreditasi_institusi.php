<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class insert_data_akreditasi_institusi extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('akreditasi_institusi')->insert([
            'akreditasi' => 'B',
            'lembaga_akreditasi' => 'BAN-PT',
            'tahun_akreditasi' => 2018,
            'created_by' => 'admin',
            'updated_by' => 'admin',
        ]);
    }
}
