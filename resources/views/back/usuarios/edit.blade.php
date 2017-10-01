@extends('back.layouts.base')

@section('titulo')
    <title>Actualizar usuario - Sicdeudo</title>
@stop

@section('content')
@include('back.layouts.content-title', ['titulo' => 'Editar usuario'])
<div class="row">
	<div class="col-xs-12">
		<div class="card-box">
			<div class="row">
				<div class="col-sm-12 col-xs-12 col-md-12">
					{!! Form::model($user, array('route' => ['usuarios.update', $user->id], 'method' => 'PUT', 'id' => 'usuarioEditarForm', 'name' => 'usuarioEditarForm', 'class' => '', 'novalidate' => 'novalidate', 'role' => 'form')) !!}
						@include('back.usuarios.form.UsuarioEditFormType')
						@include('back.layouts.botones', ['id' => 'usuarioEditarSubmit', 'data' => 0, 'titulo' => 'Actualizar', 'cancelar' => URL::route('usuarios.index')])
					{!! Form::close()!!}
				</div>
			</div>
			<!-- end row -->
		</div>
	</div><!-- end col-->
</div>
<!-- end row -->
@stop