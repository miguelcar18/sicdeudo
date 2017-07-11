<h4 class="header-title m-t-0">REQUISITOS A CONSIGNAR PARA PROGRAMA DE AYUDANTÍA ORDINARIA</h4>
<div class="p-20">
	<div class="form-group row">
		<label for="requisitos" class="col-sm-12 form-control-label">1. Record académico actualizado.</label>
		<label for="requisitos" class="col-sm-12 form-control-label">2. Constancia de estudio actualizada.</label>
		<label for="requisitos" class="col-sm-12 form-control-label">3. Carga académica actualizada.</label>
	</div>
	<div class="form-group row">
		<div class="col-sm-6">
			{!! Form::button('Enviar', ['class'=> 'btn btn-primary waves-effect waves-light pull-right', 'id' => 'renovacionAOSubmit', 'type' => 'submit', 'data' => 1]) !!}
		</div>
		<div class="col-sm-6">
			{!! Form::button('Cancelar', ['class'=> 'btn btn-secondary waves-effect m-l-5', 'id' => 'cancelar', 'type' => 'reset']) !!}
		</div>
	</div>
</div>