<?php
extract($_REQUEST);
$conexion = new mysqli("localhost","root","","carrito");
  mysqli_set_charset($conexion, 'utf8');

$id=Auth::user()->id;


$sql= "DELETE FROM carrito73s  WHERE id_usuario='$id'";
$resultado=mysqli_query($conexion, $sql);

if ($resultado) {
    echo "<script> window.location='../carrito'; </script>";
} else {
    echo "<script> window.location='carrito/'; </script>";
} ?><?php /**PATH C:\xampp\htdocs\mi-proyecto-laravel\resources\views/carrito/show.blade.php ENDPATH**/ ?>