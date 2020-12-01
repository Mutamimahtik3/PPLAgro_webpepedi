<?php $__env->startSection('content'); ?>
<div class="card mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <form action="<?php echo e(route('a.petani.update', ['id' => $data->id])); ?>" method="POST">
                <?php echo method_field('put'); ?>
                <?php echo csrf_field(); ?>
                <br>
                    
                <div class="form-group">
                    <label class="small mb-1" for="nam">Nama Lengkap</label>
                    <input class="form-control py-4" id="name" type="text" placeholder="Nama Lengkap" name="name" value="<?php echo e($data->name); ?>"/>
                </div>
                <?php if ($errors->has('name')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('name'); ?>
                <br>
                <span>
                    <?php echo e(ucwords($message)); ?>

                </span>
                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                    <br>
                    <div class="form-group">
                        <label class="small mb-1" for="inputEmailAddress">No Hp</label>
                        <input class="form-control py-4" id="inputEmailAddress" type="text" placeholder="No HP" name="nohp" value="<?php echo e($data->nohp); ?>"/>
                    </div>
                    <?php if ($errors->has('nohp')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('nohp'); ?>
                    <br>
                    <span>
                        <?php echo e(ucwords($message)); ?>

                    </span>
                    <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                    <br>

                    <div class="form-group">
                        <label class="small mb-1" for="jenis_kelamin">Jenis Kelamin</label>
                        <select class="form-control py-4" id="jenis_kelamin" name="jenis_kelamin">
                            <option selected>Pilih Jenis Kelamin</option>
                            <option value="laki-laki" <?php echo e($data->jenis_kelamin=='laki-laki' ? 'selected' : ''); ?>>Laki - laki</option>
                            <option value="perempuan" <?php echo e($data->jenis_kelamin=='laki-laki' ? 'selected' : ''); ?>>Perempuan</option>
                          </select>
                    </div>
                    <?php if ($errors->has('jenis_kelamin')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('jenis_kelamin'); ?>
                    <br>
                    <span>
                        <?php echo e(ucwords($message)); ?>

                    </span>
                    <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                    <br>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                    <textarea class="form-control" id="alamat" rows="3" name="alamat"><?php echo e($data->alamat); ?></textarea>
                      </div>
                    <?php if ($errors->has('alamat')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('alamat'); ?>
                    <br>
                    <span>
                        <?php echo e(ucwords($message)); ?>

                    </span>
                    <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                    <br>
                    <div class="form-group">
                        <label class="small mb-1" for="pekerjaan">Pekerjaan</label>
                        <input class="form-control py-4" id="pekerjaan" type="text" placeholder="Pekerjaan" name="pekerjaan" value="<?php echo e($data->pekerjaan); ?>"/>
                    </div>
                    
                    <?php if ($errors->has('pekerjaan')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('pekerjaan'); ?>
                    <br>
                    <span>
                        <?php echo e(ucwords($message)); ?>

                    </span>
                    <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                    <br>
                    <button class="btn btn-primary" type="submit">Submit</button>
                </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\ppl-agro-main\ppl-agro-main\resources\views/admin/petani/edit.blade.php ENDPATH**/ ?>