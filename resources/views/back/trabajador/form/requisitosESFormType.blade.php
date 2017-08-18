<div>
    <h3>Situación Socio-Económica</h3>
    <section>
        <div class="row">
            <div class="col-xs-12 col-sm-6">
                <h4 class="header-title m-t-0">A. Ingresos mensuales</h4>
                <div class="p-20 row">
                    <div class="form-group clearfix col-sm-6">
                        <label for="apellidosNombres" class="col-sm-2">Padres <span class="text-danger">*</span></label>
                        <div class="col-sm-2">
                            {!! Form::input('number', 'ingresosPadres', null, ['id' => 'ingresosPadres', 'class' => 'required form-control', 'placeholder' => '0.00', 'min' => '0']) !!}
                        </div>
                        <label for="cedula" class="col-sm-2">Familiares <span class="text-danger">*</span></label>
                        <div class="col-sm-2">
                            {!! Form::input('number', 'ingresosFamiliares', null, ['id' => 'ingresosFamiliares', 'class' => 'required form-control', 'placeholder' => '0.00', 'min' => '0']) !!}
                        </div>
                        <label for="cedula" class="col-sm-2">Becas <span class="text-danger">*</span></label>
                        <div class="col-sm-2">
                            {!! Form::input('number', 'ingresosBecas', null, ['id' => 'ingresosBecas', 'class' => 'required form-control', 'placeholder' => '0.00', 'min' => '0']) !!}
                        </div>
                        <label for="cedula" class="col-sm-2">Ayudantías <span class="text-danger">*</span></label>
                        <div class="col-sm-2">
                            {!! Form::input('number', 'ingresosAyudantias', null, ['id' => 'ingresosAyudantias', 'class' => 'required form-control', 'placeholder' => '0.00', 'min' => '0']) !!}
                        </div>
                    </div>
                    <div class="form-group clearfix col-sm-6">
                        <label for="apellidosNombres" class="col-sm-2">Preparadurías <span class="text-danger">*</span></label>
                        <div class="col-sm-2">
                            {!! Form::input('number', 'ingresosPreparadurias', null, ['id' => 'ingresosPreparadurias', 'class' => 'required form-control', 'placeholder' => '0.00', 'min' => '0']) !!}
                        </div>
                        <label for="cedula" class="col-sm-2">Trabajo <span class="text-danger">*</span></label>
                        <div class="col-sm-2">
                            {!! Form::input('number', 'ingresosTrabajo', null, ['id' => 'ingresosTrabajo', 'class' => 'required form-control', 'placeholder' => '0.00', 'min' => '0']) !!}
                        </div>
                        <label for="cedula" class="col-sm-2">Ahorros <span class="text-danger">*</span></label>
                        <div class="col-sm-2">
                            {!! Form::input('number', 'ingresosAhorros', null, ['id' => 'ingresosAhorros', 'class' => 'required form-control', 'placeholder' => '0.00', 'min' => '0']) !!}
                        </div>
                        <label for="cedula" class="col-sm-2">Otros</label>
                        <div class="col-sm-2">
                            {!! Form::input('number', 'ingresosOtros', null, ['id' => 'ingresosOtros', 'class' => 'form-control', 'placeholder' => '0.00', 'min' => '0']) !!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6">
                <h4 class="header-title m-t-0">B. Alojamiento</h4>
                <div class="p-20 row">
                    <div class="form-group clearfix col-sm-6">
                        <label for="apellidosNombres" class="col-sm-2">De la localidad <span class="text-danger">*</span></label>
                        <div class="col-sm-2">
                            {!! Form::select('alojamientoLocalidad', array('' => 'Seleccione', 'Propia' => 'Propia', 'Alquilada' => 'Alquilada', 'Alojado' => 'Alojado'), null, $attributes = array('id' => 'alojamientoLocalidad', 'class' => 'required form-control')) !!}
                        </div>
                    </div>
                    <div class="form-group clearfix col-sm-6">
                        <label for="apellidosNombres" class="col-sm-2">De otras regiones <span class="text-danger">*</span></label>
                        <div class="col-sm-2">
                            {!! Form::select('alojamientoRegiones', array('' => 'Seleccione', 'Alojado' => 'Alojado', 'Residencia' => 'Residencia', 'Familiar' => 'Familiar'), null, $attributes = array('id' => 'alojamientoRegiones', 'class' => 'required form-control')) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- end row -->
        <div class="row">
            <div class="col-xs-12 col-sm-6">
                <h4 class="header-title m-t-0">C. Características de la vivienda</h4>
                <div class="p-20 row">
                    <div class="form-group clearfix col-sm-6">
                        <label for="apellidosNombres" class="col-sm-2">Cond. para el estudio <span class="text-danger">*</span></label>
                        <div class="col-sm-2">
                            {!! Form::select('condicionesEstudio', array('' => 'Seleccione', 'Buena' => 'Buena', 'Regular' => 'Regular', 'Mala' => 'Mala'), null, $attributes = array('id' => 'condicionesEstudio', 'class' => 'required form-control')) !!}
                        </div>
                        <label for="cedula" class="col-sm-2">Camas por habitación <span class="text-danger">*</span></label>
                        <div class="col-sm-2">
                            {!! Form::input('number', 'camasHabitacion', null, ['id' => 'camasHabitacion', 'class' => 'required form-control', 'placeholder' => '0', 'min' => '0']) !!}
                        </div>
                        <label for="cedula" class="col-sm-2">Condiciones higienicas <span class="text-danger">*</span></label>
                        <div class="col-sm-2">
                            {!! Form::select('condicionesHigienicas', array('' => 'Seleccione', 'Buena' => 'Buena', 'Regular' => 'Regular', 'Mala' => 'Mala'), null, $attributes = array('id' => 'condicionesHigienicas', 'class' => 'required form-control')) !!}
                        </div>
                        <label for="cedula" class="col-sm-2">Ventilación <span class="text-danger">*</span></label>
                        <div class="col-sm-2">
                            {!! Form::select('ventilacion', array('' => 'Seleccione', 'Buena' => 'Buena', 'Regular' => 'Regular', 'Mala' => 'Mala'), null, $attributes = array('id' => 'ventilacion', 'class' => 'required form-control')) !!}
                        </div>
                    </div>
                    <div class="form-group clearfix col-sm-6">
                        <label for="cedula" class="col-sm-2">Iluminación <span class="text-danger">*</span></label>
                        <div class="col-sm-2">
                            {!! Form::select('iluminacion', array('' => 'Seleccione', 'Buena' => 'Buena', 'Regular' => 'Regular', 'Mala' => 'Mala'), null, $attributes = array('id' => 'iluminacion', 'class' => 'required form-control')) !!}
                        </div>
                        <label for="cedula" class="col-sm-2">Otros</label>
                        <div class="col-sm-2">
                            {!! Form::text('otros', null, ['placeholder' => '', 'class' => 'form-control', 'id' => 'otros']) !!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6">
                <h4 class="header-title m-t-0">D. Alimentación</h4>
                <div class="p-20 row">
                    <div class="form-group clearfix col-sm-6">
                        <label for="apellidosNombres" class="col-sm-2">Desayuno (Lugar) <span class="text-danger">*</span></label>
                        <div class="col-sm-2">
                            {!! Form::text('desayunoLugar', null, ['placeholder' => '', 'class' => 'required form-control', 'id' => 'desayunoLugar']) !!}
                        </div>
                        <label for="cedula" class="col-sm-2">Almuerzo (Lugar) <span class="text-danger">*</span></label>
                        <div class="col-sm-2">
                            {!! Form::text('almuerzoLugar', null, ['placeholder' => '', 'class' => 'required form-control', 'id' => 'almuerzoLugar']) !!}
                        </div>
                        <label for="cedula" class="col-sm-2">Cena (Lugar) <span class="text-danger">*</span></label>
                        <div class="col-sm-2">
                            {!! Form::text('cenaLugar', null, ['placeholder' => '', 'class' => 'required form-control', 'id' => 'cenaLugar']) !!}
                        </div>
                    </div>
                    <div class="form-group clearfix col-sm-6">
                        <label for="apellidosNombres" class="col-sm-2">Desayuno (Costo) <span class="text-danger">*</span></label>
                        <div class="col-sm-2">
                            {!! Form::text('desayunoCosto', null, ['placeholder' => '0.00', 'class' => 'required form-control', 'id' => 'desayunoCosto']) !!}
                        </div>
                        <label for="cedula" class="col-sm-2">Almuerzo (Costo) <span class="text-danger">*</span></label>
                        <div class="col-sm-2">
                            {!! Form::text('almuerzoCosto', null, ['placeholder' => '0.00', 'class' => 'required form-control', 'id' => 'almuerzoCosto']) !!}
                        </div>
                        <label for="cedula" class="col-sm-2">Cena (Costo) <span class="text-danger">*</span></label>
                        <div class="col-sm-2">
                            {!! Form::text('cenaCosto', null, ['placeholder' => '0.00', 'class' => 'required form-control', 'id' => 'cenaCosto']) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- end row -->
    </section>
    <h3>Economía Familiar</h3>
    <section>
        <div class="row">
            <div class="col-xs-12 col-sm-6">
                <h4 class="header-title m-t-0">A. Ingresos</h4>
                <div class="p-20 row">
                    <div class="form-group clearfix col-sm-6">
                        <label for="apellidosNombres" class="col-sm-2">Sueldo <span class="text-danger">*</span></label>
                        <div class="col-sm-2">
                            {!! Form::input('number', 'sueldo', null, ['id' => 'sueldo', 'class' => 'required form-control', 'placeholder' => '0.00', 'min' => '0']) !!}
                        </div>
                        <label for="cedula" class="col-sm-2">Ayuda familiar <span class="text-danger">*</span></label>
                        <div class="col-sm-2">
                            {!! Form::input('number', 'ayudaFamiliar', null, ['id' => 'ayudaFamiliar', 'class' => 'required form-control', 'placeholder' => '0.00', 'min' => '0']) !!}
                        </div>
                        <label for="cedula" class="col-sm-2">Negocio <span class="text-danger">*</span></label>
                        <div class="col-sm-2">
                            {!! Form::input('number', 'negocio', null, ['id' => 'negocio', 'class' => 'required form-control', 'placeholder' => '0.00', 'min' => '0']) !!}
                        </div>
                    </div>
                    <div class="form-group clearfix col-sm-6">
                        <label for="cedula" class="col-sm-2">Rentas <span class="text-danger">*</span></label>
                        <div class="col-sm-2">
                            {!! Form::input('number', 'rentas', null, ['id' => 'rentas', 'class' => 'required form-control', 'placeholder' => '0.00', 'min' => '0']) !!}
                        </div>
                        <label for="cedula" class="col-sm-2">Becas y/o créditos <span class="text-danger">*</span></label>
                        <div class="col-sm-2">
                            {!! Form::input('number', 'becasCreditos', null, ['id' => 'becasCreditos', 'class' => 'required form-control', 'placeholder' => '0.00', 'min' => '0']) !!}
                        </div>
                        <label for="cedula" class="col-sm-2">Pensión y/o jubilación <span class="text-danger">*</span></label>
                        <div class="col-sm-2">
                            {!! Form::input('number', 'pensionJubilacion', null, ['id' => 'pensionJubilacion', 'class' => 'required form-control', 'placeholder' => '0.00', 'min' => '0']) !!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6">
                <h4 class="header-title m-t-0">B. Egresos</h4>
                <div class="p-20 row">
                    <div class="form-group clearfix col-sm-6">
                        <label for="apellidosNombres" class="col-sm-2">Alimentación <span class="text-danger">*</span></label>
                        <div class="col-sm-2">
                            {!! Form::input('number', 'alimentacion', null, ['id' => 'alimentacion', 'class' => 'required form-control', 'placeholder' => '0.00', 'min' => '0']) !!}
                        </div>
                        <label for="cedula" class="col-sm-2">Vivienda <span class="text-danger">*</span></label>
                        <div class="col-sm-2">
                            {!! Form::input('number', 'vivienda', null, ['id' => 'vivienda', 'class' => 'required form-control', 'placeholder' => '0.00', 'min' => '0']) !!}
                        </div>
                        <label for="cedula" class="col-sm-2">Servicios ṕúblicos <span class="text-danger">*</span></label>
                        <div class="col-sm-2">
                            {!! Form::input('number', 'serviciosPublicos', null, ['id' => 'serviciosPublicos', 'class' => 'required form-control', 'placeholder' => '0.00', 'min' => '0']) !!}
                        </div>
                        <label for="cedula" class="col-sm-2">Transporte <span class="text-danger">*</span></label>
                        <div class="col-sm-2">
                            {!! Form::input('number', 'transporte', null, ['id' => 'transporte', 'class' => 'required form-control', 'placeholder' => '0.00', 'min' => '0']) !!}
                        </div>
                    </div>
                    <div class="form-group clearfix col-sm-6">
                        <label for="cedula" class="col-sm-2">Salud <span class="text-danger">*</span></label>
                        <div class="col-sm-2">
                            {!! Form::input('number', 'salud', null, ['id' => 'salud', 'class' => 'required form-control', 'placeholder' => '0.00', 'min' => '0']) !!}
                        </div>
                        <label for="cedula" class="col-sm-2">Hijos <span class="text-danger">*</span></label>
                        <div class="col-sm-2">
                            {!! Form::input('number', 'hijos', null, ['id' => 'hijos', 'class' => 'required form-control', 'placeholder' => '0.00', 'min' => '0']) !!}
                        </div>
                        <label for="cedula" class="col-sm-2">Útiles escolares <span class="text-danger">*</span></label>
                        <div class="col-sm-2">
                            {!! Form::input('number', 'utiles', null, ['id' => 'utiles', 'class' => 'required form-control', 'placeholder' => '0.00', 'min' => '0']) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- end row -->
        <div class="row">
            <div class="col-xs-12 col-sm-12">
                <h4 class="header-title m-t-0">C. Capital</h4>
                <div class="p-20 row">
                    <div class="form-group clearfix col-sm-6">
                        <label for="apellidosNombres" class="col-sm-2">Capita mensual <span class="text-danger">*</span></label>
                        <div class="col-sm-2">
                            {!! Form::input('number', 'capitalMensual', null, ['id' => 'capitalMensual', 'class' => 'required form-control', 'placeholder' => '0.00', 'min' => '0']) !!}
                        </div>
                        <label for="cedula" class="col-sm-2">Observaciones </label>
                        <div class="col-sm-2">
                           {!! Form::textarea('observaciones', null, $attributes = array('id' => 'observaciones', 'class' => 'form-control', 'rows' => '3')) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- end row -->
    </section>
    <h3>Grupo Familiar</h3>
    <section>
        <div class="row">
            <div class="col-xs-12 col-sm-2">
                <div class="form-group clearfix">
                    <div>
                        <button type="button" class="btn waves-effect waves-light btn-success" onClick="addData()"> <i class="fa fa-plus"></i> Agregar</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12">
            <table class="table table-striped table-bordered table-hover table-full-width table-condensed" id="tablaCargaFamiliar">
                    <thead>
                        <tr>
                            <th class="" style="width:20%">
                                <label for="apellidosNombres" class="col-sm-2">Nombre y apellido <span class="text-danger">*</span></label>
                            </th>
                            <th class="" style="width:15%">
                                <label for="apellidosNombres" class="col-sm-2">Parentesco <span class="text-danger">*</span></label>
                            </th>
                            <th class="" style="width:10%">
                                <label for="apellidosNombres" class="col-sm-2">Edad <span class="text-danger">*</span></label>
                            </th>
                            <th class="" style="width:15%">
                                <label for="apellidosNombres" class="col-sm-2">Oficio <span class="text-danger">*</span></label>
                            </th>
                            <th class="" style="width:15%">
                                <label for="apellidosNombres" class="col-sm-2">Institución</label>
                            </th>
                            <th class="" style="width:15%">
                                <label for="apellidosNombres" class="col-sm-2">Sueldo</label>
                            </th>
                            <th class="" style="width:10%">
                                <label for="apellidosNombres" class="col-sm-2">Borrar</label>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                {!! Form::text('nombreCarga[]', null, ['id' => 'nombreCarga', 'class' => 'form-control', 'placeholder' => '', 'required' => true]) !!}
                            </td>
                            <td>
                                {!! Form::select('parentesco[]', array('' => 'Seleccione', 'Padre' => 'Padre', 'Madre' => 'Madre', 'Esposo/a' => 'Esposo/a', 'Hijo/a' => 'Hijo/a'), null, $attributes = array('id' => 'parentesco', 'class' => 'form-control', 'required' => true)) !!}
                            </td>
                            <td>
                                {!! Form::input('number', 'edad[]', null, ['id' => 'edad', 'class' => 'form-control', 'placeholder' => '', 'min' => '0', 'required' => true]) !!}
                            </td>
                            <td>
                                {!! Form::text('oficio[]', null, ['id' => 'oficio', 'class' => 'form-control', 'placeholder' => '', 'required' => true]) !!}
                            </td>
                            <td>
                                {!! Form::text('institucion[]', null, ['id' => 'institucion', 'class' => 'form-control', 'placeholder' => '']) !!}
                            </td>
                            <td>
                                {!! Form::input('number', 'sueldoCarga[]', null, ['id' => 'sueldoCarga', 'class' => 'form-control', 'placeholder' => '0.00', 'min' => '0']) !!}
                            </td>
                            <td>
                                <button class="btn waves-effect waves-light btn-danger" onclick="removeData(this)"> <i class="fa fa-minus"></i> </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <h3>Psicodinámica</h3>
    <section>
        <div class="row">
            <div class="col-xs-12 col-sm-12">
                <h4 class="header-title m-t-0">A. Situación Psicosocial</h4>
                <div class="row">
                    <div class="form-group clearfix col-sm-6">
                        <label for="apellidosNombres" class="col-sm-2">Problemas en relación con:</label>
                    </div>
                    <div class="form-group clearfix col-sm-6">
                        <label for="apellidosNombres" class="col-sm-2">Observaciones</label>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group clearfix col-sm-3">
                        <div class="col-sm-3">
                            <label for="apellidosNombres">Familiares:</label>
                        </div>
                        <div class="col-sm-3">
                            <label for="apellidosNombres">Profesores:</label>
                        </div>
                        <div class="col-sm-3">
                            <label for="apellidosNombres">Estudiantes:</label>
                        </div>
                        <div class="col-sm-3">
                            <label for="apellidosNombres">Dueño(a) de residencia:</label>
                        </div>
                        <div class="col-sm-3">
                            <label for="apellidosNombres">Desintegración familiar:</label>
                        </div>
                        <div class="col-sm-3">
                            <label for="apellidosNombres">Desorganización familiar:</label>
                        </div>
                        <div class="col-sm-3">
                            <label for="apellidosNombres">Madre soltera:</label>
                        </div>
                        <div class="col-sm-3">
                            <label for="apellidosNombres">Cuidado de hijo(s):</label>
                        </div>
                    </div>
                    <div class="form-group clearfix col-sm-3">
                        <div class="col-sm-3">
                            {!! Form::select('problemasFamiliares', array('' => 'Seleccione', 'Si' => 'Si', 'No' => 'No'), null, $attributes = array('id' => 'problemasFamiliares', 'class' => 'required form-control', 'style' => 'margin-top:10px; margin-bottom: 0.5em;')) !!}
                        </div>
                        <div class="col-sm-3">
                            {!! Form::select('problemasProfesores', array('' => 'Seleccione', 'Si' => 'Si', 'No' => 'No'), null, $attributes = array('id' => 'problemasProfesores', 'class' => 'required form-control', 'style' => 'margin-top:10px; margin-bottom: 0.5em;')) !!}
                        </div>
                        <div class="col-sm-3">
                            {!! Form::select('problemasEstudiantes', array('' => 'Seleccione', 'Si' => 'Si', 'No' => 'No'), null, $attributes = array('id' => 'problemasEstudiantes', 'class' => 'required form-control', 'style' => 'margin-top:10px; margin-bottom: 0.5em;')) !!}
                        </div>
                        <div class="col-sm-3">
                            {!! Form::select('problemasDuenoResidencia', array('' => 'Seleccione', 'Si' => 'Si', 'No' => 'No'), null, $attributes = array('id' => 'problemasDuenoResidencia', 'class' => 'required form-control', 'style' => 'margin-top:10px; margin-bottom: 0.5em;')) !!}
                        </div>
                        <div class="col-sm-3">
                            {!! Form::select('desintegracionFamiliar', array('' => 'Seleccione', 'Si' => 'Si', 'No' => 'No'), null, $attributes = array('id' => 'desintegracionFamiliar', 'class' => 'required form-control', 'style' => 'margin-top:10px; margin-bottom: 0.5em;')) !!}
                        </div>
                        <div class="col-sm-3">
                            {!! Form::select('desorganizacionFamiliar', array('' => 'Seleccione', 'Si' => 'Si', 'No' => 'No'), null, $attributes = array('id' => 'desorganizacionFamiliar', 'class' => 'required form-control', 'style' => 'margin-top:10px; margin-bottom: 0.5em;')) !!}
                        </div>
                        <div class="col-sm-3">
                            {!! Form::select('madreSoltera', array('' => 'Seleccione', 'Si' => 'Si', 'No' => 'No'), null, $attributes = array('id' => 'madreSoltera', 'class' => 'required form-control', 'style' => 'margin-top:10px; margin-bottom: 0.5em;')) !!}
                        </div>
                        <div class="col-sm-3">
                            {!! Form::select('cuidadoHijos', array('' => 'Seleccione', 'Si' => 'Si', 'No' => 'No'), null, $attributes = array('id' => 'cuidadoHijos', 'class' => 'required form-control', 'style' => 'margin-top:10px; margin-bottom: 0.5em;')) !!}
                        </div>
                    </div>
                    <div class="form-group clearfix col-sm-6">
                        <div class="col-sm-3">
                            {!! Form::text('obsproblemasFamiliares', null, ['placeholder' => '', 'class' => 'form-control', 'id' => 'obsproblemasFamiliares', 'style' => 'margin-top:7px; margin-bottom: 0.2em;']) !!}
                        </div>
                        <div class="col-sm-3">
                            {!! Form::text('obsproblemasProfesores', null, ['placeholder' => '', 'class' => 'form-control', 'id' => 'obsproblemasProfesores', 'style' => 'margin-top:7px; margin-bottom: 0.2em;']) !!}
                        </div>
                        <div class="col-sm-3">
                            {!! Form::text('obsproblemasEstudiantes', null, ['placeholder' => '', 'class' => 'form-control', 'id' => 'obsproblemasEstudiantes', 'style' => 'margin-top:7px; margin-bottom: 0.2em;']) !!}
                        </div>
                        <div class="col-sm-3">
                            {!! Form::text('obsproblemasDuenoResidencia', null, ['placeholder' => '', 'class' => 'form-control', 'id' => 'obsproblemasDuenoResidencia', 'style' => 'margin-top:7px; margin-bottom: 0.2em;']) !!}
                        </div>
                        <div class="col-sm-3">
                            {!! Form::text('obsdesintegracionFamiliar', null, ['placeholder' => '', 'class' => 'form-control', 'id' => 'obsdesintegracionFamiliar', 'style' => 'margin-top:7px; margin-bottom: 0.2em;']) !!}
                        </div>
                        <div class="col-sm-3">
                            {!! Form::text('obsdesorganizacionFamiliar', null, ['placeholder' => '', 'class' => 'form-control', 'id' => 'obsdesorganizacionFamiliar', 'style' => 'margin-top:7px; margin-bottom: 0.2em;']) !!}
                        </div>
                        <div class="col-sm-3">
                            {!! Form::text('obsmadreSoltera', null, ['placeholder' => '', 'class' => 'form-control', 'id' => 'obsmadreSoltera', 'style' => 'margin-top:7px; margin-bottom: 0.2em;']) !!}
                        </div>
                        <div class="col-sm-3">
                            {!! Form::text('obscuidadoHijos', null, ['placeholder' => '', 'class' => 'form-control', 'id' => 'obscuidadoHijos', 'style' => 'margin-top:7px; margin-bottom: 0.2em;']) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- end row -->
        <div class="row">
            <div class="col-xs-12 col-sm-12">
                <h4 class="header-title m-t-0">B. Comportamiento del estudiante durante la entrevista</h4>
                <div class="row">
                    <div class="form-group clearfix col-sm-8">
                        <label for="apellidosNombres" class="col-sm-2">Comportamiento:</label>
                    </div>
                    <div class="form-group clearfix col-sm-4">
                        <label for="apellidosNombres" class="col-sm-2">Observaciones generales</label>
                    </div>
                </div>
                <div class="p-20 row">
                    <div class="form-group clearfix col-sm-6">
                        <div class="radio">
                            {!! Form::radio('comportamiento', 'Sincero', null, ['id' => 'comportamiento1', 'class' => '', 'checked' => true]) !!}
                            <label for="comportamiento1">
                                Sincero
                            </label>
                        </div>
                        <div class="radio">
                            {!! Form::radio('comportamiento', 'Colaborador', null, ['id' => 'comportamiento2', 'class' => '']) !!}
                            <label for="comportamiento2">
                                Colaborador
                            </label>
                        </div>
                        <div class="radio">
                            {!! Form::radio('comportamiento', 'Poco colaborador', null, ['id' => 'comportamiento3', 'class' => '']) !!}
                            <label for="comportamiento3">
                                Poco colaborador
                            </label>
                        </div>
                        <div class="radio">
                            {!! Form::radio('comportamiento', 'Nada colaborador', null, ['id' => 'comportamiento4', 'class' => '']) !!}
                            <label for="comportamiento4">
                                Nada colaborador
                            </label>
                        </div>
                    </div>
                    <div class="form-group clearfix col-sm-6">
                        <div class="col-sm-3">
                            {!! Form::textarea('observacionesGenerales', null, $attributes = array('id' => 'observacionesGenerales', 'class' => 'form-control', 'rows' => '8')) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- end row -->
    </section>
</div>