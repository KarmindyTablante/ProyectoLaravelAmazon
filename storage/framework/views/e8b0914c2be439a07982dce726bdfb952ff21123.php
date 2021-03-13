       <?php  

 extract($_REQUEST);
                                               $conexion = new mysqli("localhost","root","","carrito");
                                               mysqli_set_charset($conexion, 'utf8');
$nombre=$_GET['nombre'];
$precio_venta=$_GET['precio_venta'];
$descripcion=$_GET['descripcion'];
$id=Auth::user()->id;
$id_articulo=$_GET['id'];






$sql2="INSERT INTO carrito73s(nombre, precio_venta, descripcion, id_usuario, id_articulo) VALUES ('$nombre', '$precio_venta', '$descripcion', '$id', '$id_articulo')";
$resultado2=mysqli_query($conexion, $sql2);



if ($resultado2) {
	$si="si";
	echo "<script> window.location='../ventas'; </script>";
} else {
	$no="no";
	echo "<script> window.location='../ventas'; </script>";
}


  ?><?php /**PATH C:\xampp\htdocs\mi-proyecto-laravel\resources\views/carrito/create.blade.php ENDPATH**/ ?>