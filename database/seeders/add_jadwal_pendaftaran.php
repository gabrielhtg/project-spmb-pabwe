<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class add_jadwal_pendaftaran extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('jadwal_pendaftaran')->insert([
          [
            'jenis_jalur'=>'PMDK',
            'tanggal_pendaftaran'=>'22 Desember 2023 - 14 Januari 2024',
            'created_by'=>'admin',
            'updated_by'=>'admin',
          ],
          [
            'jenis_jalur'=>'JPS (New)',
            'tanggal_pendaftaran'=>'13 Januari 2024 - 04 Februari 2024',
            'created_by'=>'admin',
            'updated_by'=>'admin',
          ],
          [
            'jenis_jalur'=>'USM 1',
            'tanggal_pendaftaran'=>'11 Januari 2024 - 07 Maret 2024',
            'created_by'=>'admin',
            'updated_by'=>'admin',
          ],
          [
            'jenis_jalur'=>'USM 2',
            'tanggal_pendaftaran'=>'18 Maret 2024 - 08 Mei 2024',
            'created_by'=>'admin',
            'updated_by'=>'admin',
          ],
          [
            'jenis_jalur'=>'USM 3',
            'tanggal_pendaftaran'=>'10 Mei 2024 - 06 Juni 2024',
            'created_by'=>'admin',
            'updated_by'=>'admin',
          ],
          [
            'jenis_jalur'=>'PMDK',
            'tanggal_pendaftaran'=>'10 Juni 2024 - 04 Juli 2024',
            'created_by'=>'admin',
            'updated_by'=>'admin',
          ],
        ]);
    }
}
