@extends('template.admin-panel-template')

@section('isi-admin-panel')

    <div class="container-fluid bg-light p-3">
        <div class="d-flex w-100">
            <div class="w-100">
                <div data-bs-spy="scroll" data-bs-target="#sidebar-kanan" data-bs-smooth-scroll="true"
                     class="scrollspy-example-2 d-flex gap-3 flex-column justify-content-center" tabindex="0">

                    @include('admin-panel.sub_admin_panel.data_institut')
                    @include('admin-panel.sub_admin_panel.social_media')
                    @include('admin-panel.sub_admin_panel.hero_section')

                    <div id="item-4" class="card shadow-sm">
                        <div class="card-header bg-primary text-white">
                            <span class="fs-5">Alamat Institusi</span>
                        </div>
                        <div class="card-body">
{{--                            @include('admin-panel.sub_admin_panel.tambah_tombol_hero_section')--}}
                            <form action="">
                                <table class="table table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Alamat</th>
                                        <th scope="col"></th>
                                        <th scope="col">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Test</td>
                                        <td>Test</td>
                                        <td style="min-width: 120px; width: 120px">
                                            <button class="btn btn-success">
                                                <i class="bi bi-pen"></i>
                                            </button>
                                            <button class="btn btn-danger">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-none d-md-inline" style="width: 18rem; min-width: 18rem"></div>

            <div class="d-none d-md-inline position-fixed end-0" style="width: 18rem; min-width: 18rem">
                <nav id="sidebar-kanan" class="h-100 flex-column align-items-stretch pe-4 border-start">
                    <nav class="nav nav-pills flex-column ps-3">
                        <a class="nav-link" href="#item-1"><i class="bi bi-database me-2"></i> Data Institut</a>
                        <a class="nav-link" href="#item-2"><i class="bi bi-people me-2"></i> Social Media</a>
                        <a class="nav-link" href="#item-3"><i class="bi bi-card-image me-2"></i> Hero Section</a>
                        <a class="nav-link" href="#item-4"><i class="bi bi-geo-alt me-2"></i> Alamat Institusi</a>
                    </nav>
                </nav>
            </div>
        </div>
    </div>
@endsection
