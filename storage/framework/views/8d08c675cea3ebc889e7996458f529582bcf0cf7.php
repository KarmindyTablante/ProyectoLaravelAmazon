

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="jumbotron jumbotron-fluid">
	 	<div class="container">
	 	 <h1 class="display-4"><?php echo e($articulo->id_categoria); ?></h1><br>
		  <div class="row">
		    <div class="col"><p class="lead">Nombre: <?php echo e($articulo->nombre); ?></p><p class="lead">Codigo: <?php echo e($articulo->codigo); ?></p><p class="lead">Stock: <?php echo e($articulo->stock); ?></p></div>
		    <div class="col"></div>
		    <div class="col"></div>
		    <div class="col"></div>
		    <div class="w-100"> 
		    </div>
		    <div class="col"><p class="lead">Precio De Venta: <?php echo e($articulo->precio_venta); ?></p>
           <p class="lead">Precio De Venta: <?php echo e($articulo->precio_venta); ?></p><p class="lead">Condición: <?php echo e($articulo->condicion); ?></p>
		    </div>
		    <div class="col"> 
		    	
		    </div>
		  </div>
		  <div class="row">
		    
		    <div class="col"> 

		      </div>
		    <div class="w-100"> 
		    </div>
		    <div class="col"></div>
		    <div class="col">
		    </div>
		  </div>
		</div>
		 <center>
                 <input type="button" id="entrar" style="    background: #17202A;border-color: #F1C40F;color: #F1C40F;"  value="Volver"  class="btn btn-primary" onclick="history.back(-1)">        
</center>
	</div>
</div>


<?php $__env->stopSection(); ?>



		    	
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mi-proyecto-laravel\resources\views/articulos/show.blade.php ENDPATH**/ ?>