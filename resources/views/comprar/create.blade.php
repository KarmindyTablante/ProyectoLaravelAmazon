@extends('layouts.app')

@section('content')

	
<div class="container">
	<h2> Nueva Venta</h2><br>
	<form action="../carrito" method="GET" enctype="multipart/form-data">
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

	$conexion = new mysqli("localhost","root","","tuscomprashoy");
                      mysqli_set_charset($conexion, 'utf8');




$sql4= "SELECT detalles73s.id, detalles73s.precio, detalles73s.cantidad, detalles73s.total FROM detalles73s ORDER BY detalles73s.id DESC LIMIT 1";
$resultado4=mysqli_query($conexion, $sql4);
$row4=mysqli_fetch_assoc($resultado4);


?>

		<div class="row">
		    <div class="col">
		      <div class="form-group">
							<label for="nombre">Articulo</label>
	  						<input type="text" class="form-control" name="total" readonly="readonly" value="<?php echo $row4['precio']; ?>">
						
					    </div>
						<div class="form-group">
						<label for="telefono">Cantidad</label>
						<input type="text" class="form-control" name="total" readonly="readonly" value="<?php echo $row4['cantidad']; ?>">
							

						    </div>
						<div class="form-group">
							
						</div>
						<div class="form-group">
					    	
					  	</div>	
					  	
		    </div>
		    <div class="col">
		      <div class="form-group">
						    <label for="nombre">Total</label>
							 <input type="text" class="form-control" name="total" readonly="readonly" value="<?php echo $row4['total']; ?>">

						    </div>
					    <div class="form-group">
							
						</div>
						<div class="form-group">
						
					    	<!-- <label for="correo">Correo</label>
					    	<input type="text" class="form-control" name="correo" placeholder="Ingrese Correo Del Cliente"> -->

					    </div>
					    <div class="form-group">
					    	<!-- <label for="password_confirmation">Confirmar Contrase??a</label>
					    	<input type="password" class="form-control" name="password_confirmation" placeholder="Confirmar contrase??a"> -->
					  </div>
		    </div>
		</div>
		<br>
  		<center><button type="submit" class="btn btn-primary">Hacer Venta</button>
  		<button type="reset" class="btn btn-danger">Cancelar</button></center>
    </form> <br>
</div> 
@endsection
