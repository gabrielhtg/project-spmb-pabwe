<div id="item-2" class="card shadow-sm">
    <div class="card-header bg-primary text-white">
        <span class="fs-5 fw-semibold">Akreditasi {{ $dataInstitusi->singkatan_nama_institusi }}</span>
    </div>

    <form action="{{ url('/api/save-akreditasi-section') }}" method="post">
        @csrf
        <div class="card-body">
            <div class="mb-3">
                <label for="input_header_akreditasi_section" class="form-label fw-semibold">Header
                </label>
                <a tabindex="0" class="border-0 bg-white" role="button" data-bs-toggle="popover" data-bs-trigger="focus" data-bs-content="Max length 20 characters."><i class="bi bi-info-circle"></i></a>
                <input type="text" class="form-control" id="input_header_akreditasi_section"
                       name="input_header" value="{{ $dataAkreditasiDashboard->header }}" maxlength="20" required>
                @error('input_header')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="input_deskripsi_akreditas_section" class="form-label fw-semibold">Paragraph
                    <a tabindex="0" class="border-0 bg-white" role="button" data-bs-toggle="popover" data-bs-trigger="focus" data-bs-content="Max length 250 characters."><i class="bi bi-info-circle"></i></a>
                </label>
                <textarea id="input_deskripsi_akreditas_section"
                       name="input_deskripsi" maxlength="250" required>{{ $dataAkreditasiDashboard->description }}</textarea>
                @error('input_deskripsi')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="card-footer bg-white">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>



<script>
    $(document).ready(function() {
        $('#input_deskripsi_akreditas_section').summernote({
            height: 100,
            maxHeight: 250,
        });
    });
</script>
