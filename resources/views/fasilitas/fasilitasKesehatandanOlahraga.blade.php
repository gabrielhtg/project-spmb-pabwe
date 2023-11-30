@extends('template.fasilitas')

@section('isi-halaman')

    <section class="container" id="Olahraga dan Kesehatan">
        <div class="text-center fw-bolder">
        <h1 class="display-5 fw-bold">Olahraga & Kesehatan</h1>
        </div>
        <div class="custom-justified-text align-items-center pt-3">
          <p>
            Kampus IT Del memiliki fasilitas dibagian olahraga dan kesehatan. Fasilitas dibagian olahraga terdapat beberapa lapangan yang dipakai untuk melakukan acara formal maupun non formal. Mahasiwa juga menggunakan lapangan untuk acara himpunan seperti temu ramah dan welcoming party.
            Untuk fasilitas kesehatan terdapat klinik yang juga memiliki tenaga kerja dokter serta perawat yang profesional. 
          </p>
        </div>
        
        <div class="container pt-5" id="lapangan hijau">
            <div class="row">
                <div class="col-md-6">
                <img src="{{ asset('/assets/img/fasilitas/lapangan hijau.jpg') }}" class="img-fluid custom-image" alt="lapangan-hijau">
                </div>

                <div class="col-md-6 mx-auto d-flex flex-column my-auto">
                    <h3>Lapangan Hijau</h3>
                    <div class="lh-base text-break text-justify custom-justified-text align-items-center">
                        <p>
                        Lapangan Hijau adalah salah satu fasilitas yang ada di IT Del. Lapangan hijau biasa digunakan oleh warga Del untuk melakukan acara-acara besar baik itu acara formal maupun non-formal. Lapangan hijau biasanya digunakan oleh mahasiswa untuk kegiatan dari himpunan prodi seperti temu ramah bersama, welcoming party, atau acara dari BEM seperti festival ataupun acara lainnya.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="container pt-5" id="lapangan basket">
            <div class="row">
                <div class="col-md-6">
                <img src="{{ asset('/assets/img/fasilitas/lapangan basket.jpeg') }}" class="img-fluid custom-image" alt="lapangan-basket">
                </div>

                <div class="col-md-6 mx-auto d-flex flex-column my-auto">
                    <h3>Lapangan Basket</h3>
                    <div class="lh-base text-break text-justify custom-justified-text align-items-center">
                        <p>
                        Lapangan basket adalah lapangan yang juga merupakan fasilitas bagi mahasiswa dibidang olahraga. Lapangan basket digunakan untuk acara olahraga yang disediakan oleh BEM seperti KM CUP (Kegiatan Mahasiswa CUP), dan lapangan ini juga biasa digunakan oleh mahasiswa untuk mengisi waktu luang di weekend atau di sore hari setelah jam akademik.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container pt-5" id="lapangan voli">
            <div class="row">
                <div class="col-md-6">
                <img src="{{ asset('/assets/img/fasilitas/lapangan voli.jpg') }}" class="img-fluid custom-image" alt="lapangan-voli">
                </div>

                <div class="col-md-6 mx-auto d-flex flex-column my-auto">
                    <h3>Lapangan Voli</h3>
                    <div class="lh-base text-break text-justify custom-justified-text align-items-center">
                        <p>
                        Lapangan Voli tidak  jauh berbeda fungsinya dengan lapangan basket. Lapangan voli juga digunakan dalam acara olahraga BEM dan digunakan disaat waktu luang.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container pt-5" id="klinik IT Del">
            <div class="row">
                <div class="col-md-6">
                <img src="{{ asset('/assets/img/fasilitas/klinik.jpg') }}" class="img-fluid custom-image" alt="klinik_IT Del">
                </div>

                <div class="col-md-6 mx-auto d-flex flex-column my-auto">
                    <h3>klinik IT Del</h3>
                    <div class="lh-base text-break text-justify custom-justified-text align-items-center">
                        <p>
                        Klinik adalah fasilitas kesehatan yang dimiliki oleh IT Del. Klinik IT Del dilengkapi dengan obat-obat yang lengkap, ruangan yang diperlukan jika ada mahasiswa yang perlu diinfus, dokter dan juga perawat.  Selain itu juga tersedianya mobil kesehatan yang digunakan untuk menjemput mahasiswa sakit yang berada dikampus.
                        </p>    
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