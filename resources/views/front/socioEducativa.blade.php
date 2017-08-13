@extends('front.layouts.base')

@section('titulo')
    <title>Área socio educativa - Sicdeudo</title>
@stop

@section('content')
<div class="container-fluid" style="background-color: #FFFFFF;">
	@include('front.layouts.content-title', ['titulo' => 'Área socio educativa'])
	<div class="row">
		<div class="col-xs-12">
			<center><img src="{{ ('assets/images/front/socio-educativa.jpg') }}" class="img-responsive" width="60%" height="auto"></center>
		</div><!-- end col-->
	</div>
	<div class="row">
		<div class="col-xs-12">
			<p class="m-t-30">El área Socio-Educativa a través de sus programas puede considerarse como un vehículo para la adaptación del estudiante al entorno socio cultural y a la Comunidad Universitaria, favoreciendo los vínculos de comunicación y organizando lazos de unión y solidaridad entre el alumnado; así también, sirve de base para el desarrollo de actividades que canalicen de manera funcional la utilización del tiempo libre por parte de los estudiantes.</p>
			<h3 class="m-t-30 m-b-30 text-uppercase">Programas del área Socio-Educativa: </h3>
			<ul style="list-style:none;">
				<li>
					<p>1. <b>Docencia:</b> se concibe como una dependencia de servicios estudiantiles, destinados a contribuir en la formación humanística y social de individuos a través de sus programas de Extra Académicas, como asignaturas programadas en la carga curricular del ciclo de estudios básicos de la Universidad de Oriente.</p>
				</li>
				<li>
					<p>2. <b>Extensión:</b> constituye la forma como la universidad asume la adaptación socio-cultural de los educandos al medio ambiente universitario, favoreciendo los vínculos de comunicación, unión y solidaridad, para el desarrollo integral del estudiante. Dentro de las actividades del programa de extensión se pueden mencionar: ferias estudiantiles, festival voz Udista, concurso literario, entre otros.</p>
				</li>
				<li>
					<p>3. <b>Formación:</b> se encarga de coordinar e implementar talleres, jornadas y eventos que permitan el crecimiento personal y profesional de los estudiantes universitarios.</p>
				</li>
				<li>
					<p>4. <b>Difusión:</b> se caracteriza por mantener informada a la comunidad intra y extra universitaria de los proyectos de extensión del área socio-educativa.</p>
				</li>
				<li>
					<p>5. <b>Agrupaciones Estudiantiles:</b> este programa tiene como objetivo general organizar y coordinar los diferentes grupos, clubes, asociaciones y otras manifestaciones colectivas estudiantiles </p>
				</li>
			</ul>
		</div><!-- end col-->
	</div>
	<!-- end row -->
</div>
@stop