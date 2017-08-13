@extends('back.layouts.base')

@section('titulo')
<title>Listado de usuarios - Sicdeudo</title>
@stop

@section('content')
@include('back.layouts.content-title', ['titulo' => 'Listado de usuarios'])
<div class="row">
	<div class="col-sm-12 p-20">
		<a href="{{ URL::route('usuarios.create') }}" class="btn btn-success waves-effect waves-light pull-right"><i class="ion-plus"></i> Agregar usuario</a>
	</div>
	<div class="col-sm-12">
		<div class="card-box table-responsive">
			<table id="datatable" class="table table-striped table-bordered">
				<thead>
					<tr>
						<th>Cédula</th>
						<th>Nombre</th>
						<th>Email</th>
						<th>Rol</th>
						<th>Acciones</th>
					</tr>
				</thead>
				<tbody>
					@foreach($users as $user)
						<tr>
							<td>{{ number_format($user->cedula, 0, '', '.') }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                            	@if($user->rol == 1)
                            		Estudiante
                            	@elseif($user->rol == 3)
                            		Estudiante
                            	@elseif($user->rol == 4)
                            		Trabajador social
                            	@elseif($user->rol == 5)
                            		Jefe
                            	@endif
                        	</td>
							<td>
								<a href="{{ URL::route('usuarios.show', $user->id) }}" data-rel="tooltip" title="Mostrar {{ $user->username }}" objeto="{{ $user->username }}" class="btn waves-effect waves-light btn-primary"> 
									<i class="fa fa-eye"></i>
								</a>&nbsp;
								<a href="{{ URL::route('usuarios.edit', $user->id) }}" class="tooltip-success editar btn waves-effect waves-light btn-warning " data-rel="tooltip" title="Editar {{ $user->username }}" objeto="{{ $user->username }}" style="text-decoration:none;"> 
									<i class="fa fa-edit"></i>
								</a>&nbsp;
								<a href="#" data-id="{{ $user->id }}" class="tooltip-error borrar btn waves-effect waves-light btn-danger" data-rel="tooltip" title="Eliminar {{ $user->username }}" objeto="{{ $user->id }}"> 
									<i class="fa fa-trash"></i>
								</a>
							</td>
						</tr>
						@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div> <!-- end row -->
@stop

@section('javascripts')
<script type="text/javascript">
	$(document).ready(function() {
		$('#datatable').DataTable({
			"language": {
				"lengthMenu": "Mostrar _MENU_ resultados por página",
				"zeroRecords": "Sin resultados",
				"info": "Mostrando página _PAGE_ de _PAGES_",
				"infoEmpty": "Sin ninguna información",
				"infoFiltered": "(Filtrado de _MAX_ resultados totales)",
				"search":         "Buscar:",
				"paginate": {
					"first":      "Primero",
					"last":       "Último",
					"next":       "Siguiente",
					"previous":   "Anterior"
				},
			}
		});
	});
</script>
@stop