<h4 class="header-title m-t-0">DATOS GENERALES</h4>
<div class="p-20">
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
		<label for="edad" class="col-sm-2 form-control-label">Edad <span class="text-danger">*</span></label>
		<div class="col-sm-4">
			{!! Form::input('number', 'edad', null, ['id' => 'edad', 'class' => 'form-control', 'placeholder' => 'Edad', 'required' => true, 'min' => '1']) !!}
		</div>
		<label for="estadoCivil" class="col-sm-2 form-control-label">Estado Civil <span class="text-danger">*</span></label>
		<div class="col-sm-4">
			{!! Form::select('estadoCivil', array('' => 'Seleccione', 'soltero' => 'Soltero(a)', 'casado' => 'Casado(a)','viudo' => 'Divorciado(a)', 'divorciado' => 'Viudo(a)'), null, $attributes = array('id' => 'estadoCivil', 'class' => 'form-control', 'required' => 'required')) !!}
		</div>
	</div>
	<div class="form-group row">
		<label for="direccionPermanente" class="col-sm-2 form-control-label">Dirección Permanente <span class="text-danger">*</span></label>
		<div class="col-sm-4">
			{!! Form::textarea('direccionPermanente', null, $attributes = array('id' => 'direccionPermanente', 'class' => 'form-control', 'rows' => '3')) !!}
		</div>
		<label for="direccionLocal" class="col-sm-2 form-control-label">Dirección Local <span class="text-danger">*</span></label>
		<div class="col-sm-4">
			{!! Form::textarea('direccionLocal', null, $attributes = array('id' => 'direccionLocal', 'class' => 'form-control', 'rows' => '3')) !!}
		</div>
	</div>
	<div class="form-group row">
		<label for="telefonoCelular" class="col-sm-2 form-control-label">Teléfono Celular <span class="text-danger">*</span></label>
		<div class="col-sm-4">
			{!! Form::text('telefonoCelular', null, ['placeholder' => 'Teléfono celular', 'class' => 'form-control', 'id' => 'telefonoCelular', 'required' => true]) !!}
		</div>
		<label for="telefonoReferencia" class="col-sm-2 form-control-label">Teléfono de Referencia <span class="text-danger">*</span></label>
		<div class="col-sm-4">
			{!! Form::text('telefonoReferencia', null, ['placeholder' => 'Teléfono de referencia', 'class' => 'form-control', 'id' => 'telefonoReferencia', 'required' => true]) !!}
		</div>
	</div>
	<div class="form-group row">
		<label for="email" class="col-sm-2 form-control-label">Correo Electrónico <span class="text-danger">*</span></label>
		<div class="col-sm-4">
			{!! Form::email('email', null, ['placeholder' => 'Correo electrónico', 'class' => 'form-control', 'id' => 'email', 'required' => true]) !!}
		</div>
		<label for="estado" class="col-sm-2 form-control-label">Estado <span class="text-danger">*</span></label>
		<div class="col-sm-4">
			{!! Form::text('estado', null, ['placeholder' => 'Estado', 'class' => 'form-control', 'id' => 'estado', 'required' => true]) !!}
		</div>
	</div>
