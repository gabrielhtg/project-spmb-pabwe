<div id="item-4" class="card shadow-sm">
  <div class="card-header bg-primary text-white">
      <span class="fs-5">Beranda FAQ</span>
  </div>

  <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Ubah Data</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('post.faq.edit') }}" enctype="multipart/form-data">
                        @csrf

                        <input type="hidden" name="faq_id" value="{{ $faq->id }}">

                        <div class="form-group mb-2">
                            <label for="kategori">Kategori</label>
                            <input id="kategori" type="text" value= "{{$faq->kategori}}" class="form-control @error('kategori') is-invalid @enderror" name="kategori" required>
                            @error('kategori')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group mb-2">
                          <label for="pertanyaan">Pertanyaan</label>
                          <input id="pertanyaan" type="text" value="{{$faq->pertanyaan}}" class="form-control @error('pertanyaan') is-invalid @enderror" name="pertanyaan" required>
                          @error('pertanyaan')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                      </div>

                      <div class="form-group mb-2">
                        <label for="jawaban">Jawaban</label>
                        <input id="jawaban" type="text" value="{{$faq->jawaban}}" class="form-control @error('jawaban') is-invalid @enderror" name="jawaban" required>
                        @error('jawaban')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>


                        <div class="text-end">
                            <button type="submit" class="btn btn-primary">
                                Simpan
                            </button>
                        </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</div>