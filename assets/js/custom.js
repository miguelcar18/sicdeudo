var resizefunc = [];

$.fn.reset = function () {
    $(this).each (function() { this.reset(); });
}

function decision(message, url){
    if(confirm(message)) location.href = url;
}
function confirmSubmit(form, message) { 
    var agree=confirm(message); 
    if (agree) {
        form.submit();
        return false; //de todas formas el link no se ejecutara
    } else {
        return false;
    } 
}

function addData(){
    var table = document.getElementById("tablaCargaFamiliar").tBodies[0];
   
    var row = table.insertRow(-1);
    var cell0 = row.insertCell(0);
    var cell1 = row.insertCell(1);
    var cell2 = row.insertCell(2);
    var cell3 = row.insertCell(3);
    var cell4 = row.insertCell(4);
    var cell5 = row.insertCell(5);
    var cell6 = row.insertCell(6);

    cell0.innerHTML = '<input id="nombreCarga" class="form-control" placeholder="" name="nombreCarga[]" type="text" required>';
    cell1.innerHTML = '<select id="parentesco" class="form-control" name="parentesco[]"><option value="" selected="selected">Seleccione</option><option value="Padre">Padre</option><option value="Madre">Madre</option><option value="Esposo/a">Esposo/a</option><option value="Hijo/a">Hijo/a</option></select required>';
    cell2.innerHTML = '<input id="edad" class="form-control" placeholder="" min="0" name="edad[]" type="number" required>';
    cell3.innerHTML = '<input id="oficio" class="form-control" placeholder="" name="oficio[]" type="text" required>';
    cell4.innerHTML = '<input id="institucion" class="form-control" placeholder="" name="institucion[]" type="text">';
    cell5.innerHTML = '<input id="sueldo" class="form-control" placeholder="0.00" min="0" name="sueldo[]" type="number">';
    cell6.innerHTML = '<button class="btn waves-effect waves-light btn-danger" onclick="removeData(this)"> <i class="fa fa-minus"></i> </button>';
}

function removeData(row){
    row.parentNode.parentNode.remove();
}

$("form#loginForm").validate({
    rules: {
        username: {
            required: true
        },
        password: {
            required: true
        }
    },
    messages: {
        username: {
            required: 'Ingrese un usuario'
        },
        password: {
            required: 'Ingrese una contraseña'
        }
    },
    invalidHandler: function (event, validator) { 
        $('.alert-error', $('.login-form')).show();
    },

    highlight: function (e) {
        $(e).closest('.form-group').removeClass('has-info').addClass('has-danger');
    },

    success: function (e) {
        $(e).closest('.form-group').removeClass('has-danger').addClass('has-success');
        $(e).remove();
    },
    errorPlacement: function (error, element) {
        if(element.is(':checkbox') || element.is(':radio')) {
            var controls = element.closest('.controls');
            if(controls.find(':checkbox,:radio').length > 1) controls.append(error);
            else error.insertAfter(element.nextAll('.lbl:eq(0)').eq(0));
        }
        else if(element.is('.select2')) {
            error.insertAfter(element.siblings('[class*="select2-container"]:eq(0)'));
        }
        else if(element.is('.chzn-select')) {
            error.insertAfter(element.siblings('[class*="chzn-container"]:eq(0)'));
        }
        else error.insertAfter(element);
    },
    submitHandler: function () {
        var accion = '';
        var cargando = '<img src="back/assets/images/loading.gif" />';
        var token = $("input[name=_token]").val();
        var formData = new FormData($("form#loginForm")[0]);
        $.ajax({
            url:  $("form#loginForm").attr('action'),
            type: $("form#loginForm").attr('method'),
            headers: {'X-CSRF-TOKEN' : token},
            data: formData,
            processData: false,
            contentType: false,
            beforeSend:function(){
                $('div#respuesta').css('display', 'block');
                $('div#respuesta').html(cargando);
                $('.btn-primary').attr('disabled', true);
            },
            success:function(respuesta){
                if(respuesta.message == "error")
                {
                    var mensaje = '<div class="alert alert-danger" role="alert">';
                    mensaje+='<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>';
                    mensaje+='<h4><i class="fa fa-ban"></i> Error: </h4>';
                    mensaje+='<p>Usuario o contraseña incorrectos</p>';
                    mensaje+='</div>';
                    $('div#respuesta').empty();
                    $('div#respuesta').fadeOut(10000).html(mensaje);
                    $('.btn-primary').attr('disabled', false);
                }
                else
                {
                    $('div#respuesta').empty();
                    window.location = 'http://'+window.location.host+"/sicdeudo/dashboard";
                }
            }
        })            
        return false;
    }
});
$('#fechaNacimiento').datepicker({
    format: "dd/mm/yyyy",
    autoclose: true,
    todayHighlight: true
});

$("form#solicitudAOForm, form#solicitudATForm").validate({
    rules: {
        apellidosNombres: {
            required: true
        },
        cedula: {
            required: true,
            number: true
        },
        edad: {
            required: true,
            number:true,
            min:1
        },
        fechaNacimiento: {
            required: true
        },
        estadoCivil: {
            required: true
        },
        lugarNacimiento: {
            required: true
        },
        direccionPermanente: {
            required: true
        },
        direccionLocal: {
            required: true
        },
        telefonoCelular: {
            required: true
        },
        telefonoReferencia: {
            required: true
        },
        email: {
            required: true,
            email: true
        },
        especialidad: {
            required: true
        },
        escuela: {
            required: true
        },
        anioIngresoUdo: {
            required: true
        },
        anioIngresoPrograma: {
            required: true
        },
        semestreActual: {
            required: true
        },
        creditosSemestreAnterior: {
            required: true,
            number: true,
            min:0
        },
        creditosAprobadosCarrera: {
            required: true,
            number: true,
            min:0
        },
        promedioSemestreAnterior: {
            required: true,
            number: true,
            min:0
        },
        numeroMateriasInscritas: {
            required: true,
            number: true,
            min:0
        },
        numeroCreditosInscritos: {
            required: true,
            number: true,
            min:0
        },
        lugar: {
            required: true
        },
        habilidades: {
            required: true
        }
    },
    messages: {
        apellidosNombres: {
            required: "Ingrese el nombre y apellido"
        },
        cedula: {
            required: "Ingrese el número de céduka",
            number: "Ingrese solo números"
        },
        edad: {
            required: "Ingrese la edad",
            number:"Ingrese solo números",
            min: "El número mínimo permitido es 1"
        },
        fechaNacimiento: {
            required: "Ingrese la fecha de nacimiento"
        },
        estadoCivil: {
            required: "Seleccione el estado civil"
        },
        lugarNacimiento: {
            required: "Ingrese el lugar de nacimiento"
        },
        direccionPermanente: {
            required: "Ingrese la dirección permanente"
        },
        direccionLocal: {
            required: "Ingrese la dirección local"
        },
        telefonoCelular: {
            required: "Ingrese el teléfono celular"
        },
        telefonoReferencia: {
            required: "Ingrese el teléfono de referencia"
        },
        email: {
            required: "Ingrese el email",
            email: "Ingrese un formato de email correcto"
        },
        especialidad: {
            required: "Seleccione la especialidad"
        },
        escuela: {
            required: "Seleccione la escuela"
        },
        anioIngresoUdo: {
            required: "Seleccione el año de ingreso a la UDO"
        },
        anioIngresoPrograma: {
            required: "Seleccione el año de ingreso al programa"
        },
        semestreActual: {
            required: "Seleccione el semestre actual cursado"
        },
        creditosSemestreAnterior: {
            required: "Ingrese los créditos del semestre anterior",
            number: "Ingrese solo números",
            min: "La cantidad debe de ser mayor a 0"
        },
        creditosAprobadosCarrera: {
            required: "Ingrese los créditos aprobados en la carrera",
            number: "Ingrese solo números",
            min: "La cantidad debe de ser mayor a 0"
        },
        promedioSemestreAnterior: {
            required: "Ingrese el promedio del semestre anterior cursado",
            number: "Ingrese solo números",
            min: "La cantidad debe de ser mayor a 0"
        },
        numeroMateriasInscritas: {
            required: "Ingrese el número actual de materias inscritas",
            number: "Ingrese solo números",
            min: "La cantidad debe de ser mayor a 0"
        },
        numeroCreditosInscritos: {
            required: "Ingrese el número actual de créditos inscritos",
            number: "Ingrese solo números",
            min: "La cantidad debe de ser mayor a 0"
        },
        lugar: {
            required: "Ingrese el lugar de preferencia"
        },
        habilidades: {
            required: "Ingrese algunas habilidades, destrezas o capacitacion adquirida"
        }
    },
    invalidHandler: function (event, validator) { 
        $('.alert-error', $('.login-form')).show();
    },
    highlight: function (e) {
        $(e).closest('.form-group > section').removeClass('has-info').addClass('has-danger');
    },
    success: function (e) {
        $(e).closest('.form-group > section').removeClass('has-danger').addClass('has-success');
        $(e).remove();
    },
    errorPlacement: function (error, element) {
        error.insertAfter(element);
    },
    submitHandler: function (form) {
        var accion = '';
        var tipo = $("button.btn-primary").data('tipo');
        if($("button.btn-primary").attr('data') == 1)
            accion = 'registrada';
        else if($("button.btn-primary").attr('data') == 0)
            accion = 'actualizada';
        var alertMessage = 'Solicitud de ayudantía '+tipo+' '+accion+' satisfactoriamente';
        var token = $("input[name=_token]").val();
        var formData = new FormData($("form.ayudantiaForm")[0]);
        $.ajax({
            url:  $("form.ayudantiaForm").attr('action'),
            type: $("form.ayudantiaForm").attr('method'),
            headers: {'X-CSRF-TOKEN' : token},
            data: new FormData($("form.ayudantiaForm")[0]),
            processData: false,
            contentType: false,
            beforeSend:function(){
                $("button.btn-primary").addClass('disabled');
                $("button#cancelar").addClass('disabled');
            },
            success:function(respuesta){
                var url = '/sicdeudo/dashboard/reporte/'+respuesta.idPeticion;
                swal({
                    title: '¡Registrado!',
                    text: alertMessage,
                    type: 'success',
                }, function () {
                    window.open(url, '_blank');
                });
                if($("button.btn-primary").attr('data') == 1)
                {
                    $('form.ayudantiaForm').reset();
                    $('.form-group').removeClass('has-success');
                }
                $("button.btn-primary").removeClass('disabled');
                $("button#cancelar").removeClass('disabled');
            }
        })
        return false;
    },
});

