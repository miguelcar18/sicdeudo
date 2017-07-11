<h4 class="m-t-0" style="text-align: center;"><b>DATOS GENERALES</b></h4>
<div class="p-20">
	<div class="form-group row">
		<label for="apellidos" class="col-sm-12 form-control-label" style="text-align: center; text-transform: uppercase;"><b>NOMBRES Y APELLIDOS: {{ Auth::user()->name }}</b></label>
	</div>
	<div class="form-group row">
		<label for="cedula" class="col-sm-12 form-control-label" style="text-align: center; text-transform: uppercase;"><b>CÉDULA: {{ number_format(Auth::user()->cedula, 0, '', '.') }}</b></label>
	</div>
	<div class="form-group row">
		<label for="notaCita" class="col-sm-12 form-control-label text-danger" style="text-align: center;">Seleccione una fecha para realizar entrevista de orientación</label>
	</div>
	<div class="form-group row">
		<div class="col-sm-2 col-sm-offset-5">
			{!! Form::text('fechaCita', null, ['placeholder' => 'dd/mm/yyyy', 'class' => 'form-control', 'id' => 'fechaCita', 'required' => true]) !!}
			{!! Form::hidden('usuario', Auth::user()->id, ['class' => 'form-control', 'id' => 'usuario']) !!}
		</div>
	</div>
	<div class="form-group row">
		<div class="col-sm-2 col-sm-offset-5">
			{!! Form::button('Enviar', ['class'=> 'btn btn-primary waves-effect waves-light btn-block', 'id' => 'solicitudCESubmit', 'type' => 'submit', 'data' => 1]) !!}
		</div>
	</div>
</div>