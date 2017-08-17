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
					{!! Form::open(['route' => 'registrarRequisitosBecas', 'method' => 'post', 'id' => 'requisitosSolicitudBecasForm', 'name' => 'requisitosSolicitudBecasForm', 'class' => 'registrarRequisitos', 'novalidate' => 'novalidate', 'role' => 'form']) !!}
						@include('back.secretaria.form.datosEstudiante', ["peticion" => $peticion])
						@if($peticion->status == "Pendiente")
						@include('back.secretaria.form.requisitosBecaFormType')
						@elseif($peticion->status == "Revisado por secretaría")
						<h4 style="text-align: center">Todos los documentos fueron entregados</h4>
						@endif
						{!! Form::hidden('peticion', $peticion->id, ['class' => 'form-control', 'id' => 'peticion']) !!}
					{!! Form::close()!!}
				</div>
			</div>
			<!-- end row -->
		</div>
	</div><!-- end col-->
</div>
<!-- end row -->
@stop