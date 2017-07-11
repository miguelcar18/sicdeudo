@extends('back.layouts.base')

@section('titulo')
<title>Solicitudes de ayudantías ordinarias - Sicdeudo</title>
@stop

@section('content')
@include('back.layouts.content-title', ['titulo' => 'Solicitudes de Ayudantías Ordinarias'])
<div class="row">
	<div class="col-sm-12">
		<div class="card-box table-responsive">
			<table id="datatable" class="table table-striped table-bordered">
				<thead>
					<tr>
						<th>Cédula</th>
						<th>Nombre</th>
						<th>Semestre</th>
						<th>Especialidad</th>
						<th>Promedio</th>
						<th>Status</th>
					</tr>
				</thead>
				<tbody>
					@foreach($solicitudes as $solicitud)
					<tr>
						<td>{{ number_format($solicitud->cedula, 0, '', '.') }}</td>
						<td>Daihana Rivero</td>
						<td>
							@if($solicitud->semestreActual == 'primero')
							1er
							@elseif($solicitud->semestreActual == 'segundo')
							2do
							@elseif($solicitud->semestreActual == 'tercero')
							3ro
							@elseif($solicitud->semestreActual == 'cuarto')
							4to
							@elseif($solicitud->semestreActual == 'quinto')
							5to
							@elseif($solicitud->semestreActual == 'sexto')
							6to
							@elseif($solicitud->semestreActual == 'septimo')
							7mo
							@elseif($solicitud->semestreActual == 'octavo')
							8vo
							@elseif($solicitud->semestreActual == 'noveno')
							9no
							@elseif($solicitud->semestreActual == 'decimo')
							10mo
							@endif
						</td>
						<td>
							@if($solicitud->especialidad == 'administracion' )
							Administración de Empresas
							@elseif($solicitud->especialidad == 'contaduria' )
							Contaduría Pública
							@elseif($solicitud->especialidad == 'gerencia' )
							Gerencia de Recursos Humanos
							@elseif($solicitud->especialidad == 'agronomia' )
							Ingeniería Agronómica
							@elseif($solicitud->especialidad == 'petroleo' )
							Ingeniería de Petróleo
							@elseif($solicitud->especialidad == 'sistemas' )
							Ingeniería de Sistemas
							@elseif($solicitud->especialidad == 'produccionAnimal' )
							Ingeniería en Producción Animal
							@elseif($solicitud->especialidad == 'tecnologiaAlimentos' )
							Tecnología de los Alimentos
							@endif
						</td>
						<td>{{ number_format($solicitud->promedioSemestreAnterior, 2, ',', '.') }}</td>
						<td>Pendiente</td>
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