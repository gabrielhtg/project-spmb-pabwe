<!-- Button trigger modal -->
<button type="button" class="btn btn-primary mt-3 mb-2" data-bs-toggle="modal" data-bs-target="#addpersyaratanumum">
    Tambah
</button>

<!-- Modal -->
<div class="modal fade" id="addpersyaratanumum" tabindex="-1" aria-labelledby="addpersyaratanumum" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5">Tambah Jalur Pendaftaran</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('addJalur') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label w-100">
                            Jalur Pendaftaran
                            <input type="text" class="form-control" name="jalurPendaftaran" required>
                        </label>
                    </div>
                    <div class="mb-3">
                        <label class="form-label w-100">
                            Deskripsi Persyaratan Umum
                            <textarea class="form-control" id="desk_pers_umum" name="desk_pers_umum" required></textarea>
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
