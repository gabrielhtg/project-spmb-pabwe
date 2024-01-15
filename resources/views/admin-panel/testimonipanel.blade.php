@extends('template.admin-panel-template')

@section('isi-admin-panel')

    <div class="container-fluid p-3">
        <div class="row row-gap-3">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <span class="fs-3">Data Biaya Umum</span>
                    </div>

                    

                    </div>


                    <div class="card-body">
                    @include('admin-panel.sub_admin_panel.tambah_tombol_hero_section')
                        <form action="">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nama Button</th>
                                    <th scope="col">Link Button</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Test</td>
                                    <td>Test</td>
                                    <td>Test</td>
                                </tr>
                                </tbody>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
