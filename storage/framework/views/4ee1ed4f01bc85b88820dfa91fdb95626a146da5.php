

<?php $__env->startSection('content'); ?>

	
<div class="container">
	<h2>Registro de Categorias</h2><br>
	<form action="/categorias" method="POST" enctype="multipart/form-data">
	<?php echo e(csrf_field()); ?>

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
							<label for="nombres">Nombre</label>
							<input type="text" class="form-control" name="nombre" placeholder="Ingrese Nombre De La Categoria">
						</div>
						<div class="form-group">
							<label for="descripcion">Descripción</label>
							<input type="text" class="form-control" name="descripcion" placeholder="Ingrese Descripción De La Categoria">
						</div>
						<div class="form-group">
							<label for="condicion">Condición</label>
							<input type="text" class="form-control" name="condicion" placeholder="Ingrese Condición De La Categoria">
						</div>
						<!-- <div class="form-group">
					    	<label for="password">Contraseña</label>
					    	<input type="password" class="form-control" name="password" placeholder="Ingrese contraseña">
					  	</div>	 -->
					  	
		    </div>
		 
		</div>
		<br>
  		<center><button type="submit" class="btn btn-primary">Registrar</button>
  		<button type="reset" class="btn btn-danger">Cancelar</button></center>
    </form> <br>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mi-proyecto-laravel\resources\views/categorias/create.blade.php ENDPATH**/ ?>