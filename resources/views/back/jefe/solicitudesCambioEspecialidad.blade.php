@extends('back.layouts.base')

@section('titulo')
<title>Solicitudes de ayudantías ordinarias - Sicdeudo</title>
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
						<th>Especialidad</th>
						<th>Status</th>
						<th>Observaciones</th>
					</tr>
				</thead>
				<tbody>
					@foreach($solicitudes as $solicitud)
					<tr>
						<td>
							<a href="{{ URL::route('formularioRequisitosAO', $solicitud->estudiante) }}">
								{{ number_format($solicitud->nombreEstudiante->cedula, 0, '', '.') }}
							</a>
						</td>
						<td>{{ $solicitud->nombreEstudiante->apellidosNombres }}</td>
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
						<td>
							{!! Form::select('escuela', array('' => 'Seleccione', 'aprobado' => 'Aprobado', 'rechazado' => 'Rechazado'), null, $attributes = array('id' => 'escuela', 'class' => 'form-control')) !!}
						</td>
						<td>
							{!! Form::text('apellidosNombres', null, ['placeholder' => '', 'class' => 'form-control', 'id' => 'apellidosNombres']) !!}
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