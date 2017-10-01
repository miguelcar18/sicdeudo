<div>
    <h3>Datos generales</h3>
    <section>
        <h4 class="header-title p-20"><b>DATOS PERSONALES</b></h4>
        <hr>
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
        <div class="row">
            <div class="col-xs-12 col-sm-6">
                <div class="form-group clearfix">
                    <label for="email"><b>Edad:</b> {{ $estudiante->edad }}</label>
                </div>
            </div>
            @if(isset($estudiante->fechaNacimiento))
            <div class="col-xs-12 col-sm-6">
                <div class="form-group clearfix">
                    <?php
                        $separar = explode("-", $estudiante->fechaNacimiento);
                        $fechaNormal = $separar[2]."/".$separar[1]."/".$separar[0];
                    ?>
                    <label for="address"><b>Fecha de nacimiento:</b> {{ $fechaNormal }}</label>
                </div>
            </div>
            @endif
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-6">
                <div class="form-group clearfix">
                    <label for="email"><b>Estado civil:</b> {{ ucfirst($estudiante->estadoCivil) }}</label>
                </div>
            </div>
            @if($estudiante->lugarNacimiento != "")
            <div class="col-xs-12 col-sm-6">
                <div class="form-group clearfix">
                    <label for="address"><b>Lugar de nacimiento:</b> {{ $estudiante->lugarNacimiento }}</label>
                </div>
            </div>
            @endif
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12">
                <div class="form-group clearfix">
                    <label for="email"><b>Dirección permanente:</b> {{ $estudiante->direccionPermanente }}</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-6">
                <div class="form-group clearfix">
                    <label for="email"><b>Teléfono celular:</b> {{ $estudiante->telefonoCelular }}</label>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6">
                <div class="form-group clearfix">
                    <label for="address"><b>Dirección local:</b> {{ $estudiante->direccionLocal }}</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-6">
                <div class="form-group clearfix">
                    <label for="email"><b>Correo electrónico:</b> {{ $estudiante->email }}</label>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6">
                <div class="form-group clearfix">
                    <label for="address"><b>Teléfono de referencia:</b> {{ $estudiante->telefonoReferencia }}</label>
                </div>
            </div>
        </div>
        <h4 class="header-title p-20"><b>DATOS ACADÉMICOS</b></h4>
        <hr>
        <div class="row">
            <div class="col-xs-12 col-sm-6">
                <div class="form-group clearfix">
                    <label for="name"><b>Especialidad:</b> 
                    @if($estudiante->datosAcademicos->especialidad == 'administracion' )
                    Administración de Empresas
                    @elseif($estudiante->datosAcademicos->especialidad == 'contaduria' )
                    Contaduría Pública
                    @elseif($estudiante->datosAcademicos->especialidad == 'gerencia' )
                    Gerencia de Recursos Humanos
                    @elseif($estudiante->datosAcademicos->especialidad == 'agronomia' )
                    Ingeniería Agronómica
                    @elseif($estudiante->datosAcademicos->especialidad == 'petroleo' )
                    Ingeniería de Petróleo
                    @elseif($estudiante->datosAcademicos->especialidad == 'sistemas' )
                    Ingeniería de Sistemas
                    @elseif($estudiante->datosAcademicos->especialidad == 'produccionAnimal' )
                    Ingeniería en Producción Animal
                    @elseif($estudiante->datosAcademicos->especialidad == 'tecnologiaAlimentos' )
                    Tecnología de los Alimentos
                    @endif
                    </label>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6">
                <div class="form-group clearfix">
                    <label for="surname"><b>Escuela:</b> {{ strtoupper($estudiante->datosAcademicos->escuela) }}</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-6">
                <div class="form-group clearfix">
                    <label for="name"><b>Año de ingreso a la UDO:</b> {{ $estudiante->datosAcademicos->anioIngresoUdo }} </label>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6">
                <div class="form-group clearfix">
                    <label for="surname"><b>Año de ingreso al programa:</b> {{ $estudiante->datosAcademicos->anioIngresoPrograma }}</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-6">
                <div class="form-group clearfix">
                    <label for="name"><b>Semestre que cursa actualmente:</b> {{ ucfirst($estudiante->datosAcademicos->semestreActual) }} Semestre </label>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6">
                <div class="form-group clearfix">
                    <label for="surname"><b>Promedio del semestre anterior:</b> {{ number_format($estudiante->datosAcademicos->promedioSemestreAnterior, 2, '.', '') }}</label>
                </div>
            </div>
        </div>
        @if($estudiante->datosAcademicos->creditosSemestreAnterior != "")
        <div class="row">
            <div class="col-xs-12 col-sm-6">
                <div class="form-group clearfix">
                    <label for="name"><b>Total de créditos aprobados en la carrera:</b> {{ $estudiante->datosAcademicos->creditosAprobadosCarrera }} </label>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6">
                <div class="form-group clearfix">
                    <label for="name"><b>Número de materias inscritas actualmente:</b> {{ $estudiante->datosAcademicos->numeroMateriasInscritas }} </label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-6">
                <div class="form-group clearfix">
                    <label for="name"><b>Número de créditos inscritos actualmente:</b> {{ $estudiante->datosAcademicos->numeroCreditosInscritos }} </label>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6">
                <div class="form-group clearfix">
                    <label for="surname"><b>Créditos aprobados en el semestre anterior:</b> {{ $estudiante->datosAcademicos->creditosSemestreAnterior }}</label>
                </div>
            </div>
        </div>
        @endif
    </section>
    @if($peticion->status == 'Estudio socioeconomico realizado' || $peticion->status == 'Aprobado' || $peticion->status == 'Rechazado' || $peticion->status == 'Renovado' || $peticion->status == 'Renovado con recuperación académica')
    <h3>Estudio Socio-económico</h3>
    <section>
        <h4 class="header-title p-20"><b>SITUACIÓN SOCIO-ECONÓMICA</b></h4>
        <hr>
        <div class="row">
            <div class="col-xs-12 col-sm-6">
                <div class="form-group clearfix">
                    <label for="name"><b>Condiciones para el estudio:</b> {{ $datosSocioEconomicos->condicionesEstudio }} </label>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6">
                <div class="form-group clearfix">
                    <label for="email"><b>Camas por habitación:</b> {{ $datosSocioEconomicos->camasHabitacion }}</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-6">
                <div class="form-group clearfix">
                    <label for="address"><b>Alojamiento de la localidad:</b> {{ $datosSocioEconomicos->alojamientoLocalidad }}</label>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6">
                <div class="form-group clearfix">
                    <label for="address"><b>Alojamiento de otras reginoes:</b> {{ $datosSocioEconomicos->alojamientoRegiones }}</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-6">
                <div class="form-group clearfix">
                    <label for="email"><b>Condiciones higienicas:</b> {{ $datosSocioEconomicos->condicionesHigienicas }}</label>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6">
                <div class="form-group clearfix">
                    <label for="address"><b>Ventilación:</b> {{ $datosSocioEconomicos->ventilacion }}</label>
                </div>
            </div>
        </div>
        <h4 class="header-title p-20"><b>ECONOMÍA FAMILIAR</b></h4>
        <hr>
        <div class="row">
            <div class="col-xs-12 col-sm-4">
                <div class="form-group clearfix">
                    <label for="name"><b>Sueldo:</b> {{ number_format($economiaFamiliar->sueldo, 2, ',', '.') }} </label>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4">
                <div class="form-group clearfix">
                    <label for="email"><b>Ayuda familiar:</b> {{ number_format($economiaFamiliar->ayudaFamiliar, 2, ',', '.') }}</label>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4">
                <div class="form-group clearfix">
                    <label for="email"><b>Negocio:</b> {{ number_format($economiaFamiliar->negocio, 2, ',', '.') }}</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-4">
                <div class="form-group clearfix">
                    <label for="address"><b>Rentas:</b> {{ number_format($economiaFamiliar->rentas, 2, ',', '.') }}</label>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4">
                <div class="form-group clearfix">
                    <label for="address"><b>Becas y/o créditos:</b> {{ number_format($economiaFamiliar->becasCreditos, 2, ',', '.') }}</label>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4">
                <div class="form-group clearfix">
                    <label for="address"><b>Pension y/o jubilación:</b> {{ number_format($economiaFamiliar->pensionJubilacion, 2, ',', '.') }}</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-4">
                <div class="form-group clearfix">
                    <label for="name"><b>Alimentación:</b> {{ number_format($economiaFamiliar->alimentacion, 2, ',', '.') }} </label>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4">
                <div class="form-group clearfix">
                    <label for="email"><b>Viviendar:</b> {{ number_format($economiaFamiliar->vivienda, 2, ',', '.') }}</label>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4">
                <div class="form-group clearfix">
                    <label for="email"><b>Transporte:</b> {{ number_format($economiaFamiliar->transporte, 2, ',', '.') }}</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-4">
                <div class="form-group clearfix">
                    <label for="address"><b>Salud:</b> {{ number_format($economiaFamiliar->salud, 2, ',', '.') }}</label>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4">
                <div class="form-group clearfix">
                    <label for="address"><b>Hijos:</b> {{ number_format($economiaFamiliar->hijos, 2, ',', '.') }}</label>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4">
                <div class="form-group clearfix">
                    <label for="address"><b>Útiles escolares:</b> {{ number_format($economiaFamiliar->utiles, 2, ',', '.') }}</label>
                </div>
            </div>
        </div>
        <h4 class="header-title p-20"><b>PSICODINAMICA</b></h4>
        <hr>
        <div class="row">
            <div class="col-xs-12 col-sm-6">
                <div class="form-group clearfix">
                    <label for="email"><b>Comportamiento durante la entrevista:</b> {{ $psicodinamica->comportamiento }}</label>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6">
                <div class="form-group clearfix">
                    <label for="address"><b>Observaciones generales:</b> {{ $psicodinamica->observacionesGenerales }}</label>
                </div>
            </div>
        </div>
    </section>
    @endif
</div>