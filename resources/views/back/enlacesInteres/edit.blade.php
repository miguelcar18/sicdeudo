@extends('back.layouts.base')

@section('titulo')
    <title>Actualizar enlace - Sicdeudo</title>
@stop

@section('content')
@include('back.layouts.content-title', ['titulo' => 'Editar enlace de interés'])
<div class="row">
	<div class="col-xs-12">
		<div class="card-box">
			<div class="row">
				<div class="col-sm-12 col-xs-12 col-md-12">
					{!! Form::model($enlace, array('route' => ['enlaces-interes.update', $enlace->id], 'method' => 'PUT', 'id' => 'enlaceInteresEditForm', 'name' => 'enlaceInteresEditForm', 'class' => '', 'novalidate' => 'novalidate', 'role' => 'form')) !!}
						@include('back.enlacesInteres.form.enlaceInteresFormType')
						@include('back.layouts.botones', ['id' => 'enlaceInteresSubmit', 'data' => 0, 'titulo' => 'Actualizar', 'cancelar' => URL::route('enlaces-interes.index')])
					{!! Form::close()!!}
				</div>
			</div>
			<!-- end row -->
		</div>
	</div><!-- end col-->
</div>
<!-- end row -->
@stop