<h4 class="header-title m-t-0">DATOS GENERALES</h4>
<div class="p-20">
	<div class="form-group row">
		<label for="requisitos" class="col-sm-6 form-control-label"><b>Apellidos y nombres:</b> {{ $estudiante->apellidosNombres }}</label>
		<label for="requisitos" class="col-sm-6 form-control-label"><b>Cédula:</b> {{ number_format($estudiante->cedula, 0, '', '.') }}</label>
	</div>
	<div class="form-group row">
		<label for="requisitos" class="col-sm-6 form-control-label"><b>Edad:</b> {{ $estudiante->edad }}</label>
	</div>
	<div class="form-group row">
		@if($estudiante->fechaNacimiento != null)
		<?php 
			$separar = explode("-", $estudiante->fechaNacimiento);
			$fechaNacimientoNormal = $separar[2]."/".$separar[1]."/".$separar[0];
		?>
		<label for="requisitos" class="col-sm-6 form-control-label"><b>Fecha de nacimiento:</b> {{ $fechaNacimientoNormal }}</label>
		@endif
		<label for="requisitos" class="col-sm-6 form-control-label"><b>Año de ingreso a la UDO:</b> {{ $estudiante->datosAcademicos->anioIngresoUdo }}</label>
	</div>
	<div class="form-group row">
		<label for="requisitos" class="col-sm-6 form-control-label"><b>Estado civil:</b> {{ ucfirst($estudiante->estadoCivil) }}</label>
		<label for="requisitos" class="col-sm-6 form-control-label"><b>Año de ingreso al programa:</b> {{ $estudiante->datosAcademicos->anioIngresoPrograma }}</label>
	</div>
	<div class="form-group row">
		@if($estudiante->lugarNacimiento != null)
		<label for="requisitos" class="col-sm-6 form-control-label"><b>Lugar de nacimiento:</b> {{ $estudiante->lugarNacimiento }}</label>
		@endif
		<label for="requisitos" class="col-sm-6 form-control-label"><b>Semestre que cursa actualmente:</b> 
			@if($estudiante->datosAcademicos->semestreActual == 'primero')
			1er Semestre
			@elseif($estudiante->datosAcademicos->semestreActual == 'segundo')
			2do Semestre
			@elseif($estudiante->datosAcademicos->semestreActual == 'tercero')
			3ro Semestre
			@elseif($estudiante->datosAcademicos->semestreActual == 'cuarto')
			4to Semestre
			@elseif($estudiante->datosAcademicos->semestreActual == 'quinto')
			5to Semestre
			@elseif($estudiante->datosAcademicos->semestreActual == 'sexto')
			6to Semestre
			@elseif($estudiante->datosAcademicos->semestreActual == 'septimo')
			7mo Semestre
			@elseif($estudiante->datosAcademicos->semestreActual == 'octavo')
			8vo Semestre
			@elseif($estudiante->datosAcademicos->semestreActual == 'noveno')
			9no Semestre
			@elseif($estudiante->datosAcademicos->semestreActual == 'decimo')
			10mo Semestre
			@endif
		</label>
	</div>
	<div class="form-group row">
		<label for="requisitos" class="col-sm-6 form-control-label"><b>Dirección permanente:</b> {{ $estudiante->direccionPermanente }}</label>
		@if($estudiante->datosAcademicos->creditosSemestreAnterior != null)
		<label for="requisitos" class="col-sm-6 form-control-label"><b>Créditos aprobados en el semestre anterior:</b> {{ $estudiante->datosAcademicos->creditosSemestreAnterior }}</label>
		@endif
	</div>
	<div class="form-group row">
		<label for="requisitos" class="col-sm-6 form-control-label"><b>Dirección local:</b> {{ $estudiante->direccionLocal }}</label>
		@if($estudiante->datosAcademicos->creditosAprobadosCarrera != null)
		<label for="requisitos" class="col-sm-6 form-control-label"><b>Total de créditos aprobados en la carrera:</b> {{ $estudiante->datosAcademicos->creditosAprobadosCarrera }}</label>
		@endif
	</div>
	<div class="form-group row">
		<label for="requisitos" class="col-sm-6 form-control-label"><b>Correo electrónico:</b> {{ $estudiante->email }}</label>
		<label for="requisitos" class="col-sm-6 form-control-label"><b>Promedio del semestre anterior:</b> {{ $estudiante->datosAcademicos->promedioSemestreAnterior }}</label>
	</div>
	<div class="form-group row">
		<label for="requisitos" class="col-sm-6 form-control-label"><b>Teléfono celular:</b> {{ $estudiante->telefonoCelular }}</label>
		@if($estudiante->datosAcademicos->creditosSemestreAnterior != null)
		<label for="requisitos" class="col-sm-6 form-control-label"><b>Número de créditos inscritos actualmente:</b> {{ $estudiante->datosAcademicos->numeroCreditosInscritos }}</label>
		@endif
	</div>
	<div class="form-group row">
		<label for="requisitos" class="col-sm-6 form-control-label"><b>Teléfono de residencia:</b> {{ $estudiante->telefonoReferencia }}</label>
		@if($estudiante->datosAcademicos->creditosSemestreAnterior != null)
		<label for="requisitos" class="col-sm-6 form-control-label"><b>Número de materias inscritas actualmente:</b> {{ $estudiante->datosAcademicos->numeroMateriasInscritas }}</label>
		@endif
	</div>
</div>