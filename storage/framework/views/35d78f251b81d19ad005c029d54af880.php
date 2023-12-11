<!-- include summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary mt-3 mb-2 align-self-end" data-bs-toggle="modal"
        data-bs-target="#tambah_tombol_hero_section_modal">
    Tambah Prestasi
</button>

<!-- Modal -->
<div class="modal fade" id="tambah_tombol_hero_section_modal" tabindex="-1"
     aria-labelledby="tambah_tombol_hero_section_modal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5 fw-semibold">Tambah Prestasi</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="judul-prestasi" class="form-label">Judul Prestasi</label>
                        <input type="text" class="form-control" id="judul-prestasi"
                               name="judul-prestasi">
                    </div>

                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi</label>
                        <textarea class="form-control" id="deskripsi" name="deskripsi" style="height: 200px"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="input_jenis_testimoni" class="form-label">Jenis Testimoni</label>
                        <select class="form-select" id="input_jenis_testimoni" name="input_jenis_testimoni">
                            <option value="Institut">Prestasi Institut</option>
                            <option value="Dosen">Prestasi Dosen dan Staff</option>
                            <option value="Mahasiswa">Prestasi Mahasiswa</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="input_foto" class="form-label">Foto</label>
                        <input type="file" class="form-control" id="input_foto"
                               name="input_foto">
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
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script>
    $(document).ready(function() {
        $('#deskripsi').summernote();
    });
</script>
<?php /**PATH D:\1. Perkuliahan\Semester 5\PABW\proyekKelompok\project-spmb-pabwe\resources\views/admin-panel/sub_admin_panel/tambah_prestasi.blade.php ENDPATH**/ ?>