<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class add_biaya_studi extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('biaya_studi')->insert([
            [
                'fakultas'=> 'Fakultas Vokasi',
                'pro_stud'=>'Teknologi Informasi (DIII)',
                'biaya_spp'=>'5500000.000',
                'uang_pengembangan'=>'6500000.000',
                'uang_pangkal'=>'4500000.000',
                'perlengkapan_mahasiswa'=>'850000.000',
                'perlengkapan_makan'=>'250000.000',
            ],
            [
                'fakultas'=> 'Fakultas Vokasi',
                'pro_stud'=>'Teknologi Komputer (DIII)',
                'biaya_spp'=>'5500000.000',
                'uang_pengembangan'=>'6500000.000',
                'uang_pangkal'=>'4500000.000',
                'perlengkapan_mahasiswa'=>'850000.000',
                'perlengkapan_makan'=>'250000.000',
            ],
            [
                'fakultas'=> 'Fakultas Vokasi',
                'pro_stud'=>'Teknologi Rekayasa Perangkat Lunak (DIV)',
                'biaya_spp'=>'6500000.000',
                'uang_pengembangan'=>'9500000.000',
                'uang_pangkal'=>'4500000.000',
                'perlengkapan_mahasiswa'=>'850000.000',
                'perlengkapan_makan'=>'250000.000',
            ],
            [
                'fakultas'=> 'Fakultas Informatika dan Teknik Elektro',
                'pro_stud'=>'Informatika (S1)',
                'biaya_spp'=>'6500000.000',
                'uang_pengembangan'=>'9500000.000',
                'uang_pangkal'=>'4500000.000',
                'perlengkapan_mahasiswa'=>'850000.000',
                'perlengkapan_makan'=>'250000.000',
            ],
            [
                'fakultas'=> 'Fakultas Informatika dan Teknik Elektro',
                'pro_stud'=>'Sistem Informasi (S1)',
                'biaya_spp'=>'6500000.000',
                'uang_pengembangan'=>'9500000.000',
                'uang_pangkal'=>'4500000.000',
                'perlengkapan_mahasiswa'=>'850000.000',
                'perlengkapan_makan'=>'250000.000',
            ],
            [
                'fakultas'=> 'Fakultas Informatika dan Teknik Elektro',
                'pro_stud'=>'Teknik Elektro (S1)',
                'biaya_spp'=>'6500000.000',
                'uang_pengembangan'=>'9500000.000',
                'uang_pangkal'=>'4500000.000',
                'perlengkapan_mahasiswa'=>'850000.000',
                'perlengkapan_makan'=>'250000.000',
            ],
            [
                'fakultas'=> 'Fakultas Teknologi Industri',
                'pro_stud'=>'Managemen Rekayasa (S1)',
                'biaya_spp'=>'6500000.000',
                'uang_pengembangan'=>'9500000.000',
                'uang_pangkal'=>'4500000.000',
                'perlengkapan_mahasiswa'=>'850000.000',
                'perlengkapan_makan'=>'250000.000',
            ],
            [
                'fakultas'=> 'Fakultas Teknologi Industri',
                'pro_stud'=>'Teknik Metalurgi (S1)',
                'biaya_spp'=>'6500000.000',
                'uang_pengembangan'=>'9500000.000',
                'uang_pangkal'=>'4500000.000',
                'perlengkapan_mahasiswa'=>'850000.000',
                'perlengkapan_makan'=>'250000.000',
            ],
            [
                'fakultas'=> 'Fakultas Bioteknologi',
                'pro_stud'=>'Teknik Bioproses (S1)',
                'biaya_spp'=>'7000000.000',
                'uang_pengembangan'=>'9500000.000',
                'uang_pangkal'=>'4500000.000',
                'perlengkapan_mahasiswa'=>'850000.000',
                'perlengkapan_makan'=>'250000.000',
            ],
        ]);
    }
}
