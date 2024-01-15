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
            'judul_prestasi' => 'Tiga mahasiswa Program Studi Manajemen Rekayasa berhasil lolos seleksi Magang Non Riset Merdeka Belajar Kampus Merdeka (MBKM) di Badan Riset dan Inovasi Nasional (BRIN) dengan topik Preferensi Harga Produk Dalam Negeri.'
        ]);

        DB::table('prestasi')->insert([
            'jenis_prestasi' => 'Mahasiswa',
            'photo' => '2.jpg',
            'deskripsi' => 'Pada Hari Senin, 11 September 2023 dilakukan Presentasi Rencana Penelitian dan Pemberangkatan Lima Mahasiswi IT Del ke BGI (Beijing Genomics Institute), China.
            Lima Mahasiswi IT Del ini akan mengikuti program kelas inovasi BGI College yang merupakan salah satu bentuk kolaborasi IT Del dengan BGI College, China, dan Yayasan Satria Budi Dharma Setia. Kelima mahasiswi ini telah melalui beberapa seleksi termasuk seleksi internal Del dan seleksi wawancara yang dilakukan oleh peneliti dari BGI. Program kelas inovasi di pusat penelitian modern BGI akan berjalan selama 1 tahun hingga Agustus 2024. Program kelas inovasi ini juga menjadi sebuah program MBKM Penelitian yang dijalankan secara mandiri oleh IT Del bersama dengan mitra. Lima mahasiswi tersebut adalah:
            1. Ivana Sitepu (Prodi Teknik Bioproses)
            Judul Penelitian : Synthetic biology and strain improvement for industrial utilization
            2. Evy Simanjuntak (Prodi Teknik Bioproses)
            Judul Penelitian :Optimization of an industrial microorganism or enzyme for mass production of valuable product
            3. Audrey Mihewi Samosir (Prodi Teknik Bioproses)
            Judul Penelitian : Metabolic engineering and system biology in plants and model microbes
            4. Mentari Sihombing (Prodi Sarjana Terapan Teknologi Rekayasa Perangkat Lunak)
            Judul Penelitian : Multi-omics based research on human disease of large scale population
            5. Indah Pakpahan (Prodi Teknik Bioproses)
            Judul Penelitian : Multi-omics based research on human disease of large scale population

            Kegiatan ini juga didukung oleh Yayasan Satria Budi Dharma Setia (YSDS) yang pada kesempatan ini turut hadir Dr. Vincentius SW Budhyanto selaku Ketua Yayasan.',
            'judul_prestasi' => 'Presentasi Rencana Penelitian dan Pemberangkatan Lima Mahasiswi IT Del ke BGI (Beijing Genomics Institute)'
        ]);

        DB::table('prestasi')->insert([
            'jenis_prestasi' => 'Mahasiswa',
            'photo' => '3.jpg',
            'deskripsi' => 'Huawei Indonesia menunjukan komitmennya untuk meningkatkan kompetensi talent ICT Academy di Indonesia. Huawei Indonesia mengadakan program Summer Camp 2023 sebagai salah satu bentuk implementasi 2-party MoU antara Huawei dan IT Del (yang telah dimulai dari tahun 2020) dalam meningkatkan talent-talent ICT pada level perguruan tinggi di Indonesia. Huawei - IT Del Summer Camp 2023 diikuti oleh 4 orang dosen dan 8 orang mahasiswa/i IT Del dari program studi D3 Teknologi Komputer, D3 Teknologi Informatika, S1 Terapan Teknik Rekayasa Perangkat Lunak, S1 Sistem Informasi, S1 Teknik Informatika, dan S1 Manajemen Rekayasa. 12 orang delegasi dari IT Del akan mendapatkan pelatihan dan pengajaran selama satu bulan (25 Juni - 25 Juli) di beberapa kota yang menjadi Headquarter Huwaei di China, dimulai di kota Shenzhen, Guiyang, Hangzhou, dan terakhir Beijing. Topik yang akan dipelajari 12 orang tersebut adalah Leadership, Huawei Growth, Cloud Computing, ICT Network, Cybersecurity, 5G Network, and Artificial Intelligence.
            Kegiatan dimulai di kantor Huawei Indonesia di Jakarta, dimana tim disambut oleh Guo Hailong CEO Huawei Indonesia. Lalu tim berangkat menuju kantor Kemenko Marves bersama dengan CEO Huawei Indonesia untuk pemaparan kegiatan Huawei - IT Del Summer Camp 2023 kepada Bapak. Luhut Pandjaitan selaku Founding Father of Del. Ibu Yenty Joman sebagai Public Government Huawei Indonesia memaparkan kegiatan kepada bapak Luhut Pandjaitan. Foto bersama antara Bapak Luhut Pandjaitan, Mr. Guo Hailong, dan pemasangan jaket kepada peserta menjadi pembuka resmi kegiatan Huawei-IT Del Summer Camp 2023.
            Kegiatan Tim Summer Camp dihari pertama diawali dengan opening Ceremony di Huawei Training Center Zone J. Pada kesempatan ini Niko Setiawan sebagai perwakilan Huawei Indonesia memberikan sambutan dan semangat kepada Tim dalam menyelesaikan kegiatan training selama sebulan ke depan.',
            'judul_prestasi' => 'Dosen dan Mahasiswa IT Del mengikuti program Huawei Summer Camp 2023 di China'
        ]);

        DB::table('prestasi')->insert([
            'jenis_prestasi' => 'Mahasiswa',
            'photo' => '4.jpg',
            'deskripsi' => 'Selamat kepada Lima mahasiswa IT Del yang lolos Program Indonesian International Student Mobility Awards (IISMA) 2023.
            IISMA adalah program beasiswa pertukaran pelajar ke luar negeri yang ditujukan untuk mahasiswa aktif di perguruan tinggi di bawah Direktorat Jenderal Pendidikan Tinggi (Ditjen Dikti) Kemendikbud Ristek.
            Lima mahasiswa IT Del yang lolos adalah :
            1. Guntur Augustin Sinaga (Western University, Kanada)
            2. Josua Wira Perdana Sembiring (IU International University of Applied Sciences, Jerman)
            3. Abellina Selvia Sitorus (Swinburne University of Technology, Australia)
            4. Yerobeam (University of Missouri - Kansas City, Amerika Serikat)
            5. Silvia Sari Rezeki Lubis (IU International University of Applied Sciences, Jerman)
            Selamat dan sukses kepada adik-adik mahasiswa IT Del.',
            'judul_prestasi' => 'Selamat kepada Lima mahasiswa IT Del yang lolos Program Indonesian International Student Mobility Awards (IISMA) 2023.'
        ]);

        DB::table('prestasi')->insert([
            'jenis_prestasi' => 'Mahasiswa',
            'photo' => '5.jpg',
            'deskripsi' => 'Selamat dan semangat berjuang kepada mahasiswa IT Del dalam Olimpiade Nasional Matematika dan Ilmu Pengetahuan Alam (ONMIPA) Tingkat Nasional 2022
            1. Enrico Hezkiel Sirait Prodi S1 Informatika 2021 (Bidang Matematika)
            2. Febri Chatarina Sianipar Prodi S1 Teknik Bioproses 2019 (Bidang Biologi)',
            'judul_prestasi' => 'Selamat dan semangat berjuang kepada mahasiswa IT Del dalam Olimpiade Nasional Matematika dan Ilmu Pengetahuan Alam (ONMIPA) Tingkat Nasional 2022'
        ]);


        DB::table('prestasi')->insert([
            'jenis_prestasi' => 'Dosen',
            'photo' => '6.jpg',
            'deskripsi' => 'Pada Hari Rabu, 29 November 2023, Dosen Institut Teknologi Del, Good Fried Panggabean, Ph.D menerima penghargaan sebagai Dosen dengan H-Indeks Scopus tertinggi di lingkungan kerja LLDikti Wilayah I. Penghargaan ini diberikan kepada dosen terbaik yang memberikan kontribusi dan dampak dari publikasi pada jurnal international bereputasi melalui metrik H-Indeks. Scopus merupakan salah satu sumber data literatur ilmiah berupa jurnal international bereputasi yg dimiliki dan dikelola oleh Elsevier. Jurnal terindeks Scopus menjadi referensi yg dipakai oleh Dirjen Dikti untuk menentukan jurnal international bereputasi.',
            'judul_prestasi' => 'Penghargaan sebagai Dosen dengan H-Indeks Scopus tertinggi di lingkungan kerja LLDikti Wilayah I.',
        ]);

        DB::table('prestasi')->insert([
            'jenis_prestasi' => 'Dosen',
            'photo' => '7.jpg',
            'deskripsi' => 'Selamat kepada 5 dosen Institut Teknologi Del yang telah menyelesaikan pelatihan Happy Digital X: Cities, System, Products and Services 2023:
            1. Dr. Johannes Sianipar, S.T., M.T. (Wakil Rektor Bidang Akademik dan Kemahasiswaan),
            2. Rosni Lumbantoruan,Ph.D (Wakil Rektor Bidang perencanaan, keuangan, dan sumber daya )
            3. Humasak Simanjuntak, ST., M.ISD (Wakil Rektor Bidang Kemitraan, Inovasi, dan Kewirausahaan),
            4. Dr. Merry Meryam Martgrita, S.Si., M.Si. (Dekan Fakultas Bioteknologi)
            5. Deni Lumbantoruan, Ph.D (Dosen Fakultas Informatika dan Teknik Elektro)

            Happy Digital X: Cities, System, Products and Services adalah program pendidikan profesional selama 4 bulan (Maret – Juli 2023) yang menggabungkan pembelajaran berbasis tantangan virtual dan tatap muka di Kampus UID Bali, dengan para peserta internasional yang berasal dari pemimpin perusahaan dan akademisi multinasional, serta instruktur global dari institusi akademik terbaik dunia.
            Program ini memberdayakan peserta untuk bersama-sama menciptakan masa depan kebahagiaan holistik yang selaras dengan Tujuan Pembangunan Berkelanjutan, dengan terlibat dalam proyek tantangan dunia nyata melalui keberhasilan implementasi TIK (Teknologi Informasi dan Komunikasi). Para peserta diharapkan siap untuk menumbuhkan kontribusi mengembangkan ekosistem inovasi digital yang bertema ‘Happy Digital Cities’.',
            'judul_prestasi' => '5 dosen Institut Teknologi Del yang telah menyelesaikan pelatihan Happy Digital X: Cities, System, Products and Services 2023',
        ]);

        DB::table('prestasi')->insert([
            'jenis_prestasi' => 'Dosen',
            'photo' => '8.jpg',
            'deskripsi' => 'Selamat kepada Bapak Dr. Batara Parada Siahaan, S.Kom., M.S.M., M.I.M, Dosen prodi Sarjana Terapan Teknologi Rekayasa Perangkat Lunak (TRPL) Institut Teknologi Del, yang sudah berhasil menyelesaikan studi Program Doktor dengan Predikat Cumlaude.
            Program:
            1. Master of Science in Management (ITB)
            2. Master of Management in Information (NTUST).

            Selama Program Doktoral, juga telah menyelesaikan program pelatihan intensive kepemimpinan dan entrepreneurship dari Babson College, Boston USA, program beasiswa Dikti.',
            'judul_prestasi' => 'Dosen menyelesaikan studi dengan predikat cumlaude',
        ]);

        DB::table('prestasi')->insert([
            'jenis_prestasi' => 'Dosen',
            'photo' => '9.jpg',
            'deskripsi' => 'Selamat kepada Ibu Monalisa Pasaribu (Dosen IT Del) yang lolos dalam Sertifikasi Kompetensi (Sertikom) Luar Negeri Program Pelatihan Oxford EMI Certificate Course for Vocational University Lecturers dan Kelulusan sebagai Reviewers Dewan Pendidikan Tinggi.
            Sertikom (Sertifikasi Kompetensi) adalah Program Kelembagaan Dirjen Pendidikan Vokasi untuk memberikan pelatihan dan sertifikasi bagi dosen. Pada gelombang pertama ini, Ibu Monalisa pasaribu, SS.,M.Ed (TESOL), Dosen Prodi D3 Teknologi Informasi, Fakultas Vokasi Institut Teknologi Del lolos seleksi untuk berangkat mengikuti pelatihan Oxford EMI Certificate Course for Vocational University Lecturers pada 20 November 2022 mendatang selama dua minggu di England, Inggris. Selain itu, beliau juga salah satu dari 69 dosen vokasi memenuhi kualifikasi sebagai reviewer Dewan Pendidikan Tinggi (DPT) selelah serangkaian seleksi. Program rekrutmen reviewer ini diikuti oleh 3.562 peserta dan hanya 254 orang yang lulus seleksi dari Dirjen Dikti maupun Vokasi.',
            'judul_prestasi' => 'Selamat kepada Ibu Monalisa Pasaribu (Dosen IT Del) yang lolos dalam Sertifikasi Kompetensi (Sertikom) Luar Negeri Program Pelatihan Oxford EMI Certificate Course for Vocational University Lecturers dan Kelulusan sebagai Reviewers Dewan Pendidikan Tinggi',
        ]);

        DB::table('prestasi')->insert([
            'jenis_prestasi' => 'Dosen',
            'photo' => '10.jpg',
            'deskripsi' => 'Selamat dan Sukses atas Terpilihnya Ibu Dr. Inggriani Liem (Direktur Politeknik Informatika Del Periode 2009 - 2012) sebagai penerima "Lifetime Achievement Awards 2022
            Terimakasih atas dedikasinya pada dunia Informatika Indonesia',
            'judul_prestasi' => 'Selamat dan Sukses atas Terpilihnya Ibu Dr. Inggriani Liem (Direktur Politeknik Informatika Del Periode 2009 - 2012) sebagai penerima "Lifetime Achievement Awards 2022',
        ]);

        DB::table('prestasi')->insert([
            'jenis_prestasi' => 'Institut',
            'photo' => '11.jpg',
            'deskripsi' => 'Selamat kepada Program Studi Sarjana Teknik Bioproses Institut Teknologi Del atas akreditasi "BAIK SEKALI"            ',
            'judul_prestasi' => 'Akreditasi Prodi Teknik Bioproses',
        ]);

        DB::table('prestasi')->insert([
            'jenis_prestasi' => 'Institut',
            'photo' => '12.jpg',
            'deskripsi' => 'Dalam kesempatan ini, IT Del, PT Len Industri berinisiatif bekerja sama dengan IBM melakukan transfer teknologi untuk pengembangan dan produksi teknologi baru pemantauan kegempaan dan gunung api. Ilmuwan Indonesia, Dr. Oki Gunawan yang mewakili IBM mengunjungi IT Del pada tanggal 7-8 Agustus 2023 untuk memberikan workshop transfer teknologi : Parallel Dipole Line (PDL) Magnetic Trap Sensor Technology. Teknologi ini merupakan hasil karya Dr. Oki dan timnya di IBM T. J. Watson Research Center, markas riset IBM di Amerika Serikat. Beliau menemukan fenomena fisika baru yang disebut “efek punuk unta” (camelback effect) yang terjadi pada sistem dua magnet silinder diametrik dan sebatang grafit yang bisa terjebak dan mengambang di tengahnya.
            Dr. Oki menyatakan bahwa, riset PDL ini dimotivasi oleh perkembangan teknologi IoT dalam dekade terakhir yang bisa menghubungkan banyak jenis sensor untuk memperoleh data yang banyak dan memperoleh informasi baru. Sistem PDL ini juga dapat dipakai untuk berbagai aplikasi sensor seperti seismometer, tiltmeter, viscometer gas, sensor tekanan vakum, dll. Dalam kegiatan workshop ini, Dr. Oki memberikan paparan dari prinsip-prinsip dasar hingga keberbagai aplikasi. Sebagai contoh, prototipe PDL seismometer sudah dikembangkan dan ditest di Italia dan Indonesia hingga protipenya telah dikembangkan mencapai tiga generasi sehingga makin canggih dan lebih murah.
            Diharapkan dengan hadirnya teknologi baru jebakan magnetik PDL ini di Indonesia akan membawa banyak manfaat seperti meningkatkan kapabilitas mitigasi bencana gempa, tsunami dan gunung api, menciptakan industri baru yang membuka lapangan kerja di Indonesia, dan menghadirkan aktivitas riset kelas dunia (world-class research) untuk IT Del dan Indonesia pada umumnya.',
            'judul_prestasi' => 'IT Del, PT Len Industri berinisiatif bekerja sama dengan IBM melakukan transfer teknologi untuk pengembangan dan produksi teknologi baru pemantauan kegempaan dan gunung api.',
        ]);

        DB::table('prestasi')->insert([
            'jenis_prestasi' => 'Institut',
            'photo' => '13.jpg',
            'deskripsi' => 'Pada tanggal 10 Juli 2023 Perpustakaan IT Del terpilih menjadi salah satu penerima hibah bahan pustaka sebanyak 425 judul/850 eksemplar dan 2 unit komputer dari Perpustakaan Nasional Republik Indonesia. Hibah yang dimaksud diterima secara simbolis oleh Bapak Dr. Arnaldo Marulitua Sinaga, ST., M.InfoTech. (Rektor IT Del) pada acara Bimtek Pengembangan Perpustakaan Perguruan Tinggi yang diselenggarakan oleh Perpusnas RI di Hotel Radison Medan. Pada kegiatan ini, Rektor IT Del juga menjadi narasumber dalam diskusi panel yang merupakan bagian dari acara Bimtek tersebut.
            Kegiatan Bimtek ini membahas tentang kemas ulang informasi, pendaftaran NPP, aplikasi bintang pusnas edu, e-resources, serta tentang akreditasi perpustakaan perguruan tinggi. Kegiatan Bimtek diikuti juga oleh Ibu Jesicha Ulina Hutabarat, S.Sos (Kepala Perpustakaan IT Del).',
            'judul_prestasi' => 'Perpustakaan IT Del terpilih menjadi salah satu penerima hibah bahan pustaka sebanyak 425 judul/850 eksemplar dan 2 unit komputer dari Perpustakaan Nasional Republik Indonesia.',
        ]);

        DB::table('prestasi')->insert([
            'jenis_prestasi' => 'Institut',
            'photo' => '14.jpg',
            'deskripsi' => 'Pada tanggal 10 Mei 2023, IT Del mendapatkan kabar baik tentang hasil Penghitungan Pemantauan dan Evaluasi Peringkat Akreditasi (PEPA) Institusi. Melalui keputusan BAN-PT Nomor 1855/BAN-PT/PMT2/2023 yang ditujukan kepada Dr. Arnaldo Marulitua Sinaga, ST., M.InfoTech. (Rektor IT Del), IT Del dinyatakan LOLOS PEPA. Dengan demikian, peringkat akreditasi IT Del (B) diperpanjang selama 5 tahun ke depan ( 2023 s.d. 2028).
            Sejak Desember tahun 2022, peringkat akreditasi IT Del telah dipantau oleh BAN PT (Badan Akreditasi Nasional Perguruan Tinggi) karena akan berakhir pada tanggal 18 Desember 2023. Pemantauan dimaksud disebut dengan istilah Pemantauan dan Evaluasi Peringkat Akreditasi (PEPA). Untuk dapat lolos PEPA, IT Del harus memenuhi 9 dari 10 indikator syarat Perlu PEPA (indikator-indikator terkait dengan Kemahasiswaan, SDM-Dosen, dan Akreditasi Prodi).
            Pada tanggal 9 September tahun 2022, Tim Akreditasi Institusi IT Del (AIPT-IT Del) yang diketuai oleh Tiurma Lumban Gaol, S.P., M.P. (Dosen/Ketua SPI IT Del) dibentuk untuk menyiapkan keperluan administrasi, menghitung capaian IT Del terhadap 10 indikator yang ditetapkan oleh BAN-PT, memastikan data PDDikti sudah ter-update, berkomunikasi dengan BAN-PT serta hal-hal lainnya yang dibutuhkan agar 10 indikator syarat lolos PEPA IT Del terpenuhi. Tim AIPT ini juga berkolaborasi dengan Satuan Penjaminan Mutu (SPM) IT Del yang diketuai oleh Parmonangan Rotua Togatorop, S.Kom., M.T.I (Dosen/Ketua SPM IT Del).
            Berdasarkan hasil perhitungan oleh BAN-PT terhadap 10 indikator PEPA pada bulan Mei 2023, IT Del jauh melampaui semua indikator yang ditetapkan oleh BAN-PT. Dengan demikian IT Del dinyatakan lolos PEPA sehingga peringkat akreditasi institusi IT Del (B) dapat dipertahankan untuk periode tahun 2023-2028 tanpa harus melalui jalur IAPT 3.0 (pengisian borang akreditasi institusi).
            Selamat kepada Institut Teknologi Del dan Yayasan Del atas pencapaian yang membanggakan ini',
            'judul_prestasi' => 'IT Del Berhasil Meraih Akreditasi Institusi Peringkat B untuk periode 2023-2028 melalui PEPA',
        ]);

        DB::table('prestasi')->insert([
            'jenis_prestasi' => 'Institut',
            'photo' => '15.jpg',
            'deskripsi' => 'Sesuai dengan Keputusan Direktur Jenderal Pendidikan Vokasi Kementerian Pendidikan dan Kebudayaan nomor 21/d/o/2021 tentang Penetapan Perguruan Tinggi sebagai Pelaksana Pendampingan Program Sekolah Menengah Kejuruan Pusat Keunggulan tahun 2021, Institut Teknologi Del terpilih sebagai pendamping program SMK Pusat Keunggulan.
            SMK Pusat Keunggulan merupakan program pengembangan SMK dengan kompetensi keahlian tertentu dalam peningkatan kualitas dan kinerja, yang diperkuat melalui kemitraan dan penyelarasan dengan dunia usaha, dunia industri, dunia kerja.
            Sekolah Menengah Kejuruan Pusat Keunggulan diharapkan menjadi SMK rujukan yang dapat berfungsi sebagai sekolah penggerak dan pusat peningkatan kualitas dan kinerja SMK lainnya.
            Sebanyak 146 kampus Indonesia PTN, PTS ada politeknik, universitas, institut, sekolah tinggi dan sebagainya telah terpilih untuk mendampingi SMK Pusat Keunggulan tahun 2021 ini.
            Adapun peran institusi pendamping SMK Pusat Keunggulan yakni, melaksanakan kegiatan sesuai dengan tujuan Program SMK Pusat Keunggulan, menganalisa kekuatan dan kelemahan, serta mengembangkan potensi yang ada di sekolah, baik sumber daya manusia maupun sumber daya lainnya, untuk mencapai tujuan Program SMK Pusat Keunggulan.
            Selanjutnya, mendampingi Sekolah dalam mencapai target luaran, hasil dan dampak (output, outcome, impact) yang diinginkan serta menjadi perpanjangan tangan Kemendikbud dalam melakukan Program Oversight. ',
            'judul_prestasi' => 'Institut Teknologi Del terpilih sebagai pendamping program SMK Pusat Keunggulan.',
        ]);
    }
}
