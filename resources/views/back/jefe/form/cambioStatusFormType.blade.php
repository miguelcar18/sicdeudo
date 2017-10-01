<div class="p-20">
	<div class="row">
        <div class="col-xs-12 col-sm-6">
            <div class="form-group clearfix">
                <label for="name"><b>Apellidos y nombres:</b> {{ $estudiante->apellidosNombres }} </label>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6">
            <div class="form-group clearfix">
                <label for="surname"><b>Cédula:</b> {{ number_format($estudiante->cedula, 0, '', '.') }}</label>
            </div>
        </div>
    </div>
	<div class="form-group row">
		<label for="nombre" class="col-sm-2 form-control-label">Status <span class="text-danger">*</span></label>
		<div class="col-sm-4">
			{!! Form::select('status', array('' => 'Seleccione', 'Estudio socioeconomico realizado' => 'Estudio socioeconomico realizado', 'Aprobado' => 'Aprobado', 'Rechazado' => 'Rechazado', 'Renovado' => 'Renovado', 'Renovado con recuperación académica' => 'Renovado con recuperación académica'), null, $attributes = array('id' => 'status', 'class' => 'required form-control')) !!}
		</div>
		<label for="url" class="col-sm-2 form-control-label">Observaciones</label>
		<div class="col-sm-4">
			{!! Form::textarea('observaciones', null, $attributes = array('id' => 'observaciones', 'class' => 'form-control', 'rows' => '4')) !!}
		</div>
	</div>
</div>