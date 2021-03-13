

<?php $__env->startSection('content'); ?>

	
<div class="container">
<?php
extract($_REQUEST); 

 $precio=$_GET['precio_venta'];
 $cantidad=$_GET['cantidad'];
 $nombre=$_GET['nombre'];
 $id_usuario=$_GET['id_usuario'];
 $id_articulo=$_GET['id_articulo'];

$total=$precio*$cantidad;
	$conexion = new mysqli("localhost","root","","tuscomprashoy");
                      mysqli_set_charset($conexion, 'utf8');








                                           extract($_REQUEST);
                                               $conexion = new mysqli("localhost","root","","carrito");
                                               mysqli_set_charset($conexion, 'utf8');
                                                $sql="SELECT * FROM articulos73s WHERE articulos73s.id='$id_articulo'";
                                                $resultado=mysqli_query($conexion, $sql);
                                               $num=1; 
                                                $row=mysqli_fetch_assoc($resultado); 
                                                 
                                                  
$stock=$row['stock']-$cantidad;
if ($cantidad > $row['stock'] || $row['stock']=='0') {
 echo "<script>   alert('No hay suficientes articulos solicite una cantidad mas baja'); window.location='../carrito'; </script>";
}else{
   
$sql="UPDATE  articulos73s  SET stock='$stock'  WHERE id='$id_articulo'";
$resultado=mysqli_query($conexion, $sql); 



                                                       
                                                        
         


$sql4="INSERT INTO detalles73s(cantidad, id_articulo, precio, id_usuario, total,nombre) VALUES ('$cantidad', '$id_articulo', '$precio','$id_usuario','$total', '$nombre')";
$resultado4=mysqli_query($conexion, $sql4);
  


  extract($_REQUEST);
$conexion = new mysqli("localhost","root","","carrito");
  mysqli_set_charset($conexion, 'utf8');


  


$sql6= "DELETE FROM carrito73s  WHERE id_articulo='$id_articulo'";
$resultado6=mysqli_query($conexion, $sql6);


                     
  if ($resultado4 && $resultado6 ) {

 echo "<script> window.location='../carrito'; </script>";


} else {
                           echo $sql4;

}            
}
?>
 </div>
<?php $__env->stopSection(); ?>
 
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mi-proyecto-laravel\resources\views/detallado/edit.blade.php ENDPATH**/ ?>