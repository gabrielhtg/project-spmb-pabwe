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
            'deskripsi' => 'Informatika merupakan salah satu core technology dalam sistem teknologi yang dikenal sebagai Teknologi Informasi dan Komunikasi (Information and Communication Technology), karena melalui pemfungsian Informatika-lah diperoleh produk-produk perangkat lunak (software products) yang memungkinkan terwujudnya sifat intelligent dari Teknologi Informasi dan Komunikasi. Teknologi Informasi dan Komunikasi merupakan strategic enabling technology dalam menopang upaya pencerdasan kehidupan bangsa, dalam aktivitas berbisnis, berindustri, berorganisasi, berfungsinya pemerintahan, pertahanan Negara, dan dalam memfasilitasi kemudahan-kemudahan masyarakat luas dalam tata kehidupan sehari-harinya.

            Program Studi S1 Informatika (PSIF) di Institut Teknologi Del (IT Del) memiliki cakupan bidang ilmu (body of knowledge) meliputi area ilmu komputer (Computer Science), rekayasa perangkat lunak (Software Engineering), keamanan siber (Cybersecurity), dan ilmu data (Data Science). Lulusan dari PSIF dipersiapkan untuk dapat memiliki kemampuan analisis persoalan yang terkait bidang computer science dan pengembangan perangkat lunak mulai dari yang sederhana yang sampai yang kompleks ataupun berskala besar. Selain itu, lulusan PSIF juga dipersiapkan memiliki kemampuan untuk merancang dan mengimplementasikan keamanan yang diperlukan pada suatu perangkat lunak. Dan, terakhir, seorang lulusan PSSTI diproyeksikan untuk memiliki kemampuan mengembangkan perangkat lunak yang pintar menggunakan sejumlah teknik kecerdasan buatan dan secara khusus memiliki kemampuan untuk menjadi artificial intelligence engineer.',
            'visi' => 'Menjadi program Teknik Informatika yang unggul yang berperan dalam menghasilkan dan memanfaatkan teknologi untuk mengembangkan potensi lokal bagi kemajuan bangsa pada tahun 2023.',
                        'misi' =>  '<ol>
                        <li>Menyelenggarakan pendidikan teknik informatika yang bermutu, profesional, dan diperhitungkan secara nasional.</li>
                        <li>Menyelenggarakan penelitian yang menghasilkan dan memanfaatkan teknologi untuk mengembangkan potensi lokal.</li>
                        <li>Melakukan pengabdian kepada masyarakat dalam bidang teknik informatika.</li>
                      </ol>
                      ',
            'gambar' => 'fite-carousel.jpg',
            'gelar' => 'S.Kom',
            'lama' => '4 ',
            'biaya' => '6.500.000',
            'syarat' => 'Syarat syarat Pendaftaran',
            'akreditasi' => 'Unggul',
                'prospek' => 'Terdapat 10 profil lulusan PSSTI yang dapat dikelompokkan ke dalam tiga kelompok. Kelompok pertama adalah Software Engineer mencakup profil lulusan: Mobile Application Developer, Web Developer (front-end, back-end, service), Full-Stack Developer, User Interface Designer, User Experience Designer, Software Analyst, Database Engineer, Software Quality Assurance dan Software Tester. Kelompok kedua adalah Cybersecurity Practitioner, dan kelompok ketiga adalah AI (Artificial Intelligent) Engineer.',
            'lokasi' => 'Jl. PI.Del, Gedung VII, Laguboti, Toba, Sumatera Utara'
        ]);
        
        DB::table('majors')->insert([
            'nama' => 'S1 Sistem Informasi',
            'kode_prodi' => 'iss',
            'kode_fakultas' => 1,
            'deskripsi' => 'Jurusan Sistem Informasi Institut Teknologi Del mulai melakukan penerimaan mahasiswa baru pada T.A 2014/2015. Jumlah mahasiswa yang diterima pada Tahun Ajaran tersebut adalah 56 mahasiswa. Dengan dukungan dosen yang ahli dalam sistem informasi, program studi ini dirancang untuk memenuhi kebutuhan terhadap tenaga-tenaga muda yang terampil dan profesional, terutama terkait dengan pengembangan, pemanfaatan, dan pengelolaan Sistem Informasi/Teknologi Informasi dalam suatu organisasi. Kurikulum Program Studi Sistem Informasi IT Del mengacu kepada beberapa kurikulum Sarjana Sistem Informasi di Indonesia maupun Internasional, seperti: Program Studi Sarjana Teknologi dan Sistem Informasi ITB, Program Studi Sarjana Sistem Informasi Universitas Indonesia serta mengacu kepada kurikulum ACM (Association for Computing Machinary) for Information System',
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
            'prospek' => ' 
            <ol>
              <li>Business Intelligence Solution</li>
              <li>Business/Systems Analyst</li>
              <li>Information System Development Project Manager</li>
              <li>Database Administrator</li>
              <li>System Design</li>
              <li>IT Manager</li>
              <li>Programmer/Software Engineer</li>
              <li>IT Auditor</li>
              <li>Konsultan IT/IS</li>
              <li>Web Developer/Web Designer</li>
              <li>Wirausaha di bidang IT</li>
              <li>Pengajar dan Peneliti</li>
            </ol>',
            'lokasi' => 'Jl. PI.Del, Gedung VII, Laguboti, Toba, Sumatera Utara'
        ]);
        
        DB::table('majors')->insert([
            'nama' => 'S1 Teknik Elektro',
            'kode_prodi' => 'els',
            'kode_fakultas' => 1,
            'deskripsi' => 'Program Studi Teknik Elektro berupaya untuk meningkatkan layanan yang baik kepada mahasiswa serta mampu menjawab keperluan industri melalui lulusan tenaga terdidik dan juga terampil di bidangnya. PSTE berdasarkan analisis SWOT dan diskusi dengan berbagai stakeholder menetapkan visi, misi, tujuan dan sasaran yang akan dilakukan dalam pelaksanaan kurikulum 2019. Visi, misi, tujuan, dan sasaran ini juga dirumuskan sejalan dengan visi, misi, tujuan, dan sasaran Fakultas Informatika dan Teknik Elektro.',
            'visi' => 'Visi Program Studi Teknik Elektro adalah Mewujudkan program pendidikan Teknik Elektro yang unggul dan penyelenggaraan penelitian bidang Teknik Elektro yang bertaraf nasional pada tahun 2024',
            'misi' =>   '<ol>
                            <li>Menyelenggarakan pendidikan teknik elektro yang bermutu dan profesional.</li>
                            <li>Menyelenggarakan penelitian yang bermanfaat bagi kemajuan IPTEK.</li>
                            <li>Melakukan pengabdian kepada masyarakat dalam bidang teknik elektro khususnya di daerah rural.</li>
                            <li>Mengelola Program Studi Teknik Elektro secara efektif dan efisien.</li>
                        </ol>',
            'gambar' => 'fite-carousel.jpg',
            'gelar' => 'S.T.',
            'lama' => '4',
            'biaya' => '6.500.000',
            'syarat' => 'Tidak ada syarat khusus',
            'akreditasi' => 'Baik Sekali',
            'prospek' => '<ol>
                            <li>Teknik Kendali dan Instrumentasi.</li>
                            <li>Sistem Jaringan dan Komunikasi Nirkabel.</li>
                        </ol>',
            'lokasi' => 'Jl. PI.Del, Gedung VII, Laguboti, Toba, Sumatera Utara'
        ]);
        
        DB::table('majors')->insert([
            'nama' => 'S1 Manajemen Rekayasa',
            'kode_prodi' => 'mrs',
            'kode_fakultas' => 2,
            'deskripsi' => 'Kebutuhan untuk 10 tahun ke depan merupakan sumbangsih IT Del dalam mendukung program percepatan dan pembangunan ekonomi Indonesia. Pada tahun 2012, Pemerintah Indonesia telah meluncurkan Masterplan Percepatan dan Perluasan Pembangunan Indonesia (MP3EI). Program ini bertujuan memajukan perekonomian Indonesia dengan menggerakkan roda ekonomi sampai ke daerah-daerah terpencil. Pekerjaan MP3EI memerlukan tenaga kerja di bidang industri dalam jumlah banyak. Terutama dari kalangan insinyur atau lulusan pendidikan teknik, baik yang berasal dari institut maupun universitas. Untuk memenuhi kebutuhan insinyur dan mendukung pencapaian target MP3EI itulah, IT Del turut berpartisipasi dalam memperbesar kapasitas produksi insinyur yang sesuai dengan kebutuhan pembangunan koridor Sumatera di masa mendatang. Selain untuk menghasilkan para insinyur dalam rangka mendukung pencapaian target MP3EI, IT Del juga memperkuat persiapan Indonesia dalam menghadapi tantangan global seperti AIC, APEC, WTO, AFTA, dan lainnya yang mensyaratkan manusia bersumberdaya mumpuni dalam bidang sains dan teknologi.',           
            'visi' => 'Pada tahun 2018 menjadi Program Studi Sarjana Manajemen Rekayasa yang unggul secara nasional dan menjadi acuan nasional dalam penyelenggaraan Program Studi Sarjana Manajemen Rekayasa yang menghasilkan lulusan yang profesional dalam bidang perancangan dan inovasi kerekayasaan yang memberi manfaat terhadap masyarakat luas.',
            'misi' =>   '
                            <ol>
                                <li>Menyelenggarakan dan mengembangkan proses pendidikan Sarjana Manajemen Rekayasa yang unggul, berkesinambungan dan bermanfaat bagi masyarakat.</li>
                                <li>Melakukan kegiatan penelitian dan pengembangan untuk mengembangkan, menciptakan, dan menyebarkan ilmu pengetahuan dan teknologi di bidang Manajemen Rekayasa.</li>
                                <li>Melakukan pengabdian kepada masyarakat dalam bidang Manajemen Rekayasa melalui diseminasi ilmu pengetahuan, teknologi serta wawasan yang dimiliki.</li>
                            </ol>',
            'gambar' => 'fti-carousel.jpg',
            'gelar' => 'S.T',
            'lama' => '4',
            'biaya' => '6.500.000',
            'syarat' => 'Tidak ada syarat khusus',
            'akreditasi' => 'Baik Sekali',
            'prospek' => 'Profesi, bidang pekerjaan, atau bidang keillmuan dan keahlian yang dapat diisi oleh lulusan peluang kerja dari lulusan ini terbuka luas pada hampir semua sektor usaha yang berkaitan dengan kegiatan kerekayasaan, antara lain kementerian teknis, BUMN, manajer teknologi, manager produksi, manajer pengendalian kualitas, manajer muda perencanaan produksi dan pengendalian persediaan, konsultan teknik, calon tenaga pendidik, peneliti, dan usaha berbasis teknologi.',
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
            'visi' => 'Menjadikan program studi Sarjana Teknik Bioproses menjadi program studi yang unggul secara nasional dan internasional dalam bidang pendidikan, penelitian, pengembangan dan penerapan ilmu dan teknologi, serta pengabdian kepada masyarakat.',
            'misi' =>   ' <ol>
                                <li>Menyelenggarakan dan mengembangkan proses pendidikan yang unggul, berkesinambungan dan bermanfaat bagi masyarakat.</li>
                                <li>Mengembangkan, menciptakan, dan menyebarkan ilmu pengetahuan dan teknologi khususnya Teknik Bioproses.
                                <li>Meningkatkan peranan program studi adar mampu menjadi pembaharu dalam kemampuan, keterampilan pilihan rujukan, dan pengembangan rekayasa karya masyarakat, khususnya dalam bidang ilmu pengetahuan dan teknologi khususnya Teknik Bioproses.</li>
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
            'visi' => 'Menjadikan Program Studi Teknologi Rekayasa Perangkat Lunak Program Sarjana Terapan sebagai batu loncatan menuju masa depan Teknologi Informasi yang mengintegrasikan dunia pendidikan dengan kebutuhan usaha akan tenaga profesional informatika yang mampu bersaing secara global.',
            'misi' =>   ' <ol>
                            <li>Menyelenggarakan pendidikan vokasional yang mendidik dan menghasilkan sumber daya manusia yang mempunyai sikap memimpin, penuh kreativitas, berdisiplin tinggi, dan mampu memberikan solusi di bidang Teknologi Informasi secara global.</li>
                            <li>Membuat terobosan dalam dunia pendidikan dengan menciptakan lingkungan pendidikan yang sehat, kondusif dengan dukungan tenaga pengajar yang ahli dan profesional.</li>
                            <li>Menyelenggarakan program penelitian yang menghasilkan produk teknologi informasi yang memberikan solusi tepat guna dan inovatif untuk diterapkan di berbagai bidang kehidupan masyarakat.</li>
                            <li>Menyelenggarakan proses pengabdian kepada masyarakat di dunia teknologi informasi melalui berbagai program diseminasi teknologi informasi terhadap masyarakat di berbagai bidang.</li>
                        </ol>',
            'gambar' => 'fv-carousel.jpg',
            'gelar' => 'S.Tr.Kom',
            'lama' => '4',
            'biaya' => '6.500.000',
            'syarat' => 'Syarat syarat Pendaftaran',
            'akreditasi' => 'Unggul',
            'prospek' => 'Software Developer, Software Quality Assurance, IT Researcher, ITpreneur',
            'lokasi' => 'Jl. PI.Del, Gedung V, Laguboti, Toba, Sumatera Utara'
        ]);
        
        DB::table('majors')->insert([
            'nama' => 'D3 Teknologi Informasi',
            'kode_prodi' => 'if3',
            'kode_fakultas' => 4,
            'deskripsi' => 'Program Studi Teknologi Informasi Diploma Tiga  mempunyai sasaran untuk menyelenggarakan proses pembelajaran yang dapat menumbuhkan-kembangkan daya nalar, daya cipta, daya kreasi dan keterampilan yang tinggi, yang dapat dikomunikasikan dan diaplikasikan pada bidang kehidupan. Prodi ini memperoleh perpanjangan ijin penyelenggaraan Program Studi Teknologi Informasi Diploma Tiga  (10802) sesuai dengan SK Direktur Jenderal Pendidikan Tinggi Nomor 3649/D/T/2004 tertanggal 9 September 2004. Kemudian pada tanggal 11 Oktober 2007 memperoleh SK perpanjangan ulang No. 3169/D/T/2007 dengan sebutan nama program studi adalah Program Studi Teknologi Informasi Diploma Tiga. Kemudian pada tanggal 3 Mei 2010 memperoleh SK perpanjangan ulang No. 1854/D/T/K-I/2010 dengan sebutan nama program studi kembali menjadi Program Studi Teknologi Informasi Diploma Tiga .',
            'visi' => 'Menjadi program studi unggulan pada program pendidikan dan penelitian terapan di bidang pengembangan teknologi informasi yang bertaraf nasional dan internasional pada tahun 2024.',
            'misi' =>   '• Menyelenggarakan pendidikan vokasi yang unggul untuk menghasilkan sumber daya manusia yang profesional di bidang teknologi informasi dan komunikasi,
                        • Meningkatkan program penelitian terapan yang inovatif dan bertaraf nasional maupun
                        internasional di bidang teknologi informasi dan komunikasi
                        • Meningkatkan program pengabdian masyarakat melalui kerjasama dengan berbagai institusi pemerintahan dan industri di tingkat regional maupun nasional.',
            'gambar' => 'fv-carousel.jpg',
            'gelar' => 'A.Md.Kom',
            'lama' => '3 tahun',
            'biaya' => 'Rp.5.500.000,-',
            'syarat' => '-',
            'akreditasi' => 'Unggul',
            'prospek' => 'Software Engineer, Analyst Programmer, Web Application Developer, IT Support Personnel, dan Mobile Application Developer.',
            'lokasi' => 'Jl. PI.Del, Gedung V, Laguboti, Toba, Sumatera Utara'
        ]);
        
        DB::table('majors')->insert([
            'nama' => 'D3 Teknologi Komputer',
            'kode_prodi' => 'ce3',
            'kode_fakultas' => 4,
            'deskripsi' => 'Program Studi Teknik Komputer adalah salah satu program studi yang diselenggarakan Institut Teknologi Del yang terletak di daerah pedesaan Tobasa, yang membuka peluang bagi siswa berprestasi untuk mengenyam pendidikan dengan mutu yang tidak kalah dengan pendidikan bermutu bagus yang diselenggarakan di kota besar.',
            'visi' => 'Menjadi program studi unggulan pada program pendidikan dan penelitian terapan di bidang pengembangan teknologi informasi yang bertaraf nasional dan internasional pada tahun 2024.',
            'misi' =>   '• Menyelenggarakan pendidikan vokasi yang unggul untuk menghasilkan sumber daya manusia yang profesional di bidang teknologi informasi dan komunikasi.
                        • Meningkatkan program penelitian terapan yang inovatif dan bertaraf nasional maupun
                        internasional di bidang teknologi informasi dan komunikasi,
                        • Meningkatkan program pengabdian masyarakat melalui kerjasama dengan berbagai institusi pemerintahan dan industri di tingkat regional maupun nasional.',
            'gambar' => 'fv-carousel.jpg',
            'gelar' => 'A.Md.T',
            'lama' => '3 tahun',
            'biaya' => 'Rp.5.500.000,-',
            'syarat' => '-',
            'akreditasi' => 'Unggul',
            'prospek' => 'Full Stack Developer, Programmer atau Software Engineer, Network Engineer, System Administrator, IT Security Specialist, Digital Entrepreneur/IT Preneur',
            'lokasi' => 'Jl. PI.Del, Gedung V, Laguboti, Toba, Sumatera Utara'
        ]);
        
    }
}