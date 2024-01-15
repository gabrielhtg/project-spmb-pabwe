<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class add_dropdown_admisi extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('dropdown_admisi')->insert([
            [
                'judul'=>'Kelengkapan Berkas Pendaftaran',
                'isi'=>'
                    <ol>
                        <li>Data yang harus dilengkapi pada formulir pendaftaran daring
                            <ul>
                                <li>Memilih 3 maksimal 3 pilihan program studi;</li>
                                <li>Mengisi Data Pribadi, seperti;
                                    <ul>
                                        <li>NIK</li>
                                        <li>NISN</li>
                                        <li>Nama Lengkap</li>
                                        <li>Jenis Kelamin</li>
                                        <li>Tempat/Tanggal Lahir</li>
                                        <li>Agama</li>
                                        <li>Alamat</li>
                                        <li>Kode Pos</li>
                                        <li>No HP</li>
                                        <li>Email</li>
                                    </ul>
                                </li>
                                <li>Mengisi Data Orangtua
                                    <ul>
                                        <li>Nama Ayah dan Ibu Kandung</li>
                                        <li>Pekerjaan Ayah dan Ibu Kandung</li>
                                        <li>Penghasilkan Ayah dan Ibu Kandung</li>
                                        <li>Alamat Orangtua</li>
                                        <li>Kode Pos</li>
                                    </ul>
                                </li>
                                <li>Mengisi Data Akademis</li>
                                <li>Mengisi Data Kemampuan Bahasa Asing</li>
                                <li>Mengisi Data Pendidikan Ekstrakurikuler</li>
                                <li>Mengisi Pengalaman Organisasi</li>
                                <li>Mengisi  tentang mendapatkan/mendengar informasi mengenai program penerimaan mahasiswa IT Del melalui apa?</li>
                                <li>Mengisi Jumlah minimum N  untuk uang pembangunan sekali bayar</li>
                                <li>Mengunggah foto 3x4 untuk daring atau Menempelkan foto 3x4 untuk luring</li>
                            </ul>
                        </li>
                    </ol>
                ',
                'jalur'=>'PMDK',
                'created_by'=>'admin',
                'updated_by'=>'admin'
            ],
            [
                'judul'=>'Hal-hal yang harus diperhatikan peserta sebelum melakukan Tes wawancara Daring',
                'isi'=>'
                    <ol>
                        <li>Lulus seleksi administrasi berkas dan memiliki Kartu Ujian;</li>
                        <li>Pastikan anda telah menerima username dan password dari panitia PMB;</li>
                        <li>Mengunduh aplikasi ZOOM di Handphone para peserta;</li>
                        <li>Untuk mendapatkan informasi secara cepat dari panitia PMB, silahkan bergabung ke WhatsApp Grup dengan mengirikan kartu ujian ke WhatsApp Panitia PMB 0813 6075 8968</li>
                        <li>Pastikan menggunakan PC/Laptop dan tidak menggunakan smartphone saat mengikuti tes;</li>
                        <li>PC/Laptop sudah terinstal Firefox minimal versi 74.0.1 atau Chrome minimal versi 80.0.3987.163;</li>
                        <li>Pastikan memiliki akses internet yang stabil saat melakukan tes wawancara;</li>
                        <li>Mengikuti simulasi tes wawancara pada waktu yang ditentukan oleh panitia PMB;</li>
                        <li>Jika peserta belum mendapatkan usernama dan password silahkan menghubungi panitia.</li>
                    </ol>
                ',
                'jalur'=>'PMDK',
                'created_by'=>'admin',
                'updated_by'=>'admin'
            ],
            [
                'judul'=>'Hal-hal yang harus diperhatikan peserta saat melakukan Tes Wawancara Daring',
                'isi'=>'
                <ol>
                    <li>Peserta silakan mengakses  https://ecourse.del.ac.id  untuk mengikuti ujian sesuai dengan waktu yang telah ditentukan;</li>
                    <li>Masukkan username dan password yang telah dikirimkan panitia;</li>
                    <li>Anda tidak diperkenankan untuk melakukan Print Screen;</li>
                    <li>Selama wawancara berlangsung anda diwajibkan untuk mengaktifkan kamera dan mikrofon pada link zoom yang akan dibagikan oleh panitia;</li>
                    <li>Selama wawancara berlangsung TIDAK BOLEH menggunakan bantuan orang lain. Jika anda melakukan kecurangan maka akan dianggap gagal dalam tes ini.</li>
                <ol>
                ',
                'jalur'=>'PMDK',
                'created_by'=>'admin',
                'updated_by'=>'admin'
            ],
            [
                'judul'=>'Aturan Pelaksanaan Tes Wawancara Daring',
                'isi'=>'
                <ol>
                    <li>Peserta Ujian yang terlambat login atau mengalami gangguan teknis tidak diberikan perpanjangan waktu untuk wawancara;</li>
                    <li>Ketersediaan jaringan provider, koneksi jaringan yang lambat, kerusakan PC/Laptop yang dapat menyebabkan putusnya koneksi ketika wawancara berlangsung menjadi tanggung jawab peserta dan tidak diberikan perpanjangan waktu untuk wawancara;</li>
                    <li>Pengadaan dan pengunaan software (browser) yang tidak sesuai sebagaimana yang telah di syaratkan sehingga menyebabkan terhambatnya pelaksanaan Tes Akademik menjadi tanggung jawab peserta sepenuhnya dan tidak diberikan perpanjangan waktu untuk wawancara;</li>
                    <li>Peserta Tes yang lalai untuk melaksanakan wawancara pada jadwal yang telah ditentukan dianggap mengundurkan diri;</li>
                    <li>Jika dijumpai kendala selama wawancara daring berlangsung dan dipandang perlu/mendesak, peserta dapat menghubungi panitia di 0813 6075 8968 (Bisa WhatsApp).</li>
                <ol>
                ',
                'jalur'=>'PMDK',
                'created_by'=>'admin',
                'updated_by'=>'admin'
            ],
            [
                'judul'=>'Hal-hal yang harus diperhatikan peserta sebelum melakukan Tes Psikotes Onsite ',
                'isi'=>'
                <ol>
                    <li>Telah lulus dari Tes Wawancara bagi Jalur PMDK, Tes Akademik bagi Jalur USM dan Penilaian UTBK untuk jalur UTBK;</li>
                    <li>Peserta wajib menggunakan masker;</li>
                    <li>Membawa Kartu Pengenal Siswa;</li>
                    <li>Membawa Alat Tulis;</li>
                    <li>Mempersiapakn foto (Formal) dengan latar warna bebas dan ukuran gambar maksimal 2 MB serta dalam bentuk JPG (disimpan dalam flashdisk);</li>
                    <li>Peserta diwajibkan menggunakan pakaian sekolah, atau kemeja putih, celana/rok hitam (tidak boleh menggunakan pakaian pramuka) dan menggunakan sepatu terutup;</li>
                    <li>Diperbolehkan membawa minuman dan makanan ringan, berhubg pelaksanaan tes psikotes dilakukan hingga siang hari.</li>
                <ol>
                ',
                'jalur'=>'PMDK',
                'created_by'=>'admin',
                'updated_by'=>'admin'
            ],
            [
                'judul'=>'Hal-hal yang harus diperhatikan peserta saat melakukan Tes Psikotes Onsite ',
                'isi'=>'
                <ol>
                    <li>Peserta harus hadir pukul 08.00 wib di kompleks Institut Teknologi Del</li>
                    <li>Peserta akan diarahkan satpam menuju lokasi ujian;</li>
                    <li>Peserta harus mengisi daftar hadir yang telah disediakan oleh panitia;</li>
                    <li>Panita akan memberikan kode ujian psikotes;</li>
                    <li>Peserta akan diarahkan panitia ke ruang ujian;</li>
                    <li>Peserta akan duduk sesuai kursi yang telah ditentukan;</li>
                    <li>Peserta silakan mengakses  https://smileconsultingindonesia.com/test_cat_psi/m/index.php  untuk mengikuti ujian sesuai dengan waktu yang telah ditentukan;</li>
                    <li>Masukkan kode ujian yang telah dikirimkan panitia;</li>
                    <li>Dilarang melakukan tindak kecurangan</li>
                    <li>Tes ini terdapat 2 jenis tipe, yang dimana anda diminta mengerjakan dengan baik, cepat dan teliti.
                        <ul>
                            <li>Tipe 1 : Menggunakan Waktu (Terdapat “Bar” yang akan berjalan),</li>
                            <li>Tipe 2 : Tidak menggunakan waktu akan tetapi terdapat batas maksimal.</li>
                        </ul>
                    </li>
                    <li>Jenis Soal yang akan anda jalani adalah
                        <ul>
                            <li>Tes Berhitung : Memiliki waktu<li>
                            <li> Tes Memilih Jawaban :
                                <ul>
                                    <li>Anda diminta memilih jawaban yakni pada bagian atas/bawah,</li>
                                    <li>Anda langsung dapat klik jawabannya saja tanpa menghiraukan yang lain.</li>
                                </ul>
                            <li>
                        </ul>
                    </li>
                <ol>
                ',
                'jalur'=>'PMDK',
                'created_by'=>'admin',
                'updated_by'=>'admin'
            ],
            [
                'judul'=>'Hal-hal yang harus dipersiapkan peserta sebelum melakukan Daftar Ulang Onsite',
                'isi'=>'
                <ol>
                    <li>Untuk Pendaftaran akan dilakukan secara onsite atau langsung datang ke Kampus Institut Teknologi Del pada tanggal 23 Februari 2024;</li>                    <li>Mempersiapkan scan Ijazah/bukti tanda lulus SMA/SMK;</li>
                    <li>Mempersiapkan scan Akta Kelahiran atau Surat Kenal Lahir asli;</li>
                    <li>Mempersiapkan scan Kartu Keluarga;</li>
                    <li>Mempersiapkan scan Surat Keterangan Tidak Buta Warna dari Dokter Spesialis Mata bagi siswa yang melamar ke program studi Teknik Bioproses atau Teknik Elektro</li>
                <ol>
                ',
                'jalur'=>'PMDK',
                'created_by'=>'admin',
                'updated_by'=>'admin'
            ],
            [
                'judul'=>'Hal-hal yang harus dipersiapkan peserta sebelum melakukan Daftar Ulang Onsite',
                'isi'=>'
                <strong>Tahap 1</strong>
                    <ol>
                        <li>Peserta silakan mengakses <a href="http://spmbapp.del.ac.id">http://spmbapp.del.ac.id</a> untuk melakukan pendaftaran ulang pada tanggal 21 - 23 Februari 2024;</li>
                        <li>Memasukkan username dan password saat melakukan pendaftaran;</li>
                        <li>Mengunduh Informasi tentang keasramaan;</li>
                        <li>Mengunduh dan Mengunggah Surat Pernyataan Pendaftaran Mahasiswa Baru Angkatan 2024;</li>
                        <li>Mengunduh dan Mengunggah Surat Fakta Integritas Mahasiswa Baru Angkatan 2024;</li>
                        <li>Mengunduh dan Mengunggah Surat Pernyataan Persetujuan Pemeriksaan Kesehatan Mahasiswa Baru Angkatan 2024;</li>
                        <li>Mengunduh dan Mengunggah Surat Pernyataan Wali Mahasiswa Baru Angkatan 2024 (Jika diwakilkan kepada wali);</li>
                        <li>Mengunggah Surat Keterangan Tidak Buta Warna* dari Dokter Spesialis Mata bagi siswa yang melamar ke program studi Teknik Bioproses atau Teknik Elektro;</li>
                        <li>Mengunggah Ijazah/bukti tanda lulus SMA/SMK;</li>
                        <li>Mengunggah Akta Kelahiran atau Surat Kenal Lahir asli;</li>
                        <li>Mengunggah Kartu Keluarga;</li>
                        <li>Untuk pembayaran dapat dilakukan 2 cara yaitu dengan Virtual Account dan Cash</li>
                        <li>Untuk Pembayaran Virtual Account dapat dilakukan dari tanggal 21 - 23 Februari 2024;</li>
                        <li>Mengunduh Informasi Cara Pembayaran Virtual Account;</li>
                        <li>Untuk Pembayaran Cash dapat dilakukan pada tanggal 23 Februari 2024 di Institut Teknologi Del.</li>
                    </ol>
                <strong>Tahap 2</strong>
                <ol>
                    <li>Peserta Pendaftar Ulang datang pada tanggal 23 Februari 2024 ke Institut Teknologi Del</li>
                    <li>Waktu pendaftaran ulang berlangsung dari pukul 09.00 – 15.00 WIB;</li>
                    <li>Peserta Pendaftar Ulang memakai pakaian Hitam-Putih (Laki-laki: Baju Putih Lengan Panjang, Celana Hitam Panjang; Perempuan: Baju Putih Lengan Panjang, Rok Hitam/Celana Hitam Panjang; Untuk perempuan agar rambut di ikat)</li>
                    <li>Membawa Pas Photo berwarna ukuran 3x4 sebanyak 2 buah</li>
                    <li>Peserta Daftar Ulang akan diarahkan oleh Saptam Institut Teknologi Del, menuju lokasi Daftar Ulang</li>
                    <li>Petugas akan memberikan nomor antrian sambil mempersilahkan peserta daftar ulang untuk menunggu di ruang tunggu</li>
                    <li>Petugas akan memanggil nomor urut peserta dan akan diarahkan ke Service Point</li>
                    <ol type="a">
                        <li>Pada pendaftran ulang terdapat 7 Service Point</li>
                        <li>Service Point 1:
                        <ul>
                            <li>Surat Pernyataan Pendaftaran Mahasiswa Baru Angkatan 2024 yang telah di tanda tangan dan diberikan materai;</li>
                            <li>Surat Fakta Integritas Mahasiswa Baru Angkatan 2024 yang telah di tanda tangan dan diberikan materai;</li>
                            <li>Surat Pernyataan Persetujuan Pemeriksaan Kesehatan Mahasiswa Baru Angkatan 2024 yang telah di tanda tangan dan diberikan materai;</li>
                            <li>Surat Pernyataan Wali Mahasiswa Baru Angkatan 2024 yang telah di tanda tangan dan diberikan materai;</li>
                            <li>Surat Keterangan Tidak Buta Warna dari Dokter Spesialis Mata bagi siswa yang melamar ke program studi Teknik Bioproses atau Teknik Elektro;</li>
                            <li>Fotokopi Ijazah yang dilegalisir/bukti tanda lulus SMA/SMK;</li>
                            <li>Fotokopi Akta Kelahiran atau Surat Kenal Lahir asli;</li>
                            <li>Fotokopi Kartu Keluarga;</li>
                            <li>Fotokopi KTP (Jika sudah ada)</li>
                            <li>Peserta akan menerima kertas yang berisi informasi terkait: Form Service Point Check; Informasi Beasiswa di Institut Teknologi Del dan Informasi Spesifikasi Laptop</li>
                        </ul>
                        </li>
                        <li>Service Point 2: Peserta melakukan verifikasi data akademik. Dokumen yang diperlukan:
                        <ul>
                            <li>Fotokopi Kartu Keluarga;</li>
                            <li>Fotokopi KTP (Jika sudah ada);</li>
                            <li>Fotokopi Ijazah yang dilegalisir/bukti tanda lulus SMA/SMK;</li>
                        </ul>
                        </li>
                        <li>Service Point 3: Informasi terkait Keasramaan seperti:
                        <ul>
                            <li>Kehidupan Asrama;</li>
                            <li>Perlengkapan mahasiswa yang akan dibawa.</li>
                        </ul>
                        </li>
                        <li>Service Point 4: Peserta melakukan pembayaran daftar ulang. Jika peserta telah membayar melalui Virtual Account maka hanya akan dilakukan proses verifikasi pembayaran kepada pihak Keuangan IT Del (Mohon juga dibawakan bukti telah melakukan pembayaran).</li>
                        <li>Service Point 5: Peserta mengukur badan untuk keperluan pembuatan Jas (Almamater), Training Pack, Kaos Del</li>
                        <li>Service Point 6: Peserta melakukan foto dan pengisian formulir untuk keperluan pembuatan Kartu Tanda Mahasiswa ATM;</li>
                        <li>Service Point 7: Peserta mendapatkan Kartu Tanda Mahasiswa Sementara dan Goodie Bag.</li>
                        <li>Service Point 8: Peserta dapat melakukan pemesanan perlengkapan mahasiswa oleh pihak Koperasi IT Del.</li>
                    </ol>
                </ol>
                ',
                'jalur'=>'PMDK',
                'created_by'=>'admin',
                'updated_by'=>'admin'
            ],
            [
                'judul'=>'Prosedur Pendaftaran Ulang PMDK secara Daring dapat dilihat pada  video berikut',
                'isi'=>'Kunjungi link berikut <a href="https://www.youtube.com/watch?v=Te8IZ1w5Yfc">https://www.youtube.com/watch?v=Te8IZ1w5Yfc</a>',
                'jalur'=>'PMDK',
                'created_by'=>'admin',
                'updated_by'=>'admin'
            ],
            [
                'judul'=>'Daftar Sekolah Penerima Jalur PMDK Institut Teknologi Del T.A. 2024/2025',
                'isi'=>'Daftar Sekolah peserta jalur PMDK IT Del Tahun 2024 dapat dilihat pada tautan berikut <a href="https://bit.ly/Sekolah-PesertaPMDK-ITDel-2024">https://bit.ly/Sekolah-PesertaPMDK-ITDel-2024</a>',
                'jalur'=>'PMDK',
                'created_by'=>'admin',
                'updated_by'=>'admin'
            ],
            [
                'judul'=>'Kelengkapan Berkas Pendaftaran',
                'isi'=>'
                    <ol>
                        <li>Data yang harus dilengkapi pada formulir pendaftaran daring
                            <ul>
                                <li>Memilih 3 maksimal 3 pilihan program studi;</li>
                                <li>Mengisi Data Pribadi, seperti;
                                    <ul>
                                        <li>NIK</li>
                                        <li>NISN</li>
                                        <li>Nama Lengkap</li>
                                        <li>Jenis Kelamin</li>
                                        <li>Tempat/Tanggal Lahir</li>
                                        <li>Agama</li>
                                        <li>Alamat</li>
                                        <li>Kode Pos</li>
                                        <li>No HP</li>
                                        <li>Email</li>
                                    </ul>
                                </li>
                                <li>Mengisi Data Orangtua
                                    <ul>
                                        <li>Nama Ayah dan Ibu Kandung</li>
                                        <li>Pekerjaan Ayah dan Ibu Kandung</li>
                                        <li>Penghasilkan Ayah dan Ibu Kandung</li>
                                        <li>Alamat Orangtua</li>
                                        <li>Kode Pos</li>
                                    </ul>
                                </li>
                                <li>Mengisi Data Akademis</li>
                                <li>Mengisi Data Kemampuan Bahasa Asing</li>
                                <li>Mengisi Data Pendidikan Ekstrakurikuler</li>
                                <li>Mengisi Pengalaman Organisasi</li>
                                <li>Mengisi  tentang mendapatkan/mendengar informasi mengenai program penerimaan mahasiswa IT Del melalui apa?</li>
                                <li>Mengisi Jumlah minimum N  untuk uang pembangunan sekali bayar</li>
                                <li>Mengunggah foto 3x4 untuk daring atau Menempelkan foto 3x4 untuk luring</li>
                            </ul>
                        </li>
                    </ol>
                ',
                'jalur'=>'USM',
                'created_by'=>'admin',
                'updated_by'=>'admin'
            ],
            [
                'judul'=>'Prosedur Pendaftaran USM secara Daring dapat dilihat pada  video berikut',
                'isi'=>'Kunjungi link berikut <a href="https://youtu.be/ZePASHhSUMk">https://youtu.be/ZePASHhSUMk</a>',
                'jalur'=>'UTBK',
                'created_by'=>'admin',
                'updated_by'=>'admin'
            ],
            [
                'judul'=>'Hal-hal yang harus diperhatikan peserta sebelum melakukan Tes Akademik Daring',
                'isi'=>'
                    <ol>
                        <li>Telah melakukan pendaftaran dan memiliki Kartu Ujian;</li>
                        <li>Pastikan anda telah menerima username dan password dari panitia PMB;</li>
                        <li>Mengunduh aplikasi ZOOM di Handphone para peserta;</li>
                        <li>Untuk mendapatkan informasi secara cepat dari panitia PMB, silahkan bergabung ke WhatsApp Grup dengan mengirikan kartu ujian ke WhatsApp Panitia PMB 0813 6075 8968</li>
                        <li>Pastikan menggunakan PC/Laptop dan tidak menggunakan smartphone saat mengikuti tes;</li>
                        <li>PC/Laptop sudah terinstal Firefox minimal versi 74.0.1 atau Chrome minimal versi 80.0.3987.163;</li>
                        <li>Pastikan memiliki akses internet yang stabil saat melakukan tes;</li>
                        <li>Siapkan kertas buram untuk ujian matematika dan dilarang menggunakan alat bantu hitung;</li>
                        <li>Mengikuti simulasi tes akademik pada waktu yang ditentukan oleh panitia PMB;</li>
                        <li>Jika peserta belum mendapatkan usernama dan password silahkan menghubungi panitia.</li>
                    </ol>
                ',
                'jalur'=>'USM',
                'created_by'=>'admin',
                'updated_by'=>'admin'
            ],
            [
                'judul'=>'Hal-hal yang harus diperhatikan peserta saat melakukan Tes Akademik Daring',
                'isi'=>'
                <ol>
                    <li>Peserta silakan mengakses  https://ecourse.del.ac.id  untuk mengikuti ujian sesuai dengan waktu yang telah ditentukan;</li>
                    <li>Masukkan username dan password yang telah dikirimkan panitia;</li>
                    <li>Anda tidak diperkenankan untuk melakukan Print Screen;</li>
                    <li>Selama wawancara berlangsung anda diwajibkan untuk mengaktifkan kamera dan mikrofon pada link zoom yang akan dibagikan oleh panitia;</li>
                    <li>Selama wawancara berlangsung TIDAK BOLEH menggunakan bantuan orang lain. Jika anda melakukan kecurangan maka akan dianggap gagal dalam tes ini.</li>
                    <li>Setiap soal berbentuk pilihan ganda. Hanya terdapat satu jawaban yang benar untuk setiap pertanyaan;</li>
                    <li>Untuk setiap jawaban yang benar anda mendapat nilai +4, sedangkan jawaban yang salah mendapat nilai -1 dan nilai 0 untuk soal yang tidak dijawab;</li>
                <ol>
                ',
                'jalur'=>'USM',
                'created_by'=>'admin',
                'updated_by'=>'admin'
            ],
            [
                'judul'=>'Aturan Pelaksanaan Tes Akademik Daring',
                'isi'=>'
                <ol>
                    <li>Peserta Ujian yang terlambat login atau mengalami gangguan teknis tidak diberikan perpanjangan waktu untuk wawancara;</li>
                    <li>Ketersediaan jaringan provider, koneksi jaringan yang lambat, kerusakan PC/Laptop yang dapat menyebabkan putusnya koneksi ketika wawancara berlangsung menjadi tanggung jawab peserta dan tidak diberikan perpanjangan waktu untuk wawancara;</li>
                    <li>Pengadaan dan pengunaan software (browser) yang tidak sesuai sebagaimana yang telah di syaratkan sehingga menyebabkan terhambatnya pelaksanaan Tes Akademik menjadi tanggung jawab peserta sepenuhnya dan tidak diberikan perpanjangan waktu untuk wawancara;</li>
                    <li>Peserta Tes yang lalai untuk melaksanakan wawancara pada jadwal yang telah ditentukan dianggap mengundurkan diri;</li>
                    <li>Jika dijumpai kendala selama wawancara daring berlangsung dan dipandang perlu/mendesak, peserta dapat menghubungi panitia di 0813 6075 8968 (Bisa WhatsApp).</li>
                <ol>
                ',
                'jalur'=>'USM',
                'created_by'=>'admin',
                'updated_by'=>'admin'
            ],
            [
                'judul'=>'Hal-hal yang harus diperhatikan peserta sebelum melakukan Tes Psikotes Onsite ',
                'isi'=>'
                <ol>
                    <li>Telah lulus dari Tes Wawancara bagi Jalur PMDK, Tes Akademik bagi Jalur USM dan Penilaian UTBK untuk jalur UTBK;</li>
                    <li>Peserta wajib menggunakan masker;</li>
                    <li>Membawa Kartu Pengenal Siswa;</li>
                    <li>Membawa Alat Tulis;</li>
                    <li>Mempersiapakn foto (Formal) dengan latar warna bebas dan ukuran gambar maksimal 2 MB serta dalam bentuk JPG (disimpan dalam flashdisk);</li>
                    <li>Peserta diwajibkan menggunakan pakaian sekolah, atau kemeja putih, celana/rok hitam (tidak boleh menggunakan pakaian pramuka) dan menggunakan sepatu terutup;</li>
                    <li>Diperbolehkan membawa minuman dan makanan ringan, berhubg pelaksanaan tes psikotes dilakukan hingga siang hari.</li>
                <ol>
                ',
                'jalur'=>'USM',
                'created_by'=>'admin',
                'updated_by'=>'admin'
            ],
            [
                'judul'=>'Hal-hal yang harus diperhatikan peserta saat melakukan Tes Psikotes Onsite ',
                'isi'=>'
                <ol>
                    <li>Peserta harus hadir pukul 08.00 wib di kompleks Institut Teknologi Del</li>
                    <li>Peserta akan diarahkan satpam menuju lokasi ujian;</li>
                    <li>Peserta harus mengisi daftar hadir yang telah disediakan oleh panitia;</li>
                    <li>Panita akan memberikan kode ujian psikotes;</li>
                    <li>Peserta akan diarahkan panitia ke ruang ujian;</li>
                    <li>Peserta akan duduk sesuai kursi yang telah ditentukan;</li>
                    <li>Peserta silakan mengakses  https://smileconsultingindonesia.com/test_cat_psi/m/index.php  untuk mengikuti ujian sesuai dengan waktu yang telah ditentukan;</li>
                    <li>Masukkan kode ujian yang telah dikirimkan panitia;</li>
                    <li>Dilarang melakukan tindak kecurangan</li>
                    <li>Tes ini terdapat 2 jenis tipe, yang dimana anda diminta mengerjakan dengan baik, cepat dan teliti.
                        <ul>
                            <li>Tipe 1 : Menggunakan Waktu (Terdapat “Bar” yang akan berjalan),</li>
                            <li>Tipe 2 : Tidak menggunakan waktu akan tetapi terdapat batas maksimal.</li>
                        </ul>
                    </li>
                    <li>Jenis Soal yang akan anda jalani adalah
                        <ul>
                            <li>Tes Berhitung : Memiliki waktu<li>
                            <li> Tes Memilih Jawaban :
                                <ul>
                                    <li>Anda diminta memilih jawaban yakni pada bagian atas/bawah,</li>
                                    <li>Anda langsung dapat klik jawabannya saja tanpa menghiraukan yang lain.</li>
                                </ul>
                            <li>
                        </ul>
                    </li>
                <ol>
                ',
                'jalur'=>'USM',
                'created_by'=>'admin',
                'updated_by'=>'admin'
            ],
            [
                'judul'=>'Hal-hal yang harus dipersiapkan peserta sebelum melakukan Daftar Ulang Daring',
                'isi'=>'
                <ol>
                    <li>Mempersiapkan scan Ijazah/bukti tanda lulus SMA/SMK;</li>
                    <li>Mempersiapkan scan Akta Kelahiran atau Surat Kenal Lahir asli;</li>
                    <li>Mempersiapkan scan Kartu Keluarga;</li>
                    <li>Mempersiapkan scan Surat Keterangan Tidak Buta Warna dari Dokter Spesialis Mata bagi siswa yang melamar ke program studi Teknik Bioproses atau Teknik Elektro</li>
                    <strong>
                    Ket * : Mengingat situasi pandemi saat ini surat keterangan bisa disampaikan jika keadaan sudah kondusif. Apabila setelah dinyatakan lulus calon mahasiswa terbukti buta warna maka calon mahasiswa bersedia mengundurkan diri.
                    </strong>
                <ol>
                ',
                'jalur'=>'USM',
                'created_by'=>'admin',
                'updated_by'=>'admin'
            ],
            [
                'judul'=>'Hal-hal yang harus diperhatikan peserta saat melakukan Daftar Ulang Daring, bagi yang mendaftar secara luring akan disampaikan bersamaan pengumuman kelulusan',
                'isi'=>'
                    <ol>
                        <li>Peserta silakan mengakses <a href="http://spmbapp.del.ac.id">http://spmbapp.del.ac.id</a> untuk melakukan pendaftaran ulang pada tanggal 21 - 23 Februari 2024;</li>
                        <li>Memasukkan username dan password saat melakukan pendaftaran Hal-hal yang harus diperhatikan peserta saat melakukan Daftar Ulang Daring, bagi yang mendaftar secara luring akan disampaikan bersamaan pengumuman kelulusan;</li>
                        <li>Mengunduh Informasi tentang keasramaan;</li>
                        <li>Mengunduh dan Mengunggah Surat Pernyataan Pendaftaran Mahasiswa Baru Angkatan 2024;</li>
                        <li>Mengunduh dan Mengunggah Surat Fakta Integritas Mahasiswa Baru Angkatan 2024;</li>
                        <li>Mengunduh dan Mengunggah Surat Pernyataan Persetujuan Pemeriksaan Kesehatan Mahasiswa Baru Angkatan 2024;</li>
                        <li>Mengunduh dan Mengunggah Surat Pernyataan Wali Mahasiswa Baru Angkatan 2024 (Jika diwakilkan kepada wali);</li>
                        <li>Mengunggah Surat Keterangan Tidak Buta Warna* dari Dokter Spesialis Mata bagi siswa yang melamar ke program studi Teknik Bioproses atau Teknik Elektro;</li>
                        <li>Mengunggah Ijazah/bukti tanda lulus SMA/SMK;</li>
                        <li>Mengunggah Akta Kelahiran atau Surat Kenal Lahir asli;</li>
                        <li>Mengunggah Kartu Keluarga;</li>
                        <li>Mengisi data ukuran Jas Almamater;</li>
                        <li>Mengunduh Informasi Perlengkapan Mahasiswa Putra/i</li>
                        <li>Mengunduh Informasi Beasiswa di Institut Teknologi Del;</li>
                        <li>Mengunduh Informasi Spesifikasi Laptop;</li>
                        <li>Mengunduh Informasi Cara Pembayaran Virtual Account</li>
                        <strong>
                        Ket * : Mengingat situasi pandemi saat ini surat keterangan bisa disampaikan jika keadaan sudah kondusif. Apabila setelah dinyatakan lulus calon mahasiswa terbukti buta warna maka calon mahasiswa berse
                        </strong>
                    </ol>',
                'jalur'=>'USM',
                'created_by'=>'admin',
                'updated_by'=>'admin'
            ],
            [
                'judul'=>'Prosedur Pendaftaran Ulang USM secara Daring dapat dilihat pada  video berikut',
                'isi'=>'Kunjungi link berikut <a href="https://www.youtube.com/watch?v=Te8IZ1w5Yfc">https://www.youtube.com/watch?v=Te8IZ1w5Yfc</a>',
                'jalur'=>'USM',
                'created_by'=>'admin',
                'updated_by'=>'admin'
            ],
            [
                'judul'=>'Kelengkapan Berkas Pendaftaran',
                'isi'=>'
                    <ol>
                        <li>Data yang harus dilengkapi pada formulir pendaftaran daring
                            <ul>
                                <li>Memilih 3 maksimal 3 pilihan program studi;</li>
                                <li>Mengisi Data Pribadi, seperti;
                                    <ul>
                                        <li>NIK</li>
                                        <li>NISN</li>
                                        <li>Nama Lengkap</li>
                                        <li>Jenis Kelamin</li>
                                        <li>Tempat/Tanggal Lahir</li>
                                        <li>Agama</li>
                                        <li>Alamat</li>
                                        <li>Kode Pos</li>
                                        <li>No HP</li>
                                        <li>Email</li>
                                    </ul>
                                </li>
                                <li>Mengisi Data Orangtua
                                    <ul>
                                        <li>Nama Ayah dan Ibu Kandung</li>
                                        <li>Pekerjaan Ayah dan Ibu Kandung</li>
                                        <li>Penghasilkan Ayah dan Ibu Kandung</li>
                                        <li>Alamat Orangtua</li>
                                        <li>Kode Pos</li>
                                    </ul>
                                </li>
                                <li>Mengisi Data Akademis</li>
                                <li>Mengisi Data Kemampuan Bahasa Asing</li>
                                <li>Mengisi Data Pendidikan Ekstrakurikuler</li>
                                <li>Mengisi Pengalaman Organisasi</li>
                                <li>Mengisi  tentang mendapatkan/mendengar informasi mengenai program penerimaan mahasiswa IT Del melalui apa?</li>
                                <li>Mengisi Jumlah minimum N  untuk uang pembangunan sekali bayar</li>
                                <li>Mengunggah foto 3x4 untuk daring atau Menempelkan foto 3x4 untuk luring</li>
                            </ul>
                        </li>
                    </ol>
                ',
                'jalur'=>'UTBK',
                'created_by'=>'admin',
                'updated_by'=>'admin'
            ],
            [
                'judul'=>'Prosedur Pendaftaran Seleksi UTBK secara Daring dapat dilihat pada  video berikut',
                'isi'=>'Kunjungi link berikut <a href="https://youtu.be/ZePASHhSUMk">https://youtu.be/ZePASHhSUMk</a>',
                'jalur'=>'UTBK',
                'created_by'=>'admin',
                'updated_by'=>'admin'
            ],
            [
                'judul'=>'Hal-hal yang harus diperhatikan peserta sebelum melakukan Tes Psikotes Onsite ',
                'isi'=>'
                <ol>
                    <li>Telah lulus dari Tes Wawancara bagi Jalur PMDK, Tes Akademik bagi Jalur USM dan Penilaian UTBK untuk jalur UTBK;</li>
                    <li>Peserta wajib menggunakan masker;</li>
                    <li>Membawa Kartu Pengenal Siswa;</li>
                    <li>Membawa Alat Tulis;</li>
                    <li>Mempersiapakn foto (Formal) dengan latar warna bebas dan ukuran gambar maksimal 2 MB serta dalam bentuk JPG (disimpan dalam flashdisk);</li>
                    <li>Peserta diwajibkan menggunakan pakaian sekolah, atau kemeja putih, celana/rok hitam (tidak boleh menggunakan pakaian pramuka) dan menggunakan sepatu terutup;</li>
                    <li>Diperbolehkan membawa minuman dan makanan ringan, berhubg pelaksanaan tes psikotes dilakukan hingga siang hari.</li>
                <ol>
                ',
                'jalur'=>'UTBK',
                'created_by'=>'admin',
                'updated_by'=>'admin'
            ],
            [
                'judul'=>'Hal-hal yang harus diperhatikan peserta saat melakukan Tes Psikotes Onsite ',
                'isi'=>'
                <ol>
                    <li>Peserta harus hadir pukul 08.00 wib di kompleks Institut Teknologi Del</li>
                    <li>Peserta akan diarahkan satpam menuju lokasi ujian;</li>
                    <li>Peserta harus mengisi daftar hadir yang telah disediakan oleh panitia;</li>
                    <li>Panita akan memberikan kode ujian psikotes;</li>
                    <li>Peserta akan diarahkan panitia ke ruang ujian;</li>
                    <li>Peserta akan duduk sesuai kursi yang telah ditentukan;</li>
                    <li>Peserta silakan mengakses  https://smileconsultingindonesia.com/test_cat_psi/m/index.php  untuk mengikuti ujian sesuai dengan waktu yang telah ditentukan;</li>
                    <li>Masukkan kode ujian yang telah dikirimkan panitia;</li>
                    <li>Dilarang melakukan tindak kecurangan</li>
                    <li>Tes ini terdapat 2 jenis tipe, yang dimana anda diminta mengerjakan dengan baik, cepat dan teliti.
                        <ul>
                            <li>Tipe 1 : Menggunakan Waktu (Terdapat “Bar” yang akan berjalan),</li>
                            <li>Tipe 2 : Tidak menggunakan waktu akan tetapi terdapat batas maksimal.</li>
                        </ul>
                    </li>
                    <li>Jenis Soal yang akan anda jalani adalah
                        <ul>
                            <li>Tes Berhitung : Memiliki waktu<li>
                            <li> Tes Memilih Jawaban :
                                <ul>
                                    <li>Anda diminta memilih jawaban yakni pada bagian atas/bawah,</li>
                                    <li>Anda langsung dapat klik jawabannya saja tanpa menghiraukan yang lain.</li>
                                </ul>
                            <li>
                        </ul>
                    </li>
                <ol>
                ',
                'jalur'=>'UTBK',
                'created_by'=>'admin',
                'updated_by'=>'admin'
            ],
            [
                'judul'=>'Hal-hal yang harus dipersiapkan peserta sebelum melakukan Daftar Ulang Daring',
                'isi'=>'
                <ol>
                    <li>Mempersiapkan scan Ijazah/bukti tanda lulus SMA/SMK;</li>
                    <li>Mempersiapkan scan Akta Kelahiran atau Surat Kenal Lahir asli;</li>
                    <li>Mempersiapkan scan Kartu Keluarga;</li>
                    <li>Mempersiapkan scan Surat Keterangan Tidak Buta Warna dari Dokter Spesialis Mata bagi siswa yang melamar ke program studi Teknik Bioproses atau Teknik Elektro</li>
                    <strong>
                    Ket * : Mengingat situasi pandemi saat ini surat keterangan bisa disampaikan jika keadaan sudah kondusif. Apabila setelah dinyatakan lulus calon mahasiswa terbukti buta warna maka calon mahasiswa bersedia mengundurkan diri.
                    </strong>
                <ol>
                ',
                'jalur'=>'UTBK',
                'created_by'=>'admin',
                'updated_by'=>'admin'
            ],
            [
                'judul'=>'Hal-hal yang harus diperhatikan peserta saat melakukan Daftar Ulang Daring, bagi yang mendaftar secara luring akan disampaikan bersamaan pengumuman kelulusan',
                'isi'=>'
                    <ol>
                        <li>Peserta silakan mengakses <a href="http://spmbapp.del.ac.id">http://spmbapp.del.ac.id</a> untuk melakukan pendaftaran ulang pada tanggal 21 - 23 Februari 2024;</li>
                        <li>Memasukkan username dan password saat melakukan pendaftaran Hal-hal yang harus diperhatikan peserta saat melakukan Daftar Ulang Daring, bagi yang mendaftar secara luring akan disampaikan bersamaan pengumuman kelulusan;</li>
                        <li>Mengunduh Informasi tentang keasramaan;</li>
                        <li>Mengunduh dan Mengunggah Surat Pernyataan Pendaftaran Mahasiswa Baru Angkatan 2024;</li>
                        <li>Mengunduh dan Mengunggah Surat Fakta Integritas Mahasiswa Baru Angkatan 2024;</li>
                        <li>Mengunduh dan Mengunggah Surat Pernyataan Persetujuan Pemeriksaan Kesehatan Mahasiswa Baru Angkatan 2024;</li>
                        <li>Mengunduh dan Mengunggah Surat Pernyataan Wali Mahasiswa Baru Angkatan 2024 (Jika diwakilkan kepada wali);</li>
                        <li>Mengunggah Surat Keterangan Tidak Buta Warna* dari Dokter Spesialis Mata bagi siswa yang melamar ke program studi Teknik Bioproses atau Teknik Elektro;</li>
                        <li>Mengunggah Ijazah/bukti tanda lulus SMA/SMK;</li>
                        <li>Mengunggah Akta Kelahiran atau Surat Kenal Lahir asli;</li>
                        <li>Mengunggah Kartu Keluarga;</li>
                        <li>Mengisi data ukuran Jas Almamater;</li>
                        <li>Mengunduh Informasi Perlengkapan Mahasiswa Putra/i</li>
                        <li>Mengunduh Informasi Beasiswa di Institut Teknologi Del;</li>
                        <li>Mengunduh Informasi Spesifikasi Laptop;</li>
                        <li>Mengunduh Informasi Cara Pembayaran Virtual Account</li>
                        <strong>
                        Ket * : Mengingat situasi pandemi saat ini surat keterangan bisa disampaikan jika keadaan sudah kondusif. Apabila setelah dinyatakan lulus calon mahasiswa terbukti buta warna maka calon mahasiswa berse
                        </strong>
                    </ol>',
                'jalur'=>'UTBK',
                'created_by'=>'admin',
                'updated_by'=>'admin'
            ],
            [
                'judul'=>'Prosedur Pendaftaran Ulang UTBK secara Daring dapat dilihat pada  video berikut',
                'isi'=>'Kunjungi link berikut <a href="https://www.youtube.com/watch?v=Te8IZ1w5Yfc">https://www.youtube.com/watch?v=Te8IZ1w5Yfc</a>',
                'jalur'=>'UTBK',
                'created_by'=>'admin',
                'updated_by'=>'admin'
            ],
            [
                'judul'=>'Lokasi Ujian Saringan Masuk - UTBK Tahun Akademik 2024/2025',
                'isi'=>'Penentuan lokasi ujian Psikotes ditentukan oleh panitia berdasarkan ASAL SEKOLAH pendaftar dengan ketentuan sebagai berikut:
                <ol>
                <li>Sumatera Utara : dilaksanakan di Kampus Institut Teknologi Del</li>
                <li>Luar Sumatera Utara : dilaksanakan via Online (Daring)</li>
                </ol>
                ',
                'jalur'=>'UTBK',
                'created_by'=>'admin',
                'updated_by'=>'admin'
            ],
            [
                'judul'=>'Kelengkapan Berkas Pendaftaran',
                'isi'=>'
                    <ol>
                        <li>Data yang harus dilengkapi pada formulir pendaftaran daring
                            <ul>
                                <li>Memilih 3 maksimal 3 pilihan program studi;</li>
                                <li>Mengisi Data Pribadi, seperti;
                                    <ul>
                                        <li>NIK</li>
                                        <li>NISN</li>
                                        <li>Nama Lengkap</li>
                                        <li>Jenis Kelamin</li>
                                        <li>Tempat/Tanggal Lahir</li>
                                        <li>Agama</li>
                                        <li>Alamat</li>
                                        <li>Kode Pos</li>
                                        <li>No HP</li>
                                        <li>Email</li>
                                    </ul>
                                </li>
                                <li>Mengisi Data Orangtua
                                    <ul>
                                        <li>Nama Ayah dan Ibu Kandung</li>
                                        <li>Pekerjaan Ayah dan Ibu Kandung</li>
                                        <li>Penghasilkan Ayah dan Ibu Kandung</li>
                                        <li>Alamat Orangtua</li>
                                        <li>Kode Pos</li>
                                    </ul>
                                </li>
                                <li>Mengisi Data Akademis</li>
                                <li>Mengisi Data Kemampuan Bahasa Asing</li>
                                <li>Mengisi Data Pendidikan Ekstrakurikuler</li>
                                <li>Mengisi Pengalaman Organisasi</li>
                                <li>Mengisi  tentang mendapatkan/mendengar informasi mengenai program penerimaan mahasiswa IT Del melalui apa?</li>
                                <li>Mengisi Jumlah minimum N  untuk uang pembangunan sekali bayar</li>
                                <li>Mengunggah foto 3x4 untuk daring atau Menempelkan foto 3x4 untuk luring</li>
                            </ul>
                        </li>
                    </ol>
                ',
                'jalur'=>'JPS',
                'created_by'=>'admin',
                'updated_by'=>'admin'
            ],
            [
                'judul'=>'Prosedur Pendaftaran JPS secara Daring dapat dilihat pada  video berikut',
                'isi'=>'Kunjungi link berikut <a href="https://youtu.be/jCTeDEB6m-Y">https://youtu.be/jCTeDEB6m-Y</a>',
                'jalur'=>'JPS',
                'created_by'=>'admin',
                'updated_by'=>'admin'
            ],
            [
                'judul'=>'Hal-hal yang harus diperhatikan peserta sebelum melakukan Tes wawancara Daring',
                'isi'=>'
                    <ol>
                        <li>Lulus seleksi administrasi berkas dan memiliki Kartu Ujian;</li>
                        <li>Pastikan anda telah menerima username dan password dari panitia PMB;</li>
                        <li>Mengunduh aplikasi ZOOM di Handphone para peserta;</li>
                        <li>Untuk mendapatkan informasi secara cepat dari panitia PMB, silahkan bergabung ke WhatsApp Grup dengan mengirikan kartu ujian ke WhatsApp Panitia PMB 0813 6075 8968</li>
                        <li>Pastikan menggunakan PC/Laptop dan tidak menggunakan smartphone saat mengikuti tes;</li>
                        <li>PC/Laptop sudah terinstal Firefox minimal versi 74.0.1 atau Chrome minimal versi 80.0.3987.163;</li>
                        <li>Pastikan memiliki akses internet yang stabil saat melakukan tes wawancara;</li>
                        <li>Mengikuti simulasi tes wawancara pada waktu yang ditentukan oleh panitia PMB;</li>
                        <li>Jika peserta belum mendapatkan usernama dan password silahkan menghubungi panitia.</li>
                    </ol>
                ',
                'jalur'=>'JPS',
                'created_by'=>'admin',
                'updated_by'=>'admin'
            ],
            [
                'judul'=>'Hal-hal yang harus diperhatikan peserta saat melakukan Tes Wawancara Daring',
                'isi'=>'
                <ol>
                    <li>Peserta silakan mengakses  https://ecourse.del.ac.id  untuk mengikuti ujian sesuai dengan waktu yang telah ditentukan;</li>
                    <li>Masukkan username dan password yang telah dikirimkan panitia;</li>
                    <li>Anda tidak diperkenankan untuk melakukan Print Screen;</li>
                    <li>Selama wawancara berlangsung anda diwajibkan untuk mengaktifkan kamera dan mikrofon pada link zoom yang akan dibagikan oleh panitia;</li>
                    <li>Selama wawancara berlangsung TIDAK BOLEH menggunakan bantuan orang lain. Jika anda melakukan kecurangan maka akan dianggap gagal dalam tes ini.</li>
                <ol>
                ',
                'jalur'=>'JPS',
                'created_by'=>'admin',
                'updated_by'=>'admin'
            ],
            [
                'judul'=>'Aturan Pelaksanaan Tes Wawancara Daring',
                'isi'=>'
                <ol>
                    <li>Peserta Ujian yang terlambat login atau mengalami gangguan teknis tidak diberikan perpanjangan waktu untuk wawancara;</li>
                    <li>Ketersediaan jaringan provider, koneksi jaringan yang lambat, kerusakan PC/Laptop yang dapat menyebabkan putusnya koneksi ketika wawancara berlangsung menjadi tanggung jawab peserta dan tidak diberikan perpanjangan waktu untuk wawancara;</li>
                    <li>Pengadaan dan pengunaan software (browser) yang tidak sesuai sebagaimana yang telah di syaratkan sehingga menyebabkan terhambatnya pelaksanaan Tes Akademik menjadi tanggung jawab peserta sepenuhnya dan tidak diberikan perpanjangan waktu untuk wawancara;</li>
                    <li>Peserta Tes yang lalai untuk melaksanakan wawancara pada jadwal yang telah ditentukan dianggap mengundurkan diri;</li>
                    <li>Jika dijumpai kendala selama wawancara daring berlangsung dan dipandang perlu/mendesak, peserta dapat menghubungi panitia di 0813 6075 8968 (Bisa WhatsApp).</li>
                <ol>
                ',
                'jalur'=>'JPS',
                'created_by'=>'admin',
                'updated_by'=>'admin'
            ],
            [
                'judul'=>'Hal-hal yang harus diperhatikan peserta sebelum melakukan Tes Psikotes Onsite ',
                'isi'=>'
                <ol>
                    <li>Telah lulus dari Tes Wawancara bagi Jalur PMDK, Tes Akademik bagi Jalur USM dan Penilaian UTBK untuk jalur UTBK;</li>
                    <li>Peserta wajib menggunakan masker;</li>
                    <li>Membawa Kartu Pengenal Siswa;</li>
                    <li>Membawa Alat Tulis;</li>
                    <li>Mempersiapakn foto (Formal) dengan latar warna bebas dan ukuran gambar maksimal 2 MB serta dalam bentuk JPG (disimpan dalam flashdisk);</li>
                    <li>Peserta diwajibkan menggunakan pakaian sekolah, atau kemeja putih, celana/rok hitam (tidak boleh menggunakan pakaian pramuka) dan menggunakan sepatu terutup;</li>
                    <li>Diperbolehkan membawa minuman dan makanan ringan, berhubg pelaksanaan tes psikotes dilakukan hingga siang hari.</li>
                <ol>
                ',
                'jalur'=>'JPS',
                'created_by'=>'admin',
                'updated_by'=>'admin'
            ],
            [
                'judul'=>'Hal-hal yang harus diperhatikan peserta saat melakukan Tes Psikotes Onsite ',
                'isi'=>'
                <ol>
                    <li>Peserta harus hadir pukul 08.00 wib di kompleks Institut Teknologi Del</li>
                    <li>Peserta akan diarahkan satpam menuju lokasi ujian;</li>
                    <li>Peserta harus mengisi daftar hadir yang telah disediakan oleh panitia;</li>
                    <li>Panita akan memberikan kode ujian psikotes;</li>
                    <li>Peserta akan diarahkan panitia ke ruang ujian;</li>
                    <li>Peserta akan duduk sesuai kursi yang telah ditentukan;</li>
                    <li>Peserta silakan mengakses  https://smileconsultingindonesia.com/test_cat_psi/m/index.php  untuk mengikuti ujian sesuai dengan waktu yang telah ditentukan;</li>
                    <li>Masukkan kode ujian yang telah dikirimkan panitia;</li>
                    <li>Dilarang melakukan tindak kecurangan</li>
                    <li>Tes ini terdapat 2 jenis tipe, yang dimana anda diminta mengerjakan dengan baik, cepat dan teliti.
                        <ul>
                            <li>Tipe 1 : Menggunakan Waktu (Terdapat “Bar” yang akan berjalan),</li>
                            <li>Tipe 2 : Tidak menggunakan waktu akan tetapi terdapat batas maksimal.</li>
                        </ul>
                    </li>
                    <li>Jenis Soal yang akan anda jalani adalah
                        <ul>
                            <li>Tes Berhitung : Memiliki waktu<li>
                            <li> Tes Memilih Jawaban :
                                <ul>
                                    <li>Anda diminta memilih jawaban yakni pada bagian atas/bawah,</li>
                                    <li>Anda langsung dapat klik jawabannya saja tanpa menghiraukan yang lain.</li>
                                </ul>
                            <li>
                        </ul>
                    </li>
                <ol>
                ',
                'jalur'=>'JPS',
                'created_by'=>'admin',
                'updated_by'=>'admin'
            ],
            [
                'judul'=>'Hal-hal yang harus dipersiapkan peserta sebelum melakukan Daftar Ulang Onsite',
                'isi'=>'
                <ol>
                    <li>Untuk Pendaftaran akan dilakukan secara onsite atau langsung datang ke Kampus Institut Teknologi Del pada tanggal 23 Februari 2024;</li>                    <li>Mempersiapkan scan Ijazah/bukti tanda lulus SMA/SMK;</li>
                    <li>Mempersiapkan scan Akta Kelahiran atau Surat Kenal Lahir asli;</li>
                    <li>Mempersiapkan scan Kartu Keluarga;</li>
                    <li>Mempersiapkan scan Surat Keterangan Tidak Buta Warna dari Dokter Spesialis Mata bagi siswa yang melamar ke program studi Teknik Bioproses atau Teknik Elektro</li>
                <ol>
                ',
                'jalur'=>'JPS',
                'created_by'=>'admin',
                'updated_by'=>'admin'
            ],
            [
                'judul'=>'Hal-hal yang harus dipersiapkan peserta sebelum melakukan Daftar Ulang Onsite',
                'isi'=>'
                <strong>Tahap 1</strong>
                    <ol>
                        <li>Peserta silakan mengakses <a href="http://spmbapp.del.ac.id">http://spmbapp.del.ac.id</a> untuk melakukan pendaftaran ulang pada tanggal 21 - 23 Februari 2024;</li>
                        <li>Memasukkan username dan password saat melakukan pendaftaran;</li>
                        <li>Mengunduh Informasi tentang keasramaan;</li>
                        <li>Mengunduh dan Mengunggah Surat Pernyataan Pendaftaran Mahasiswa Baru Angkatan 2024;</li>
                        <li>Mengunduh dan Mengunggah Surat Fakta Integritas Mahasiswa Baru Angkatan 2024;</li>
                        <li>Mengunduh dan Mengunggah Surat Pernyataan Persetujuan Pemeriksaan Kesehatan Mahasiswa Baru Angkatan 2024;</li>
                        <li>Mengunduh dan Mengunggah Surat Pernyataan Wali Mahasiswa Baru Angkatan 2024 (Jika diwakilkan kepada wali);</li>
                        <li>Mengunggah Surat Keterangan Tidak Buta Warna* dari Dokter Spesialis Mata bagi siswa yang melamar ke program studi Teknik Bioproses atau Teknik Elektro;</li>
                        <li>Mengunggah Ijazah/bukti tanda lulus SMA/SMK;</li>
                        <li>Mengunggah Akta Kelahiran atau Surat Kenal Lahir asli;</li>
                        <li>Mengunggah Kartu Keluarga;</li>
                        <li>Untuk pembayaran dapat dilakukan 2 cara yaitu dengan Virtual Account dan Cash</li>
                        <li>Untuk Pembayaran Virtual Account dapat dilakukan dari tanggal 21 - 23 Februari 2024;</li>
                        <li>Mengunduh Informasi Cara Pembayaran Virtual Account;</li>
                        <li>Untuk Pembayaran Cash dapat dilakukan pada tanggal 23 Februari 2024 di Institut Teknologi Del.</li>
                    </ol>
                <strong>Tahap 2</strong>
                <ol>
                    <li>Peserta Pendaftar Ulang datang pada tanggal 23 Februari 2024 ke Institut Teknologi Del</li>
                    <li>Waktu pendaftaran ulang berlangsung dari pukul 09.00 – 15.00 WIB;</li>
                    <li>Peserta Pendaftar Ulang memakai pakaian Hitam-Putih (Laki-laki: Baju Putih Lengan Panjang, Celana Hitam Panjang; Perempuan: Baju Putih Lengan Panjang, Rok Hitam/Celana Hitam Panjang; Untuk perempuan agar rambut di ikat)</li>
                    <li>Membawa Pas Photo berwarna ukuran 3x4 sebanyak 2 buah</li>
                    <li>Peserta Daftar Ulang akan diarahkan oleh Saptam Institut Teknologi Del, menuju lokasi Daftar Ulang</li>
                    <li>Petugas akan memberikan nomor antrian sambil mempersilahkan peserta daftar ulang untuk menunggu di ruang tunggu</li>
                    <li>Petugas akan memanggil nomor urut peserta dan akan diarahkan ke Service Point</li>
                    <ol type="a">
                        <li>Pada pendaftran ulang terdapat 7 Service Point</li>
                        <li>Service Point 1:
                        <ul>
                            <li>Surat Pernyataan Pendaftaran Mahasiswa Baru Angkatan 2024 yang telah di tanda tangan dan diberikan materai;</li>
                            <li>Surat Fakta Integritas Mahasiswa Baru Angkatan 2024 yang telah di tanda tangan dan diberikan materai;</li>
                            <li>Surat Pernyataan Persetujuan Pemeriksaan Kesehatan Mahasiswa Baru Angkatan 2024 yang telah di tanda tangan dan diberikan materai;</li>
                            <li>Surat Pernyataan Wali Mahasiswa Baru Angkatan 2024 yang telah di tanda tangan dan diberikan materai;</li>
                            <li>Surat Keterangan Tidak Buta Warna dari Dokter Spesialis Mata bagi siswa yang melamar ke program studi Teknik Bioproses atau Teknik Elektro;</li>
                            <li>Fotokopi Ijazah yang dilegalisir/bukti tanda lulus SMA/SMK;</li>
                            <li>Fotokopi Akta Kelahiran atau Surat Kenal Lahir asli;</li>
                            <li>Fotokopi Kartu Keluarga;</li>
                            <li>Fotokopi KTP (Jika sudah ada)</li>
                            <li>Peserta akan menerima kertas yang berisi informasi terkait: Form Service Point Check; Informasi Beasiswa di Institut Teknologi Del dan Informasi Spesifikasi Laptop</li>
                        </ul>
                        </li>
                        <li>Service Point 2: Peserta melakukan verifikasi data akademik. Dokumen yang diperlukan:
                        <ul>
                            <li>Fotokopi Kartu Keluarga;</li>
                            <li>Fotokopi KTP (Jika sudah ada);</li>
                            <li>Fotokopi Ijazah yang dilegalisir/bukti tanda lulus SMA/SMK;</li>
                        </ul>
                        </li>
                        <li>Service Point 3: Informasi terkait Keasramaan seperti:
                        <ul>
                            <li>Kehidupan Asrama;</li>
                            <li>Perlengkapan mahasiswa yang akan dibawa.</li>
                        </ul>
                        </li>
                        <li>Service Point 4: Peserta melakukan pembayaran daftar ulang. Jika peserta telah membayar melalui Virtual Account maka hanya akan dilakukan proses verifikasi pembayaran kepada pihak Keuangan IT Del (Mohon juga dibawakan bukti telah melakukan pembayaran).</li>
                        <li>Service Point 5: Peserta mengukur badan untuk keperluan pembuatan Jas (Almamater), Training Pack, Kaos Del</li>
                        <li>Service Point 6: Peserta melakukan foto dan pengisian formulir untuk keperluan pembuatan Kartu Tanda Mahasiswa ATM;</li>
                        <li>Service Point 7: Peserta mendapatkan Kartu Tanda Mahasiswa Sementara dan Goodie Bag.</li>
                        <li>Service Point 8: Peserta dapat melakukan pemesanan perlengkapan mahasiswa oleh pihak Koperasi IT Del.</li>
                    </ol>
                </ol>
                ',
                'jalur'=>'JPS',
                'created_by'=>'admin',
                'updated_by'=>'admin'
            ],
            [
                'judul'=>'Prosedur Pendaftaran Ulang JPS secara Daring dapat dilihat pada  video berikut',
                'isi'=>'Kunjungi link berikut <a href="https://www.youtube.com/watch?v=Te8IZ1w5Yfc">https://www.youtube.com/watch?v=Te8IZ1w5Yfc</a>',
                'jalur'=>'JPS',
                'created_by'=>'admin',
                'updated_by'=>'admin'
            ],
        ]);
    }
}
