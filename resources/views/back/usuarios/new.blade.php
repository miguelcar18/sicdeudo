@extends('back.layouts.base')

@section('titulo')
    <title>Nuevo usuario - Sicdeudo</title>
@stop

@section('content')
@include('back.layouts.content-title', ['titulo' => 'Registro de usuario'])
<div class="row">
	<div class="col-xs-12">
		<div class="card-box">
			<div class="row">
				<div class="col-sm-12 col-xs-12 col-md-12">
					{!! Form::open(['route' => 'usuarios.store', 'method' => 'post', 'id' => 'usuarioForm', 'name' => 'usuarioForm', 'class' => '', 'novalidate' => 'novalidate', 'role' => 'form']) !!}
						@include('back.usuarios.form.UsuarioFormType')
						<div class="form-group row">
							<div class="col-sm-6">
							{!! Form::button('Guardar', ['class'=> 'btn btn-primary waves-effect waves-light pull-right', 'id' => 'usuarioSubmit', 'type' => 'submit', 'data' => 1]) !!}
							</div>
							<div class="col-sm-6">
								{!! Form::button('Cancelar', ['class'=> 'btn btn-secondary waves-effect m-l-5', 'id' => 'cancelar', 'type' => 'reset']) !!}
							</div>
						</div>
					{!! Form::close()!!}
				</div>
			</div>
			<!-- end row -->
		</div>
	</div><!-- end col-->
</div>
<!-- end row -->
@stop