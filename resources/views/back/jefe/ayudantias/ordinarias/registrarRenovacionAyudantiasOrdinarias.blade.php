@extends('back.layouts.base')

@section('titulo')
    <title>Registrar renovación ayudantía ordinaria - Sicdeudo</title>
@stop

@section('content')
@include('back.layouts.content-title', ['titulo' => 'Verificación de Requisitos de Ayudantía Ordinaria'])
<div class="row">
	<div class="col-xs-12">
		<div class="card-box">
			<div class="row">
				<div class="col-sm-12 col-xs-12 col-md-12">
					{!! Form::open(['route' => 'registrarRequisitosRenovacionAT', 'method' => 'post', 'id' => 'requisitosRenovacionAOForm', 'name' => 'requisitosRenovacionAOForm', 'class' => '', 'novalidate' => 'novalidate', 'role' => 'form']) !!}
						@include('back.secretaria.datosEstudiante')
						@include('back.secretaria.form.requisitosRenovacionAOFormType')
					{!! Form::close()!!}
				</div>
			</div>
			<!-- end row -->
		</div>
	</div><!-- end col-->
</div>
<!-- end row -->
@stop