@extends('back.layouts.base')

@section('titulo')
<title>Reportes - Sicdeudo</title>
@stop

@section('content')
@include('back.layouts.content-title', ['titulo' => 'Consultar reporte'])

<div class="row">
	<div class="col-xs-12">
		<div class="card-box">
			<div class="row">
				<div class="col-lg-8 col-md-8 col-md-offset-2">
					<h4 class="header-title m-t-0 m-b-30" style="text-align: center">Criterios de búsqueda</h4>
					<form class="form-inline">
						<div class="form-group">
							<label for="exampleInputName2">Criterio:</label>
							{!! Form::select('anioIngresoUdo', array('' => 'Seleccione', '1' => 'Solicitud de ayudantía ordinaria', '2' => 'Renovación de ayudantía ordinaria', '3' => 'Solicitud de ayudantía técnica', '4' => 'Renovación de ayudantía técnica', '5' => 'Solicitud de beca de residencia', '6' => 'Renovación de beca de residenia', '7' => 'Solicitud de cambio de especialidad'), null, $attributes = array('id' => 'anioIngresoUdo', 'class' => 'form-control', 'required' => 'required')) !!}
						</div>
						<div class="form-group">
							<label for="exampleInputEmail2">Periodo académico:</label>
							{!! Form::select('anioIngresoUdo', array('' => 'Seleccione', 'I-2017' => 'I-2017', 'III-2016' => 'III-2016', 'I-2016' => 'I-2016', 'III-2015' => 'III-2015', 'I-2015' => 'I-2015', 'III-2014' => 'III-2014', 'I-2014' => 'I-2014', 'III-2013' => 'III-2013', 'I-2013' => 'I-2013', 'III-2012' => 'III-2012', 'I-2012' => 'I-2012', 'III-2011' => 'III-2011', 'I-2011' => 'I-2011', 'III-2010' => 'III-2010', 'I-2010' => 'I-2010', 'III-2009' => 'III-2009', 'I-2009' => 'I-2009', 'III-2008' => 'III-2008', 'I-2008' => 'I-2008', 'III-2007' => 'III-2007', 'I-2007' => 'I-2007', 'III-2006' => 'III-2006', 'I-2006' => 'I-2006', 'III-2005' => 'III-2005', 'I-2005' => 'I-2005', 'III-2004' => 'III-2004', 'I-2004' => 'I-2004', 'III-2003' => 'III-2003', 'I-2003' => 'I-2003', 'III-2002' => 'III-2002', 'I-2002' => 'I-2002', 'III-2001' => 'III-2001', 'I-2001' => 'I-2001', 'III-2000' => 'III-2000', 'I-2000' => 'I-2000'), null, $attributes = array('id' => 'anioIngresoUdo', 'class' => 'form-control', 'required' => 'required')) !!}
						</div>
						<button type="submit" class="btn btn-primary"><i class="zmdi zmdi-search"></i> Buscar</button>
					</form>
				</div>
			</div><!-- end row -->
		</div>
	</div>
</div>
<div class="row">
	<div class="col-xs-12 col-lg-12 col-xl-8">
		<div class="card-box">
			<h4 class="header-title m-t-0 m-b-20">Resultado de búsqueda "Solicitud de ayuda ordinaria I-2017"</h4>
			<div class="table-responsive">
				<table id="datatable" class="table table-striped table-bordered">
				<thead>
					<tr>
						<th>Cédula</th>
						<th>Nombre</th>
						<th>Semestre</th>
						<th>Especialidad</th>
						<th>Status</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>
							{{ number_format('23534588', 0, '', '.') }}
						</td>
						<td>Daihana Rivero</td>
						<td>
							8vo Semestre
						</td>
						<td>
							Ingeniería de Sistemas
						</td>
						<td>
							Aprobado
						</td>
					</tr>
				</tbody>
			</table>
			</div>
		</div>
	</div><!-- end col-->

	<div class="col-xs-12 col-lg-12 col-xl-4">
		<div class="card-box">
		<h4 class="header-title m-t-0 m-b-30">Estadística</h4>
			<div id="morris-donut-example" style="height: 263px;"></div>
			<div class="text-xs-center">
				<ul class="list-inline chart-detail-list m-b-0">
					<li class="list-inline-item">
						<h6 style="color: #1bb99a;">Aprobados</h6>
					</li>
					<li class="list-inline-item">
						<h6 style="color: #ff0000;">Rechazados</h6>
					</li>
					<li class="list-inline-item">
						<h6 style="color: #3db9dc;">Pendientes</h6>
					</li>
				</ul>
			</div>
		</div>
	</div><!-- end col-->
</div>
@stop

@section('styles')
<!--Morris Chart CSS -->
<link rel="stylesheet" href="{{ asset('back/assets/plugins/morris/morris.css') }}">
@stop

@section('javascripts')
<script src="{{ asset('back/assets/plugins/morris/morris.min.js') }}"></script>
<script src="{{ asset('back/assets/plugins/raphael/raphael-min.js') }}"></script>
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

	!function($) {
		"use strict";
		var Dashboard = function() {};

		Dashboard.prototype.createDonutChart = function(element, data, colors) {
			Morris.Donut({
				element: element,
				data: data,
				resize: true,
				colors: colors
			});
		},

		Dashboard.prototype.init = function() {
			var $donutData = [
			{label: "Aprobados", value: 1},
			{label: "Rechazados", value: 0},
			{label: "Pendientes", value: '0'}
			];
			this.createDonutChart('morris-donut-example', $donutData, ['#1bb99a','#ff0000', '#3db9dc']);
		},
		$.Dashboard = new Dashboard, $.Dashboard.Constructor = Dashboard
	}(window.jQuery),

	function($) {
		"use strict";
		$.Dashboard.init();
	}(window.jQuery);
</script>
@stop