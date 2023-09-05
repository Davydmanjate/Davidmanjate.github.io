  
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Trabalho PHP</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="<?php echo e(asset('assets/img/favicon.ico')); ?>" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?php echo e(asset('assets/lib/owlcarousel/assets/owl.carousel.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')); ?>" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?php echo e(asset('assets/css/style.css')); ?>" rel="stylesheet">
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sign Up Start -->
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <a href="#" class="">
                                <h5 class="text-primary"><i class="fa fa-user-edit me-2"></i>AAM</h5>
                            </a>
                            <h5>Actualizar Clientes</h5>
                        </div>
                        <?php if(Session::has('success')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(Session::get('success')); ?>

                        </div>
                        <?php endif; ?>
                        <form action="<?php echo e(url('custums.update')); ?>"  method = "post">
                            <?php echo csrf_field(); ?>
                            <input type="hidden" name="id" value="<?php echo e($data->id); ?>">
                            <div class="form-floating mb-3">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Nome" autofocus value="<?php echo e($data->name); ?>">
                                <label for="floatingText">Nome</label>
                                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="alert alert-danger" role="alert"><?php echo e($message); ?></div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com" value="<?php echo e($data->email); ?>">
                                <label for="floatingInput">E-mail</label>
                                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="alert alert-danger" role="alert"><?php echo e($message); ?></div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="text" name="telefone" class="form-control" id="telefone" placeholder="name@example.com" value="<?php echo e($data->telefone); ?>">
                                <label for="floatingInput">Telefone</label>
                                <?php $__errorArgs = ['telefone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="alert alert-danger" role="alert"><?php echo e($message); ?></div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            <div class="form-floating mb-4">
                                <input type="password" name="password" class="form-control" id="Apassword" placeholder="Password" value="<?php echo e($data->password); ?>">
                                <label for="floatingPassword">Senha</label>
                                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="alert alert-danger" role="alert"><?php echo e($message); ?></div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            <button type="submit" class="btn btn-primary py-3 w-100 mb-4" name = "Enviar">Guardar</button>
                            <a href="<?php echo e(url('custums.index')); ?>" class="btn btn-success">Back</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign Up End -->
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo e(asset('assets/lib/chart/chart.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/lib/easing/easing.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/lib/waypoints/waypoints.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/lib/owlcarousel/owl.carousel.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/lib/tempusdominus/js/moment.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/lib/tempusdominus/js/moment-timezone.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')); ?>"></script>

    <!-- Template Javascript -->
    <script src="<?php echo e(asset('assets/js/main.js')); ?>"></script>
</body>

</html><?php /**PATH C:\xampp\htdocs\Vamos\AAMs\resources\views/custums/edit.blade.php ENDPATH**/ ?>