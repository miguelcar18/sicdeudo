<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Sicdeudo">
        <meta name="author" content="Daihana Ribero">
        <!-- App Favicon -->
        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">
        <!-- App title -->
        <title>Olvido de contraseña - Sicdeudo</title>
        <!-- App CSS -->
        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css" />
        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
        <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet" type="text/css" />
        <style type="text/css">
            .account-pages{ background-image: url("{{ asset('assets/images/background/fondo01.png') }}"); }
        </style>
    </head>
    <body>
        <div class="account-pages"></div>
        <div class="clearfix"></div>
        <div class="wrapper-page">
        	<div class="account-bg">
                <div class="card-box m-b-0">
                    <div class="text-xs-center m-t-20">
                        <img src="{{ asset('assets/images/logos/logo_sistema.png') }}" width="auto" height="120px"><br>
                        {{--
                        <a href="#" class="logo">
                            <span>SICDEUDO</span>
                            <h6 class="text-muted text-uppercase m-b-0 m-t-0">Sistema de información computarizado de desarrollo estudiantil UDO Monagas</h6>
                        </a>
                        --}}
                    </div>
                    <div class="m-t-30 m-b-20">
                        <div class="col-xs-12" id="respuesta"></div>
                        <!-- Advanced login -->
                        @if(session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                        @endif
                        <div class="col-xs-12 text-xs-center">
                            <h6 class="text-muted text-uppercase m-b-0 m-t-0">Restablecer contraseña</h6>
                        </div>
                        {!! Form::open(['route' => 'password.email', 'method' => 'post', 'id' => 'resetPasswordForm', 'name' => 'resetPasswordForm', 'class' => 'form-horizontal m-t-20 form-validate', 'novalidate' => 'novalidate']) !!}
                            <div class="form-group">
                                <div class="col-xs-12">
                                    {!! Form::text('email', old('email'), $attributes = array('placeholder' => 'Ingrese email', 'class' => 'form-control', 'required' => 'required', 'id' => 'email')) !!}
                                </div>
                            </div>
                            @if ($errors->has('email'))
                            <div class="form-group text-center m-t-30">
                                <div class="col-xs-12">
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                </div>
                            </div>
                            @endif
                            <div class="form-group text-center m-t-30">
                                <div class="col-xs-12">
                                    {!! Form::button('Enviar', ['class'=> 'btn btn-primary btn-block waves-effect waves-light', 'id' => 'botonIngresar', 'type' => 'submit']) !!}
                                </div>
                            </div>
                        {!! Form::close()!!}
                    </div>
                </div>
            </div>
            <!-- end card-box-->
            <div class="m-t-20">
                <div class="text-xs-center">
                    <p class="text-dark"><a href="{{ URL::route('login') }}" class="text-dark m-l-5"><b>Regresar al login</b></a></p>
                </div>
            </div>
        </div>
        <!-- end wrapper page -->

        <!-- jQuery  -->
        <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/js/modernizr.min.js') }}"></script>
        <script src="{{ asset('assets/js/tether.min.js') }}"></script><!-- Tether for Bootstrap -->
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/js/waves.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.nicescroll.js') }}"></script>
        <script src="{{ asset('assets/plugins/switchery/switchery.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/jquery-validation/dist/jquery.validate.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
        <!-- Sweet Alert js -->
        <script src="{{ asset('assets/plugins/bootstrap-sweetalert/sweet-alert.min.js') }}"></script>
        <script src="{{ asset('assets/pages/jquery.sweet-alert.init.js') }}"></script>

        <!-- App js -->
        <script src="{{ asset('assets/js/jquery.core.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.app.js') }}"></script>
        <script src="{{ asset('assets/js/custom.js') }}"></script>

    </body>
</html>