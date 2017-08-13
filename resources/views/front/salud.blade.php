@extends('front.layouts.base')

@section('titulo')
    <title>Área de salud - Sicdeudo</title>
@stop

@section('content')
<div class="container-fluid" style="background-color: #FFFFFF;">
	@include('front.layouts.content-title', ['titulo' => 'Área de salud'])
	<div class="row">
		<div class="col-xs-12">
			<center><img src="{{ ('back/assets/images/front/salud.jpg') }}" class="img-responsive" width="60%" height="auto"></center>
		</div><!-- end col-->
	</div>
	<div class="row">
		<div class="col-xs-12">
			<p class="m-t-30">El área de salud es una estructura técnico administrativa, encargada de planificar y ejecutar las políticas de salud hacia el sector estudiantil a objeto de lograr estados saludables que faciliten su rendimiento académico.</p>
			<h3 class="m-t-30 m-b-30">PROGRAMAS DEL ÁREA DE SALUD:</h3>
			<ul style="list-style:none;">
				<li>
					<p>1. <b>Medicina preventiva:</b> Jornada de salud, drogas y sexología , de prevención de enfermedades cardiovasculares, toma de tensión, jornada de citología.</p>
				</li>
				<li>
					<p>2. <b>Medicina Curativa:</b> Despistaje y tratamiento de enfermedades (medicina general), referencia a especialistas, atención de primeros auxilios, oftalmología, farmacia.</p>
				</li>
			</ul>
			<h3 class="m-t-30 m-b-30">BENEFICIOS QUE BRINDA EL SERVICIO MÉDICO:</h3>
			<ul style="list-style:none;">
				<li>
					<p>a. Consultas de medicina general.</p>
				</li>
				<li>
					<p>b. Consultas odontológicas.</p>
				</li>
				<li>
					<p>c. Consultas ginecológicas.</p>
				</li>
				<li>
					<p>d. Referencias: especialistas, laboratorios y exámenes especializados, entre otros.</p>
				</li>
			</ul>
			<h3 class="m-t-30 m-b-30">FAMES:</h3>
			<p>Es la fundación de asistencia médica hospitalaria para estudiantes de educación superior pública que no estén amparados por seguros. Entre sus beneficios esta: hospitalización, cirugía, maternidad.</p>
		</div><!-- end col-->
	</div>
	<!-- end row -->
</div>
@stop