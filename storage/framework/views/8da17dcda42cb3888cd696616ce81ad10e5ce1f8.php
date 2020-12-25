<?php $__env->startSection('content'); ?>
<div class="card-body">
    <div class="table-responsive">
        <form action="<?php echo e(route('a.petani.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>
                
                <div class="form-group">
                    <label class="small mb-1" for="name">Nama Lengkap</label>
                <input class="form-control py-4" id="name" type="text" placeholder="Nama Lengkap" name="name" value="<?php echo e(old('name')); ?>"/>
                </div>
                <?php if ($errors->has('name')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('name'); ?>
                
                <span>
                    <?php echo e(ucwords($message)); ?>

                </span>
                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                
        
                <div class="form-group">
                    <label class="small mb-1" for="inputEmailAddress">Email</label>
                <input class="form-control py-4" id="inputEmailAddress" type="email" placeholder="Email" name="email" value="<?php echo e(old('email')); ?>"/>
                </div>
                <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?>
                
                <span>
                    <?php echo e(ucwords($message)); ?>

                </span>
                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                
                
                <div class="form-group">
                    <label class="small mb-1" for="pass">Password</label>
                <input class="form-control py-4" id="pass" type="password" placeholder="Password" name="password"/>
                </div>
                <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?>
                
                <span>
                    <?php echo e(ucwords($message)); ?>

                </span>
                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                
        
                <div class="form-group">
                    <label class="small mb-1" for="password_confirmation">Ulangi Password</label>
                    <input class="form-control py-4" id="password_confirmation" type="password" placeholder="password confirmation" name="password_confirmation"/>
                </div>
                <?php if ($errors->has('password_confirmation')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password_confirmation'); ?>
                <span>
                    <?php echo e(ucwords($message)); ?>

                </span>
                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                
                <div class="form-group">
                    <label class="small mb-1" for="pekerjaan">Pekerjaan</label>
                    <input class="form-control py-4" id="pekerjaan" type="text" placeholder="Pekerjaan" name="pekerjaan" value="<?php echo e(old('pekerjaan')); ?>"/>
                </div>
                <?php if ($errors->has('pekerjaan')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('pekerjaan'); ?>
                <span>
                    <?php echo e(ucwords($message)); ?>

                </span>
                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                <div class="form-group">
                    <label class="small mb-1" for="nohp">No HP</label>
                    <input class="form-control py-4" id="nohp" type="text" placeholder="No HP" name="nohp" value="<?php echo e(old('nohp')); ?>"/>
                </div>
                <?php if ($errors->has('nohp')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('nohp'); ?>
                
                <span>
                    <?php echo e(ucwords($message)); ?>

                </span>
                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                

                <div class="form-group">
                    <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="jenis_kelamin">
                        <option disabled selected>Pilih Jenis Kelamin</option>
                        <option value="laki-laki">Laki Laki</option>
                        <option value="perempuan">Perempuan</option>
                    </select>
                    <?php if ($errors->has('jenis_kelamin')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('jenis_kelamin'); ?>
                    <label class="small mb-1 text-danger">
                        <?php echo e(ucwords($message)); ?>

                    </label>
                    <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                </div>
                
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                <textarea class="form-control" id="alamat" rows="3" name="alamat"cols="30" rows="10"><?php echo e(old('alamat')); ?></textarea>
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
                <button class="btn btn-primary" type="submit">Submit</button>
            </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\ppl-agro-main\resources\views/admin/petani/create.blade.php ENDPATH**/ ?>