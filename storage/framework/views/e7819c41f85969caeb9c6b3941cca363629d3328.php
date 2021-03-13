

<?php $__env->startSection('content'); ?>
<div class="container">

                
    <br>
    <h2>Listado De Articulos Agregados Al Carrito <!--<a href="usuarios/create"> <button  style="    background: #17202A;border-color: #F1C40F;color: #F1C40F;" type="button" class="btn btn-success float-right">Agregar usuario</button></a> --></h2> <br>
    <h6>
    
    </h6>
    <table class="table">  
      <thead> 
        <tr>
          <th scope="col">N°</th>
          <th scope="col">Nombre</th>
          <th scope="col">Precio</th>
          <th scope="col">Descripcion</th>
          <th scope="col">Opciones</th>
        </tr>
      </thead>
      <tbody>
          <?php  
                                           extract($_REQUEST);
                                               $conexion = new mysqli("localhost","root","","carrito");
                                               mysqli_set_charset($conexion, 'utf8');
                                                $sql="SELECT * FROM carrito73s";
                                                $resultado=mysqli_query($conexion, $sql);
                                               $num=1; 
                                                while($row=mysqli_fetch_assoc($resultado)) 
                                                 {
                                                 	
                                             

     ?>
        <tr>
          <th scope="row"><?php echo $num; ?></th>
          <td><?php echo $row['nombre']; ?></td>
          <td><?php echo $row['precio_venta']; ?></td>
          <td><?php echo $row['descripcion']; ?></td>

          <td>
       
             <a title="Eliminar" href="{{route('carrito.show',<?php echo $row['id']; ?>)}}"><button type="submit"  style="    background: #17202A; border-color: #17202A;" onclick="return confirm('Seguro que desea borrar esta categoria?'); " class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i></button></a>
            

          </td>
        </tr>
        <?php
                                                       $num++;
                                                        } 
         ?>
      </tbody>
    </table>
    <div class="row">
      <div class="mx-auto">
      </div>
    </div>
    
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mi-proyecto-laravel\resources\views/carrito/edit.blade.php ENDPATH**/ ?>