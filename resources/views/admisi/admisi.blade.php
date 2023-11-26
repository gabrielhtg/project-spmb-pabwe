@extends("template.app")

@section("isi-halaman")

    <div class="container">
        <div class="bg-primary w-100">
            <h1 class="pt-6 text-white ms-5 pb-5">Admisi</h1>
        </div>

        <div>
            <div class="d-flex flex-column align-items-center mt-4 justify-content-center">
                <div class="card-admisi shadow-lg p-4 rounded-4">
                    <ul class="nav nav-pills nav-fill" id="tab-tabeltanggalpenting" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="jadwalpendaftaran-tab" data-bs-toggle="tab"
                                    data-bs-target="#jadwalpendaftaran-tab-pane" type="button" role="tab"
                                    aria-controls="home-tab-pane" aria-selected="true">
                                Jadwal Pendaftaran
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="jadwal-ujian-tab" data-bs-toggle="tab"
                                    data-bs-target="#jadwal-ujian-tab-pane" type="button" role="tab"
                                    aria-controls="profile-tab-pane" aria-selected="false">
                                Jadwal Ujian
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="jenis-test-tab" data-bs-toggle="tab"
                                    data-bs-target="#jenis-test-tab-pane" type="button" role="tab"
                                    aria-controls="contact-tab-pane" aria-selected="false">
                                Jenis Test
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="lokasi-tab" data-bs-toggle="tab"
                                    data-bs-target="#lokasi-tab-pane" type="button" role="tab"
                                    aria-controls="disabled-tab-pane" aria-selected="false">
                                Lokasi
                            </button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane ps-5 pe-5 fade show active" id="jadwalpendaftaran-tab-pane" role="tabpanel"
                             aria-labelledby="jadwalpendaftaran-tab" tabindex="0">
                            <table class="table mt-5">
                                <tbody>
                                <tr>
                                    <td>PMDK</td>
                                    <td>05 DESEMBER 2022 - 15 JANUARI 2023</td>
                                </tr>
                                <tr>
                                    <td>USM 1</td>
                                    <td>16 JANUARI 2023 - 12 FEBRUARI 2023</td>
                                </tr>
                                <tr>
                                    <td>USM 2</td>
                                    <td>13 FEBRUARI 2023 - 31 MARET 2023</td>
                                </tr>
                                <tr>
                                    <td>USM 3</td>
                                    <td>1 APRIL 2023 - 2 JUNI 2023</td>
                                </tr>
                                <tr>
                                    <td>UTBK</td>
                                    <td>29 MEI 2023 - 9 JULI 2023</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="jadwal-ujian-tab-pane" role="tabpanel"
                             aria-labelledby="profile-tab" tabindex="0">...
                        </div>
                        <div class="tab-pane fade" id="jenis-test-tab-pane" role="tabpanel"
                             aria-labelledby="jenis-test-tab" tabindex="0">...
                        </div>
                        <div class="tab-pane fade" id="lokasi-tab-pane" role="tabpanel" aria-labelledby="lokasi-tab"
                             tabindex="0">...
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section id="jalur-pendaftaran" class="container pt-5">
        <h3 class="pb-3 fw-semibold">Jalur Pendaftaran</h3>

        <ul class="nav nav-fill nav-pills" id="jalur-pendaftaran-Tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pmdk-tab" data-bs-toggle="tab" data-bs-target="#pmdk-tab-pane"
                        type="button" role="tab" aria-controls="utbk-tab-pane" aria-selected="true">
                    PMDK
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="usm-tab" data-bs-toggle="tab" data-bs-target="#usm-tab-pane" type="button"
                        role="tab" aria-controls="usm-tab-pane" aria-selected="false">
                    USM
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="utbk-tab" data-bs-toggle="tab" data-bs-target="#utbk-tab-pane"
                        type="button" role="tab" aria-controls="utbk-tab-pane" aria-selected="false">
                    UTBK
                </button>
            </li>
        </ul>

        <div class="tab-content" id="jenis-pendaftaran-TabContent">
            <div class="tab-pane fade show active" id="pmdk-tab-pane" role="tabpanel" aria-labelledby="pmdk-tab"
                 tabindex="0">
                <div class="d-flex pt-5 flex-column align-items-center">
                    <img style="width: 50rem" class="border border-1"
                         src="{{ asset("/assets/img/flow-pendaftaran.jpg") }}" alt="flow-pendaftaran">
                    <div style="width: 50rem" class="justify-content-center d-flex gap-5 mt-5 mb-5">
                        <button class="btn btn-primary">Pedoman Pendaftaran</button>
                        <button class="btn btn-primary">Pedoman Upload Dokumen</button>
                    </div>

                    <div class="w-100">
                        <h3 class="pb-3 fw-semibold">Persyaratan Umum</h3>

                        <ol>
                            <li>
                                Mengisi Formulir Pendaftaran PMDK 2023/2024.
                            </li>

                            <li>
                                Melampirkan Surat Rekomendasi dari Kepala Sekolah atau yang mewakili.
                            </li>

                            <li>
                                Melampirkan scan rapor kelas X s.d XII sampai semester V.
                            </li>

                            <li>
                                Melampirkan sertifikat/piagam penghargaan akademis dan non akademis (jika ada).
                            </li>

                            <li>
                                Siswa berasal dari jurusan yang tidak termasuk dalam kelompok Ilmu sosial, Budaya atau
                                Bahasa.
                            </li>

                            <li>
                                Usia <strong>maksimum 21 tahun</strong> per 31 Agustus 2023.
                            </li>

                            <li>
                                Memiliki Nilai Matematika, dan Fisika minimal 80.00, serta Bahasa Inggris minimal 70.00,
                                pada setiap semester, <strong>ATAU</strong> ranking <strong><=5</strong> setiap
                                semester, kecuali untuk jenjang DIV dan DIII, ranking <strong><= 10</strong>.
                            </li>

                            <li>
                                Dapat memilih maksimal 3 pilihan program studi, dari 8 program studi yang ada di IT Del
                                yakni :

                                <br> <br>
                                <ul>
                                    <li>
                                        <strong>Fakultas Vokasi [FV], Program Studi:</strong>
                                        <ol>
                                            <li>
                                                Teknologi Informasi (D3)
                                            </li>

                                            <li>
                                                Teknologi Komputer (D3)
                                            </li>

                                            <li>
                                                Teknologi Rekayasa Perangkat Lunak (D4)
                                            </li>
                                        </ol>
                                    </li>
                                </ul>

                                <br>

                                <ul>
                                    <li>
                                        <strong>Fakultas Informatika & Teknik Elektro [FITE], Program Studi:</strong>
                                        <ol>
                                            <li>
                                                Informatika (S1)
                                            </li>

                                            <li>
                                                Teknik Elektro (S1)
                                            </li>

                                            <li>
                                                Sistem Informasi (S1)
                                            </li>
                                        </ol>
                                    </li>
                                </ul>

                                <br>

                                <ul>
                                    <li>
                                        <strong>Fakultas Teknologi Industri [FTI], Program Studi:</strong>
                                        <ol>
                                            <li>
                                                Manajemen Rekayasa (S1)
                                            </li>

                                            <li>
                                                Teknik Metalurgi (S1)
                                            </li>
                                        </ol>
                                    </li>
                                </ul>

                                <br>
                                <ul>
                                    <li>
                                        <strong>Fakultas Bioteknologi [FB], Program Studi:</strong>
                                        <ol>
                                            <li>
                                                Teknik Bioproses (S1)
                                            </li>
                                        </ol>
                                    </li>
                                </ul>
                            </li>
                        </ol>
                    </div>

                    <div class="accordion pt-5 w-100" id="accordionpmdk">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    Hal-hal yang harus diperhatikan peserta ketika Tes Wawancara Daring
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse"
                                 data-bs-parent="#accordionpmdk">
                                <div class="accordion-body">
                                    <ol>
                                        <li>Lulus seleksi administrasi berkas dan memiliki Kartu Ujian;</li>
                                        <li>Pastikan anda telah menerima <strong>username</strong> dan
                                            <strong>password</strong> dari panitia PMB;
                                        </li>
                                        <li>Mengunduh aplikasi <strong>ZOOM</strong> di Handphone para peserta;</li>
                                        <li>Untuk mendapatkan informasi secara cepat dari panitia PMB, silahkan
                                            bergabung ke WhatsApp Grup dengan mengirikan kartu ujian ke WhatsApp Panitia
                                            PMB <strong>0822 7740 3596</strong></li>
                                        <li>Pastikan menggunakan PC/Laptop dan <strong>tidak menggunakan
                                                smartphone</strong> saat mengikuti tes;
                                        </li>
                                        <li>PC/Laptop sudah terinstal <strong>Firefox minimal versi 74.0.1</strong> atau
                                            <strong>Chrome minimal versi 80.0.3987.163;</strong></li>
                                        <li>Pastikan memiliki <strong>akses internet yang stabil</strong> saat melakukan
                                            tes wawancara;
                                        </li>
                                        <li>Mengikuti simulasi tes wawancara pada waktu yang ditentukan oleh panitia
                                            PMB;
                                        </li>
                                        <li>Jika peserta belum mendapatkan usernama dan password silahkan menghubungi
                                            panitia.
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-semibold" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                        aria-controls="collapseTwo">
                                    Aturan Pelaksanaan Tes Wawancara Daring
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse"
                                 data-bs-parent="#accordionpmdk">
                                <div class="accordion-body">
                                    <ol>
                                        <li>
                                            Peserta Ujian yang <strong>terlambat login</strong> atau mengalami gangguan
                                            teknis tidak diberikan perpanjangan waktu untuk wawancara;
                                        </li>
                                        <li>
                                            Ketersediaan jaringan provider, koneksi jaringan yang lambat, kerusakan
                                            PC/Laptop yang dapat menyebabkan <strong>putusnya koneksi</strong> ketika
                                            wawancara berlangsung menjadi tanggung jawab peserta dan <strong>tidak
                                                diberikan</strong> perpanjangan waktu untuk wawancara;
                                        </li>
                                        <li>
                                            Pengadaan dan pengunaan <strong>software (browser) yang tidak
                                                sesuai</strong> sebagaimana yang telah di syaratkan sehingga menyebabkan
                                            terhambatnya pelaksanaan Tes Akademik menjadi <strong>tanggung jawab peserta
                                                sepenuhnya</strong> dan <strong>tidak diberikan</strong> perpanjangan
                                            waktu untuk wawancara;
                                        </li>
                                        <li>
                                            Peserta Tes yang lalai untuk melaksanakan wawancara pada jadwal yang telah
                                            ditentukan dianggap <strong>mengundurkan diri;</strong>
                                        </li>
                                        <li>
                                            Jika dijumpai <strong>kendala selama</strong> wawancara
                                            <strong>daring</strong>berlangsung dan dipandang perlu/mendesak, peserta
                                            dapat menghubungi panitia di <strong>082277403596 (Bisa WhatsApp).</strong>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-semibold" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                    Hal-hal yang harus diperhatikan peserta ketika Tes Psikotes Onsite
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse"
                                 data-bs-parent="#accordionpmdk">
                                <div class="accordion-body">
                                    <ol>
                                        <li>Telah lulus dari Tes Wawancara bagi Jalur PMDK, Tes Akademik bagi Jalur USM
                                            dan Penilaian UTBK untuk jalur UTBK.
                                        </li>
                                        <li>Peserta wajib menggunakan masker;</li>
                                        <li>Membawa Kartu Pengenal Siswa;</li>
                                        <li>Membawa Alat Tulis;</li>
                                        <li>Mempersiapakn foto (Formal) dengan latar warna bebas dan ukuran gambar
                                            maksimal 2 MB serta dalam bentuk JPG (disimpan dalam flashdisk);
                                        </li>
                                        <li>Peserta diwajibkan menggunakan pakaian sekolah, atau kemeja putih,
                                            celana/rok hitam (tidak boleh menggunakan pakaian pramuka) dan menggunakan
                                            sepatu terutup;
                                        </li>
                                        <li>Diperbolehkan membawa minuman dan makanan ringan, berhubg pelaksanaan tes
                                            psikotes dilakukan hingga siang hari.
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-semibold" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseFour">
                                    Hal-hal yang harus diperhatikan peserta saat melakukan Daftar Ulang Onsite, bagi
                                    yang mendaftar secara luring akan disampaikan bersamaan pengumuman kelulusan
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse"
                                 data-bs-parent="#accordionpmdk">
                                <div class="accordion-body">
                                    <p><u><strong>TAHAP 1</strong></u></p>

                                    <ol>
                                        <li>Peserta silakan mengakses&nbsp;&nbsp;<a
                                                href="http://spmbapp.del.ac.id/index.php/site/login"><strong><em>http://spmbapp.del.ac.id</em></strong></a>&nbsp;&nbsp;untuk
                                            melakukan pendaftaran ulang&nbsp;pada tanggal <strong>14-15 Februari
                                                2023;</strong></li>
                                        <li>Memasukkan&nbsp;<strong>username&nbsp;dan password&nbsp;saat melakukan
                                                pendaftaran;</strong></li>
                                        <li>Mengunduh Informasi tentang keasramaan;</li>
                                        <li>Mengunduh&nbsp;dan&nbsp;Mengunggah Surat Pernyataan Pendaftaran Mahasiswa
                                            Baru Angkatan 2024;
                                        </li>
                                        <li>Mengunduh&nbsp;dan&nbsp;Mengunggah&nbsp; Surat Fakta Integritas Mahasiswa
                                            Baru Angkatan 2024;
                                        </li>
                                        <li>Mengunduh&nbsp;dan&nbsp;Mengunggah&nbsp; Surat Pernyataan Persetujuan
                                            Pemeriksaan Kesehatan Mahasiswa Baru Angkatan 2024;
                                        </li>
                                        <li>Mengunduh&nbsp;dan&nbsp;Mengunggah Surat Pernyataan Wali Mahasiswa Baru
                                            Angkatan 2024 (Jika diwakilkan kepada wali);
                                        </li>
                                        <li>Mengunggah&nbsp;Surat Keterangan&nbsp;<strong>Tidak Buta Warna*</strong>&nbsp;dari&nbsp;<strong>Dokter
                                                Spesialis Mata</strong>&nbsp;bagi siswa yang melamar ke&nbsp;<strong>program
                                                studi Teknik Bioproses atau Teknik Elektro;</strong></li>
                                        <li>Mengunggah&nbsp;Ijazah/bukti tanda lulus&nbsp;SMA/SMK;</li>
                                        <li>Mengunggah Akta Kelahiran atau Surat Kenal Lahir asli;</li>
                                        <li>Mengunggah Kartu Keluarga;</li>
                                        <li>Untuk pembayaran dapat dilakukan 2 cara yaitu dengan Virtual Account dan
                                            Cash
                                        </li>
                                        <li>Untuk Pembayaran Virtual Account dapat dilakukan dari tanggal <strong>16-17
                                                Februari 2023;</strong></li>
                                        <li>Mengunduh&nbsp;Informasi Cara Pembayaran Virtual Account</li>
                                        <li>Untuk Pembayaran Cash dapat dilakukan pada tanggal <strong>17 Februari
                                                2023</strong> di Institut Teknologi Del.
                                        </li>
                                    </ol>

                                    <p><u><strong>TAHAP 2</strong></u></p>

                                    <ol>
                                        <li>Peserta Pendaftar Ulang datang pada tanggal <strong>17 Februari
                                                2023</strong> ke Institut Teknologi Del
                                        </li>
                                        <li>Waktu pendaftaran ulang berlangsung dari pukul <strong>09.00 – 15.00
                                                WIB</strong>;
                                        </li>
                                        <li>Peserta Pendaftar Ulang memakai pakaian Hitam-Putih (Laki-laki : Baju Putih
                                            Lengan Panjang, Celana Hitam Panjang; Perempuan : Baju Putih Lengan Panjang,
                                            Rok Hitam/Celana Hitam Panjang; Untuk perempuan agar rambut di ikat)
                                        </li>
                                        <li>Membawa Pas Photo berwarna ukuran&nbsp;3x4 sebanyak 2 buah</li>
                                        <li>Peserta Daftar Ulang akan diarahkan oleh Saptam Institut Teknologi Del,
                                            menuju lokasi Daftar Ulang
                                        </li>
                                        <li>Petugas akan memberikan nomor antrian sambil mempersilahkan peserta daftar
                                            ulang untuk menunggu di ruang tunggu
                                        </li>
                                        <li>Petugas akan memanggil nomor urut peserta dan akan di arahkan ke Service
                                            Point
                                        </li>
                                        <li>Pada pendaftran ulang terdapat&nbsp; 7 Service Point</li>
                                        <li>Pada Service Point 1, peserta daftar ulang diminta untuk menyerahkan dokumen
                                            yang sebelumnya dikumpulkan ke dalam sistem daftra ulang seperti:
                                            <ol style="list-style-type:lower-alpha">
                                                <li>Surat Pernyataan Pendaftaran Mahasiswa Baru Angkatan 2024 yang telah
                                                    di tanda tangan dan diberikan materai;
                                                </li>
                                                <li>Surat Fakta Integritas Mahasiswa Baru Angkatan 2024 yang telah di
                                                    tanda tangan dan diberikan materai;
                                                </li>
                                                <li>Surat Pernyataan Persetujuan Pemeriksaan Kesehatan Mahasiswa Baru
                                                    Angkatan 2024 yang telah di tanda tangan dan diberikan materai;
                                                </li>
                                                <li>Surat Pernyataan Wali Mahasiswa Baru Angkatan 2024 yang telah di
                                                    tanda tangan dan diberikan materai;
                                                </li>
                                                <li>Surat Keterangan&nbsp;<strong>Tidak Buta Warna</strong>&nbsp;dari&nbsp;<strong>Dokter
                                                        Spesialis Mata</strong>&nbsp;bagi siswa yang melamar
                                                    ke&nbsp;<strong>program studi Teknik Bioproses atau Teknik
                                                        Elektro</strong></li>
                                                <li>Fotokopi Ijazah yang dilegalisir/bukti tanda lulus SMA/SMK;</li>
                                                <li>Fotokopi Akta Kelahiran atau Surat Kenal Lahir asli;</li>
                                                <li>Fotokopi Kartu Keluarga;</li>
                                                <li>Fotokopi KTP (Jika sudah ada)</li>
                                            </ol>
                                        </li>
                                        <li>Selain itu peserta akan menerima kertas yang berisi informasi terkait : Form
                                            Service Point Check; <strong>Informasi Beasiswa di Institut Teknologi Del
                                                dan Informasi Spesifikasi Laptop</strong></li>
                                        <li>Pada Service Point 2, peserta daftar ulang akan melakukan verifikasi data
                                            akademik.Dokume yang diperlukan:Fotokopi Kartu Keluarga; Fotokopi KTP (Jika
                                            sudah ada);&nbsp; Fotokopi Ijazah yang dilegalisir/bukti tanda lulus
                                            SMA/SMK;
                                        </li>
                                        <li>Pada Service Point 3, peserta akan mendapatkan informasi terkait Keasramaan
                                            seperti:
                                            <ol style="list-style-type:lower-alpha">
                                                <li>Kehidupan Asrama;</li>
                                                <li>Perlengkapan mahasiswa yang akan dibawa.</li>
                                            </ol>
                                        </li>
                                        <li>Pada Service Point 4, peserta akan melakukan pembayaran daftra ulang. Jika
                                            peserta&nbsp; telah membayar melalui Virtual Account maka hanya akan
                                            dilakukan proses verifikasi pembayaran kepada pihak Keuangan IT Del (Mohon
                                            juga dibawakan bukti telah melakukan pembayaran).
                                        </li>
                                        <li>Pada Service Point 5, peserta akan mengukur badan untuk keperluan pembuatan
                                            Jas (Almamater), Training Pack, Kaos Del
                                        </li>
                                        <li>Pada Service Point 6, peserta akan melakukan foto dan pengisian formulir
                                            untuk keperluan pembuatan Kartu Tanda Mahasiswa ATM;
                                        </li>
                                        <li>Pada Service Point 7, peserta akan mendapatkan Kartu Tanda Mahasiswa
                                            Sementara dan Goodie Bag.
                                        </li>
                                        <li>Pada Service Point 8, peserta dapat melakukan pemesanan perlengkapan
                                            mahasiswa oleh pihak Koperasi IT Del.
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-semibold" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false"
                                        aria-controls="collapseFive">
                                    Daftar Sekolah Penerimaan jalur PMDK
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse"
                                 data-bs-parent="#accordionpmdk">
                                <div class="accordion-body">

                                    <ol>
                                        <li>SMA Negeri 1 Balige</li>
                                        <li>SMA Negeri 1 Bandar</li>
                                        <li>SMA Negeri 1 Dolok Sanggul</li>
                                        <li>SMA Negeri 1 Girsang Sipangan Bolon</li>
                                        <li>SMA Negeri 1 Habinsaran</li>
                                        <li>SMA Negeri 1 Laguboti</li>
                                        <li>SMA Negeri 1 Lintongnihuta</li>
                                        <li>SMA Negeri 1 Lumbanjulu</li>
                                        <li>SMA Negeri 1 Matauli Pandan</li>
                                        <li>SMA Negeri 1 Pagaran</li>
                                        <li>SMA Negeri 1 Pangaribuan</li>
                                        <li>SMA Negeri 1 Pangururan</li>
                                        <li>SMA Negeri 1 Parmaksian</li>
                                        <li>SMA Negeri 1 Pintu Pohan Meranti</li>
                                        <li>SMA Negeri 1 Ronggurnihuta</li>
                                        <li>SMA Negeri 1 Sei Kanan</li>
                                        <li>SMA Negeri 1 Siantar Narumonda</li>
                                        <li>SMA Negeri 1 Siborongborong</li>
                                        <li>SMA Negeri 1 Sidikalang</li>
                                        <li>SMA Negeri 1 Silaen</li>
                                        <li>SMA Negeri 1 Simanindo</li>
                                        <li>SMA Negeri 1 Sumbul</li>
                                        <li>SMA Negeri 1 Tarutung</li>
                                        <li>SMA Negeri 1 Uluan</li>
                                        <li>SMA Negeri 12 MEDAN</li>
                                        <li>SMA Negeri 17 MEDAN</li>
                                        <li>SMA Negeri 2 Balige</li>
                                        <li>SMA Negeri 2 Doloksanggul</li>
                                        <li>SMA Negeri 2 Pangururan</li>
                                        <li>SMA Negeri 2 Siborongborong</li>
                                        <li>SMA Negeri 2 Tarutung</li>
                                        <li>SMA Negeri 3 Sibolga</li>
                                        <li>SMA Negeri 3 Tarutung</li>
                                        <li>SMA Negeri 8 MEDAN</li>
                                        <li>SMA Swasta Bintang Timur 1 Balige</li>
                                        <li>SMA Swasta HKBP Lintongnihuta</li>
                                        <li>SMA Swasta Katolik Sibolga</li>
                                        <li>SMA Swasta Nurul Ilmi</li>
                                        <li>SMA Swasta Seminari Menengah Pematangsiantar</li>
                                        <li>SMA Unggul Del</li>
                                        <li>SMK Negeri 1 Balige</li>
                                        <li>SMK Negeri 1 Lumbanjulu</li>
                                        <li>SMK Swasta Telkom 2 Medan</li>
                                        <li>SMK Swasta Yapim Balige</li>
                                        <li>SMA Negeri 1 Onanrunggu Samosir</li>
                                        <li>SMA Negeri 1 Borbor</li>
                                        <li>SMA Negeri 1 Ajibata</li>
                                        <li>SMK Negeri 1 Laguboti</li>
                                        <li>SMK Swasta Jambi Medan</li>
                                        <li>SMA Negeri 1 Salak</li>
                                        <li>SMA Negeri 1 Tinada</li>
                                        <li>SMA Negeri 1 Kerajaan</li>
                                        <li>SMK Negeri 1 Pergetteng-getteng Sengkut</li>
                                        <li>SMA Negeri 1 STU Julu</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="usm-tab-pane" role="tabpanel" aria-labelledby="usm-tab" tabindex="0">
                <div class="d-flex pt-5 flex-column align-items-center">
                    <img style="width: 50rem" class="border border-1"
                         src="{{ asset("/assets/img/flow-pendaftaran.jpg") }}" alt="flow-pendaftaran">
                    <div style="width: 50rem" class="justify-content-center d-flex gap-5 mt-5 mb-5">
                        <button class="btn btn-primary">Pedoman Pendaftaran</button>
                        <button class="btn btn-primary">Pedoman Upload Dokumen</button>
                    </div>

                    <div class="w-100">
                        <h3 class="pb-3 fw-semibold">Persyaratan Umum</h3>

                        <ol>
                            <li>
                                Memiliki minat yang tinggi untuk melanjutkan studi di IT Del dan akan mendaftarkan diri sebagai mahasiswa IT Del apabila dinyatakan lulus seleksi untuk program USM;
                            </li>

                            <li>
                                Siswa berasal dari jurusan yang <strong>tidak termasuk</strong> dalam kelompok Ilmu Sosial, Budaya atau Bahasa;
                            </li>

                            <li>
                                Lulusan SMA atau SMK Teknik pada semua jurusan dengan tahun ijazah 2021, 2022, 2023;
                            </li>

                            <li>
                                Usia <strong>maksimum 21</strong> tahun per 31 Agustus 2023;
                            </li>

                            <li>
                                Mengikuti tes akademik daring  berupa <strong> Matematika, Bahasa Inggris, dan Tes Potensi Akademik;</strong>
                            </li>

                            <li>
                                Dapat memilih maksimal 3 pilihan program studi, dari 8 program studi yang ada di IT Del
                                yakni :

                                <br> <br>
                                <ul>
                                    <li>
                                        <strong>Fakultas Vokasi [FV], Program Studi:</strong>
                                        <ol>
                                            <li>
                                                Teknologi Informasi (D3)
                                            </li>

                                            <li>
                                                Teknologi Komputer (D3)
                                            </li>

                                            <li>
                                                Teknologi Rekayasa Perangkat Lunak (D4)
                                            </li>
                                        </ol>
                                    </li>
                                </ul>

                                <br>

                                <ul>
                                    <li>
                                        <strong>Fakultas Informatika & Teknik Elektro [FITE], Program Studi:</strong>
                                        <ol>
                                            <li>
                                                Informatika (S1)
                                            </li>

                                            <li>
                                                Teknik Elektro (S1)
                                            </li>

                                            <li>
                                                Sistem Informasi (S1)
                                            </li>
                                        </ol>
                                    </li>
                                </ul>

                                <br>

                                <ul>
                                    <li>
                                        <strong>Fakultas Teknologi Industri [FTI], Program Studi:</strong>
                                        <ol>
                                            <li>
                                                Manajemen Rekayasa (S1)
                                            </li>

                                            <li>
                                                Teknik Metalurgi (S1)
                                            </li>
                                        </ol>
                                    </li>
                                </ul>

                                <br>
                                <ul>
                                    <li>
                                        <strong>Fakultas Bioteknologi [FB], Program Studi:</strong>
                                        <ol>
                                            <li>
                                                Teknik Bioproses (S1)
                                            </li>
                                        </ol>
                                    </li>
                                </ul>
                            </li>
                        </ol>
                    </div>

                    <div class="accordion pt-5 w-100" id="accordionusm">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOneUsm" aria-expanded="false" aria-controls="collapseOneUsm">
                                    Hal-hal yang harus diperhatikan peserta sebelum melakukan Tes Akademik Daring
                                </button>
                            </h2>
                            <div id="collapseOneUsm" class="accordion-collapse collapse"
                                 data-bs-parent="#accordionusm">
                                <div class="accordion-body">
                                    <ol>
                                        <li>
                                            Telah melakukan pendaftaran dan memiliki Kartu Ujian.
                                        </li>

                                        <li>
                                            Pastikan anda telah menerima <strong>username</strong> dan <strong>password</strong> dari panitia PMB.
                                        </li>

                                        <li>
                                            Mengunduh aplikasi <strong>ZOOM</strong> di Handphone para peserta.
                                        </li>

                                        <li>
                                            Untuk mendapatkan informasi secara cepat dari panitia PMB, silakan bergabung ke Whatsapp Group dengan mengirimkan kartu ujian ke Whatsapp Panitia PMB <strong>081360758968</strong>.
                                        </li>

                                        <li>
                                            Pastikan menggunakan PC atau Laptop dan <strong>tidak menggunakan smartphone</strong> saat mengikuti tes.
                                        </li>

                                        <li>
                                            PC atau Laptop sudah terinstall <strong>Firefox minimal versi 74.0.1</strong> atau <strong>Chrome minimal versi 80.0.3987.163</strong>
                                        </li>

                                        <li>
                                            Pastikan miliki <strong>akses internet yang stabil</strong> saat melakukan tes.
                                        </li>

                                        <li>
                                            <strong>Siapkan kertas buram</strong> untuk ujian matematika dan <strong>dilarang menggunakan alat bantu hitung</strong>.
                                        </li>

                                        <li>
                                            Mengikuti simulasi tes akademik pada waktu yang ditentukan oleh panitia PMB.
                                        </li>

                                        <li>
                                            Jika peserta belum mendapatkan username dan password silakan menghubungi panitia.
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-semibold" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseTwoUsm" aria-expanded="false"
                                        aria-controls="collapseTwoUsm">
                                    Hal-hal yang harus diperhatikan peserta saat melakukan tes akademik daring.
                                </button>
                            </h2>
                            <div id="collapseTwoUsm" class="accordion-collapse collapse"
                                 data-bs-parent="#accordionusm">
                                <div class="accordion-body">
                                    <ol>
                                        <li>
                                            Peserta silakan mengakses <a href="https://ecourse.del.ac.id/"><i>https://ecourse.del.ac.id/</i></a> untuk mengikuti ujian sesuai dengan waktu yang telah ditentukan.
                                        </li>

                                        <li>
                                            Masukkan <strong>username dan password</strong> yang telah dikirimkan panitia.
                                        </li>

                                        <li>
                                            Anda tidak diperkenankan untuk melakukan <strong>Print Screen</strong> soal tes.
                                        </li>

                                        <li>
                                            Selama ujian berlangsung anda <strong>diwajibkan</strong> untuk mengaktifkan kamera dan mikrofon pada link zoom yang akan dibagikan oleh pannitia.
                                        </li>

                                        <li>
                                            Selama acara ujian berlangsung <strong>TIDAK BOLEH</strong> menggunakan kalkulator atau alat bantu lain/bantuan orang lain. Jika anda melakukan kecurangan maka akan dianggap gagal dalam tes ini.
                                        </li>

                                        <li>
                                            Setiap soal berbentuk pilihan ganda. Hanya terdapat satu jawaban yang benar untuk setiap pertanyaan.
                                        </li>

                                        <li>
                                            Untuk setiap jawaban yang benar anda mendapat nilai +4, sedangkan jawaban yang salah mendapat nilai -1 dan nilai 0 untuk soal yang tidak dijawab.
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-semibold" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseThreeUsm" aria-expanded="false"
                                        aria-controls="collapseThreeUsm">
                                    Aturan Pelaksanaan Tes Akademik Daring
                                </button>
                            </h2>
                            <div id="collapseThreeUsm" class="accordion-collapse collapse"
                                 data-bs-parent="#accordionusm">
                                <div class="accordion-body">
                                    <ol>
                                        <li>
                                            Peserta ujian yang <strong>terlambat login</strong> atau mengalami gangguan teknis tidak diberikan perpanjangan waktu untuk mengerjakan ujian.
                                        </li>

                                        <li>
                                            Ketersediaan jaringan provider, koneksi jaringan yang lambat, kerusakan PC/Laptop yang dapat menyebabkan <strong>putusnya koneksi</strong> ketika ujian berlangsung menjadi tanggung jawab peserta dan <strong>tidak diberikan</strong> perpanjangan waktu untuk mengerjakan ujian.
                                        </li>

                                        <li>
                                            Pengadaan dan penggunaan <strong>software (browser) yang tidak sesuai</strong> sebagaimana yang telah disyaratkan sehingga menyebabkan terhambatnya pelaksanaan Tes Akademik menjadi <strong>tanggung jawab peserta sepenuhnya</strong> dan <strong>tidak diberikan</strong> perpanjangan waktu untuk mengerjakan ujian.
                                        </li>

                                        <li>
                                            Peserta tes yang lalai untuk melaksanakan ujian pada jadwal yang telah ditentukan <strong>dianggap mengundurkan diri</strong>.
                                        </li>

                                        <li>
                                            Jika dijumpai <strong>kendala selama test akademik daring</strong> berlangsung dan dipandang perlu/mendesak, peserta dapat menghubungi panitia di <strong>081360758968 (bisa whatsapp)</strong>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-semibold" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseFourUsm" aria-expanded="false"
                                        aria-controls="collapseFourUsm">
                                    Hal-hal yang harus diperhatikan peserta sebelum melakukan Tes Psikotes Onsite
                                </button>
                            </h2>
                            <div id="collapseFourUsm" class="accordion-collapse collapse"
                                 data-bs-parent="#accordionusm">
                                <div class="accordion-body">
                                    <ol>
                                        <li>Telah lulus dari Tes Wawancara bagi Jalur PMDK, Tes Akademik bagi Jalur USM dan Penilaian UTBK untuk jalur UTBK.</li>
                                        <li>Peserta wajib menggunakan masker.</li>
                                        <li>Membawa Kartu Pengenal Siswa.</li>
                                        <li>Membawa Alat Tulis.</li>
                                        <li>Mempersiapakn foto (Formal) dengan latar warna bebas dan ukuran gambar maksimal 2 MB serta dalam bentuk JPG (disimpan dalam flashdisk).</li>
                                        <li>Peserta diwajibkan menggunakan pakaian sekolah, atau kemeja putih, celana/rok hitam (tidak boleh menggunakan pakaian pramuka) dan menggunakan sepatu terutup.</li>
                                        <li>Diperbolehkan membawa minuman dan makanan ringan, berhubg pelaksanaan tes psikotes dilakukan hingga siang hari.</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-semibold" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseFiveUsm" aria-expanded="false"
                                        aria-controls="collapseFiveUsm">
                                    Hal-hal yang harus diperhatikan peserta saat&nbsp;melakukan Tes Psikotes Onsite&nbsp;
                                </button>
                            </h2>
                            <div id="collapseFiveUsm" class="accordion-collapse collapse"
                                 data-bs-parent="#accordionusm">
                                <div class="accordion-body">
                                    <ol>
                                        <li>Peserta harus hadir pukul 08.00 wib di kompleks Institut Teknologi Del</li>
                                        <li>Peserta akan diarahkan satpam menuju lokasi ujian;</li>
                                        <li>Peserta harus mengisi daftar hadir yang telah disediakan oleh panitia;</li>
                                        <li>Panita akan memberikan kode ujian psikotes;</li>
                                        <li>Peserta akan diarahkan panitia ke ruang ujian;</li>
                                        <li>Peserta akan duduk sesuai kursi yang telah ditentukan;</li>
                                        <li>Peserta silakan mengakses&nbsp;&nbsp;<a href="https://smileconsultingindonesia.com/test_cat_psi/m/index.php" style="color: rgb(7, 130, 193);">https://smileconsultingindonesia.com/test_cat_psi/m/index.php</a>&nbsp;&nbsp;untuk mengikuti ujian sesuai dengan waktu yang telah ditentukan;</li>
                                        <li>Masukkan&nbsp;<strong>kode ujian&nbsp;</strong>yang telah dikirimkan panitia;</li>
                                        <li>Dilarang melakukan tindak kecurangan;</li>
                                        <li>
                                            Tes ini terdapat 2 jenis tipe, yang dimana anda diminta mengerjakan dengan baik, cepat dan teliti.
                                            <ul style="margin-left:40px">
                                                <li>Tes Berhitung : Memiliki waktu</li>
                                                <li>Tes Memilih Jawaban :
                                                    <ul>
                                                        <li>Anda diminta memilih jawaban yakni pada bagian atas/bawah,</li>
                                                        <li>Anda langsung dapat klik jawabannya saja tanpa menghiraukan yang lain.</li>
                                                    </ul>
                                                </li>
                                                <li>Jenis Soal yang akan anda jalani adalah</li>
                                                <li>Tipe 1 : Menggunakan Waktu (Terdapat “Bar” yang akan berjalan),</li>
                                                <li>Tipe 2 : Tidak menggunakan waktu akan tetapi terdapat batas maksimal.</li>
                                            </ul>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-semibold" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseSixUsm" aria-expanded="false"
                                        aria-controls="collapseSixUsm">
                                    Hal-hal yang harus dipersiapkan peserta sebelum melakukan Daftar Ulang Daring
                                </button>
                            </h2>
                            <div id="collapseSixUsm" class="accordion-collapse collapse"
                                 data-bs-parent="#accordionusm">
                                <div class="accordion-body">
                                    <ol>
                                        <li>
                                            Mempersiapkan scan Ijazah/bukti tanda lulus SMA/SMK;
                                        </li>

                                        <li>
                                            Mempersiapkan scan Akta Kelahiran atau Surat Kenal Lahir asli;
                                        </li>

                                        <li>
                                            Mempersiapkan scan Kartu Keluarga;
                                        </li>

                                        <li>
                                            Mempersiapkan scan Surat <strong>Keterangan Tidak Buta Warna</strong>* dari <strong>Dokter Spesialis Mata</strong> bagi siswa yang melamar ke <strong>program studi Teknik Bioproses atau Teknik Elektro</strong>;

                                            <br> <br>

                                            <strong>
                                                Ket * : Mengingat situasi pandemi saat ini surat keterangan bisa disampaikan jika keadaan sudah kondusif. Apabila setelah dinyatakan lulus calon mahasiswa terbukti buta warna maka calon mahasiswa bersedia mengundurkan diri.
                                            </strong>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-semibold" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseSevenUsm" aria-expanded="false"
                                        aria-controls="collapseSevenUsm">
                                    Hal-hal yang harus diperhatikan peserta saat melakukan Daftar Ulang Daring, bagi yang mendaftar secara luring akan disampaikan bersamaan pengumuman kelulusan
                                </button>
                            </h2>
                            <div id="collapseSevenUsm" class="accordion-collapse collapse"
                                 data-bs-parent="#accordionusm">
                                <div class="accordion-body">
                                    <ol>
                                        <li>
                                            Peserta silakan mengakses  http://spmbapp.del.ac.id  untuk melakukan pendaftaran ulang sesuai dengan waktu yang telah ditentukan;
                                        </li>

                                        <li>
                                            Memasukkan username dan password saat melakukan pendaftaran <strong>(bukan username dan password saat tes akademik daring);</strong>
                                        </li>

                                        <li>
                                            Mengunduh Informasi tentang keasramaan;
                                        </li>

                                        <li>
                                            Mengunduh dan Mengunggah Surat Pernyataan Pendaftaran Mahasiswa Baru Angkatan 2023;
                                        </li>

                                        <li>
                                            Mengunduh dan Mengunggah  Surat Fakta Integritas Mahasiswa Baru Angkatan 2023;
                                        </li>

                                        <li>
                                            Mengunduh dan Mengunggah  Surat Pernyataan Persetujuan Pemeriksaan Kesehatan Mahasiswa Baru Angkatan 2023*;
                                        </li>

                                        <li>
                                            Mengunduh dan Mengunggah Surat Pernyataan Wali Mahasiswa Baru Angkatan 2023 (Jika diwakilkan kepada wali);
                                        </li>

                                        <li>
                                            Mengunggah Surat Keterangan Tidak Buta Warna* dari Dokter Spesialis Mata bagi siswa yang melamar ke program studi <strong>Teknik Bioproses atau Teknik Elektro</strong>;
                                        </li>

                                        <li>
                                            Mengunggah Ijazah/bukti tanda lulus SMA/SMK;
                                        </li>

                                        <li>
                                            Mengunggah Akta Kelahiran atau Surat Kenal Lahir asli;
                                        </li>

                                        <li>
                                            Mengunggah Kartu Keluarga;
                                        </li>

                                        <li>
                                            Mengisi data ukuran Jas Almamater;
                                        </li>

                                        <li>
                                            Mengunduh Informasi Perlengkapan Mahasiswa Putra/i
                                        </li>

                                        <li>
                                            Mengunduh Informasi Beasiswa di Institut Teknologi Del;
                                        </li>

                                        <li>
                                            Mengunduh Informasi Spesifikasi Laptop;
                                        </li>

                                        <li>
                                            Mengunduh Informasi Cara Pembayaran Virtual Account

                                            <br> <br>

                                            <strong>
                                                Ket * : Mengingat situasi pandemi saat ini surat keterangan bisa disampaikan jika keadaan sudah kondusif. Apabila setelah dinyatakan lulus calon mahasiswa terbukti buta warna maka calon mahasiswa bersedia mengundurkan diri.
                                            </strong>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="utbk-tab-pane" role="tabpanel" aria-labelledby="utbk-tab" tabindex="0">
                <div class="d-flex pt-5 flex-column align-items-center">
                    <img style="width: 50rem" class="border border-1"
                         src="{{ asset("/assets/img/flow-pendaftaran.jpg") }}" alt="flow-pendaftaran">
                    <div style="width: 50rem" class="justify-content-center d-flex gap-5 mt-5 mb-5">
                        <button class="btn btn-primary">Pedoman Pendaftaran</button>
                        <button class="btn btn-primary">Pedoman Upload Dokumen</button>
                    </div>

                    <div class="w-100">
                        <h3 class="pb-3 fw-semibold">Persyaratan Umum</h3>

                        <ol>
                            <li>Memiliki minat yang tinggi untuk melanjutkan studi di IT Del dan akan mendaftarkan diri sebagai mahasiswa IT Del apabila dinyatakan lulus seleksi untuk program <span style="font-size:14px"><span style="background-color:rgb(255, 255, 255); font-family:arial,helvetica,sans-serif">Sertifikat UTBK</span></span>;</li>
                            <li>Siswa berasal dari jurusan yang <strong>tidak termasuk</strong> dalam kelompok Ilmu Sosial, Budaya atau Bahasa;</li>
                            <li>Lulusan SMA atau SMK Teknik pada semua jurusan dengan tahun ijazah&nbsp;<strong>2023;</strong></li>
                            <li>Usia <strong>maksimum 21 tahun</strong> per 31 Agustus 2023;</li>
                            <li>Mengikuti Tes Psikotes;</li>
                            <li>Dapat memilih maksimal <strong>3 pilihan program studi, </strong> dari 8 program studi yang ada di IT Del yakni :</li>
                        </ol>

                        <ul style="margin-left:40px">
                            <li><strong>Fakultas Vokasi, Program Studi:</strong>

                                <ol>
                                    <li>Teknologi Rekayasa Perangkat Lunak (S1 Terapan)</li>
                                    <li>Teknologi&nbsp;Informasi&nbsp;(D3)</li>
                                    <li>Teknologi&nbsp;Komputer (D3)</li>
                                </ol>
                            </li>
                            <li><strong>Fakultas Informatika &amp; Teknik Elektro [FITE], Program Studi:</strong></li>
                        </ul>

                        <ol style="margin-left:80px">
                            <li>Informatika&nbsp;(S1)</li>
                            <li>Teknik Elektro (S1)</li>
                            <li>Sistem Informasi (S1)</li>
                        </ol>

                        <ul style="margin-left:40px">
                            <li><strong>Fakultas Teknologi Industri [FTI], Program Studi:</strong></li>
                        </ul>

                        <ol style="margin-left:80px">
                            <li>Manajemen&nbsp;Rekayasa (S1)</li>
                            <li>Teknik Metalurgi&nbsp;(S1) <strong>BARU</strong></li>
                        </ol>

                        <ul style="margin-left:40px">
                            <li><strong>Fakultas Bioteknologi [FB], Program Studi:</strong></li>
                        </ul>

                        <ol style="margin-left:80px">
                            <li>Teknik&nbsp;Bioproses (S1)</li>
                        </ol>
                    </div>

                    <div class="accordion pt-5 w-100" id="accordionutbk">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOneUtbk" aria-expanded="true" aria-controls="collapseOneUtbk">
                                    Kelengkapan Berkas Pendaftaran
                                </button>
                            </h2>
                            <div id="collapseOneUtbk" class="accordion-collapse collapse"
                                 data-bs-parent="#accordionutbk">
                                <div class="accordion-body">
                                    Data yang harus dilengkapi pada formulir pendafataran daring:

                                    <ul style="margin-left:40px">
                                        <li>Memilih 3 maksimal <strong>3 pilihan program studi</strong>;</li>
                                        <li><strong>Mengisi Data Pribadi,</strong> seperti&nbsp;
                                            <ul>
                                                <li>NIK</li>
                                                <li>NISN</li>
                                                <li>Nama Lengkap</li>
                                                <li>Jenis Kelamin</li>
                                                <li>Tempat/Tanggal Lahir</li>
                                                <li>Agama</li>
                                                <li>Alamat</li>
                                                <li>Kode Pos</li>
                                                <li>No Hp</li>
                                                <li>Email</li>
                                            </ul>
                                        </li>
                                        <li><strong>Mengisi Data Orang Tua</strong>, seperti
                                            <ul>
                                                <li>Nama Ayah dan Ibu kandung</li>
                                                <li>Pekerjaan Ayah dan Ibu Kandung</li>
                                                <li>Penghasilan Ayah dan Ibu Kandung</li>
                                                <li>Alamat orang tua</li>
                                                <li>Kode Pos</li>
                                            </ul>
                                        </li>
                                        <li><strong>Mengisi Data Akademis</strong>, seperti
                                            <ul>
                                                <li>Sekolah</li>
                                                <li>Jurusan</li>
                                                <li>Jumlah Pelajaran Semester 5</li>
                                                <li>Jumlah Nilai&nbsp;Semester 5</li>
                                            </ul>
                                        </li>
                                        <li><strong>Mengisi Data Kemampuan Bahasa Asing</strong></li>
                                        <li><strong>Mengisi Data Pendidikan Ekstrakurikuler</strong></li>
                                        <li><strong>Mengisi Pengalaman Organisasi</strong></li>
                                        <li>Mengisi&nbsp; tentang mendapatkan/mendengar informasi mengenai program penerimaan mahasiswa IT Del melalui apa?</li>
                                        <li><strong>Mengisi Jumlah minimum N</strong>&nbsp; untuk uang pembangunan sekali bayar</li>
                                        <li>Mengunggah foto 3x4 untuk daring atau Menempelkan foto 3x4 untuk luring</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-semibold" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseTwoUtbk" aria-expanded="false"
                                        aria-controls="collapseTwoUtbk">
                                    Hal-hal yang harus diperhatikan peserta sebelum melakukan Tes Psikotes Onsite
                                </button>
                            </h2>
                            <div id="collapseTwoUtbk" class="accordion-collapse collapse"
                                 data-bs-parent="#accordionutbk">
                                <div class="accordion-body">
                                    <ol>
                                        <li><span style="font-size:14px">Telah lulus dari Tes Wawancara bagi Jalur PMDK, Tes Akademik bagi Jalur USM dan Penilaian UTBK untuk jalur UTBK;</span></li>
                                        <li>Peserta wajib menggunakan masker;</li>
                                        <li>Membawa Kartu Pengenal Siswa;</li>
                                        <li>Membawa Alat Tulis;</li>
                                        <li>Mempersiapakn foto (Formal) dengan latar warna bebas dan ukuran gambar maksimal 2 MB serta dalam bentuk JPG (disimpan dalam flashdisk);</li>
                                        <li>Peserta diwajibkan menggunakan pakaian sekolah, atau kemeja putih, celana/rok hitam (tidak boleh menggunakan pakaian pramuka) dan menggunakan sepatu terutup;</li>
                                        <li>Diperbolehkan membawa minuman dan makanan ringan, berhubg pelaksanaan tes psikotes dilakukan hingga siang hari.</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-semibold" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseThreeUtbk" aria-expanded="false"
                                        aria-controls="collapseThreeUtbk">
                                    Hal-hal yang harus diperhatikan peserta saat&nbsp;melakukan Tes Psikotes Onsite&nbsp;
                                </button>
                            </h2>
                            <div id="collapseThreeUtbk" class="accordion-collapse collapse"
                                 data-bs-parent="#accordionutbk">
                                <div class="accordion-body">
                                    <ol>
                                        <li>Peserta harus hadir pukul 08.00 wib di kompleks Institut Teknologi Del</li>
                                        <li>Peserta akan diarahkan satpam menuju lokasi ujian;</li>
                                        <li>Peserta harus mengisi daftar hadir yang telah disediakan oleh panitia;</li>
                                        <li>Panita akan memberikan kode ujian psikotes;</li>
                                        <li>Peserta akan diarahkan panitia ke ruang ujian;</li>
                                        <li>Peserta akan duduk sesuai kursi yang telah ditentukan;</li>
                                        <li>Peserta silakan mengakses&nbsp;&nbsp;<a href="https://smileconsultingindonesia.com/test_cat_psi/m/index.php">https://smileconsultingindonesia.com/test_cat_psi/m/index.php</a>&nbsp;&nbsp;untuk mengikuti ujian sesuai dengan waktu yang telah ditentukan;</li>
                                        <li>Masukkan&nbsp;<strong>kode ujian&nbsp;</strong>yang telah dikirimkan panitia;</li>
                                        <li>Dilarang melakukan tindak kecurangan</li>
                                        <li>Tes ini terdapat 2 jenis tipe, yang dimana anda diminta mengerjakan dengan baik, cepat dan teliti.</li>
                                    </ol>

                                    <ul style="margin-left:40px">
                                        <li>Tipe 1 : Menggunakan Waktu (Terdapat “Bar” yang akan berjalan),</li>
                                        <li>Tipe 2 : Tidak menggunakan waktu akan tetapi terdapat batas maksimal.</li>
                                    </ul>

                                    Jenis Soal yang akan anda jalani adalah

                                    <ul style="margin-left:40px">
                                        <li>Tes Berhitung : Memiliki waktu</li>
                                        <li>Tes Memilih Jawaban :
                                            <ul>
                                                <li>Anda diminta memilih jawaban yakni pada bagian atas/bawah,</li>
                                                <li>Anda langsung dapat klik jawabannya saja tanpa menghiraukan yang lain.</li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-semibold" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseFourUtbk" aria-expanded="false"
                                        aria-controls="collapseFourUtbk">
                                    Hal-hal yang harus dipersiapkan peserta sebelum melakukan Daftar Ulang Daring
                                </button>
                            </h2>
                            <div id="collapseFourUtbk" class="accordion-collapse collapse"
                                 data-bs-parent="#accordionutbk">
                                <div class="accordion-body">
                                    <ol>
                                        <li>Mempersiapkan scan Ijazah/bukti tanda lulus&nbsp;SMA/SMK;</li>
                                        <li>Mempersiapkan scan Akta Kelahiran atau Surat Kenal Lahir asli;</li>
                                        <li>Mempersiapkan scan Kartu Keluarga;</li>
                                        <li>
                                            Mempersiapkan scan Surat Keterangan&nbsp;<strong>Tidak Buta Warna*</strong> dari <strong>Dokter Spesialis Mata</strong> bagi siswa yang melamar ke <strong>program studi Teknik Bioproses atau Teknik Elektro;</strong>

                                            <br> <br>
                                            <p><strong>Ket * : Mengingat situasi pandemi saat ini surat keterangan bisa disampaikan jika keadaan sudah kondusif. Apabila setelah dinyatakan lulus calon mahasiswa terbukti buta warna maka calon mahasiswa bersedia mengundurkan diri.</strong></p>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-semibold" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseFiveUtbk" aria-expanded="false"
                                        aria-controls="collapseFiveUtbk">
                                    Hal-hal yang harus diperhatikan peserta saat melakukan Daftar Ulang Daring, bagi yang mendaftar secara luring akan disampaikan bersamaan pengumuman kelulusan
                                </button>
                            </h2>
                            <div id="collapseFiveUtbk" class="accordion-collapse collapse"
                                 data-bs-parent="#accordionutbk">
                                <div class="accordion-body">
                                    <ol>
                                        <li>Peserta silakan mengakses&nbsp;&nbsp;<a
                                                href="http://spmbapp.del.ac.id/index.php/site/login"><strong><em>http://spmbapp.del.ac.id</em></strong></a>&nbsp;&nbsp;untuk
                                            melakukan pendaftaran ulang&nbsp;pada tanggal <strong>14-15 Februari
                                                2023;</strong></li>
                                        <li>Memasukkan&nbsp;<strong>username&nbsp;dan password&nbsp;saat melakukan
                                                pendaftaran;</strong></li>
                                        <li>Mengunduh Informasi tentang keasramaan;</li>
                                        <li>Mengunduh&nbsp;dan&nbsp;Mengunggah Surat Pernyataan Pendaftaran Mahasiswa
                                            Baru Angkatan 2024;
                                        </li>
                                        <li>Mengunduh&nbsp;dan&nbsp;Mengunggah&nbsp; Surat Fakta Integritas Mahasiswa
                                            Baru Angkatan 2024;
                                        </li>
                                        <li>Mengunduh&nbsp;dan&nbsp;Mengunggah&nbsp; Surat Pernyataan Persetujuan
                                            Pemeriksaan Kesehatan Mahasiswa Baru Angkatan 2024;
                                        </li>
                                        <li>Mengunduh&nbsp;dan&nbsp;Mengunggah Surat Pernyataan Wali Mahasiswa Baru
                                            Angkatan 2024 (Jika diwakilkan kepada wali);
                                        </li>
                                        <li>Mengunggah&nbsp;Surat Keterangan&nbsp;<strong>Tidak Buta Warna*</strong>&nbsp;dari&nbsp;<strong>Dokter
                                                Spesialis Mata</strong>&nbsp;bagi siswa yang melamar ke&nbsp;<strong>program
                                                studi Teknik Bioproses atau Teknik Elektro;</strong></li>
                                        <li>Mengunggah&nbsp;Ijazah/bukti tanda lulus&nbsp;SMA/SMK;</li>
                                        <li>Mengunggah Akta Kelahiran atau Surat Kenal Lahir asli;</li>
                                        <li>Mengunggah Kartu Keluarga;</li>
                                        <li>Untuk pembayaran dapat dilakukan 2 cara yaitu dengan Virtual Account dan
                                            Cash
                                        </li>
                                        <li>Untuk Pembayaran Virtual Account dapat dilakukan dari tanggal <strong>16-17
                                                Februari 2023;</strong></li>
                                        <li>Mengunduh&nbsp;Informasi Cara Pembayaran Virtual Account</li>
                                        <li>Untuk Pembayaran Cash dapat dilakukan pada tanggal <strong>17 Februari
                                                2023</strong> di Institut Teknologi Del.
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container w-100 pt-5 pb-3">
        <h3 class="fw-semibold pb-3">Program Studi</h3>

        <div class="container d-flex justify-content-center flex-wrap row-gap-4 column-gap-5">
            <div type="button" class="bg-white border-0" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <div class="border-1 border d-flex rounded-5" style="width: 18rem">
                    <div class="bg-body-tertiary rounded-start-5" style="width: 6rem"></div>
                    <div class="d-flex justify-content-center align-items-center w-100 flex-wrap pt-2 pb-2 gap-1">
                        <div class="w-100 d-flex justify-content-start ms-3">
                            <img src="{{ asset("/assets/img/three-dot.jpeg") }}" alt="three-dot" style="width: 6px">
                        </div>

                        <div class="w-100 fw-bold text-center">
                            Informatika
                        </div>

                        <div class="w-100 d-flex justify-content-end">
                            <span class="me-3 fw-bold">+</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Informatika</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. A assumenda beatae cum ea magnam
                            nobis praesentium reiciendis similique voluptatem voluptatibus. Accusantium atque
                            consectetur corporis cum est et facere facilis fuga fugiat hic, id illum in incidunt ipsam,
                            itaque minima minus modi natus quae quasi quia quis reiciendis repudiandae ut vel?
                            Accusantium blanditiis culpa cum distinctio doloribus et fugit impedit incidunt inventore
                            ipsum iste laudantium minima nesciunt nobis odit officiis pariatur perferendis praesentium
                            quas quod recusandae reprehenderit sapiente tenetur voluptatem voluptates, voluptatibus
                            voluptatum. Consectetur exercitationem laudantium molestias saepe. Cum deleniti dolorem,
                            doloremque, eaque facere laborum minus numquam placeat, quae similique tenetur?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">OK</button>
                            {{--                                    <button type="button" class="btn btn-primary">Save changes</button>--}}
                        </div>
                    </div>
                </div>
            </div>

            <div type="button" class="bg-white border-0" data-bs-toggle="modal" data-bs-target="#modalsi">
                <div class="border-1 border d-flex  rounded-5" style="width: 18rem">
                    <div class="bg-body-tertiary rounded-start-5" style="width: 6rem"></div>
                    <div class="d-flex justify-content-center align-items-center w-100 flex-wrap pt-2 pb-2 gap-1">
                        <div class="w-100 d-flex justify-content-start ms-3">
                            <img src="{{ asset("/assets/img/three-dot.jpeg") }}" alt="three-dot" style="width: 6px">
                        </div>

                        <div class="w-100 fw-bold text-center">
                            Sistem Informasi
                        </div>

                        <div class="w-100 d-flex justify-content-end">
                            <span class="me-3 fw-bold">+</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="modalsi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Sistem Informasi</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. A assumenda beatae cum ea magnam
                            nobis praesentium reiciendis similique voluptatem voluptatibus. Accusantium atque
                            consectetur corporis cum est et facere facilis fuga fugiat hic, id illum in incidunt ipsam,
                            itaque minima minus modi natus quae quasi quia quis reiciendis repudiandae ut vel?
                            Accusantium blanditiis culpa cum distinctio doloribus et fugit impedit incidunt inventore
                            ipsum iste laudantium minima nesciunt nobis odit officiis pariatur perferendis praesentium
                            quas quod recusandae reprehenderit sapiente tenetur voluptatem voluptates, voluptatibus
                            voluptatum. Consectetur exercitationem laudantium molestias saepe. Cum deleniti dolorem,
                            doloremque, eaque facere laborum minus numquam placeat, quae similique tenetur?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">OK</button>
                            {{--                                    <button type="button" class="btn btn-primary">Save changes</button>--}}
                        </div>
                    </div>
                </div>
            </div>

            <div type="button" class="bg-white border-0" data-bs-toggle="modal" data-bs-target="#modalTE">
                <div class="border-1 border d-flex  rounded-5" style="width: 18rem">
                    <div class="bg-body-tertiary rounded-start-5" style="width: 6rem"></div>
                    <div class="d-flex justify-content-center align-items-center w-100 flex-wrap pt-2 pb-2 gap-1">
                        <div class="w-100 d-flex justify-content-start ms-3">
                            <img src="{{ asset("/assets/img/three-dot.jpeg") }}" alt="three-dot" style="width: 6px">
                        </div>

                        <div class="w-100 fw-bold text-center">
                            Teknik Elektro
                        </div>

                        <div class="w-100 d-flex justify-content-end">
                            <span class="me-3 fw-bold">+</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="modalTE" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Teknik Elektro</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. A assumenda beatae cum ea magnam
                            nobis praesentium reiciendis similique voluptatem voluptatibus. Accusantium atque
                            consectetur corporis cum est et facere facilis fuga fugiat hic, id illum in incidunt ipsam,
                            itaque minima minus modi natus quae quasi quia quis reiciendis repudiandae ut vel?
                            Accusantium blanditiis culpa cum distinctio doloribus et fugit impedit incidunt inventore
                            ipsum iste laudantium minima nesciunt nobis odit officiis pariatur perferendis praesentium
                            quas quod recusandae reprehenderit sapiente tenetur voluptatem voluptates, voluptatibus
                            voluptatum. Consectetur exercitationem laudantium molestias saepe. Cum deleniti dolorem,
                            doloremque, eaque facere laborum minus numquam placeat, quae similique tenetur?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">OK</button>
                            {{--                                    <button type="button" class="btn btn-primary">Save changes</button>--}}
                        </div>
                    </div>
                </div>
            </div>

            <div type="button" class="bg-white border-0" data-bs-toggle="modal" data-bs-target="#modalMR">
                <div class="border-1 border d-flex  rounded-5" style="width: 18rem">
                    <div class="bg-body-tertiary rounded-start-5" style="width: 6rem"></div>
                    <div class="d-flex justify-content-center align-items-center w-100 flex-wrap pt-2 pb-2 gap-1">
                        <div class="w-100 d-flex justify-content-start ms-3">
                            <img src="{{ asset("/assets/img/three-dot.jpeg") }}" alt="three-dot" style="width: 6px">
                        </div>

                        <div class="w-100 fw-bold text-center">
                            Managemen Rekayasa
                        </div>

                        <div class="w-100 d-flex justify-content-end">
                            <span class="me-3 fw-bold">+</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="modalMR" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Managemen Rekayasa</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. A assumenda beatae cum ea magnam
                            nobis praesentium reiciendis similique voluptatem voluptatibus. Accusantium atque
                            consectetur corporis cum est et facere facilis fuga fugiat hic, id illum in incidunt ipsam,
                            itaque minima minus modi natus quae quasi quia quis reiciendis repudiandae ut vel?
                            Accusantium blanditiis culpa cum distinctio doloribus et fugit impedit incidunt inventore
                            ipsum iste laudantium minima nesciunt nobis odit officiis pariatur perferendis praesentium
                            quas quod recusandae reprehenderit sapiente tenetur voluptatem voluptates, voluptatibus
                            voluptatum. Consectetur exercitationem laudantium molestias saepe. Cum deleniti dolorem,
                            doloremque, eaque facere laborum minus numquam placeat, quae similique tenetur?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">OK</button>
                            {{--                                    <button type="button" class="btn btn-primary">Save changes</button>--}}
                        </div>
                    </div>
                </div>
            </div>

            <div type="button" class="bg-white border-0" data-bs-toggle="modal" data-bs-target="#modalTB">
                <div class="border-1 border d-flex  rounded-5" style="width: 18rem">
                    <div class="bg-body-tertiary rounded-start-5" style="width: 6rem"></div>
                    <div class="d-flex justify-content-center align-items-center w-100 flex-wrap pt-2 pb-2 gap-1">
                        <div class="w-100 d-flex justify-content-start ms-3">
                            <img src="{{ asset("/assets/img/three-dot.jpeg") }}" alt="three-dot" style="width: 6px">
                        </div>

                        <div class="w-100 fw-bold text-center">
                            Teknik Bioproses
                        </div>

                        <div class="w-100 d-flex justify-content-end">
                            <span class="me-3 fw-bold">+</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="modalTB" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Teknik Bioproses</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. A assumenda beatae cum ea magnam
                            nobis praesentium reiciendis similique voluptatem voluptatibus. Accusantium atque
                            consectetur corporis cum est et facere facilis fuga fugiat hic, id illum in incidunt ipsam,
                            itaque minima minus modi natus quae quasi quia quis reiciendis repudiandae ut vel?
                            Accusantium blanditiis culpa cum distinctio doloribus et fugit impedit incidunt inventore
                            ipsum iste laudantium minima nesciunt nobis odit officiis pariatur perferendis praesentium
                            quas quod recusandae reprehenderit sapiente tenetur voluptatem voluptates, voluptatibus
                            voluptatum. Consectetur exercitationem laudantium molestias saepe. Cum deleniti dolorem,
                            doloremque, eaque facere laborum minus numquam placeat, quae similique tenetur?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">OK</button>
                            {{--                                    <button type="button" class="btn btn-primary">Save changes</button>--}}
                        </div>
                    </div>
                </div>
            </div>

            <div type="button" class="bg-white border-0" data-bs-toggle="modal" data-bs-target="#modalTM">
                <div class="border-1 border d-flex  rounded-5" style="width: 18rem">
                    <div class="bg-body-tertiary rounded-start-5" style="width: 6rem"></div>
                    <div class="d-flex justify-content-center align-items-center w-100 flex-wrap pt-2 pb-2 gap-1">
                        <div class="w-100 d-flex justify-content-start ms-3">
                            <img src="{{ asset("/assets/img/three-dot.jpeg") }}" alt="three-dot" style="width: 6px">
                        </div>

                        <div class="w-100 fw-bold text-center">
                            Teknik Metalurgi
                        </div>

                        <div class="w-100 d-flex justify-content-end">
                            <span class="me-3 fw-bold">+</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="modalTM" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Teknik Metalurgi</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. A assumenda beatae cum ea magnam
                            nobis praesentium reiciendis similique voluptatem voluptatibus. Accusantium atque
                            consectetur corporis cum est et facere facilis fuga fugiat hic, id illum in incidunt ipsam,
                            itaque minima minus modi natus quae quasi quia quis reiciendis repudiandae ut vel?
                            Accusantium blanditiis culpa cum distinctio doloribus et fugit impedit incidunt inventore
                            ipsum iste laudantium minima nesciunt nobis odit officiis pariatur perferendis praesentium
                            quas quod recusandae reprehenderit sapiente tenetur voluptatem voluptates, voluptatibus
                            voluptatum. Consectetur exercitationem laudantium molestias saepe. Cum deleniti dolorem,
                            doloremque, eaque facere laborum minus numquam placeat, quae similique tenetur?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">OK</button>
                        </div>
                    </div>
                </div>
            </div>

            <div type="button" class="bg-white border-0" data-bs-toggle="modal" data-bs-target="#modalTM">
                <div class="border-1 border d-flex  rounded-5" style="width: 18rem">
                    <div class="bg-body-tertiary rounded-start-5" style="width: 6rem"></div>
                    <div class="d-flex justify-content-center align-items-center w-100 flex-wrap pt-2 pb-2 gap-1">
                        <div class="w-100 d-flex justify-content-start ms-3">
                            <img src="{{ asset("/assets/img/three-dot.jpeg") }}" alt="three-dot" style="width: 6px">
                        </div>

                        <div class="w-100 fw-bold text-center">
                            Teknologi Rekayasa Perangkat Lunak
                        </div>

                        <div class="w-100 d-flex justify-content-end">
                            <span class="me-3 fw-bold">+</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="modalTM" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Teknik Metalurgi</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. A assumenda beatae cum ea magnam
                            nobis praesentium reiciendis similique voluptatem voluptatibus. Accusantium atque
                            consectetur corporis cum est et facere facilis fuga fugiat hic, id illum in incidunt ipsam,
                            itaque minima minus modi natus quae quasi quia quis reiciendis repudiandae ut vel?
                            Accusantium blanditiis culpa cum distinctio doloribus et fugit impedit incidunt inventore
                            ipsum iste laudantium minima nesciunt nobis odit officiis pariatur perferendis praesentium
                            quas quod recusandae reprehenderit sapiente tenetur voluptatem voluptates, voluptatibus
                            voluptatum. Consectetur exercitationem laudantium molestias saepe. Cum deleniti dolorem,
                            doloremque, eaque facere laborum minus numquam placeat, quae similique tenetur?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">OK</button>
                        </div>
                    </div>
                </div>
            </div>

            <div type="button" class="bg-white border-0" data-bs-toggle="modal" data-bs-target="#modalTM">
                <div class="border-1 border d-flex  rounded-5" style="width: 18rem">
                    <div class="bg-body-tertiary rounded-start-5" style="width: 6rem"></div>
                    <div class="d-flex justify-content-center align-items-center w-100 flex-wrap pt-2 pb-2 gap-1">
                        <div class="w-100 d-flex justify-content-start ms-3">
                            <img src="{{ asset("/assets/img/three-dot.jpeg") }}" alt="three-dot" style="width: 6px">
                        </div>

                        <div class="w-100 fw-bold text-center">
                            Teknologi Informasi
                        </div>

                        <div class="w-100 d-flex justify-content-end">
                            <span class="me-3 fw-bold">+</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="modalTM" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Teknik Metalurgi</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. A assumenda beatae cum ea magnam
                            nobis praesentium reiciendis similique voluptatem voluptatibus. Accusantium atque
                            consectetur corporis cum est et facere facilis fuga fugiat hic, id illum in incidunt ipsam,
                            itaque minima minus modi natus quae quasi quia quis reiciendis repudiandae ut vel?
                            Accusantium blanditiis culpa cum distinctio doloribus et fugit impedit incidunt inventore
                            ipsum iste laudantium minima nesciunt nobis odit officiis pariatur perferendis praesentium
                            quas quod recusandae reprehenderit sapiente tenetur voluptatem voluptates, voluptatibus
                            voluptatum. Consectetur exercitationem laudantium molestias saepe. Cum deleniti dolorem,
                            doloremque, eaque facere laborum minus numquam placeat, quae similique tenetur?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">OK</button>
                        </div>
                    </div>
                </div>
            </div>

            <div type="button" class="bg-white border-0" data-bs-toggle="modal" data-bs-target="#modalTM">
                <div class="border-1 border d-flex rounded-5" style="width: 18rem">
                    <div class="bg-body-tertiary rounded-start-5" style="width: 6rem"></div>
                    <div class="d-flex justify-content-center align-items-center w-100 flex-wrap pt-2 pb-2 gap-1">
                        <div class="w-100 d-flex justify-content-start ms-3">
                            <img src="{{ asset("/assets/img/three-dot.jpeg") }}" alt="three-dot" style="width: 6px">
                        </div>

                        <div class="w-100 fw-bold text-center">
                            Teknologi Komputer
                        </div>

                        <div class="w-100 d-flex justify-content-end">
                            <span class="me-3 fw-bold">+</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="modalTM" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Teknik Metalurgi</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. A assumenda beatae cum ea magnam
                            nobis praesentium reiciendis similique voluptatem voluptatibus. Accusantium atque
                            consectetur corporis cum est et facere facilis fuga fugiat hic, id illum in incidunt ipsam,
                            itaque minima minus modi natus quae quasi quia quis reiciendis repudiandae ut vel?
                            Accusantium blanditiis culpa cum distinctio doloribus et fugit impedit incidunt inventore
                            ipsum iste laudantium minima nesciunt nobis odit officiis pariatur perferendis praesentium
                            quas quod recusandae reprehenderit sapiente tenetur voluptatem voluptates, voluptatibus
                            voluptatum. Consectetur exercitationem laudantium molestias saepe. Cum deleniti dolorem,
                            doloremque, eaque facere laborum minus numquam placeat, quae similique tenetur?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">OK</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container text-center mt-5" id="bagianBiaya">
        <h3 class="fw-semibold text-start">Biaya Studi</h3>

        <div class="d-flex justify-content-center flex-column pt-3">

            <table class="table align-middle">
                <thead>
                <tr>
                    <th scope="col" style="background-color: #47A5D4">Fakultas</th>
                    <th scope="col" style="background-color: #47A5D4">Prodi</th>
                    <th scope="col" style="background-color: #47A5D4">Biaya SPP/Sem (Rp)</th>
                    <th scope="col" style="background-color: #47A5D4">Uang Pengembangan (Rp)</th>
                    <th scope="col" style="background-color: #47A5D4">Uang Pangkal (Rp)</th>
                    <th scope="col" style="background-color: #47A5D4">Perlengkapan Mahasiswa (Rp)</th>
                    <th scope="col" style="background-color: #47A5D4">Perlengkapan Makan (Rp)</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td rowspan="4" class="text-center">
                        Fakultas Informatika dan Teknik Elektro
                    </td>
                </tr>

                <tr>
                    <td>Informatika</td>
                    <td>6.500.000</td>
                    <td>9.500.000 + N x 1.000.000 (min N=1)</td>
                    <td>4.500.000</td>
                    <td>850.000</td>
                    <td>250.000</td>
                </tr>

                <tr>
                    <td>Teknik Elektro</td>
                    <td>6.500.000</td>
                    <td>9.500.000 + N x 1.000.000 (min N=1)</td>
                    <td>4.500.000</td>
                    <td>850.000</td>
                    <td>250.000</td>
                </tr>

                <tr>
                    <td>Sistem Informasi</td>
                    <td>6.500.000</td>
                    <td>9.500.000 + N x 1.000.000 (min N=1)</td>
                    <td>4.500.000</td>
                    <td>850.000</td>
                    <td>250.000</td>
                </tr>

                <tr>
                    <td rowspan="3" class="text-center">
                        Fakultas Teknik Industri
                    </td>
                </tr>

                <tr>
                    <td>Managemen Rekayasa</td>
                    <td>6.500.000</td>
                    <td>9.500.000 + N x 1.000.000 (min N=1)</td>
                    <td>4.500.000</td>
                    <td>850.000</td>
                    <td>250.000</td>
                </tr>

                <tr>
                    <td>Teknik Metalurgi</td>
                    <td>6.500.000</td>
                    <td>9.500.000 + N x 1.000.000 (min N=1)</td>
                    <td>4.500.000</td>
                    <td>850.000</td>
                    <td>250.000</td>
                </tr>

                <tr>
                    <td>Fakultas Bioteknologi</td>
                    <td>Teknik Bioproses</td>
                    <td>7.000.000</td>
                    <td>9.500.000 + N x 1.000.000 (min N=1)</td>
                    <td>4.500.000</td>
                    <td>850.000</td>
                    <td>250.000</td>
                </tr>

                <tr>
                    <td rowspan="4" class="text-center">
                        Fakultas Vokasi
                    </td>
                </tr>

                <tr>
                    <td>Teknologi Rekayasa Perangkat Lunak</td>
                    <td>6.500.000</td>
                    <td>9.500.000 + N x 1.000.000 (min N=1)</td>
                    <td>4.500.000</td>
                    <td>850.000</td>
                    <td>250.000</td>
                </tr>

                <tr>
                    <td>Teknologi Informasi</td>
                    <td>5.500.000</td>
                    <td>6.500.000 + N x 1.000.000 (min N=1)</td>
                    <td>4.500.000</td>
                    <td>850.000</td>
                    <td>250.000</td>
                </tr>

                <tr>
                    <td>Teknologi Komputer</td>
                    <td>5.500.000</td>
                    <td>6.500.000 + N x 1.000.000 (min N=1)</td>
                    <td>4.500.000</td>
                    <td>850.000</td>
                    <td>250.000</td>
                </tr>

                </tbody>
            </table>
        </div>

        <div class="d-flex justify-content-center flex-column pt-5">
            <h3 class="fw-semibold text-start pb-3">Biaya Lainnya</h3>

            <table class="table align-middle">
                <thead>
                <tr>
                    <th scope="col" style="background-color: #47A5D4">Jenis Biaya</th>
                    <th scope="col" style="background-color: #47A5D4">Nominal</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Biaya Asrama dan Kemahasiswaan</td>
                    <td>300.000</td>
                </tr>
                <tr>
                    <td>Biaya Makan/hari (Rp)</td>
                    <td>30.000</td>
                </tr>
                <tr>
                    <td>Biaya Wisuda</td>
                    <td>1.100.000</td>
                </tr>
                <tr>
                    <td>Biaya Deposit Toga (*</td>
                    <td>1000.000</td>
                </tr>
                </tbody>
            </table>
        </div>

        <div class="d-flex justify-content-center flex-column pt-5">
            <h3 class="fw-semibold text-start pb-3">Biaya Pendidikan Khusus Mahasiswa Tingkat Akhir</h3>

            <p>
                Besaran biaya pendidikan bagi mahasiswa yang tidak mengikuti kegiatan perkuliahan selain tugas akhir di
                suatu semester adalah Rp500.000,- (Lima Ratus Ribu Rupiah).
            </p>
        </div>

        <div class="d-flex justify-content-center flex-column pt-5 ">
            <h3 class="fw-semibold text-start pb-3">Biaya Pendidikan Peserta Merdeka Belajar Kampus Merdeka (MBKM)</h3>

            <table class="table align-middle">
                <thead>
                <tr>
                    <th scope="col" style="background-color: #47A5D4">Jenis Kegiatan</th>
                    <th scope="col" style="background-color: #47A5D4">Jumlah SKS Kegiatan</th>
                    <th scope="col" style="background-color: #47A5D4">Potongan SPP</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Kegiatan MBKM Non Kompetisi</td>
                    <td>10</td>
                    <td>10%</td>
                </tr>
                <tr>
                    <td>Kegiatan MBKM Kompetisi</td>
                    <td><20</td>
                    <td>20%</td>
                </tr>
                </tbody>
            </table>
        </div>

        <div class="d-flex justify-content-center flex-column pt-5">
            <div class="d-flex align-items-center pb-3 justify-content-center">
                <button class="btn btn-primary ms-3">Unduh di sini</button>
            </div>
        </div>
    </section>

@endsection
