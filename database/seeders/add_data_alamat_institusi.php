<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class add_data_alamat_institusi extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('alamat_institusi')->insert([
            'nama' => 'Kampus Laguboti',
            'alamat' => 'Jl. Sisingamangaraja, Sitoluama Laguboti, Toba Sumatera Utara, Indonesia'
        ]);
    }
}
