@extends('template.app')

@section('isi-halaman')

<section>
    <div class="masthead" style="background-image: url('{{ asset('faq/assets/img/gambarfaq.png') }}');">
        <div class="color-overlay d-flex justify-content-center align-items-center">
          <h2 class="faq-text" style="height: 500px">FAQ</h2>
        </div>
    </div>

    <div class="container mt-4">
        <ul class="nav nav-tabs mb-5" id="myTabs">
          <li class="nav-item">
            <a class="nav-link active fw-bold text-black"  id="tab1" data-bs-toggle="tab" href="#content1">Umum</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-bold text-black" id="tab2" data-bs-toggle="tab" href="#content2">Persyaratan Pendaftaran</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-bold text-black" id="tab3" data-bs-toggle="tab" href="#content3">Jalur Seleksi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-bold text-black" id="tab4" data-bs-toggle="tab" href="#content4">Ujian</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-bold text-black" id="tab5" data-bs-toggle="tab" href="#content5">Pengumuman</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-bold text-black" id="tab6" data-bs-toggle="tab" href="#content6">Registrasi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-bold text-black" id="tab7" data-bs-toggle="tab" href="#content7">Beasiswa</a>
          </li>
        </ul>

        <div class="tab-content mt-2">
          <div class="tab-pane fade show active" id="content1">
            <div class="accordion" id="accordion1">
              <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item mb-3">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed fw-bold text-white" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne"
                        style="background-color: #0477BF;">
                      <i class=" "></i> Bagaimana cara melakukan pembayaran biaya pendaftaran SPMB IT del?
                    </button>
                  </h2>
                  <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                  </div>
                </div>
                <div class="accordion-item mb-3">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed fw-bold text-white" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo"
                        style="background-color: #0477BF;">
                      <i class=""></i>Berapa biaya pendidikan di IT Del?
                    </button>
                  </h2>
                  <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                  </div>
                </div>
                <div class="accordion-item mb-3">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed fw-bold text-white" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree"
                        style="background-color: #0477BF;">
                      <i class=""></i> Bagaimana cara mendaftar sebagai mahasiswa baru Institut Teknologi Del?
                    </button>
                  </h2>
                  <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <div class="tab-pane fade" id="content2">
          <div class="accordion" id="accordion1">
            <div class="accordion accordion-flush" id="accordionFlushExample">
              <div class="accordion-item mb-3">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed fw-bold text-white" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne"
                      style="background-color: #0477BF;">
                    <i class=" "></i> Bagaimana cara melakukan pembayaran biaya pendaftaran SPMB IT del?
                  </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                </div>
              </div>
              <div class="accordion-item mb-3">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed fw-bold text-white" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo"
                      style="background-color: #0477BF;">
                    <i class=""></i>Berapa biaya pendidikan di IT Del?
                  </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                </div>
              </div>
              <div class="accordion-item mb-3">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed fw-bold text-white" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree"
                      style="background-color: #0477BF;">
                    <i class=""></i> Bagaimana cara mendaftar sebagai mahasiswa baru Institut Teknologi Del?
                  </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                </div>
              </div>
            </div>
          </div>
          </div>
        </div>
        <div class="tab-pane fade" id="content3">
          <div class="accordion" id="accordion1">
            <div class="accordion accordion-flush" id="accordionFlushExample">
              <div class="accordion-item mb-3">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed fw-bold text-white" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne"
                      style="background-color: #0477BF;">
                    <i class=" "></i> Bagaimana cara melakukan pembayaran biaya pendaftaran SPMB IT del?
                  </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                </div>
              </div>
              <div class="accordion-item mb-3">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed fw-bold text-white" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo"
                      style="background-color: #0477BF;">
                    <i class=""></i>Berapa biaya pendidikan di IT Del?
                  </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                </div>
              </div>
              <div class="accordion-item mb-3">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed fw-bold text-white" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree"
                      style="background-color: #0477BF;">
                    <i class=""></i> Bagaimana cara mendaftar sebagai mahasiswa baru Institut Teknologi Del?
                  </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                </div>
              </div>
            </div>
          </div>
          </div>

        </div>
      </div>

      <script src="/assets/vendor/bootstrap-5.2.3-dist/js/bootstrap.bundle.min.js"></script>
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

