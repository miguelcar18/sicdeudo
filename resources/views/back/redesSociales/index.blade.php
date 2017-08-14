@extends('back.layouts.base')

@section('titulo')
<title>Redes sociales - Sicdeudo</title>
@stop

@section('content')
@include('back.layouts.content-title', ['titulo' => 'Redes sociales'])
<div class="row">
	<div class="col-sm-12">
		<div class="card-box table-responsive">
			<table id="datatable" class="table table-striped table-bordered">
				<thead>
					<tr>
						<th>Nombre</th>
						<th>Url</th>
						<th>Acciones</th>
					</tr>
				</thead>
				<tbody>
					@foreach($redes as $data)
					<tr>
						<td>{{ $data->nombre }}</td>
						<td>{{ $data->url }}</td>
						<td class="text-center" style="padding: 1px">
							{{--
	                        <a href="{{ URL::route('redes-sociales.show', $data->id) }}" class="btn btn-primary btn-icon" title="Ver {{ $data->nombre }}">
	                            <i class="icon-eye"></i>
	                        </a>
	                        --}}
	                        <a href="{{ URL::route('redes-sociales.edit', $data->id) }}" class="btn btn-warning btn-icon" title="Editar {{ $data->nombre }}">
	                            <i class="zmdi zmdi-edit"></i>
	                        </a>
	                        {{--
	                        <a href="#" data-id="{{ $data->id }}" class="btn btn-danger btn-icon tooltip-error borrar-red-social" data-rel="tooltip" title="Eliminar {{ $data->nombre }}" objeto="{{ $data->id }}">
	                            <i class="icon-cancel-square"></i>
	                        </a>
	                        --}}
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