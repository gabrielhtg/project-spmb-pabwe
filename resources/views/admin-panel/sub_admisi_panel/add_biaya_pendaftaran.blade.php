<!-- Button trigger modal -->
<button type="button" class="btn btn-primary mt-3 mb-2" data-bs-toggle="modal" data-bs-target="#add_biaya_pendaftaran">
    Tambah Tombol (Max 3)
</button>

<!-- Modal -->
<div class="modal fade" id="add_biaya_pendaftaran" tabindex="-1" aria-labelledby="add_biaya_pendaftaran" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5">Tambah Data Biaya Pendaftaran</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="">
                <div class="mb-3">
                    <label for="inputBiayajalur" class="form-label">Jalur Pendaftaran</label>
                    <input type="text" class="form-control" id="inputBiayajalur" name="inputBiayajalur">
                </div>
                <div class="mb-3">
                    <label for="inputJumlahJaur" class="form-label">Jumlah Biaya</label>
                    <input type="text" class="form-control" id="inputJumlahJalur" name="inputJumlahJalur">
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
