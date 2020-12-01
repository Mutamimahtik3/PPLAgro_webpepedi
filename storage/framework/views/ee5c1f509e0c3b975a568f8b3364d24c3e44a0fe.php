<?php $__env->startSection('title-body','Buat Akun'); ?>
<?php $__env->startSection('content'); ?>
<div class="card-body">
    <form method="POST" action="<?php echo e(route('register')); ?>">
    <?php echo csrf_field(); ?>
        <div class="form-group">
            <label class="small mb-1" for="inputLastName">Nama Lengkap</label>
            <input class="form-control py-4" id="inputLastName" type="text" placeholder="Enter full name" name="name" / value="<?php echo e(old('name')); ?>">
            <?php if ($errors->has('name')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('name'); ?>
            <label class="small mb-1 text-danger">
                <?php echo e(ucwords($message)); ?>

            </label>
            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
        </div>
        <div class="form-group">
            <label class="small mb-1" for="inputEmailAddress">Email</label>
            <input class="form-control py-4" name="email" id="inputEmailAddress" type="email" aria-describedby="emailHelp" placeholder="Enter email address" value="<?php echo e(old('email')); ?>" />
            <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?>
            <label class="small mb-1 text-danger">
                <?php echo e(ucwords($message)); ?>

            </label>
            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
        </div>
        <div class="form-row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="small mb-1" for="inputPassword">Password</label>
                    <input class="form-control py-4" id="inputPassword" type="password" placeholder="Enter password" name="password" />
                    <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?>
                    <label class="small mb-1 text-danger">
                        <?php echo e(ucwords($message)); ?>

                    </label>
                    <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="small mb-1" for="inputConfirmPassword">Confirm Password</label>
                    <input class="form-control py-4" id="inputConfirmPassword" type="password" placeholder="Confirm password" name="password_confirmation" />
                    <?php if ($errors->has('confirmation_password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('confirmation_password'); ?>
                    <label class="small mb-1 text-danger">
                        <?php echo e(ucwords($message)); ?>

                    </label>
                    <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                </div>
            </div>
        </div>
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
            <textarea class="form-control" id="alamat" rows="3" name="alamat"><?php echo e(old('alamat')); ?></textarea>
            <?php if ($errors->has('alamat')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('alamat'); ?>
            <label class="small mb-1 text-danger">
                <?php echo e(ucwords($message)); ?>

            </label>
            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
          </div>
        <div class="form-group">
            <label class="small mb-1" for="nohp">Nomor HP</label>
            <input class="form-control py-4" name="nohp" id="nohp" type="number" aria-describedby="emailHelp" placeholder="Masukkan Nomor HP" value="<?php echo e(old('nohp')); ?>"/>
            <?php if ($errors->has('nohp')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('nohp'); ?>
            <label class="small mb-1 text-danger">
                <?php echo e(ucwords($message)); ?>

            </label>
            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
        </div>
        <div class="form-group">
            <label class="small mb-1" for="pekerjaan">Pekerjaan</label>
            <input class="form-control py-4" id="pekerjaan" type="text" aria-describedby="emailHelp" placeholder="Masukkan Pekerjaan" name="pekerjaan" value="<?php echo e(old('pekerjaan')); ?>"/>
            <?php if ($errors->has('pekerjaan')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('pekerjaan'); ?>
            <label class="small mb-1 text-danger">
                <?php echo e(ucwords($message)); ?>

            </label>
            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
        </div>
        <div class="form-group mt-4 mb-0"><button class="btn btn-primary btn-block" type="submit">Create Account</button></div>
    </form>
</div>
<div class="card-footer text-center">
    <div class="small"><a href="login.html">Have an account? Go to login</a></div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('auth.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\ppl-agro-main\ppl-agro-main\resources\views/auth/register.blade.php ENDPATH**/ ?>