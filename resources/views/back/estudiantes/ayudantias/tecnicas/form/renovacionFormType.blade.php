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
			{!! Form::select('anioIngresoUdo', array('' => 'Seleccione', 'I-2017' => 'I-2017', 'III-2016' => 'III-2016', 'I-2016' => 'I-2016', 'III-2015' => 'III-2015', 'I-2015' => 'I-2015', 'III-2014' => 'III-2014', 'I-2014' => 'I-2014', 'III-2013' => 'III-2013', 'I-2013' => 'I-2013', 'III-2012' => 'III-2012', 'I-2012' => 'I-2012', 'III-2011' => 'III-2011', 'I-2011' => 'I-2011', 'III-2010' => 'III-2010', 'I-2010' => 'I-2010', 'III-2009' => 'III-2009', 'I-2009' => 'I-2009', 'III-2008' => 'III-2008', 'I-2008' => 'I-2008', 'III-2007' => 'III-2007', 'I-2007' => 'I-2007', 'III-2006' => 'III-2006', 'I-2006' => 'I-2006', 'III-2005' => 'III-2005', 'I-2005' => 'I-2005', 'III-2004' => 'III-2004', 'I-2004' => 'I-2004', 'III-2003' => 'III-2003', 'I-2003' => 'I-2003', 'III-2002' => 'III-2002', 'I-2002' => 'I-2002', 'III-2001' => 'III-2001', 'I-2001' => 'I-2001', 'III-2000' => 'III-2000', 'I-2000' => 'I-2000'), null, $attributes = array('id' => 'anioIngresoUdo', 'class' => 'form-control', 'required' => 'required')) !!}
		</div>
		<label for="anioIngresoPrograma" class="col-sm-2 form-control-label">Año de Ingreso al Programa <span class="text-danger">*</span></label>
		<div class="col-sm-4">
			{!! Form::select('anioIngresoPrograma', array('' => 'Seleccione', 'I-2017' => 'I-2017', 'III-2016' => 'III-2016', 'I-2016' => 'I-2016', 'III-2015' => 'III-2015', 'I-2015' => 'I-2015', 'III-2014' => 'III-2014', 'I-2014' => 'I-2014', 'III-2013' => 'III-2013', 'I-2013' => 'I-2013', 'III-2012' => 'III-2012', 'I-2012' => 'I-2012', 'III-2011' => 'III-2011', 'I-2011' => 'I-2011', 'III-2010' => 'III-2010', 'I-2010' => 'I-2010', 'III-2009' => 'III-2009', 'I-2009' => 'I-2009', 'III-2008' => 'III-2008', 'I-2008' => 'I-2008', 'III-2007' => 'III-2007', 'I-2007' => 'I-2007', 'III-2006' => 'III-2006', 'I-2006' => 'I-2006', 'III-2005' => 'III-2005', 'I-2005' => 'I-2005', 'III-2004' => 'III-2004', 'I-2004' => 'I-2004', 'III-2003' => 'III-2003', 'I-2003' => 'I-2003', 'III-2002' => 'III-2002', 'I-2002' => 'I-2002', 'III-2001' => 'III-2001', 'I-2001' => 'I-2001', 'III-2000' => 'III-2000', 'I-2000' => 'I-2000'), null, $attributes = array('id' => 'anioIngresoPrograma', 'class' => 'form-control', 'required' => 'required')) !!}
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
	<div class="form-group row">
		<label for="materiasInscritasSemestreAnterior" class="col-sm-2 form-control-label">Número de Materias Inscrita en el Semestre Anterior <span class="text-danger">*</span></label>
		<div class="col-sm-4">
			{!! Form::input('number', 'materiasInscritasSemestreAnterior', null, ['id' => 'materiasInscritasSemestreAnterior', 'class' => 'form-control', 'placeholder' => 'Número de materias inscritas', 'required' => true, 'min' => '0']) !!}
		</div>
		<label for="materiasCursadasSemestreAnterior" class="col-sm-2 form-control-label">Número de Materias Cursadas en el Semestre Anterior <span class="text-danger">*</span></label>
		<div class="col-sm-4">
			{!! Form::input('number', 'materiasCursadasSemestreAnterior', null, ['id' => 'materiasCursadasSemestreAnterior', 'class' => 'form-control', 'placeholder' => 'Número de materias cursadas', 'required' => true, 'min' => '0']) !!}
		</div>
	</div>
	<div class="form-group row">
		<label for="materiasAprobadasSemestreAnterior" class="col-sm-2 form-control-label">Número de Materias Aprobadas en el Semestre Anterior <span class="text-danger">*</span></label>
		<div class="col-sm-4">
			{!! Form::input('number', 'materiasAprobadasSemestreAnterior', null, ['id' => 'materiasAprobadasSemestreAnterior', 'class' => 'form-control', 'placeholder' => 'Número de materias aprobadas', 'required' => true, 'min' => '0']) !!}
		</div>
		<label for="materiasRetiradasSemestreAnterior" class="col-sm-2 form-control-label">Número de Materias Retiradas en el Semestre Anterior <span class="text-danger">*</span></label>
		<div class="col-sm-4">
			{!! Form::input('number', 'materiasRetiradasSemestreAnterior', null, ['id' => 'materiasRetiradasSemestreAnterior', 'class' => 'form-control', 'placeholder' => 'Número de materias retiradas', 'required' => true, 'min' => '0']) !!}
		</div>
	</div>
