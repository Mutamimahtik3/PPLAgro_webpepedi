<?php $__env->startSection('content'); ?>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table mr-1"></i>
        Menu
    </div>
    <div class="card-body">
        <div class="row">
            <?php if(Auth::user()->role == 'petani'): ?>
            <?php echo $__env->make('layouts.menu-petani', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php elseif(Auth::user()->role == 'admin'): ?>
            <?php echo $__env->make('layouts.menu-admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php elseif(Auth::user()->role == 'konsultan'): ?>
            <?php echo $__env->make('layouts.menu-konsultan', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\ppl-agro-main\ppl-agro-main\resources\views/home.blade.php ENDPATH**/ ?>