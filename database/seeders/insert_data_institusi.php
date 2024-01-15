<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class insert_data_institusi extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('data_institusi')->insert([
            'nama_institusi' => 'Institut Teknologi Del',
            'singkatan_nama_institusi' => 'IT Del',
            'akreditasi' => 'B',
            'jargon' => 'MarTuhan, MarRoha, MarBisuk',
            'jumlah_dosen' => 86,
            'jumlah_mahasiswa' => 1568,
            'jumlah_alumni' => 3121,
            'logo_institusi' => '/assets/img/Logo Institut Teknologi Del.png'
        ]);
    }
}
