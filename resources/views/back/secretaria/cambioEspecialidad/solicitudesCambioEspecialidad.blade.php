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
						<th>Fecha</th>
						<th>Status</th>
					</tr>
				</thead>
				<tbody>
					@foreach($solicitudes as $solicitud)
					<tr>
						<td>
							<a href="{{ URL::route('formularioRequisitosCambioEspecialidad', $solicitud->id) }}">
								{{ number_format($solicitud->nombreUsuario->cedula, 0, '', '.') }}
							</a>
						</td>
						<td>{{ $solicitud->nombreUsuario->name }}</td>
						<?php
							$separar = explode("-", $solicitud->fechaCita);
							$fechaNormal = $separar[2]."/".$separar[1]."/".$separar[0];
						?>
						<td>{{ $fechaNormal }}</td>
						<td>{{ $solicitud->status }}</td>
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
				swal("Realizado!", mensaje1, "success");
			}, 10);
		@endif
	});
</script>
@stop