<?php $__env->startSection('content'); ?>

<div class="card mb-4">
    <div class="card-header">
    <a class="btn btn-primary" href="<?php echo e(route('p.padi.create')); ?>">Tambah Padi</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <th>No</th>
                    <th>Jenis</th>
                    <th>Varietas</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                    $routes;
                    $thisID;
                    if(count($data->pratanam)!=0){
                        $routes = 'pra.show';
                        $thisID = $data->pratanam[0]->id;
                    }elseif(count($data->pascatanam)!=0){
                        $routes = 'ps.show';
                        $thisID = $data->pascatanam[0]->id;
                    }elseif(count($data->tanam)!=0){
                        $routes = 'in.show';
                        $thisID = $data->tanam[0]->id;                        
                    }else{
                        $routes = 'error';
                    }
                    ?>
                    <?php if($routes != 'error'): ?>
                    <tr>
                        <td><?php echo e(($i+1)); ?></td>
                        <td><?php echo e($data->jenis_padi); ?></td>
                        <td><?php echo e($data->varietas); ?></td>
                        <td>
                            <a class="btn btn-success" href="<?php echo e(route('p.i.'.$routes, ['id' => $thisID])); ?>">
                                Detail
                            </a>
                            <a class="btn btn-success" href="<?php echo e(route('p.i.'.$routes. '.edit', ['id' => $thisID])); ?>">
                                Ubah
                            </a>
                        </td>
                    </tr>
                    <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
</div>    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\ppl-agro-main\resources\views/petani/padi/index.blade.php ENDPATH**/ ?>