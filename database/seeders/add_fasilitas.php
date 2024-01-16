<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class add_fasilitas extends Seeder
{
    public function run(): void
    {
        DB::table('fasilitas')->insert([
          [
            'kategori' => 'Asrama',
            'nama_fasilitas' => 'Asrama Pniel',
            'deskripsi_fasilitas' => 'merupakan salah satu gedung asrama yang dikhususkan untuk mahasiswa-mahasiswa Institut Teknologi Del.',
            'nama_file' => 'asrama_pniel',
            'file_gambar' => 'asrama-pniel.jpeg',
            'created_at' => now(),
            'updated_at' => now()
          ],
          [
            'kategori' => 'Asrama',
            'nama_fasilitas' => 'Asrama Jati',
            'deskripsi_fasilitas' => 'juga merupakan salah satu gedung asrama yang dikhususkan untuk mahasiswa-mahasiswa Institut Teknologi Del.',
            'nama_file' => 'asrama_jati',
            'file_gambar' => 'asrama-jati.jpeg',
            'created_at' => now(),
            'updated_at' => now()
          ],
          [
            'kategori' => 'Asrama',
            'nama_fasilitas' => 'Asrama Rusun 2',
            'deskripsi_fasilitas' => 'merupakan salah satu gedung asrama yang dikhususkan untuk mahasiswi-mahasiswi Institut Teknologi Del.',
            'nama_file' => 'rusun_2',
            'file_gambar' => 'rusun-2.jpeg',
            'created_at' => now(),
            'updated_at' => now()
          ],
          [
            'kategori' => 'Kesehatan & Olahraga',
            'nama_fasilitas' => 'Lapangan Hijau',
            'deskripsi_fasilitas' => 'Lapangan Hijau adalah salah satu fasilitas yang ada di IT Del. Lapangan hijau biasa digunakan oleh warga Del untuk melakukan acara-acara besar baik itu acara formal maupun non-formal. Lapangan hijau biasanya digunakan oleh mahasiswa untuk kegiatan dari himpunan prodi seperti temu ramah bersama, welcoming party, atau acara dari BEM seperti festival ataupun acara lainnya.',
            'nama_file' => 'lapangan_hijau',
            'file_gambar' => 'lapangan hijau.jpg',
            'created_at' => now(),
            'updated_at' => now()
          ],
          [
            'kategori' => 'Kesehatan & Olahraga',
            'nama_fasilitas' => 'Lapangan Basket',
            'deskripsi_fasilitas' => 'Lapangan basket adalah lapangan yang juga merupakan fasilitas bagi mahasiswa dibidang olahraga. Lapangan basket digunakan untuk acara olahraga yang disediakan oleh BEM seperti KM CUP (Kegiatan Mahasiswa CUP), dan lapangan ini juga biasa digunakan oleh mahasiswa untuk mengisi waktu luang di weekend atau di sore hari setelah jam akademik.',
            'nama_file' => 'lapangan_basket',
            'file_gambar' => 'lapangan basket.jpeg',
            'created_at' => now(),
            'updated_at' => now()
          ],
          [
            'kategori' => 'Kesehatan & Olahraga',
            'nama_fasilitas' => 'Lapangan Voli',
            'deskripsi_fasilitas' => 'Lapangan Voli tidak  jauh berbeda fungsinya dengan lapangan basket. Lapangan voli juga digunakan dalam acara olahraga BEM dan digunakan disaat waktu luang.',
            'nama_file' => 'lapangan_voli',
            'file_gambar' => 'lapangan voli.jpg',
            'created_at' => now(),
            'updated_at' => now()
          ],
          [
            'kategori' => 'Kesehatan & Olahraga',
            'nama_fasilitas' => 'Klinik IT Del',
            'deskripsi_fasilitas' => 'Klinik adalah fasilitas kesehatan yang dimiliki oleh IT Del. Klinik IT Del dilengkapi dengan obat-obat yang lengkap, ruangan yang diperlukan jika ada mahasiswa yang perlu diinfus, dokter dan juga perawat.  Selain itu juga tersedianya mobil kesehatan yang digunakan untuk menjemput mahasiswa sakit yang berada dikampus.',
            'nama_file' => 'klinik',
            'file_gambar' => 'klinik.jpg',
            'created_at' => now(),
            'updated_at' => now()
          ],
          [
            'kategori' => 'Laboratorium',
            'nama_fasilitas' => 'Laboratorium FITE',
            'deskripsi_fasilitas' => 'Laboratorium FITE menyediakan laboratorium komputer sebagai tempat untuk mendukung proses belajar mahasiswa/i FITE. Tersedia kelengkapan berupa komputer dengan komponen-komponennya baik itu mouse, CPU, keyboard dan juga kabel LAN.',
            'nama_file' => 'lab_komputer',
            'file_gambar' => 'lab-komputer2.jpg',
            'created_at' => now(),
            'updated_at' => now()
          ],
          [
            'kategori' => 'Laboratorium',
            'nama_fasilitas' => 'Laboratorium FTI',
            'deskripsi_fasilitas' => 'Laboratorium FTI menyediakan peralatan berupa 3D print yang akan membantu mahasiswa/i dalam proses perkuliahan dan juga membantu mahasiswa/i dalam mendalami bagaimana proses manufaktur. Selain itu ruangan ini juga dapat digunakan dalam melakukan presentasi proyek yang sudah dikerjakan.',
            'nama_file' => 'lab_fti',
            'file_gambar' => 'lab-fti.jpg',
            'created_at' => now(),
            'updated_at' => now()
          ],
          [
            'kategori' => 'Laboratorium',
            'nama_fasilitas' => 'Laboratorium FB',
            'deskripsi_fasilitas' => 'Laboratorium FB menyediakan peralatan berupa alat-alat dan bahan-bahan yang akan membantu mahasiswa/i FB dalam melakukan experimen yang dibutuhkan dalam proses perkuliahan. Dengan laboratorium ini juga, mahasiswa dapat melakukan pelatihan mandiri untuk mengerjakan proyek yang memerlukan experimen pada laboratorium.',
            'nama_file' => 'lab_fb',
            'file_gambar' => 'lab-fb.jpg',
            'created_at' => now(),
            'updated_at' => now()
          ],
          [
            'kategori' => 'Area Mahasiswa',
            'nama_fasilitas' => 'Ruangan Kelas',
            'deskripsi_fasilitas' => 'Institut Teknologi Del menyediakan ruangan kelas sebagai sarana utama belajar bagi mahasiswa. IT Del menyediakan smart classroom untuk mendukung kegiatan belajar mengajar mahasiswa. Ruang Kelas juga disediakan Idea Hub dan proyektor sebagai alat pendukung pembelajaran.',
            'nama_file' => 'ruangkelas',
            'file_gambar' => 'ruangkelas.jpg',
            'created_at' => now(),
            'updated_at' => now()
          ],
          [
            'kategori' => 'Area Mahasiswa',
            'nama_fasilitas' => 'Perpustakaan',
            'deskripsi_fasilitas' => 'Kampus juga menyediakan perpustakaan bagi mahasiswa. Buku yang tersedia di perpustakaan sudah hampir berjumlah +/- 2000 buah.  Perpustakaan dapat digunakan oleh mahasiswa maupun staff IT Del sebagai sarana belajar maupun berdiskusi. Perpustakaan menyediakan tempat belajar, BI Corner, ruang diskusi, dan ruang audiovisual. Perpustakaan dibuka mulai pukul 08:00 - 18:00 WIB. Anda dapat mengakses perpustakaan online (OLIS) melalui tautan ini.',
            'nama_file' => 'perpustakaan',
            'file_gambar' => 'perpustakaan.jpg',
            'created_at' => now(),
            'updated_at' => now()
          ],
          [
            'kategori' => 'Area Mahasiswa',
            'nama_fasilitas' => 'Open Theater',
            'deskripsi_fasilitas' => 'Open Theater atau biasa disingkat dengan OT merupakan fasilitas yang disediakan untuk seluruh civitas IT Del untuk berkumpul bersama. OT biasa digunakan bersama untuk hari hari besar seperti saat wisuda, perayaan paskah, ataupun kegiatan lainnya. Di hari biasa, OT dapat digunakan oleh mahasiswa untuk sarana berdiskusi dan berkumpul. Dari OT, kita bisa melihat pemandangan Danau Toba.',
            'nama_file' => 'opentheater',
            'file_gambar' => 'opentheater.jpg',
            'created_at' => now(),
            'updated_at' => now()
          ],
          [
            'kategori' => 'Area Mahasiswa',
            'nama_fasilitas' => 'Auditorium',
            'deskripsi_fasilitas' => 'Auditorium merupakan bangunan yang dirancang untuk pertemuan seperti kuliah umum, kuliah bersama, ataupun seminar. Auditorium juga bisa dipakai untuk acara-acara fakultas maupun prodi, tempat ibadah, dan tempat acara lainnya.',
            'nama_file' => 'auditorium',
            'file_gambar' => 'auditorium.jpg',
            'created_at' => now(),
            'updated_at' => now()
          ],
          [
            'kategori' => 'Area Mahasiswa',
            'nama_fasilitas' => 'Saung',
            'deskripsi_fasilitas' => 'Saung merupakan fasilitas yang disediakan oleh kampus bagi mahasiswa . Saung dapat digunakan  oleh mahasiswa pada jam akademik mulai dari jam 08:00 - 17:00 WIB. Saung dapat digunakan oleh mahasiswa di luar jam akademik sebagai tempat belajar mandiri ataupun kerja kelompok dengan mahasiswa lainnya.',
            'nama_file' => 'saung',
            'file_gambar' => 'saung.jpg',
            'created_at' => now(),
            'updated_at' => now()
          ],
          [
            'kategori' => 'Area Mahasiswa',
            'nama_fasilitas' => 'Container',
            'deskripsi_fasilitas' => 'Container berada pada luar kampus. Container disediakan untuk digunakan oleh mahasiswa sebagai pendukung kegiatan UKM (Unit Kreativitas Mahasiswa).  Container dilengkapi dengan Air Conditioner (AC) dan karpet sebagai fasilitas pendukung.',
            'nama_file' => 'container',
            'file_gambar' => 'container.jpg',
            'created_at' => now(),
            'updated_at' => now()
          ],
          [
            'kategori' => 'Layanan Makanan',
            'nama_fasilitas' => 'Kantin',
            'deskripsi_fasilitas' => 'Institut Teknologi Del memiliki beberapa kanti, diantaramya adalah:
            Kantin Baru 
            Kantin Baru lantai 1 atas 
            kantin Baru lantai 1 bawah 
            Kantin Baru  lantai 2 Atas
            Kantin Baru lantai 2 bawah 
            Kantin Tengah Atas 
            Kantin Tengah Bawah  
            Kantin Lama 
            Kantin Lama lantai 1 
            kantin Lama lantai2',
            'nama_file' => 'layanan-kantin',
            'file_gambar' => 'layanan-kantin.jpg',
            'created_at' => now(),
            'updated_at' => now()
          ],
          [
            'kategori' => 'Layanan Makanan',
            'nama_fasilitas' => 'Koperasi',
            'deskripsi_fasilitas' => 'Koperasi Institut Teknologi Del adalah tempat untuk membeli kebutuhan-kebutuhan mahasiswa. Koperasi menyediakan berbagai kebutuhan mahasiswa del baik itu kebutuhan belajar, kebutuhan kesehatan, dan kebutuhan primer dari mahasiswa Institut Teknologi Del.',
            'nama_file' => 'layanan-koperasi',
            'file_gambar' => 'layanan-koperasi.jpg',
            'created_at' => now(),
            'updated_at' => now()
          ],
          [
            'kategori' => 'Layanan Makanan',
            'nama_fasilitas' => 'Cafetaria',
            'deskripsi_fasilitas' => 'Kafetaria (atau dalam bahasa Inggris "cafeteria") adalah jenis restoran atau tempat makan yang memiliki ciri khas tertentu dalam penyajian makanan. Ciri khas utamanya adalah bahwa makanan dan minuman disajikan di berbagai meja atau loket yang tersusun di dalam ruangan, dan pelanggan dapat memilih makanan mereka sendiri dari berbagai pilihan yang disajikan.',
            'nama_file' => 'layanan-cafetaria',
            'file_gambar' => 'layanan-cafetaria.jpg',
            'created_at' => now(),
            'updated_at' => now()
          ],
        ]);
    }
}
