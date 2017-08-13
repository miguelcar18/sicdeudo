@extends('front.layouts.base')

@section('titulo')
    <title>Área de desarrollo social - Sicdeudo</title>
@stop

@section('content')
<div class="container-fluid" style="background-color: #FFFFFF;">
	@include('front.layouts.content-title', ['titulo' => 'Área de desarrollo social'])
	<div class="row">
		<div class="col-xs-12">
			<center><img src="{{ ('back/assets/images/front/desarrollo-social.jpg') }}" class="img-responsive" width="60%" height="auto"></center>
		</div><!-- end col-->
	</div>
	<div class="row">
		<div class="col-xs-12">
			<p class="m-t-30">El área de Desarrollo Social es una unidad técnica adscrita a la Delegación de Desarrollo Estudiantil, encargada de atender al estudiante en sus aspectos económicos y sociales. Permite al estudiante obtener un estímulo económico que contribuirá con su desarrollo integral dentro de la Universidad.</p>
			<h3 class="m-t-30 m-b-30">PROGRAMAS QUE OFRECE EL ÁREA DE DESARROLLO SOCIAL:</h3>
			<ul style="list-style:none;">
				<li>
					<p>1. <b>Ayudantías Ordinarias:</b> es una modalidad de apoyo socio-económico que les brinda la Universidad de Oriente a sus estudiantes regulares, que posean escasos recursos económicos y de rendimiento académico satisfactorio comprobado.</p>
					<p>Este beneficio deberá ser retribuido por los alumnos con la presentación de tareas en alguna dependencia de la institución que, a la vez que constituyan una colaboración a la misma y a su formación integral.</p>
				</li>
				<li>
					<p>2. <b>Ayudantías Técnicas:</b> es la asignación monetaria mensual que se otorga a los estudiantes regulares de escasos socio-económicos y con un rendimiento académico satisfactorio, atendiendo a una actividad realizada en una dependencia de la institución. Tomándose en cuenta las diferentes habilidades, destrezas y conocimientos del beneficiario.</p>
					<p>Al igual que las ayudantías ordinarias, este beneficio deberá ser retribuido por los alumnos con la presentación de tareas en alguna dependencia de la institución que, a la vez que constituyan una colaboración a la misma y a su formación integral.</p>
				</li>
				<li>
					<p>3. <b>Becas de Residencias:</b> es un beneficio destinado a financiar gastos de residencias a los alumnos de pre-grado de la Universidad de Oriente núcleo Monagas procedentes de otras regiones del país y que posean un buen rendimiento académico y escasos recursos económicos para costear el pago de residencia. </p>
				</li>
				<li>
					<p>4. <b>Ayudas eventuales:</b> es una modalidad de apoyo socio-económico que brinda la Universidad de Oriente anualmente a sus estudiantes regulares, de acuerdo a una necesidad especifica que estos posean, tales como: realización de trabajos de grado y sus alternativas, acto académico, residencias, libros, lentes, etc. </p>
				</li>
			</ul>
		</div><!-- end col-->
	</div>
	<!-- end row -->
</div>
@stop