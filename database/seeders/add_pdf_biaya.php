<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class add_pdf_biaya extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pdf_biaya_pendaftaran')->insert([
            [
                'PdfbiayaPendaftaran' => 'dokumentkel4/Biaya_Pendidikan_Final.pdf',
            ]
        ]);
    }
}
