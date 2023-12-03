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

        @foreach($fasilitas as $item)
            @if($item->kategori == 'Layanan Makanan')
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
            @endif
        @endforeach

    </section>
    </main>

<div id="chat-container" style="position: fixed; bottom: 20px; right: 20px; z-index: 1000;">
  <div id="chat-button" style="width: 100px; height: 105px; border-radius: 0; color: #fff; text-align: center; line-height: 70px; cursor: pointer; position: relative; overflow: hidden; transition: transform 0.5s ease-in-out;" onclick="toggleChatForm()" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
    <img src="{{ asset("/assets/img/icon2.png") }}" style="width: 100%; height: 100%; object-fit: cover; position: absolute; top: 0; left: 0; transition: transform 0.5s ease-in-out;" class="d-block w-100" alt="gambar-1">
  </div>
  <div id="chat-form" style="display: none; position: fixed; bottom: 20px; right: 80px; z-index: 1000; max-width: 300px; transition: all 0.5s ease-in-out;">
    <div id="additional-buttons" style="display: flex; justify-content: space-between; margin-top: 10px;">
      <div class="additional-button d-flex justify-content-center align-items-center" style="width: 70px; height: 65px; border-radius: 50%; background-color: rgb(11,94,215); color: #fff; text-align: center; line-height: 50px; cursor: pointer; margin-right: 25px; font-size: 25px;" onclick="openWhatsApp()" onmouseover="this.style.backgroundColor='#0056b3'" onmouseout="this.style.backgroundColor='rgb(11,94,215)'">
        <i class="fab fa-whatsapp"></i>
      </div>
      <div class="additional-button d-flex justify-content-center align-items-center" style="width: 70px; height: 65px; border-radius: 50%; background-color: rgb(11,94,215); color: #fff; text-align: center; line-height: 50px; cursor: pointer; margin-right: 25px; font-size: 25px;" onclick="openTelegram()" onmouseover="this.style.backgroundColor='#0056b3'" onmouseout="this.style.backgroundColor='rgb(11,94,215)'">
        <i class="fab fa-telegram"></i>
      </div>
      <div class="additional-button d-flex justify-content-center align-items-center" style="width: 70px; height: 65px; border-radius: 50%; background-color: rgb(11,94,215); color: #fff; text-align: center; line-height: 50px; cursor: pointer; margin-right: 55px; font-size: 25px;" onclick="openFormQuestion()" onmouseover="this.style.backgroundColor='#0056b3'" onmouseout="this.style.backgroundColor='rgb(11,94,215)'">
        <i class="fa-regular fa-comment-dots"></i>
      </div>
    </div>
  </div>
</div>


<script src="{{ asset("/assets/js/chatbot.js") }}"></script>