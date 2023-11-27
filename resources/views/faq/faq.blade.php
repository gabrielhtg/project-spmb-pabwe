@extends('template.app')

@section('isi-halaman')

<section>
    <div class="masthead" style="background-size: cover; min-height: 100vh; position: relative; color: #ffff; text-shadow: 2px 2px 2px rgba(0, 0, 0, 0.2); background-image: url('{{ asset('faq/assets/img/gambarfaq.png') }}');">
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
                      <i class="fas fa-plus "></i> Bagaimana cara melakukan pembayaran biaya pendaftaran SPMB IT del?
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
                      <i class="fas fa-plus"></i>Berapa biaya pendidikan di IT Del?
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
                      <i class="fas fa-plus"></i> Bagaimana cara mendaftar sebagai mahasiswa baru Institut Teknologi Del?
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
                    <i class="fas fa-plus "></i> Bagaimana cara melakukan pembayaran biaya pendaftaran SPMB IT del?
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
                    <i class="fas fa-plus"></i>Berapa biaya pendidikan di IT Del?
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
                    <i class="fas fa-plus"></i> Bagaimana cara mendaftar sebagai mahasiswa baru Institut Teknologi Del?
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
                    <i class="fas fa-plus "></i> Bagaimana cara melakukan pembayaran biaya pendaftaran SPMB IT del?
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
                    <i class="fas fa-plus"></i>Berapa biaya pendidikan di IT Del?
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
                    <i class="fas fa-plus"></i> Bagaimana cara mendaftar sebagai mahasiswa baru Institut Teknologi Del?
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

@endsection

