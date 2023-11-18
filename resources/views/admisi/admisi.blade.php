@extends("template.app")

@section("isi-halaman")

<main class="container">
    <div class="bg-primary w-100">
        <h1 class="pt-6 text-white ms-5 pb-5">Admisi</h1>
    </div>

    <div>
        <div class="gambar d-flex justify-content-center align-items-center mt-5" >
            <h1>Tempat gambar</h1>
        </div>

        <div class="w-100 d-flex justify-content-end gap-3">
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
                    <a href="#">Lihat Selengkapnya...</a>
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
                    <a href="#">Lihat Selengkapnya...</a>
                </div>
            </div>

            <div class="w-100 d-flex align-items-center justify-content-center">
                <div class="w-50">
                    <h1>Diploma 3</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis corporis dicta dolore dolores eveniet exercitationem illo iste laborum nobis non nostrum, optio, porro quas sit tempore unde veniam veritatis vero. Aliquam architecto dolorum laboriosam, molestiae natus obcaecati quaerat quam totam?</p>
                    <a href="#">Lihat Selengkapnya...</a>
                </div>
                <div class="w-50 d-flex justify-content-end">
                    <div class="gambar d-flex justify-content-center align-items-center" >
                        <h1>Tempat gambar</h1>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>




@endsection