$("form#renovacionAOForm, form#renovacionATForm").validate({
    rules: {
        apellidosNombres: {
            required: true
        },
        cedula: {
            required: true,
            number: true
        },
        edad: {
            required: true,
            number:true,
            min:1
        },
        estadoCivil: {
            required: true
        },
        estado: {
            required: true
        },
        direccionPermanente: {
            required: true
        },
        direccionLocal: {
            required: true
        },
        telefonoCelular: {
            required: true
        },
        telefonoReferencia: {
            required: true
        },
        email: {
            required: true,
            email: true
        },
        especialidad: {
            required: true
        },
        escuela: {
            required: true
        },
        anioIngresoUdo: {
            required: true
        },
        anioIngresoPrograma: {
            required: true
        },
        semestreActual: {
            required: true
        },
        promedioSemestreAnterior: {
            required: true,
            number: true,
            min:0
        },
        materiasInscritasSemestreAnterior: {
            required: true,
            number: true,
            min:0
        },
        materiasCursadasSemestreAnterior: {
            required: true,
            number: true,
            min:0
        },
        materiasAprobadasSemestreAnterior: {
            required: true,
            number: true,
            min:0
        },
        materiasRetiradasSemestreAnterior: {
            required: true,
            number: true,
            min:0
        },
        nombre: {
            required: true
        },
        dependencia: {
            required: true
        },
        relacion: {
            required: true
        },
        permanecerSitio: {
            required: true
        }
    },
    messages: {
        apellidosNombres: {
            required: "Ingrese el nombre y apellido"
        },
        cedula: {
            required: "Ingrese el número de céduka",
            number: "Ingrese solo números"
        },
        edad: {
            required: "Ingrese la edad",
            number:"Ingrese solo números",
            min: "El número mínimo permitido es 1"
        },
        estadoCivil: {
            required: "Seleccione el estado civil"
        },
        estado: {
            required: "Ingrese el estado"
        },
        direccionPermanente: {
            required: "Ingrese la dirección permanente"
        },
        direccionLocal: {
            required: "Ingrese la dirección local"
        },
        telefonoCelular: {
            required: "Ingrese el teléfono celular"
        },
        telefonoReferencia: {
            required: "Ingrese el teléfono de referencia"
        },
        email: {
            required: "Ingrese el email",
            email: "Ingrese un formato de email correcto"
        },
        especialidad: {
            required: "Seleccione la especialidad"
        },
        escuela: {
            required: "Seleccione la escuela"
        },
        anioIngresoUdo: {
            required: "Seleccione el año de ingreso a la UDO"
        },
        anioIngresoPrograma: {
            required: "Seleccione el año de ingreso al programa"
        },
        semestreActual: {
            required: "Seleccione el semestre actual cursado"
        },
        promedioSemestreAnterior: {
            required: "Ingrese el promedio del semestre anterior cursado",
            number: "Ingrese solo números",
            min: "La cantidad debe de ser mayor a 0"
        },
        materiasInscritasSemestreAnterior: {
            required: "Ingrese el número de materias inscritas del semestre anterior",
            number: "Ingrese solo números",
            min: "La cantidad debe de ser mayor a 0"
        },
        materiasCursadasSemestreAnterior: {
            required: "Ingrese el número de materias cursadas del semestre anterior",
            number: "Ingrese solo números",
            min: "La cantidad debe de ser mayor a 0"
        },
        materiasAprobadasSemestreAnterior: {
            required: "Ingrese el número de materias aprobadas del semestre anterior",
            number: "Ingrese solo números",
            min: "La cantidad debe de ser mayor a 0"
        },
        materiasRetiradasSemestreAnterior: {
            required: "Ingrese el número de materias retiradas del semestre anterior",
            number: "Ingrese solo números",
            min: "La cantidad debe de ser mayor a 0"
        },
        nombre: {
            required: "Ingrese el nombre del supervisor"
        },
        dependencia: {
            required: "Ingrese la dependencia"
        },
        relacion: {
            required: "Seleccione la relación"
        },
        permanecerSitio: {
            required: "Indique si desea permanecer en el sitio"
        }
    },
    invalidHandler: function (event, validator) { 
        $('.alert-error', $('.login-form')).show();
    },
    highlight: function (e) {
        $(e).closest('.form-group > section').removeClass('has-info').addClass('has-danger');
    },
    success: function (e) {
        $(e).closest('.form-group > section').removeClass('has-danger').addClass('has-success');
        $(e).remove();
    },
    errorPlacement: function (error, element) {
        error.insertAfter(element);
    },
    submitHandler: function (form) {
        var accion = '';
        var tipo = $("button.btn-primary").data('tipo');
        if($("button.btn-primary").attr('data') == 1)
            accion = 'registrada';
        else if($("button.btn-primary").attr('data') == 0)
            accion = 'actualizada';
        var alertMessage = 'Renovación de ayudantía '+tipo+' '+accion+' satisfactoriamente';
        var token = $("input[name=_token]").val();
        var formData = new FormData($("form.ayudantiaForm")[0]);
        $.ajax({
            url:  $("form.ayudantiaForm").attr('action'),
            type: $("form.ayudantiaForm").attr('method'),
            headers: {'X-CSRF-TOKEN' : token},
            data: new FormData($("form.ayudantiaForm")[0]),
            processData: false,
            contentType: false,
            beforeSend:function(){
                $("button.btn-primary").addClass('disabled');
                $("button#cancelar").addClass('disabled');
            },
            success:function(respuesta){
                var url = '/sicdeudo/dashboard/reporte/'+respuesta.idPeticion;
                swal({
                    title: '¡Registrado!',
                    text: alertMessage,
                    type: 'success',
                }, function () {
                    window.open(url, '_blank');
                });
                if($("button.btn-primary").attr('data') == 1)
                {
                    $('form.ayudantiaForm').reset();
                    $('.form-group').removeClass('has-success');
                }
                $("button.btn-primary").removeClass('disabled');
                $("button#cancelar").removeClass('disabled');
            }
        })
        return false;
    },
});

