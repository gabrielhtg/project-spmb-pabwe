<!-- Button trigger modal -->
<button type="button" class="btn btn-primary mt-3 mb-2" data-bs-toggle="modal" data-bs-target="#add_pers_khusus">
    Tambah
</button>

<!-- Modal -->
<div class="modal fade" id="add_pers_khusus" tabindex="-1" aria-labelledby="add_pers_khusus" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5">Tambah Persyaratan Khusus</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('post.prodi.add.admisi') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label w-100">
                            Program Studi
                            <input type="text" class="form-control" name="program_studi" required>
                        </label>
                    </div>
                    <div class="mb-3">
                        <label class="form-label w-100">
                            Deskripsi Persyaratan Khusus
                            <textarea class="deskripsi_khusus" id="deskripsi_khusus" name="deskripsi_persyaratan" required></textarea>
                        </label>
                    </div>
                    <div class="mb-3">
                        <label class="form-label w-100">
                            Upload Cover
                            <input type="file" class="form-control" name="cover" required>
                        </label>
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
