@extends('template.admin-panel-template')

@section('isi-admin-panel')

<div class="container-fluid p-3">
  <div class="card">
    <div class="card-header bg-primary text-white" style="display: flex; justify-content: space-between; align-items: center;">
      <span class="fs-3">Data Pengumuman</span>
      <a href="{{ route("pengumuman-panel") }}">
        <button class="btn btn-outline-light">
          Kembali
        </button>
      </a>
    </div>
    <div class="p-3">
      <form method="POST" action="{{ route('post.pengumuman') }}" enctype="multipart/form-data">
        @csrf

        <label for="kategoriPengumuman" class="form-label">Pilih Tag Pengumuman<span class="star">*</span></label>
        <select class="form-select @error('kategoriPengumuman') is-invalid @enderror" name="kategoriPengumuman" id="kategoriPengumuman">
          <option value="PMDK">PMDK</option>
          <option value="USM 1">USM 1</option>
          <option value="USM 2">USM 2</option>
          <option value="USM 3">USM 3</option>
          <option value="USM 4">USM 4</option>
          <option value="UTBK">UTBK</option>
        </select>
        @error('kategoriPengumuman')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror

        <div class="mb-3">
          <label for="judulPengumuman" class="form-label">Judul Pengumuman<span class="star">*</span></label>
          <input type="text" class="form-control @error('judulPengumuman') is-invalid @enderror" name="judulPengumuman" id="judulPengumuman">
          @error('judulPengumuman')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>

        <div class="fw-bold">Tambah File Pengumuman</div>

        <div class="mb-3">
          <label for="filePengumuman" class="form-label">Add File (PDF)<span class="star">*</span></label>
          <input type="file" class="form-control @error('filePengumuman') is-invalid @enderror" name="filePengumuman" id="filePengumuman">
          @error('filePengumuman')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
          <small class="text-muted">*File harus berupa PDF, dan ukurannya tidak boleh lebih dari 2 MB.</small>
        </div>

        <div class="mb-3">
          <label for="tanggalPengumuman" class="form-label">Tanggal Pengumuman<span class="star">*</span></label>
          <input type="date" class="form-control @error('tanggalPengumuman') is-invalid @enderror" name="tanggalPengumuman" id="tanggalPengumuman">
          @error('tanggalPengumuman')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>

        <div class="mb-3">
          <button type="submit" class="btn btn-primary">Tambahkan</button>
        </div>
      </form>
    </div>
  </div>
</div>

@endsection
