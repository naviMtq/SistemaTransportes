@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Editar el Registro de: {{$afiliado->nombre }} {{$afiliado->apellido_paterno}} {{$afiliado->apellido_materno}}</h3>
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
				@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
				</ul>
			</div>
			@endif

			{!!Form::model($afiliado,['method'=>'PATCH','files'=>'true','route'=>['gestion.afiliado.update',$afiliado->ci]])!!}
            {{Form::token()}}
            <div class="form-group">
            	<label for="ci">CI</label>
            	<input type="text" name="ci" class="form-control" value={{$afiliado->ci}}>
            </div>
            <div class="form-group">
            	<label for="nombre">Nombre</label>
            	<input type="text" name="nombre" class="form-control" value={{$afiliado->nombre}}>
            </div>
			<div class="form-group">
            	<label for="apellido_paterno">Apellido Paterno</label>
            	<input type="text" name="apellido_paterno" class="form-control" value={{$afiliado->apellido_paterno}}>
            </div>
			<div class="form-group">
            	<label for="apellido_materno">Apellido Materno</label>
            	<input type="text" name="apellido_materno" class="form-control" value={{$afiliado->apellido_materno}}>
            </div>
			<div class="form-group">
            	<label for="direccion">Dirección</label>
            	<input type="text" name="direccion" class="form-control" value={{$afiliado->direccion}}>
            </div>
			<div class="form-group">
            	<label for="celular">Celular</label>
            	<input type="text" name="celular" class="form-control" value={{$afiliado->celular}}>
            </div>
			<div class="form-group">
            	<label for="login">Login</label>
            	<input type="text" name="login" class="form-control" value={{$afiliado->login}}>
            </div>
			<div class="form-group">
            	<label for="password">Password</label>
            	<input type="password" name="password" class="form-control" value={{$afiliado->password}}>
            </div>
			<div class="form-group">
            	<label for="placa_vehiculo">Placa Vehiculo</label>		
            	<input type="text" name="placa_vehiculo" class="form-control" value={{$afiliado->placa_vehiculo}}>
            </div>
			<div class="form-group">
            	<label for="fecha_ingreso">Fecha ingreso</label>
            	<input type="date" name="fecha_ingreso" class="form-control" value={{$afiliado->fecha_ingreso}}>
            </div>
			<div class="form-group">
            	<label for="foto_afiliado">Foto Afiliado</label>
            	<input type="file" name="foto_afiliado" class="form-control">
            </div>
            <div class="form-group">
            	<button class="btn btn-primary" type="submit">Guardar</button>
            	<button class="btn btn-danger" type="reset">Cancelar</button>
            </div>

			{!!Form::close()!!}		
            
		</div>
	</div>
@endsection