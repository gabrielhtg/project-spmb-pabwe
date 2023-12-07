<!-- Button trigger modal -->
<button type="button" class="btn btn-primary mt-3 mb-2" data-bs-toggle="modal" data-bs-target="#addpersyaratanumum">
    Tambah Tombol
</button>

<!-- Modal -->
<div class="modal fade" id="addpersyaratanumum" tabindex="-1" aria-labelledby="addpersyaratanumum" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5">Tambah Jalur Pendaftaran</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="post" enctype="multipart/form-data">
                  @csrf
                <div class="mb-3">
                <input type="hidden" name="id" value="">
                    <label for="inputjalurpendaftaran" class="form-label">Jalur Pendaftaran</label>
                    <input type="text" class="form-control" id="inputjalurpendaftaran" name="inputjalurpendaftaran">
                </div>
                <div class="mb-3">
                    <label for="inputpersyaratanumum" class="form-label">Deskripsi Persyaratan Umum</label>
                    <input type="text" class="form-control" id="inputpersyaratanumum" name="inputpersyaratanumum">
                </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">Tambah</button>
            </div>
        </div>
    </div>
</div>
