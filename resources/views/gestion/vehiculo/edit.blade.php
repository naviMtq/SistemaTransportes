@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Editar el Registro de: {{$vehiculo->placa }} </h3>
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
				@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
				</ul>
			</div>
			@endif

			{!!Form::model($vehiculo,['method'=>'PATCH','files'=>'true','route'=>['gestion.vehiculo.update',$vehiculo->placa]])!!}
            {{Form::token()}}
            <div class="form-group">
            	<label for="placa">Placa</label>
            	<input type="text" name="placa" class="form-control" value={{$vehiculo->placa }}>
            </div>
			
            <div class="form-group">
            	<label for="marca">Marca</label>
            	<input type="text" name="marca" class="form-control" value={{$vehiculo->marca }}>
            </div>
			<div class="form-group">
            	<label for="modelo">Modelo</label>
            	<input type="text" name="modelo" class="form-control" value={{$vehiculo->modelo}}>
            </div>
			<div class="form-group">
            	<label for="tipo">Tipo</label>
            	<input type="text" name="tipo" class="form-control" value={{$vehiculo->tipo }}>
            </div>
			<div class="form-group">
            	<label for="color">Color</label>
            	<input type="text" name="color" class="form-control" value={{$vehiculo->color}}>
            </div>
			<div class="form-group">
            	<label for="capacidad_pj">Capacidad Pasajero</label>
            	<input type="text" name="capacidad_pj" class="form-control" value={{$vehiculo->capacidad_pj}}>
            </div>
			<div class="form-group">
            	<label for="chasis">Chasis</label>
            	<input type="text" name="chasis" class="form-control" value={{$vehiculo->chasis}}>
            </div>
				<div class="form-group">
            	<label for="anio">Año</label>
            	<input type="text" name="anio" class="form-control" value={{$vehiculo->anio }}>
            </div>
			<div class="form-group">
            	<label for="foto_vehiculo">Foto Vehiculo</label>
            	<input type="file" name="foto_vehiculo" class="form-control">
            </div>
            <div class="form-group">
            	<button class="btn btn-primary" type="submit">Guardar</button>
            	<button class="btn btn-danger" type="reset">Cancelar</button>
            </div>

			{!!Form::close()!!}		
            
		</div>
	</div>
@endsection