@extends('template.app')

@section('isi-halaman')

<section id="hero" class="container">
    <title>Daftar Beasiswa</title>
    <link rel="stylesheet" href="{{ asset('assets/css/beasiswa.css') }}" />
    <img src="{{ asset('/assets/img/beasiswa/beasiswa-wp.jpg') }}" class="d-block w-100 blur-image" alt="gambar-1">
    <div class="carousel-caption d-none d-md-block">
        <div class="d-flex flex-column justify-content-center h-100 text-start margin-hero-title">
            <h1 class="display-5 fw-bold">Beasiswa IT Del</h1>
        </div>
    </div>
</section>

<div class="beasiswa-container">
    @foreach($beasiswa as $beasiswaItem)
        <div class="beasiswa-card">
            <!-- Header di atas -->
            <div class="beasiswa-header">
                <h3>{{ $beasiswaItem['title'] }}</h3>
            </div>

            <!-- Konten flex untuk gambar dan deskripsi -->
            <div class="beasiswa-content">
                <!-- Gambar di sebelah kiri -->
                <div class="beasiswa-image">
                    <img src="{{ asset($beasiswaItem['image_url']) }}" class="d-block w-100" alt="Beasiswa Image">
                </div>

                <!-- Deskripsi dan Tombol Download PDF di sebelah kanan -->
                <div class="beasiswa-details">
                    <p>{{ $beasiswaItem['description'] }}</p>
                    <a href="{{ $beasiswaItem['pdf_url'] }}" class="btn btn-primary" download>Download PDF</a>
                </div>
            </div>
        </div>
    @endforeach
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
