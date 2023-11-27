@extends('template.fasilitas')

@section('isi-halaman')

<section class="container" id="areamahasiswa">
  <div class="text-center fw bolder">
  <h1 class="display-5 fw-bold">Area Mahasiswa</h1>
  </div>
  <div class="costum-justified-text align items-center pt-3">
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi quae quibusdam nemo a corrupti, amet maxime earum esse sint animi? Minus accusantium magnam deleniti reprehenderit, iure voluptates quod commodi vitae.</p>
  </div>

  <div class="container pt-5" id="ruangkelas">
            <div class="row">
                <div class="col-md-6">
                <img src="{{ asset('/assets/img/fasilitas/asrama-pniel.jpeg') }}" class="img-fluid custom-image" alt="asrama-pniel">
                </div>

                <div class="col-md-6 mx-auto d-flex flex-column my-auto">
                    <h3>Ruangan Kelas</h3>
                    <div class="lh-base text-break text-justify custom-justified-text align-items-center">
                        <p>
                        Institut Teknologi Del menyediakan ruangan kelas sebagai sarana utama belajar bagi mahasiswa. IT Del menyediakan smart classroom untuk mendukung kegiatan belajar mengajar mahasiswa. Ruang Kelas juga disediakan Idea Hub dan proyektor sebagai alat pendukung pembelajaran.
                        </p>
                    </div>
                </div>
            </div>
          </div>
        
          <div class="container pt-5" id="perpustakaan">
            <div class="row">
                <div class="col-md-6">
                <img src="{{ asset('/assets/img/fasilitas/asrama-pniel.jpeg') }}" class="img-fluid custom-image" alt="asrama-pniel">
                </div>

                <div class="col-md-6 mx-auto d-flex flex-column my-auto">
                    <h3>Perpustakaan</h3>
                    <div class="lh-base text-break text-justify custom-justified-text align-items-center">
                        <p>
                        IKampus juga menyediakan perpustakaan bagi mahasiswa. Buku yang tersedia di perpustakaan sudah hampir berjumlah +/- 2000 buah.  Perpustakaan dapat digunakan oleh mahasiswa maupun staff IT Del sebagai sarana belajar maupun berdiskusi.
                        Perpustakaan menyediakan tempat belajar, BI Corner, ruang diskusi, dan ruang audiovisual.
                        Perpustakaan dibuka mulai pukul 08:00 - 18:00 WIB. Anda dapat mengakses perpustakaan online (OLIS) melalui <a target="_blank" href="https://sipp.del.ac.id/">tautan ini.</a>
                        </p>
                    </div>
                </div>
            </div>
          </div>  
          
          <div class="container pt-5" id="opentheater">
            <div class="row">
                <div class="col-md-6">
                <img src="{{ asset('/assets/img/fasilitas/opentheater.jpg') }}" class="img-fluid custom-image" alt="asrama-pniel">
                </div>

                <div class="col-md-6 mx-auto d-flex flex-column my-auto">
                    <h3>Open Theater</h3>
                    <div class="lh-base text-break text-justify custom-justified-text align-items-center">
                        <p>
                        Open Theater atau biasa disingkat dengan OT merupakan fasilitas yang disediakan untuk seluruh civitas IT Del untuk berkumpul bersama. 
                        OT biasa digunakan bersama untuk hari hari besar seperti saat wisuda, perayaan paskah, ataupun kegiatan lainnya. 
                        Di hari biasa, OT dapat digunakan oleh mahasiswa untuk sarana berdiskusi dan berkumpul. Dari OT, kita bisa melihat pemandangan Danau Toba.
                        </p>
                    </div>
                </div>
            </div>
          </div>

          <div class="container pt-5" id="auditorium">
            <div class="row">
                <div class="col-md-6">
                <img src="{{ asset('/assets/img/fasilitas/auditorium.jpg') }}" class="img-fluid custom-image" alt="asrama-pniel">
                </div>

                <div class="col-md-6 mx-auto d-flex flex-column my-auto">
                    <h3>Auditorium</h3>
                    <div class="lh-base text-break text-justify custom-justified-text align-items-center">
                        <p>
                        Auditorium merupakan bangunan yang dirancang untuk pertemuan seperti kuliah umum, kuliah bersama, ataupun seminar.
                        Auditorium juga bisa dipakai untuk acara-acara fakultas maupun prodi, tempat ibadah, dan tempat acara lainnya.
                        </p>
                    </div>
                </div>
            </div>
          </div>

          <div class="container pt-5" id="saung">
            <div class="row">
                <div class="col-md-6">
                <img src="{{ asset('/assets/img/fasilitas/saung.jpg') }}" class="img-fluid custom-image" alt="asrama-pniel">
                </div>

                <div class="col-md-6 mx-auto d-flex flex-column my-auto">
                    <h3>Saung</h3>
                    <div class="lh-base text-break text-justify custom-justified-text align-items-center">
                        <p>
                        Saung merupakan fasilitas yang disediakan oleh kampus bagi mahasiswa . Saung dapat digunakan  oleh mahasiswa pada jam akademik mulai dari jam 08:00 - 17:00 WIB.
                        Saung dapat digunakan oleh mahasiswa di luar jam akademik sebagai tempat belajar mandiri ataupun kerja kelompok dengan mahasiswa lainnya.
                        </p>
                    </div>
                </div>
            </div>
          </div>

          <div class="container pt-5" id="container">
            <div class="row">
                <div class="col-md-6">
                <img src="{{ asset('/assets/img/fasilitas/container.jpg') }}" class="img-fluid custom-image" alt="asrama-pniel">
                </div>

                <div class="col-md-6 mx-auto d-flex flex-column my-auto">
                    <h3>Container</h3>
                    <div class="lh-base text-break text-justify custom-justified-text align-items-center">
                        <p>
                        Container berada pada luar kampus. Container disediakan untuk digunakan oleh mahasiswa sebagai pendukung kegiatan UKM (Unit Kreativitas Mahasiswa).
                        Container dilengkapi dengan Air Conditioner (AC) dan karpet sebagai fasilitas pendukung.
                        </p>
                    </div>
                </div>
            </div>
          </div>

