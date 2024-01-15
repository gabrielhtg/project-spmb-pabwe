@extends('template.app')

@section('isi-halaman')
    <section>
        <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img style="weight:100wh; height: 70vh;"
                        src="{{ asset($dataHeaderAdmisi->letak_foto ?: 'assets/img/default.jpg') }}"
                        class="img-fluid d-block w-100" alt="header-fasilitas">
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
                <li class="nav-item mx-3">
                    <a href="{{ route('jalur-pendaftaran') }}" class="nav-link">Jalur Pendaftaran</a>
                </li>
                <li class="nav-item mx-3">
                    <a href="{{ route('biaya-studi') }}" class="nav-link">Biaya Studi</a>
                </li>
                <li class="nav-item mx-3">
                    <a href="{{ route('persyaratan-khusus') }}" class="nav-link">Persyaratan Khusus</a>
                    <div style="width: 180px; height: 1px; background-color: black"></div>
                </li>
            </ul>
        </div>
    </nav>

    <section class="container w-100 pt-5 pb-3">
        <div class="container d-flex justify-content-center flex-wrap row-gap-4 column-gap-5">
            @foreach ($prodis as $prodi)
                <div type="button" class="bg-white border-0" data-bs-toggle="modal"
                    data-bs-target="#exampleModal{{ $prodi->id }}">
                    <div class="border-1 border d-flex rounded-5" style="width: 18rem; height: 7rem">
                        <div class="bg-body-tertiary rounded-start-5" style="width: 6rem">
                            <img src="{{ asset("$prodi->cover") }}" alt="three-dot"
                                style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                        <div class="d-flex justify-content-center align-items-center w-100 flex-wrap pt-2 pb-2 gap-1">
                            <div class="w-100 d-flex justify-content-start ms-3">

                            </div>

                            <div class="w-100 fw-bold text-center">
                                {{ $prodi->program_studi }}
                            </div>

                            <div class="w-100 d-flex justify-content-end">
                                <span class="me-3 fw-bold">+</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal{{ $prodi->id }}" tabindex="-1"
                    aria-labelledby="exampleModalLabel{{ $prodi->id }}" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content" style="width: 800px; height:600px">
                            <div class="modal-header" style="background-color: rgb(241, 241, 241)">
                                <h1 class="modal-title fs-5" id="exampleModalLabel{{ $prodi->id }}"
                                    style="font-weight:900;">
                                    {{ $prodi->program_studi }}</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body d-flex align-items-center " style="padding:0 80px;">
                                {!! $prodi->deskripsi_persyaratan !!}
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">OK</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <div id="chat-container" style="position: fixed; bottom: 20px; right: 20px; z-index: 1000;">
        <div id="chat-button"
            style="width: 100px; height: 105px; border-radius: 0; color: #fff; text-align: center; line-height: 70px; cursor: pointer; position: relative; overflow: hidden; transition: transform 0.5s ease-in-out;"
            onclick="toggleChatForm()" onmouseover="this.style.transform='scale(1.1)'"
            onmouseout="this.style.transform='scale(1)'">
            <img src="{{ asset('/assets/img/icon2.png') }}"
                style="width: 100%; height: 100%; object-fit: cover; position: absolute; top: 0; left: 0; transition: transform 0.5s ease-in-out;"
                class="d-block w-100" alt="gambar-1">
        </div>
        <div id="chat-form"
            style="display: none; position: fixed; bottom: 20px; right: 80px; z-index: 1000; max-width: 300px; transition: all 0.5s ease-in-out;">
            <div id="additional-buttons" style="display: flex; justify-content: space-between; margin-top: 10px;">
                <div class="additional-button d-flex justify-content-center align-items-center"
                    style="width: 70px; height: 65px; border-radius: 50%; background-color: rgb(11,94,215); color: #fff; text-align: center; line-height: 50px; cursor: pointer; margin-right: 25px; font-size: 25px;"
                    onclick="openWhatsApp()" onmouseover="this.style.backgroundColor='#0056b3'"
                    onmouseout="this.style.backgroundColor='rgb(11,94,215)'">
                    <i class="fab fa-whatsapp"></i>
                </div>
                <div class="additional-button d-flex justify-content-center align-items-center"
                    style="width: 70px; height: 65px; border-radius: 50%; background-color: rgb(11,94,215); color: #fff; text-align: center; line-height: 50px; cursor: pointer; margin-right: 25px; font-size: 25px;"
                    onclick="openTelegram()" onmouseover="this.style.backgroundColor='#0056b3'"
                    onmouseout="this.style.backgroundColor='rgb(11,94,215)'">
                    <i class="fab fa-telegram"></i>
                </div>
                <div class="additional-button d-flex justify-content-center align-items-center"
                    style="width: 70px; height: 65px; border-radius: 50%; background-color: rgb(11,94,215); color: #fff; text-align: center; line-height: 50px; cursor: pointer; margin-right: 55px; font-size: 25px;"
                    onclick="openFormQuestion()" onmouseover="this.style.backgroundColor='#0056b3'"
                    onmouseout="this.style.backgroundColor='rgb(11,94,215)'">
                    <i class="fa-regular fa-comment-dots"></i>
                </div>
            </div>
        </div>
    </div>


    <script src="{{ asset('/assets/js/chatbot.js') }}"></script>
@endsection