</div>
<h4 class="header-title m-t-0">DATOS ACADÉMICOS</h4>
<div class="p-20">
	<div class="form-group row">
		<label for="especialidad" class="col-sm-2 form-control-label">Especialidad <span class="text-danger">*</span></label>
		<div class="col-sm-4">
			{!! Form::select('especialidad', array('' => 'Seleccione', 'administracion' => 'Administración de Empresas', 'contaduria' => 'Contaduría Pública', 'gerencia' => 'Gerencia de Recursos Humanos ', 'agronomia' => 'Ingeniería Agronómica', 'petroleo' => 'Ingeniería de Petróleo', 'sistemas' => 'Ingeniería de Sistemas', 'produccionAnimal' => 'Ingeniería en Producción Animal', 'tecnologiaAlimentos' => 'Tecnología de los Alimentos'), null, $attributes = array('id' => 'especialidad', 'class' => 'form-control', 'required' => 'required')) !!}
		</div>
		<label for="escuela" class="col-sm-2 form-control-label">Escuela <span class="text-danger">*</span></label>
		<div class="col-sm-4">
			{!! Form::select('escuela', array('' => 'Seleccione', 'ecsa' => 'Escuela de Ciencias Sociales y Administrativas (ECSA)', 'eica' => 'Escuela de Ingeniería y Ciencias Aplicadas (EICA)', 'agronomia' => 'Escuela de Agronomía', 'zootecnia' => 'Escuela de Zootecnia'), null, $attributes = array('id' => 'escuela', 'class' => 'form-control', 'required' => 'required')) !!}
		</div>
	</div>
	<div class="form-group row">
		<label for="anioIngresoUdo" class="col-sm-2 form-control-label">Año de Ingreso a la UDO <span class="text-danger">*</span></label>
		<div class="col-sm-4">
			{!! Form::select('anioIngresoUdo', array('' => 'Seleccione', 'III-2021' => 'III-2021', 'I-2021' => 'I-2021', 'III-2020' => 'III-2020', 'I-2020' => 'I-2020', 'III-2019' => 'III-2019', 'I-2019' => 'I-2019', 'III-2018' => 'III-2018', 'I-2018' => 'I-2018', 'III-2017' => 'III-2017', 'I-2017' => 'I-2017', 'III-2016' => 'III-2016', 'I-2016' => 'I-2016', 'III-2015' => 'III-2015', 'I-2015' => 'I-2015', 'III-2014' => 'III-2014', 'I-2014' => 'I-2014', 'III-2013' => 'III-2013', 'I-2013' => 'I-2013', 'III-2012' => 'III-2012', 'I-2012' => 'I-2012', 'III-2011' => 'III-2011', 'I-2011' => 'I-2011', 'III-2010' => 'III-2010', 'I-2010' => 'I-2010', 'III-2009' => 'III-2009', 'I-2009' => 'I-2009', 'III-2008' => 'III-2008', 'I-2008' => 'I-2008', 'III-2007' => 'III-2007', 'I-2007' => 'I-2007', 'III-2006' => 'III-2006', 'I-2006' => 'I-2006', 'III-2005' => 'III-2005', 'I-2005' => 'I-2005', 'III-2004' => 'III-2004', 'I-2004' => 'I-2004', 'III-2003' => 'III-2003', 'I-2003' => 'I-2003', 'III-2002' => 'III-2002', 'I-2002' => 'I-2002', 'III-2001' => 'III-2001', 'I-2001' => 'I-2001', 'III-2000' => 'III-2000', 'I-2000' => 'I-2000'), null, $attributes = array('id' => 'anioIngresoUdo', 'class' => 'form-control', 'required' => 'required')) !!}
		</div>
		<label for="anioIngresoPrograma" class="col-sm-2 form-control-label">Año de Ingreso al Programa <span class="text-danger">*</span></label>
		<div class="col-sm-4">
			{!! Form::select('anioIngresoPrograma', array('' => 'Seleccione', 'III-2021' => 'III-2021', 'I-2021' => 'I-2021', 'III-2020' => 'III-2020', 'I-2020' => 'I-2020', 'III-2019' => 'III-2019', 'I-2019' => 'I-2019', 'III-2018' => 'III-2018', 'I-2018' => 'I-2018', 'III-2017' => 'III-2017', 'I-2017' => 'I-2017', 'III-2016' => 'III-2016', 'I-2016' => 'I-2016', 'III-2015' => 'III-2015', 'I-2015' => 'I-2015', 'III-2014' => 'III-2014', 'I-2014' => 'I-2014', 'III-2013' => 'III-2013', 'I-2013' => 'I-2013', 'III-2012' => 'III-2012', 'I-2012' => 'I-2012', 'III-2011' => 'III-2011', 'I-2011' => 'I-2011', 'III-2010' => 'III-2010', 'I-2010' => 'I-2010', 'III-2009' => 'III-2009', 'I-2009' => 'I-2009', 'III-2008' => 'III-2008', 'I-2008' => 'I-2008', 'III-2007' => 'III-2007', 'I-2007' => 'I-2007', 'III-2006' => 'III-2006', 'I-2006' => 'I-2006', 'III-2005' => 'III-2005', 'I-2005' => 'I-2005', 'III-2004' => 'III-2004', 'I-2004' => 'I-2004', 'III-2003' => 'III-2003', 'I-2003' => 'I-2003', 'III-2002' => 'III-2002', 'I-2002' => 'I-2002', 'III-2001' => 'III-2001', 'I-2001' => 'I-2001', 'III-2000' => 'III-2000', 'I-2000' => 'I-2000'), null, $attributes = array('id' => 'anioIngresoPrograma', 'class' => 'form-control', 'required' => 'required')) !!}
		</div>
	</div>
	<div class="form-group row">
		<label for="semestreActual" class="col-sm-2 form-control-label">Semestre que Cursa Actualmente <span class="text-danger">*</span></label>
		<div class="col-sm-4">
			{!! Form::select('semestreActual', array('' => 'Seleccione', 'primero' => 'Primer Semestre', 'segundo' => 'Segundo Semestre', 'tercero' => 'Tercer Semestre', 'cuarto' => 'Cuarto Semestre', 'quinto' => 'Quinto Semestre', 'sexto' => 'Sexto Semestre', 'septimo' => 'Séptimo Semestre', 'octavo' => 'Octavo Semestre', 'noveno' => 'Noveno Semestre', 'decimo' => 'Décimo Semestre'), null, $attributes = array('id' => 'semestreActual', 'class' => 'form-control', 'required' => 'required')) !!}
		</div>
		<label for="promedioSemestreAnterior" class="col-sm-2 form-control-label">Promedio del Semestre Anterior <span class="text-danger">*</span></label>
		<div class="col-sm-4">
			{!! Form::input('number', 'promedioSemestreAnterior', null, ['id' => 'promedioSemestreAnterior', 'class' => 'form-control', 'placeholder' => 'Promedio del semestre anterior', 'required' => true, 'min' => '0']) !!}
		</div>
	</div>
