<?php $__env->startSection('isi-admin-panel'); ?>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">

    <div class="container-fluid p-3">
        <div class="card">
            <div id="item-2" class="card">
                <div class="card-header bg-primary text-white">
                    <span class="fs-5">Prestasi</span>
                </div>
                <div class="card-body d-flex flex-column">
                    <?php echo $__env->make('admin-panel.sub_admin_panel.tambah_prestasi', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                    <table id="table-data" class="table text-center align-middle table-striped table-bordered">
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
                        <?php $__empty_1 = true; $__currentLoopData = $dataPrestasi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr>
                                <td><?php echo e($loop->iteration); ?></td>
                                <td><?php echo e($item->judul_prestasi); ?></td>
                                <td><?php echo e($item->deskripsi); ?></td>
                                <td><img src="<?php echo e(asset($item->photo)); ?>" alt="" width="50" height="50"></td>
                                <td>
                                    <?php switch($item->jenis_prestasi):
                                        case ('Institut'): ?>
                                            <span class="badge bg-success"><?php echo e($item->jenis_prestasi); ?></span>
                                            <?php break; ?>
                                        <?php case ('Dosen'): ?>
                                            <span class="badge bg-warning"><?php echo e($item->jenis_prestasi); ?></span>
                                            <?php break; ?>
                                        <?php case ('Mahasiswa'): ?>
                                            <span class="badge bg-danger"><?php echo e($item->jenis_prestasi); ?></span>
                                            <?php break; ?>
                                    <?php endswitch; ?>
                                </td>
                                <td><?php echo e($item->created_at); ?></td>
                                <td style="min-width: 120px; width: 120px">
                                    <button class="btn btn-success">
                                        <i class="bi bi-pen"></i>
                                    </button>
                                    <button class="btn btn-danger">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <tr>
                                <td colspan="7" class="text-center text-muted">Belum ada data tersedia!</td>
                            </tr>
                        <?php endif; ?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>

    <script>
        $(document).ready(function () {
            $('#table-data').DataTable();
        })
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.admin-panel-template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\1. Perkuliahan\Semester 5\PABW\proyekKelompok\project-spmb-pabwe\resources\views/admin-panel/prestasipanel.blade.php ENDPATH**/ ?>