$("form#solicitudBRForm").validate({
    rules: {
        apellidosNombres: {
            required: true
        },
        cedula: {
            required: true,
            number: true
        },
        edad: {
            required: true,
            number:true,
            min:1
        },
        fechaNacimiento: {
            required: true
        },
        estadoCivil: {
            required: true
        },
        lugarNacimiento: {
            required: true
        },
        direccionPermanente: {
            required: true
        },
        direccionLocal: {
            required: true
        },
        telefonoCelular: {
            required: true
        },
        telefonoReferencia: {
            required: true
        },
        email: {
            required: true,
            email: true
        },
        especialidad: {
            required: true
        },
        escuela: {
            required: true
        },
        anioIngresoUdo: {
            required: true
        },
        anioIngresoPrograma: {
            required: true
        },
        semestreActual: {
            required: true
        },
        creditosSemestreAnterior: {
            required: true,
            number: true,
            min:0
        },
        creditosAprobadosCarrera: {
            required: true,
            number: true,
            min:0
        },
        promedioSemestreAnterior: {
            required: true,
            number: true,
            min:0
        },
        numeroMateriasInscritas: {
            required: true,
            number: true,
            min:0
        },
        numeroCreditosInscritos: {
            required: true,
            number: true,
            min:0
        },
        alquilaSolo: {
            required: true
        },
        observacionesResidencia: {
            required: true
        }
    },
    messages: {
        apellidosNombres: {
            required: "Ingrese el nombre y apellido"
        },
        cedula: {
            required: "Ingrese el número de céduka",
            number: "Ingrese solo números"
        },
        edad: {
            required: "Ingrese la edad",
            number:"Ingrese solo números",
            min: "El número mínimo permitido es 1"
        },
        fechaNacimiento: {
            required: "Ingrese la fecha de nacimiento"
        },
        estadoCivil: {
            required: "Seleccione el estado civil"
        },
        lugarNacimiento: {
            required: "Ingrese el lugar de nacimiento"
        },
        direccionPermanente: {
            required: "Ingrese la dirección permanente"
        },
        direccionLocal: {
            required: "Ingrese la dirección local"
        },
        telefonoCelular: {
            required: "Ingrese el teléfono celular"
        },
        telefonoReferencia: {
            required: "Ingrese el teléfono de referencia"
        },
        email: {
            required: "Ingrese el email",
            email: "Ingrese un formato de email correcto"
        },
        especialidad: {
            required: "Seleccione la especialidad"
        },
        escuela: {
            required: "Seleccione la escuela"
        },
        anioIngresoUdo: {
            required: "Seleccione el año de ingreso a la UDO"
        },
        anioIngresoPrograma: {
            required: "Seleccione el año de ingreso al programa"
        },
        semestreActual: {
            required: "Seleccione el semestre actual cursado"
        },
        creditosSemestreAnterior: {
            required: "Ingrese los créditos del semestre anterior",
            number: "Ingrese solo números",
            min: "La cantidad debe de ser mayor a 0"
        },
        creditosAprobadosCarrera: {
            required: "Ingrese los créditos aprobados en la carrera",
            number: "Ingrese solo números",
            min: "La cantidad debe de ser mayor a 0"
        },
        promedioSemestreAnterior: {
            required: "Ingrese el promedio del semestre anterior cursado",
            number: "Ingrese solo números",
            min: "La cantidad debe de ser mayor a 0"
        },
        numeroMateriasInscritas: {
            required: "Ingrese el número actual de materias inscritas",
            number: "Ingrese solo números",
            min: "La cantidad debe de ser mayor a 0"
        },
        numeroCreditosInscritos: {
            required: "Ingrese el número actual de créditos inscritos",
            number: "Ingrese solo números",
            min: "La cantidad debe de ser mayor a 0"
        },
        alquilaSolo: {
            required: "Seleccione una opción"
        },
        observacionesResidencia: {
            required: "Ingrese las condiciones presentes de la residencia"
        }
    },
    invalidHandler: function (event, validator) { 
        $('.alert-error', $('.login-form')).show();
    },
    highlight: function (e) {
        $(e).closest('.form-group > section').removeClass('has-info').addClass('has-danger');
    },
    success: function (e) {
        $(e).closest('.form-group > section').removeClass('has-danger').addClass('has-success');
        $(e).remove();
    },
    errorPlacement: function (error, element) {
        error.insertAfter(element);
    },
    submitHandler: function (form) {
        var accion = '';
        if($("button#solicitudBRSubmit").attr('data') == 1)
            accion = 'registrada';
        else if($("button#solicitudBRSubmit").attr('data') == 0)
            accion = 'actualizada';
        var alertMessage = 'Solicitud de beca de residencia '+accion+' satisfactoriamente';
        var token = $("input[name=_token]").val();
        var formData = new FormData($("form#solicitudBRForm")[0]);
        $.ajax({
            url:  $("form#solicitudBRForm").attr('action'),
            type: $("form#solicitudBRForm").attr('method'),
            headers: {'X-CSRF-TOKEN' : token},
            data: new FormData($("form#solicitudBRForm")[0]),
            processData: false,
            contentType: false,
            beforeSend:function(){
                $("button#solicitudBRSubmit").addClass('disabled');
                $("button#cancelar").addClass('disabled');
            },
            success:function(respuesta){
                var url = '/sicdeudo/dashboard/reporte/'+respuesta.idPeticion;
                swal({
                    title: '¡Registrado!',
                    text: alertMessage,
                    type: 'success',
                }, function () {
                    window.open(url, '_blank');
                })
                if($("button#solicitudBRSubmit").attr('data') == 1)
                {
                    $('form#solicitudBRForm').reset();
                    $('.form-group').removeClass('has-success');
                }
                $("button#solicitudBRSubmit").removeClass('disabled');
                $("button#cancelar").removeClass('disabled');
            }
        })
        return false;
    },
});

