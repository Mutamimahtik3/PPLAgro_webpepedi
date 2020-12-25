<?php $__env->startSection('content'); ?>
    
        <?php if(Auth::user()->role == 'admin'): ?>
            <a class="btn btn-primary mb-3" href="<?php echo e(route('a.artikel.create')); ?>">Tambah Artikel</a>
        <?php endif; ?>
        <div class="album py-5 bg-light">
            <div class="container">
                <div class="row">
                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-4">
                        <div class="car box-shadow">
                            <img src="<?php echo e(asset('artikel/'.$data->gambar)); ?>" alt="Thumbnail [100%x225]" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" class="card-img-top" style="height: 225px; width: 100%; display: block;" data-holder-rendered="true">
                            <div class="card-body">
                                <p class="card-text">
                                    <?php echo e($data->judul); ?>

                                </p>
                                <small>
                                    Kategori <?php echo e(ucwords($data->kategori)); ?>

                                </small>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <?php if(Auth::user()->role=='admin'): ?>
                                        <a class="btn btn-outline-secondary" href="<?php echo e(route('a.artikel.show', ['id' => $data->id])); ?>">
                                            View
                                        </a>
                                        <a class="ml-1 btn btn-outline-secondary" href="<?php echo e(route('a.artikel.edit', ['id' => $data->id])); ?>">
                                            Edit
                                        </a>
                                        <form action="<?php echo e(route('a.artikel.delete', ['id' => $data->id])); ?>" method="post">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('delete'); ?>
                                        <button class="ml-1 btn btn-outline-secondary" type="submit">
                                            Delete
                                        </button>
                                        </form>
                                        <?php else: ?>
                                        <a class="btn btn-outline-secondary" href="<?php echo e(route('p.artikel.show', ['id' => $data->id])); ?>">
                                            View
                                        </a>
                                        <?php endif; ?>
                                    </div>
                                <small class="text-muted">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\ppl-agro-main\ppl-agro-main\resources\views/admin/artikel/index.blade.php ENDPATH**/ ?>