<div class="tab-pane fade show active mb-5" id="pmdk-tab-pane" role="tabpanel" aria-labelledby="pmdk-tab"
     tabindex="0">
    <div class="d-flex justify-content-center mt-5 ">
        <div id="carouselExampleIndicatorsPmdk" class="carousel carousel-dark slide border border-1" data-bs-ride="carousel" style="width: 60%">
{{--            <div class="carousel-indicators">--}}
{{--                <button type="button" data-bs-target="#carouselExampleIndicatorsPmdk" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>--}}
{{--                <button type="button" data-bs-target="#carouselExampleIndicatorsPmdk" data-bs-slide-to="1" aria-label="Slide 2"></button>--}}
{{--                <button type="button" data-bs-target="#carouselExampleIndicatorsPmdk" data-bs-slide-to="2" aria-label="Slide 3"></button>--}}
{{--            </div>--}}
            <div class="carousel-inner">
                @php
                $i = 0;
                @endphp
                @foreach($dataInfografis[0] as $e)
                    @if($i == 0)
                        <div class="carousel-item active">
                            <img src="{{asset($e->gambar)}}" class="d-block w-100" alt="gambar">
                        </div>
                    @else
                        <div class="carousel-item">
                            <img src="{{asset($e->gambar)}}" class="d-block w-100" alt="gambar">
                        </div>
                    @endif
                        @php
                            $i++;
                        @endphp
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicatorsPmdk" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicatorsPmdk" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <div class="d-flex pt-5 flex-column align-items-center">
        <div style="width: 100%" class="justify-content-center d-flex gap-5 mt-5 mb-5 button-1">
            <a href="{{ route('download-pedoman') }}">Download Pedoman Pendaftaran</a>
        </div>

        <div class="w-100">
            <h3 class="pb-3 fw-semibold">Persyaratan Umum</h3>

            <ol>
                <li>
                    Mengisi Formulir Pendaftaran PMDK 2023/2024.
                </li>

                <li>
                    Melampirkan Surat Rekomendasi dari Kepala Sekolah atau yang mewakili.
                </li>

                <li>
                    Melampirkan scan rapor kelas X s.d XII sampai semester V.
                </li>

                <li>
                    Melampirkan sertifikat/piagam penghargaan akademis dan non akademis (jika ada).
                </li>

                <li>
                    Siswa berasal dari jurusan yang tidak termasuk dalam kelompok Ilmu sosial, Budaya atau
                    Bahasa.
                </li>

                <li>
                    Usia <strong>maksimum 21 tahun</strong> per 31 Agustus 2023.
                </li>

                <li>
                    Memiliki Nilai Matematika, dan Fisika minimal 80.00, serta Bahasa Inggris minimal 70.00,
                    pada setiap semester, <strong>ATAU</strong> ranking <strong><=5</strong> setiap
                    semester, kecuali untuk jenjang DIV dan DIII, ranking <strong><= 10</strong>.
                </li>

                <li>
                    Dapat memilih maksimal 3 pilihan program studi, dari 8 program studi yang ada di IT Del
                    yakni :

                    <br> <br>
                    <ul>
                        <li>
                            <strong>Fakultas Vokasi [FV], Program Studi:</strong>
                            <ol>
                                <li>
                                    Teknologi Informasi (D3)
                                </li>

                                <li>
                                    Teknologi Komputer (D3)
                                </li>

                                <li>
                                    Teknologi Rekayasa Perangkat Lunak (D4)
                                </li>
                            </ol>
                        </li>
                    </ul>

                    <br>

                    <ul>
                        <li>
                            <strong>Fakultas Informatika & Teknik Elektro [FITE], Program Studi:</strong>
                            <ol>
                                <li>
                                    Informatika (S1)
                                </li>

                                <li>
                                    Teknik Elektro (S1)
                                </li>

                                <li>
                                    Sistem Informasi (S1)
                                </li>
                            </ol>
                        </li>
                    </ul>

                    <br>

                    <ul>
                        <li>
                            <strong>Fakultas Teknologi Industri [FTI], Program Studi:</strong>
                            <ol>
                                <li>
                                    Manajemen Rekayasa (S1)
                                </li>

                                <li>
                                    Teknik Metalurgi (S1)
                                </li>
                            </ol>
                        </li>
                    </ul>

                    <br>
                    <ul>
                        <li>
                            <strong>Fakultas Bioteknologi [FB], Program Studi:</strong>
                            <ol>
                                <li>
                                    Teknik Bioproses (S1)
                                </li>
                            </ol>
                        </li>
                    </ul>
                </li>
            </ol>
        </div>


    </div>
</div>

