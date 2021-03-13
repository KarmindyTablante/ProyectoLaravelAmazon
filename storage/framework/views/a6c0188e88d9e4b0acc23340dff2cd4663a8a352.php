

<?php $__env->startSection('content'); ?>
<div class="container">

             
    <br>
    <h2>Listado De Categorias Registradas <a href="categorias/create"><button type="button" style="    background: #17202A;border-color: #F1C40F;color: #F1C40F;"  class="btn btn-success float-right"><i class="fa fa-plus"></i>&nbsp;&nbsp;&nbsp;Agregar Categoria</button></a></h2> <br>
    <h6>

    </h6>
    <table class="table">  
      <thead>
        <tr>
          <th scope="col">N°</th>
          <th scope="col">Nombre</th>
          <th scope="col">Descripción</th>
          <th scope="col">Condicion</th>
          <th scope="col">Opciones</th>
        </tr>
      </thead>
      <tbody>
      <?php $__currentLoopData = $categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
          <td><?php echo e($categoria->id); ?></td>
          <td><?php echo e($categoria->nombre); ?></td>
          <td><?php echo e($categoria->descripcion); ?></td>
          <td><?php echo e($categoria->condicion); ?></td>
          <td>
            <form action="<?php echo e(route('categorias.destroy', $categoria->id)); ?>" method="POST">
                <a title="Ver" href="<?php echo e(route('categorias.show', $categoria->id)); ?>"><button type="button" class="btn btn-secondary btn-sm"><i class="far fa-eye"></i></button></a>
                <a title="Editar" href="<?php echo e(route('categorias.edit', $categoria->id)); ?>"><button type="button" style="background: #F1C40F;border-color: #F1C40F;" class="btn btn-primary btn-sm"><i class="far fa-edit"></i></button></a>
                <?php echo method_field('DELETE'); ?>
                <?php echo csrf_field(); ?> 
                <a title="Eliminar" href="<?php echo e(route('categorias.destroy', $categoria->id)); ?>"><button type="submit"  style="    background: #17202A; border-color: #17202A;" onclick="return confirm('Seguro que desea borrar esta categoria?'); " class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i></button></a>
            </form>

          </td>
        </tr>
      </tbody>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
    <div class="row">
      <div class="mx-auto">
      </div>
    </div>
    
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mi-proyecto-laravel\resources\views/categorias/index.blade.php ENDPATH**/ ?>