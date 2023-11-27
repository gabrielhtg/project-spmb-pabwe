@extends('template.app')

@section('isi-halaman')

<section id="hero" class="container">
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset("/assets/img/gambar-hero-2.jpg") }}" class="d-block w-100 blur-image" alt="gambar-1">
                <div class="carousel-caption d-none d-md-block">
                    <div class="d-flex flex-column justify-content-center h-100 text-start margin-hero-title">
                        <h1 class="display-5 fw-bold">Institut Teknologi Del</h1>
                        <div class="mt-4">
                            <p class="lead mb-4">"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid aperiam beatae
                                deserunt dicta distinctio est eveniet id impedit inventore iure maxime necessitatibus obcaecati odit
                                perferendis quaerat, totam vero voluptates? Amet, animi aut autem delectus dolores eos est expedita,
                                incidunt libero minus nulla obcaecati pariatur possimus quia reprehenderit repudiandae ut
                                voluptates?"</p>
                            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mt-5">
                                <button type="button" class="btn btn-primary btn-lg px-4 gap-3">Daftar Sekarang</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
{{--                <span class="carousel-control-prev-icon" aria-hidden="true"></span>--}}
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
{{--                <span class="carousel-control-next-icon" aria-hidden="true"></span>--}}
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="d-flex d-md-none flex-column justify-content-center text-start pb-5 pt-5" >
        <h1 class="display-5 fw-bold">Institut Teknologi Del</h1>
        <div class="mt-4">
            <p class="lead mb-4">"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid aperiam beatae
                deserunt dicta distinctio est eveniet id impedit inventore iure maxime necessitatibus obcaecati odit
                perferendis quaerat, totam vero voluptates? Amet, animi aut autem delectus dolores eos est expedita,
                incidunt libero minus nulla obcaecati pariatur possimus quia reprehenderit repudiandae ut
                voluptates?"</p>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mt-5">
                <button type="button" class="btn btn-primary btn-lg px-4 gap-3">Daftar Sekarang</button>
            </div>
        </div>
    </div>
</section>

<section class="container p-5 text-center" id="section_akreditasi">
    <h1 class="text-center fw-bold">Akreditasi Kampus</h1>

    <div class="text-center pt-4">
        <span id="akreditasi" class="fw-bold d-block lh-1" style="font-size: 10rem">B</span>
        <span id="akreditasi_lengkap" class="d-block lh-1" style="font-size: 3rem">BAIK</span>
        <span id="lembaga_akreditasi" class="d-block lh-1">BAN-PT</span>
    </div>
</section>

<section class="container">
    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset("/assets/img/beasiswa-tolikara.jpeg") }}" class="d-block w-100"
                     alt="beasiswa-tolikara">
                <div class="carousel-caption d-none d-md-block">
                    <div class="ukuran-div-beasiswa p-5">
                        <div class="text-start">
                            <span class="text-white fs-4"><i>Telah Dibuka</i></span>
                            <br>
                            <span class="text-white mt-5 fs-3 ms-4"><strong>Beasiswa Tolikara 1</strong></span>
                        </div>

                        <div class="text-start align-self-end mt-5">
                            <span>Pendaftaran : </span>
                            <br>
                            <span>dd/mm/yyyy s/d dd/yy/mmmm</span>
                        </div>
                    </div>

                    <div class="mb-4 mt-5 text-end">
                        <button class="tombol-kita text-oyen"><strong>Daftar Sekarang</strong></button>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset("/assets/img/beasiswa-tolikara.jpeg") }}" class="d-block w-100"
                     alt="beasiswa-tolikara">
                <div class="carousel-caption d-none d-md-block">
                    <div class="ukuran-div-beasiswa p-5">
                        <div class="text-start">
                            <span class="text-white fs-4"><i>Telah Dibuka</i></span>
                            <br>
                            <span class="text-white mt-5 fs-3 ms-4"><strong>Beasiswa Tolikara 2</strong></span>
                        </div>

                        <div class="text-start align-self-end mt-5">
                            <span>Pendaftaran : </span>
                            <br>
                            <span>dd/mm/yyyy s/d dd/yy/mmmm</span>
                        </div>
                    </div>

                    <div class="mb-4 mt-5 text-end">
                        <button class="btn bg-white text-oyen"><strong>Daftar Sekarang</strong></button>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset("/assets/img/beasiswa-tolikara.jpeg") }}" class="d-block w-100"
                     alt="beasiswa-tolikara">
                <div class="carousel-caption d-none d-md-block">
                    <div class="ukuran-div-beasiswa p-5">
                        <div class="text-start">
                            <span class="text-white fs-4"><i>Telah Dibuka</i></span>
                            <br>
                            <span class="text-white mt-5 fs-3 ms-4"><strong>Beasiswa Tolikara 3</strong></span>
                        </div>

                        <div class="text-start align-self-end mt-5">
                            <span>Pendaftaran : </span>
                            <br>
                            <span>dd/mm/yyyy s/d dd/yy/mmmm</span>
                        </div>
                    </div>

                    <div class="mb-4 mt-5 text-end">
                        <button class="tombol-kita text-oyen"><strong>Daftar Sekarang</strong></button>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>

