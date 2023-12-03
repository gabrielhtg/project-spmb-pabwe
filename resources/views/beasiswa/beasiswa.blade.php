@extends('template.app')

@section('isi-halaman')

<!-- <section id="hero" class="container">
    <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('assets/img/beasiswa/beasiswa-wp.jpg') }}" class="d-block w-100" alt="...">
            </div>
        </div>
    </div>
</section> -->

<section>
    <div class="masthead" style="background-size: cover; min-height: 75vh; position: relative; color: #ffff; text-shadow: 2px 2px 2px rgba(0, 0, 0, 0.2); background-image: url('{{ asset('assets/img/beasiswa/beasiswa-wp.jpg') }}');">
        <div class="color-overlay d-flex justify-content-center align-items-center">
        <link rel="stylesheet" href="{{ asset('assets/css/kel5.css') }}" />
          <h2 class="beasiswa-text" style="height: 90px">Beasiswa</h2>
        </div>
    </div>

<div class="container mt-3">
    <div class="card mb-3">
        <h5 class="card-header text-center" style="height: 56.7px; width: 100%; display: flex; align-items: center; justify-content: center; background-color: #d9d9d9; color: #0066cc; font-weight: bold;">Beasiswa Prestasi Per Semester ( IPS )</h5>
        <div class="row g-0">
            <div class="col-md-4">
                <img src="{{ asset('assets/img/beasiswa/b1.png') }}" class="img-fluid rounded-start" style="height: 100%; object-fit: cover;" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <div class="card-text" style="text-align:justify; padding-right:20px"> Beasiswa IPS diberikan kepada mahasiswa dalam bentuk potongan SPP dengan aturan sebagai berikut: <br><br>
                        <ol type="a">
                        <li> Beasiswa Prestasi Per Semester (IPS) diberikan bagi semua mahasiswa pada tingkat 1, tingkat 2, tingkat 3, dan tingkat 4 kecuali mahasiswa pada semester terakhir masa studinya (semester 6 pada prodi DIII dan semester 8 pada prodi DIV dan S1)</li>
                        <li>
                            Mahasiswa penerima Beasiswa Prestasi harus memiliki perilaku terpuji dan dibuktikan dengan Nilai Perilaku minimal AB.
                        </li>
                        </ol>
                    </div>

                    <a href="{{ asset('assets/pdf/beasiswa.pdf') }}" class="btn btn-primary" style="position: absolute; bottom: 10px; right: 10px;" download>Download PDF</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mt-3">
    <div class="card mb-3">
        <h5 class="card-header text-center" style="height: 56.7px; width: 100%; display: flex; align-items: center; justify-content: center; background-color: #d9d9d9; color: #0066cc; font-weight: bold;">Penghargaan ”Best Performance”</h5>
        <div class="row g-0">
        <div class="col-md-4" style="text-align: center;">
    <img src="{{ asset('assets/img/beasiswa/b2.jpg') }}" class="img-fluid rounded-start" style="height: 100%; object-fit: cover; margin-left: auto;" alt="...">
</div>

            <div class="col-md-8">
                <div class="card-body">
                    <div class="card-text" style="text-align:justify"> Penghargaan “Best Performance” adalah penghargaan yang diberikan kepada
                        mahasiswa dengan kenaikan IPS paling tinggi antara IP semester ganjil dan IP
                        semester genap pada tiap tahun ajaran <br><br>
                        <ol type="a">
                        <li> Penghargaan “Best Performance” diberikan kepada satu orang mahasiswa pada
                            setiap angkatan (tingkat)</li>
                        <li>
                            Penghargaan “Best Performance” diberikan pada Semester Ganjil tahun ajaran baru
                                            bagi mahasiswa yang memperoleh anugerah “Best Performance” pada Perayaan
                                            Inaugurasi, Dies Natalis dan Wisuda IT Del.
                        </li>
                        </ol>
                    </div>

                    <a href="{{ asset('assets/pdf/beasiswa.pdf') }}" class="btn btn-primary" style="position: absolute; bottom: 10px; right: 10px;" download>Download PDF</a>
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
