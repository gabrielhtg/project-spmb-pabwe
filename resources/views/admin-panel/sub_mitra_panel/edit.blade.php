<link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
<link rel="stylesheet" href="assets/vendor/bootstrap-5.2.3-dist/css/bootstrap.min.css" />
<link rel="shortcut icon" href="img/title_logo.png" type="image/x-icon">
<link href="https://maxcdn.bootstrapcdn.com/bootsrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Ubah Data Mitra</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('editMitra') }}" enctype="multipart/form-data">
                        @csrf

                        <input type="hidden" name="id" value="{{ $mitra->id }}">

                        <div class="form-group mb-2">
                            <label for="nama">Nama</label>
                            <input id="nama" type="text" value="{{ $mitra->nama }}"
                                class="form-control @error('nama') is-invalid @enderror" name="nama" required>
                            @error('nama')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group mb-2">
                            <img src="{{ asset($mitra->logo) }}" style="height:120px;" alt="Portfolio">
                            <label for="logo">Upload Logo</label>
                            <input id="logo" type="file"
                                class="form-control @error('input_logo') is-invalid @enderror" name="input_logo"
                                required>
                            @error('input_logo')
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
</body>

</html>
