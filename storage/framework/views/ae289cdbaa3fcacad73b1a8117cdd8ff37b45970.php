

<?php $__env->startSection('content'); ?>

	
<div class="container">
	<h2>Realizar Nueva Venta</h2><br>
	<form action="<?php echo e(url('detalles')); ?>" method="GET" enctype="multipart/form-data">
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
							<label for="nombre">Cliente</label>
	  							<select class="form-control" name="id_persona" required="required">
						    		<option selected disabled>Seleccione</option>
						    		<?php $__currentLoopData = $personas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $persona): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						    		<option value="<?php echo e($persona->id); ?>"><?php echo e($persona->Nombre); ?></option>
						    		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						    	</select>						
					    </div>
						<div class="form-group">
						
						    </div>
						<div class="form-group">
							
						</div>
						<div class="form-group">
					    	
					  	</div>	
					  	
		    </div>
		    <div class="col">
		      <div class="form-group">
						    <label for="telefono">Categoria</label>
								<select class="form-control" name="id_categoria" required="required">
						    		<option selected disabled>Seleccione</option>
						    		<?php $__currentLoopData = $categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						    		<option value="<?php echo e($categoria->id); ?>"><?php echo e($categoria->nombre); ?></option>
						    		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						    	</select>
						    </div>
					    <div class="form-group">
							
						</div>
						<div class="form-group">
						
					    	<!-- <label for="correo">Correo</label>
					    	<input type="text" class="form-control" name="correo" placeholder="Ingrese Correo Del Cliente"> -->

					    </div>
					    <div class="form-group">
					    	<!-- <label for="password_confirmation">Confirmar Contraseña</label>
					    	<input type="password" class="form-control" name="password_confirmation" placeholder="Confirmar contraseña"> -->
					  </div>
		    </div>
		</div>
		<br>
  		<center><button type="submit" class="btn btn-primary">Siguiente</button>
  		<button type="reset" class="btn btn-danger">Cancelar</button></center>
    </form> <br>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mi-proyecto-laravel\resources\views/ventas/create.blade.php ENDPATH**/ ?>