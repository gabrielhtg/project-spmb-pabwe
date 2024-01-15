<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class add_pedoman_pendaftaran extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pedoman_pendaftaran')->insert([
            'PedomanPendaftaran'=>'dokumenkel4/pedoman_pendaftaran.pdf'
        ]);
    }
}
