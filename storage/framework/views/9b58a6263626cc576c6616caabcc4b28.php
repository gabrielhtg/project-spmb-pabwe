<?php $__env->startSection('isi-admin-panel'); ?>

    <div class="container-fluid p-3">
        <div class="d-flex w-100">
            <div class="w-100">
                <div data-bs-spy="scroll" data-bs-target="#navbar-example3" data-bs-smooth-scroll="true"
                     class="scrollspy-example-2 d-flex gap-3 flex-column justify-content-center" tabindex="0">
                    <div id="item-1" class="card">
                        <div class="card-header bg-primary text-white">
                            <span class="fs-5">Data Institut</span>
                        </div>

                        <form action="<?php echo e(url("/admin-panel")); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="input_nama_institusi" class="form-label">Nama Institusi</label>
                                    <input type="text" class="form-control" id="input_nama_institusi"
                                           name="input_nama_institusi" value="<?php echo e($dataInstitusi->nama_institusi); ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="input_singkatan_nama_institusi" class="form-label">Singkatan Nama Institusi</label>
                                    <input type="text" class="form-control" id="input_singkatan_nama_institusi"
                                           name="input_singkatan_nama_institusi" value="<?php echo e($dataInstitusi->singkatan_nama_institusi); ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="input_akreditasi_institusi_singkat" class="form-label">Akreditasi
                                        Insitusi (Singkat)</label>
                                    <input type="text" class="form-control" id="input_akreditasi_institusi_singkat"
                                           name="input_akreditasi_institusi_singkat" value="<?php echo e($dataInstitusi->akreditasi_singkat); ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="input_akreditasi_institusi_lengkap" class="form-label">Akreditasi
                                        Insitusi (Lengkap)</label>
                                    <input type="text" class="form-control" id="input_akreditasi_institusi_lengkap"
                                           name="input_akreditasi_institusi_lengkap" value="<?php echo e($dataInstitusi->akreditasi_lengkap); ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="input_jargon_institusi" class="form-label">Jargon Institusi</label>
                                    <input type="text" class="form-control" id="input_jargon_institusi"
                                           name="input_jargon_institusi" value="<?php echo e($dataInstitusi->jargon); ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="input_jumlah_dosen" class="form-label">Jumlah Dosen</label>
                                    <input type="number" min="0" class="form-control" id="input_jumlah_dosen"
                                           name="input_jumlah_dosen" value="<?php echo e($dataInstitusi->jumlah_dosen); ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="input_jumlah_mahasiswa" class="form-label">Jumlah Mahasiswa</label>
                                    <input type="number" min="0" class="form-control" id="input_jumlah_mahasiswa"
                                           name="input_jumlah_mahasiswa" value="<?php echo e($dataInstitusi->jumlah_mahasiswa); ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="input_jumlah_alumni" class="form-label">Jumlah Alumni</label>
                                    <input type="number" min="0" class="form-control" id="input_jumlah_alumni"
                                           name="input_jumlah_alumni" value="<?php echo e($dataInstitusi->jumlah_alumni); ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="input_sertifikat_akreditasi" class="form-label">Sertifikat Akreditasi</label>
                                    <input class="form-control" type="file" id="input_sertifikat_akreditasi" name="input_sertifikat_akreditasi">
                                </div>
                                <div class="mb-3">
                                    <label for="input_logo_institusi" class="form-label">Logo Institusi</label>
                                    <input class="form-control" type="file" id="input_logo_institusi" name="input_logo_institusi">
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>

                    <div id="item-2" class="card">
                        <div class="card-header bg-primary text-white">
                            <span class="fs-5">Social Media Institusi</span>
                        </div>
                        <div class="card-body d-flex flex-column">
                            <?php echo $__env->make('admin-panel.sub_admin_panel.tambah_social_media_hero_section', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <form action="">
                                <table class="table text-center align-middle table-striped table-bordered">
                                    <thead class="align-middle">
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

                    <div id="item-3" class="card">
                        <div class="card-header bg-primary text-white">
                            <span class="fs-5">Hero Section</span>
                        </div>
                        <div class="card-body">
                            <form action="">
                                <div class="mb-3">
                                    <label for="input_judul_header" class="form-label">Header Hero</label>
                                    <input type="text" class="form-control" id="input_judul_header"
                                           name="input_judul_header">
                                </div>
                                <div class="mb-3">
                                    <label for="input_deskripsi_header" class="form-label">Example textarea</label>
                                    <textarea class="form-control" id="input_deskripsi_header"
                                              name="input_deskripsi_header" rows="10"></textarea>
                                </div>
                            </form>

                            <?php echo $__env->make('admin-panel.sub_admin_panel.tambah_tombol_hero_section', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <form action="">
                                <table class="table table-striped table-bordered">
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
                <nav id="navbar-example3" class="h-100 flex-column align-items-stretch pe-4 border-start">
                    <nav class="nav nav-pills flex-column ps-3">
                        <a class="nav-link" href="#item-1">Data Institut</a>
                        <a class="nav-link" href="#item-2">Social Media</a>
                        <a class="nav-link" href="#item-3">Hero Section</a>
                    </nav>
                </nav>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.admin-panel-template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\1. Perkuliahan\Semester 5\PABW\project-spmb-pabwe\resources\views/admin-panel/adminpanel.blade.php ENDPATH**/ ?>