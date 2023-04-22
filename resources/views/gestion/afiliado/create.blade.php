@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Formulario de registro</h3>
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
				@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
				</ul>
			</div>
			@endif

			{!!Form::open(array('url'=>'gestion/afiliado','method'=>'POST','autocomplete'=>'off','files'=>'true'))!!}
            {{Form::token()}}
			<div class="form-group">
            	<label for="ci">CI</label>
            	<input type="text" name="ci" class="form-control" placeholder="CI...">
            </div>
            <div class="form-group">
            	<label for="nombre">Nombre</label>
            	<input type="text" name="nombre" class="form-control" placeholder="Nombre...">
            </div>
			<div class="form-group">
            	<label for="apellido_paterno">Apellido Paterno</label>
            	<input type="text" name="apellido_paterno" class="form-control" placeholder="Apellido paterno...">
            </div>
			<div class="form-group">
            	<label for="apellido_materno">Apellido Materno</label>
            	<input type="text" name="apellido_materno" class="form-control" placeholder="Apellido materno...">
            </div>
			<div class="form-group">
            	<label for="direccion">Dirección</label>
            	<input type="text" name="direccion" class="form-control" placeholder="Dirección...">
            </div>
			<div class="form-group">
            	<label for="celular">Celular</label>
            	<input type="text" name="celular" class="form-control" placeholder="Celular...">
            </div>
			<div class="form-group">
            	<label for="login">Login</label>
            	<input type="text" name="login" class="form-control" placeholder="login...">
            </div>
			<div class="form-group">
            	<label for="password">Password</label>
            	<input type="password" name="password" class="form-control" placeholder="Password...">
            </div>
			<div class="form-group">
            	<label for="placa_vehiculo">Placa Vehiculo</label>
            	<input type="text" name="placa_vehiculo" class="form-control" placeholder="Placa Vehiculo...">
            </div>
			<div class="form-group">
            	<label for="fecha_ingreso">Fecha ingreso</label>
            	<input type="date" name="fecha_ingreso" class="form-control" placeholder="Fecha ingreso...">
            </div>
			<div class="form-group">
            	<label for="foto_afiliado">foto_afiliado</label>
            	<input type="file" name="foto_afiliado" class="form-control">
            </div>
            
            <div class="form-group">
            	<button class="btn btn-primary" type="submit">Registrar</button>
            	<button class="btn btn-danger" type="reset">Cancelar</button>
            </div>

			{!!Form::close()!!}		
            
		</div>
	</div>
@endsection