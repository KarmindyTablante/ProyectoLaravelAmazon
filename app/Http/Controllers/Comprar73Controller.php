extends('layouts.app')

@section('content')



 <form action="../detallado/edit" method="GET" enctype="multipart/form-data">
  {{csrf_field()}}
    @csrf
      <div class="row">
        <div class="col-sm-6">
          @if($errors->any())
            <div class="alert alert-danger">
              <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
              </ul> 
            </div>
          @endif
        </div>
      </div>
    
<?php
extract($_REQUEST);
$conexion = new mysqli("localhost","root","","carrito");
  mysqli_set_charset($conexion, 'utf8');


              $id=$_GET['id'];
 
                                           extract($_REQUEST);
                                               $conexion = new mysqli("localhost","root","","carrito");
                                               mysqli_set_charset($conexion, 'utf8');
                                                $sql="SELECT * FROM carrito73s WHERE carrito73s.id='$id'";
                                                $resultado=mysqli_query($conexion, $sql);
                                               $num=1; 
                                                $row=mysqli_fetch_assoc($resultado); 
                                                 
                                                  
                                             
   
?>

    <div class="row">
        <div class="col">
          <div class="form-group"> 
              <label for="descripcion">Articulo</label>
              <input type="text" class="form-control" name="nombre"  readonly="readonly"  value="<?php echo $row['nombre']; ?>">
              </div>
            <div class="form-group">
              <label for="cantidad">Cantidad</label>
              <input type="text" class="form-control" name="cantidad" placeholder="Ingrese Cantidad Del Articulo">
            </div>
            <div class="form-group">
              <label for="impuesto">Precio</label>
                <input type="text" class="form-control" name="precio_venta" readonly="readonly"  value="<?php echo $row['precio_venta']; ?>">
            </div>
            <div class="form-group">
                <label for="tipo_comprobante">Descripcion</label>
                <input type="text" class="form-control" name="descripcion" readonly="readonly"  value="<?php echo $row['descripcion']; ?>">
                <input type="hidden" class="form-control" name="id_usuario" readonly="readonly"  value="<?php echo $row['id_usuario']; ?>">
                <input type="hidden" class="form-control" name="id_articulo" readonly="readonly"  value="<?php echo $row['id_articulo']; ?>">
              </div>  
              
        </div>
        >
    </div>
       
    <br>
      <center><button type="submit" class="btn btn-primary">Siguiente</button>
      <button type="reset" class="btn btn-danger">Cancelar</button></center>
    </form> 