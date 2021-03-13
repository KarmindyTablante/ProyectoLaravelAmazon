@extends('layouts.app')

@section('content')

	
<div class="container">
<?php
extract($_REQUEST); 

 $precio=$_GET['precio_venta'];
 $cantidad=$_GET['cantidad'];
 $nombre=$_GET['nombre'];
 $id_usuario=$_GET['id_usuario'];

$total=$precio*$cantidad;
	$conexion = new mysqli("localhost","root","","tuscomprashoy");
                      mysqli_set_charset($conexion, 'utf8');



$sql5= "SELECT stock FROM articulos73s WHERE id='$nombre'";
$resultado5=mysqli_query($conexion, $sql5);
$row5=mysqli_fetch_assoc($resultado5);
$stock=$row5['stock']-$cantidad;
if ($cantidad > $row5['stock'] || $row5['stock']=='0') {
 echo "<script>   alert('No hay suficientes articulos solicite una cantidad mas baja'); window.location='../ventas/create'; </script>";
}else{
$sql="UPDATE  articulos73s  SET stock='$stock'  WHERE id='$nombre'";
$resultado=mysqli_query($conexion, $sql);
}






$sql="INSERT INTO detalles73s(cantidad, id_articulo, precio, id_usuario, total) VALUES ('$cantidad', '$nombre', '$precio','$id_usuario','$total')";
$resultado=mysqli_query($conexion, $sql);
  
                     
  if ($resultado) {

 echo "<script> window.location='comprar/create'; </script>";


} else {
                           echo $sql2;

}            

?>
 </div>
@endsection
 