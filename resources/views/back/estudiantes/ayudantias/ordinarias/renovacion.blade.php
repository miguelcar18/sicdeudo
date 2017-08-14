@extends('back.layouts.base')

@section('titulo')
    <title>Renovación de ayudantía ordinaria - Sicdeudo</title>
@stop

@section('content')
@include('back.layouts.content-title', ['titulo' => 'Renovación de Ayudantía Ordinaria'])
<div class="row">
	<div class="col-xs-12">
		<div class="card-box">
			<div class="row">
				<div class="col-sm-12 col-xs-12 col-md-12">
					{!! Form::open(['route' => 'registrarRenovacion', 'method' => 'post', 'id' => 'renovacionAOForm', 'name' => 'renovacionAOForm', 'class' => 'ayudantiaForm', 'novalidate' => 'novalidate', 'role' => 'form']) !!}
						@include('back.estudiantes.ayudantias.form.renovacionFormType')
						@include('back.estudiantes.ayudantias.form.requisitosRenovacionSolicitud', ['tituloAyudantia' => 'ordinaria', 'idBotonEnviar' => 'renovacionAOSubmit'])
						{!! Form::hidden('peticion', 2, ['class' => 'form-control', 'id' => 'peticion']) !!}
					{!! Form::close()!!}
				</div>
			</div>
			<!-- end row -->
		</div>
	</div><!-- end col-->
</div>
<!-- end row -->
@stop