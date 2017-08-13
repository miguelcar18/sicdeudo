@extends('front.layouts.base')

@section('titulo')
    <title>Área de orientación para cambio de especialidad - Sicdeudo</title>
@stop

@section('content')
<div class="container-fluid" style="background-color: #FFFFFF;">
	@include('front.layouts.content-title', ['titulo' => 'Área de orientación para cambio de espeialidad'])
	<div class="row">
		<div class="col-xs-12">
			<center><img src="{{ ('assets/images/front/cambio-especialidad.jpg') }}" class="img-responsive" width="60%" height="auto"></center>
		</div><!-- end col-->
	</div>
	<div class="row">
		<div class="col-xs-12">
			<p class="m-t-30">En cualquier momento de su vida académica los estudiantes se encuentran con el dilema de continuar o no con su carrera, es una decisión que puede ser tomada rápidamente o tomar su tiempo. Entre los pensamientos o sentimientos más frecuentes de los estudiantes al reflexionar sobre el cambio de carrera es la de haber perdido tiempo y dinero, es importante reconocer que el continuar estudiando la carrera que no es de su agrado tendrá consecuencias a futuro, como bajo rendimiento académico, desmotivación, estrés e incluso depresión.</p>
			<h3 class="m-t-30 m-b-30 text-uppercase">Factores que influyen en los estudiantes para pensar en cambiar de carrera:</h3>
			<ul style="list-style:none;">
				<li>
					<p>1. Alto nivel de dificultad de determinada(s) asignatura (s), que puede estar asociado a las bases recibidas durante la educación secundaria; a dificultades relacionadas con la adaptación a la universidad. Se debe tener en cuenta que en los primeros semestres de la carrera se estudian asignaturas del núcleo común, ya en semestres más avanzados se estudian las asignaturas específicas de la carrera.</p>
				</li>
				<li>
					<p>2. Dificultades en el aprendizaje por inadecuada metodología de estudio. </p>
				</li>
				<li>
					<p>3. Estudiar la carrera que no es de su interés ni preferencia profesional, o porque en los semestres ya cursados no se cumplieron las expectativas que tenía el estudiante.</p>
				</li>
			</ul>
			<p>Es importante revisar con los estudiantes sus expectativas con respecto a la nueva carrera que quiere elegir, revisar los motivos que argumentan para realizar el cambio de carrera, como situaciones difíciles de manejar para ellos, como la dificultad para conformar grupos de estudio, asignaturas que no son del agrado del estudiante, ya que estos motivos pueden indicar otro tipo de dificultades que no se relacionen directamente con la elección profesional sino con la adaptación a la vida universitaria.</p>
			<p>Aunque la decisión debe ser tomada por el estudiante los padres y/o acudientes pueden guiar y brindar ese apoyo familiar tan importante para ellos en este momento de tanta confusión y tan decisivo para su futuro. Es importante sugerir el acompañamiento de profesionales expertos, la reorientación profesional es una alternativa ayuda a mitigar posibles impactos negativos y contribuye a una mejor toma de decisiones</p>
		</div><!-- end col-->
	</div>
	<!-- end row -->
</div>
@stop