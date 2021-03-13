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
  </head>

<body class="hold-transition login-page">
    <div class="login-box">
		  <div class="login-logo">
		    <img src="<?php echo e(asset('dist/img/TusComprasHoyLogo.png')); ?>" alt="TusComprasHoy Logo" style="width:200px;">
		  </div>

	       <!-- Main content -->
		    <section class="content">
		      <div class="error-page">
		        <h2 class="headline" style="color: #FFC015;"> 404</h2>

		        <div class="error-content">
		          <h3><i class="fas fa-exclamation-triangle" style="color: #FFC015;"></i> 
					¡Upss! Página no encontrada.</h3>

		          <p>
		          	No pudimos encontrar la página que estabas buscando, por favor verifica que la url esté escrita correctamente.
					Mientras tanto, puede <a href="/" >volver al inicio.</a>
		          </p>

		        </div>
		        <!-- /.error-content -->
		      </div>
		      <!-- /.error-page -->
		    </section>
	    	<!-- /.content -->

	</div>
</body>

</html><?php /**PATH C:\xampp\htdocs\mi-proyecto-laravel\resources\views/errors/404.blade.php ENDPATH**/ ?>