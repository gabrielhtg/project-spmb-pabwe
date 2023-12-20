<!-- Button trigger modal -->
<button type="button" class="btn btn-primary mt-3 mb-2 align-self-end" data-bs-toggle="modal"
        data-bs-target="#tambah_mitra_section_modal">
    Tambah Mitra
</button>

<!-- Modal -->
<div class="modal fade" id="tambah_mitra_section_modal" tabindex="-1"
     aria-labelledby="tambah_mitra_section_modal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5 fw-semibold">Tambah Mitra</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="post">
                @csrf
                <div class="modal-body">

                    <div class="mb-3">
                        <label for="input_nama_mitra" class="form-label">Nama Mitra</label>
                        <input type="text" class="form-control" id="input_nama_mitra"
                               name="input_nama_mitra">
                    </div>
                    <div class="mb-3">
                        <label for="input_logo" class="form-label">Logo Mitra</label>
                        <input type="text" class="form-control" id="input_logo"
                               name="input_logo">
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