</div>
<h4 class="header-title m-t-0">DATOS DE INTERÉS</h4>
<div class="p-20">
	<div class="form-group row">
		<label for="mismaResidencia" class="col-sm-2 form-control-label">¿Permanece usted en la misma residencia? <span class="text-danger">*</span></label>
		<div class="col-sm-4">
			{!! Form::select('mismaResidencia', array('' => 'Seleccione', '1' => 'Si', '0' => 'No'), null, $attributes = array('id' => 'mismaResidencia', 'class' => 'form-control', 'required' => 'required')) !!}
		</div>
	</div>
	<div class="form-group row">
		<label for="detallesMismaResidencia" class="col-sm-2 form-control-label">De ser Negativa su Respuesta,  Explique </label>
		<div class="col-sm-4">
			{!! Form::textarea('detallesMismaResidencia', null, $attributes = array('id' => 'detallesMismaResidencia', 'class' => 'form-control', 'rows' => '3')) !!}
		</div>
		<label for="direccionNuevaResidencia" class="col-sm-2 form-control-label">Dirección de la nueva residencia</label>
		<div class="col-sm-4">
			{!! Form::textarea('direccionNuevaResidencia', null, $attributes = array('id' => 'direccionNuevaResidencia', 'class' => 'form-control', 'rows' => '3')) !!}
			{!! Form::hidden('usuario', Auth::user()->id, ['class' => 'form-control', 'id' => 'usuario']) !!}
		</div>
	</div>
</div>