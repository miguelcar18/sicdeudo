<div class="p-20">
	<div class="form-group row">
		<label for="direccionPermanente" class="col-sm-2 form-control-label">Imagen</label>
		<div class="col-sm-4">
			{!! Form::file('file', $attributes = array('class' => 'form-control file-styled', 'id' => 'file', 'accept' => 'image/jpg,image/png,image/jpeg,image/gif')) !!}
		</div>
		<label for="email" class="col-sm-2 form-control-label">Correo Electrónico <span class="text-danger">*</span></label>
		<div class="col-sm-4">
			{!! Form::email('email', null, ['placeholder' => 'Correo electrónico', 'class' => 'form-control', 'id' => 'email', 'required' => true]) !!}
		</div>
	</div>
	<div class="form-group row">
		<label for="apellidosNombres" class="col-sm-2 form-control-label">Apellidos y Nombres <span class="text-danger">*</span></label>
		<div class="col-sm-4">
			{!! Form::text('apellidosNombres', null, ['placeholder' => 'Apellidos y nombres', 'class' => 'form-control', 'id' => 'apellidosNombres', 'required' => true]) !!}
		</div>
		<label for="cedula" class="col-sm-2 form-control-label">Cédula <span class="text-danger">*</span></label>
		<div class="col-sm-4">
			{!! Form::text('cedula', null, ['placeholder' => 'Cédula', 'class' => 'form-control', 'id' => 'cedula', 'required' => true]) !!}
		</div>
	</div>
	<div class="form-group row">
		<label for="estadoCivil" class="col-sm-2 form-control-label">Rol <span class="text-danger">*</span></label>
		<div class="col-sm-4">
			{!! Form::select('estadoCivil', array('' => 'Seleccione', 'soltero' => 'Soltero(a)', 'casado' => 'Casado(a)','viudo' => 'Divorciado(a)', 'divorciado' => 'Viudo(a)'), null, $attributes = array('id' => 'estadoCivil', 'class' => 'form-control', 'required' => 'required')) !!}
		</div>
		<label for="lugarNacimiento" class="col-sm-2 form-control-label">Nombre de usuario <span class="text-danger">*</span></label>
		<div class="col-sm-4">
			{!! Form::text('lugarNacimiento', null, ['placeholder' => 'Nombre de usuario', 'class' => 'form-control', 'id' => 'lugarNacimiento', 'required' => true]) !!}
		</div>
	</div>
	<div class="form-group row">
		<label for="telefonoCelular" class="col-sm-2 form-control-label">Contraseña <span class="text-danger">*</span></label>
		<div class="col-sm-4">
			{!! Form::text('telefonoCelular', null, ['placeholder' => 'Contraseña', 'class' => 'form-control', 'id' => 'telefonoCelular', 'required' => true]) !!}
		</div>
		<label for="telefonoReferencia" class="col-sm-2 form-control-label">Repetir contraseña <span class="text-danger">*</span></label>
		<div class="col-sm-4">
			{!! Form::text('telefonoReferencia', null, ['placeholder' => 'Repetir contraseña', 'class' => 'form-control', 'id' => 'telefonoReferencia', 'required' => true]) !!}
		</div>
	</div>
	<div class="form-group row">
		<label for="direccionLocal" class="col-sm-2 form-control-label">Detalles <span class="text-danger">*</span></label>
		<div class="col-sm-4">
			{!! Form::textarea('direccionLocal', null, $attributes = array('id' => 'direccionLocal', 'class' => 'form-control', 'rows' => '3', 'placeholder' => 'Detalles')) !!}
		</div>
	</div>
</div>