<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class add_infografis_admisi extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('infografis_admisi')->insert([
            [
                'gambar' => 'assets/img/flow-pendaftaran-pmdk.jpg',
                'jalur' => 'PMDK',
                'nomor_urut' => 1
            ],
            [
                'gambar' => 'assets/img/panduan-daftar-ulang.jpg',
                'jalur' => 'PMDK',
                'nomor_urut' => 2
            ],
            [
                'gambar' => 'assets/img/jalur-seleksi-penerimaan.jpg',
                'jalur' => 'PMDK',
                'nomor_urut' => 3
            ],
            [
                'gambar' => 'assets/img/flow-pendaftaran-usm.jpg',
                'jalur' => 'USM',
                'nomor_urut' => 1
            ],
            [
                'gambar' => 'assets/img/panduan-daftar-ulang.jpg',
                'jalur' => 'USM',
                'nomor_urut' => 2
            ],
            [
                'gambar' => 'assets/img/jalur-seleksi-penerimaan.jpg',
                'jalur' => 'USM',
                'nomor_urut' => 3
            ],
            [
                'gambar' => 'assets/img/flow-pendaftaran-utbk.jpg',
                'jalur' => 'UTBK',
                'nomor_urut' => 1
            ],
            [
                'gambar' => 'assets/img/panduan-daftar-ulang.jpg',
                'jalur' => 'UTBK',
                'nomor_urut' => 2
            ],
            [
                'gambar' => 'assets/img/jalur-seleksi-penerimaan.jpg',
                'jalur' => 'UTBK',
                'nomor_urut' => 3
            ],
        ]);
    }
}
