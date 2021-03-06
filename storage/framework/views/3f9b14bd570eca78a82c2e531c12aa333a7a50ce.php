<?php $__env->startSection('content'); ?>
<div class="card mb-4">
    <div class="card-body">
    <a class="btn btn-primary mb-3" href="<?php echo e(route('a.konsultan.create')); ?>">Tambah Konsultan</a>

        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Pekerjaan</th>
                        <th>Jenis Kelamin</th>
                        <th>No HP</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e(($index +1)); ?></td>
                        <td><?php echo e($data->name); ?></td>
                        <td><?php echo e($data->email); ?></td>
                        <td><?php echo e($data->pekerjaan); ?></td>
                        <td><?php echo e($data->jenis_kelamin); ?></td>
                    <td><?php echo e($data->nohp); ?></td>

                        <td>
                            <a class="btn btn-primary" href="<?php echo e(route('a.konsultan.show',['id' => $data->id])); ?>">Detail</a>
                            <a class="btn btn-warning" href="<?php echo e(route('a.konsultan.edit',['id' => $data->id])); ?>">Edit</a>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\ppl-agro-main\ppl-agro-main\resources\views/admin/konsultan/index.blade.php ENDPATH**/ ?>