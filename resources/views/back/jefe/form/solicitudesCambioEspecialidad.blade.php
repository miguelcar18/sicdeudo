@extends('back.layouts.base')

@section('titulo')
<title>Solicitudes de cambio de especialidad - Sicdeudo</title>
@stop

@section('content')
@include('back.layouts.content-title', ['titulo' => 'Solicitudes de Cambio de Especialidad'])
<div class="row">
	<div class="col-sm-12">
		<div class="card-box table-responsive">
			<table id="datatable" class="table table-striped table-bordered">
				<thead>
					<tr>
						<th>Cédula</th>
						<th>Nombre</th>
						<th>Status Actual</th>
						<th>Acciones</th>
					</tr>
				</thead>
				<tbody>
					@foreach($solicitudes as $solicitud)
					<tr>
						<td>
							{{ number_format($solicitud->nombreUsuario->cedula, 0, '', '.') }}
						</td>
						<td>{{ $solicitud->nombreUsuario->name }}</td>
						<td>{{ $solicitud->status }}</td>
						<td>
							@if($solicitud->status == 'Revisado por secretaría' || $solicitud->status == 'Aprobado' || $solicitud->status == 'Rechazado')
	                        <a href="{{ URL::route('cambiarStatusCE', $solicitud->id) }}" class="btn btn-success btn-icon" title="Cambiar status de {{ $solicitud->nombreUsuario->name }}">
	                            <i class="zmdi zmdi-refresh-alt"></i>
	                        </a>
	                        @endif
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

		@if(Session::has('message'))
			setTimeout(function () {
				var mensaje1 = "{{ Session::get('message') }}";
				swal("Registradao!", mensaje1, "success");
			}, 10);
		@endif
	});
</script>
@stop