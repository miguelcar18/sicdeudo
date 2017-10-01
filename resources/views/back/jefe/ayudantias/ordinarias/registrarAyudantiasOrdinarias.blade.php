@extends('back.layouts.base')

@section('titulo')
    <title>Registrar requisitos ayudantía ordinaria - Sicdeudo</title>
@stop

@section('content')
@include('back.layouts.content-title', ['titulo' => 'Datos generales del estudiante'])
<div class="row">
	<div class="col-xs-12">
		<div class="card-box">
			<div class="row">
				<div class="col-sm-12 col-xs-12 col-md-12">
					{!! Form::open(['route' => 'registrarRequisitosAO', 'method' => 'post', 'id' => 'requisitosSolicitudAprobarForm', 'name' => 'requisitosSolicitudAprobarForm', 'class' => '', 'novalidate' => 'novalidate', 'role' => 'form']) !!}
						@include('back.jefe.form.requisitosAOAprobarFormType')
					{!! Form::close()!!}
				</div>
			</div>
			<!-- end row -->
		</div>
	</div><!-- end col-->
</div>
<!-- end row -->
@stop