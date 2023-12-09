@extends('template.app')

@section('isi-halaman')
    <section class="container-judul" id="Pengumuman">
        <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('/assets/img/pengumuman/hero-pengumuman.jpg') }}" class="img-fluid d-block w-100"
                        alt="header-fasilitas">
                    <div class="carousel-caption d-none d-md-block text-start">
                        <div class="d-flex flex-column pb-5 text-center h-100">
                            <h1 class="display-5 fw-bold" style="color:#0477BF">Pengumuman SPMB</h1>
                            <p>
                                Cari informasi terbaru seputar asrama, pengumuman kelulusan ujian masuk, jadwal kegiatan,
                                dan berita penting lainnya melalui fitur pencarian atau berdasarkan tag yang disediakan.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container pt-5">

            <div class="justify text-center">
                <form method="GET">
                    <div class="input-group mb-3" style="width: 700px; margin: auto;">
                        <input name="keywords" type="text" class="form-control" placeholder="cari pengumuman..." aria-label="cari pengumuman" aria-describedby="basic-addon2" value="{{request()->query("keywords")}}">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="submit">Cari</button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="table-pengumuman">
                <table border="1" class="table align-middle">
                    <thead class="text-center">
                        <tr>
                            <th style="text-align:center;">No.</th>
                            <th style="text-align:center;">Tags</th>
                            <th style="text-align:center;">Judul Pengumuman</th>
                            <th style="text-align:center;">Tanggal Pengumuman</th>
                        </tr>
                    </thead>

                    <tbody>
                        @php
                            $counter = 1;
                        @endphp
                        @foreach($pengumuman as $item)
                        <tr>
                            <td style="text-align:center;">{{$counter++}}</td>
                            <td style="text-align:center;"><button type="button" class="btn btn-light" disabled>{{$item->kategoriPengumuman}}</button>
                            </td>
                            <td><a href="{{ asset('assets/file_Pengumuman/' . $item->filePengumuman) }}" target="_blank" class="text-decoration-none">{{$item->judulPengumuman}}</a></td>
                            <td style="text-align:center;">{{ date('d F Y', strtotime($item->tanggalPengumuman)) }}</td>
                        </tr>
                        @endforeach
                    </tbody>


                </table>
            </div>

            <nav aria-label="Page navigation">
                <ul class="pagination justify-content-center">

                    <!-- Tombol Previous -->
                    <li class="page-item {{ $pengumuman->onFirstPage() ? 'disabled' : '' }}">
                        <a class="page-link" href="{{ $pengumuman->previousPageUrl() }}" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>

                    <!-- Tautan Halaman -->
                    @for ($i = 1; $i <= $pengumuman->lastPage(); $i++)
                        <li class="page-item {{ $i == $pengumuman->currentPage() ? 'active' : '' }}">
                            <a class="page-link" href="{{ $pengumuman->url($i) }}">{{ $i }}</a>
                        </li>
                    @endfor

                    <!-- Tombol Next -->
                    <li class="page-item {{ $pengumuman->hasMorePages() ? '' : 'disabled' }}">
                        <a class="page-link" href="{{ $pengumuman->nextPageUrl() }}" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>
                     
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
