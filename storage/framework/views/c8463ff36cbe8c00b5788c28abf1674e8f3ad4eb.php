

<?php $__env->startSection('content'); ?>

	
<div class="container">
	<h2>Editar La Categoria: <?php echo e($categoria->nombre); ?></h2><br>
	<form action="<?php echo e(route('categorias.destroy', $categoria->id)); ?>" method="POST" enctype="multipart/form-data">
	<?php echo e(csrf_field()); ?>

	  <?php echo csrf_field(); ?>
	 	   <?php echo method_field('PATCH'); ?>

		<div class="row">
		    <div class="col">
		      <div class="form-group">
							<label for="nombres">Nombre</label>
							<input type="text" class="form-control" name="nombre" placeholder="Ingrese Nombre De La Categoria" value="<?php echo e($categoria->nombre); ?>">
						</div>
						<div class="form-group">
							<label for="descripcion">Descripción</label>
							<input type="text" class="form-control" name="descripcion" placeholder="Ingrese Descripción De La Categoria" value="<?php echo e($categoria->descripcion); ?>">
						</div>
						<div class="form-group">
							<label for="condicion">Condición</label>
							<input type="text" class="form-control" name="condicion" placeholder="Ingrese Condición De La Categoria" value="<?php echo e($categoria->condicion); ?>">
						</div>
						<!-- <div class="form-group">
					    	<label for="password">Contraseña</label>
					    	<input type="password" class="form-control" name="password" placeholder="Ingrese contraseña">
					  	</div>	 -->
					  	
		    </div>
		 
		</div>
		<br>
  		<center><button type="submit" class="btn btn-primary">Editar</button>
  		<button type="reset" class="btn btn-danger">Cancelar</button></center>
    </form> <br>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mi-proyecto-laravel\resources\views/categorias/edit.blade.php ENDPATH**/ ?>