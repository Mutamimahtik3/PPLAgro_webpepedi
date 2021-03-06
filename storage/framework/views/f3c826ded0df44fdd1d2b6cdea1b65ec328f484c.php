<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
<title>Daftar | PEPEDI</title>

<!-- General CSS Files -->
<link rel="stylesheet" href="<?php echo e(asset('../assets/modules/bootstrap/css/bootstrap.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('../assets/modules/fontawesome/css/all.min.css')); ?>">

<!-- CSS Libraries -->
<link rel="stylesheet" href="<?php echo e(asset('../assets/modules/jquery-selectric/selectric.css')); ?>">

<!-- Template CSS -->
<link rel="stylesheet" href="<?php echo e(asset('../assets/css/style.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('../assets/css/components.css')); ?>">
<!-- Start GA -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());

gtag('config', 'UA-94034622-3');
</script>
<!-- /END GA --></head>

<body>
    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
                        <div class="login-brand">
                            <img src="<?php echo e(asset('../assets/img/stisla-fill.svg')); ?>" alt="logo" width="100">
                        </div>

                        <div class="card card-primary">
                            <div class="card-header"><h4>Registrasi</h4></div>

                            <div class="card-body">
                                <form method="POST" action="<?php echo e(route('register')); ?>">
                                    <?php echo csrf_field(); ?>
                                    <div class="row">
                                        <div class="form-group col-12">
                                            <label for="name">Nama Lengkap</label>
                                            <input id="name" type="text" class="form-control <?php if ($errors->has('name')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('name'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="name" value="<?php echo e(old('name')); ?>" autofocus required>
                                            <?php if ($errors->has('name')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('name'); ?>
                                                <span class="invalid-feedback" role="alert">
                                                    <strong><?php echo e($message); ?></strong>
                                                </span>
                                            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                        </div>
                                        <div class="form-group col-12">
                                            <label for="username">Username</label>
                                            <input id="username" type="text" class="form-control <?php if ($errors->has('username')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('username'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" value="<?php echo e(old('username')); ?>" name="username" required>
                                            <?php if ($errors->has('username')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('username'); ?>
                                                <span class="invalid-feedback" role="alert">
                                                    <strong><?php echo e($message); ?></strong>
                                                </span>
                                            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-12">
                                            <label for="email">Email</label>
                                            <input id="email" type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" required>
                                            <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?>
                                                <span class="invalid-feedback" role="alert">
                                                    <strong><?php echo e($message); ?></strong>
                                                </span>
                                            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                        </div>
                                    <div class="row">
                                        <div class="form-group col-6">
                                            <label for="password" class="d-block">Password</label>
                                            <input id="password" type="password" class="form-control pwstrength <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" data-indicator="pwindicator" name="password" required>
                                            <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?>
                                                <span class="invalid-feedback" role="alert">
                                                    <strong><?php echo e($message); ?></strong>
                                                </span>
                                            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                            <div id="pwindicator" class="pwindicator">
                                            <div class="bar"></div>
                                            <div class="label"></div>
                                            </div>
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="password-confirm" class="d-block">Konfirmasi Password</label>
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-12">
                                            <label for="noHp" class="d-block">Nomor HP</label>
                                            <input id="noHp" type="text" class="form-control <?php if ($errors->has('noHp')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('noHp'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="noHp" value="<?php echo e(old('noHp')); ?>" required>
                                            <?php if ($errors->has('noHp')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('noHp'); ?>
                                                <span class="invalid-feedback" role="alert">
                                                    <strong><?php echo e($message); ?></strong>
                                                </span>
                                            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                        </div>
                                        <div class="form-group col-12">
                                            <label for="jenisKelamin" class="d-block mb-3">Jenis Kelamin</label>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="jenisKelamin" id="exampleRadios1" value="2" checked>
                                                <label class="form-check-label" for="exampleRadios1">
                                                    Laki-laki
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="jenisKelamin" id="exampleRadios2" value="3">
                                                <label class="form-check-label" for="exampleRadios2">
                                                    Perempuan
                                                </label>
                                            </div>
                                            <div>
                                                <?php if ($errors->has('jenisKelamin')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('jenisKelamin'); ?>
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong><?php echo e($message); ?></strong>
                                                    </span>
                                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                            </div>
                                        </div>
                                        <div class="form-group col-12">
                                            <label for="role" class="d-block mb-3">Pilih Akun Anda</label>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="role" id="exampleRadios1" value="2" checked>
                                                <label class="form-check-label" for="exampleRadios1">
                                                    Petani
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="role" id="exampleRadios2" value="3">
                                                <label class="form-check-label" for="exampleRadios2">
                                                    Konsultan
                                                </label>
                                            </div>
                                            <div>
                                                <?php if ($errors->has('role')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('role'); ?>
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong><?php echo e($message); ?></strong>
                                                    </span>
                                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-12">
                                        <label for="alamat">Alamat</label>
                                        <input id="alamat" type="alamat" class="form-control" name="alamat" value="<?php echo e(old('alamat')); ?>" required>
                                        <?php if ($errors->has('alamat')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('alamat'); ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($message); ?></strong>
                                            </span>
                                        <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" id="register" class="btn btn-info btn-lg btn-block">
                                            Simpan
                                        </button>
                                    </div>
                                    <div class="form-group">
                                        <a href="<?php echo e(route('login')); ?>" class="btn btn-danger btn-lg btn-block">Batal</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

<!-- General JS Scripts -->
<script src="<?php echo e(asset('../assets/modules/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('../assets/modules/popper.js')); ?>"></script>
<script src="<?php echo e(asset('../assets/modules/tooltip.js')); ?>"></script>
<script src="<?php echo e(asset('../assets/modules/bootstrap/js/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(asset('../assets/modules/nicescroll/jquery.nicescroll.min.js')); ?>"></script>
<script src="<?php echo e(asset('../assets/modules/moment.min.js')); ?>"></script>
<script src="<?php echo e(asset('../assets/js/stisla.js')); ?>"></script>

<!-- JS Libraies -->
<script src="<?php echo e(asset('../assets/modules/jquery-pwstrength/jquery.pwstrength.min.js')); ?>"></script>
<script src="<?php echo e(asset('../assets/modules/jquery-selectric/jquery.selectric.min.js')); ?>"></script>

<!-- Page Specific JS File -->
<script src="<?php echo e(asset('../assets/js/page/auth-register.js')); ?>"></script>

<!-- Template JS File -->
<script src="<?php echo e(asset('../assets/js/scripts.js')); ?>"></script>
<script src="<?php echo e(asset('../assets/js/custom.js')); ?>"></script>
</body>
</html>
<?php /**PATH D:\pepedi\resources\views/auth/register.blade.php ENDPATH**/ ?>