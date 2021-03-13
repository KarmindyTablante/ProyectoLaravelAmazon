

<?php $__env->startSection('content'); ?>
<div class="container">
		<h3>Editar usuario: <?php echo e($user->name); ?></h3> <br>

			<?php if($errors->any()): ?>
			    <div class="alert alert-danger">
			        <ul>
			            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			                <li><?php echo e($error); ?></li>
			            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			        </ul>
			    </div>
			<?php endif; ?>
		    <form action="<?php echo e(route('usuarios.update', $user->id)); ?>" method="POST" enctype="multipart/form-data">
		      <?php echo method_field('PATCH'); ?>
		      <?php echo csrf_field(); ?> 
		      <div class="row">
			    <div class="col">
			      <div class="form-group">
								<label for="nombres">Nombres</label>
								<input type="text" class="form-control" name="name" placeholder="Ingrese nombres" value="<?php echo e($user->name); ?>">
							</div>
							<div class="form-group">
								<label for="dni">Identificación</label>
								<input type="number" class="form-control" name="dni" placeholder="Ingrese identificación" value="<?php echo e($user->dni); ?>">
							</div>
							<div class="form-group">
								<label for="email">Email/Usuario</label>
								<input type="email" class="form-control" name="email" placeholder="Ingrese Email" value="<?php echo e($user->email); ?>">
							</div>
							<div class="form-group">
						    	
						  	</div>	
						  	<div class="input-group">
		                        <div class="custom-file">
		                          <input type="file" class="custom-file-input" id="exampleInputFile" name="imagen">
		                         <label class="custom-file-label" for="exampleInputFile">Selecciona imagen</label>
		                         <?php if($user->imagen != ''): ?>
		                         	<img src=" <?php echo e(asset('imagenes/'.$user->imagen)); ?>" alt="<?php echo e($user->imagen); ?>" height="50px" width="50px">
		                         <?php endif; ?>
		                        </div>
		                    </div>
			    </div>
			    <div class="col">
			      <div class="form-group">
							    <label for="apellidos">Aplellidos</label>
							    <input type="text" class="form-control" name="apellido" placeholder="Ingrese apellidos" value="<?php echo e($user->apellido); ?>">
						    </div>
						    <div class="form-group">
								<label for="telefono">Celular</label>
								<input type="number" class="form-control" name="telefono" placeholder="Ingrese número de celular" value="<?php echo e($user->telefono); ?>">
							</div>
							<div class="form-group">
						    	
							</div>
						    <div class="form-group">
						    	<label for="password">Contraseña <span class="small">(Opcional)</span></label>
						    	<input type="password" class="form-control" name="password" placeholder="Ingrese contraseña">
						  </div>
			    </div>
			</div>
<br><br>
		      <center>
		      	<button type="submit" class="btn btn-primary"  style="    background: #17202A;border-color: #F1C40F;color: #F1C40F;">Guardar cambios</button>
		      </center><br><br>
		  	  
			
			</form>
		</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mi-proyecto-laravel\resources\views/usuarios/edit.blade.php ENDPATH**/ ?>