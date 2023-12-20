<!-- Modal -->
<div class="modal fade" id="modal-edit" tabindex="-1"
     aria-labelledby="modal-edit" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5 fw-semibold">Ubah Prestasi</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('testimoni.edit')  }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <input name="id" type="hidden" id="inputId">

                    <div class="mb-3">
                        <label for="namaUpdate" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="namaUpdate" name="namaUpdate">
                    </div>
                    <div class="mb-3">
                        <label for="prodiUpdate" class="form-label">Prodi</label>
                        <input type="text" class="form-control" id="prodiUpdate" name="prodiUpdate">
                    </div>
                    <div class="mb-3">
                        <label for="angkatanUpdate" class="form-label">Angkatan</label>
                        <input type="text" class="form-control" id="angkatanUpdate" name="angkatanUpdate">
                    </div>
                    <div class="mb-3">
                        <label for="deskripsiUpdate" class="form-label">Deskripsi</label>
                        <input type="text" class="form-control" id="deskripsiUpdate" name="deskripsiUpdate">
                    </div>
                    <div class="mb-3">
                        <label for="jenisUpdate" class="form-label">Jenis Testimoni</label>
                        <select class="form-select" id="jenisUpdate" name="jenisUpdate">
                            <option value="Alumni">Alumni</option>
                            <option value="Mahasiswa">Mahasiswa Berprestasi</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="gambarUpdate" class="form-label">Foto</label>
                        <input type="file" class="form-control" id="gambarUpdate" name="gambarUpdate">
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Ubah</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