<section id="informasi-umum" class="bg-informasi-umum container text-center">
    <div class="p-5">
        <h1><strong>Informasi Umum</strong></h1>
        <div class="d-flex justify-content-center mb-4">
            <div id="underline-line-informasi-umum" class=" bg-primary"></div>
        </div>

        <div class="d-flex justify-content-center mt-5 flex-wrap gap-5" id="tampilan-data-informasi-umum">
            <div style="width: 18rem">
                <div class="mt-4">
                    <i class="fa-solid fa-chalkboard-user card-img-top" style="font-size: 80px"></i>
                </div>
                <div class="card-body">
                    <span id="jumlah-dosen" class="fs-2 text-primary fw-bold">9999+</span>
                    <br>
                    <span class="fs-5"><strong>Dosen</strong></span>
                </div>
            </div>

            <div class="d-none d-md-inline vertical-line"></div>

            <div style="width: 18rem">
                <div class="mt-4">
                    <i class="fa-solid fa-child-reaching card-img-top" style="font-size: 80px"></i>
                </div>
                <div class="card-body">
                    <span id="jumlah-mahasiswa" class="fs-2 text-primary fw-bold">9999+</span>
                    <br>
                    <span class="fs-5"><strong>Mahasiswa</strong></span>
                </div>
            </div>

            <div class="d-none d-md-inline vertical-line"></div>

            <div style="width: 18rem">
                <div class="mt-4">
                    <i class="fa-solid fa-user-graduate" style="font-size: 80px"></i>
                </div>
                <div class="card-body">
                    <span id="jumlah-dosen" class="fs-2 text-primary fw-bold">9999+</span>
                    <br>
                    <span class="fs-5"><strong>Alumni</strong></span>
                </div>
            </div>
        </div>
    </div>
</section>

@php
    $lebarCardMitra = 'width: 10rem;'
@endphp

<section id="mitra-kampus" class="splide container p-5" aria-label="Beautiful Images">
    <h1 class="text-center fw-bold">Mitra Kampus</h1>
    <div class="d-flex justify-content-center mb-4">
        <div id="underline-line-mitra" class="bg-primary"></div>
    </div>


    <div class="splide__slider">
        <div class="splide__track">
            <ul class="splide__list">
                <li class="splide__slide d-flex justify-content-center" data-splide-interval="2000">
                    <div class="card border-0 p-2 d-flex align-items-center justify-content-center" style="{{ $lebarCardMitra }}" >
                        <img src="{{ asset("/assets/img/logo-huawei.png") }}" class="card-img-top" alt="logo-huawei">
                    </div>
                </li>

                <li class="splide__slide d-flex justify-content-center" data-splide-interval="2000">
                    <div class="card border-0 p-2 d-flex align-items-center justify-content-center" style="{{ $lebarCardMitra }}" >
                        <img src="{{ asset("/assets/img/logo-apple.png") }}" class="card-img-top" alt="logo-huawei">
                    </div>
                </li>

                <li class="splide__slide d-flex justify-content-center" data-splide-interval="2000">
                    <div class="card border-0 p-2 d-flex align-items-center justify-content-center" style="{{ $lebarCardMitra }}" >
                        <img src="{{ asset("/assets/img/logo-samsung.png") }}" class="card-img-top" alt="logo-huawei">
                    </div>
                </li>

                <li class="splide__slide d-flex justify-content-center" data-splide-interval="2000">
                    <div class="card border-0 p-2 d-flex align-items-center justify-content-center" style="{{ $lebarCardMitra }}" >
                        <img src="{{ asset("/assets/img/bank_mandiri.png") }}" class="card-img-top" alt="logo-huawei">
                    </div>
                </li>

                <li class="splide__slide d-flex justify-content-center" data-splide-interval="2000">
                    <div class="card border-0 p-2 d-flex align-items-center justify-content-center" style="{{ $lebarCardMitra }}" >
                        <img src="{{ asset("/assets/img/bank_jenius.png") }}" class="card-img-top" alt="logo-huawei">
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <div class="d-flex w-100 justify-content-center">
        <a href="{{ route('mitra.mitra') }}" class="btn btn-primary mt-5">See More</a>
    </div>
</section>

@php
    $lebarCard = 'width: 17rem;'
@endphp

