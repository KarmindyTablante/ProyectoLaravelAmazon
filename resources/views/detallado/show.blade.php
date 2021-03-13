@extends('layouts.app')

@section('content')

	
<div class="container">
	<h2> Nueva Venta</h2><br>
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
     <?php  
                                           extract($_REQUEST);
                                               $conexion = new mysqli("localhost","root","","carrito");
                                               mysqli_set_charset($conexion, 'utf8');
                                               $id=Auth::user()->id;
                                                $sql="SELECT detalles73s.id,detalles73s.nombre, detalles73s.precio, detalles73s.total, detalles73s.cantidad, detalles73s.id_usuario FROM detalles73s WHERE detalles73s.id_usuario='$id'  ORDER BY detalles73s.id DESC LIMIT 1";
                                                $resultado=mysqli_query($conexion, $sql);
                                               $num=1; 
                                                while($row=mysqli_fetch_assoc($resultado)) 
                                                 {
                                                  
                                             
     ?>

		<div class="row">
		    <div class="col">
		      <div class="form-group">
							<label for="nombre">Articulo</label>
	  						<input type="text" class="form-control" name="articulo" readonly="readonly" value="<?php echo $row['nombre']; ?>">
						
					    </div>
						<div class="form-group">
						<label for="telefono">Precio</label>
						<input type="text" class="form-control" name="precio" readonly="readonly" value="<?php echo $row['precio']; ?>">
							

						    </div>
						<div class="form-group">
							
						</div>
						<div class="form-group">
					    	
					  	</div>	
					  	
		    </div>
		    <div class="col">
		      <div class="form-group">
						    <label for="nombre">Cantidad</label>
							 <input type="text" class="form-control" name="cantidad" readonly="readonly" value="<?php echo $row['cantidad']; ?>">

						    </div>
					    <div class="form-group">
							
						</div>
						<div class="form-group">
						
					    	<!-- <label for="correo">Correo</label>
					    	<input type="text" class="form-control" name="correo" placeholder="Ingrese Correo Del Cliente"> -->

					    </div>
					    <div class="form-group">
					    	<!-- <label for="password_confirmation">Confirmar Contraseña</label>
					    	<input type="password" class="form-control" name="password_confirmation" placeholder="Confirmar contraseña"> -->
					  </div>
		    </div>
		</div>
		<br>
  		<center><button type="submit" class="btn btn-primary">Hacer Venta</button>
  		<button type="reset" class="btn btn-danger">Cancelar</button></center>
    </form> <br>
</div>
@endsection