</div>
<h4 class="header-title m-t-0">DATOS DE LA AYUDANTÍA</h4>
<div class="p-20">
	<div class="form-group row">
		<label for="nombre" class="col-sm-2 form-control-label">Nombre del supervisor <span class="text-danger">*</span></label>
		<div class="col-sm-4">
			{!! Form::text('nombre', null, ['placeholder' => 'Nombre del supervisor', 'class' => 'form-control', 'id' => 'nombre', 'required' => true]) !!}
		</div>
		<label for="dependencia" class="col-sm-2 form-control-label">Dependencia <span class="text-danger">*</span></label>
		<div class="col-sm-4">
			{!! Form::text('dependencia', null, ['placeholder' => 'Dependencia', 'class' => 'form-control', 'id' => 'dependencia', 'required' => true]) !!}
		</div>
	</div>
	<div class="form-group row">
		<label for="extensionTelefono" class="col-sm-2 form-control-label">Extensión del teléfono</label>
		<div class="col-sm-4">
			{!! Form::text('extensionTelefono', null, ['placeholder' => 'Extensión del teléfono', 'class' => 'form-control', 'id' => 'extensionTelefono']) !!}
		</div>
		<label for="relacion" class="col-sm-2 form-control-label">Relación del supervisor con el bachiller <span class="text-danger">*</span></label>
		<div class="col-sm-4">
			{!! Form::select('relacion', array('' => 'Seleccione', 'buena' => 'Buena', 'regular' => 'Regular', 'mala' => 'Mala'), null, $attributes = array('id' => 'relacion', 'class' => 'form-control', 'required' => 'required')) !!}
		</div>
	</div>
	<div class="form-group row">
		<label for="tareasAyudante" class="col-sm-2 form-control-label">Tareas a Desempeñar por el Ayudante <span class="text-danger">*</span></label>
		<div class="col-sm-4">
			{!! Form::textarea('tareasAyudante', null, $attributes = array('id' => 'tareasAyudante', 'class' => 'form-control', 'rows' => '3')) !!}
		</div>
		<label for="permanecerSitio" class="col-sm-2 form-control-label">¿Desea Permanecer en el Sitio de Trabajo? <span class="text-danger">*</span></label>
		<div class="col-sm-4">
			{!! Form::select('permanecerSitio', array('' => 'Seleccione', '1' => 'Si', '0' => 'No'), null, $attributes = array('id' => 'permanecerSitio', 'class' => 'form-control', 'required' => 'required')) !!}
		</div>
	</div>
	<div class="form-group row">
		<label for="detallesPermanencia" class="col-sm-2 form-control-label">De ser Negativa su Respuesta,  Explique</label>
		<div class="col-sm-4">
			{!! Form::textarea('detallesPermanencia', null, $attributes = array('id' => 'detallesPermanencia', 'class' => 'form-control', 'rows' => '3')) !!}
		</div>
		<label for="reubicacion" class="col-sm-2 form-control-label">¿Donde le Gustaría Ser Reubicado? (De Solicitar Cambio) </label>
		<div class="col-sm-4">
			{!! Form::text('reubicacion', null, ['placeholder' => 'Lugar reubicación', 'class' => 'form-control', 'id' => 'reubicacion']) !!}
			{!! Form::hidden('usuario', Auth::user()->id, ['class' => 'form-control', 'id' => 'usuario']) !!}
		</div>
	</div>
</div>