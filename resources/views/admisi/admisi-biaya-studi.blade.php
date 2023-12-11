@extends("template.app")

@section("isi-halaman")
    <section>
        <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('/assets/img/prestasi/prestasi-header.jpg') }}" class="img-fluid d-block w-60" alt="header-fasilitas">
                    <div class="carousel-caption d-none d-md-block text-center"> <!-- Center the text -->
                        <div class="d-flex flex-column text-center h-100 pb-3"> <!-- Center the content vertically -->
                            <h2 class="fw-bold text-uppercase">ADMISI</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <ul class="navbar-nav mx-auto text-center">
                <li class="nav-item mx-3 d-flex flex-column align-items-center">
                    <a href="{{ route('admisi') }}" class="nav-link">Tanggal Penting</a>
                </li>
                <li class="nav-item mx-3">
                    <a href="{{ route('jalur-pendaftaran') }}" class="nav-link">Jalur Pendaftaran</a>
                </li>
                <li class="nav-item mx-3 d-flex flex-column align-items-center">
                    <a href="{{ route('biaya-studi') }}" class="nav-link">Biaya Studi</a>
                    <div style="width: 100px; height: 1px; background-color: black"></div>
                </li>
                <li class="nav-item mx-3">
                    <a href="{{ route('persyaratan-khusus') }}" class="nav-link">Persyaratan Khusus</a>
                </li>
            </ul>
        </div>
    </nav>

    <section class="container text-center mt-5" id="bagianBiaya">
        <div class="d-flex justify-content-center flex-column pt-3 overflow-x-auto w-100">

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


    <div id="chat-container" style="position: fixed; bottom: 20px; right: 20px; z-index: 1000;">
  <div id="chat-button" style="width: 100px; height: 105px; border-radius: 0; color: #fff; text-align: center; line-height: 70px; cursor: pointer; position: relative; overflow: hidden; transition: transform 0.5s ease-in-out;" onclick="toggleChatForm()" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
    <img src="{{ asset("/assets/img/icon2.png") }}" style="width: 100%; height: 100%; object-fit: cover; position: absolute; top: 0; left: 0; transition: transform 0.5s ease-in-out;" class="d-block w-100" alt="gambar-1">
  </div>
  <div id="chat-form" style="display: none; position: fixed; bottom: 20px; right: 80px; z-index: 1000; max-width: 300px; transition: all 0.5s ease-in-out;">
    <div id="additional-buttons" style="display: flex; justify-content: space-between; margin-top: 10px;">
      <div class="additional-button d-flex justify-content-center align-items-center" style="width: 70px; height: 65px; border-radius: 50%; background-color: rgb(11,94,215); color: #fff; text-align: center; line-height: 50px; cursor: pointer; margin-right: 25px; font-size: 25px;" onclick="openWhatsApp()" onmouseover="this.style.backgroundColor='#0056b3'" onmouseout="this.style.backgroundColor='rgb(11,94,215)'">
        <i class="fab fa-whatsapp"></i>
      </div>
      <div class="additional-button d-flex justify-content-center align-items-center" style="width: 70px; height: 65px; border-radius: 50%; background-color: rgb(11,94,215); color: #fff; text-align: center; line-height: 50px; cursor: pointer; margin-right: 25px; font-size: 25px;" onclick="openTelegram()" onmouseover="this.style.backgroundColor='#0056b3'" onmouseout="this.style.backgroundColor='rgb(11,94,215)'">
        <i class="fab fa-telegram"></i>
      </div>
      <div class="additional-button d-flex justify-content-center align-items-center" style="width: 70px; height: 65px; border-radius: 50%; background-color: rgb(11,94,215); color: #fff; text-align: center; line-height: 50px; cursor: pointer; margin-right: 55px; font-size: 25px;" onclick="openFormQuestion()" onmouseover="this.style.backgroundColor='#0056b3'" onmouseout="this.style.backgroundColor='rgb(11,94,215)'">
        <i class="fa-regular fa-comment-dots"></i>
      </div>
    </div>
  </div>
</div>


<script src="{{ asset("/assets/js/chatbot.js") }}"></script>
@endsection
