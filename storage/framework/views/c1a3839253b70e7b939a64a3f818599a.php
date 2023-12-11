<!-- Button trigger modal -->
<button type="button" class="btn btn-primary mt-3 mb-2 align-self-end" data-bs-toggle="modal" data-bs-target="#tambah_tombol_hero_section_modal">
    Tambah Testimoni
</button>

<!-- Modal -->
<div class="modal fade" id="tambah_tombol_hero_section_modal" tabindex="-1" aria-labelledby="tambah_tombol_hero_section_modal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5 fw-semibold">Tambah Testimoni</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <div class="mb-3">
                    <label for="input_nama_social_media" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="input_nama_social_media" name="input_nama_social_media">
                </div>
                <div class="mb-3">
                    <label for="input_link_social_media" class="form-label">Prodi</label>
                    <input type="text" class="form-control" id="input_link_social_media" name="input_link_social_media">
                </div>
                <div class="mb-3">
                    <label for="input_angkatan_social_media" class="form-label">Angkatan</label>
                    <input type="text" class="form-control" id="input_angkatan_social_media" name="input_angkatan_social_media">
                </div>
                <div class="mb-3">
                    <label for="input_deskripsi_social_media" class="form-label">Deskripsi</label>
                    <input type="text" class="form-control" id="input_deskripsi_social_media" name="input_deskripsi_social_media">
                </div>
                <div class="mb-3">
                    <label for="input_jenis_testimoni" class="form-label">Jenis Testimoni</label>
                    <select class="form-select" id="input_jenis_testimoni" name="input_jenis_testimoni">
                        <option value="1">Alumni</option>
                        <option value="2">Mahasiswa Berprestasi</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="input_foto_social_media" class="form-label">Foto</label>
                    <input type="file" class="form-control" id="input_foto_social_media" name="input_foto_social_media">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">Tambah</button>
            </div>
        </div>
    </div>
</div>
<?php /**PATH D:\1. Perkuliahan\Semester 5\PABW\project-spmb-pabwe\resources\views/admin-panel/sub_admin_panel/tambah_testimoni.blade.php ENDPATH**/ ?>