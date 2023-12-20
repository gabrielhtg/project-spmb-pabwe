<div class="tab-pane fade show active mb-5" id="pmdk-tab-pane" role="tabpanel" aria-labelledby="pmdk-tab"
     tabindex="0">
    <div class="d-flex justify-content-center mt-5 ">
        <div id="carouselExampleIndicatorsPmdk" class="carousel carousel-dark slide border border-1" data-bs-ride="carousel" style="width: 60%">
{{--            <div class="carousel-indicators">--}}
{{--                <button type="button" data-bs-target="#carouselExampleIndicatorsPmdk" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>--}}
{{--                <button type="button" data-bs-target="#carouselExampleIndicatorsPmdk" data-bs-slide-to="1" aria-label="Slide 2"></button>--}}
{{--                <button type="button" data-bs-target="#carouselExampleIndicatorsPmdk" data-bs-slide-to="2" aria-label="Slide 3"></button>--}}
{{--            </div>--}}
            <div class="carousel-inner">
                @php
                $i = 0;
                @endphp
                @foreach($dataInfografis[0] as $e)
                    @if($i == 0)
                        <div class="carousel-item active">
                            <img src="{{asset($e->gambar)}}" class="d-block w-100" alt="gambar">
                        </div>
                    @else
                        <div class="carousel-item">
                            <img src="{{asset($e->gambar)}}" class="d-block w-100" alt="gambar">
                        </div>
                    @endif
                        @php
                            $i++;
                        @endphp
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicatorsPmdk" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicatorsPmdk" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <div class="d-flex pt-5 flex-column align-items-center">
        <div style="width: 100%" class="justify-content-center d-flex gap-5 mt-5 mb-5 button-1">
            <a href="{{ route('download-pedoman') }}">Download Pedoman Pendaftaran</a>
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

