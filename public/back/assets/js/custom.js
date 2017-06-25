var resizefunc = [];

$.fn.reset = function () {
    $(this).each (function() { this.reset(); });
}

$(document).ready(function() {
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
});