$("form#renovacionBRForm").validate({
    rules: {
        apellidosNombres: {
            required: true
        },
        cedula: {
            required: true,
            number: true
        },
        edad: {
            required: true,
            number:true,
            min:1
        },
        estadoCivil: {
            required: true
        },
        estado: {
            required: true
        },
        direccionPermanente: {
            required: true
        },
        direccionLocal: {
            required: true
        },
        telefonoCelular: {
            required: true
        },
        telefonoReferencia: {
            required: true
        },
        email: {
            required: true,
            email: true
        },
        especialidad: {
            required: true
        },
        escuela: {
            required: true
        },
        anioIngresoUdo: {
            required: true
        },
        anioIngresoPrograma: {
            required: true
        },
        semestreActual: {
            required: true
        },
        promedioSemestreAnterior: {
            required: true,
            number: true,
            min:0
        },
        mismaResidencia: {
            required: true
        }
    },
    messages: {
        apellidosNombres: {
            required: "Ingrese el nombre y apellido"
        },
        cedula: {
            required: "Ingrese el número de céduka",
            number: "Ingrese solo números"
        },
        edad: {
            required: "Ingrese la edad",
            number:"Ingrese solo números",
            min: "El número mínimo permitido es 1"
        },
        estadoCivil: {
            required: "Seleccione el estado civil"
        },
        estado: {
            required: "Ingrese el estado"
        },
        direccionPermanente: {
            required: "Ingrese la dirección permanente"
        },
        direccionLocal: {
            required: "Ingrese la dirección local"
        },
        telefonoCelular: {
            required: "Ingrese el teléfono celular"
        },
        telefonoReferencia: {
            required: "Ingrese el teléfono de referencia"
        },
        email: {
            required: "Ingrese el email",
            email: "Ingrese un formato de email correcto"
        },
        especialidad: {
            required: "Seleccione la especialidad"
        },
        escuela: {
            required: "Seleccione la escuela"
        },
        anioIngresoUdo: {
            required: "Seleccione el año de ingreso a la UDO"
        },
        anioIngresoPrograma: {
            required: "Seleccione el año de ingreso al programa"
        },
        semestreActual: {
            required: "Seleccione el semestre actual cursado"
        },
        promedioSemestreAnterior: {
            required: "Ingrese el promedio del semestre anterior cursado",
            number: "Ingrese solo números",
            min: "La cantidad debe de ser mayor a 0"
        },
        mismaResidencia: {
            required: "Seleccione una opciñon"
        }
    },
    invalidHandler: function (event, validator) { 
        $('.alert-error', $('.login-form')).show();
    },
    highlight: function (e) {
        $(e).closest('.form-group > section').removeClass('has-info').addClass('has-danger');
    },
    success: function (e) {
        $(e).closest('.form-group > section').removeClass('has-danger').addClass('has-success');
        $(e).remove();
    },
    errorPlacement: function (error, element) {
        error.insertAfter(element);
    },
    submitHandler: function (form) {
        var accion = '';
        if($("button#renovacionBRSubmit").attr('data') == 1)
            accion = 'registrada';
        else if($("button#renovacionBRSubmit").attr('data') == 0)
            accion = 'actualizada';
        var alertMessage = 'Renovación de beca de residencia '+accion+' satisfactoriamente';
        var token = $("input[name=_token]").val();
        var formData = new FormData($("form#renovacionBRForm")[0]);
        $.ajax({
            url:  $("form#renovacionBRForm").attr('action'),
            type: $("form#renovacionBRForm").attr('method'),
            headers: {'X-CSRF-TOKEN' : token},
            data: new FormData($("form#renovacionBRForm")[0]),
            processData: false,
            contentType: false,
            beforeSend:function(){
                $("button#renovacionBRSubmit").addClass('disabled');
                $("button#cancelar").addClass('disabled');
            },
            success:function(respuesta){
                var url = '/sicdeudo/dashboard/reporte/'+respuesta.idPeticion;
                swal({
                    title: '¡Registrado!',
                    text: alertMessage,
                    type: 'success',
                }, function () {
                    window.open(url, '_blank');
                });
                if($("button#renovacionBRSubmit").attr('data') == 1)
                {
                    $('form#renovacionBRForm').reset();
                    $('.form-group').removeClass('has-success');
                }
                $("button#renovacionBRSubmit").removeClass('disabled');
                $("button#cancelar").removeClass('disabled');
            }
        })
        return false;
    },
});

$("form#solicitudCEForm").validate({
    rules: {
        fechaCita: {
            required: true
        }
    },
    messages: {
        fechaCita: {
            required: "Seleccione una fecha disponible"
        }
    },
    invalidHandler: function (event, validator) { 
        $('.alert-error', $('.login-form')).show();
    },
    highlight: function (e) {
        $(e).closest('.form-group > section').removeClass('has-info').addClass('has-danger');
    },
    success: function (e) {
        $(e).closest('.form-group > section').removeClass('has-danger').addClass('has-success');
        $(e).remove();
    },
    errorPlacement: function (error, element) {
        error.insertAfter(element);
    },
    submitHandler: function (form) {
        var accion = '';
        if($("button#solicitudCESubmit").attr('data') == 1)
            accion = 'registrada';
        else if($("button#solicitudCESubmit").attr('data') == 0)
            accion = 'actualizada';
        var alertMessage = 'Solicitud de cambio de especialidad '+accion+' satisfactoriamente';
        var token = $("input[name=_token]").val();
        var formData = new FormData($("form#solicitudCEForm")[0]);
        $.ajax({
            url:  $("form#solicitudCEForm").attr('action'),
            type: $("form#solicitudCEForm").attr('method'),
            headers: {'X-CSRF-TOKEN' : token},
            data: new FormData($("form#solicitudCEForm")[0]),
            processData: false,
            contentType: false,
            beforeSend:function(){
                $("button#solicitudCESubmit").addClass('disabled');
                $("button#cancelar").addClass('disabled');
            },
            success:function(respuesta){
                if(respuesta.existente == true){
                    swal({
                        title: '¡Error!',
                        text: 'Usted ya posee una cita registrada para el día "'+respuesta.fecha+'"',
                        type: 'error',
                    });
                }
                else{
                    var url = '/sicdeudo/dashboard/reporte-cita/'+respuesta.idPeticion;
                    swal({
                        title: '¡Registrado!',
                        text: alertMessage,
                        type: 'success',
                    }, function () {
                        window.open(url, '_blank');
                    });
                    if($("button#solicitudCESubmit").attr('data') == 1)
                    {
                        $('form#solicitudCEForm').reset();
                        $('.form-group').removeClass('has-success');
                    }
                }
                $("button#solicitudCESubmit").removeClass('disabled');
                $("button#cancelar").removeClass('disabled');
            }
        })
        return false;
    },
});

$('input#checkbox1, input#checkbox2, input#checkbox3, input#checkbox4, input#checkbox5, input#checkbox6, input#checkbox7, input#checkbox8, input#checkbox9, input#checkbox10, input#checkbox11').on('click', function(){
    if($('#checkbox1').is(':checked') && $('#checkbox2').is(':checked') && $('#checkbox3').is(':checked') && $('#checkbox4').is(':checked') && $('#checkbox5').is(':checked') && $('#checkbox6').is(':checked') && $('#checkbox7').is(':checked') && $('#checkbox8').is(':checked') && $('#checkbox9').is(':checked') && $('#checkbox10').is(':checked') && $('#checkbox11').is(':checked')){
        $('div#botones').css('display', 'flex');
    }
    else{
        $('div#botones').css('display', 'none');
    }
});

$("form.registrarRequisitos").validate({
    rules: {
        checkbox1: {
            required: true
        },
        checkbox2: {
            required: true
        },
        checkbox3: {
            required: true
        },
        checkbox4: {
            required: true
        },
        checkbox5: {
            required: true
        },
        checkbox6: {
            required: true
        },
        checkbox7: {
            required: true
        },
        checkbox8: {
            required: true
        },
        checkbox9: {
            required: true
        },
        checkbox10: {
            required: true
        },
        checkbox11: {
            required: true
        }
    },
    messages: {
        checkbox1: {
            required: "Verifique este documento"
        },
        checkbox2: {
            required: "Verifique este documento"
        },
        checkbox3: {
            required: "Verifique este documento"
        },
        checkbox4: {
            required: "Verifique este documento"
        },
        checkbox5: {
            required: "Verifique este documento"
        },
        checkbox6: {
            required: "Verifique este documento"
        },
        checkbox7: {
            required: "Verifique este documento"
        },
        checkbox8: {
            required: "Verifique este documento"
        },
        checkbox9: {
            required: "Verifique este documento"
        },
        checkbox10: {
            required: "Verifique este documento"
        },
        checkbox11: {
            required: "Verifique este documento"
        }
    },
    invalidHandler: function (event, validator) { 
        $('.alert-error', $('.login-form')).show();
    },
    highlight: function (e) {
        $(e).closest('.form-group > section').removeClass('has-info').addClass('has-danger');
    },
    success: function (e) {
        $(e).closest('.form-group > section').removeClass('has-danger').addClass('has-success');
        $(e).remove();
    },
    errorPlacement: function (error, element) {
        error.insertAfter(element);
    }
});

