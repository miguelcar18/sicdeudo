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
				@if($peticion->status == 'Estudio socioeconomico realizado' || $peticion->status == 'Aprobado' || $peticion->status == 'Rechazado' || $peticion->status == 'Renovado' || $peticion->status == 'Renovado con recuperación académica')
				<div class="col-sm-12 col-xs-12 col-md-12">
					{!! Form::model($peticion, array( 'route' => ['registrarCambioStatus', $peticion->id], 'method' => 'PUT', 'id' => 'cambioStatusForm', 'name' => 'cambioStatusForm', 'class' => '', 'novalidate' => 'novalidate', 'role' => 'form')) !!}
						@include('back.jefe.form.cambioStatusFormType', ['peticion' => $peticion, 'estudiante' => $estudiante])
						<?php
							if($peticion->peticion == 1) {
				                $ruta = 'solicitudesAyudantiasOrdinariasAprobar';
				            }
				            else if($peticion->peticion == 2){
				                $ruta = 'renovacionesAyudantiasOrdinariasAprobar';
				            }
				            else if($peticion->peticion == 3){
				                $ruta = 'solicitudesAyudantiasTecnicasAprobar';
				            }
				            else if($peticion->peticion == 4){
				                $ruta = 'renovacionesAyudantiasTecnicasAprobar';
				            }
				            else if($peticion->peticion == 5){
				                $ruta = 'solicitudesBecasResidenciaAprobar';
				            }
				            else if($peticion->peticion == 6){
				                $ruta = 'renovacionesBecasResidenciaAprobar';
				            }
						?>
						@include('back.layouts.botones', ['id' => 'cambioStatusSubmit', 'data' => 0, 'titulo' => 'Guardar', 'cancelar' => URL::route($ruta)])
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