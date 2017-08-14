@extends('back.layouts.base')

@section('titulo')
    <title>Solicitud de ayudantía ordinaria - Sicdeudo</title>
@stop

@section('content')
@include('back.layouts.content-title', ['titulo' => 'Solicitud de Ayudantía Ordinaria'])
<div class="row">
	<div class="col-xs-12">
		<div class="card-box">
			<div class="row">
				<div class="col-sm-12 col-xs-12 col-md-12">
					{!! Form::open(['route' => 'registrarSolicitud', 'method' => 'post', 'id' => 'solicitudAOForm', 'name' => 'solicitudAOForm', 'class' => 'ayudantiaForm', 'novalidate' => 'novalidate', 'role' => 'form']) !!}
						@include('back.estudiantes.ayudantias.form.solicitudFormType')
						@include('back.estudiantes.ayudantias.form.requisitosSolicitud', ['tituloAyudantia' => 'ordinaria', 'idBotonEnviar' => 'solicitudAOSubmit'])
						{!! Form::hidden('peticion', 1, ['class' => 'form-control', 'id' => 'peticion']) !!}
					{!! Form::close()!!}
				</div>
			</div>
			<!-- end row -->
		</div>
	</div><!-- end col-->
</div>
<!-- end row -->
@stop