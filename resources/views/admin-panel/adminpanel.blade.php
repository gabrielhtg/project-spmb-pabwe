@extends('template.admin-panel-template')

@section('isi-admin-panel')

    <div class="container-fluid bg-light p-3">
        <div class="d-flex w-100">
            <div class="w-100">
                <div data-bs-spy="scroll" data-bs-target="#sidebar-kanan" data-bs-smooth-scroll="true"
                     class="scrollspy-example-2 d-flex gap-3 flex-column justify-content-center" tabindex="0">

                    @include('admin-panel.sub_admin_panel.data_institut')
                    @include('admin-panel.sub_admin_panel.section_akreditas_dashboard')
                    @include('admin-panel.sub_admin_panel.social_media')
                    @include('admin-panel.sub_admin_panel.hero_section')
                    @include('admin-panel.sub_admin_panel.alamat_institusi')
                    @include('admin-panel.sub_admin_panel.contact_institusi')

                </div>
            </div>

            <div class="d-none d-md-inline" style="width: 18rem; min-width: 18rem"></div>

            <div class="d-none d-md-inline position-fixed end-0" style="width: 18rem; min-width: 18rem">
                <nav id="sidebar-kanan" class="h-100 flex-column align-items-stretch pe-4 border-start">
                    <nav class="nav nav-pills flex-column ps-3">
                        <a class="nav-link" href="#item-1"><i class="bi bi-database me-2"></i> Data Institut</a>
                        <a class="nav-link" href="#item-2"><span class="me-2">&nbsp;A&nbsp;</span>Akreditasi {{ $dataInstitusi->singkatan_nama_institusi }}</a>
                        <a class="nav-link" href="#item-3"><i class="bi bi-people me-2"></i> Social Media</a>
                        <a class="nav-link" href="#item-4"><i class="bi bi-card-image me-2"></i> Hero Section</a>
                        <a class="nav-link" href="#item-5"><i class="bi bi-geo-alt me-2"></i> Alamat Institusi</a>
                        <a class="nav-link" href="#item-5"><i class="bi bi-telephone-plus me-2"></i> Contact Institusi</a>
                    </nav>
                </nav>
            </div>
        </div>
    </div>
@endsection
