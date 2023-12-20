@extends('template.app')

@section('isi-halaman')
    <section>
        <div class="masthead"
            style="background-size: cover; min-height: 75vh; position: relative; color: #ffff; text-shadow: 2px 2px 2px rgba(0, 0, 0, 0.2); background-image: url('{{ asset('assets/img/faq-bg.png') }}');">
            <div class="color-overlay d-flex justify-content-center align-items-center">
                <h2 class="faq-text" style="height: 90px">FAQ</h2>
            </div>
        </div>

        <div class="container mt-4">
            <ul class="nav nav-tabs mb-5" id="myTabs">
                <li class="nav-item">
                    <a class="nav-link active fw-bold text-black" id="tab1" data-bs-toggle="tab"
                        href="#content1">Umum</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bold text-black" id="tab2" data-bs-toggle="tab" href="#content2">Persyaratan
                        Pendaftaran</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bold text-black" id="tab3" data-bs-toggle="tab" href="#content3">Jalur
                        Seleksi</a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link fw-bold text-black" id="tab4" data-bs-toggle="tab" href="#content4">Ujian</a>
                </li> --}}
                <li class="nav-item">
                    <a class="nav-link fw-bold text-black" id="tab5" data-bs-toggle="tab"
                        href="#content5">Pengumuman</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bold text-black" id="tab6" data-bs-toggle="tab"
                        href="#content6">Registrasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bold text-black" id="tab7" data-bs-toggle="tab" href="#content7">Beasiswa</a>
                </li>
            </ul>

            <div class="tab-content mt-2">
                <div class="tab-pane fade show active" id="content1">
                    <div class="accordion" id="accordion1">
                        <div class="accordion accordion-flush" id="accordionFlush1">

                            @foreach ($faq as $item)
                                @if ($item->kategori === 'Umum')
                                    <div class="accordion-item mb-3">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed fw-bold text-white" type="button"
                                                data-bs-toggle="collapse"
                                                data-bs-target="#flush-collapse{{ $item->id }}" aria-expanded="false"
                                                aria-controls="flush-collapse{{ $item->id }}"
                                                style="background-color: #0477BF;">
                                                {{ $item->pertanyaan }}
                                            </button>
                                        </h2>
                                        <div id="flush-collapse{{ $item->id }}" class="accordion-collapse collapse"
                                            data-bs-parent="#accordionFlush1">
                                            <div class="accordion-body">{{ $item->jawaban }}</div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>


            <div class="tab-content mt-2">
                <div class="tab-pane fade" id="content2">
                    <div class="accordion" id="accordion2">
                        <div class="accordion accordion-flush" id="accordionFlush2">

                            @foreach ($faq as $item)
                                @if ($item->kategori === 'Persyaratan Pendaftaran')
                                    <div class="accordion-item mb-3">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed fw-bold text-white" type="button"
                                                data-bs-toggle="collapse"
                                                data-bs-target="#flush-collapse{{ $item->id }}" aria-expanded="false"
                                                aria-controls="flush-collapse{{ $item->id }}"
                                                style="background-color: #0477BF;">
                                                {{ $item->pertanyaan }}
                                            </button>
                                        </h2>
                                        <div id="flush-collapse{{ $item->id }}" class="accordion-collapse collapse"
                                            data-bs-parent="#accordionFlush2">
                                            <div class="accordion-body">
                                                {{ $item->jawaban }}
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>


            <div class="tab-content mt-2">
                <div class="tab-pane fade" id="content3">
                    <div class="accordion" id="accordion3">
                        <div class="accordion accordion-flush" id="accordionFlush3">

                            @foreach ($faq as $item)
                                @if ($item->kategori === 'Jalur Seleksi')
                                    <div class="accordion-item mb-3">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed fw-bold text-white" type="button"
                                                data-bs-toggle="collapse"
                                                data-bs-target="#flush-collapse{{ $item->id }}" aria-expanded="false"
                                                aria-controls="flush-collapse{{ $item->id }}"
                                                style="background-color: #0477BF;">
                                                {{ $item->pertanyaan }}
                                            </button>
                                        </h2>
                                        <div id="flush-collapse{{ $item->id }}" class="accordion-collapse collapse"
                                            data-bs-parent="#accordionFlush3">
                                            <div class="accordion-body">
                                                {{ $item->jawaban }}
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>


            {{-- <div class="tab-content mt-2">
                <div class="tab-pane fade" id="content4">
                    <div class="accordion" id="accordion4">
                        <div class="accordion accordion-flush" id="accordionFlush4">

                            @foreach ($faq as $item)
                                @if ($item->kategori === 'Ujian')
                                    <div class="accordion-item mb-3">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed fw-bold text-white" type="button"
                                                data-bs-toggle="collapse"
                                                data-bs-target="#flush-collapse{{ $item->id }}" aria-expanded="false"
                                                aria-controls="flush-collapse{{ $item->id }}"
                                                style="background-color: #0477BF;">
                                                {{ $item->pertanyaan }}
                                            </button>
                                        </h2>
                                        <div id="flush-collapse{{ $item->id }}" class="accordion-collapse collapse"
                                            data-bs-parent="#accordionFlush4">
                                            <div class="accordion-body">
                                                {{ $item->jawaban }}
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div> --}}


            <div class="tab-content mt-2">
                <div class="tab-pane fade" id="content5">
                    <div class="accordion" id="accordion5">
                        <div class="accordion accordion-flush" id="accordionFlush5">

                            @foreach ($faq as $item)
                                @if ($item->kategori === 'Pengumuman')
                                    <div class="accordion-item mb-3">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed fw-bold text-white" type="button"
                                                data-bs-toggle="collapse"
                                                data-bs-target="#flush-collapse{{ $item->id }}" aria-expanded="false"
                                                aria-controls="flush-collapse{{ $item->id }}"
                                                style="background-color: #0477BF;">
                                                {{ $item->pertanyaan }}
                                            </button>
                                        </h2>
                                        <div id="flush-collapse{{ $item->id }}" class="accordion-collapse collapse"
                                            data-bs-parent="#accordionFlush5">
                                            <div class="accordion-body">{{ $item->jawaban }}</div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>


            <div class="tab-content mt-2">
                <div class="tab-pane fade" id="content6">
                    <div class="accordion" id="accordion6">
                        <div class="accordion accordion-flush" id="accordionFlush6">

                            @foreach ($faq as $item)
                                @if ($item->kategori === 'Registrasi')
                                    <div class="accordion-item mb-3">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed fw-bold text-white" type="button"
                                                data-bs-toggle="collapse"
                                                data-bs-target="#flush-collapse{{ $item->id }}" aria-expanded="false"
                                                aria-controls="flush-collapse{{ $item->id }}"
                                                style="background-color: #0477BF;">
                                                {{ $item->pertanyaan }}
                                            </button>
                                        </h2>
                                        <div id="flush-collapse{{ $item->id }}" class="accordion-collapse collapse"
                                            data-bs-parent="#accordionFlush6">
                                            <div class="accordion-body">
                                                {{ $item->jawaban }}
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>


            <div class="tab-content mt-2">
                <div class="tab-pane fade" id="content7">
                    <div class="accordion" id="accordion7">
                        <div class="accordion accordion-flush" id="accordionFlush7">
                            @foreach ($faq as $item)
                                @if ($item->kategori === 'Beasiswa')
                                    <div class="accordion-item mb-3">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed fw-bold text-white" type="button"
                                                data-bs-toggle="collapse"
                                                data-bs-target="#flush-collapse{{ $item->id }}" aria-expanded="false"
                                                aria-controls="flush-collapse{{ $item->id }}"
                                                style="background-color: #0477BF;">
                                                {{ $item->pertanyaan }}
                                            </button>
                                        </h2>
                                        <div id="flush-collapse{{ $item->id }}" class="accordion-collapse collapse"
                                            data-bs-parent="#accordionFlush7">
                                            <div class="accordion-body">
                                                {{ $item->jawaban }}
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

        </div>
        </div>


        <script src="/assets/vendor/bootstrap-5.2.3-dist/js/bootstrap.bundle.min.js"></script>
    </section>
@endsection
