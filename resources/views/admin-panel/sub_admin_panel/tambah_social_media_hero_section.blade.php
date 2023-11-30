<!-- Button trigger modal -->
<button type="button" class="btn btn-primary mt-3 mb-2 align-self-end" data-bs-toggle="modal" data-bs-target="#tambah_tombol_hero_section_modal">
    Tambah Social Media (Max 5)
</button>

<!-- Modal -->
<div class="modal fade" id="tambah_tombol_hero_section_modal" tabindex="-1" aria-labelledby="tambah_tombol_hero_section_modal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5 fw-semibold">Tambah Social Media</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <div class="mb-3">
                    <label for="input_nama_social_media" class="form-label">Nama Social Media</label>
                    <input type="text" class="form-control" id="input_nama_social_media" name="input_nama_social_media">
                </div>
                <div class="mb-3">
                    <label for="input_link_social_media" class="form-label">Link Social Media</label>
                    <input type="text" class="form-control" id="input_link_social_media" name="input_link_social_media">
                </div>
                <div class="mb-3">
                    <label for="input_logo_social_media" class="form-label">Logo Social Media</label>
                    <input type="text" class="form-control" id="input_logo_social_media" name="input_logo_social_media">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">Tambah</button>
            </div>
        </div>
    </div>
</div>
