

<?php $__env->startSection('content'); ?>
<div class="container" >






    <br>
  <!--   <h2>Ventas<a href="detalles/edit">
    <button style="margin-left:14px;" type="button" class="btn btn-success float-right"><i class="fa fa-plus"></i>&nbsp;&nbsp;&nbsp;Ventas Hechas</button></a> 

    <a href="carrito/create">
    <button type="button" class="btn btn-success float-right"><i class="fa fa-plus"></i>&nbsp;&nbsp;&nbsp;Vender Articulo</button></a></h2>  -->

    <br>
       <?php  
                                           extract($_REQUEST);
                                               $conexion = new mysqli("localhost","root","","carrito");
                                               mysqli_set_charset($conexion, 'utf8');
                                                $sql="SELECT * FROM articulos73s";
                                                $resultado=mysqli_query($conexion, $sql);
                                               $num=1; 
                                                while($row=mysqli_fetch_assoc($resultado)) 
                                                 {
                                                  

     ?>
   <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12" style="max-width: none;" >
                        <div class="card" >
                          <form action="carrito/create" method="GET">
                            <div class="card-header bg-primary text-center p-3 " style="background-color: #1C2833!important;">
                                <h4 class="mb-0 text-white"><?php echo $row['nombre']; ?></h4>
                                <input type="hidden" name="nombre" value="<?php echo $row['nombre']; ?>">
                            </div>
                            <div class="card-body text-center">
                                
                                <img src="<?php echo e(asset('dist/img/bolsa.png')); ?>" alt="TusComprasHoy Logo" class="brand-image img-circle elevation-3"
                        style="opacity: .8"><br>
                                <p>Precio:&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['precio_venta']; ?>$</p>
                                <input type="hidden" name="precio_venta" value="<?php echo $row['precio_venta']; ?>">
                            </div>
                            <div class="card-body border-top">
                                <ul class="list-unstyled bullet-check font-14">
                                    <li><?php echo $row['descripcion']; ?></li>
                                    <input type="hidden" name="descripcion" value="<?php echo $row['descripcion']; ?>">
                                     <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

                                    
                                </ul>
                                <button type="submit" class="btn btn-outline-secondary btn-block btn-lg"> <i class="fas fa-shopping-cart"></i>A??adir Al Carrito</button>
                            </div>
                          </form>
                        </div>
                    </div>
      <?php
                                                       $num++;
                                                        } 
         ?>
  <!--   <table class="table">  
      <thead>
        <tr>
          <th scope="col">N??</th>
          <th scope="col">Nombre</th>
          <th scope="col">Tipo De Documento</th>
          <th scope="col">Numero De Documento</th>
          <th scope="col">Direcci??n</th>
          <th scope="col">Telefono</th>
          <th scope="col">Correo</th>
          <th scope="col">Opciones</th>
        </tr>
      </thead>
      <tbody>
      <?php $__currentLoopData = $ventas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $persona): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
          <td><?php echo e($persona->id); ?></td>
          <td><?php echo e($persona->nombre); ?></td>
          <td><?php echo e($persona->tipo_documento); ?></td>
          <td><?php echo e($persona->num_documento); ?></td>
           <td><?php echo e($persona->direccion); ?></td>
          <td><?php echo e($persona->telefono); ?></td>
          <td><?php echo e($persona->email); ?></td>
          <td>
            <form action="<?php echo e(route('personas.destroy', $persona->id)); ?>" method="POST">
                <a title="Ver" href="<?php echo e(route('personas.show', $persona->id)); ?>"><button type="button" class="btn btn-secondary btn-sm"><i class="far fa-eye"></i></button></a>
                <a title="Editar" href="<?php echo e(route('personas.edit', $persona->id)); ?>"><button type="button" class="btn btn-primary btn-sm"><i class="far fa-edit"></i></button></a>
                <?php echo method_field('DELETE'); ?>
                <?php echo csrf_field(); ?> 
                <a title="Eliminar" href="<?php echo e(route('personas.destroy', $persona->id)); ?>"><button type="submit" onclick="return confirm('Seguro que desea borrar este cliente?'); " class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i></button></a>
            </form>

          </td>
        </tr>
      </tbody>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table> -->
    <div class="row">
      <div class="mx-auto">
      </div>
    </div>
    
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mi-proyecto-laravel\resources\views/ventas/index.blade.php ENDPATH**/ ?>