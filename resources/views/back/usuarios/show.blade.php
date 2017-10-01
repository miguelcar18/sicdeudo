@extends('back.layouts.base')

@section('titulo')
    <title>Datos del usuario "{{ $user->name }}" - Sicdeudo</title>
@stop

@section('content')
@include('back.layouts.content-title', ['titulo' => 'Información del usuario'])
<div class="row">
	<div class="col-xs-12">
		<div class="card-box table-responsive">
			{!! Form::open(['route' => ['usuarios.destroy', $user->id], 'method' =>'DELETE', 'id' => 'form-eliminar-usuario']) !!}
			<table id="datatable" class="table table-striped table-bordered">
				<tr>
					<th>Imagen: </th>
					<td>
						@if($user->path == '')
                        <img src="{{ asset('assets/avatars/user.jpg') }}" alt="user" class="img-thumbails" width="100px" height="auto">
                        @else
                        <img src="{{ asset('uploads/usuarios/'.$user->path) }}" alt="Foto de {{ $user->username }}" class="img-thumbails" width="100px" height="auto">
                        @endif
					</td>
				</tr>
				<tr>
					<th>Nombre de usuario: </th>
					<td>{{ $user->username }}</td>
				</tr>
				<tr>
					<th>Nombre: </th>
					<td>{{ $user->name }}</td>
				</tr>
				<tr>
					<th>Cédula: </th>
					<td>{{ number_format($user->cedula, 0, '', '.') }}</td>
				</tr>
				<tr>
					<th>Correo: </th>
					<td>{{ $user->email }}</td>
				</tr>
				<tr>
					<th>Rol: </th>
					<td>
						@if($user->rol == 1)
                    		Estudiante
                    	@elseif($user->rol == 2)
                    		Secretaria
                    	@elseif($user->rol == 3)
                    		Trabajador social
                    	@elseif($user->rol == 4)
                    		Jefe
                    	@endif
					</td>
				</tr>
				<tr>
					<th>Detalles: </th>
					<td>{{ $user->details }}</td>
				</tr>
				<tr>
					<th>Acciones</th>
					<td>
						<a href="{{ URL::route('usuarios.edit', $user->id) }}" class="btn btn-warning btn-icon" title="Editar {{ $user->name }}">
                            <i class="zmdi zmdi-edit"></i> Editar
                        </a>
                        @if(Auth::user()->rol == 4)
                        <a href="javascript:{}" data-id="{{ $user->id }}" class="btn btn-danger btn-icon tooltip-error borrar" data-rel="tooltip" title="Eliminar {{ $user->name }}" objeto="{{ $user->id }}">
                            <i class="zmdi zmdi-delete"></i> Eliminar
                        </a>
                        @endif
					</td>
				</tr>
			</table>
			{!! Form::close() !!}
		</div>
	</div><!-- end col-->
</div>
<!-- end row -->
@stop

@section('javascripts')
<script type="text/javascript">
	$(function () {
		$('.borrar').click(function (e) {
			e.preventDefault();
			var message = "¿Está realmente seguro(a) de eliminar este usuario? Todas las operaciones que haya realizado con esta cuenta también serán eliminadas";
			var form = $('#form-eliminar-usuario');
			swal({
				title: message,
                type: "warning",
                showCancelButton: true,
                cancelButtonClass: 'btn-secondary waves-effect',
                confirmButtonClass: 'btn-warning',
                confirmButtonText: "Si",
                cancelButtonText: "No",
                closeOnConfirm: false
            }, function () {
            	form.submit();
	        });
		});
	});
</script>
@stop