@extends('back.layouts.base')

@section('titulo')
    <title>Nuevo enlace - Sicdeudo</title>
@stop

@section('content')
@include('back.layouts.content-title', ['titulo' => 'Nuevo enlace de interés'])
<div class="row">
	<div class="col-xs-12">
		<div class="card-box">
			<div class="row">
				<div class="col-sm-12 col-xs-12 col-md-12">
					{!! Form::open(array('route' => 'enlaces-interes.store', 'method' => 'POST', 'id' => 'enlaceInteresForm', 'name' => 'enlaceInteresForm', 'class' => '', 'novalidate' => 'novalidate', 'role' => 'form')) !!}
						@include('back.enlacesInteres.form.enlaceInteresFormType')
						@include('back.layouts.botones', ['id' => 'enlaceInteresSubmit', 'data' => 1, 'titulo' => 'Guardar', 'cancelar' => URL::route('enlaces-interes.index')])
					{!! Form::close()!!}
				</div>
			</div>
			<!-- end row -->
		</div>
	</div><!-- end col-->
</div>
<!-- end row -->
@stop