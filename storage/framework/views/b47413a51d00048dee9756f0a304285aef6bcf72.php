

<?php $__env->startSection('content'); ?>

	
<div class="container">
	<h2> Mis Compras</h2><br>
	<form action="../ventas" method="GET" enctype="multipart/form-data">
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
		<table class="table">  
      <thead>
        <tr>
          <th scope="col">N° de venta</th>
          <th scope="col">Articulo</th>
          <th scope="col">Cantidad</th>
          <th scope="col">Precio</th>
          <th scope="col">Total</th>
         


        </tr>
      </thead>
              <?php  
                                           extract($_REQUEST);
                                               $conexion = new mysqli("localhost","root","","carrito");
                                               mysqli_set_charset($conexion, 'utf8');
                                               $id=Auth::user()->id;
                                                $sql="SELECT * FROM detalles73s WHERE detalles73s.id_usuario='$id'";
                                                $resultado=mysqli_query($conexion, $sql);
                                               $num=1; 
                                                while($row=mysqli_fetch_assoc($resultado)) 
                                                 {
                                                  
                                             
     ?>
      <tbody>

      	 <tr>
          <td><?php echo $num; ?></td>
          <td><?php echo $row['nombre']; ?></td>
          <td><?php echo $row['cantidad']; ?></td>
          <td><?php echo $row['precio']; ?></td>
          <td><?php echo $row['total']; ?></td>


        </tr>
      </tbody>
                 <?php 
$num++;
}
      ?>

    </table>
  </div>
		
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mi-proyecto-laravel\resources\views/detallado/create.blade.php ENDPATH**/ ?>