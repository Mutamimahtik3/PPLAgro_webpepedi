<?php $__env->startSection('title-body','Login'); ?>
<?php $__env->startSection('content'); ?>
<div class="card-body">
    <form method="POST" action="<?php echo e(route('login')); ?>">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label class="small mb-1" for="inputEmailAddress">Email</label>
            <input class="form-control py-4" id="inputEmailAddress" name="email" type="" placeholder="Enter email address" />
            <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?>
                <span>
                    <strong><?php echo e($message); ?></strong>
                </span>
            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
        </div>
        <div class="form-group">
            <label class="small mb-1" for="inputPassword">Password</label>
            <input class="form-control py-4" name="password" type="password" placeholder="Enter password" />
            <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?>
                <span>
                    <strong><?php echo e($message); ?></strong>
                </span>
            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
        </div>
        <div class="form-group">
            <div class="custom-control custom-checkbox">
                <input class="custom-control-input" id="rememberPasswordCheck" type="checkbox" />
                <label class="custom-control-label" for="rememberPasswordCheck">Remember password</label>
            </div>
        </div>
        <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
            <a class="small" href="password.html">Forgot Password?</a>
            <button class="btn btn-primary" type="submit">Login</button>
        </div>
    </form>
</div>
<div class="card-footer text-center">
    <div class="small"><a href="register">Belum Punya Akun ? Daftar</a></div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('auth.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\ppl-agro-main\ppl-agro-main\resources\views/auth/login.blade.php ENDPATH**/ ?>