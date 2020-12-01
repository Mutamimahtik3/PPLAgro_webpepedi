<?php $__env->startSection('content'); ?>
<div class="">
  <a href="<?php echo e(route('profile.edit')); ?>" class="btn btn-primary">
    Ubah Data Diri
  </a>
  <br>
    <div class="table table-responsive table-stripped table-bordered">
        <table style="width:100%">
            <tr>
              <th>Nama</th>
              <td><?php echo e($data->name); ?></td>
            </tr>
            <tr>
              <th>Email</th>
              <td><?php echo e($data->email); ?></td>
            </tr>
            <tr>
              <th>Jenis Kelamin</th>
              <td><?php echo e($data->jenis_kelamin); ?></td>
            </tr>
            <tr>
                <th>Alamat</th>
                <td><?php echo e($data->alamat); ?></td>
            </tr>
            <tr>
                <th>Pekerjaan</th>
                <td><?php echo e($data->pekerjaan); ?></td>
            </tr>
            <tr>
                <th>Role</th>
                <td><?php echo e($data->role); ?></td>
              </tr>
          </table>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\ppl-agro-main\ppl-agro-main\resources\views/profil/index.blade.php ENDPATH**/ ?>