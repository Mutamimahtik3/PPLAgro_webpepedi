<?php $__env->startSection('content'); ?>
<div class="card mb-4">
    <div class="card-header">
        Hasil Rekomendasi Penjadwalan
    </div>
    <div class="card-body col-md-12">
        <div class="row justify-content-md-center">
            <table class="table table-bordered table-stripped text-center col-md-7">
                <tbody>
                    <tr>
                        <td>Nama</td>
                        <td><?php echo e($data->padi->jenis_padi); ?></td>
                    </tr>
                    <tr>
                        <td>Varietas</td>
                        <td><?php echo e($data->padi->varietas); ?></td>
                    </tr>
                    <tr>
                        <td>Tanggal Semai</td>
                        <td><?php echo e($data->tgl_persemaian); ?></td>
                    </tr>
                    <tr>
                        <td>Banyak Benih</td>
                        <td><?php echo e($data->banyak_benih); ?></td>
                    </tr>
                    <tr>
                        <td>Jenis Tanah</td>
                        <td><?php echo e($data->jenis_tanah); ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <table class="table table-bordered table-stripped text-center">
            <thead>
                <th>No</th>
                <th>Tanggal</th>
                <th>Waktu</th>
                <th>Nama Proses</th>
                <th>Tips dan Trik</th>
                <!-- <th>#</th> -->
            </thead>
            <tbody>
                <?php $__empty_1 = true; $__currentLoopData = $data->penjadwalan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $jadwal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                    <td><?php echo e(($index+1)); ?></td>
                    <td><?php echo e($jadwal->tanggal); ?></td>
                    <td><?php echo e($jadwal->waktu); ?></td>
                    <td><?php echo e($jadwal->nama_proses); ?></td>
                    <td><?php echo e($jadwal->tips_dan_trik); ?></td>
                    <!-- <td>
                        <a href="" class="btn btn-link">
                            Gunakan
                        </a>
                    </td> -->
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr>
                    <td colspan="5">Belum ada saran</td>
                </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\ppl-agro-main\ppl-agro-main\resources\views/petani/pratanam/show.blade.php ENDPATH**/ ?>