@extends('back.layouts.base')

@section('titulo')
<title>Renovaciones de becas de residencia - Sicdeudo</title>
@stop

@section('content')
@include('back.layouts.content-title', ['titulo' => 'Renovaciones de Becas de Residencia'])
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
						<td>
							<a href="{{ URL::route('formularioRequisitosRenovacionBeca', $solicitud->id) }}">
								{{ number_format($solicitud->nombreEstudiante->cedula, 0, '', '.') }}
							</a>
						</td>
						<td>{{ $solicitud->nombreEstudiante->apellidosNombres }}</td>
						<td>
							@if($solicitud->nombreEstudiante->datosAcademicos->semestreActual == 'primero')
							1er
							@elseif($solicitud->nombreEstudiante->datosAcademicos->semestreActual == 'segundo')
							2do
							@elseif($solicitud->nombreEstudiante->datosAcademicos->semestreActual == 'tercero')
							3ro
							@elseif($solicitud->nombreEstudiante->datosAcademicos->semestreActual == 'cuarto')
							4to
							@elseif($solicitud->nombreEstudiante->datosAcademicos->semestreActual == 'quinto')
							5to
							@elseif($solicitud->nombreEstudiante->datosAcademicos->semestreActual == 'sexto')
							6to
							@elseif($solicitud->nombreEstudiante->datosAcademicos->semestreActual == 'septimo')
							7mo
							@elseif($solicitud->nombreEstudiante->datosAcademicos->semestreActual == 'octavo')
							8vo
							@elseif($solicitud->nombreEstudiante->datosAcademicos->semestreActual == 'noveno')
							9no
							@elseif($solicitud->nombreEstudiante->datosAcademicos->semestreActual == 'decimo')
							10mo
							@endif
						</td>
						<td>
							@if($solicitud->nombreEstudiante->datosAcademicos->especialidad == 'administracion' )
							Administración de Empresas
							@elseif($solicitud->nombreEstudiante->datosAcademicos->especialidad == 'contaduria' )
							Contaduría Pública
							@elseif($solicitud->nombreEstudiante->datosAcademicos->especialidad == 'gerencia' )
							Gerencia de Recursos Humanos
							@elseif($solicitud->nombreEstudiante->datosAcademicos->especialidad == 'agronomia' )
							Ingeniería Agronómica
							@elseif($solicitud->nombreEstudiante->datosAcademicos->especialidad == 'petroleo' )
							Ingeniería de Petróleo
							@elseif($solicitud->nombreEstudiante->datosAcademicos->especialidad == 'sistemas' )
							Ingeniería de Sistemas
							@elseif($solicitud->nombreEstudiante->datosAcademicos->especialidad == 'produccionAnimal' )
							Ingeniería en Producción Animal
							@elseif($solicitud->nombreEstudiante->datosAcademicos->especialidad == 'tecnologiaAlimentos' )
							Tecnología de los Alimentos
							@endif
						</td>
						<td>{{ number_format($solicitud->nombreEstudiante->datosAcademicos->promedioSemestreAnterior, 2, ',', '.') }}</td>
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