$('input#check1, input#check2, input#check3, input#check4').on('click', function(){
    if($('#check1').is(':checked') && $('#check2').is(':checked') && $('#check3').is(':checked') && $('#check4').is(':checked')){
        $('div#botones').css('display', 'flex');
    }
    else{
        $('div#botones').css('display', 'none');
    }
});

$("form.registrarRenovacion").validate({
    rules: {
        check1: {
            required: true
        },
        check2: {
            required: true
        },
        check3: {
            required: true
        },
        check4: {
            required: true
        }
    },
    messages: {
        check1: {
            required: "Verifique este documento"
        },
        check2: {
            required: "Verifique este documento"
        },
        check3: {
            required: "Verifique este documento"
        },
        check4: {
            required: "Verifique este documento"
        }
    },
    invalidHandler: function (event, validator) { 
        $('.alert-error', $('.login-form')).show();
    },
    highlight: function (e) {
        $(e).closest('.form-group > section').removeClass('has-info').addClass('has-danger');
    },
    success: function (e) {
        $(e).closest('.form-group > section').removeClass('has-danger').addClass('has-success');
        $(e).remove();
    },
    errorPlacement: function (error, element) {
        error.insertAfter(element);
    }
});

$('input#chk1, input#chk2, input#chk3, input#chk4, input#chk5, input#chk6, input#chk7').on('click', function(){
    if($('#chk1').is(':checked') && $('#chk2').is(':checked') && $('#chk3').is(':checked') && $('#chk4').is(':checked') && $('#chk5').is(':checked') && $('#chk6').is(':checked') && $('#chk7').is(':checked')){
        $('div#botones').css('display', 'flex');
    }
    else{
        $('div#botones').css('display', 'none');
    }
});

$("form#redSocialForm").validate({
    rules: {
        url: {
            required: true,
            url: true
        }
    },
    messages: {
        url: {
            required: "Ingrese una url o dirección",
            url: "Ingrese una url válida"
        }
    },
    invalidHandler: function (event, validator) { 
        $('.alert-error', $('.login-form')).show();
    },
    highlight: function (e) {
        $(e).closest('.form-group > section').removeClass('has-info').addClass('has-danger');
    },
    success: function (e) {
        $(e).closest('.form-group > section').removeClass('has-danger').addClass('has-success');
        $(e).remove();
    },
    errorPlacement: function (error, element) {
        error.insertAfter(element);
    },
    submitHandler: function (form) {
        var accion = '';
        if($("button#redSocialSubmit").attr('data') == 1)
            accion = 'registrada';
        else if($("button#redSocialSubmit").attr('data') == 0)
            accion = 'actualizada';
        var alertMessage = 'Red social '+accion+' satisfactoriamente';
        var token = $("input[name=_token]").val();
        var formData = new FormData($("form#redSocialForm")[0]);
        $.ajax({
            url:  $("form#redSocialForm").attr('action'),
            type: $("form#redSocialForm").attr('method'),
            headers: {'X-CSRF-TOKEN' : token},
            data: new FormData($("form#redSocialForm")[0]),
            processData: false,
            contentType: false,
            beforeSend:function(){
                $("button#redSocialSubmit").addClass('disabled');
                $("button#cancelar").addClass('disabled');
            },
            success:function(respuesta){
                swal("¡Registrado!", alertMessage, "success");
                if($("button#redSocialSubmit").attr('data') == 1) {
                    $('form#redSocialForm').reset();
                    $('.form-group').removeClass('has-success');
                }
                $("button#redSocialSubmit").removeClass('disabled');
                $("button#cancelar").removeClass('disabled');
            }
        })
        return false;
    },
});

$("form#enlaceInteresForm").validate({
    rules: {
        nombre: {
            required: true
        }, 
        file: {
            required: true
        }, 
        url: {
            required: true,
            url: true
        }
    },
    messages: {
        nombre: {
            required: "Ingrese un nombre"
        }, 
        file: {
            required: "Ingrese una imagen"
        },
        url: {
            required: "Ingrese una url o dirección",
            url: "Ingrese una url válida"
        }
    },
    invalidHandler: function (event, validator) { 
        $('.alert-error', $('.login-form')).show();
    },
    highlight: function (e) {
        $(e).closest('.form-group > section').removeClass('has-info').addClass('has-danger');
    },
    success: function (e) {
        $(e).closest('.form-group > section').removeClass('has-danger').addClass('has-success');
        $(e).remove();
    },
    errorPlacement: function (error, element) {
        error.insertAfter(element);
    },
    submitHandler: function (form) {
        var accion = '';
        if($("button#enlaceInteresSubmit").attr('data') == 1)
            accion = 'registrado';
        else if($("button#enlaceInteresSubmit").attr('data') == 0)
            accion = 'actualizado';
        var alertMessage = 'Enlace de interés '+accion+' satisfactoriamente';
        var token = $("input[name=_token]").val();
        var formData = new FormData($("form#enlaceInteresForm")[0]);
        $.ajax({
            url:  $("form#enlaceInteresForm").attr('action'),
            type: $("form#enlaceInteresForm").attr('method'),
            headers: {'X-CSRF-TOKEN' : token},
            data: new FormData($("form#enlaceInteresForm")[0]),
            processData: false,
            contentType: false,
            beforeSend:function(){
                $("button#enlaceInteresSubmit").addClass('disabled');
                $("button#cancelar").addClass('disabled');
            },
            success:function(respuesta){
                swal("¡Registrado!", alertMessage, "success");
                if($("button#enlaceInteresSubmit").attr('data') == 1) {
                    $('form#enlaceInteresForm').reset();
                    $('.form-group').removeClass('has-success');
                }
                $("button#enlaceInteresSubmit").removeClass('disabled');
                $("button#cancelar").removeClass('disabled');
            }
        })
        return false;
    },
});

$("form#enlaceInteresEditForm").validate({
    rules: {
        nombre: {
            required: true
        },  
        url: {
            required: true,
            url: true
        }
    },
    messages: {
        nombre: {
            required: "Ingrese un nombre"
        }, 
        url: {
            required: "Ingrese una url o dirección",
            url: "Ingrese una url válida"
        }
    },
    invalidHandler: function (event, validator) { 
        $('.alert-error', $('.login-form')).show();
    },
    highlight: function (e) {
        $(e).closest('.form-group > section').removeClass('has-info').addClass('has-danger');
    },
    success: function (e) {
        $(e).closest('.form-group > section').removeClass('has-danger').addClass('has-success');
        $(e).remove();
    },
    errorPlacement: function (error, element) {
        error.insertAfter(element);
    },
    submitHandler: function (form) {
        var accion = '';
        if($("button#enlaceInteresSubmit").attr('data') == 1)
            accion = 'registrado';
        else if($("button#enlaceInteresSubmit").attr('data') == 0)
            accion = 'actualizado';
        var alertMessage = 'Enlace de interés '+accion+' satisfactoriamente';
        var token = $("input[name=_token]").val();
        var formData = new FormData($("form#enlaceInteresEditForm")[0]);
        $.ajax({
            url:  $("form#enlaceInteresEditForm").attr('action'),
            type: $("form#enlaceInteresEditForm").attr('method'),
            headers: {'X-CSRF-TOKEN' : token},
            data: new FormData($("form#enlaceInteresEditForm")[0]),
            processData: false,
            contentType: false,
            beforeSend:function(){
                $("button#enlaceInteresSubmit").addClass('disabled');
                $("button#cancelar").addClass('disabled');
            },
            success:function(respuesta){
                swal("¡Registrado!", alertMessage, "success");
                if($("button#enlaceInteresSubmit").attr('data') == 1) {
                    $('form#enlaceInteresEditForm').reset();
                    $('.form-group').removeClass('has-success');
                }
                if(respuesta.nuevoContenido.path != "") {
                    var ruta = $("#fotoActual").data("folder");
                    $("#fotoActual").attr("src", ruta+"/"+respuesta.nuevoContenido.path);
                }
                $("button#enlaceInteresSubmit").removeClass('disabled');
                $("button#cancelar").removeClass('disabled');
            }
        })
        return false;
    },
});

