@extends('template.app')
@section('isi-halaman')
<link rel="stylesheet" href="{{ asset("/assets/css/form.css") }}">

<div class="container mt-5">
        <div class="row justify-content-center">
            <div class="form-container p-4">
                <!-- Your form content goes here -->
                <form>
                    <h2>Masih bingung?</h2>
                    <h5>kami akan mengirimkan jawaban ke WhatsApp anda<h5>
                      <br>
                      <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" placeholder="Masukkan nama Anda">
                    </div>
                    <div class="form-group">
                        <label for="nomor">Nomor WhatsApp</label>
                        <input type="text" class="form-control" id="nomor" placeholder="Masukkan nomor WhatsApp Anda">
                    </div>
                    <div class="form-group">
                        <label for="pesan">Pesan</label>
                        <textarea class="form-control" id="pesan" rows="3" placeholder="Masukkan pesan Anda"></textarea>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    @endsection

