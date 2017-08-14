@extends('back.layouts.base')

@section('titulo')
    <title>Actualizar red social - Sicdeudo</title>
@stop

@section('content')
@include('back.layouts.content-title', ['titulo' => 'Actualizar red social'])
<div class="row">
	<div class="col-xs-12">
		<div class="card-box">
			<div class="row">
				<div class="col-sm-12 col-xs-12 col-md-12">
					{!! Form::model($red, array('route' => ['redes-sociales.update', $red->id], 'method' => 'PUT', 'id' => 'redSocialForm', 'name' => 'redSocialForm', 'class' => '', 'novalidate' => 'novalidate', 'role' => 'form')) !!}
						@include('back.redesSociales.form.redSocialFormType')
						@include('back.layouts.botones', ['id' => 'redSocialSubmit', 'data' => 0, 'titulo' => 'Actualizar', 'cancelar' => URL::route('redes-sociales.index')])
					{!! Form::close()!!}
				</div>
			</div>
			<!-- end row -->
		</div>
	</div><!-- end col-->
</div>
<!-- end row -->
@stop