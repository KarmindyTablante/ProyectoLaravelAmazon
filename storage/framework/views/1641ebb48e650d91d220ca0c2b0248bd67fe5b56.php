

<?php $__env->startSection('content'); ?>
<div class="container">

                
    <br>
    <h2>Listado de usuarios administradores registrados <a href="usuarios/create"><button  style="    background: #17202A;border-color: #F1C40F;color: #F1C40F;" type="button" class="btn btn-success float-right">Agregar usuario</button></a></h2> <br>
    <h6>
    
    </h6>
    <table class="table">  
      <thead>
        <tr>
          <th scope="col">N°</th>
          <th scope="col">Nombre</th>
          <th scope="col">Email</th>
          <th scope="col">Imagen</th>
          <th scope="col">Opciones</th>
        </tr>
      </thead>
      <tbody>
        <?php $__currentLoopData = $usuarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
          <th scope="row"><?php echo e($user->id); ?></th>
          <td><?php echo e($user->name); ?></td>
          <td><?php echo e($user->email); ?></td>
          
           <td>
            <img src=" <?php echo e(asset('imagenes/'.$user->imagen)); ?>" alt="<?php echo e($user->imagen); ?>" height="50px" width="50px">
          </td>
          <td>
            <form action="<?php echo e(route('usuarios.destroy', $user->id)); ?>" method="POST">
                <a title="Ver" href="<?php echo e(route('usuarios.show', $user->id)); ?>"><button type="button" class="btn btn-secondary btn-sm"><i class="far fa-eye"></i></button></a>
                <a title="Editar" href="<?php echo e(route('usuarios.edit', $user->id)); ?>"><button type="button" style="background: #F1C40F;border-color: #F1C40F;" class="btn btn-primary btn-sm"><i class="far fa-edit"></i></button></a>
                <?php echo method_field('DELETE'); ?>
                <?php echo csrf_field(); ?> 
                <a title="Eliminar" href="<?php echo e(route('usuarios.destroy', $user->id)); ?>"><button type="submit" style="    background: #17202A; border-color: #17202A;" class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i></button></a>
            </form>
          </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </tbody>
    </table>
    <div class="row">
      <div class="mx-auto">
        <?php echo e($usuarios->links()); ?>

      </div>
    </div>
    
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mi-proyecto-laravel\resources\views/usuarios/index.blade.php ENDPATH**/ ?>