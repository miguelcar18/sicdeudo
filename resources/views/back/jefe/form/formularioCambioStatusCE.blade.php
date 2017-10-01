@extends('back.layouts.base')

@section('titulo')
    <title>Actualizar status - Sicdeudo</title>
@stop

@section('content')
@include('back.layouts.content-title', ['titulo' => 'Actualizar status'])
<div class="row">
	<div class="col-xs-12">
		<div class="card-box">
			<div class="row">
				@if($peticion->status == 'Revisado por secretaría' || $peticion->status == 'Aprobado' || $peticion->status == 'Rechazado')
				<div class="col-sm-12 col-xs-12 col-md-12">
					{!! Form::model($peticion, array( 'route' => ['registrarCambioStatusCE', $peticion->id], 'method' => 'PUT', 'id' => 'cambioStatusForm', 'name' => 'cambioStatusForm', 'class' => '', 'novalidate' => 'novalidate', 'role' => 'form')) !!}
						@include('back.jefe.form.cambioStatusCEFormType', ['peticion' => $peticion, 'estudiante' => $estudiante])
						@include('back.layouts.botones', ['id' => 'cambioStatusSubmit', 'data' => 0, 'titulo' => 'Guardar', 'cancelar' => URL::route('solicitudesCambioEspecialidadAprobar')])
					{!! Form::close()!!}
				</div>
				@endif
			</div>
			<!-- end row -->
		</div>
	</div><!-- end col-->
</div>
<!-- end row -->
@stop