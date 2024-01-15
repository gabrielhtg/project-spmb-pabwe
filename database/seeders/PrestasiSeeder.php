<?php

namespace Database\Seeders;

use App\Models\Prestasi;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PrestasiSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('prestasi')->insert([
            'jenis_prestasi' => 'Mahasiswa',
            'photo' => '1.jpg',
            'deskripsi' => 'Tiga mahasiswa Program Studi Manajemen Rekayasa berhasil lolos seleksi Magang Non Riset Merdeka Belajar Kampus Merdeka (MBKM) di Badan Riset dan Inovasi Nasional (BRIN) dengan topik Preferensi Harga Produk Dalam Negeri.',
            'judul_prestasi' =>   'Tiga mahasiswa Program Studi Manajemen Rekayasa berhasil lolos seleksi Magang Non Riset Merdeka Belajar Kampus Merdeka (MBKM) di Badan Riset dan Inovasi Nasional (BRIN) dengan topik Preferensi Harga Produk Dalam Negeri.',
        ]);
    }
}
