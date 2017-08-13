@extends('front.layouts.base')

@section('titulo')
    <title>Delegación de desarrollo estudiantil - Sicdeudo</title>
@stop

@section('content')
<div class="container-fluid" style="background-color: #FFFFFF;">
	@include('front.layouts.content-title', ['titulo' => 'Delegación de desarrollo estudiantil'])
	<div class="row">
		<div class="col-xs-12">
			<center><img src="{{ ('back/assets/images/front/desarrollo-estudiantil.jpg') }}" class="img-responsive" width="60%" height="auto"></center>
		</div><!-- end col-->
	</div>
	<div class="row">
		<div class="col-xs-12">
			<p class="m-t-30">La Delegación de Desarrollo Estudiantil del Núcleo de Monagas, ubicada en el campus los Guaritos, se presenta como una estructura técnico-administrativa de la Universidad de Oriente que se encarga de brindarle al estudiante atención integral en apoyo a su prosecución académica, cuya función es ejecutar los planes y políticas emanadas de los organismos del subsistema de educación superior. </p>
			<p>Esta dependencia contribuye a que el estudiante, fuera del entorno académico, descubra y desarrolle intereses en relación al contexto cultural y social; participe en actividades que le permitan vivencia, experiencias que contribuyan a integrar la configuración de su personalidad. Por otra parte, ésta es la asistencia individual o grupal que se presta al alumno orientada a permitirle que supere los problemas de índole económico social, personal y/o grupal que pueda confrontar en su vida universitaria </p>
			<h3 class="m-t-30 m-b-30">MISIÓN</h3>
			<p>“Contribuir con el desarrollo integral del estudiante en su aspecto Bio-Psico-Social y espiritual a fin de lograr que sea capaz de actuar con libertad, responsabilidad y solidaridad con sus semejantes y así ser un ciudadano con sentido de pertenencia social en la conducción de su vida y del país.” </p>
			<h3 class="m-t-30 m-b-30">OBJETIVO</h3>
			<p>“Atender los aspectos Bio-Psico-Sociales y grupales que se presenten en el medio estudiantil a través de los proyectos que llevan a cabo las cuatro áreas que conforman la Delegación de Desarrollo Estudiantil.”</p>
		</div><!-- end col-->
	</div>
	<!-- end row -->
</div>
@stop