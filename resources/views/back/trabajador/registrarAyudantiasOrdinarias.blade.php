@extends('back.layouts.base')

@section('titulo')
    <title>Registrar requisitos ayudantía ordinaria - Sicdeudo</title>
@stop

@section('content')
@include('back.layouts.content-title', ['titulo' => 'Estudio Socio-Económico'])
<div class="row">
	<div class="col-xs-12">
		<div class="card-box">
			<div class="row">
				<div class="col-sm-12 col-xs-12 col-md-12">
					{!! Form::open(['route' => 'registrarRequisitosAO', 'method' => 'post', 'id' => 'requisitosSolicitudAOESForm', 'name' => 'requisitosSolicitudAOESForm', 'class' => '', 'novalidate' => 'novalidate', 'role' => 'form']) !!}
						@include('back.trabajador.form.requisitosAOESFormType')
					{!! Form::close()!!}
				</div>
			</div>
			<!-- end row -->
		</div>
	</div><!-- end col-->
</div>
<!-- end row -->
@stop