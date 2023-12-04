<div id="item-1" class="card shadow-sm">
    <div class="card-header bg-primary text-white">
        <span class="fs-5 fw-semibold">Data Institut</span>
    </div>

    <form action="{{ url('/api/data-institut') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
            <div class="mb-3">
                <label for="input_nama_institusi" class="form-label fw-semibold">Nama Institusi</label>
                <input type="text" class="form-control" id="input_nama_institusi"
                       name="input_nama_institusi" value="{{ $dataInstitusi->nama_institusi }}">
            </div>
            <div class="mb-3">
                <label for="input_singkatan_nama_institusi" class="form-label fw-semibold">Singkatan Nama
                    Institusi</label>
                <input type="text" class="form-control" id="input_singkatan_nama_institusi"
                       name="input_singkatan_nama_institusi"
                       value="{{ $dataInstitusi->singkatan_nama_institusi }}">
            </div>

            <div class="mb-3">
                <label for="input_akreditasi" class="form-label fw-semibold">Akreditasi</label>
                <select id="input_akreditasi" name="input_akreditasi" class="form-control">
                    <option value="A" <?php echo ($dataInstitusi->akreditasi === 'A') ? 'selected' : ''; ?>>A</option>
                    <option value="B" <?php echo ($dataInstitusi->akreditasi === 'B') ? 'selected' : ''; ?>>B</option>
                    <option value="C" <?php echo ($dataInstitusi->akreditasi === 'C') ? 'selected' : ''; ?>>C</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="input_jargon_institusi" class="form-label fw-semibold">Jargon Institusi</label>
                <input type="text" class="form-control" id="input_jargon_institusi"
                       name="input_jargon_institusi" value="{{ $dataInstitusi->jargon }}">
            </div>
            <div class="mb-3">
                <label for="input_jumlah_dosen" class="form-label fw-semibold">Jumlah Dosen</label>
                <input type="number" min="0" class="form-control" id="input_jumlah_dosen"
                       name="input_jumlah_dosen" value="{{ $dataInstitusi->jumlah_dosen }}">
            </div>
            <div class="mb-3">
                <label for="input_jumlah_mahasiswa" class="form-label fw-semibold">Jumlah Mahasiswa</label>
                <input type="number" min="0" class="form-control" id="input_jumlah_mahasiswa"
                       name="input_jumlah_mahasiswa" value="{{ $dataInstitusi->jumlah_mahasiswa }}">
            </div>
            <div class="mb-3">
                <label for="input_jumlah_alumni" class="form-label fw-semibold">Jumlah Alumni</label>
                <input type="number" min="0" class="form-control" id="input_jumlah_alumni"
                       name="input_jumlah_alumni" value="{{ $dataInstitusi->jumlah_alumni }}">
            </div>

            <div class="mb-3">
                <label for="input_logo_institusi" class="form-label fw-semibold">Logo Institusi</label>
                <br>
                <div class="w-100 border border-1 mb-2 p-3 d-flex justify-content-center rounded-2">
                    <img src="{{ asset($dataInstitusi->logo_institusi ? $dataInstitusi->logo_institusi : 'assets/img/default.jpg') }}" alt="logo institusi"
                         style="width: 300px">
                </div>
                <input class="form-control" type="file" id="input_logo_institusi"
                       name="input_logo_institusi">
            </div>

            <div class="mb-3">
                <label for="input_sertifikat_institusi" class="form-label fw-semibold">Sertifikat Akreditasi</label>
                <br>
                <div class="w-100 border border-1 mb-2 p-3 d-flex justify-content-center rounded-2">
                    <img
                        src="{{ asset($dataInstitusi->sertifikat_akreditasi ? $dataInstitusi->sertifikat_akreditasi : 'assets/img/default.jpg') }}"
                        alt="sertifikat akreditasi"
                        style="width: 500px">
                </div>
                <input class="form-control" type="file" id="input_sertifikat_institusi"
                       name="input_sertifikat_institusi">
            </div>
        </div>
        <div class="card-footer bg-white">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