$("form#usuarioForm").validate({
    rules: {
        name: {
            required: true
        },
        email: {
            required: true,
            email: true
        },
        username: {
            required: true
        },
        password: {
            required: true
        },
        password_confirmation: {
            required: true,
            equalTo: "#password"
        },
        rol: {
            required: true
        },
        cedula: {
            required: true
        }
    },
    messages: {
        name: {
            required: 'Ingrese nombre y apellido'
        },
        username: {
            required: 'Ingrese un nombre de usuario'
        },
        email: {
            required: 'Ingrese un email',
            email: 'Ingrese un email válido'
        },
        password: {
            required: 'Ingrese una contraseña'
        },
        password_confirmation: {
            required: 'Repita la contraseña',
            equalTo: 'Las contraseñas deben de ser iguales'
        },
        rol: {
            required: 'Seleccione un rol'
        },
        cedula: {
            required: 'Ingrese un número de cédula'
        }
    },
    invalidHandler: function (event, validator) { 
        $('.alert-error', $('.login-form')).show();
    },
    highlight: function (e) {
        $(e).closest('.form-group > section').removeClass('has-info').addClass('has-danger');
    },
    success: function (e) {
        $(e).closest('.form-group > section').removeClass('has-danger').addClass('has-success');
        $(e).remove();
    },
    errorPlacement: function (error, element) {
        error.insertAfter(element);
    },
    submitHandler: function () {
        var accion = '';
        if($("button#usuarioSubmit").attr('data') == 1)
            accion = 'agregado';
        else if($("button#usuarioSubmit").attr('data') == 0)
            accion = 'actualizado';
        var alertMessage = 'Usuario '+accion+' satisfactoriamente';
        var token = $("input[name=_token]").val();
        var formData = new FormData($("form#usuarioForm")[0]);
        $.ajax({
            url:  $("form#usuarioForm").attr('action'),
            type: $("form#usuarioForm").attr('method'),
            headers: {'X-CSRF-TOKEN' : token},
            data: formData,
            processData: false,
            contentType: false,
            beforeSend:function(){
                $("button#usuarioSubmit").addClass('disabled');
                $("button#cancelar").addClass('disabled');
            },
            success:function(respuesta){
                swal("¡Registrado!", alertMessage, "success");
                if($("button#usuarioSubmit").attr('data') == 1)
                {
                    $('form#usuarioForm').reset();
                    $('.form-group').removeClass('has-success');
                }
                $("button#usuarioSubmit").removeClass('disabled');
                $("button#cancelar").removeClass('disabled');
            }
        })
        return false;
    }
});
$("form#usuarioEditarForm").validate({
    rules: {
        name: {
            required: true
        },
        email: {
            required: true,
            email: true
        },
        username: {
            required: true
        },
        password: {
            required: false
        },
        password_confirmation: {
            required: false,
            equalTo: "#password"
        },
        rol: {
            required: true
        },
        cedula: {
            required:true
        }
    },
    messages: {
        name: {
            required: 'Ingrese nombre y apellido'
        },
        username: {
            required: 'Ingrese un nombre de usuario'
        },
        email: {
            required: 'Ingrese un email',
            email: 'Ingrese un email válido'
        },
        password: {
            required: 'Ingrese una contraseña'
        },
        password_confirmation: {
            required: 'Repita la contraseña',
            equalTo: 'Las contraseñas deben de ser iguales'
        },
        rol: {
            required: 'Seleccione un rol'
        },
        cedula:{
            required: 'Ingrese un número de cédula'
        }
    },
    invalidHandler: function (event, validator) { 
        $('.alert-error', $('.login-form')).show();
    },
    highlight: function (e) {
        $(e).closest('.form-group > section').removeClass('has-info').addClass('has-danger');
    },
    success: function (e) {
        $(e).closest('.form-group > section').removeClass('has-danger').addClass('has-success');
        $(e).remove();
    },
    errorPlacement: function (error, element) {
        error.insertAfter(element);
    },
    submitHandler: function () {
        var accion = '';
        if($("button#usuarioEditarSubmit").attr('data') == 1)
            accion = 'agregado';
        else if($("button#usuarioEditarSubmit").attr('data') == 0)
            accion = 'actualizado';
        var alertMessage = 'Usuario '+accion+' satisfactoriamente';
        var token = $("input[name=_token]").val();
        var formData = new FormData($("form#usuarioEditarForm")[0]);
        $.ajax({
            url:  $("form#usuarioEditarForm").attr('action'),
            type: $("form#usuarioEditarForm").attr('method'),
            headers: {'X-CSRF-TOKEN' : token},
            data: formData,
            processData: false,
            contentType: false,
            beforeSend:function(){
                $("button#usuarioEditarSubmit").addClass('disabled');
                $("button#cancelar").addClass('disabled');
            },
            success:function(respuesta){
                swal("¡Registrado!", alertMessage, "success");
                if($("button#usuarioEditarSubmit").attr('data') == 1)
                {
                    $('form#usuarioEditarForm').reset();
                    $('.form-group').removeClass('has-success');
                }
                $("button#usuarioEditarSubmit").removeClass('disabled');
                $("button#cancelar").removeClass('disabled');
            }
        })
        return false;
    }
});

$('form#datosEstudiante').on('submit', function(e){
    e.preventDefault();
});

$("form#cambioStatusForm").validate({
    rules: {
        status: {
            required: true
        }
    },
    messages: {
        status: {
            required: "Seleccione un status"
        }
    },
    invalidHandler: function (event, validator) { 
        $('.alert-error', $('.login-form')).show();
    },
    highlight: function (e) {
        $(e).closest('.form-group > section').removeClass('has-info').addClass('has-danger');
    },
    success: function (e) {
        $(e).closest('.form-group > section').removeClass('has-danger').addClass('has-success');
        $(e).remove();
    },
    errorPlacement: function (error, element) {
        error.insertAfter(element);
    },
    submitHandler: function (form) {
        var accion = '';
        if($("button#cambioStatusSubmit").attr('data') == 1)
            accion = 'registrado';
        else if($("button#cambioStatusSubmit").attr('data') == 0)
            accion = 'actualizado';
        var alertMessage = 'Status '+accion+' satisfactoriamente';
        var token = $("input[name=_token]").val();
        var formData = new FormData($("form#cambioStatusForm")[0]);
        $.ajax({
            url:  $("form#cambioStatusForm").attr('action'),
            type: $("form#cambioStatusForm").attr('method'),
            headers: {'X-CSRF-TOKEN' : token},
            data: new FormData($("form#cambioStatusForm")[0]),
            processData: false,
            contentType: false,
            beforeSend:function(){
                $("button#cambioStatusSubmit").addClass('disabled');
                $("button#cancelar").addClass('disabled');
            },
            success:function(respuesta){
                swal("¡Registrado!", alertMessage, "success");
                if($("button#cambioStatusSubmit").attr('data') == 1)
                {
                    $('form#cambioStatusForm').reset();
                    $('.form-group').removeClass('has-success');
                }
                $("button#cambioStatusSubmit").removeClass('disabled');
                $("button#cancelar").removeClass('disabled');
            }
        })
        return false;
    },
});

