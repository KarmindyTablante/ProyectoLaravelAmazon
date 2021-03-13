

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="jumbotron jumbotron-fluid">
	 	<div class="container">
	 	 <h1 class="display-4"><?php echo e($categoria->id); ?></h1><br>
		  <div class="row">
		    <div class="col"><p class="lead">Nombre: <?php echo e($categoria->nombre); ?></p></div>
		    <div class="col"></div>
		    <div class="w-100"> 
		    </div>
		    <div class="col"><p class="lead">Condición: <?php echo e($categoria->condicion); ?></p>
                 <p class="lead">Descripción: <?php echo e($categoria->descripcion); ?></p>
		    </div>
		    <div class="col">
		    	
		    </div>
		  </div>
		  <div class="row">
		    <div class="col"><p class="lead"> </p> 

		    </div>
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
                 <input type="button" id="entrar" value="Volver" style="    background: #17202A;border-color: #F1C40F;color: #F1C40F;"  class="btn btn-primary" onclick="history.back(-1)">        
</center>
	</div>
</div>


<?php $__env->stopSection(); ?>



		    	
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mi-proyecto-laravel\resources\views/categorias/show.blade.php ENDPATH**/ ?>