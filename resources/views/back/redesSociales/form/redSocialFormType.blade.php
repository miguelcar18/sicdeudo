<div class="p-20">
	<div class="form-group row">
		<label for="nombre" class="col-sm-2 form-control-label">Nombre</label>
		<div class="col-sm-10">
			{!! Form::text('nombre', null, ['placeholder' => 'Nombre', 'class' => 'form-control', 'id' => 'nombre', 'required' => true, 'readOnly' => true]) !!}
		</div>
	</div>
	<div class="form-group row">
		<label for="url" class="col-sm-2 form-control-label">URL <span class="text-danger">*</span></label>
		<div class="col-sm-10">
			{!! Form::url('url', null, ['placeholder' => 'Url o dirección web', 'class' => 'form-control', 'id' => 'url', 'required' => true]) !!}
		</div>
	</div>
</div>