$("#reporteForm").on('submit', function(e){
    var accion = '';
    var cargando = '<img src="images/loader.gif" />';
    var token = $("input[name=_token]").val();
    var formData = new FormData($("form#reporteForm")[0]);
    $.ajax({
        url:  $("form#reporteForm").attr('action'),
        type: $("form#reporteForm").attr('method'),
        headers: {'X-CSRF-TOKEN' : token},
        data: formData,
        processData: false,
        contentType: false,
        beforeSend:function(){
            $('div#respuesta').html(cargando);
            $('div#resultados').html(cargando);
            $('.btn-primary').attr('disabled', true);
        },
        success:function(respuesta){
            if(respuesta.cantidad == 0)
            {
                var alertMessage = '<div class="callout callout-danger" style="display: none">';
                alertMessage += '<h4><i class="icon fa fa-ban"></i> No se han encontrado resultados.</h4>';
                alertMessage += '</div>';
                $('div#respuesta').html(alertMessage);
                $('.callout').fadeIn();
                $('.btn-primary').attr('disabled', false);
                $('.callout').fadeOut(10000);
                $("#resultados").empty();
            }
            else if(respuesta.cantidad > 0)
            {
                var contenido = '<div class="box">';
                contenido += '<div class="box-success">';
                contenido += '<table id="example1" class="table table-bordered table-striped">';
                contenido += '<thead>';
                contenido += '<tr>';
                contenido += '<th>Técnico</th>';
                contenido += '<th>Tipo de equipo</th>';
                contenido += '<th>Fecha de ingreso</th>';
                contenido += '<th>Estado</th>';
                contenido += '<th>Acciones</th>';
                contenido += '</tr>';
                contenido += '</thead>';
                contenido += '<tbody>';
                $.each(respuesta.datos , function(i, val){
                    

                    contenido += '<tr>';
                    contenido += '<td>'+val.nombre_tecnico.nombre+'</td>';
                    contenido += '<td>'+val.tipo+'</td>';
                    contenido += '<td>'+val.fecha_ingreso+'</td>';
                    contenido += '<td>'+val.status+'</td>';
                    contenido += '<td>';
                    contenido += '<a href="http://'+window.location.host+'/provendos/public/equipos/'+val.id+'" data-rel="tooltip" title="Mostrar '+val.modelo+'" objeto="'+val.modelo+'">'; 
                    contenido += '<span class="btn btn-sm btn-info"> <i class="glyphicon glyphicon-eye-open"></i> </span> ';
                    contenido += '</a>';
                    contenido += '&nbsp;';
                    contenido += '<a href="http://'+window.location.host+'/provendos/public/equipos/'+val.id+'/edit" class="tooltip-success editar" data-rel="tooltip" title="Editar '+val.modelo+'" objeto="'+val.modelo+'" style="text-decoration:none;"> ';
                    contenido += '<span class="btn btn-sm btn-warning"> <i class="glyphicon glyphicon-pencil"></i> </span> ';
                    contenido += '</a>';
                    contenido += '&nbsp;';
                    contenido += '<a href="http://'+window.location.host+'/provendos/public/reporte/'+val.id+'" data-id="'+val.id+'" class="tooltip-imprimir" data-rel="tooltip" title="Ver reporte de '+val.modelo+'" objeto="'+val.id+'" target="_blank"> ';
                    contenido += '<span class="btn btn-sm btn-success"> <i class="glyphicon glyphicon-file"></i> </span> ';
                    contenido += '</a>';
                    contenido += '&nbsp;';
                    contenido += '<a href="#" data-id="'+val.id+'" class="tooltip-error borrar" data-rel="tooltip" title="Eliminar '+val.modelo+'" objeto="'+val.id+'"> ';
                    contenido += '<span class="btn btn-sm btn-danger"> <i class="glyphicon glyphicon-trash"></i> </span> ';
                    contenido += '</a>';
                    contenido += '</td>';
                    contenido += '</tr>';
                });
                contenido += '</tbody>';
                contenido += '</table>';
                contenido += '<form method="POST" action="http://'+window.location.host+'/provendos/public/equipos/USER_ID" accept-charset="UTF-8" role="form" id="form-delete"><input name="_method" type="hidden" value="DELETE">';
                contenido += '<input name="_token" type="hidden" value="'+token+'">';
                contenido += '</form>';
                contenido += '</div>';
                contenido += '</div>';
                $('#resultados').html(contenido);
                $('div#respuesta').empty();

                $("#example1").DataTable({
                    "language": {
                        "lengthMenu": "Mostrar _MENU_ resultados por página",
                        "zeroRecords": "Sin resultados",
                        "info": "Mostrando página _PAGE_ de _PAGES_",
                        "infoEmpty": "Sin ninguna información",
                        "infoFiltered": "(Filtrado de _MAX_ resultados totales)",
                        "search":         "Buscar:",
                        "paginate": {
                            "first":      "Primero",
                            "last":       "Último",
                            "next":       "Siguiente",
                            "previous":   "Anterior"
                        },
                    }
                });

                if ($('.tooltip-error').length)
                {
                   $('.tooltip-error').click(function (e) {
                        e.preventDefault();
                        var message = "¿Está realmente seguro(a) de eliminar este equipo?";
                        var id = $(this).data('id');
                        var form = $('#form-delete');
                        var action = form.attr('action').replace('USER_ID', id);
                        var row =  $(this).parents('tr');

                        if(confirm(message))
                        {
                            row.fadeOut(1000);
                            $.post(action, form.serialize(), function(result) {
                                if (result.success) {
                                    setTimeout (function () {
                                        row.delay(1000).remove();
                                        var alertMessage = mensaje(result.msg);
                                        $('#respuesta').html(alertMessage);
                                        $('.callout-success').fadeIn();
                                        $('.callout-success').fadeOut(10000);
                                    }, 1000);                
                                } 
                                else 
                                {
                                    row.show();
                                }
                            }, 'json');
                        } 
                   });
                }
            }
        }
    })
    .fail(function(jqXHR, textStatus, errorThrown) {
        if (jqXHR.status === 0) {
            var alertMessageError = '<div class="callout callout-danger" style="display: block">';
            alertMessageError += '<h4><i class="icon fa fa-ban"></i> ¡Error!</h4>';
            alertMessageError += '<p>No se encuentra conectado con el servidor. Por favor verifique su conexión.</p>';
            alertMessageError += '</div>';
            $('div#respuesta').html(alertMessageError);
            $('.callout').fadeIn();
            $('.btn-primary').attr('disabled', false);
            $('.callout').fadeOut(10000);
        } 
        else if (jqXHR.status == 500) {
            var alertMessageError = '<div class="callout callout-danger" style="display: block">';
            alertMessageError += '<h4><i class="icon fa fa-ban"></i> ¡Error!</h4>';
            alertMessageError += '<p>Hubo un error al realizar búsqueda.</p>';
            alertMessageError += '</div>';
            $('div#respuesta').html(alertMessageError);
            $('.callout').fadeIn();
            $('.btn-primary').attr('disabled', false);
            $('.callout').fadeOut(10000);
        }
        else if (textStatus === 'timeout') {
            var alertMessageError = '<div class="callout callout-danger" style="display: block">';
            alertMessageError += '<h4><i class="icon fa fa-ban"></i> ¡Error!</h4>';
            alertMessageError += '<p>Tiempo de espera agotado para este procedimiento.</p>';
            alertMessageError += '</div>';
            $('div#respuesta').html(alertMessageError);
            $('.callout').fadeIn();
            $('.btn-primary').attr('disabled', false);
            $('.callout').fadeOut(10000);
        } 
        else if (textStatus === 'abort') {
            var alertMessageError = '<div class="callout callout-danger" style="display: block">';
            alertMessageError += '<h4><i class="icon fa fa-ban"></i> ¡Error!</h4>';
            alertMessageError += '<p>Usted ha abortado la operación.</p>';
            alertMessageError += '</div>';
            $('div#respuesta').html(alertMessageError);
            $('.callout').fadeIn();
            $('.btn-primary').attr('disabled', false);
            $('.callout').fadeOut(10000);
        } 
        else {
            var alertMessageError = '<div class="callout callout-danger" style="display: none">';
            alertMessageError += '<h4><i class="icon fa fa-ban"></i> ¡Error!</h4>';
            alertMessageError += '<p>Error desconocido: ' + jqXHR.responseText+'</p>';
            alertMessageError += '</div>';
            $('div#respuesta').html(alertMessageError);
            $('.callout').fadeIn();
            $('.btn-primary').attr('disabled', false);
            $('.callout').fadeOut(10000);
        }
    });
    return false;
});

