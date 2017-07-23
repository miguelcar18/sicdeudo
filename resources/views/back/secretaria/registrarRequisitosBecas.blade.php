@extends('back.layouts.base')

@section('titulo')
    <title>Registrar requisitos becas de residencia - Sicdeudo</title>
@stop

@section('content')
@include('back.layouts.content-title', ['titulo' => 'Verificación de Requisitos de Becas de Residencia'])
<div class="row">
	<div class="col-xs-12">
		<div class="card-box">
			<div class="row">
				<div class="col-sm-12 col-xs-12 col-md-12">
					{!! Form::open(['route' => 'registrarRequisitosBecas', 'method' => 'post', 'id' => 'requisitosSolicitudBecasForm', 'name' => 'requisitosSolicitudBecasForm', 'class' => '', 'novalidate' => 'novalidate', 'role' => 'form']) !!}
						@include('back.secretaria.datosEstudiante')
						@include('back.secretaria.form.requisitosBecaFormType')
					{!! Form::close()!!}
				</div>
			</div>
			<!-- end row -->
		</div>
	</div><!-- end col-->
</div>
<!-- end row -->
@stop