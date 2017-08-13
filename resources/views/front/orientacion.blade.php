@extends('front.layouts.base')

@section('titulo')
    <title>Área de orientación - Sicdeudo</title>
@stop

@section('content')
<div class="container-fluid" style="background-color: #FFFFFF;">
	@include('front.layouts.content-title', ['titulo' => 'Área de orientación'])
	<div class="row">
		<div class="col-xs-12">
			<center><img src="{{ ('assets/images/front/orientacion.jpg') }}" class="img-responsive" width="60%" height="auto"></center>
		</div><!-- end col-->
	</div>
	<div class="row">
		<div class="col-xs-12">
			<p class="m-t-30">El área de orientación es una dependencia de la Delegación de Desarrollo Estudiantil que tiene por objeto impartir orientación académica, vocacional y personal-social. Contribuye al desarrollo integral del estudiante, propiciando su bienestar psicológico a través de la implementación de programas que le proporcionan las herramientas necesarias, con la utilización de estrategias individuales y grupales; a fin de contribuir con su rendimiento académico y favorecer su adaptación al medio universitario y su crecimiento personal.</p>
			<h3 class="m-t-30 m-b-30">PROGRAMAS QUE OFRECE EL ÁREA DE ORIENTACIÓN:</h3>
			<ul style="list-style:none;">
				<li>
					<p>1. <b>Orientación Personal-Social:</b> su función es ayudar al estudiante a superar los problemas y dificultadores que en el orden personal y social se le presenten.</p>
				</li>
				<li>
					<p>2. <b>Orientación Vocacional:</b> tiene como objetivo ayudar al individuo a elegir la carrera que más le convenga de acuerdo a sus aptitudes e intereses. </p>
				</li>
				<li>
					<p>3. <b>Orientación Educativa:</b> su propósito es dar la información para la tramitación de equivalencias, reingresos, traslados y retiro de asignaturas. Así como también realizar el proceso de cambio de especialidad de los estudiantes que lo deseen.</p>
				</li>
				<li>
					<p>4. <b>Información y Difusión:</b> su función es elaborar y entregar material informativo: pensa de estudio, información referente a los servicios universitarios y oportunidades de estudio. </p>
				</li>
			</ul>
		</div><!-- end col-->
	</div>
	<!-- end row -->
</div>
@stop