@extends("template.app")

@section("isi-halaman")
    <section>
        <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
                <div class="carousel-item active w-100">
                    <img style="weight:100wh; height: 70vh;" src="{{ asset($dataHeaderAdmisi->letak_foto ? $dataHeaderAdmisi->letak_foto : 'assets/img/default.jpg') }}" class="img-fluid d-block w-100" alt="header-fasilitas">
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
                    <div style="width: 150px; height: 1px; background-color: black"></div>
                </li>
                <li class="nav-item mx-3">
                    <a href="{{ route('jalur-pendaftaran') }}" class="nav-link">Jalur Pendaftaran</a>
                </li>
                <li class="nav-item mx-3">
                    <a href="{{ route('biaya-studi') }}" class="nav-link">Biaya Studi</a>
                </li>
                <li class="nav-item mx-3">
                    <a href="{{ route('persyaratan-khusus') }}" class="nav-link">Persyaratan Khusus</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container">
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
                        <hr>
                        <div class="tab-pane ps-3 pe-3 fade show active" id="jadwalpendaftaran-tab-pane" role="tabpanel"
                             aria-labelledby="jadwalpendaftaran-tab" tabindex="0">
                            <table class="table table-striped table-bordered mt-5">
                                <tbody>
                                    @foreach($jadwalPendaftaran as $e)
                                <tr>
                                    <td>{{$e -> jenis_jalur}}</td>
                                    <td>{{$e ->tanggal_pendaftaran}}</td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade p-3" id="jadwal-ujian-tab-pane" role="tabpanel"
                             aria-labelledby="profile-tab" tabindex="0">
                            <p>Jadwal pelaksanaan ujian Institut Teknologi Del dapat dilihat pada info dibawah ini.</p>
                            <ul>
                            @foreach($dataJadwalUjian as $e)
                                <li>
                                    <span class="fw-semibold">Jadwal Pelaksanaan Ujian {{ $e->jalur_ujian }} Tahun Akademik {{ $e->tahun_akademik }}</span>
                                    <p>
                                        {!! $e->deskripsi !!}
                                    </p>
                                </li>
                            @endforeach
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="jenis-test-tab-pane" role="tabpanel"
                             aria-labelledby="jenis-test-tab" tabindex="0">
                             <table class="table table-striped table-bordered mt-5">
                                <tbody>
                                    @foreach($jenis as $item)
                                    <tr>
                                        <td>{{ $item->gelombang}}</td>
                                        <td>{{ $item->jenisUjian}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                             </table>
                        </div>
                        <div class="tab-pane ps-3 pe-3 fade" id="lokasi-tab-pane" role="tabpanel" aria-labelledby="lokasi-tab"
                             tabindex="0">
                             <table class="table table-striped table-bordered mt-5">
                                <tbody>
                                    @foreach($lokasi as $item)
                                    <tr>
                                        <td>{{ $item->lokasiTes}}</td>
                                        <td>{{ $item->alamatLokasi}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                             </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
