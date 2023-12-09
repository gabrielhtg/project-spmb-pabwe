<button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#add_lokasi">Tambah Lokasi Tes</button>

<!-- Modal -->
<form method="POST"
    action="{{ route('post.lokasi') }}">
    @csrf
    <div class="modal fade" id="add_lokasi" tabindex="-1" aria-labelledby="add_lokasi" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5">Tambah Lokasi Tes</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="">
                    <div class="mb-3">
                        <label for="lokasiTes" class="form-label">Tempat</label>
                        <input type="text" class="form-control" id="lokasiTes" name="lokasiTes">
                    </div>
                    <div class="mb-3">
                        <label for="alamatLokasi" class="form-label">Alamat</label>
                        <input type="text" class="form-control" id="alamatLokasi" name="alamatLokasi">
                    </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
            </div>
        </div>
    </div>
</form>