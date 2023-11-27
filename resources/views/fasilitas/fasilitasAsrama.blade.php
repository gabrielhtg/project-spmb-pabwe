@extends('template.fasilitas')

@section('isi-halaman')

    <section class="container" id="Asrama">
        <div class="text-center fw-bolder">
        <h1 class="display-5 fw-bold">Asrama</h1>
        </div>
        <div class="custom-justified-text align-items-center pt-3">
            <p>Sejak didirikan tahun 2001, IT Del sudah mengharuskan mahasiswanya untuk tinggal diasrama tanpa terkecuali.  
            Tujuannya adalah agar menunjang keberhasilan pencapaian tujuan pendidikan mahasiswanya. Asrama di IT Del juga merupakan sarana pendidikan dalam pembentukan karakter mahasiswanya.
            IT Del selalu berusaha menciptakan manusia yang tidak hanya pintar tapi juga yang MarTuhan, Maroha dan Marbisuk (Berketuhanan, Berperasaan dan Bijaksana).</p>
        </div>

        <div class="text-center pt-5 text-bolder">
            <h2>-Asrama Putra-</h2>
        </div>
        
        <div class="container pt-5" id="asrama-pniel">
            <div class="row">
                <div class="col-md-6">
                <img src="{{ asset('/assets/img/fasilitas/asrama-pniel.jpeg') }}" class="img-fluid custom-image" alt="asrama-pniel">
                </div>

                <div class="col-md-6 mx-auto d-flex flex-column my-auto">
                    <h3>Asrama Pniel</h3>
                    <div class="lh-base text-break text-justify custom-justified-text align-items-center">
                        <p>
                        is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap
                        </p>
                        <p>
                            <span class="fw-bold">Lokasi:</span> Institut Teknologi Del, Jl. Sisingamangaraja, Sitoluama, Laguboti, Toba Samosir, Sumatera Utara, Indonesia
                        </p>
                        <p>Pembina Asrama:
                            <ol>
                                <li>Irianto</li>
                                <li>Herman</li>
                            </ol>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container pt-5" id="asrama-jati">
            <div class="row">
                <div class="col-md-6">
                <img src="{{ asset('/assets/img/fasilitas/asrama-jati.jpeg') }}" class="img-fluid" alt="asrama-jati">
                </div>

                <div class="col-md-6 mx-auto d-flex flex-column my-auto">
                    <h3>Asrama Jati</h3>
                    <div class="lh-base text-break text-justify custom-justified-text align-items-center">
                        <p>
                        is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap
                        </p>
                        <p>
                            <span class="fw-bold">Lokasi:</span> Institut Teknologi Del, Jl. Sisingamangaraja, Sitoluama, Laguboti, Toba Samosir, Sumatera Utara, Indonesia
                        </p>
                        <p>Pembina Asrama:
                            <ol>
                                <li>Irianto</li>
                                <li>Herman</li>
                            </ol>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center pt-5 text-bolder">
            <h2>-Asrama Putri-</h2>
        </div>

        <div class="container pt-5" id="rusun-2">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ asset('/assets/img/fasilitas/rusun-2.jpeg') }}" class="img-fluid" alt="rusun-2">
                </div>

                <div class="col-md-6 mx-auto d-flex flex-column my-auto">
                    <h3>Rusun 2</h3>
                    <div class="lh-base text-break text-justify custom-justified-text align-items-center">
                        <p>
                        is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap
                        </p>
                        <p>
                            <span class="fw-bold">Lokasi:</span> Institut Teknologi Del, Jl. Sisingamangaraja, Sitoluama, Laguboti, Toba Samosir, Sumatera Utara, Indonesia
                        </p>
                        <p>Pembina Asrama:
                            <ol>
                                <li>Irianto</li>
                                <li>Herman</li>
                            </ol>
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </section>
</main>

@endsection
