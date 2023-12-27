<!-- Modal -->
<div class="modal fade" id="modal-edit" tabindex="-1"
     aria-labelledby="modal-edit" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5 fw-semibold">Ubah Prestasi</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('prestasi.edit')  }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <input name="id" type="hidden" id="inputId">

                    <div class="mb-3">
                        <label for="judulUpdate" class="form-label">Judul Prestasi</label>
                        <input type="text" class="form-control" id="judulUpdate"
                               name="judulUpdate">
                    </div>

                    <div class="mb-3">
                        <label for="deskripsiUpdate" class="form-label">Deskripsi</label>
                        <textarea class="form-control" id="deskripsiUpdate" name="deskripsiUpdate" style="height: 200px"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="input_jenis_prestasi_update" class="form-label">Jenis Testimoni</label>
                        <select class="form-select" id="input_jenis_prestasi_update" name="input_jenis_prestasi_update">
                            <option value="Institut">Prestasi Institut</option>
                            <option value="Dosen">Prestasi Dosen dan Staff</option>
                            <option value="Mahasiswa">Prestasi Mahasiswa</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="gambarUpdate" class="form-label">Foto</label>
                        <input type="file" class="form-control" id="gambarUpdate"
                               name="gambarUpdate" accept="image/png, image/gif, image/jpeg" />
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
