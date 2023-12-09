<button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#add_lokasi">Tambah Lokasi Tes</button>

<!-- Modal -->
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
                    <label for="inputBiayajalur" class="form-label">Tempat</label>
                    <input type="text" class="form-control" id="tempat" name="tempat">
                </div>
                <div class="mb-3">
                    <label for="inputJumlahJaur" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat">
                </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">Tambah</button>
            </div>
        </div>
    </div>
</div>