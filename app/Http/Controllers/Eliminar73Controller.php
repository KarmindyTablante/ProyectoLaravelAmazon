<?php
extract($_REQUEST);
$conexion = new mysqli("localhost","root","","carrito");
  mysqli_set_charset($conexion, 'utf8');


              $id=$_GET['id'];


$sql= "DELETE FROM carrito73s  WHERE id='$id'";
$resultado=mysqli_query($conexion, $sql);

if ($resultado) {
    echo "<script> window.location='../carrito'; </script>";
} else {
    echo "<script> window.location='edit'; </script>";
}