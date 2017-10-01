@extends('back.layouts.base')

@section('titulo')
    <title>Datos del estudiante - Sicdeudo</title>
@stop

@section('content')
@include('back.layouts.content-title', ['titulo' => 'Datos Generales del Estudiante'])
<div class="row">
	<div class="col-xs-12">
		<div class="card-box">
			<div class="row">
				<div class="col-sm-12 col-xs-12 col-md-12">
					{!! Form::open(['url' => '#', 'method' => 'post', 'id' => 'datosEstudiante', 'name' => 'datosEstudiante', 'class' => '', 'novalidate' => 'novalidate', 'role' => 'form']) !!}
						@include('back.jefe.form.verDatos', ['peticion' => $peticion, 'estudiante' => $estudiante])
					{!! Form::close()!!}
				</div>
			</div>
			<!-- end row -->
		</div>
	</div><!-- end col-->
</div>
<!-- end row -->
@stop