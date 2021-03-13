<?php

//---------------------- PARTE 1 EXTRAEMOS LOS DATOS EN LA TABLA CARRITO ----------------------------------------



extract($_REQUEST); 

$conexion = new mysqli("localhost","root","","tuscomprashoy");
 mysqli_set_charset($conexion, 'utf8');
 $id=Auth::user()->id;

$sql="SELECT * FROM carrito73s WHERE carrito73s.id_usuario='$id'";
 $resultado=mysqli_query($conexion, $sql);
$num=1; 
while($row=mysqli_fetch_assoc($resultado))  {

  $nombre=$row['nombre']; 
  $precio=$row['precio_venta']; 
  $descripcion=$row['descripcion'];
  $id_articulo=$row['id_articulo'];
  $cantidad='1';

//---------------------- PARTE 2 CONSULTAMOS LA CANTIDAD ----------------------------------------


   extract($_REQUEST);
   $conexion = new mysqli("localhost","root","","carrito");
   mysqli_set_charset($conexion, 'utf8');

   $sql2="SELECT * FROM articulos73s WHERE articulos73s.id='$id_articulo'";
     $resultado2=mysqli_query($conexion, $sql2);
    $num=1; 
     while($row2=mysqli_fetch_assoc($resultado2))  {
                                                 
                                                  
$stock=$row2['stock']-$cantidad;
if ($cantidad > $row2['stock'] || $row2['stock']=='0') {
 echo "<script>   alert('No hay suficientes articulos solicite una cantidad mas baja'); window.location='../carrito'; </script>";
}else{
   
$sql2="UPDATE  articulos73s  SET stock='$stock'  WHERE id='$id_articulo'";
$resultado2=mysqli_query($conexion, $sql2); 


                                                       $num++;
                                                        }
                                            } 
        



//---------------------- PARTE 3 INSERTAS DATOS EN LA TABLA DETALLES ----------------------------------------




 extract($_REQUEST);
   $conexion = new mysqli("localhost","root","","carrito");
   mysqli_set_charset($conexion, 'utf8');

$id=Auth::user()->id;

  $sql4="INSERT INTO detalles73s(id_articulo,cantidad, precio, id_usuario, total,nombre) VALUES ('$id_articulo','$cantidad' , '$precio','$id','$total', '$nombre')";
$resultado4=mysqli_query($conexion, $sql4);
  





//---------------------- BORRAMOS LOS DATOS DEL CARRITO  ----------------------------------------




                     
  if ($resultado4) {

 echo "<script> window.location='../carrito'; </script>";


} else {
                           echo $sql4;

}            
                                                 }