@extends('template.fasilitas')

@section('isi-halaman')
    <section class="container" id="Laboratorium">
        <div class="text-center fw-bolder">
        <h1 class="display-5 fw-bold">Laboratorium</h1>
        </div>
        <div class="custom-justified-text align-items-center pt-3">
            <p>
                Laboratorium ialah sarana mahasiswa/i dalam melakukan pembelajaran baik itu secara mandiri atau juga
                melakukannya untuk tugas suatu mata kuliah. Dalam IT Del terdapat beberapa laboratorium yang dapat digunakan
                oleh mahasiswa di masa perkuliahannya.
            </p>
        </div>

        <div class="container pt-5" id="lab-fite">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ asset('/assets/img/fasilitas/lab-komputer2.jpg') }}" class="img-fluid custom-image"
                        alt="lab-fite">
                </div>

                <div class="col-md-6 mx-auto d-flex flex-column my-auto">
                    <h3>Laboratorium FITE</h3>
                    <div class="lh-base text-break text-justify custom-justified-text align-items-center">
                        <p>
                            Laboratorium FITE menyediakan laboratorium komputer sebagai tempat untuk mendukung proses
                            belajar
                            mahasiswa/i FITE. Tersedia kelengkapan berupa komputer dengan komponen-komponennya baik itu
                            mouse, CPU,
                            keyboard dan juga kabel LAN.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container pt-5" id="lab-fti">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ asset('/assets/img/fasilitas/lab-fti.jpg') }}" class="img-fluid" alt="lab-fti">
                </div>

                <div class="col-md-6 mx-auto d-flex flex-column my-auto">
                    <h3>Laboratorium FTI</h3>
                    <div class="lh-base text-break text-justify custom-justified-text align-items-center">
                        <p>
                            Laboratorium FTI menyediakan peralatan berupa 3D print yang akan membantu mahasiswa/i dalam
                            proses
                            perkuliahan dan juga membantu mahasiswa/i dalam mendalami bagaimana proses manufaktur. Selain
                            itu
                            ruangan ini juga dapat digunakan dalam melakukan presentasi proyek yang sudah dikerjakan.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container pt-5" id="lab-fb">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ asset('/assets/img/fasilitas/lab-fb.jpg') }}" class="img-fluid" alt="lab-fb">
                </div>

                <div class="col-md-6 mx-auto d-flex flex-column my-auto">
                    <h3>Laboratorium FB</h3>
                    <div class="lh-base text-break text-justify custom-justified-text align-items-center">
                        <p>
                            Laboratorium FB menyediakan peralatan berupa alat-alat dan bahan-bahan yang akan membantu
                            mahasiswa/i
                            FB dalam melakukan experimen yang dibutuhkan dalam proses perkuliahan. Dengan laboratorium ini
                            juga,
                            mahasiswa dapat melakukan pelatihan mandiri untuk mengerjakan proyek yang memerlukan experimen
                            pada laboratorium.
                        </p>
                    </div>
                </div>
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
