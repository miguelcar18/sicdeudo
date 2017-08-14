@extends('back.layouts.base')

@section('titulo')
    <title>Renovación de ayudantía técnica - Sicdeudo</title>
@stop

@section('content')
@include('back.layouts.content-title', ['titulo' => 'Renovación de Ayudantía Técnica'])
<div class="row">
	<div class="col-xs-12">
		<div class="card-box">
			<div class="row">
				<div class="col-sm-12 col-xs-12 col-md-12">
					{!! Form::open(['route' => 'registrarRenovacion', 'method' => 'post', 'id' => 'renovacionATForm', 'name' => 'renovacionATForm', 'class' => 'ayudantiaForm', 'novalidate' => 'novalidate', 'role' => 'form']) !!}
						@include('back.estudiantes.ayudantias.form.renovacionFormType')
						@include('back.estudiantes.ayudantias.form.requisitosRenovacionSolicitud', ['tituloAyudantia' => 'técnica', 'idBotonEnviar' => 'renovacionATSubmit'])
						{!! Form::hidden('peticion', 4, ['class' => 'form-control', 'id' => 'peticion']) !!}
					{!! Form::close()!!}
				</div>
			</div>
			<!-- end row -->
		</div>
	</div><!-- end col-->
</div>
<!-- end row -->
@stop