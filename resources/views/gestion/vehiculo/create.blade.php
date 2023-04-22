@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>ESTADO DE CUENTAS</h3>
			<h3>CI DE AFILIADO: 6013564</h3>
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
				@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
				</ul>
			</div>
			@endif

			{!!Form::open(array('url'=>'gestion/vehiculo','method'=>'POST','autocomplete'=>'off','files'=>'true'))!!}
            {{Form::token()}}

	<!-- <div class="row">
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
		<div class="form-group">
            	<label for="placa">Placa</label>
            	<input type="text" name="placa" required value="{{old('placa')}}"class="form-control" placeholder="Placa...">
            </div>

		</div>
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<div class="form-group">
				<label ="categoria"></label>
			</div>

		</div>
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">

		</div>
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">

		</div>

	</div> -->
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	<div class="table-responsive">
	<table>
				<thead>
				<img src="afiFoto1.jpg" height="100px" width="100px">
					<b><p>CI</p></b>
					<pre>6045123</pre>
					<b><p>NOMBRE COMPLETO</p></b>
					<pre>PABLO RUIZ SALLES</pre>
					<b><p>DIRECCION</p></b>
					<pre>AV. PERU #1345</pre>
					<b><p>PLACA DE VEHICULO</p></b>
					<pre>465SDF</pre>
					<b><p>CELULAR</p></b>
					<pre>7065820</pre>
					<b><p>FALTAS</p></b>
					<pre>4</pre>
					<b><p>FECHA DE INGRESO</p></b>
					<pre>5-12-2020</pre>
				
                  
				</thead>
	</table>	
	</div>	
	</div>
            
            <div class="form-group">
            	<button class="btn btn-primary" type="submit">Modificar</button>
            	<button class="btn btn-danger" type="reset">Cancelar</button>
            </div>

			{!!Form::close()!!}		
            
		</div>
	</div>
@endsection