var tablaData = $('#datatableConsulta').DataTable({
    "language": {
        "lengthMenu": "Mostrar _MENU_ resultados por página",
        "zeroRecords": "Sin resultados",
        "info": "Mostrando página _PAGE_ de _PAGES_",
        "infoEmpty": "Sin ninguna información",
        "infoFiltered": "(Filtrado de _MAX_ resultados totales)",
        "search":         "Buscar:",
        "paginate": {
            "first":      "Primero",
            "last":       "Último",
            "next":       "Siguiente",
            "previous":   "Anterior"
        },
    }
});

$("button#criterioConsultar").on('click', function(e){
    var valorPeticion = $("select#peticion").val() != "" ? $("select#peticion").val() : "0";
    var valorAnioIngresoUdo = $("select#anioIngresoUdo").val() != "" ? $("select#anioIngresoUdo").val() : "0";
    var url = $("#direccionConsulta").val();
    var contenido = "";
    $("#reporteConsulta").attr("data-criterio", valorPeticion);
    $("#reporteConsulta").attr("data-periodo", valorAnioIngresoUdo);

    $.ajax({
        url: url+"/"+valorPeticion+"/"+valorAnioIngresoUdo,
        type: "GET",
        success: function(respuesta){
            var contadorAprobados = 0;
            var contadorRechazados = 0;
            var contadorPendientes = 0;
            tablaData.clear().draw();
            respuesta.respuesta.forEach(function(element) {
                if(element.semestreActual == 'primero') { var semestre = '1er Semestre'; }
                else if(element.semestreActual == 'segundo') { var semestre = '2do Semestre'; }
                else if(element.semestreActual == 'tercero') { var semestre = '3ro Semestre'; }
                else if(element.semestreActual == 'cuarto') { var semestre = '4to Semestre'; }
                else if(element.semestreActual == 'quinto') { var semestre = '5to Semestre'; }
                else if(element.semestreActual == 'sexto') { var semestre = '6to Semestre'; }
                else if(element.semestreActual == 'septimo') { var semestre = '7mo Semestre'; }
                else if(element.semestreActual == 'octavo') { var semestre = '8vo Semestre'; }
                else if(element.semestreActual == 'noveno') { var semestre = '9no Semestre'; }
                else if(element.semestreActual == 'decimo') { var semestre = '10mo Semestre'; }

                if(element.especialidad == 'administracion' ) { var carrera = 'Administración de Empresas'; }
                else if(element.especialidad == 'contaduria' ) { var carrera = 'Contaduría Pública'; }
                else if(element.especialidad == 'gerencia' ) { var carrera = 'Gerencia de Recursos Humanos'; }
                else if(element.especialidad == 'agronomia' ) { var carrera = 'Ingeniería Agronómica'; }
                else if(element.especialidad == 'petroleo' ) { var carrera = 'Ingeniería de Petróleo'; }
                else if(element.especialidad == 'sistemas' ) { var carrera = 'Ingeniería de Sistemas'; }
                else if(element.especialidad == 'produccionAnimal' ) { var carrera = 'Ingeniería en Producción Animal'; }
                else if(element.especialidad == 'tecnologiaAlimentos' ) { var carrera = 'Tecnología de los Alimentos'; }

                if(element.status == "Aprobado") { contadorAprobados++; }
                else if(element.status == "Rechazado") { contadorRechazados++; }
                else { contadorPendientes++; }

                tablaData.row.add([
                    element.cedula, 
                    element.apellidosNombres, 
                    semestre, 
                    carrera, 
                    element.status
                ]).draw();
            });
            $("#morris-donut-example").empty();
            !function($) {
                "use strict";
                var Dashboard = function() {};

                Dashboard.prototype.createDonutChart = function(element, data, colors) {
                    Morris.Donut({
                        element: element,
                        data: data,
                        resize: true,
                        colors: colors
                    });
                },

                Dashboard.prototype.init = function() {
                    var $donutData = [
                    {label: "Aprobados", value: contadorAprobados},
                    {label: "Rechazados", value: contadorRechazados},
                    {label: "Pendientes", value: contadorPendientes}
                    ];
                    this.createDonutChart('morris-donut-example', $donutData, ['#1bb99a','#ff0000', '#3db9dc']);
                },
                $.Dashboard = new Dashboard, $.Dashboard.Constructor = Dashboard
            }(window.jQuery),

            function($) {
                "use strict";
                $.Dashboard.init();
            }(window.jQuery);
        }
    });
});

$("button#criterioConsultarCita").on('click', function(e){
    var valorAnioIngresoUdo = $("select#anioIngresoUdo").val() != "" ? $("select#anioIngresoUdo").val() : "0";
    var url = $("#direccionConsultaCita").val();
    var contenido = "";
    $("#reporteConsultaCita").attr("data-periodo", valorAnioIngresoUdo);
    $.ajax({
        url: url+"/"+valorAnioIngresoUdo,
        type: "GET",
        success: function(respuesta){
            var contadorAprobados = 0;
            var contadorRechazados = 0;
            var contadorPendientes = 0;
            tablaData.clear().draw();
            respuesta.respuesta.forEach(function(element) {
                if(element.status == "Aprobado") { contadorAprobados++; }
                else if(element.status == "Rechazado") { contadorRechazados++; }
                else { contadorPendientes++; }

                tablaData.row.add([
                    element.cedula, 
                    element.name, 
                    element.status
                ]).draw();
            });
            $("#morris-donut-example").empty();
            !function($) {
                "use strict";
                var Dashboard = function() {};

                Dashboard.prototype.createDonutChart = function(element, data, colors) {
                    Morris.Donut({
                        element: element,
                        data: data,
                        resize: true,
                        colors: colors
                    });
                },

                Dashboard.prototype.init = function() {
                    var $donutData = [
                    {label: "Aprobados", value: contadorAprobados},
                    {label: "Rechazados", value: contadorRechazados},
                    {label: "Pendientes", value: contadorPendientes}
                    ];
                    this.createDonutChart('morris-donut-example', $donutData, ['#1bb99a','#ff0000', '#3db9dc']);
                },
                $.Dashboard = new Dashboard, $.Dashboard.Constructor = Dashboard
            }(window.jQuery),

            function($) {
                "use strict";
                $.Dashboard.init();
            }(window.jQuery);
        }
    });
});

$("#reporteConsulta").on('click', function(){
    if($(this).data("criterio") == "-" && $(this).data("periodo") == "-"){
        alert("Debe realizar una consulta primero");
    }
    else {
        var url = $(this).data("href")+"/"+$(this).data("criterio")+"/"+$(this).data("periodo");
        window.open(url, '');
    }
});

$("#reporteConsultaCita").on('click', function(){
    if($(this).data("periodo") == "-"){
        alert("Debe realizar una consulta primero");
    }
    else {
        var url = $(this).data("href")+"/"+$(this).data("periodo");
        window.open(url, '');
    }
});