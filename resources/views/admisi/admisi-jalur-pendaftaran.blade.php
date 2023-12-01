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
                <li class="nav-item mx-3 d-flex flex-column align-items-center">
                    <a href="{{ route('jalur-pendaftaran') }}" class="nav-link">Jalur Pendaftaran</a>
                    <div style="width: 150px; height: 1px; background-color: black"></div>
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

    <section id="jalur-pendaftaran" class="container pt-5">
        <ul class="nav nav-fill nav-pills" id="jalur-pendaftaran-Tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pmdk-tab" data-bs-toggle="tab" data-bs-target="#pmdk-tab-pane"
                        type="button" role="tab" aria-controls="utbk-tab-pane" aria-selected="true">
                    PMDK
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="usm-tab" data-bs-toggle="tab" data-bs-target="#usm-tab-pane" type="button"
                        role="tab" aria-controls="usm-tab-pane" aria-selected="false">
                    USM
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="utbk-tab" data-bs-toggle="tab" data-bs-target="#utbk-tab-pane"
                        type="button" role="tab" aria-controls="utbk-tab-pane" aria-selected="false">
                    UTBK
                </button>
            </li>
        </ul>

        <div class="tab-content" id="jenis-pendaftaran-TabContent">
            @include('admisi.sub-admisi.pmdk-tab-pane')
            @include('admisi.sub-admisi.usm-tab-pane')
            @include('admisi.sub-admisi.utbk-tab-pane')
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
