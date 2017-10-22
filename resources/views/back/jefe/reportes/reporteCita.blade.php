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
					{!! Form::open(array('route' => 'direccionConsultaCita', 'method' => 'post', 'class' => 'form-horizontal', 'id' => 'reporteForm')) !!}
						{!! Form::hidden('direccionConsultaCita', URL::route('direccionConsultaCita'), ['class' => 'form-control', 'id' => 'direccionConsultaCita']) !!}
						<div class="form-group">
							<label for="periodoAcademico">Periodo académico:</label>
							{!! Form::select('anioIngresoUdo', array('' => 'Seleccione', '3-2021' => 'III-2021', '1-2021' => 'I-2021', '3-2020' => 'III-2020', '1-2020' => 'I-2020', '3-2019' => 'III-2019', '1-2019' => 'I-2019', '3-2018' => 'III-2018', '1-2018' => 'I-2018', '3-2017' => 'III-2017', '1-2017' => 'I-2017', '3-2016' => 'III-2016', '1-2016' => 'I-2016', '3-2015' => 'III-2015', '1-2015' => 'I-2015', '3-2014' => 'III-2014', '1-2014' => 'I-2014', '3-2013' => 'III-2013', '1-2013' => 'I-2013', '3-2012' => 'III-2012', '1-2012' => 'I-2012', '3-2011' => 'III-2011', '1-2011' => 'I-2011', '3-2010' => 'III-2010', '1-2010' => 'I-2010', '3-2009' => 'III-2009', '1-2009' => 'I-2009', '3-2008' => 'III-2008', '1-2008' => 'I-2008', '3-2007' => 'III-2007', '1-2007' => 'I-2007', '3-2006' => 'III-2006', '1-2006' => 'I-2006', '3-2005' => 'III-2005', '1-2005' => 'I-2005', '3-2004' => 'III-2004', '1-2004' => 'I-2004', '3-2003' => 'III-2003', '1-2003' => 'I-2003', '3-2002' => 'III-2002', '1-2002' => 'I-2002', '3-2001' => 'III-2001', '1-2001' => 'I-2001', '3-2000' => 'III-2000', '1-2000' => 'I-2000'), null, $attributes = array('id' => 'anioIngresoUdo', 'class' => 'form-control', 'required' => 'required')) !!}
						</div>
						<button type="button" class="btn btn-primary" id="criterioConsultarCita"><i class="zmdi zmdi-search"></i> Buscar</button>
					{!! form::close() !!}
				</div>
			</div><!-- end row -->
		</div>
	</div>
</div>
<div id="resultados">
	<div class="row">
		<div class="col-xs-12 col-lg-12 col-xl-8">
			<div class="card-box">
				<h4 class="header-title m-t-0 m-b-20">Resultado de búsqueda "<label id="criterio"></label> <label id="periodo"></label>"</h4>
				<div class="table-responsive">
					<table id="datatableConsulta" class="table table-striped table-bordered">
					<thead>
						<tr>
							<th>Cédula</th>
							<th>Nombre</th>
							<th>Status</th>
						</tr>
					</thead>
					<tbody>
						
					</tbody>
				</table>
				<div class="text-center">
					<button type="button" data-href="{{ URL::route('direccionReporteCita') }}" name="reporteConsultaCita" id="reporteConsultaCita" class="btn btn-secondary waves-effect" data-periodo="-"><i class="icon-printer position-right"></i> Imprimir</button>
				</div>
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
</div>
@stop

@section('styles')
<!--Morris Chart CSS -->
<link rel="stylesheet" href="{{ asset('assets/plugins/morris/morris.css') }}">
@stop

@section('javascripts')
<script src="{{ asset('assets/plugins/morris/morris.min.js') }}"></script>
<script src="{{ asset('assets/plugins/raphael/raphael-min.js') }}"></script>
<script type="text/javascript">
	
</script>
@stop