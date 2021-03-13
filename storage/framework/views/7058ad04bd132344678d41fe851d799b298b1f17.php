

<?php $__env->startSection('content'); ?>

	
<div class="container">
	<h2>Editar Articulo: <?php echo e($articulo->nombre); ?></h2><br>
	<form action="<?php echo e(route('articulos.destroy', $articulo->id)); ?>" method="POST" enctype="multipart/form-data">
	<?php echo e(csrf_field()); ?>

	  <?php echo csrf_field(); ?>
	 	   <?php echo method_field('PATCH'); ?>

				<div class="row">
		    <div class="col">
		      <div class="form-group">
							<label for="id_categoria">Categoria</label>
					
                               <select class="form-control" name="id_categoria">
						    		<option selected disabled>Seleccione</option>
						    				     <?php 

											//------------------------------------
											//conexion con la base de datos
											$conexion = new mysqli("localhost","root","","tuscomprashoy");
											mysqli_set_charset($conexion, 'utf8');
											// -----------------------------------
								            $sql="SELECT * FROM categorias73s";
								             $resultado=mysqli_query($conexion, $sql);
								             while ($row=mysqli_fetch_assoc($resultado)) {
								            
      							?>
						    		<option value="<?php echo $row['id']; ?>"><?php echo $row['nombre']; ?></option>
					    			  <?php
					    			 }
					    		 ?>					
					    		 </select>	
					    			
								
					    </div>
						<div class="form-group">
							<label for="nombre">Nombre</label>
							<input type="text" class="form-control" name="nombre" placeholder="Ingrese Nombre Del Articulo" value="<?php echo e($articulo->nombre); ?>">
						</div>
						<div class="form-group">
							<label for="codigo">Codigo</label>
							<input type="text" class="form-control" name="codigo" placeholder="Ingrese Codigo Del Articulo" value="<?php echo e($articulo->codigo); ?>">
						</div>
						<div class="form-group">
					    	<label for="precio_venta">Precio De Venta</label>
					    	<input type="number" class="form-control" name="precio_venta" placeholder="Ingrese El Precio De Venta Del Articulo" value="<?php echo e($articulo->precio_venta); ?>">
					  	</div>	
					  	
		    </div>
		    <div class="col">
		      <div class="form-group">
						    <label for="stock">Stock</label>
						    <input type="number" class="form-control" name="stock" placeholder="Ingrese Stock Del Articulo" value="<?php echo e($articulo->stock); ?>">
					    </div>
					    <div class="form-group">
							<label for="descripcion">Descripción</label>
							<input type="text" class="form-control" name="descripcion" placeholder="Ingrese Descripción Del Articulo" value="<?php echo e($articulo->descripcion); ?>">
						</div>
						<div class="form-group">
					    	<label for="condicion">Condición</label>
					    	<input type="text" class="form-control" name="condicion" placeholder="Ingrese Condición Del Articulo" value="<?php echo e($articulo->condicion); ?>">

					    </div>
					    <div class="form-group">
					    	<!-- <label for="password_confirmation">Confirmar Contraseña</label>
					    	<input type="password" class="form-control" name="password_confirmation" placeholder="Confirmar contraseña"> -->
					  </div>
		    </div>
		</div>
		<br>
  		<center><button type="submit" class="btn btn-primary">Editar</button>
  		<button type="reset" class="btn btn-danger">Cancelar</button></center>
    </form> <br>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mi-proyecto-laravel\resources\views/articulos/edit.blade.php ENDPATH**/ ?>