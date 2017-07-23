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
                            {!! Form::input('number', 'ingresosPadres', null, ['id' => 'ingresosPadres', 'class' => 'form-control', 'placeholder' => '0.00', 'min' => '0']) !!}
                        </div>
                        <label for="cedula" class="col-sm-2">Familiares <span class="text-danger">*</span></label>
                        <div class="col-sm-2">
                            {!! Form::input('number', 'ingresosPadres', null, ['id' => 'ingresosPadres', 'class' => 'form-control', 'placeholder' => '0.00', 'min' => '0']) !!}
                        </div>
                        <label for="cedula" class="col-sm-2">Becas <span class="text-danger">*</span></label>
                        <div class="col-sm-2">
                            {!! Form::input('number', 'ingresosPadres', null, ['id' => 'ingresosPadres', 'class' => 'form-control', 'placeholder' => '0.00', 'min' => '0']) !!}
                        </div>
                        <label for="cedula" class="col-sm-2">Ayudantías <span class="text-danger">*</span></label>
                        <div class="col-sm-2">
                            {!! Form::input('number', 'ingresosPadres', null, ['id' => 'ingresosPadres', 'class' => 'form-control', 'placeholder' => '0.00', 'min' => '0']) !!}
                        </div>
                    </div>
                    <div class="form-group clearfix col-sm-6">
                        <label for="apellidosNombres" class="col-sm-2">Preparadurías <span class="text-danger">*</span></label>
                        <div class="col-sm-2">
                            {!! Form::input('number', 'ingresosPadres', null, ['id' => 'ingresosPadres', 'class' => 'form-control', 'placeholder' => '0.00', 'min' => '0']) !!}
                        </div>
                        <label for="cedula" class="col-sm-2">Trabajo <span class="text-danger">*</span></label>
                        <div class="col-sm-2">
                            {!! Form::input('number', 'ingresosPadres', null, ['id' => 'ingresosPadres', 'class' => 'form-control', 'placeholder' => '0.00', 'min' => '0']) !!}
                        </div>
                        <label for="cedula" class="col-sm-2">Ahorros <span class="text-danger">*</span></label>
                        <div class="col-sm-2">
                            {!! Form::input('number', 'ingresosPadres', null, ['id' => 'ingresosPadres', 'class' => 'form-control', 'placeholder' => '0.00', 'min' => '0']) !!}
                        </div>
                        <label for="cedula" class="col-sm-2">Otros <span class="text-danger">*</span></label>
                        <div class="col-sm-2">
                            {!! Form::input('number', 'ingresosPadres', null, ['id' => 'ingresosPadres', 'class' => 'form-control', 'placeholder' => '0.00', 'min' => '0']) !!}
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
                            {!! Form::select('escuela', array('' => 'Seleccione', 'ecsa' => 'Escuela de Ciencias Sociales y Administrativas (ECSA)', 'eica' => 'Escuela de Ingeniería y Ciencias Aplicadas (EICA)', 'agronomia' => 'Escuela de Agronomía', 'zootecnia' => 'Escuela de Zootecnia'), null, $attributes = array('id' => 'escuela', 'class' => 'form-control')) !!}
                        </div>
                        <label for="cedula" class="col-sm-2">Otros localidad <span class="text-danger">*</span></label>
                        <div class="col-sm-2">
                            {!! Form::text('apellidosNombres', null, ['placeholder' => '', 'class' => 'form-control', 'id' => 'apellidosNombres']) !!}
                        </div>
                    </div>
                    <div class="form-group clearfix col-sm-6">
                        <label for="apellidosNombres" class="col-sm-2">De otras regiones <span class="text-danger">*</span></label>
                        <div class="col-sm-2">
                            {!! Form::select('escuela', array('' => 'Seleccione', 'ecsa' => 'Escuela de Ciencias Sociales y Administrativas (ECSA)', 'eica' => 'Escuela de Ingeniería y Ciencias Aplicadas (EICA)', 'agronomia' => 'Escuela de Agronomía', 'zootecnia' => 'Escuela de Zootecnia'), null, $attributes = array('id' => 'escuela', 'class' => 'form-control')) !!}
                        </div>
                        <label for="cedula" class="col-sm-2">Otros otras regiones <span class="text-danger">*</span></label>
                        <div class="col-sm-2">
                            {!! Form::text('apellidosNombres', null, ['placeholder' => '', 'class' => 'form-control', 'id' => 'apellidosNombres']) !!}
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
                            {!! Form::select('escuela', array('' => 'Seleccione', 'ecsa' => 'Escuela de Ciencias Sociales y Administrativas (ECSA)', 'eica' => 'Escuela de Ingeniería y Ciencias Aplicadas (EICA)', 'agronomia' => 'Escuela de Agronomía', 'zootecnia' => 'Escuela de Zootecnia'), null, $attributes = array('id' => 'escuela', 'class' => 'form-control')) !!}
                        </div>
                        <label for="cedula" class="col-sm-2">Camas por habitación <span class="text-danger">*</span></label>
                        <div class="col-sm-2">
                            {!! Form::select('escuela', array('' => 'Seleccione', 'ecsa' => 'Escuela de Ciencias Sociales y Administrativas (ECSA)', 'eica' => 'Escuela de Ingeniería y Ciencias Aplicadas (EICA)', 'agronomia' => 'Escuela de Agronomía', 'zootecnia' => 'Escuela de Zootecnia'), null, $attributes = array('id' => 'escuela', 'class' => 'form-control')) !!}
                        </div>
                        <label for="cedula" class="col-sm-2">Condiciones higienicas <span class="text-danger">*</span></label>
                        <div class="col-sm-2">
                            {!! Form::select('escuela', array('' => 'Seleccione', 'ecsa' => 'Escuela de Ciencias Sociales y Administrativas (ECSA)', 'eica' => 'Escuela de Ingeniería y Ciencias Aplicadas (EICA)', 'agronomia' => 'Escuela de Agronomía', 'zootecnia' => 'Escuela de Zootecnia'), null, $attributes = array('id' => 'escuela', 'class' => 'form-control')) !!}
                        </div>
                        <label for="cedula" class="col-sm-2">Ventilación <span class="text-danger">*</span></label>
                        <div class="col-sm-2">
                            {!! Form::select('escuela', array('' => 'Seleccione', 'ecsa' => 'Escuela de Ciencias Sociales y Administrativas (ECSA)', 'eica' => 'Escuela de Ingeniería y Ciencias Aplicadas (EICA)', 'agronomia' => 'Escuela de Agronomía', 'zootecnia' => 'Escuela de Zootecnia'), null, $attributes = array('id' => 'escuela', 'class' => 'form-control')) !!}
                        </div>
                    </div>
                    <div class="form-group clearfix col-sm-6">
                        <label for="apellidosNombres" class="col-sm-2">Ventilación <span class="text-danger">*</span></label>
                        <div class="col-sm-2">
                            {!! Form::select('escuela', array('' => 'Seleccione', 'ecsa' => 'Escuela de Ciencias Sociales y Administrativas (ECSA)', 'eica' => 'Escuela de Ingeniería y Ciencias Aplicadas (EICA)', 'agronomia' => 'Escuela de Agronomía', 'zootecnia' => 'Escuela de Zootecnia'), null, $attributes = array('id' => 'escuela', 'class' => 'form-control')) !!}
                        </div>
                        <label for="cedula" class="col-sm-2">Iluminación <span class="text-danger">*</span></label>
                        <div class="col-sm-2">
                            {!! Form::select('escuela', array('' => 'Seleccione', 'ecsa' => 'Escuela de Ciencias Sociales y Administrativas (ECSA)', 'eica' => 'Escuela de Ingeniería y Ciencias Aplicadas (EICA)', 'agronomia' => 'Escuela de Agronomía', 'zootecnia' => 'Escuela de Zootecnia'), null, $attributes = array('id' => 'escuela', 'class' => 'form-control')) !!}
                        </div>
                        <label for="cedula" class="col-sm-2">Dotación moviliario <span class="text-danger">*</span></label>
                        <div class="col-sm-2">
                            {!! Form::select('escuela', array('' => 'Seleccione', 'ecsa' => 'Escuela de Ciencias Sociales y Administrativas (ECSA)', 'eica' => 'Escuela de Ingeniería y Ciencias Aplicadas (EICA)', 'agronomia' => 'Escuela de Agronomía', 'zootecnia' => 'Escuela de Zootecnia'), null, $attributes = array('id' => 'escuela', 'class' => 'form-control')) !!}
                        </div>
                        <label for="cedula" class="col-sm-2">Otros <span class="text-danger">*</span></label>
                        <div class="col-sm-2">
                            {!! Form::text('apellidosNombres', null, ['placeholder' => '', 'class' => 'form-control', 'id' => 'apellidosNombres']) !!}
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
                            {!! Form::text('apellidosNombres', null, ['placeholder' => '', 'class' => 'form-control', 'id' => 'apellidosNombres']) !!}
                        </div>
                        <label for="cedula" class="col-sm-2">Almuerzo (Lugar) <span class="text-danger">*</span></label>
                        <div class="col-sm-2">
                            {!! Form::text('apellidosNombres', null, ['placeholder' => '', 'class' => 'form-control', 'id' => 'apellidosNombres']) !!}
                        </div>
                        <label for="cedula" class="col-sm-2">Cena (Lugar) <span class="text-danger">*</span></label>
                        <div class="col-sm-2">
                            {!! Form::text('apellidosNombres', null, ['placeholder' => '', 'class' => 'form-control', 'id' => 'apellidosNombres']) !!}
                        </div>
                    </div>
                    <div class="form-group clearfix col-sm-6">
                        <label for="apellidosNombres" class="col-sm-2">Desayuno (Costo) <span class="text-danger">*</span></label>
                        <div class="col-sm-2">
                            {!! Form::text('apellidosNombres', null, ['placeholder' => '0.00', 'class' => 'form-control', 'id' => 'apellidosNombres']) !!}
                        </div>
                        <label for="cedula" class="col-sm-2">Almuerzo (Costo) <span class="text-danger">*</span></label>
                        <div class="col-sm-2">
                            {!! Form::text('apellidosNombres', null, ['placeholder' => '0.00', 'class' => 'form-control', 'id' => 'apellidosNombres']) !!}
                        </div>
                        <label for="cedula" class="col-sm-2">Cena (Costo) <span class="text-danger">*</span></label>
                        <div class="col-sm-2">
                            {!! Form::text('apellidosNombres', null, ['placeholder' => '0.00', 'class' => 'form-control', 'id' => 'apellidosNombres']) !!}
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
                            {!! Form::input('number', 'ingresosPadres', null, ['id' => 'ingresosPadres', 'class' => 'form-control', 'placeholder' => '0.00', 'min' => '0']) !!}
                        </div>
                        <label for="cedula" class="col-sm-2">Ayuda familiar <span class="text-danger">*</span></label>
                        <div class="col-sm-2">
                            {!! Form::input('number', 'ingresosPadres', null, ['id' => 'ingresosPadres', 'class' => 'form-control', 'placeholder' => '0.00', 'min' => '0']) !!}
                        </div>
                        <label for="cedula" class="col-sm-2">Negocio <span class="text-danger">*</span></label>
                        <div class="col-sm-2">
                            {!! Form::input('number', 'ingresosPadres', null, ['id' => 'ingresosPadres', 'class' => 'form-control', 'placeholder' => '0.00', 'min' => '0']) !!}
                        </div>
                    </div>
                    <div class="form-group clearfix col-sm-6">
                        <label for="cedula" class="col-sm-2">Rentas <span class="text-danger">*</span></label>
                        <div class="col-sm-2">
                            {!! Form::input('number', 'ingresosPadres', null, ['id' => 'ingresosPadres', 'class' => 'form-control', 'placeholder' => '0.00', 'min' => '0']) !!}
                        </div>
                        <label for="cedula" class="col-sm-2">Becas y/o créditos <span class="text-danger">*</span></label>
                        <div class="col-sm-2">
                            {!! Form::input('number', 'ingresosPadres', null, ['id' => 'ingresosPadres', 'class' => 'form-control', 'placeholder' => '0.00', 'min' => '0']) !!}
                        </div>
                        <label for="cedula" class="col-sm-2">Pensión y/o jubilación <span class="text-danger">*</span></label>
                        <div class="col-sm-2">
                            {!! Form::input('number', 'ingresosPadres', null, ['id' => 'ingresosPadres', 'class' => 'form-control', 'placeholder' => '0.00', 'min' => '0']) !!}
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
                            {!! Form::input('number', 'ingresosPadres', null, ['id' => 'ingresosPadres', 'class' => 'form-control', 'placeholder' => '0.00', 'min' => '0']) !!}
                        </div>
                        <label for="cedula" class="col-sm-2">Vivienda <span class="text-danger">*</span></label>
                        <div class="col-sm-2">
                            {!! Form::input('number', 'ingresosPadres', null, ['id' => 'ingresosPadres', 'class' => 'form-control', 'placeholder' => '0.00', 'min' => '0']) !!}
                        </div>
                        <label for="cedula" class="col-sm-2">Servicios ṕúblicos <span class="text-danger">*</span></label>
                        <div class="col-sm-2">
                            {!! Form::input('number', 'ingresosPadres', null, ['id' => 'ingresosPadres', 'class' => 'form-control', 'placeholder' => '0.00', 'min' => '0']) !!}
                        </div>
                        <label for="cedula" class="col-sm-2">Transporte <span class="text-danger">*</span></label>
                        <div class="col-sm-2">
                            {!! Form::input('number', 'ingresosPadres', null, ['id' => 'ingresosPadres', 'class' => 'form-control', 'placeholder' => '0.00', 'min' => '0']) !!}
                        </div>
                    </div>
                    <div class="form-group clearfix col-sm-6">
                        <label for="cedula" class="col-sm-2">Salud <span class="text-danger">*</span></label>
                        <div class="col-sm-2">
                            {!! Form::input('number', 'ingresosPadres', null, ['id' => 'ingresosPadres', 'class' => 'form-control', 'placeholder' => '0.00', 'min' => '0']) !!}
                        </div>
                        <label for="cedula" class="col-sm-2">Hijos <span class="text-danger">*</span></label>
                        <div class="col-sm-2">
                            {!! Form::input('number', 'ingresosPadres', null, ['id' => 'ingresosPadres', 'class' => 'form-control', 'placeholder' => '0.00', 'min' => '0']) !!}
                        </div>
                        <label for="cedula" class="col-sm-2">Útiles escolares <span class="text-danger">*</span></label>
                        <div class="col-sm-2">
                            {!! Form::input('number', 'ingresosPadres', null, ['id' => 'ingresosPadres', 'class' => 'form-control', 'placeholder' => '0.00', 'min' => '0']) !!}
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
                        <label for="apellidosNombres" class="col-sm-2">Per capita mensual <span class="text-danger">*</span></label>
                        <div class="col-sm-2">
                            {!! Form::input('number', 'ingresosPadres', null, ['id' => 'ingresosPadres', 'class' => 'form-control', 'placeholder' => '0.00', 'min' => '0']) !!}
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
                    <label for="apellidosNombres" class="col-sm-2">Nombre y apellido <span class="text-danger">*</span></label>
                    <div>
                        {!! Form::input('number', 'ingresosPadres', null, ['id' => 'ingresosPadres', 'class' => 'form-control', 'placeholder' => '', 'min' => '0']) !!}
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-2">
                <div class="form-group clearfix">
                    <label for="apellidosNombres" class="col-sm-2">Parentesco <span class="text-danger">*</span></label>
                    <div>
                        {!! Form::select('escuela', array('' => 'Seleccione', 'ecsa' => 'Escuela de Ciencias Sociales y Administrativas (ECSA)', 'eica' => 'Escuela de Ingeniería y Ciencias Aplicadas (EICA)', 'agronomia' => 'Escuela de Agronomía', 'zootecnia' => 'Escuela de Zootecnia'), null, $attributes = array('id' => 'escuela', 'class' => 'form-control')) !!}
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-2">
                <div class="form-group clearfix">
                    <label for="apellidosNombres" class="col-sm-2">Edad <span class="text-danger">*</span></label>
                    <div>
                        {!! Form::input('number', 'ingresosPadres', null, ['id' => 'ingresosPadres', 'class' => 'form-control', 'placeholder' => '', 'min' => '0']) !!}
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-2">
                <div class="form-group clearfix">
                    <label for="apellidosNombres" class="col-sm-2">Oficio <span class="text-danger">*</span></label>
                    <div>
                        {!! Form::input('number', 'ingresosPadres', null, ['id' => 'ingresosPadres', 'class' => 'form-control', 'placeholder' => '', 'min' => '0']) !!}
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-2">
                <div class="form-group clearfix">
                    <label for="apellidosNombres" class="col-sm-2">Institución <span class="text-danger">*</span></label>
                    <div>
                        {!! Form::input('number', 'ingresosPadres', null, ['id' => 'ingresosPadres', 'class' => 'form-control', 'placeholder' => '', 'min' => '0']) !!}
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-2">
                <div class="form-group clearfix">
                    <label for="apellidosNombres" class="col-sm-2">Sueldo <span class="text-danger">*</span></label>
                    <div>
                        {!! Form::input('number', 'ingresosPadres', null, ['id' => 'ingresosPadres', 'class' => 'form-control', 'placeholder' => '0.00', 'min' => '0']) !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-2">
                <div class="form-group clearfix">
                    <div>
                        {!! Form::input('number', 'ingresosPadres', null, ['id' => 'ingresosPadres', 'class' => 'form-control', 'placeholder' => '', 'min' => '0']) !!}
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-2">
                <div class="form-group clearfix">
                    <div>
                        {!! Form::select('escuela', array('' => 'Seleccione', 'ecsa' => 'Escuela de Ciencias Sociales y Administrativas (ECSA)', 'eica' => 'Escuela de Ingeniería y Ciencias Aplicadas (EICA)', 'agronomia' => 'Escuela de Agronomía', 'zootecnia' => 'Escuela de Zootecnia'), null, $attributes = array('id' => 'escuela', 'class' => 'form-control')) !!}
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-2">
                <div class="form-group clearfix">
                    <div>
                        {!! Form::input('number', 'ingresosPadres', null, ['id' => 'ingresosPadres', 'class' => 'form-control', 'placeholder' => '', 'min' => '0']) !!}
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-2">
                <div class="form-group clearfix">
                    <div>
                        {!! Form::input('number', 'ingresosPadres', null, ['id' => 'ingresosPadres', 'class' => 'form-control', 'placeholder' => '', 'min' => '0']) !!}
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-2">
                <div class="form-group clearfix">
                    <div>
                        {!! Form::input('number', 'ingresosPadres', null, ['id' => 'ingresosPadres', 'class' => 'form-control', 'placeholder' => '', 'min' => '0']) !!}
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-2">
                <div class="form-group clearfix">
                    <div>
                        {!! Form::input('number', 'ingresosPadres', null, ['id' => 'ingresosPadres', 'class' => 'form-control', 'placeholder' => '0.00', 'min' => '0']) !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-2">
                <div class="form-group clearfix">
                    <div>
                        {!! Form::input('number', 'ingresosPadres', null, ['id' => 'ingresosPadres', 'class' => 'form-control', 'placeholder' => '', 'min' => '0']) !!}
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-2">
                <div class="form-group clearfix">
                    <div>
                        {!! Form::select('escuela', array('' => 'Seleccione', 'ecsa' => 'Escuela de Ciencias Sociales y Administrativas (ECSA)', 'eica' => 'Escuela de Ingeniería y Ciencias Aplicadas (EICA)', 'agronomia' => 'Escuela de Agronomía', 'zootecnia' => 'Escuela de Zootecnia'), null, $attributes = array('id' => 'escuela', 'class' => 'form-control')) !!}
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-2">
                <div class="form-group clearfix">
                    <div>
                        {!! Form::input('number', 'ingresosPadres', null, ['id' => 'ingresosPadres', 'class' => 'form-control', 'placeholder' => '', 'min' => '0']) !!}
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-2">
                <div class="form-group clearfix">
                    <div>
                        {!! Form::input('number', 'ingresosPadres', null, ['id' => 'ingresosPadres', 'class' => 'form-control', 'placeholder' => '', 'min' => '0']) !!}
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-2">
                <div class="form-group clearfix">
                    <div>
                        {!! Form::input('number', 'ingresosPadres', null, ['id' => 'ingresosPadres', 'class' => 'form-control', 'placeholder' => '', 'min' => '0']) !!}
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-2">
                <div class="form-group clearfix">
                    <div>
                        {!! Form::input('number', 'ingresosPadres', null, ['id' => 'ingresosPadres', 'class' => 'form-control', 'placeholder' => '0.00', 'min' => '0']) !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-2">
                <div class="form-group clearfix">
                    <div>
                        <button class="btn waves-effect waves-light btn-success"> <i class="fa fa-plus"></i> </button>
                        <button class="btn waves-effect waves-light btn-danger"> <i class="fa fa-minus"></i> </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <h3>Psicodinámica</h3>
    <section>
        <div class="row">
            <div class="col-xs-12 col-sm-12">
                <h4 class="header-title m-t-0">A. Situación Psicosocial</h4>
                <div class="row">
                    <div class="form-group clearfix col-sm-8">
                        <label for="apellidosNombres" class="col-sm-2">Problemas en relación con:</label>
                    </div>
                    <div class="form-group clearfix col-sm-4">
                        <label for="apellidosNombres" class="col-sm-2">Observaciones</label>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group clearfix col-sm-4">
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
                    <div class="form-group clearfix col-sm-4">
                        <div class="col-sm-3">
                            {!! Form::select('escuela', array('' => 'Seleccione', 'ecsa' => 'Escuela de Ciencias Sociales y Administrativas (ECSA)', 'eica' => 'Escuela de Ingeniería y Ciencias Aplicadas (EICA)', 'agronomia' => 'Escuela de Agronomía', 'zootecnia' => 'Escuela de Zootecnia'), null, $attributes = array('id' => 'escuela', 'class' => 'form-control', 'style' => 'margin-top:10px; margin-bottom: 0.5em;')) !!}
                        </div>
                        <div class="col-sm-3">
                            {!! Form::select('escuela', array('' => 'Seleccione', 'ecsa' => 'Escuela de Ciencias Sociales y Administrativas (ECSA)', 'eica' => 'Escuela de Ingeniería y Ciencias Aplicadas (EICA)', 'agronomia' => 'Escuela de Agronomía', 'zootecnia' => 'Escuela de Zootecnia'), null, $attributes = array('id' => 'escuela', 'class' => 'form-control', 'style' => 'margin-top:10px; margin-bottom: 0.5em;')) !!}
                        </div>
                        <div class="col-sm-3">
                            {!! Form::select('escuela', array('' => 'Seleccione', 'ecsa' => 'Escuela de Ciencias Sociales y Administrativas (ECSA)', 'eica' => 'Escuela de Ingeniería y Ciencias Aplicadas (EICA)', 'agronomia' => 'Escuela de Agronomía', 'zootecnia' => 'Escuela de Zootecnia'), null, $attributes = array('id' => 'escuela', 'class' => 'form-control', 'style' => 'margin-top:10px; margin-bottom: 0.5em;')) !!}
                        </div>
                        <div class="col-sm-3">
                            {!! Form::select('escuela', array('' => 'Seleccione', 'ecsa' => 'Escuela de Ciencias Sociales y Administrativas (ECSA)', 'eica' => 'Escuela de Ingeniería y Ciencias Aplicadas (EICA)', 'agronomia' => 'Escuela de Agronomía', 'zootecnia' => 'Escuela de Zootecnia'), null, $attributes = array('id' => 'escuela', 'class' => 'form-control', 'style' => 'margin-top:10px; margin-bottom: 0.5em;')) !!}
                        </div>
                        <div class="col-sm-3">
                            {!! Form::select('escuela', array('' => 'Seleccione', 'ecsa' => 'Escuela de Ciencias Sociales y Administrativas (ECSA)', 'eica' => 'Escuela de Ingeniería y Ciencias Aplicadas (EICA)', 'agronomia' => 'Escuela de Agronomía', 'zootecnia' => 'Escuela de Zootecnia'), null, $attributes = array('id' => 'escuela', 'class' => 'form-control', 'style' => 'margin-top:10px; margin-bottom: 0.5em;')) !!}
                        </div>
                        <div class="col-sm-3">
                            {!! Form::select('escuela', array('' => 'Seleccione', 'ecsa' => 'Escuela de Ciencias Sociales y Administrativas (ECSA)', 'eica' => 'Escuela de Ingeniería y Ciencias Aplicadas (EICA)', 'agronomia' => 'Escuela de Agronomía', 'zootecnia' => 'Escuela de Zootecnia'), null, $attributes = array('id' => 'escuela', 'class' => 'form-control', 'style' => 'margin-top:10px; margin-bottom: 0.5em;')) !!}
                        </div>
                        <div class="col-sm-3">
                            {!! Form::select('escuela', array('' => 'Seleccione', 'ecsa' => 'Escuela de Ciencias Sociales y Administrativas (ECSA)', 'eica' => 'Escuela de Ingeniería y Ciencias Aplicadas (EICA)', 'agronomia' => 'Escuela de Agronomía', 'zootecnia' => 'Escuela de Zootecnia'), null, $attributes = array('id' => 'escuela', 'class' => 'form-control', 'style' => 'margin-top:10px; margin-bottom: 0.5em;')) !!}
                        </div>
                        <div class="col-sm-3">
                            {!! Form::select('escuela', array('' => 'Seleccione', 'ecsa' => 'Escuela de Ciencias Sociales y Administrativas (ECSA)', 'eica' => 'Escuela de Ingeniería y Ciencias Aplicadas (EICA)', 'agronomia' => 'Escuela de Agronomía', 'zootecnia' => 'Escuela de Zootecnia'), null, $attributes = array('id' => 'escuela', 'class' => 'form-control', 'style' => 'margin-top:10px; margin-bottom: 0.5em;')) !!}
                        </div>
                    </div>
                    <div class="form-group clearfix col-sm-4">
                        <div class="col-sm-3">
                            {!! Form::text('apellidosNombres', null, ['placeholder' => '', 'class' => 'form-control', 'id' => 'apellidosNombres', 'style' => 'margin-top:10px; margin-bottom: 0.5em;']) !!}
                        </div>
                        <div class="col-sm-3">
                            {!! Form::text('apellidosNombres', null, ['placeholder' => '', 'class' => 'form-control', 'id' => 'apellidosNombres', 'style' => 'margin-top:10px; margin-bottom: 0.5em;']) !!}
                        </div>
                        <div class="col-sm-3">
                            {!! Form::text('apellidosNombres', null, ['placeholder' => '', 'class' => 'form-control', 'id' => 'apellidosNombres', 'style' => 'margin-top:10px; margin-bottom: 0.5em;']) !!}
                        </div>
                        <div class="col-sm-3">
                            {!! Form::text('apellidosNombres', null, ['placeholder' => '', 'class' => 'form-control', 'id' => 'apellidosNombres', 'style' => 'margin-top:10px; margin-bottom: 0.5em;']) !!}
                        </div>
                        <div class="col-sm-3">
                            {!! Form::text('apellidosNombres', null, ['placeholder' => '', 'class' => 'form-control', 'id' => 'apellidosNombres', 'style' => 'margin-top:10px; margin-bottom: 0.5em;']) !!}
                        </div>
                        <div class="col-sm-3">
                            {!! Form::text('apellidosNombres', null, ['placeholder' => '', 'class' => 'form-control', 'id' => 'apellidosNombres', 'style' => 'margin-top:10px; margin-bottom: 0.5em;']) !!}
                        </div>
                        <div class="col-sm-3">
                            {!! Form::text('apellidosNombres', null, ['placeholder' => '', 'class' => 'form-control', 'id' => 'apellidosNombres', 'style' => 'margin-top:10px; margin-bottom: 0.5em;']) !!}
                        </div>
                        <div class="col-sm-3">
                            {!! Form::text('apellidosNombres', null, ['placeholder' => '', 'class' => 'form-control', 'id' => 'apellidosNombres', 'style' => 'margin-top:10px; margin-bottom: 0.5em;']) !!}
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
                        <div class="checkbox">
                            <input id="checkbox0" type="checkbox">
                            <label for="checkbox0">
                                Sincero
                            </label>
                        </div>
                        <div class="checkbox">
                            <input id="checkbox0" type="checkbox">
                            <label for="checkbox0">
                                Colaborador
                            </label>
                        </div>
                        <div class="checkbox">
                            <input id="checkbox0" type="checkbox">
                            <label for="checkbox0">
                                Poco colaborador
                            </label>
                        </div>
                        <div class="checkbox">
                            <input id="checkbox0" type="checkbox">
                            <label for="checkbox0">
                                Nada colaborador
                            </label>
                        </div>
                    </div>
                    <div class="form-group clearfix col-sm-6">
                        <div class="col-sm-3">
                            {!! Form::textarea('habilidades', null, $attributes = array('id' => 'habilidades', 'class' => 'form-control', 'rows' => '8')) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- end row -->
    </section>
</div>