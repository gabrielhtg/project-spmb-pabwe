<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FacultySeeder extends Seeder
{
    public function run(): void
    {
        DB::table('faculties')->insert([
            'nama' => 'Fakultas Informatika dan Teknik Elektro',
            'deskripsi' => 'Fakultas Teknik Informatika dan Elektro (FITE) IT Del berdiri pada tahun 2013 seiring dengan perubahan Politeknik Informatika Del (PI Del) menjadi IT Del.',
            'visi' => 'Menjadi Fakultas Pembelajar yang unggul di bidang Informatika dan Teknik  Elektro pada tahun 2018 di tingkat nasional.',
            'misi' =>   '<ol>
                        <li>Mengembangkan, menciptakan, dan menyebarkan ilmu pengetahuan dan teknologi secara khusus di bidang Informatika dan Teknik Elektro.</li>
                        <li>Meningkatkan peranan Fakultas agar mampu menjadi pembaru kemampuan, keterampilan pilihan rujukan, dan pengembangan rekayasa karya masyarakat, khususnya dalam bidang Informatika dan Teknik Elektro.</li>
                        <li>Meningkatkan peran nyata Fakultas kepada masyarakat melalui penerapan Tridarma Perguruan Tinggi secara khusus di bidang Informatika dan Teknik Elektro.</li>
                    </ol>',
            'gambar' => 'fite-carousel.jpg',
            'lokasi' => 'Jl. PI.Del, Gedung VII, Laguboti, Toba, Sumatera Utara'
        ]);
        
        DB::table('faculties')->insert([
            'nama' => 'Fakultas Teknologi Industri',
            'deskripsi' => 'Fakultas Teknologi Industri (FTI) adalah salah satu Fakultas yang ada di IT Del. Fakultas ini sudah ada sejak  tahun 2013. Program studi yang ada di Fakultas ini yakni Sarjana Manajemen Rekayasa. Dekan dari Fakultas ini adalah Bapak Dr. Yosef Barita Sar Manik, S.T, M.Sc, beliau adalah lulusan dari Harvard University.',
            'gambar' => 'fti-carousel.jpg',
            'lokasi' => 'Jl. PI.Del, Gedung IX, Laguboti, Toba, Sumatera Utara',
            'visi' => 'Belum ada Visi Fakultas',
            'misi' =>   'Belum ada Misi Fakultas',
        ]);

        DB::table('faculties')->insert([
            'nama' => 'Fakultas Bioteknologi',
            'deskripsi' => 'Teknik Bioproses adalah cabang ilmu teknik, yang menggarap proses‐proses konversi biomasa tumbuhan, hewan atau mikroorganisme, melalui reaksi biokimia dengan memanfaatkan biokatalis atau enzim, menjadi bahan lain yang dipandang lebih bernilai, seperti makanan, pakan ternak, obat-obatan, bahan kimia, polimer, atau bioenergi, yang dilaksanakan pada skala industri.',
            'visi' => 'Menjadi Fakultas Pembelajar yang unggul di bidang Informatika dan Teknik  Elektro pada tahun 2018 di tingkat nasional.',
            'misi' =>   '<ol>
                        <li>Menyelenggarakan dan mengembangkan proses pendidikan yang unggul, berkesinambungan, dan bermanfaat bagi masyarakat.</li>
                        <li>Mengembangkan, menciptakan, dan menyebarkan ilmu pengetahuan dan teknologi khususnya Teknik Bioproses.</li>
                        <li>Meningkatkan peranan program studi agar mampu menjadi pembaharu dalam kemampuan, keterampilan pilihan rujukan, dan pengembangan rekayasa karya masyarakat, khususnya dalam bidang ilmu pengetahuan dan teknologi khususnya Teknik Bioproses.</li>
                        <li>Meningkatkan peran nyata kepada masyarakat melalui penerapan tridarma perguruan tinggi.</li>
                        <li>Menjadikan program studi Teknik Bioproses sebagai program studi yang memiliki sistem pengelolaan yang baik, efisien, dan produktif.</li>
                    </ol>',
            'gambar' => 'fb-carousel.jpg',
            'lokasi' => 'Jl. PI.Del, Gedung VIII, Laguboti, Toba, Sumatera Utara'
        ]);

        DB::table('faculties')->insert([
            'nama' => 'Fakultas Vokasi',
            'deskripsi' => 'Pendidikan vokasi merupakan jenjang pendidikan pertama di Institut Teknologi Del sejak berdiri pada tahun 2001 (dahulu bernama Politeknik Informatika Del). Vokasi merupakan pendidikan tinggi dengan fokus pada praktik kerja yang dapat menunjang keahlian di bidang studi tertentu. Program vokasi bertujuan mempersiapkan lulusannya menjadi tenaga yang siap kerja dan mampu bersaing secara global di Dunia Usaha dan Dunia Industri (DUDI).

            Fakultas Vokasi Institut Teknologi Del Di Institut Teknologi Del memiliki 3 program studi pada jenjang Diploma 3 (D3) dan Diploma 4 (D4):
            1. D4 (Sarjana Terapan) Teknologi Rekayasa Perangkat Lunak
            2. D3 Teknologi Informasi
            3. D3 Teknologi Komputer
            
            Ketiga program studi vokasi di IT Del telah terakreditasi B dari BAN-PT.
            
            Beberapa keunggulan dari pendidikan vokasi adalah: belajar di program studi yang spesifik, belajar sesuai minat dan profesi yang diinginkan, siap kerja karena dibekali kemampuan praktik yang tinggi, sehingga lulusan pendidikan vokasi banyak dibutuhkan perusahaan.',
            'visi' => 'Menjadi lembaga pendidikan vokasi yang unggul dan berperan dalam pengembangan dan pemanfaatan teknologi yang mengintegrasikan dunia pendidikan dengan kebutuhan dunia usaha dan dunia industri akan tenaga profesional informatika dan komputer yang mampu bersaing secara global.',
            'misi' =>   '• Menyelenggarakan proses pendidikan vokasi yang unggul, berkesinambungan dan bermanfaat bagi masyarakat dalam lingkungan pendidikan yang kondusif, didukung dengan tenaga pendidik yang memiliki kompetensi pada bidang informatika dan komputer, serta melibatkan dunia usaha dan dunia industri dalam pengembangan kemampuan peserta didik.
                        • Melaksanakan kegiatan penelitian untuk mengembangkan, menciptakan dan menyebarkan ilmu pengetahuan dan teknologi terapan pada bidang informatika dan komputer.
                        • Melaksanakan kegiatan penelitian untuk mengembangkan, menciptakan dan menyebarkan ilmu pengetahuan dan teknologi terapan pada bidang informatika dan komputer.',
            'gambar' => 'fv-carousel.jpg',
            'lokasi' => 'Jl. PI.Del, Gedung V, Laguboti, Toba, Sumatera Utara'
        ]);

    }
}