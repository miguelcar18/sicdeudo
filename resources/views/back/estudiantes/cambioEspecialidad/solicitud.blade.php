@extends('back.layouts.base')

@section('titulo')
    <title>Solicitud de cambio de especialidad - Sicdeudo</title>
@stop

@section('content')
@include('back.layouts.content-title', ['titulo' => 'Solicitud de Cambio de Especialidad'])
<div class="row">
	<div class="col-xs-12">
		<div class="card-box">
			<div class="row">
				<div class="col-sm-12 col-xs-12 col-md-12">
					{!! Form::open(['route' => 'registrarCita', 'method' => 'post', 'id' => 'solicitudCEForm', 'name' => 'solicitudCEForm', 'class' => '', 'novalidate' => 'novalidate', 'role' => 'form']) !!}
						@include('back.estudiantes.cambioEspecialidad.form.solicitudFormType')
						@include('back.estudiantes.cambioEspecialidad.requisitosSolicitud')
					{!! Form::close()!!}
				</div>
			</div>
			<!-- end row -->
		</div>
	</div><!-- end col-->
</div>
<!-- end row -->
@stop

@section('javascripts')
<script type="text/javascript">
	var array = [];
	$('#fechaCita').datepicker({
		format: "dd/mm/yyyy",
		autoclose: true,
		todayHighlight: true,
		daysOfWeekDisabled: [0,6],
		datesDisabled: array
	});
</script>

@stop