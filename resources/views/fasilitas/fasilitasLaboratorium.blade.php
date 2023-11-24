@extends('template.fasilitas')

@section('isi-halaman')

<section class="container" id="Laboratorium">
        <div class="text-center fw-bolder">
            <h1>Laboratorium</h1>
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
                <img src="{{ asset('/assets/img/fasilitas/lab-komputer2.jpg') }}" class="img-fluid custom-image" alt="lab-fite">
                </div>

                <div class="col-md-6 mx-auto d-flex flex-column my-auto">
                    <h3>Laboratorium FITE</h3>
                    <div class="lh-base text-break text-justify custom-justified-text align-items-center">
                        <p>
                          Laboratorium FITE menyediakan laboratorium komputer sebagai tempat untuk mendukung proses belajar 
                          mahasiswa/i FITE. Tersedia kelengkapan berupa komputer dengan komponen-komponennya baik itu mouse, CPU, 
                          keyboard dan juga kabel LAN.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container pt-5" id="lab-mr">
            <div class="row">
                <div class="col-md-6">
                <img src="{{ asset('/assets/img/fasilitas/lab-mr.jpg') }}" class="img-fluid" alt="lab-mr">
                </div>

                <div class="col-md-6 mx-auto d-flex flex-column my-auto">
                    <h3>Laboratorium FTI</h3>
                    <div class="lh-base text-break text-justify custom-justified-text align-items-center">
                        <p>
                          Laboratorium FTI menyediakan peralatan berupa 3D print yang akan membantu mahasiswa/i dalam proses 
                          perkuliahan dan juga membantu mahasiswa/i dalam mendalami bagaimana proses manufaktur. Selain itu 
                          ruangan ini juga dapat digunakan dalam melakukan presentasi proyek yang sudah dikerjakan. 
                        </p>
                    </div>
                </div>
            </div>
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

@endsection