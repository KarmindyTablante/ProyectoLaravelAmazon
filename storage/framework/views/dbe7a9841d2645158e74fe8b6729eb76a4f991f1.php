<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title>Tuscomprashoy</title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
    <script src="<?php echo e(asset('dist/js/adminlte.js')); ?>"></script>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?php echo e(asset('plugins/fontawesome-free/css/all.min.css')); ?>">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <!-- Styles -->
    <link href="<?php echo e(asset('dist/css/adminlte.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <style type="text/css">
        .row {
            display: flex;
            flex-wrap: wrap;
            margin-right: -17px;
            margin-left: 6px;
        }

        .card {
            height: 330px;
        }

        .icheck-primary {
            margin-left: 8px;
        }
        input#remember {
            content: "";
            display: inline-block;
            position: absolute;
            width: 22px;
            height: 22px;
            border: 1px solid #D3CFC8;
            border-radius: 0;
            margin-left: -29px;
        }

        .rememberme{
            margin-top: 5px;
        }
        .boton{
          background: #F1C40F;
          color: black;
          border-color: #000;
        }

          .boton:hover{
          background: #F4D03F;
          color: grey;
          border-color: grey;
        }
        .ne{
          
          color: black;
          border-color: black;
        }
        .ne:hover{
          
          color: black;
          border-color: black;
        }
    </style>
</head>

<body class="hold-transition login-page" >
    <div class="login-box">
  <div class="login-logo">
    <img src="<?php echo e(asset('dist/img/TusComprasHoyLogo.png')); ?>" alt="TusComprasHoy Logo" style="width:200px;">
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg" style="color:black;font-weight: 5px;">Inicia sesión para comenzar</p>

        <form method="POST" action="<?php echo e(route('login')); ?>">
        <?php echo csrf_field(); ?>

            <div class="input-group mb-3">
              <input id="email" type="email" placeholder="Correo electrónico" class="form-control ne <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus>

            
              <div class="input-group-append">
                <div class="input-group-text ne">
                  <span class="fas fa-envelope" style="color:#F1C40F; "></span>
                </div>
              </div>

            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="invalid-feedback" role="alert" >
                    <strong><?php echo e($message); ?></strong>
                 </span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>


            <div class="input-group mb-3">
              <input id="password" type="password" class="form-control ne <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" placeholder="Contraseña" required autocomplete="current-password">

             <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                 <span class="invalid-feedback" role="alert">
                    <strong><?php echo e($message); ?></strong>
                </span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
              <div class="input-group-append">
                <div class="input-group-text ne">
                  <span class="fas fa-lock" style="color:#F1C40F; " ></span>
                </div>
              </div>
            </div>


            <div class="row">
              <div class="col-8">
                <div class="icheck-primary">
                 <input class="form-check-input" type="checkbox" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>
                  <label class="rememberme" for="remember">
                    Recuérdame
                  </label>
                </div>
              </div>
              <!-- /.col -->
              <div class="col-4">
                <button type="submit" class="btn btn-primary btn-block boton">Iniciar</button>
                  <p class="mb-1">
              </div> <br>
              <!-- /.col -->
              <!--   <?php if(Route::has('password.request')): ?>
                                <br><a class="btn btn-link" href="<?php echo e(route('password.request')); ?>">
                                    <?php echo e(__('Olvidé mi contraseña')); ?>

                                </a>
                    <?php endif; ?>
                  </p> -->
            </div>
        </form>

      <!-- /.social-auth-links -->

      
    <!--   <p class="mb-0">
        <a href="register.html" class="text-center">Regístrate</a>
      </p> -->
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
</body>

</html>




            

                <?php /**PATH C:\xampp\htdocs\mi-proyecto-laravel\resources\views/auth/login.blade.php ENDPATH**/ ?>