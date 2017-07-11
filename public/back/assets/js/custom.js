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
                    window.location = 'http://'+window.location.host+"/sicdeudo/public/dashboard";
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

$("form#solicitudAOForm").validate({
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
        if($("button#solicitudAOSubmit").attr('data') == 1)
            accion = 'registrada';
        else if($("button#solicitudAOSubmit").attr('data') == 0)
            accion = 'actualizada';
        var alertMessage = 'Solicitud de ayudantía ordinaria '+accion+' satisfactoriamente';
        var token = $("input[name=_token]").val();
        var formData = new FormData($("form#solicitudAOForm")[0]);
        $.ajax({
            url:  $("form#solicitudAOForm").attr('action'),
            type: $("form#solicitudAOForm").attr('method'),
            headers: {'X-CSRF-TOKEN' : token},
            data: new FormData($("form#solicitudAOForm")[0]),
            processData: false,
            contentType: false,
            beforeSend:function(){
                $("button#solicitudAOSubmit").addClass('disabled');
                $("button#cancelar").addClass('disabled');
            },
            success:function(respuesta){
                swal("¡Registrado!", alertMessage, "success");
                $('.callout-success').fadeIn();
                if($("button#solicitudAOSubmit").attr('data') == 1)
                {
                    $('form#solicitudAOForm').reset();
                    $('.form-group').removeClass('has-success');
                }
                $("button#solicitudAOSubmit").removeClass('disabled');
                $("button#cancelar").removeClass('disabled');
                $('.callout-success').fadeOut(10000);
            }
        })
        return false;
    },
});

$("form#renovacionAOForm").validate({
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
        if($("button#renovacionAOSubmit").attr('data') == 1)
            accion = 'registrada';
        else if($("button#renovacionAOSubmit").attr('data') == 0)
            accion = 'actualizada';
        var alertMessage = 'Renovación de ayudantía ordinaria '+accion+' satisfactoriamente';
        var token = $("input[name=_token]").val();
        var formData = new FormData($("form#solicitudAOForm")[0]);
        $.ajax({
            url:  $("form#renovacionAOForm").attr('action'),
            type: $("form#renovacionAOForm").attr('method'),
            headers: {'X-CSRF-TOKEN' : token},
            data: new FormData($("form#renovacionAOForm")[0]),
            processData: false,
            contentType: false,
            beforeSend:function(){
                $("button#renovacionAOSubmit").addClass('disabled');
                $("button#cancelar").addClass('disabled');
            },
            success:function(respuesta){
                swal("¡Registrado!", alertMessage, "success");
                $('.callout-success').fadeIn();
                if($("button#renovacionAOSubmit").attr('data') == 1)
                {
                    $('form#renovacionAOForm').reset();
                    $('.form-group').removeClass('has-success');
                }
                $("button#renovacionAOSubmit").removeClass('disabled');
                $("button#cancelar").removeClass('disabled');
                $('.callout-success').fadeOut(10000);
            }
        })
        return false;
    },
});

$("form#solicitudATForm").validate({
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
        if($("button#solicitudATSubmit").attr('data') == 1)
            accion = 'registrada';
        else if($("button#solicitudATSubmit").attr('data') == 0)
            accion = 'actualizada';
        var alertMessage = 'Solicitud de ayudantía técnica '+accion+' satisfactoriamente';
        var token = $("input[name=_token]").val();
        var formData = new FormData($("form#solicitudATForm")[0]);
        $.ajax({
            url:  $("form#solicitudATForm").attr('action'),
            type: $("form#solicitudATForm").attr('method'),
            headers: {'X-CSRF-TOKEN' : token},
            data: new FormData($("form#solicitudATForm")[0]),
            processData: false,
            contentType: false,
            beforeSend:function(){
                $("button#solicitudATSubmit").addClass('disabled');
                $("button#cancelar").addClass('disabled');
            },
            success:function(respuesta){
                swal("¡Registrado!", alertMessage, "success");
                $('.callout-success').fadeIn();
                if($("button#solicitudATSubmit").attr('data') == 1)
                {
                    $('form#solicitudATForm').reset();
                    $('.form-group').removeClass('has-success');
                }
                $("button#solicitudATSubmit").removeClass('disabled');
                $("button#cancelar").removeClass('disabled');
                $('.callout-success').fadeOut(10000);
            }
        })
        return false;
    },
});

$("form#renovacionATForm").validate({
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
        if($("button#renovacionATSubmit").attr('data') == 1)
            accion = 'registrada';
        else if($("button#renovacionATSubmit").attr('data') == 0)
            accion = 'actualizada';
        var alertMessage = 'Renovación de ayudantía ordinaria '+accion+' satisfactoriamente';
        var token = $("input[name=_token]").val();
        var formData = new FormData($("form#solicitudAOForm")[0]);
        $.ajax({
            url:  $("form#renovacionATForm").attr('action'),
            type: $("form#renovacionATForm").attr('method'),
            headers: {'X-CSRF-TOKEN' : token},
            data: new FormData($("form#renovacionATForm")[0]),
            processData: false,
            contentType: false,
            beforeSend:function(){
                $("button#renovacionATSubmit").addClass('disabled');
                $("button#cancelar").addClass('disabled');
            },
            success:function(respuesta){
                swal("¡Registrado!", alertMessage, "success");
                $('.callout-success').fadeIn();
                if($("button#renovacionATSubmit").attr('data') == 1)
                {
                    $('form#renovacionATForm').reset();
                    $('.form-group').removeClass('has-success');
                }
                $("button#renovacionATSubmit").removeClass('disabled');
                $("button#cancelar").removeClass('disabled');
                $('.callout-success').fadeOut(10000);
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
                swal("¡Registrado!", alertMessage, "success");
                $('.callout-success').fadeIn();
                if($("button#solicitudBRSubmit").attr('data') == 1)
                {
                    $('form#solicitudBRForm').reset();
                    $('.form-group').removeClass('has-success');
                }
                $("button#solicitudBRSubmit").removeClass('disabled');
                $("button#cancelar").removeClass('disabled');
                $('.callout-success').fadeOut(10000);
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
                swal("¡Registrado!", alertMessage, "success");
                $('.callout-success').fadeIn();
                if($("button#renovacionBRSubmit").attr('data') == 1)
                {
                    $('form#renovacionBRForm').reset();
                    $('.form-group').removeClass('has-success');
                }
                $("button#renovacionBRSubmit").removeClass('disabled');
                $("button#cancelar").removeClass('disabled');
                $('.callout-success').fadeOut(10000);
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
                swal("¡Registrado!", alertMessage, "success");
                $('.callout-success').fadeIn();
                if($("button#solicitudCESubmit").attr('data') == 1)
                {
                    $('form#solicitudCEForm').reset();
                    $('.form-group').removeClass('has-success');
                }
                $("button#solicitudCESubmit").removeClass('disabled');
                $("button#cancelar").removeClass('disabled');
                $('.callout-success').fadeOut(10000);
            }
        })
        return false;
    },
});