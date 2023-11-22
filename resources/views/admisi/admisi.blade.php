@extends("template.app")

@section("isi-halaman")

    <div class="container">
        <div class="bg-primary w-100">
            <h1 class="pt-6 text-white ms-5 pb-5">Admisi</h1>
        </div>

        <div>
            <div class="d-flex flex-column align-items-center mt-4 justify-content-center">
                <div class="card-admisi shadow-lg p-4 rounded-4">
                    <ul class="nav nav-pills nav-fill" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Jadwal Pendaftaran</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Jadwal Ujian</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Jenis Test</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="disabled-tab" data-bs-toggle="tab" data-bs-target="#disabled-tab-pane" type="button" role="tab" aria-controls="disabled-tab-pane" aria-selected="false">Lokasi</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane ps-5 pe-5 fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                            <table class="table mt-5">
                                <tbody>
                                <tr>
                                    <td>PMDK</td>
                                    <td>05 DESEMBER 2022 - 15 JANUARI 2023</td>
                                </tr>
                                <tr>
                                    <td>USM 1</td>
                                    <td>16 JANUARI 2023 - 12 FEBRUARI 2023</td>
                                </tr>
                                <tr>
                                    <td>USM 2</td>
                                    <td>13 FEBRUARI 2023 - 31 MARET 2023</td>
                                </tr>
                                <tr>
                                    <td>USM 3</td>
                                    <td>1 APRIL 2023 - 2 JUNI 2023</td>
                                </tr>
                                <tr>
                                    <td>UTBK</td>
                                    <td>29 MEI 2023 - 9 JULI 2023</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">...</div>
                        <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">...</div>
                        <div class="tab-pane fade" id="disabled-tab-pane" role="tabpanel" aria-labelledby="disabled-tab" tabindex="0">...</div>
                    </div>
                </div>
            </div>


            <div class="d-flex w-100 justify-content-center gap-3 pt-4">
                <button class="tombol-admisi"><strong>PMDK</strong></button>
                <button class="tombol-admisi"><strong>USM</strong></button>
                <button class="tombol-admisi"><strong>UTBK</strong></button>
            </div>

            <hr>

            <section id="jenjang-pendidikan" class="d-flex justify-content-center align-items-center gap-5 flex-column mt-5">
                <div class="w-100 d-flex align-items-center justify-content-center">
                    <div class="w-50">
                        <h1>Sarjana</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis corporis dicta dolore dolores eveniet exercitationem illo iste laborum nobis non nostrum, optio, porro quas sit tempore unde veniam veritatis vero. Aliquam architecto dolorum laboriosam, molestiae natus obcaecati quaerat quam totam?</p>
                        <a href="/admisi/sarjana">Lihat Selengkapnya...</a>
                    </div>
                    <div class="w-50 d-flex justify-content-end">
                        <div class="gambar d-flex justify-content-center align-items-center" >
                            <h1>Tempat gambar</h1>
                        </div>
                    </div>
                </div>

                <div class="w-100 d-flex align-items-center justify-content-center">
                    <div class="w-50 d-flex justify-content-start">
                        <div class="gambar d-flex justify-content-center align-items-center" >
                            <h1>Tempat gambar</h1>
                        </div>
                    </div>

                    <div class="w-50">
                        <h1>Sarjana Terapan</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis corporis dicta dolore dolores eveniet exercitationem illo iste laborum nobis non nostrum, optio, porro quas sit tempore unde veniam veritatis vero. Aliquam architecto dolorum laboriosam, molestiae natus obcaecati quaerat quam totam?</p>
                        <a href="/admisi/sarjanaterapan">Lihat Selengkapnya...</a>
                    </div>
                </div>

                <div class="w-100 d-flex align-items-center justify-content-center mb-5">
                    <div class="w-50">
                        <h1>Diploma 3</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis corporis dicta dolore dolores eveniet exercitationem illo iste laborum nobis non nostrum, optio, porro quas sit tempore unde veniam veritatis vero. Aliquam architecto dolorum laboriosam, molestiae natus obcaecati quaerat quam totam?</p>
                        <a href="/admisi/diploma">Lihat Selengkapnya...</a>
                    </div>
                    <div class="w-50 d-flex justify-content-end">
                        <div class="gambar d-flex justify-content-center align-items-center" >
                            <h1>Tempat gambar</h1>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>


@endsection
