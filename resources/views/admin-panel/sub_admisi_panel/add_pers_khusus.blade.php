<!-- Button trigger modal -->
<button type="button" class="btn btn-primary mt-3 mb-2" data-bs-toggle="modal" data-bs-target="#add_pers_khusus">
    Tambah
</button>

<!-- Modal -->
<div class="modal fade" id="add_pers_khusus" tabindex="-1" aria-labelledby="add_pers_khusus" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5">Tambah Data Persyaratan Khusus</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{route('post.prodi.add.admisi')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="inputprodi" class="form-label">Program Studi</label>
                        <input type="text" class="form-control" id="inputprodi" name="program_studi">
                    </div>
                    <div class="mb-3">
                        <label for="inputdeskPersKhusus" class="form-label">Deskripsi Persyaratan</label>
                        <textarea class="form-control" id="inputdeskPersKhusus" name="deskripsi_persyaratan" rows="4"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="inputcover" class="form-label">Upload Cover</label>
                        <input class="form-control" type="file" id="inputcover" name="cover">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button class="btn btn-primary" type="submit">Tambah</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
