@extends('back.layouts.base')

@section('titulo')
    <title>Registrar estudio socio económico - Sicdeudo</title>
@stop

@section('content')
@include('back.layouts.content-title', ['titulo' => 'Estudio Socio-Económico de '.$estudiante->apellidosNombres.' ('.number_format($estudiante->cedula, 0, '', '.').')'])
<div class="row">
	<div class="col-xs-12">
		<div class="card-box">
			<div class="row">
				<div class="col-sm-12 col-xs-12 col-md-12">
					{!! Form::open(['route' => 'registrarES', 'method' => 'post', 'id' => 'requisitosESForm', 'name' => 'requisitosESForm', 'class' => '', 'novalidate' => 'novalidate', 'role' => 'form']) !!}
						@include('back.trabajador.form.requisitosESFormType')
						{!! Form::hidden('estudiante', $id, ['class' => 'form-control', 'id' => 'estudiante']) !!}
						{!! Form::hidden('peticion', $peticion, ['class' => 'form-control', 'id' => 'peticion']) !!}
					{!! Form::close()!!}
				</div>
			</div>
			<!-- end row -->
		</div>
	</div><!-- end col-->
</div>
<!-- end row -->
@stop