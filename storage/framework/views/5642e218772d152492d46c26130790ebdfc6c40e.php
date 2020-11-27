<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
<title>Masuk | PEPEDI</title>

<!-- General CSS Files -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

<!-- CSS Libraries -->
<link rel="stylesheet" href="<?php echo e(asset('../node_modules/bootstrap-social/bootstrap-social.css')); ?>">

<!-- Template CSS -->
<link rel="stylesheet" href="<?php echo e(asset('../assets/css/style.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('../assets/css/components.css')); ?>">
</head>

<body>
    <div id="app">
    <section class="section">
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="login-brand">
                <img src="<?php echo e(asset('../assets/img/CP-Logo.png')); ?>" alt="logo" width="100">
            </div>

            <?php if(session()->has('success')): ?>
                <div class="col-md-6">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <?php echo e(session()->get('success')); ?>

                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            <?php endif; ?>

            <div class="card card-primary">
                <div class="card-header"><h4>Masuk</h4></div>

                <div class="card-body">
                    <form method="POST" action="<?php echo e(route('login')); ?>" class="needs-validation" novalidate="">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input id="username" type="text" class="form-control <?php if ($errors->has('username')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('username'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="username" value="<?php echo e(old('username')); ?>" tabindex="1" autofocus>
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

                        <div class="form-group">
                            <div class="d-block">
                                <label for="password" class="control-label">Password</label>
                                <div class="float-right">
                                    <?php if(Route::has('password.request')): ?>
                                        <a class="text-small" href="<?php echo e(route('password.request')); ?>">
                                            Lupa Password?
                                        </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <input id="password" type="password" class="form-control <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="password" value="<?php echo e(old('password')); ?>" tabindex="2">
                            <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                        </div>

                        <?php if(session('message')): ?>
                            <div class="alert alert-danger alert-dismissible show fade">
                                <div class="alert-body">
                                    <button class="close" data-dismiss="alert">
                                        <span>X</span>
                                    </button>
                                    <?php echo e(session('message')); ?>

                                </div>
                            </div>
                        <?php endif; ?>

                        <div class="form-group">
                            <button type="submit" class="btn btn-info btn-lg btn-block" tabindex="4">
                            Masuk
                            </button>
                        </div>
                    </form>
                </div>
                <div class="mt-1 text-muted text-center mb-5">
                    Belum punya akun? <a href="<?php echo e(route('register')); ?>">Registrasi</a>
                </div>
            </div>
            </div>
        </div>
        </div>
    </section>
</div>

<!-- General JS Scripts -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
<script src="<?php echo e(asset('../assets/js/stisla.js')); ?>"></script>

<!-- JS Libraies -->

<!-- Template JS File -->
<script src="<?php echo e(asset('../assets/js/scripts.js')); ?>"></script>
<script src="<?php echo e(asset('../assets/js/custom.js')); ?>"></script>

<!-- Page Specific JS File -->
</body>
</html>
<?php /**PATH D:\pepedi\resources\views/auth/login.blade.php ENDPATH**/ ?>