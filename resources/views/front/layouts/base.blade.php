<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Sistema de información computarizado de desarrollo estudiantil UDO Monagas">
        <meta name="author" content="Daihana Ribero">
        <!-- App Favicon -->
        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">
        <!-- App title -->
        @section('titulo')
        <title>Sicdeudo</title>
        @show
        <!--Morris Chart CSS -->
		<link rel="stylesheet" href="{{ asset('assets/plugins/morris/morris.css') }}">
        <!-- Switchery css -->
        <link href="{{ asset('assets/plugins/switchery/switchery.min.css') }}" rel="stylesheet" />
        <!-- Datepicker css -->
        <link href="{{ asset('assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}" rel="stylesheet">
        <!-- Sweet Alert css -->
        <link href="{{ asset('assets/plugins/bootstrap-sweetalert/sweet-alert.css') }}" rel="stylesheet" type="text/css" />
        <!-- DataTables -->
        <link href="{{ asset('assets/plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
        <!--calendar css-->
        <link href="{{ asset('assets/plugins/fullcalendar/dist/fullcalendar.css') }}" rel="stylesheet" />
        <link href="{{ asset('assets/plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="{{ asset('assets/plugins/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
        <!--Form Wizard-->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/jquery.steps/demo/css/jquery.steps.css') }}" />
        <!-- App CSS -->
        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css" />
        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
        @section('styles')
        @show
    </head>
    <body>
    	<!-- Navigation Bar-->
		<header id="topnav" style="background-color: #2b3d51">
        	@include('front.layouts.navbar')
            @include('front.layouts.horizontalBar')
    	</header>
		<!-- End Navigation Bar-->
        <div class="wrapper">
            @section('content')
            <!-- START carousel-->
            <div id="carousel-example-captions" data-ride="carousel" class="carousel slide">
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-captions" data-slide-to="0" class="active" style="border: 2px solid #000000;"></li>
                    <li data-target="#carousel-example-captions" data-slide-to="1" style="border: 2px solid #000000;"></li>
                    <li data-target="#carousel-example-captions" data-slide-to="2" style="border: 2px solid #000000;"></li>
                </ol>
                <div role="listbox" class="carousel-inner" style="height: 470px">
                    <div class="carousel-item active">
                        <img src="{{ ('assets/images/background/fondo01.png') }}" alt="First slide image">
                        <div class="carousel-caption" style="bottom: 55%">
                            <h1 class="text-dark font-600 text-uppercase" style="font-weight: 900">Cambio de especialidad</h1><br>
                            <h3 class="text-dark font-600 text-center">¿Estas considerando cambiar de carrera? </h3>
                            <h3 class="text-dark font-600">Nuestro grupo de orientadores te guiarán en este importante proceso para definir claramente si es necesario y enfocar tu vocación a una nueva carrera.</h3><br>
                            <a href="{{ URL::route('orientacionCambioEspecialidad') }}" class="btn btn-dark-outline waves-effect waves-light">Ver más</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ ('assets/images/background/fondo01.png') }}" alt="Second slide image">
                        <div class="carousel-caption" style="bottom: 55%">
                            <h1 class="text-dark font-600 text-uppercase" style="font-weight: 900">Asistencia socio-económica</h1><br>
                            <h3 class="text-dark font-600 text-center">Te ofrecemos diferentes modalidades para obtener asistencia socio económica. Puedes solicitar una beca, ayudantía o ayudantía eventual para casos especiales.</h3><br>
                            <a href="{{ URL::route('desarrolloSocial') }}" class="btn btn-dark-outline waves-effect waves-light">Ver más</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ ('assets/images/background/fondo01.png') }}" alt="Third slide image">
                        <div class="carousel-caption" style="bottom: 55%">
                            <h1 class="text-dark font-600 text-uppercase" style="font-weight: 900">Servicio médico</h1><br>
                            <h3 class="text-dark font-600 text-center">Dispones de una unidad destinada al servicio médico de tipo preventivo y curativo, asi como atención de urgencias no complicadas a toda la comunidad universitaria.</h3><br>
                            <a href="{{ URL::route('salud') }}" class="btn btn-dark-outline waves-effect waves-light">Ver más</a>
                        </div>
                    </div>
                </div>
                <a href="#carousel-example-captions" role="button" data-slide="prev" class="left carousel-control"> <span aria-hidden="true" class="fa fa-angle-left"></span> <span class="sr-only">Previous</span> </a>
                <a href="#carousel-example-captions" role="button" data-slide="next" class="right carousel-control"> <span aria-hidden="true" class="fa fa-angle-right"></span> <span class="sr-only">Next</span> </a>
            </div>
            <!-- END carousel-->
            <section class="icon-list-demo">
                <div class="topbar-main" style="background-color: #FFFFFF;">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                                <div class="card-box tilebox-one" style="margin-bottom: 0; box-shadow: none">
                                    <center>
                                        <a href="{{ URL::route('orientacion') }}" style="text-decoration: none">
                                            <i class="zmdi zmdi-puzzle-piece" style="background-color: darkblue; color: white; border-radius:45px;"></i><br>Área de orientación
                                        </a>
                                    </center>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                                <div class="card-box tilebox-one" style="margin-bottom: 0; box-shadow: none">
                                    <center>
                                        <a href="{{ URL::route('salud') }}" style="text-decoration: none">
                                            <i class="ion-ios7-pulse-strong" style="background-color: darkblue; color: white; border-radius:45px;"></i><br>Área de salud
                                        </a>
                                    </center>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                                <div class="card-box tilebox-one" style="margin-bottom: 0; box-shadow: none">
                                    <center>
                                        <a href="{{ URL::route('desarrolloSocial') }}" style="text-decoration: none">
                                            <i class="ion-ios7-people" style="background-color: darkblue; color: white; border-radius:45px;"></i><br>Área de desarrollo social
                                        </a>
                                    </center>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                                <div class="card-box tilebox-one" style="margin-bottom: 0; box-shadow: none">
                                    <center>
                                        <a href="{{ URL::route('socioEducativa') }}" style="text-decoration: none">
                                            <i class="zmdi zmdi-graduation-cap" style="background-color: darkblue; color: white; border-radius:45px;"></i><br>Área socio-educativa
                                        </a>
                                    </center>
                                </div>
                            </div>
                        </div> <!-- end menu-extras -->
                    </div> <!-- end container -->
                </div>
            </section>
            <div class="container-fluid" style="background-color: #FFFFFF;">
                <div class="row">
                    <div class="col-xs-12 col-lg-12 col-xl-8">
                        <div class="card-box">
                            <div class="row">
                                <div class="col-md-3 col-sm-12 col-xs-12">
                                    <div class="external-event bg-darkblue" data-class="bg-darkblue">
                                        <i class="fa fa-move"></i>Días no laborales
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-12 col-xs-12">
                                    <div class="external-event bg-info" data-class="bg-info">
                                        <i class="fa fa-move"></i>Periodo vacacional
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-12 col-xs-12">
                                    <div class="external-event bg-pink" data-class="bg-pink">
                                        <i class="fa fa-move"></i>Calendario académico
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-12 col-xs-12">
                                    <div class="external-event bg-success" data-class="bg-success">
                                        <i class="fa fa-move"></i>Hoy
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="min-height: 200px">
                               <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div id="calendario"></div>
                                </div> <!-- end col -->
                            </div>  <!-- end row -->
                        </div>

                        <!-- BEGIN MODAL -->
                        <div class="modal fade none-border" id="event-modal">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h5 class="modal-title">Add New Event</h5>
                                    </div>
                                    <div class="modal-body p-20"></div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-success save-event waves-effect waves-light">Create event</button>
                                        <button type="button" class="btn btn-danger delete-event waves-effect waves-light" data-dismiss="modal">Delete</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Modal Add Category -->
                        <div class="modal fade none-border" id="add-category">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h5 class="modal-title">Add a category</h5>
                                    </div>
                                    <div class="modal-body p-20">
                                        <form role="form">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label class="control-label">Category Name</label>
                                                    <input class="form-control form-white" placeholder="Enter name" type="text" name="category-name"/>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="control-label">Choose Category Color</label>
                                                    <select class="form-control form-white" data-placeholder="Choose a color..." name="category-color">
                                                        <option value="success">Success</option>
                                                        <option value="danger">Danger</option>
                                                        <option value="info">Info</option>
                                                        <option value="pink">Pink</option>
                                                        <option value="primary">Primary</option>
                                                        <option value="warning">Warning</option>
                                                        <option value="inverse">Inverse</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-danger waves-effect waves-light save-category" data-dismiss="modal">Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END MODAL -->
                    </div>
                    <div class="col-xs-12 col-lg-12 col-xl-4">
                        <div class="card-box">
                        <h4 class="header-title m-t-0 m-b-30">Enlaces de interés</h4>
                            <div class="text-xs-center m-b-20">
                                <a href="">
                                    <img src="{{ ('assets/images/logos/logo-fames.jpeg') }}" class="img-responsive img-thumbnail">
                                </a>
                            </div>
                            <div class="text-xs-center m-b-20">
                                <a href="">
                                    <img src="{{ ('assets/images/logos/front-udo.jpg') }}" class="img-responsive img-thumbnail">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @show
            @include('front.layouts.right-sidebar')
        </div> <!-- End wrapper -->
        @include('front.layouts.footer')

        <!-- jQuery  -->
        <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/js/tether.min.js') }}"></script><!-- Tether for Bootstrap -->
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/js/waves.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.nicescroll.js') }}"></script>
        <script src="{{ asset('assets/plugins/switchery/switchery.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/jquery.steps/build/jquery.steps.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/plugins/jquery-validation/dist/jquery.validate.min.js') }}"></script>
        <script src="{{ asset('assets/pages/jquery.wizard-init.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/plugins/jquery-ui/jquery-ui.min.js') }}"></script>

        <!-- Modernizr js -->
        <script src="{{ asset('assets/js/modernizr.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>

        <!-- Sweet Alert js -->
        <script src="{{ asset('assets/plugins/bootstrap-sweetalert/sweet-alert.min.js') }}"></script>
        <script src="{{ asset('assets/pages/jquery.sweet-alert.init.js') }}"></script>

        <!-- Required datatable js -->
        <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>

        <!-- BEGIN PAGE SCRIPTS -->
        <script src="{{ asset('assets/plugins/moment/moment.js') }}"></script>
        <script src='{{ asset('assets/plugins/fullcalendar/dist/fullcalendar.min.js') }}'></script>
        <script src='{{ asset('assets/plugins/fullcalendar/dist/lang/es.js') }}'></script>
        <script src="{{ asset('assets/pages/jquery.fullcalendar.js') }}"></script>

        <script>
            var resizefunc = [];
        </script>

        {{--
        <!--Morris Chart-->
		<script src="{{ asset('assets/plugins/morris/morris.min.js') }}"></script>
		<script src="{{ asset('assets/plugins/raphael/raphael-min.js') }}"></script>
        

        <!-- Counter Up  -->
        <script src="{{ asset('assets/plugins/waypoints/lib/jquery.waypoints.js') }}"></script>
        <script src="{{ asset('assets/plugins/counterup/jquery.counterup.min.js') }}"></script>

        <!-- App js -->
        <script src="{{ asset('assets/js/jquery.core.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.app.js') }}"></script>

        <!-- Page specific js -->
        <script src="{{ asset('assets/pages/jquery.dashboard.js') }}"></script>
        --}}

        <!-- Custom js -->
        <script src="{{ asset('assets/js/custom.js') }}"></script>
        @section('javascripts')
        <script type="text/javascript">
        var miFecha = new Date(); 
            $('#calendario').fullCalendar({
                locale: 'es',
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: null
                },
                events: [
                {
                    start: new Date().getFullYear()+"-"+('0'+(new Date().getMonth()+1)).slice(-2)+"-"+('0'+new Date().getDate()).slice(-2),
                    end: new Date().getFullYear()+"-"+('0'+(new Date().getMonth()+1)).slice(-2)+"-"+('0'+new Date().getDate()).slice(-2),
                    overlap: false,
                    rendering: 'background',
                    color: '#1bb99a'
                },
                {
                    start: '2016-12-31',
                    end: '2017-01-01',
                    overlap: false,
                    rendering: 'background',
                    color: '#00008b'
                },
                {
                    start: '2017-02-27',
                    end: '2017-03-01',
                    overlap: false,
                    rendering: 'background',
                    color: '#00008b'
                },
                {
                    start: '2017-04-13',
                    end: '2017-04-15',
                    overlap: false,
                    rendering: 'background',
                    color: '#00008b'
                },
                {
                    start: '2017-04-19',
                    end: '2017-04-20',
                    overlap: false,
                    rendering: 'background',
                    color: '#00008b'
                },
                {
                    start: '2017-05-01',
                    end: '2017-05-02',
                    overlap: false,
                    rendering: 'background',
                    color: '#00008b'
                },
                {
                    start: '2017-06-24',
                    end: '2017-06-25',
                    overlap: false,
                    rendering: 'background',
                    color: '#00008b'
                },
                {
                    start: '2017-07-05',
                    end: '2017-07-06',
                    overlap: false,
                    rendering: 'background',
                    color: '#00008b'
                },
                {
                    start: '2017-07-24',
                    end: '2017-07-25',
                    overlap: false,
                    rendering: 'background',
                    color: '#00008b'
                },
                {
                    start: '2017-10-12',
                    end: '2017-10-13',
                    overlap: false,
                    rendering: 'background',
                    color: '#00008b'
                },
                {
                    start: '2017-12-24',
                    end: '2017-12-26',
                    overlap: false,
                    rendering: 'background',
                    color: '#00008b'
                },
                {
                    start: '2017-12-31',
                    end: '2018-01-01',
                    overlap: false,
                    rendering: 'background',
                    color: '#00008b'
                },
                {
                    start: '2017-03-23',
                    end: '2017-08-08',
                    overlap: false,
                    rendering: 'background',
                    color: '#ff7aa3'
                },
                {
                    start: '2017-08-08',
                    end: '2017-10-08',
                    overlap: false,
                    rendering: 'background',
                    color: '#3db9dc'
                }
                ]
            });
        </script>
        @show
    </body>
</html>