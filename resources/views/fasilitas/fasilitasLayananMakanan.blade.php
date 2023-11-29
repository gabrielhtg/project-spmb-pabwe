@extends('template.fasilitas')

@section('isi-halaman')
    <section class="container" id="LayananMakanan">
        <div class="text-center fw-bolder">
        <h1 class="display-5 fw-bold">Layanan Makanan</h1>
        </div>
        <div class="custom-justified-text align-items-center pt-3">
            <p>Penyedia layanan makanan di kampus menyediakan beragam makanan dan minuman untuk mahasiswa dan staf kampus.
                Mereka dapat berupa kantin atau kafe fisik di area kampus atau menggunakan platform daring. Layanan ini
                bertujuan
                menyediakan pilihan makanan yang sehat dan bervariasi untuk memenuhi kebutuhan nutrisi komunitas kampus.
                Beberapa penyedia mungkin menekankan nilai-nilai berkelanjutan dengan penggunaan bahan organik atau
                pengemasan ramah lingkungan.</p>
        </div>

        <div class="container pt-5" id="asrama-pniel">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ asset('/assets/img/fasilitas/layanan-kantin .jpg') }}" class="img-fluid custom-image"
                        alt="layanan-kantin">
                </div>

                <div class="col-md-6 mx-auto d-flex flex-column my-auto">
                    <h3>Kantin</h3>
                    <div class="lh-base text-break text-justify custom-justified-text align-items-center">
                        <p>
                            Institut Teknologi Del memiliki beberapa kantin, diantaranya adalah:
                        <ol>
                            <li>Kantin Baru</li>
                            <ul>
                                <li> Kantin Baru lantai 1 atas</li>
                                <li> Kantin Baru lantai 1 bawah</li>
                                <li> Kantin Baru lantai 2 Atas</li>
                                <li> Kantin Baru lantai 2 bawah</li>
                                <li> Kantin Tengah Atas</li>
                                <li> Kantin Tengah Bawah</li>
                            </ul>
                            <li>Kantin Lama</li>
                            <ul>
                                <li> Kantin Lama lantai 1</li>
                                <li> Kantin Lama lantai2</li>
                            </ul>
                        </ol>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container pt-5" id="layanan-koperasi">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ asset('/assets/img/fasilitas/layanan-koperasi .jpg') }}" class="img-fluid"
                        alt="layanan-koperasi">
                </div>

                <div class="col-md-6 mx-auto d-flex flex-column my-auto">
                    <h3>Koperasi</h3>
                    <div class="lh-base text-break text-justify custom-justified-text align-items-center">
                        <p>
                            Koperasi Institut Teknologi Del adalah tempat untuk membeli kebutuhan-kebutuhan mahasiswa.
                            Koperasi menyediakan berbagai kebutuhan mahasiswa del baik itu kebutuhan belajar, kebutuhan
                            kesehatan, dan kebutuhan primer dari mahasiswa Institut Teknologi Del.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container pt-5" id="layanan-cafetaria">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ asset('/assets/img/fasilitas/layanan-cafetaria .jpg') }}" class="img-fluid"
                        alt="layanan-cafetaria">
                </div>

                <div class="col-md-6 mx-auto d-flex flex-column my-auto">
                    <h3>Cafetaria</h3>
                    <div class="lh-base text-break text-justify custom-justified-text align-items-center">
                        <p>
                            Kafetaria (atau dalam bahasa Inggris "cafeteria") adalah jenis restoran atau tempat makan yang
                            memiliki ciri khas tertentu dalam penyajian makanan. Ciri khas utamanya adalah bahwa makanan dan
                            minuman disajikan di berbagai meja atau loket yang tersusun di dalam ruangan, dan pelanggan
                            dapat memilih makanan mereka sendiri dari berbagai pilihan yang disajikan.
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </section>
    </main>
    <div id="chat-container" style="position: fixed; bottom: 20px; right: 20px; z-index: 1000;">
  <div id="chat-button" style="width: 80px; height: 80px; border-radius: 12px; background-color: #007bff; color: #fff; text-align: center; line-height: 50px; cursor: pointer; position: relative; overflow: hidden;" onclick="toggleChatForm()">
    <img src="{{ asset("/assets/img/icon.jpg") }}" style="width: 100%; height: 100%; object-fit: cover; position: absolute; top: 0; left: 0; transition: transform 0.3s ease-in-out;" class="d-block w-100" alt="gambar-1" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
  </div>
  <div id="chat-form" style="display: none; position: fixed; bottom: 20px; right: 80px; z-index: 1000; max-width: 300px; transition: all 0.3s ease-in-out;">
    <div id="additional-buttons" style="display: flex; justify-content: space-between; margin-top: 10px;">
      <div class="additional-button d-flex justify-content-center align-items-center" style="width: 60px; height: 60px; border-radius: 20%; background-color: rgb(11,94,215); color: #fff; text-align: center; line-height: 40px; cursor: pointer; margin-right: 25px; font-size: 25px;" onclick="openWhatsApp()" onmouseover="this.style.backgroundColor='#0056b3'" onmouseout="this.style.backgroundColor='rgb(11,94,215)'">
        <i class="fab fa-whatsapp"></i>
      </div>
      <div class="additional-button d-flex justify-content-center align-items-center" style="width: 60px; height: 60px; border-radius: 20%; background-color: rgb(11,94,215); color: #fff; text-align: center; line-height: 40px; cursor: pointer; margin-right: 25px; font-size: 25px;" onclick="openTelegram()" onmouseover="this.style.backgroundColor='#0056b3'" onmouseout="this.style.backgroundColor='rgb(11,94,215)'">
        <i class="fab fa-telegram"></i>
      </div>
      <div class="additional-button d-flex justify-content-center align-items-center" style="width: 60px; height: 60px; border-radius: 20%; background-color: rgb(11,94,215); color: #fff; text-align: center; line-height: 40px; cursor: pointer; margin-right: 25px; font-size: 25px;" onclick="openFormQuestion()" onmouseover="this.style.backgroundColor='#0056b3'" onmouseout="this.style.backgroundColor='rgb(11,94,215)'">
        <i class="fa-regular fa-comment-dots"></i>
      </div>
    </div>
  </div>
</div>
<script src="{{ asset("/assets/js/chatbot.js") }}"></script>
@endsection
