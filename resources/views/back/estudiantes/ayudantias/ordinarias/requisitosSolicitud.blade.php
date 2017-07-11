<h4 class="header-title m-t-0">REQUISITOS A CONSIGNAR PARA PROGRAMA DE AYUDANTÍA ORDINARIA</h4>
<div class="p-20">
	<div class="form-group row">
		<label for="requisitos" class="col-sm-12 form-control-label">1. Fotocopia de la cédula de identidad ampliada.</label>
		<label for="requisitos" class="col-sm-12 form-control-label">2. Foto tipo carnet.</label>
		<label for="requisitos" class="col-sm-12 form-control-label">3. Record académico actualizado.</label>
		<label for="requisitos" class="col-sm-12 form-control-label">4. Constancia de estudio actualizada.</label>
		<label for="requisitos" class="col-sm-12 form-control-label">5. Carga académica actualizada.</label>
		<label for="requisitos" class="col-sm-12 form-control-label">6. Constancia de trabajo del principal proveedor especificando sueldo.</label>
		<label for="requisitos" class="col-sm-12 form-control-label">7. Fotocopia de recibo de luz, agua o teléfono.</label>
		<label for="requisitos" class="col-sm-12 form-control-label">8. Carpeta marrón con gancho.</label>
		<label for="requisitos" class="col-sm-12 form-control-label text-danger">Debe imprimir la planilla de solicitud de ayudantía ordinaria y entregarla con todos los requisitos en la coordinación del programa de ayudantía ordinaria.</label>
	</div>
	<div class="form-group row">
		<div class="col-sm-6">
			{!! Form::button('Enviar', ['class'=> 'btn btn-primary waves-effect waves-light pull-right', 'id' => 'solicitudAOSubmit', 'type' => 'submit', 'data' => 1]) !!}
		</div>
		<div class="col-sm-6">
			{!! Form::button('Cancelar', ['class'=> 'btn btn-secondary waves-effect m-l-5', 'id' => 'cancelar', 'type' => 'reset']) !!}
		</div>
	</div>
</div>