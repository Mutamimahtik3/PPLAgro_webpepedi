<?php $__env->startSection('content'); ?>
    <div class="starter-template">
        <img src="<?php echo e(asset('artikel/'.$data->gambar)); ?>">        
        <h1 class="mt-2"><?php echo e($data->judul); ?></h1>
        <small>Date Published : <?php echo e($data->created_id); ?></small>
        <p class="lead mt-3">
            <?php echo $data->isi; ?>

        </p>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\ppl-agro-main\ppl-agro-main\resources\views/admin/artikel/detail.blade.php ENDPATH**/ ?>