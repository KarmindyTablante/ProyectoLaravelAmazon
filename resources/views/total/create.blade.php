@extends('layouts.app')

@section('content')

	
<div class="container">
	<h2> Mis Compras</h2><br>
	<form action="../ventas" method="GET" enctype="multipart/form-data">
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


		<div class="row">
		<table class="table">  
      <thead>
        <tr>
          <th scope="col">N° de venta</th>
          <th scope="col">Articulo</th>
          <th scope="col">Cantidad</th>
          <th scope="col">Precio</th>
          <th scope="col">Total</th>
         


        </tr>
      </thead>
              <?php  
                                           extract($_REQUEST);
                                               $conexion = new mysqli("localhost","root","","carrito");
                                               mysqli_set_charset($conexion, 'utf8');
                                               $id=Auth::user()->id;
                                                $sql="SELECT * FROM detalles73s WHERE detalles73s.id_usuario='$id'";
                                                $resultado=mysqli_query($conexion, $sql);
                                               $num=1; 
                                                while($row=mysqli_fetch_assoc($resultado)) 
                                                 {
                                                  
                                             
     ?>
      <tbody>

      	 <tr>
          <td><?php echo $num; ?></td>
          <td><?php echo $row['nombre']; ?></td>
          <td><?php echo $row['cantidad']; ?></td>
          <td><?php echo $row['precio']; ?></td>
          <td><?php echo $row['total']; ?></td>


        </tr>
      </tbody>
                 <?php 
$num++;
}
      ?>

    </table>
  </div>
		
</div>
@endsection
