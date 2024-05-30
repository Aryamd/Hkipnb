<!DOCTYPE html>
<html lang="en">

<head>

    <?php echo $__env->make('layouts.shared/title-meta', ['title' => "Log In"], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('layouts.shared/head-css', ["mode" => $mode ?? '', "demo" => $demo ?? ''], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</head>

<body class="loading authentication-bg authentication-bg-pattern">

    <div class="account-pages mt-5 mb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-4">
                    <div class="card bg-pattern">

                        <div class="card-body p-4">

                            <div class="text-center m-auto">
                                <div class="auth-logo">
                                    <a href="" class="logo logo-dark text-center">
                                        <span class="logo-lg">
                                            <img src="<?php echo e(asset('assets/images/logo_politeknik_negeri_bali.png')); ?>" alt="" height="200">
                                        </span>
                                    </a>

                                    <a href="" class="logo logo-light text-center">
                                        <span class="logo-lg">
                                            <img src="<?php echo e(asset('assets/images/logo_politeknik_negeri_bali.png')); ?>" alt="" height="200">
                                        </span>
                                    </a>
                                </div>
                                <p class="text-muted mb-4 mt-3">Masukkan username dan password Anda.</p>
                            </div>


                            <?php if(session('error')): ?><div class="alert alert-danger"><?php echo e(session('error')); ?></div>
                            <br><?php endif; ?>
                            <?php if(session('success')): ?><div class=" alert alert-success"><?php echo e(session('success')); ?>

                            </div>
                            <br><?php endif; ?>

                            <?php if(sizeof($errors) > 0): ?>
                            <ul>
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li class="text-danger"><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                            <?php endif; ?>

                            <form method="POST" action="<?php echo e(route('login.store')); ?>">
                                <?php echo csrf_field(); ?>

                                <div class="mb-3">
                                    <label for="username" class="form-label">Username</label>
                                    <input class="form-control" name="username" id="username" value="<?php echo e(old('username')); ?>" placeholder="Username" required="required" autofocus>
                                </div>

                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <div class="input-group input-group-merge">
                                        <input class="form-control" type="password" name="password" id="password" value="<?php echo e(old('password')); ?>" placeholder="Password" required="required">
                                        <div class="input-group-text" data-password="false">
                                            <span class="password-eye"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <div class="form-check">
                                        <input type="checkbox" name="remember" class="form-check-input" id="checkbox-signin" checked>
                                        <label class="form-check-label" for="checkbox-signin">Remember me</label>
                                    </div>
                                </div>

                                <div class="text-center d-grid">
                                    <button class="btn btn-primary" type="submit">Sign In</button>
                                </div>

                            </form>

                            

                        </div> <!-- end card-body -->
                    </div>
                    <!-- end card -->

                    <div class="row mt-3">
                        <div class="col-12 text-center">
                            <p><b><a href="" class="text-white ms-1">Forgot your password?</a></b></p>
                            <p class="text-white"><b>Don't have an account? <a href="" class="text-white ms-1">Sign Up</a></b></p>
                        </div> <!-- end col -->
                    </div>
                    <!-- end row -->

                </div> <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end page -->

    <footer class="footer footer-alt text-white">
        2023 - <script>
            document.write(new Date().getFullYear())
        </script> &copy; Politeknik Negeri Bali (PNB)</a>
    </footer>

    <?php echo $__env->make('layouts.shared/footer-script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>

</html>
<?php /**PATH C:\Users\ASUS VIVOBOOK\Downloads\testinglaravel_2 (3)\testinglaravel\resources\views/auth/login.blade.php ENDPATH**/ ?>