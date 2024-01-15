<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class add_data_jadwal_ujian extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('jadwal_ujian')->insert([
            [
                'jalur_ujian'=>'PMDK',
                'tahun_akademik'=>'2024/2025',
                'deskripsi'=>'
                <ul>
                    <li>Pengumuman Administrasi: 17 Januari 2024</li>
                    <li>Tes Wawancara: 20 Januari 2024</li>
                    <li>Pengumuman tes wawancara: 31 Januari 2024</li>
                    <li>Tes Psikotes: 03 Februari 2024</li>
                    <li>Pengumuman kelulusan akhir: 14 Februari 2024</li>
                    <li>Daftar Ulang: 21 - 23 Februari 2024</li>
                </ul>
                ',
                'created_by'=>'admin',
                'updated_by'=>'admin'
            ],
            [
                'jalur_ujian'=>'USM1',
                'tahun_akademik'=>'2024/2025',
                'deskripsi'=>'
                <ul>
                    <li>Pengumuman Hasil Administrasi : 08 Maret 2024</li>
                    <li>Tes Akademik (Matematika-B.Inggris-TPA) : 09 Maret 2024</li>
                    <li>Pengumuman Hasil Tes Akademik : 18 Maret 2024</li>
                    <li>Tes Psikotes : 23 Maret 2024</li>
                    <li>Pengumuman Kelulusan Akhir : 15 Maret 2024</li>
                    <li>Daftar Ulang : 15 - 19 Maret 2024</li>
                </ul>
                ',
                'created_by'=>'admin',
                'updated_by'=>'admin'
            ],
            [
                'jalur_ujian'=>'USM2',
                'tahun_akademik'=>'2024/2025',
                'deskripsi'=>'
                <ul>
                    <li>Pengumuman Hasil Administrasi : 10 Mei 2024</li>
                    <li>Tes Akademik (Matematika-B.Inggris-TPA) : 11 Mei 2024</li>
                    <li>Pengumuman Hasil Tes Akademik : 11 Mei 2024</li>
                    <li>Tes Psikotes : 25 Mei 2024</li>
                    <li>Pengumuman Kelulusan Akhir : 11-12 Juni 2024</li>
                    <li>Daftar Ulang : 13 - 21 Juni 2024</li>
                </ul>
                ',
                'created_by'=>'admin',
                'updated_by'=>'admin'
            ],
            [
                'jalur_ujian'=>'USM 3',
                'tahun_akademik'=>'2024/2025',
                'deskripsi'=>'
                <ul>
                    <li>Tes Akademik (Matematika-B.Inggris-TPA) : 08 Juni 2024</li>
                    <li>Pengumuman Hasil Tes Akademik : 14 Juni 2024</li>
                    <li>Tes Psikotes : 22 Juni 2024</li>
                    <li>Pengumuman Kelulusan Akhir : 03 Juli 2024</li>
                    <li>Pengisian Dokumen Daftar Ulang: 05 - 07 Juli 2024</li>
                    <li>Daftar Ulang : 08 - 12 Juli 2024</li>
                </ul>
                ',
                'created_by'=>'admin',
                'updated_by'=>'admin'
            ],
            [
                'jalur_ujian'=>'UTBK',
                'tahun_akademik'=>'2024/2025',
                'deskripsi'=>'
                <ul>
                    <li>Pengumuman Hasil Administrasi : 08 Juli 2024</li>
                    <li>Tes Psikotes : 10 Juli 2024</li>
                    <li>Pengumuman Kelulusan Akhir : 19 Juli 2024</li>
                    <li>Pengisian Dokumen Daftar Ulang: 19 - 21 Juli 2024</li>
                    <li>Daftar Ulang : 22 - 26 Juli 2024</li>
                </ul>
                ',
                'created_by'=>'admin',
                'updated_by'=>'admin'
            ],
            [
                'jalur_ujian'=>'JPS',
                'tahun_akademik'=>'2024/2025',
                'deskripsi'=>'
                <ul>
                    <li>Pengumuman Administrasi: 07 Februari 2024</li>
                    <li>Tes Wawancara: 10 Februari 2024</li>
                    <li>Pengumuman tes wawancara: 21 Februari 2024</li>
                    <li>Tes Psikotes: 24 Februari 2024</li>
                    <li>Pengumuman kelulusan akhir: 07 Maret 2024</li>
                    <li>Daftar Ulang: 13 - 15 Maret 2024</li>
                </ul>
                ',
                'created_by'=>'admin',
                'updated_by'=>'admin'
            ],

        ]);
    }
}
