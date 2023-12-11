<?php $__env->startSection('isi-admin-panel'); ?>

    <div class="container-fluid p-3">
        <div class="card">
            <div id="item-2" class="card">
                <div class="card-header bg-primary text-white">
                    <span class="fs-5">Testimoni</span>
                </div>
                <div class="card-body d-flex flex-column">
                    <?php echo $__env->make('admin-panel.sub_admin_panel.tambah_testimoni', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <form action="">
                        <table class="table text-center align-middle table-striped table-bordered">
                            <thead class="align-middle">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Prodi</th>
                                <th scope="col">Foto</th>
                                <th scope="col">Angkatan</th>
                                <th scope="col">Deskripsi</th>
                                <th scope="col">Jenis Testimoni</th>
                                <th scope="col">Created at</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>Nama</td>
                                <td>Prodi</td>
                                <td>Foto</td>
                                <td>Angkatan</td>
                                <td>Deskripsi</td>
                                <td>Jenis Testimoni</td>
                                <td>Created at</td>
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

<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.admin-panel-template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\1. Perkuliahan\Semester 5\PABW\proyekKelompok\project-spmb-pabwe\resources\views/admin-panel/testimonipanel.blade.php ENDPATH**/ ?>