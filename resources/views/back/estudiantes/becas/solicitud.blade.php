@extends('back.layouts.base')

@section('titulo')
    <title>Solicitud de becas de residencia - Sicdeudo</title>
@stop

@section('content')
@include('back.layouts.content-title', ['titulo' => 'Solicitud de Becas de Residencia'])
<div class="row">
	<div class="col-xs-12">
		<div class="card-box">
			<div class="row">
				<div class="col-sm-12 col-xs-12 col-md-12">
					{!! Form::open(['route' => 'registrarSolicitudBR', 'method' => 'post', 'id' => 'solicitudBRForm', 'name' => 'solicitudBRForm', 'class' => '', 'novalidate' => 'novalidate', 'role' => 'form']) !!}
						@include('back.estudiantes.becas.form.solicitudFormType')
						@include('back.estudiantes.becas.requisitosSolicitud')
					{!! Form::close()!!}
				</div>
			</div>
			<!-- end row -->
		</div>
	</div><!-- end col-->
</div>
<!-- end row -->
@stop