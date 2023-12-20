<!-- Button trigger modal -->
<button type="button" class="btn btn-primary mt-3 mb-2" data-bs-toggle="modal" data-bs-target="#add_biaya_pendaftaran">
    Tambah
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
                <form action="{{ route('addBiayaPendaftaran') }}" method="POST">
                    @csrf
                <div class="mb-3">
                    <label class="form-label">Jalur Pendaftaran</label>
                    <input type="text" class="form-control" name="jlr_Pen">
                </div>
                <div class="mb-3">
                    <label class="form-label">Jumlah Biaya</label>
                    <input type="text" class="form-control" name="biayaPen">
                </div>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </div>
            </form>
        </div>
    </div>
</div>
