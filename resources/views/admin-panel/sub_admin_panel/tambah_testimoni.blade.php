<!-- Button trigger modal -->
<button type="button" class="btn btn-primary mt-3 mb-2 align-self-end" data-bs-toggle="modal"
        data-bs-target="#tambah_tombol_hero_section_modal">
    Tambah Testimoni
</button>

<!-- Modal -->
<div class="modal fade" id="tambah_tombol_hero_section_modal" tabindex="-1"
     aria-labelledby="tambah_tombol_hero_section_modal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5 fw-semibold">Tambah Testimoni</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('testimoni.add') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                    <div class="mb-3">
                        <label for="prodi" class="form-label">Prodi</label>
                        <select class="form-select" id="prodi" name="prodi">
                            <option value="">-- Pilih Prodi --</option>
                            @foreach($dataProdi as $itemProdi)
                                <option value="{{ $itemProdi->kode_prodi }}">{{ $itemProdi->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="angkatan" class="form-label">Angkatan</label>
                        <input type="text" class="form-control" id="angkatan" name="angkatan">
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi</label>
                        <input type="text" class="form-control" id="deskripsi" name="deskripsi">
                    </div>
                    <div class="mb-3">
                        <label for="jenis" class="form-label">Jenis Testimoni</label>
                        <select class="form-select" id="jenis" name="jenis">
                            <option value="Alumni">Alumni</option>
                            <option value="Mahasiswa">Mahasiswa Berprestasi</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="gambar" class="form-label">Foto</label>
                        <input type="file" class="form-control" id="gambar" name="gambar" accept="image/png, image/gif, image/jpeg">
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