</section>
<div id="chat-container" style="position: fixed; bottom: 20px; right: 20px; z-index: 1000;">
  <div id="chat-button" style="width: 80px; height: 80px; border-radius: 12px; background-color: #007bff; color: #fff; text-align: center; line-height: 50px; cursor: pointer; position: relative; overflow: hidden;" onclick="toggleChatForm()">
    <img src="{{ asset("/assets/img/chatbot.jpeg") }}" style="width: 100%; height: 100%; object-fit: cover; position: absolute; top: 0; left: 0; transition: transform 0.3s ease-in-out;" class="d-block w-100" alt="gambar-1" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
  </div>
  <div id="chat-form" style="display: none; position: fixed; bottom: 20px; right: 80px; z-index: 1000; max-width: 300px; transition: all 0.3s ease-in-out;">
    <div id="additional-buttons" style="display: flex; justify-content: space-between; margin-top: 10px;">
      <div class="additional-button d-flex justify-content-center align-items-center" style="width: 60px; height: 60px; border-radius: 20%; background-color: #0a7bc2; color: #fff; text-align: center; line-height: 40px; cursor: pointer; margin-right: 25px; font-size: 25px;" onclick="openWhatsApp()">
        <i class="fab fa-whatsapp"></i>
      </div>
      <div class="additional-button d-flex justify-content-center align-items-center" style="width: 60px; height: 60px; border-radius: 20%; background-color: #0a7bc2; color: #fff; text-align: center; line-height: 40px; cursor: pointer; margin-right: 25px; font-size: 25px;" onclick="openTelegram()">
        <i class="fab fa-telegram"></i>
      </div>
      <div class="additional-button d-flex justify-content-center align-items-center" style="width: 60px; height: 60px; border-radius: 20%; background-color: #0a7bc2; color: #fff; text-align: center; line-height: 40px; cursor: pointer; margin-right: 25px; font-size: 25px;" onclick="openFormQuestion()">
        <i class="fa-regular fa-comment-dots"></i>
      </div>
    </div>
  </div>
</div>

<script src="{{ asset("/assets/js/chatbot.js") }}"></script>
@endsection