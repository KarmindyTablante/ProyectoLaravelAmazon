
  


	       <?php              
 //busco la cantidad de mensajes no leidos
         session_start();
        
        extract($_REQUEST);
         $conexion = new mysqli("localhost","root","","carrito");
          mysqli_set_charset($conexion, 'utf8');
 date_default_timezone_set('America/Caracas');
  $fecha=date('d-m-Y');
 $sql="SELECT * FROM articulos73s WHERE articulos73s.created_at='$para'";
 $resultado=mysqli_query($conexion, $sql);
 $numero=$resultado->num_rows;


echo "<span style='background: green; width: 27px;border-radius: 34px;' class='label label-primary pull-right'><center>".$numero."</center></span>
";
     


    ?>

  
