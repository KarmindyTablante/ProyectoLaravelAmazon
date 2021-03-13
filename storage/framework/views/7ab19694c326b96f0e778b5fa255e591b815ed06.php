

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="jumbotron jumbotron-fluid">
	 	<div class="container">
	 	 <h1 class="display-4"><?php echo e($user->name); ?></h1><br>
		  <div class="row">
		    <div class="col"><p class="lead">Nombre: <?php echo e($user->name); ?></p></div>
		    <div class="col"></div>
		    <div class="w-100"> 
		    </div>
		    <div class="col"><p class="lead">Email: <?php echo e($user->email); ?></p></div>
		    <div class="col">
		           
		    </div>
		  </div>
		  <div class="row">
		    <div class="col"><p class="lead">Apellido: <?php echo e($user->apellido); ?></p>

		    </div>
		    <div class="col"> 
		    	<?php if($user->imagen != ''): ?>
		                         	<img src=" <?php echo e(asset('imagenes/'.$user->imagen)); ?>" alt="<?php echo e($user->imagen); ?>" height="50px" width="50px">
		        <?php endif; ?></div>
		    <div class="w-100"> 
		    </div>
		    <div class="col"></div>
		    <div class="col">
		    </div>
		  </div>
		</div><br><br>
		 <center>
                 <input type="button" id="entrar"  style="    background: #17202A;border-color: #F1C40F;color: #F1C40F;" value="Volver"  class="btn btn-primary" onclick="history.back(-1)">        
</center>
	</div>
</div>


<?php $__env->stopSection(); ?>



		    	
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mi-proyecto-laravel\resources\views/usuarios/show.blade.php ENDPATH**/ ?>