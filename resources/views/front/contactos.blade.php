@extends('front.layouts.base')

@section('titulo')
    <title>Contactos - Sicdeudo</title>
@stop

@section('content')
<div class="container-fluid" style="background-color: #FFFFFF;">
	@include('front.layouts.content-title', ['titulo' => 'Contactos'])
	<div class="row">
		<div class="col-xs-12">
			<center><img src="{{ ('assets/images/front/contactos.jpg') }}" class="img-responsive" width="60%" height="auto"></center>
		</div><!-- end col-->
	</div>
	<div class="row">
		<div class="col-xs-12">
			<h4 class="m-t-30 m-b-30">Teléfono:</h4>
			<p>0291-3004004</p>
			<h4 class="m-t-30 m-b-30">Dirección:</h4>
			<p>Universidad de Oriente, Núcleo Monagas</p>
			<p>Campus los Guaritos</p>
			<p>Edif. Comunal  2do Piso.</p>
			<br>
			@foreach($redes as $red)
			<p>Búscanos por {!! $red->nombre !!} como: <a href="{{ $red->url }}" target="_blank">Área de Desarrollo Social UDO-Monagas</a></p>
			@endforeach
		</div><!-- end col-->
	</div>
	<!-- end row -->
</div>
@stop