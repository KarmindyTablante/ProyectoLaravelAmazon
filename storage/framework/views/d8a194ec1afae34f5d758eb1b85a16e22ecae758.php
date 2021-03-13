

<?php $__env->startSection('content'); ?>
<div class="container">

                
    <br>
      <h2>Listado De Articulos En El Carrito<a href="../personas/create">
 

    <a href="carrito/show">
    <button type="button" style="    background: #17202A;border-color: #F1C40F;color: #F1C40F;" class="btn btn-success float-right"><i class="far fa-trash-alt"></i>&nbsp;&nbsp;&nbsp;Borrar Todo</button></a></h2> <br>
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
            <form action="comprar/Eliminar73Controller" method="GET">
              <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
               <button type="submit"  title="Eliminar" style="background: #17202A; border-color: #17202A;" class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i></button></a>
            </form>
            <form action="personas/" method="GET" style="margin-left: 42%!important;margin-top: -22%!important;">
              <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
               <button type="submit"  title="Comprar" style="background: #17202A; border-color: #17202A;" class="btn btn-danger btn-sm" ><i class="fa fa-hand-holding-usd"></i></button></a>
            </form>
          </td>
       
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


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mi-proyecto-laravel\resources\views/carrito/index.blade.php ENDPATH**/ ?>