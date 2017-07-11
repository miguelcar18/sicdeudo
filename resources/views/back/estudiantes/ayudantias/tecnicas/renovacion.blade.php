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
					{!! Form::open(['route' => 'registrarRenovacionAT', 'method' => 'post', 'id' => 'renovacionATForm', 'name' => 'renovacionATForm', 'class' => '', 'novalidate' => 'novalidate', 'role' => 'form']) !!}
						@include('back.estudiantes.ayudantias.tecnicas.form.renovacionFormType')
						@include('back.estudiantes.ayudantias.tecnicas.requisitosRenovacionSolicitud')
					{!! Form::close()!!}
				</div>
			</div>
			<!-- end row -->
		</div>
	</div><!-- end col-->
</div>
<!-- end row -->
@stop