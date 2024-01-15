@extends('template.app')

@section('isi-halaman')
    <div class="container mt-5">
        <div class="text-center mb-4">
            <h2 class="display-4">Daftar Kemitraan IT Del</h2>
            <p class="lead">Temukan mitra-mitra kreatif dan inovatif kami</p>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0">Daftar Kemitraan</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-sm mt-3 text-center"
                                style="background-color: #f8f9fa;">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama Kemitraan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($mitra as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->nama }}</td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="2">Tidak ada data mitra</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