<section id="testimoni" class="splide container bg-informasi-umum p-5" aria-label="Beautiful Images">
    <h1 class="text-center fw-bold mb-5">Testimoni</h1>

    <div class="splide__slider">
        <div class="splide__track">
            <ul class="splide__list">
                <li class="splide__slide d-flex justify-content-center" data-splide-interval="2000">
                    <div class="card" style="{{ $lebarCard }}" >
                        <div class="bg-primary bg-image-container card-img-top"></div>
                        <div class="d-flex justify-content-center">
                            <div class="image-container">
                                <img src="{{ asset("/assets/img/profil.jpg") }}" class="cropped-image" alt="foto-profil">
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Gabriel Hutagalung</h5>
                            <div id="tempat-pill" class="d-flex gap-1 mb-4">
                                <div class="pill d-inline text-muted">
                                    Alumni
                                </div>

                                <div class="pill d-inline text-muted">
                                    2021
                                </div>

                                <div class="pill d-inline text-muted">
                                    S1 Informatika
                                </div>
                            </div>
                            <p class="card-text fs-7">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium architecto atque eligendi enim fugiat iure quia, quo sunt tempora tempore.</p>
                        </div>
                    </div>
                </li>

                <li class="splide__slide d-flex justify-content-center" data-splide-interval="2000">
                    <div class="card" style="{{ $lebarCard }}" >
                        <div class="bg-primary bg-image-container card-img-top"></div>
                        <div class="d-flex justify-content-center">
                            <div class="image-container">
                                <img src="{{ asset("/assets/img/profil.jpg") }}" class="cropped-image" alt="foto-profil">
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Gabriel Hutagalung</h5>
                            <div id="tempat-pill" class="d-flex gap-1 mb-4">
                                <div class="pill d-inline text-muted">
                                    Alumni
                                </div>

                                <div class="pill d-inline text-muted">
                                    2021
                                </div>

                                <div class="pill d-inline text-muted">
                                    S1 Informatika
                                </div>
                            </div>
                            <p class="card-text fs-7">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium architecto atque eligendi enim fugiat iure quia, quo sunt tempora tempore.</p>
                        </div>
                    </div>
                </li>

                <li class="splide__slide d-flex justify-content-center" data-splide-interval="2000">
                    <div class="card" style="{{ $lebarCard }}" >
                        <div class="bg-primary bg-image-container card-img-top"></div>
                        <div class="d-flex justify-content-center">
                            <div class="image-container">
                                <img src="{{ asset("/assets/img/profil.jpg") }}" class="cropped-image" alt="foto-profil">
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Gabriel Hutagalung</h5>
                            <div id="tempat-pill" class="d-flex gap-1 mb-4">
                                <div class="pill d-inline text-muted">
                                    Alumni
                                </div>

                                <div class="pill d-inline text-muted">
                                    2021
                                </div>

                                <div class="pill d-inline text-muted">
                                    S1 Informatika
                                </div>
                            </div>
                            <p class="card-text fs-7">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium architecto atque eligendi enim fugiat iure quia, quo sunt tempora tempore.</p>
                        </div>
                    </div>
                </li>

                <li class="splide__slide d-flex justify-content-center" data-splide-interval="2000">
                    <div class="card" style="{{ $lebarCard }}" >
                        <div class="bg-primary bg-image-container card-img-top"></div>
                        <div class="d-flex justify-content-center">
                            <div class="image-container">
                                <img src="{{ asset("/assets/img/profil.jpg") }}" class="cropped-image" alt="foto-profil">
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Gabriel Hutagalung</h5>
                            <div id="tempat-pill" class="d-flex gap-1 mb-4">
                                <div class="pill d-inline text-muted">
                                    Alumni
                                </div>

                                <div class="pill d-inline text-muted">
                                    2021
                                </div>

                                <div class="pill d-inline text-muted">
                                    S1 Informatika
                                </div>
                            </div>
                            <p class="card-text fs-7">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium architecto atque eligendi enim fugiat iure quia, quo sunt tempora tempore.</p>
                        </div>
                    </div>
                </li>

                <li class="splide__slide d-flex justify-content-center" data-splide-interval="2000">
                    <div class="card" style="{{ $lebarCard }}" >
                        <div class="bg-primary bg-image-container card-img-top"></div>
                        <div class="d-flex justify-content-center">
                            <div class="image-container">
                                <img src="{{ asset("/assets/img/profil.jpg") }}" class="cropped-image" alt="foto-profil">
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Gabriel Hutagalung</h5>
                            <div id="tempat-pill" class="d-flex gap-1 mb-4">
                                <div class="pill d-inline text-muted">
                                    Alumni
                                </div>

                                <div class="pill d-inline text-muted">
                                    2021
                                </div>

                                <div class="pill d-inline text-muted">
                                    S1 Informatika
                                </div>
                            </div>
                            <p class="card-text fs-7">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium architecto atque eligendi enim fugiat iure quia, quo sunt tempora tempore.</p>
                        </div>
                    </div>
                </li>
            </ul>
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
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
<script>
    document.addEventListener( 'DOMContentLoaded', function () {
        new Splide( '#testimoni', {
            perPage    : 4,
            type    : 'loop',
            autoplay:true,
            breakpoints: {
                1400: {
                    perPage:3,
                },
                1020: {
                    perPage: 2,
                },
                768: {
                    perPage: 1,
                }
            },
        } ).mount();

        new Splide( '#mitra-kampus', {
            perPage : 5,
            autoplay: true,
            type    : 'loop',
            breakpoints: {
                1400: {
                    perPage:3,
                },
                1020: {
                    perPage: 2,
                },
                768: {
                    perPage: 1,
                }
            },
            arrows:false,
            pagination:false,
        } ).mount();
    } );
</script>
@endsection
