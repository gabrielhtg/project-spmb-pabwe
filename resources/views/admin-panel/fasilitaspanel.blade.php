@extends('template.admin-panel-template')

@section('isi-admin-panel')

    <div class="container">
        <form>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label"></label>Pilih Kategori Fasilitas
            <select class="form-select" id="selectOption" name="selectOption">
                <option value="option1">Asrama</option>
                <option value="option2">Kesehatan & Olahraga</option>
                <option value="option3">Area Mahasiswa</option>
                <option value="option2">Laboratorium</option>
                <option value="option3">Perpustakaan</option>
        </select>

        </select>
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Nama Fasilitas</label>
            <input type="text" class="form-control" id="exampleInputPassword1">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Deskripsi Fasilitas</label>
            <input type="text" class="form-control" id="exampleInputPassword1">
        </div>

        <p class="fw-bold">Tambah Gambar Fasilitas</p>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Nama File</label>
            <input type="text" class="form-control" id="exampleInputPassword1">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">File</label>
            <input type="file" class="form-control" id="exampleInputPassword1">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>

@endsection