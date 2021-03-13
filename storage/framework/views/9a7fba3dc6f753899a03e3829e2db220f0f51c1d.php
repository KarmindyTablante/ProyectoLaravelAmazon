

<?php $__env->startSection('content'); ?>

	
<div class="container">
	<h2>Registro De Articulos</h2><br>
	<form action="/articulos" method="POST" enctype="multipart/form-data">
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
							<label for="id_categoria">Categoria</label>
                              <select class="form-control" name="id_categoria">
					    		<option selected disabled>Seleccione</option>
					    		<?php $__currentLoopData = $categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					    		<option value="<?php echo e($categoria->id); ?>"><?php echo e($categoria->nombre); ?></option>
					    		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					    	</select>						
					    </div>
						<div class="form-group">
							<label for="nombre">Nombre</label>
							<input type="text" class="form-control" name="nombre" placeholder="Ingrese Nombre Del Articulo">
						</div>
						<div class="form-group">
							<label for="codigo">Codigo</label>
							<input type="text" class="form-control" name="codigo" placeholder="Ingrese Codigo Del Articulo">
						</div>
						<div class="form-group">
					    	<label for="precio_venta">Precio De Venta</label>
					    	<input type="number" class="form-control" name="precio_venta" placeholder="Ingrese El Precio De Venta Del Articulo">
					  	</div>	
					  	
		    </div>
		    <div class="col">
		      <div class="form-group">
						    <label for="stock">Stock</label>
						    <input type="number" class="form-control" name="stock" placeholder="Ingrese Stock Del Articulo">
					    </div>
					    <div class="form-group">
							<label for="descripcion">Descripción</label>
							<input type="text" class="form-control" name="descripcion" placeholder="Ingrese Descripción Del Articulo">
						</div>
						<div class="form-group">
					    	<label for="condicion">Condición</label>
					    	<input type="text" class="form-control" name="condicion" placeholder="Ingrese Condición Del Articulo">

					    </div>
					    <div class="form-group">
					    	<!-- <label for="password_confirmation">Confirmar Contraseña</label>
					    	<input type="password" class="form-control" name="password_confirmation" placeholder="Confirmar contraseña"> -->
					  </div>
		    </div>
		</div>
		<br>
  		<center><button type="submit" class="btn btn-primary">Registrar</button>
  		<button type="reset" class="btn btn-danger">Cancelar</button></center>
    </form> <br>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mi-proyecto-laravel\resources\views/articulos/create.blade.php ENDPATH**/ ?>