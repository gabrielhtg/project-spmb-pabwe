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

        <div class="container pt-5" id="lab-fti">
            <div class="row">
                <div class="col-md-6">
                <img src="{{ asset('/assets/img/fasilitas/lab-fti.jpg') }}" class="img-fluid" alt="lab-fti">
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

        <div class="container pt-5" id="lab-fb">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ asset('/assets/img/fasilitas/lab-fb.jpg') }}" class="img-fluid" alt="lab-fb">
                </div>

                <div class="col-md-6 mx-auto d-flex flex-column my-auto">
                    <h3>Laboratorium FB</h3>
                    <div class="lh-base text-break text-justify custom-justified-text align-items-center">
                        <p>
                          Laboratorium FB menyediakan peralatan berupa alat-alat dan bahan-bahan yang akan membantu mahasiswa/i 
                          FB dalam melakukan experimen yang dibutuhkan dalam proses perkuliahan. Dengan laboratorium ini juga, 
                          mahasiswa dapat melakukan pelatihan mandiri untuk mengerjakan proyek yang memerlukan experimen pada laboratorium.
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </section>

@endsection