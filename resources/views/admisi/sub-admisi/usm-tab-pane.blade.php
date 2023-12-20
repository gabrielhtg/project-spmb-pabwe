<div class="tab-pane fade mb-5" id="usm-tab-pane" role="tabpanel" aria-labelledby="usm-tab" tabindex="0">
   <div class="d-flex justify-content-center align-items-center mt-5">
       <div id="carouselExampleIndicatorsUsm" class="carousel carousel-dark slide border border-1" data-bs-ride="carousel" style="width: 60%">
           <div class="carousel-inner">
               @php
                   $i = 0;
               @endphp
               @foreach($dataInfografis[1] as $e)
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
           <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicatorsUtbk" data-bs-slide="prev">
               <span class="carousel-control-prev-icon" aria-hidden="true"></span>
               <span class="visually-hidden">Previous</span>
               {{--                <div class="bg-black d-flex justify-content-center align-items-center" style="width: 50px; height: 50px; border-radius: 50%">--}}
               {{--                    <span class="fs-3"><</span>--}}
               {{--                </div>--}}
           </button>
           <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicatorsUtbk" data-bs-slide="next">
               {{--                <div class="bg-black d-flex justify-content-center align-items-center" style="width: 50px; height: 50px; border-radius: 50%">--}}
               {{--                    <span class="fs-3"> > </span>--}}
               {{--                </div>--}}
               <span class="carousel-control-next-icon" aria-hidden="true"></span>
               <span class="visually-hidden">Next</span>
           </button>
       </div>
   </div>
    <div class="d-flex pt-5 flex-column align-items-center">
        <div style="width: 100%" class="justify-content-center d-flex gap-5 mt-5 mb-5">
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
