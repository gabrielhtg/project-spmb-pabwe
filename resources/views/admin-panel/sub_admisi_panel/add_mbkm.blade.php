<!-- Button trigger modal -->
<button type="button" class="btn btn-primary mt-3 mb-2" data-bs-toggle="modal" data-bs-target="#add_mbkm">
    Tambah Tombol (Max 3)
</button>

<!-- Modal -->
<div class="modal fade" id="add_mbkm" tabindex="-1" aria-labelledby="add_mbkm" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5">Tambah Data Pembiayaan MBKM Non-Kompetisi</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="">
                <div class="mb-3">
                    <label for="input_nama_button" class="form-label">Jumlah SKS</label>
                    <input type="text" class="form-control" id="input_nama_button" name="input_nama_button">
                </div>
                <div class="mb-3">
                    <label for="input_link_button" class="form-label">Potongan SPP(%)</label>
                    <input type="text" class="form-control" id="input_link_button" name="input_link_button">
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
