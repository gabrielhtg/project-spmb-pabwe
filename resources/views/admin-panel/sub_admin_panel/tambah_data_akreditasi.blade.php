<!-- Button trigger modal -->
<button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#tambahDataAkreditasi">
    Tambah
</button>

<!-- Modal -->
<div class="modal fade" id="tambahDataAkreditasi" tabindex="-1" aria-labelledby="tambahDataAkreditasiLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Akreditasi</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('addAkreditasi') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label w-100">
                            Akreditasi
                            <select name="akreditasi" class="form-control" required>
                                <option value="A">Unggul</option>
                                <option value="B">Baik Sekali</option>
                                <option value="C">Baik</option>
                            </select>
                            @error('akreditasi')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </label>
                    </div>

                    <div class="mb-3">
                        <label class="form-label w-100">
                            Lembaga Akreditasi
                            <input type="text" class="form-control" name="lembaga_akreditasi" required>
                        </label>
                        @error('lembaga_akreditasi')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label w-100">
                            Sertifikat Akreditasi
                            <input type="file" class="form-control" name="sertifikat_akreditasi" required>
                            @error('sertifikat_akreditasi')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </label>
                    </div>

                    <div class="">
                        <label class="form-label w-100">
                            Tahun Akreditasi
                            <input type="number" min="1900" class="form-control" name="tahun_akreditasi" required>
                            @error('tahun_akreditasi')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
