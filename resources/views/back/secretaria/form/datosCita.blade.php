<h4 class="header-title m-t-0">DATOS DE LA CITA</h4>
<div class="p-20">
	<div class="form-group row">
		<label for="requisitos" class="col-sm-6 form-control-label"><b>Apellidos y nombres:</b> {{ $peticion->nombreUsuario->name }}</label>
		<?php
			$separar = explode("-", $peticion->fechaCita);
			$fechaNormal = $separar[2]."/".$separar[1]."/".$separar[0];
		?>
		<label for="requisitos" class="col-sm-6 form-control-label"><b>Fecha:</b> {{ $fechaNormal }}</label>
	</div>
</div>