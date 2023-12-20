<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MajorSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('majors')->insert([
            'nama' => 'S1 Informatika',
            'kode_prodi' => 'ifs',
            'kode_fakultas' => 1,
            'deskripsi' => 'Pendidikan vokasi merupakan jenjang pendidikan pertama di Institut Teknologi Del sejak berdiri pada tahun 2001 (dahulu bernama Politeknik Informatika Del). Vokasi merupakan pendidikan tinggi dengan fokus pada praktik kerja yang dapat menunjang keahlian di bidang studi tertentu. Program vokasi bertujuan mempersiapkan lulusannya menjadi tenaga yang siap kerja dan mampu bersaing secara global di Dunia Usaha dan Dunia Industri (DUDI).',
            'visi' => 'Menjadi Fakultas Pembelajar yang unggul di bidang Informatika dan Teknik  Elektro pada tahun 2018 di tingkat nasional.',
            'misi' =>   ' <ol>
                            <li>Mengembangkan, menciptakan, dan menyebarkan ilmu pengetahuan dan teknologi khususnya Teknik Bioproses.</li>
                            <li>Meningkatkan peranan program studi agar mampu menjadi pembaharu dalam kemampuan, keterampilan pilihan rujukan, dan pengembangan rekayasa karya masyarakat, khususnya dalam bidang ilmu pengetahuan dan teknologi khususnya Teknik Bioproses.</li>
                            <li>Meningkatkan peran nyata kepada masyarakat melalui penerapan tridarma perguruan tinggi.</li>
                            <li>Menjadikan program studi Teknik Bioproses sebagai program studi yang memiliki sistem pengelolaan yang baik, efisien, dan produktif.</li>
                        </ol>',
            'gambar' => 'fite-carousel.jpg',
            'gelar' => 'S.Kom',
            'lama' => '4 ',
            'biaya' => '6.500.000',
            'syarat' => 'Syarat syarat Pendaftaran',
            'akreditasi' => 'Unggul',
                'prospek' => '
                                <ol>
                                <li>Software Engineering</li>
                                <li>Artificial Intelligence</li>
                                <li>Cyber Security</li>
                            </ol>
                        
                            <p>Keterangan Prospek Kerja:</p>
                            <p>Di bawah ini adalah keterangan mengenai prospek kerja untuk masing-masing bidang studi:</p>
                        
                            <ol>
                                <li><strong>Software Engineering:</strong> Software engineers dapat bekerja di berbagai industri untuk mengembangkan perangkat lunak, aplikasi, dan sistem. Mereka memiliki peluang untuk bekerja sebagai pengembang perangkat lunak, insinyur perangkat lunak, atau spesialis pengembangan aplikasi.</li>
                                
                                <li><strong>Artificial Intelligence:</strong> Profesional di bidang kecerdasan buatan dapat mengejar karir sebagai peneliti AI, ilmuwan data, insinyur machine learning, atau pengembang solusi AI untuk berbagai aplikasi seperti pengenalan wajah, otomasi, dan analisis data cerdas.</li>
                                
                                <li><strong>Cyber Security:</strong> Ahli keamanan cyber memiliki peran penting dalam melindungi sistem dan data dari ancaman keamanan. Mereka dapat bekerja sebagai analis keamanan, insinyur keamanan, konsultan keamanan, atau spesialis keamanan jaringan untuk mengidentifikasi dan mengatasi risiko keamanan.</li>
                            </ol>',
            'lokasi' => 'Jl. PI.Del, Gedung VII, Laguboti, Toba, Sumatera Utara'
        ]);
        
        DB::table('majors')->insert([
            'nama' => 'S1 Sistem Informasi',
            'kode_prodi' => 'iss',
            'kode_fakultas' => 1,
            'deskripsi' => 'Pendidikan vokasi merupakan jenjang pendidikan pertama di Institut Teknologi Del sejak berdiri pada tahun 2001 (dahulu bernama Politeknik Informatika Del). Vokasi merupakan pendidikan tinggi dengan fokus pada praktik kerja yang dapat menunjang keahlian di bidang studi tertentu. Program vokasi bertujuan mempersiapkan lulusannya menjadi tenaga yang siap kerja dan mampu bersaing secara global di Dunia Usaha dan Dunia Industri (DUDI).',
            'visi' => 'Menjadi Fakultas Pembelajar yang unggul di bidang Informatika dan Teknik  Elektro pada tahun 2018 di tingkat nasional.',
            'misi' =>   ' <ol>
                            <li>Menyelenggarakan dan mengembangkan proses pendidikan yang unggul, berkesinambungan, dan bermanfaat bagi masyarakat.</li>
                            <li>Mengembangkan, menciptakan, dan menyebarkan ilmu pengetahuan dan teknologi khususnya Teknik Bioproses.</li>
                            <li>Meningkatkan peranan program studi agar mampu menjadi pembaharu dalam kemampuan, keterampilan pilihan rujukan, dan pengembangan rekayasa karya masyarakat, khususnya dalam bidang ilmu pengetahuan dan teknologi khususnya Teknik Bioproses.</li>
                            <li>Meningkatkan peran nyata kepada masyarakat melalui penerapan tridarma perguruan tinggi.</li>
                            <li>Menjadikan program studi Teknik Bioproses sebagai program studi yang memiliki sistem pengelolaan yang baik, efisien, dan produktif.</li>
                        </ol>',
            'gambar' => 'fite-carousel.jpg',
            'gelar' => 'S.Kom',
            'lama' => '4 ',
            'biaya' => '6.500.000',
            'syarat' => 'Syarat syarat Pendaftaran',
            'akreditasi' => 'Unggul',
            'prospek' => 'Software Engineering, Artificial Intelligence, Cyber Security',
            'lokasi' => 'Jl. PI.Del, Gedung VII, Laguboti, Toba, Sumatera Utara'
        ]);
        
        DB::table('majors')->insert([
            'nama' => 'S1 Teknik Elektro',
            'kode_prodi' => 'els',
            'kode_fakultas' => 1,
            'deskripsi' => 'Pendidikan vokasi merupakan jenjang pendidikan pertama di Institut Teknologi Del sejak berdiri pada tahun 2001 (dahulu bernama Politeknik Informatika Del). Vokasi merupakan pendidikan tinggi dengan fokus pada praktik kerja yang dapat menunjang keahlian di bidang studi tertentu. Program vokasi bertujuan mempersiapkan lulusannya menjadi tenaga yang siap kerja dan mampu bersaing secara global di Dunia Usaha dan Dunia Industri (DUDI).',
            'visi' => 'Menjadi Fakultas Pembelajar yang unggul di bidang Informatika dan Teknik  Elektro pada tahun 2018 di tingkat nasional.',
            'misi' =>   '<ol>
                            <li>Menyelenggarakan dan mengembangkan proses pendidikan yang unggul, berkesinambungan dan bermanfaat bagi masyarakat.</li>
                            <li>Mengembangkan, menciptakan, dan menyebarkan ilmu pengetahuan dan teknologi khususnya Teknik Bioproses.</li>
                            <li>Meningkatkan peranan program studi agar mampu menjadi pembaharu dalam kemampuan, keterampilan pilihan rujukan, dan pengembangan rekayasa karya masyarakat, khususnya dalam bidang ilmu pengetahuan dan teknologi khususnya Teknik Bioproses.</li>
                            <li>Meningkatkan peran nyata kepada masyarakat melalui penerapan tridarma perguruan tinggi.</li>
                            <li>Menjadikan program studi Teknik Bioproses sebagai program studi yang memiliki sistem pengelolaan yang baik, efisien, dan produktif.</li>
                        </ol>',
            'gambar' => 'fite-carousel.jpg',
            'gelar' => 'S.T',
            'lama' => '4 ',
            'biaya' => '6.500.000',
            'syarat' => 'Syarat syarat Pendaftaran',
            'akreditasi' => 'Unggul',
            'prospek' => 'Software Engineering, Artificial Intelligence, Cyber Security',
            'lokasi' => 'Jl. PI.Del, Gedung VII, Laguboti, Toba, Sumatera Utara'
        ]);
        
        DB::table('majors')->insert([
            'nama' => 'S1 Manajemen Rekayasa',
            'kode_prodi' => 'mrs',
            'kode_fakultas' => 2,
            'deskripsi' => 'Pendidikan vokasi merupakan jenjang pendidikan pertama di Institut Teknologi Del sejak berdiri pada tahun 2001 (dahulu bernama Politeknik Informatika Del). Vokasi merupakan pendidikan tinggi dengan fokus pada praktik kerja yang dapat menunjang keahlian di bidang studi tertentu. Program vokasi bertujuan mempersiapkan lulusannya menjadi tenaga yang siap kerja dan mampu bersaing secara global di Dunia Usaha dan Dunia Industri (DUDI).',
            'visi' => 'Menjadi Fakultas Pembelajar yang unggul di bidang Informatika dan Teknik  Elektro pada tahun 2018 di tingkat nasional.',
            'misi' =>   '
                            <ol>
                                <li>Menyelenggarakan dan mengembangkan proses pendidikan yang unggul, berkesinambungan dan bermanfaat bagi masyarakat.</li>
                                <li>Mengembangkan, menciptakan, dan menyebarkan ilmu pengetahuan dan teknologi khususnya Teknik Bioproses.</li>
                                <li>Meningkatkan peranan program studi agar mampu menjadi pembaharu dalam kemampuan, keterampilan pilihan rujukan, dan pengembangan rekayasa karya masyarakat, khususnya dalam bidang ilmu pengetahuan dan teknologi khususnya Teknik Bioproses.</li>
                                <li>Meningkatkan peran nyata kepada masyarakat melalui penerapan tridarma perguruan tinggi.</li>
                                <li>Menjadikan program studi Teknik Bioproses sebagai program studi yang memiliki sistem pengelolaan yang baik, efisien, dan produktif.</li>
                            </ol>',
            'gambar' => 'fti-carousel.jpg',
            'gelar' => 'S.T',
            'lama' => '4',
            'biaya' => '6.500.000',
            'syarat' => 'Syarat syarat Pendaftaran',
            'akreditasi' => 'Unggul',
            'prospek' => 'Software Engineering, Artificial Intelligence, Cyber Security',
            'lokasi' => 'Jl. PI.Del, Gedung IX, Laguboti, Toba, Sumatera Utara'
        ]);
        
        DB::table('majors')->insert([
            'nama' => 'S1 Teknik Metalurgi',
            'kode_prodi' => 'tms',
            'kode_fakultas' => 2,
            'deskripsi' => 'Pendidikan vokasi merupakan jenjang pendidikan pertama di Institut Teknologi Del sejak berdiri pada tahun 2001 (dahulu bernama Politeknik Informatika Del). Vokasi merupakan pendidikan tinggi dengan fokus pada praktik kerja yang dapat menunjang keahlian di bidang studi tertentu. Program vokasi bertujuan mempersiapkan lulusannya menjadi tenaga yang siap kerja dan mampu bersaing secara global di Dunia Usaha dan Dunia Industri (DUDI).',
            'visi' => 'Menjadi Fakultas Pembelajar yang unggul di bidang Informatika dan Teknik  Elektro pada tahun 2018 di tingkat nasional.',
            'misi' =>   '
                        <ol>
                            <li>Menyelenggarakan dan mengembangkan proses pendidikan yang unggul, berkesinambungan, dan bermanfaat bagi masyarakat.</li>
                            <li>Mengembangkan, menciptakan, dan menyebarkan ilmu pengetahuan dan teknologi khususnya Teknik Bioproses.</li>
                            <li>Meningkatkan peranan program studi agar mampu menjadi pembaharu dalam kemampuan, keterampilan pilihan rujukan, dan pengembangan rekayasa karya masyarakat, khususnya dalam bidang ilmu pengetahuan dan teknologi khususnya Teknik Bioproses.</li>
                            <li>Meningkatkan peran nyata kepada masyarakat melalui penerapan tridarma perguruan tinggi.</li>
                            <li>Menjadikan program studi Teknik Bioproses sebagai program studi yang memiliki sistem pengelolaan yang baik, efisien, dan produktif.</li>
                        </ol>',
            'gambar' => 'fti-carousel.jpg',
            'gelar' => 'S.T',
            'lama' => '4',
            'biaya' => '6.500.000',
            'syarat' => 'Syarat syarat Pendaftaran',
            'akreditasi' => 'Unggul',
            'prospek' => 'Software Engineering, Artificial Intelligence, Cyber Security',
            'lokasi' => 'Jl. PI.Del, Gedung IX, Laguboti, Toba, Sumatera Utara'
        ]);
        
        DB::table('majors')->insert([
            'nama' => 'S1 Teknik Bioproses',
            'kode_prodi' => 'bps',
            'kode_fakultas' => 3,
            'deskripsi' => 'Pendidikan vokasi merupakan jenjang pendidikan pertama di Institut Teknologi Del sejak berdiri pada tahun 2001 (dahulu bernama Politeknik Informatika Del). Vokasi merupakan pendidikan tinggi dengan fokus pada praktik kerja yang dapat menunjang keahlian di bidang studi tertentu. Program vokasi bertujuan mempersiapkan lulusannya menjadi tenaga yang siap kerja dan mampu bersaing secara global di Dunia Usaha dan Dunia Industri (DUDI).',
            'visi' => 'Menjadi Fakultas Pembelajar yang unggul di bidang Informatika dan Teknik  Elektro pada tahun 2018 di tingkat nasional.',
            'misi' =>   ' <ol>
                                <li>Menyelenggarakan dan mengembangkan proses pendidikan yang unggul, berkesinambungan, dan bermanfaat bagi masyarakat.</li>
                                <li>Mengembangkan, menciptakan, dan menyebarkan ilmu pengetahuan dan teknologi khususnya Teknik Bioproses.</li>
                                <li>Meningkatkan peranan program studi agar mampu menjadi pembaharu dalam kemampuan, keterampilan pilihan rujukan, dan pengembangan rekayasa karya masyarakat, khususnya dalam bidang ilmu pengetahuan dan teknologi khususnya Teknik Bioproses.</li>
                                <li>Meningkatkan peran nyata kepada masyarakat melalui penerapan tridarma perguruan tinggi.</li>
                                <li>Menjadikan program studi Teknik Bioproses sebagai program studi yang memiliki sistem pengelolaan yang baik, efisien, dan produktif.</li>
                            </ol>',
            'gambar' => 'fb-carousel.jpg',
            'gelar' => 'S.T',
            'lama' => '4',
            'biaya' => '7.500.000',
            'syarat' => 'Syarat syarat Pendaftaran',
            'akreditasi' => 'Unggul',
            'prospek' => 'Software Engineering, Artificial Intelligence, Cyber Security',
            'lokasi' => 'Jl. PI.Del, Gedung VIII, Laguboti, Toba, Sumatera Utara'
        ]);
        
        DB::table('majors')->insert([
            'nama' => 'D4 Teknologi Rekayasa Perangkat Lunak',
            'kode_prodi' => 'if4',
            'kode_fakultas' => 4,
            'deskripsi' => 'Pendidikan vokasi merupakan jenjang pendidikan pertama di Institut Teknologi Del sejak berdiri pada tahun 2001 (dahulu bernama Politeknik Informatika Del). Vokasi merupakan pendidikan tinggi dengan fokus pada praktik kerja yang dapat menunjang keahlian di bidang studi tertentu. Program vokasi bertujuan mempersiapkan lulusannya menjadi tenaga yang siap kerja dan mampu bersaing secara global di Dunia Usaha dan Dunia Industri (DUDI).',
            'visi' => 'Menjadi Fakultas Pembelajar yang unggul di bidang Informatika dan Teknik  Elektro pada tahun 2018 di tingkat nasional.',
            'misi' =>   ' <ol>
                            <li>Menyelenggarakan dan mengembangkan proses pendidikan yang unggul, berkesinambungan, dan bermanfaat bagi masyarakat.</li>
                            <li>Mengembangkan, menciptakan, dan menyebarkan ilmu pengetahuan dan teknologi khususnya Teknik Bioproses.</li>
                            <li>Meningkatkan peranan program studi agar mampu menjadi pembaharu dalam kemampuan, keterampilan pilihan rujukan, dan pengembangan rekayasa karya masyarakat, khususnya dalam bidang ilmu pengetahuan dan teknologi khususnya Teknik Bioproses.</li>
                            <li>Meningkatkan peran nyata kepada masyarakat melalui penerapan tridarma perguruan tinggi.</li>
                            <li>Menjadikan program studi Teknik Bioproses sebagai program studi yang memiliki sistem pengelolaan yang baik, efisien, dan produktif.</li>
                        </ol>',
            'gambar' => 'fv-carousel.jpg',
            'gelar' => 'S.Tr.Kom',
            'lama' => '4',
            'biaya' => '6.500.000',
            'syarat' => 'Syarat syarat Pendaftaran',
            'akreditasi' => 'Unggul',
            'prospek' => 'Software Engineering, Artificial Intelligence, Cyber Security',
            'lokasi' => 'Jl. PI.Del, Gedung V, Laguboti, Toba, Sumatera Utara'
        ]);
        
        DB::table('majors')->insert([
            'nama' => 'D3 Teknologi Informasi',
            'kode_prodi' => 'if3',
            'kode_fakultas' => 4,
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
            'gelar' => 'A.Md.Kom',
            'lama' => '3',
            'biaya' => '5.500.000',
            'syarat' => 'Syarat syarat Pendaftaran',
            'akreditasi' => 'Unggul',
            'prospek' => 'Software Engineering, Artificial Intelligence, Cyber Security',
            'lokasi' => 'Jl. PI.Del, Gedung V, Laguboti, Toba, Sumatera Utara'
        ]);
        
        DB::table('majors')->insert([
            'nama' => 'D3 Teknologi Komputer',
            'kode_prodi' => 'ce3',
            'kode_fakultas' => 4,
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
            'gelar' => 'A.Md.T',
            'lama' => '3',
            'biaya' => '5.500.000',
            'syarat' => 'Syarat syarat Pendaftaran',
            'akreditasi' => 'Unggul',
            'prospek' => 'Software Engineering, Artificial Intelligence, Cyber Security',
            'lokasi' => 'Jl. PI.Del, Gedung V, Laguboti, Toba, Sumatera Utara'
        ]);
        
    }
}