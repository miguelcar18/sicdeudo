@extends('back.layouts.base')

@section('titulo')
    <title>Renovación de becas de residencia - Sicdeudo</title>
@stop

@section('content')
@include('back.layouts.content-title', ['titulo' => 'Renovación de Becas de Residencia'])
<div class="row">
	<div class="col-xs-12">
		<div class="card-box">
			<div class="row">
				<div class="col-sm-12 col-xs-12 col-md-12">
					{!! Form::open(['route' => 'registrarRenovacionBR', 'method' => 'post', 'id' => 'renovacionBRForm', 'name' => 'renovacionBRForm', 'class' => '', 'novalidate' => 'novalidate', 'role' => 'form']) !!}
						@include('back.estudiantes.becas.form.renovacionFormType')
						@include('back.estudiantes.becas.form.requisitosRenovacionSolicitud')
						{!! Form::hidden('peticion', 6, ['class' => 'form-control', 'id' => 'peticion']) !!}
					{!! Form::close()!!}
				</div>
			</div>
			<!-- end row -->
		</div>
	</div><!-- end col-->
</div>
<!-- end row -->
@stop