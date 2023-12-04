@extends('template.admin-panel-template')

@section('isi-admin-panel')

    <div class="container-fluid p-3">
        <div class="card">
            <div id="item-2" class="card">
                <div class="card-header bg-primary text-white">
                    <span class="fs-5">Prestasi</span>
                </div>
                <div class="card-body d-flex flex-column">
                    @include('admin-panel.sub_admin_panel.tambah_prestasi')
                    <form action="">
                        <table class="table text-center align-middle table-striped table-bordered">
                            <thead class="align-middle">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Judul Prestasi</th>
                                <th scope="col">Deskripsi</th>
                                <th scope="col">Foto</th>
                                <th scope="col">Jenis Prestasi</th>
                                <th scope="col">Created at</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(isset($dataPrestasi) && sizeof($dataPrestasi) > 0)
                                @php $counterNumber = 1; @endphp

                                @foreach($dataPrestasi as $item)
                                    <tr>
                                        <td>{{$counterNumber++}}</td>
                                        <td>{{$item->judul_prestasi}}</td>
                                        <td>{{$item->deskripsi}}</td>
                                        <td><img src="{{asset($item->photo)}}" alt="" width="50" height="50"></td>
                                        <td><span class="badge bg-success">{{$item->jenis_prestasi}}</span></td>
                                        <td>{{$item->created_at}}</td>
                                        <td style="min-width: 120px; width: 120px">
                                            <button class="btn btn-success">
                                                <i class="bi bi-pen"></i>
                                            </button>
                                            <button class="btn btn-danger">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="7" class="text-center text-muted">Belum ada data tersedia!</td>
                                </tr>
                            @endif
                            </tbody>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
