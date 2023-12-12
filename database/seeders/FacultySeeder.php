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
            'kode_fakultas' => 1,
            'deskripsi' => 'Fakultas Teknik Informatika dan Elektro (FITE) IT Del berdiri pada tahun 2013 seiring dengan perubahan Politeknik Informatika Del (PI Del) menjadi IT Del.',
            'visi' => 'Menjadi Fakultas Pembelajar yang unggul di bidang Informatika dan Teknik  Elektro pada tahun 2018 di tingkat nasional.',
            'misi' =>   '1. Menyelenggarakan dan mengembangkan proses pendidikan di bidang
                        Informatika dan Teknik Elektro yang unggul, berkesinambungan, dan bermanfaat bagi
                        masyarakat.
                        2. Mengembangkan, menciptakan, dan menyebarkan ilmu pengetahuan dan teknologi
                        secara khusus di bidang Informatika dan Teknik Elektro.
                        3. Meningkatkan peranan Fakultas agar mampu menjadi pembaru kemampuan,
                        keterampilan pilihan rujukan, dan pengembangan rekayasa karya masyarakat,
                        khususnya dalam bidang Informatika dan Teknik Elektro.
                        4. Meningkatkan peran nyata Fakultas kepada masyarakat melalui penerapan Tridarma
                        Perguruan Tinggi secara khusus di bidang Informatika dan Teknik Elektro',
            'gambar' => 'fite-carousel.jpg',
            'lokasi' => 'Jl. PI.Del, Gedung VII, Laguboti, Toba, Sumatera Utara'
        ]);
        
        DB::table('faculties')->insert([
            'nama' => 'Fakultas Teknologi Industri',
            'kode_fakultas' => 2,
            'deskripsi' => 'Manajemen Rekayasa (Engineering Management) adalah penggabungan dari keilmuan teknik/rekayasa (engineering) dengan ilmu manajemen yang diaplikasikan untuk menyelesaikan persoalan-persoalan dalam suatu sistem kompleks.  Aspek keilmuan teknik (engineering) dari Manajemen Rekayasa terlihat melalui  penerapan matematika dan ilmu pengetahuan alam yang diperoleh melalui pembelajaran, pengalaman, dan praktek empiris untuk menemukan cara-cara yang optimal dalam memanfaatkan material dan sumber daya lain dalam mengembangkan teknologi. Aspek keilmuan manajemen dari Manajemen Rekayasa muncul dalam penerapan ilmu-ilmu pendukung keputusan yang dapat diaplikasikan dalam aktivitas-aktivitas pengembangan organisasi dalam mencapai tujuannya, yang diperoleh melalui pembelajaran dan praktek empiris dalam ilmu perilaku organisasi, analisa finansial, manajemen sumber daya manusia, dan analisa keputusan.',
            'visi' => 'Menjadi Fakultas Pembelajar yang unggul di bidang Informatika dan Teknik  Elektro pada tahun 2018 di tingkat nasional.',
            'misi' =>   '1. Menyelenggarakan dan mengembangkan proses pendidikan di bidang
                        Informatika dan Teknik Elektro yang unggul, berkesinambungan, dan bermanfaat bagi
                        masyarakat.
                        2. Mengembangkan, menciptakan, dan menyebarkan ilmu pengetahuan dan teknologi
                        secara khusus di bidang Informatika dan Teknik Elektro.
                        3. Meningkatkan peranan Fakultas agar mampu menjadi pembaru kemampuan,
                        keterampilan pilihan rujukan, dan pengembangan rekayasa karya masyarakat,
                        khususnya dalam bidang Informatika dan Teknik Elektro.
                        4. Meningkatkan peran nyata Fakultas kepada masyarakat melalui penerapan Tridarma
                        Perguruan Tinggi secara khusus di bidang Informatika dan Teknik Elektro',
            'gambar' => 'fti-carousel.jpg',
            'lokasi' => 'Jl. PI.Del, Gedung IX, Laguboti, Toba, Sumatera Utara'
        ]);

        DB::table('faculties')->insert([
            'nama' => 'Fakultas Bioteknologi',
            'kode_fakultas' => 3,
            'deskripsi' => 'Teknik Bioproses adalah cabang ilmu teknik, yang menggarap proses‐proses konversi biomasa tumbuhan, hewan atau mikroorganisme, melalui reaksi biokimia dengan memanfaatkan biokatalis atau enzim, menjadi bahan lain yang dipandang lebih bernilai, seperti makanan, pakan ternak, obat-obatan, bahan kimia, polimer, atau bioenergi, yang dilaksanakan pada skala industri.',
            'visi' => 'Menjadi Fakultas Pembelajar yang unggul di bidang Informatika dan Teknik  Elektro pada tahun 2018 di tingkat nasional.',
            'misi' =>   '• Menyelenggarakan dan mengembangkan proses pendidikan yang unggul, berkesinambungan dan bermanfaat bagi masyarakat.
                        • Mengembangkan, menciptakan, dan menyebarkan ilmu pengetahuan dan teknologi khususnya Teknik Bioproses.
                        • Meningkatkan peranan program studi adar mampu menjadi pembaharu dalam kemampuan, keterampilan pilihan rujukan, dan pengembangan rekayasa karya masyarakat, khususnya dalam bidang ilmu pengetahuan dan teknologi khususnya Teknik Bioproses.
                        • Meningkatkan peran nyata kepada masyarakat melalui penerapan tridarma perguruan tinggi.
                        • Menjadikan program studi Teknik Bioproses sebagai program studi yang memiliki sistem pengelolaan yang baik, efisien, dan produktif.',
            'gambar' => 'fb-carousel.jpg',
            'lokasi' => 'Jl. PI.Del, Gedung VIII, Laguboti, Toba, Sumatera Utara'
        ]);

        DB::table('faculties')->insert([
            'nama' => 'Fakultas Vokasi',
            'kode_fakultas' => 4,
            'deskripsi' => 'Pendidikan vokasi merupakan jenjang pendidikan pertama di Institut Teknologi Del sejak berdiri pada tahun 2001 (dahulu bernama Politeknik Informatika Del). Vokasi merupakan pendidikan tinggi dengan fokus pada praktik kerja yang dapat menunjang keahlian di bidang studi tertentu. Program vokasi bertujuan mempersiapkan lulusannya menjadi tenaga yang siap kerja dan mampu bersaing secara global di Dunia Usaha dan Dunia Industri (DUDI).',
            'visi' => 'Menjadi Fakultas Pembelajar yang unggul di bidang Informatika dan Teknik  Elektro pada tahun 2018 di tingkat nasional.',
            'misi' =>   '• Menyelenggarakan dan mengembangkan proses pendidikan yang unggul, berkesinambungan dan bermanfaat bagi masyarakat.
                        • Mengembangkan, menciptakan, dan menyebarkan ilmu pengetahuan dan teknologi khususnya Teknik Bioproses.
                        • Meningkatkan peranan program studi adar mampu menjadi pembaharu dalam kemampuan, keterampilan pilihan rujukan, dan pengembangan rekayasa karya masyarakat, khususnya dalam bidang ilmu pengetahuan dan teknologi khususnya Teknik Bioproses.
                        • Meningkatkan peran nyata kepada masyarakat melalui penerapan tridarma perguruan tinggi.
                        • Menjadikan program studi Teknik Bioproses sebagai program studi yang memiliki sistem pengelolaan yang baik, efisien, dan produktif.',
            'gambar' => 'fv-carousel.jpg',
            'lokasi' => 'Jl. PI.Del, Gedung V, Laguboti, Toba, Sumatera Utara'
        ]);

    }
}
