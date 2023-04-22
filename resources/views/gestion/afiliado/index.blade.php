@extends ('layouts.admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Registro de Afiliados <a href="afiliado/create"><button class="btn btn-success">Nuevo</button></a></h3>
		@include('gestion.afiliado.search')
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>CI</th>
					<th>Nombre</th>
					<th>Apellido Paterno</th>
                    <th>Apellido Materno</th>
                    <th>Direccion</th>
                    <th>Celular</th>
                    <th>Login</th>
                    <th>Password</th>
					<th>Placa Vehiculo</th>
                    <th>Fecha Ingreso</th>
                    <th>Foto Afiliado</th>
				</thead>
               @foreach ($afiliados as $afi)
				<tr>
					<td>{{ $afi->ci}}</td>
					<td>{{ $afi->nombre}}</td>
					<td>{{ $afi->apellido_paterno}}</td>
                    <td>{{ $afi->apellido_materno}}</td>
                    <td>{{ $afi->direccion}}</td>
                    <td>{{ $afi->celular}}</td>
                    <td>{{ $afi->login}}</td>
                    <td>{{ $afi->password}}</td>
                    <td>{{ $afi->placa_vehiculo}}</td>
                    <td>{{ $afi->fecha_ingreso}}</td>
                    <td>
						<img src="{{asset('imagenes/afiliados/'.$afi->foto_afiliado)}}" alt="{{ $afi->nombre}}" height="100px" width="100px" class="img-thumbnail">
					</td>
					<td>
						<a href="{{URL::action('AfiliadoController@edit',$afi->ci)}}"><button class="btn btn-info">Editar</button></a>
                         <a href="" data-target="#modal-delete-{{$afi->ci}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
					</td>
				</tr>
				@include('gestion.afiliado.modal')
				@endforeach
			</table>
		</div>
		{{$afiliados->render()}}
	</div>
</div>

@endsection