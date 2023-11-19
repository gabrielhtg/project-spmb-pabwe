@extends("template.app")

@section("isi-halaman")

    <div class="bg-primary w-100 container">
        <h1 class="pt-6 text-white ms-5 pb-5">Sarjana</h1>
    </div>

    <div class="container d-flex gap-5 bg-body-tertiary p-3 align-items-center justify-content-center">
        <div class="d-flex w-100">
            <div class="d-flex flex-column w-100 align-items-center">
                <div class="d-flex justify-content-center gap-5 mt-2">
                    <div class="d-flex flex-column justify-content-center gap-1">
                        <button id="btn-persyaratan-khusus" class="border-0 bg-body-tertiary" onclick="tampilkanGarisPersyaratan()">
                            <span class="fw-bold fs-5">Persyaratan Khusus</span>
                        </button>

                        <div id="garis-persyaratan-khusus" class="persyaratan-khusus-line"></div>
                    </div>

                    <div class="d-flex flex-column justify-content-center gap-1">
                        <button id="btn-biaya-studi" class="border-0 bg-body-tertiary" onclick="tampilkanGarisBiaya()">
                            <span class="fw-bold fs-5" href="">Biaya Studi</span>
                        </button>

                        <div id="garis-biaya-studi" class="bg-body-tertiary biaya-studi-line"></div>
                    </div>
                </div>
            </div>

            <div>
                <button class="btn btn-primary ms-auto">Daftar</button>
            </div>
        </div>
    </div>

    <section class="container text-center mt-5">
        <h3>Persyaratan Program Studi Tertentu</h3>

        <div class="mt-5 d-flex justify-content-center">
            <div class="border-1 border d-flex rounded-2" style="width: 18rem">
                <div class="bg-body-tertiary rounded-start-2" style="width: 6rem; height: 200px"></div>
                <div class="d-flex justify-content-center align-items-center">
                    Informatika
                </div>
            </div>
        </div>

    </section>

@endsection

