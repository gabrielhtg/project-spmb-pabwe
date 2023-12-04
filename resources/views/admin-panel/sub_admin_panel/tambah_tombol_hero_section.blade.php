<!-- Button trigger modal -->
<button type="button" class="btn btn-primary mt-3 mb-2 align-self-end" data-bs-toggle="modal" data-bs-target="#tambah_tombol_hero_section_modal">
    Tambah Tombol (Max 3)
</button>

<!-- Modal -->
<div class="modal fade" id="tambah_tombol_hero_section_modal" tabindex="-1" aria-labelledby="tambah_tombol_hero_section_modal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5 fw-semibold">Tambah Tombol Hero Section</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="input_nama_button" class="form-label">Nama Tombol</label>
                    <input type="text" class="form-control" id="input_nama_button" name="input_nama_button">
                </div>
                <div class="mb-3">
                    <label for="input_link_button" class="form-label">Link Tombol</label>
                    <input type="text" class="form-control" id="input_link_button" name="input_link_button">
                    <span>
                        Cari disini <a href=""></a>
                    </span>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">Tambah</button>
            </div>
        </div>
    </div>
</div>
