<button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#add_jenis_test">Tambah Jenis Test</button>

<!-- Modal -->
<div class="modal fade" id="add_jenis_test" tabindex="-1" aria-labelledby="add_jenis_test" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5">Tambah Jenis Tes</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="">
                <div class="mb-3">
                    <label for="inputBiayajalur" class="form-label">Gelombang</label>
                    <select class="form-select" id="gelombang" name="gelombang">
                        <option value="PMDK">PMDK</option>
                        <option value="USM 1">USM 1</option>
                        <option value="USM 2">USM 2</option>
                        <option value="USM 3">USM 3</option>
                        <option value="USM 4">USM 4</option>
                        <option value="UTBK">UTBK</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="inputJumlahJaur" class="form-label">Jenis Tes</label>
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