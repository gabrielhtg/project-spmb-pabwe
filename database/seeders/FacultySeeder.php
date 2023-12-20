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
            'deskripsi' => 'Manajemen Rekayasa (Engineering Management) adalah penggabungan dari keilmuan teknik/rekayasa (engineering) dengan ilmu manajemen yang diaplikasikan untuk menyelesaikan persoalan-persoalan dalam suatu sistem kompleks.  Aspek keilmuan teknik (engineering) dari Manajemen Rekayasa terlihat melalui  penerapan matematika dan ilmu pengetahuan alam yang diperoleh melalui pembelajaran, pengalaman, dan praktek empiris untuk menemukan cara-cara yang optimal dalam memanfaatkan material dan sumber daya lain dalam mengembangkan teknologi. Aspek keilmuan manajemen dari Manajemen Rekayasa muncul dalam penerapan ilmu-ilmu pendukung keputusan yang dapat diaplikasikan dalam aktivitas-aktivitas pengembangan organisasi dalam mencapai tujuannya, yang diperoleh melalui pembelajaran dan praktek empiris dalam ilmu perilaku organisasi, analisa finansial, manajemen sumber daya manusia, dan analisa keputusan.',
            'visi' => 'Menjadi Fakultas Pembelajar yang unggul di bidang Informatika dan Teknik  Elektro pada tahun 2018 di tingkat nasional.',
            'misi' =>   ' <ol>
                            <li>Melaksanakan pendidikan di bidang Informatika dan Teknik Elektro yang unggul, berkesinambungan, dan bermanfaat bagi masyarakat.</li>
                            <li>Menciptakan dan menyebarkan ilmu pengetahuan dan teknologi khusus di bidang Informatika dan Teknik Elektro.</li>
                            <li>Meningkatkan peranan Fakultas untuk menjadi pembaru kemampuan, keterampilan pilihan rujukan, dan pengembangan rekayasa karya masyarakat, terutama dalam bidang Informatika dan Teknik Elektro.</li>
                            <li>Memperkuat peran Fakultas dalam memberikan kontribusi nyata kepada masyarakat melalui penerapan Tridarma Perguruan Tinggi, terutama di bidang Informatika dan Teknik Elektro.</li>
                        </ol>',
            'gambar' => 'fti-carousel.jpg',
            'lokasi' => 'Jl. PI.Del, Gedung IX, Laguboti, Toba, Sumatera Utara'
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
            'deskripsi' => 'Pendidikan vokasi merupakan jenjang pendidikan pertama di Institut Teknologi Del sejak berdiri pada tahun 2001 (dahulu bernama Politeknik Informatika Del). Vokasi merupakan pendidikan tinggi dengan fokus pada praktik kerja yang dapat menunjang keahlian di bidang studi tertentu. Program vokasi bertujuan mempersiapkan lulusannya menjadi tenaga yang siap kerja dan mampu bersaing secara global di Dunia Usaha dan Dunia Industri (DUDI).',
            'visi' => 'Menjadi Fakultas Pembelajar yang unggul di bidang Informatika dan Teknik  Elektro pada tahun 2018 di tingkat nasional.',
            'misi' =>   '<ol>
                        <li>Menyelenggarakan dan mengembangkan proses pendidikan yang unggul, berkesinambungan, dan bermanfaat bagi masyarakat.</li>
                        <li>Mengembangkan, menciptakan, dan menyebarkan ilmu pengetahuan dan teknologi khususnya Teknik Bioproses.</li>
                        <li>Meningkatkan peranan program studi agar mampu menjadi pembaharu dalam kemampuan, keterampilan pilihan rujukan, dan pengembangan rekayasa karya masyarakat, khususnya dalam bidang ilmu pengetahuan dan teknologi khususnya Teknik Bioproses.</li>
                        <li>Meningkatkan peran nyata kepada masyarakat melalui penerapan tridarma perguruan tinggi.</li>
                        <li>Menjadikan program studi Teknik Bioproses sebagai program studi yang memiliki sistem pengelolaan yang baik, efisien, dan produktif.</li>
                    </ol>',
            'gambar' => 'fv-carousel.jpg',
            'lokasi' => 'Jl. PI.Del, Gedung V, Laguboti, Toba, Sumatera Utara'
        ]);

    }
}