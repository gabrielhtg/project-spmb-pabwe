<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BeasiswaController extends Controller
{
    public function index()
    {
        $beasiswa = [
            [
                'title' => 'Beasiswa Prestasi Per Semester (IPS)',
                'description' => 'Beasiswa IPS diberikan kepada mahasiswa dalam bentuk potongan SPP dengan aturan sebagai berikut: a. Beasiswa Prestasi Per Semester (IPS) diberikan bagi semua mahasiswa pada tingkat 1, tingkat 2, tingkat 3, dan tingkat 4 kecuali mahasiswa pada semester terakhir masa studinya (semester 6 pada prodi DIII dan semester 8 pada prodi DIV dan S1). ',
                'pdf_url' => '/assets/pdf/beasiswa.pdf',
                'image_url' => '/assets/img/beasiswa/b1.png',
            ],
            [
                'title' => 'Penghargaan ”Best Performance”',
                'description' => 'Penghargaan “Best Performance” adalah penghargaan yang diberikan kepada
                mahasiswa dengan kenaikan IPS paling tinggi antara IP semester ganjil dan IP
                semester genap pada tiap tahun ajaran. Penghargaan “Best Performance” diberikan kepada satu orang mahasiswa pada
                setiap angkatan (tingkat).',
                'pdf_url' => '/assets/pdf/beasiswa.pdf',
                'image_url' => '/assets/img/beasiswa/b2.jpg', 
            ],
            // Tambahkan data beasiswa
        ];

        return view('beasiswa.beasiswa', compact('beasiswa'));
    }
}
