<!-- Button trigger modal -->
<button type="button" class="btn btn-primary mt-3 mb-2" data-bs-toggle="modal" data-bs-target="#addPersyaratanUmum">
    Tambah Tombol
</button>

<!-- Modal -->
<div class="modal fade" id="addPersyaratanUmum" tabindex="-1" aria-labelledby="addPersyaratanUmumLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addPersyaratanUmumLabel">Tambah Jalur Pendaftaran</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('addJalur') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <input type="hidden" name="id" value="">
                        <label for="inputJalurPendaftaran" class="form-label">Jalur Pendaftaran</label>
                        <input type="text" class="form-control" id="inputJalurPendaftaran" name="inputJalurPendaftaran">
                        @error('inputJalurPendaftaran')
                            <span class="text-danger fs-7">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="inputPersyaratanUmum" class="form-label">Deskripsi Persyaratan Umum</label>
                        <input type="text" class="form-control" id="inputPersyaratanUmum" name="inputPersyaratanUmum">
                        @error('inputPersyaratanUmum')
                            <span class="text-danger fs-7">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
