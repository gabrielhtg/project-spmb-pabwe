<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class add_beasiswa extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('beasiswa')->insert([
            [
                'judul' => 'Beasiswa Prestasi Per Semester ( IPS )',
                'deskripsi' => 'Beasiswa IPS diberikan kepada mahasiswa dalam bentuk potongan SPP dengan aturan
                sebagai berikut :
                a. Beasiswa Prestasi Per Semester (IPS) diberikan bagi semua mahasiswa pada tingkat
                1, tingkat 2, tingkat 3 dan tingkat 4 kecuali mahasiswa pada semester terakhir masa
                studinya (semester 6 pada prodi DIII dan semester 8 pada prodi DIV dan S1).
                b. Mahasiswa penerima Beasiswa Prestasi harus memiliki perilaku terpuji dan dibuktikan dengan Nilai Perilaku minimal AB. ',
                'gambar' => 'assets/img/beasiswa/img/beasiswa.jpg',
                'file' => 'assets/img/beasiswa/pdf/beasiswa.pdf',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'judul' => 'Penghargaan ”Best Performance”',
                'deskripsi' => 'Penghargaan ”Best Performance”
                a. Penghargaan “Best Performance” adalah penghargaan yang diberikan kepada
                mahasiswa dengan kenaikan IPS paling tinggi antara IP semester ganjil dan IP
                semester genap pada tiap tahun ajaran.
                b. Penghargaan “Best Performance” diberikan kepada satu orang mahasiswa pada
                setiap angkatan (tingkat).',
                'gambar' => 'assets/img/beasiswa/img/beasiswa.jpg',
                'file' => 'assets/img/beasiswa/pdf/beasiswa.pdf',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'judul' => 'Beasiswa Potensi Cum Laude dan Cum Laude',
                'deskripsi' => 'Mahasiswa
                penerima Beasiswa Potensi Cum Laude harus memiliki perilaku terpuji dan dibuktikan
                dengan Nilai Perilaku minimal AB (aturan mengenai nilai perilaku akan dikeluarkan
                oleh bagian kemahasiswaan). Bagi mahasiswa yang sedang menerima beasiswa dari
                pihak lain tidak dapat menerima beasiswa Potensi Cum Laude',
                'gambar' => 'assets/img/beasiswa/img/beasiswa.jpg',
                'file' => 'assets/img/beasiswa/pdf/beasiswa.pdf',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'judul' => 'Penghargaan “Mahasiswa Teladan”',
                'deskripsi' => 'Mahasiswa yang mendapatkan predikat Mahasiswa Teladan akan mendapatkan Voucher
                Potongan SPP sebesar 100%. Mahasiswa penerima Penghargaan “Mahasiswa Teladan”
                harus memiliki perilaku terpuji dan dibuktikan dengan Nilai Perilaku minimal AB
                (aturan mengenai nilai perilaku akan dikeluarkan oleh bagian kemahasiswaan).',
                'gambar' => 'assets/img/beasiswa/img/beasiswa.jpg',
                'file' => 'assets/img/beasiswa/pdf/beasiswa.pdf',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'judul' => 'Penghargaan “Lulusan Terbaik”',
                'deskripsi' => 'Tiga lulusan yang meraih Indeks Prestasi Kumulatif (IPK) tertinggi dari setiap Program
                Studi pada setiap akhir tahun kelulusan akan mendapatkan penghargaan berupa bebas
                uang wisuda dan medali sebagai lulusan terbaik 1, 2, dan 3 dari masing-masing prodi
                berdasarkan IPK tertinggi di masing-masing prodi. Selain IPK lulusan juga harus
                memiliki perilaku terpuji dan dibuktikan dengan Nilai Perilaku minimal AB (aturan
                mengenai nilai perilaku akan dikeluarkan oleh bagian kemahasiswaan).',
                'gambar' => 'assets/img/beasiswa/img/beasiswa.jpg',
                'file' => 'assets/img/beasiswa/pdf/beasiswa.pdf',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}