@extends ('layouts.admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Registro de Vehiculos<a href="vehiculo/create"><button class="btn btn-success">Nuevo</button></a></h3>
		@include('gestion.vehiculo.search')
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>placa</th>
					<th>marca</th>
					<th>modelo</th>
                    <th>tipo</th>
                    <th>color</th>
                    <th>cap. pasajeros</th>
                    <th>chasis</th>
                    <th>año</th>
					<th>Foto Vehiculo</th>
				</thead>
               @foreach ($vehiculos as $veh)
				<tr>
					<td>{{ $veh->placa}}</td>
					<td>{{ $veh->marca}}</td>
					<td>{{ $veh->modelo}}</td>
                    <td>{{ $veh->tipo}}</td>
                    <td>{{ $veh->color}}</td>
                    <td>{{ $veh->capacidad_pj}}</td>
                    <td>{{ $veh->chasis}}</td>
                    <td>{{ $veh->anio}}</td>
                    <td>
						<img src="{{asset('imagenes/vehiculos/'.$veh->foto_vehiculo)}}" alt="{{ $veh->marca}}" height="100px" width="100px" class="img-thumbnail">
					</td>
					<td>
						<a href="{{URL::action('VehiculoController@edit',$veh->placa)}}"><button class="btn btn-info">Editar</button></a>
                         <a href="" data-target="#modal-delete-{{$veh->placa}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
					</td>
				</tr>
				@include('gestion.vehiculo.modal')
				@endforeach
			</table>
		</div>
		{{$vehiculos->render()}}
	</div>
</div>

@endsection