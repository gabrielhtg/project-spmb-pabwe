@extends('template.fasilitas')

@section('isi-halaman')

<section class="container" id="areamahasiswa">
  
  <div class="text-center fw bolder">
    <h1>Area Mahasiswa</h1>
  </div>
  <div class="costum-justified-text align items-center pt-3">
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi quae quibusdam nemo a corrupti, amet maxime earum esse sint animi? Minus accusantium magnam deleniti reprehenderit, iure voluptates quod commodi vitae.</p>
  </div>

  <div class="container pt-5" id="asrama-pniel">
            <div class="row">
                <div class="col-md-6">
                <img src="{{ asset('/assets/img/fasilitas/asrama-pniel.jpeg') }}" class="img-fluid custom-image" alt="asrama-pniel">
                </div>

                <div class="col-md-6 mx-auto d-flex flex-column my-auto">
                    <h3>Ruangan Kelas</h3>
                    <div class="lh-base text-break text-justify custom-justified-text align-items-center">
                        <p>
                        Institut Teknologi Del menyediakan ruangan kelas sebagai sarana utama belajar bagi mahasiswa. IT Del menyediakan smart classroom untuk mendukung kegiatan belajar mengajar mahasiswa. Ruang Kelas juga disediakan Idea Hub dan proyektor sebagai alat pendukung pembelajaran.
                        </p>
                    </div>
                </div>
            </div>
        </div>

</section>
@endsection