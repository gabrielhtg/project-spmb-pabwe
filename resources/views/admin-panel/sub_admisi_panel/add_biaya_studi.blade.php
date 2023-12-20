<!-- Button trigger modal -->
<button type="button" class="btn btn-primary mt-3 mb-2" data-bs-toggle="modal" data-bs-target="#add_biaya_studi">
    Tambah Tombol (Max 3)
</button>

<!-- Modal -->
<div class="modal fade" id="add_biaya_studi" tabindex="-1" aria-labelledby="add_biaya_studi" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5">Tambah Data Biaya Studi</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="">
                <div class="mb-3">
                    <label for="inputbiayaprodi" class="form-label">Program Studi</label>
                    <input type="text" class="form-control" id="inputbiayaprodi" name="inputbiayaprodi">
                </div>
                <div class="mb-3">
                    <label for="inputbiayaspp" class="form-label">Biaya SPP (Rp)</label>
                    <input type="text" class="form-control" id="inputbiayaspp" name="inputbiayaspp">
                </div>
                <div class="mb-3">
                    <label for="inputuangpengembangan" class="form-label">Uang Pengembangan</label>
                    <input type="text" class="form-control" id="inputuangpengembangan" name="inputuangpengembangan">
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
