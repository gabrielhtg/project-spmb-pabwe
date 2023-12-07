<div id="item-1" class="card shadow-sm">
    <div class="card-header bg-primary text-white">
        <span class="fs-5 fw-semibold">Data Institut</span>
    </div>
        <div class="card-body">
            <form action="{{ route('ubahDataInstitut') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label class="form-label w-100 fw-semibold">
                        Nama Institusi
                        <input type="text" class="form-control"
                               name="nama_institusi" value="{{ $dataInstitusi->nama_institusi }}">
                        @error('nama_institusi')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </label>
                </div>
                <div class="mb-3">
                    <label class="form-label w-100 fw-semibold">Singkatan Nama
                        Institusi
                        <input type="text" class="form-control"
                               name="input_singkatan_nama_institusi"
                               value="{{ $dataInstitusi->singkatan_nama_institusi }}">
                        @error('input_singkatan_nama_institusi')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </label>
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
                    <label class="form-label w-100 fw-semibold">
                        Jargon Institusi
                        <input type="text" class="form-control"
                               name="input_jargon_institusi" value="{{ $dataInstitusi->jargon }}">
                        @error('input_jargon_institusi')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </label>

                </div>
                <div class="mb-3">
                    <label class="form-label fw-semibold w-100">
                        Jumlah Dosen
                        <input type="number" min="0" class="form-control"
                               name="input_jumlah_dosen" value="{{ $dataInstitusi->jumlah_dosen }}">
                        @error('input_jumlah_dosen')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </label>

                </div>
                <div class="mb-3">
                    <label class="form-label fw-semibold w-100">
                        Jumlah Mahasiswa
                        <input type="number" min="0" class="form-control" name="input_jumlah_mahasiswa" value="{{ $dataInstitusi->jumlah_mahasiswa }}">
                        @error('input_jumlah_mahasiswa')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </label>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-semibold w-100">
                        Jumlah Alumni
                        <input type="number" min="0" class="form-control" name="input_jumlah_alumni" value="{{ $dataInstitusi->jumlah_alumni }}">
                        @error('input_jumlah_alumni')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </label>
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
                    @error('input_logo_institusi')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

            <hr>

            <div class="mb-3">
{{--                <label for="input_sertifikat_institusi" class="form-label fw-semibold">Sertifikat Akreditasi</label>--}}
{{--                <br>--}}
{{--                <div class="w-100 border border-1 mb-2 p-3 d-flex justify-content-center rounded-2">--}}
{{--                    <img--}}
{{--                        src="{{ asset($dataInstitusi->sertifikat_akreditasi ? $dataInstitusi->sertifikat_akreditasi : 'assets/img/default.jpg') }}"--}}
{{--                        alt="sertifikat akreditasi"--}}
{{--                        style="width: 500px">--}}
{{--                </div>--}}
{{--                <input class="form-control" type="file" id="input_sertifikat_institusi"--}}
{{--                       name="input_sertifikat_institusi">--}}
{{--                @error('input_sertifikat_institusi')--}}
{{--                <span class="text-danger">{{ $message }}</span>--}}
{{--                @enderror--}}

                <table class="table table-striped table-bordered overflow-x-auto align-middle text-center">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Akreditasi</th>
                            <th>Lembaga Akreditasi</th>
                            <th>Sertifikat Akreditasi</th>
                            <th>Tahun Akreditasi</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
</div>
