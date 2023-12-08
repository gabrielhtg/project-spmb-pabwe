    <section class="container" id="Asrama">
        <div class="text-center fw-bolder">
        <h1 class="display-5 fw-bold">Asrama</h1>
        </div>
        <div class="custom-justified-text align-items-center pt-3">
            <p>Sejak didirikan tahun 2001, IT Del sudah mengharuskan mahasiswanya untuk tinggal diasrama tanpa terkecuali.  
            Tujuannya adalah agar menunjang keberhasilan pencapaian tujuan pendidikan mahasiswanya. Asrama di IT Del juga merupakan sarana pendidikan dalam pembentukan karakter mahasiswanya.
            IT Del selalu berusaha menciptakan manusia yang tidak hanya pintar tapi juga yang MarTuhan, Maroha dan Marbisuk (Berketuhanan, Berperasaan dan Bijaksana).</p>
        </div>
        
        @foreach($fasilitas as $item)
            @if($item->kategori === 'Asrama')
                <div class="container pt-5" id="asrama-pniel">
                    <div class="row">
                        <div class="col-md-6">
                        <img src="{{ asset('/assets/img/fasilitas/' . $item->file_gambar) }}" class="img-fluid custom-image" alt="{{$item->nama_file}}">
                        </div>
                        <div class="col-md-6 mx-auto d-flex flex-column my-auto">
                            <h3>{{$item->nama_fasilitas}}</h3>
                            <div class="lh-base text-break text-justify custom-justified-text align-items-center">
                                {!! $item->deskripsi_fasilitas !!}
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach


    </section>
</main>