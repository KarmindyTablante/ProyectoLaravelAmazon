

<?php $__env->startSection('content'); ?>

	
<div class="container">
	<h2>Registro de usuarios administradores</h2><br>
	<form action="/usuarios" method="POST" enctype="multipart/form-data">
	  <?php echo csrf_field(); ?>
	  	<div class="row">
	  		<div class="col-sm-6">
	  			<?php if($errors->any()): ?>
		  			<div class="alert alert-danger">
		  				<ul>
		  					<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		  					<li><?php echo e($error); ?></li>
		  					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		  				</ul> 
		  			</div>
	  			<?php endif; ?>
	  		</div>
	  	</div>

		<div class="row">
		    <div class="col">
		      <div class="form-group">
							<label for="nombres">Nombres</label>
							<input type="text" class="form-control" name="name" placeholder="Ingrese nombres">
						</div>
						<div class="form-group">
							<label for="dni">Identificación</label>
							<input type="number" class="form-control" name="dni" placeholder="Ingrese identificación">
						</div>
						<div class="form-group">
							<label for="email">Email/Usuario</label>
							<input type="email" class="form-control" name="email" placeholder="Ingrese Email">
						</div>
						<div class="form-group">
					    	
					  	</div>	
					  	
		    </div>
		    <div class="col">
		      <div class="form-group">
						    <label for="apellidos">Aplellidos</label>
						    <input type="text" class="form-control" name="apellido" placeholder="Ingrese apellidos">
					    </div>
					    <div class="form-group">
							<label for="telefono">Celular</label>
							<input type="number" class="form-control" name="telefono" placeholder="Ingrese número de celular">
						</div>
						<div class="form-group">
					    	
					    </div>
					    <div class="form-group">
					    	<label for="password">Contraseña</label>
					    	<input type="password" class="form-control" name="password" placeholder="Ingrese contraseña">
					  </div>
		    </div>
		</div>
		<br>
  		<center><button type="submit" class="btn btn-primary">Registrar</button>
  		<button type="reset" class="btn btn-danger">Cancelar</button></center>
    </form> <br>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mi-proyecto-laravel\resources\views/usuarios/create.blade.php ENDPATH**/ ?>