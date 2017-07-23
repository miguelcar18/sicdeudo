<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Sistema de información computarizado de desarrollo estudiantil UDO Monagas">
        <meta name="author" content="Daihana Ribero">
        <!-- App Favicon -->
        <link rel="shortcut icon" href="{{ asset('back/assets/images/favicon.ico') }}">
        <!-- App title -->
        @section('titulo')
        <title>Sicdeudo</title>
        @show
        <!--Morris Chart CSS -->
		<link rel="stylesheet" href="{{ asset('back/assets/plugins/morris/morris.css') }}">
        <!-- Switchery css -->
        <link href="{{ asset('back/assets/plugins/switchery/switchery.min.css') }}" rel="stylesheet" />
        <!-- Datepicker css -->
        <link href="{{ asset('back/assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}" rel="stylesheet">
        <!-- Sweet Alert css -->
        <link href="{{ asset('back/assets/plugins/bootstrap-sweetalert/sweet-alert.css') }}" rel="stylesheet" type="text/css" />
        <!-- DataTables -->
        <link href="{{ asset('back/assets/plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('back/assets/plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="{{ asset('back/assets/plugins/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
        <!--Form Wizard-->
        <link rel="stylesheet" type="text/css" href="{{ asset('back/assets/plugins/jquery.steps/demo/css/jquery.steps.css') }}" />
        <!-- App CSS -->
        <link href="{{ asset('back/assets/css/style.css') }}" rel="stylesheet" type="text/css" />
        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
        <style type="text/css">
            .wrapper{ background-image: url("{{ asset('back/assets/images/background/fondo01.png') }}"); min-height: 600px }
        </style>
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
            <div class="container">
                @section('content')
                    {{--
                    @include('front.layouts.content-title', ['titulo' => 'Panel de control'])
                    @include('front.layouts.content-base')
                    --}}
                @show
            </div> <!-- container -->
            @include('front.layouts.right-sidebar')
        </div> <!-- End wrapper -->
        @include('front.layouts.footer')

        <!-- jQuery  -->
        <script src="{{ asset('back/assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('back/assets/js/tether.min.js') }}"></script><!-- Tether for Bootstrap -->
        <script src="{{ asset('back/assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('back/assets/js/waves.js') }}"></script>
        <script src="{{ asset('back/assets/js/jquery.nicescroll.js') }}"></script>
        <script src="{{ asset('back/assets/plugins/switchery/switchery.min.js') }}"></script>
        <script src="{{ asset('back/assets/plugins/jquery.steps/build/jquery.steps.js') }}" type="text/javascript"></script>
        <script src="{{ asset('back/assets/plugins/jquery-validation/dist/jquery.validate.min.js') }}"></script>
        <script src="{{ asset('back/assets/pages/jquery.wizard-init.js') }}" type="text/javascript"></script>

        <!-- Modernizr js -->
        <script src="{{ asset('back/assets/js/modernizr.min.js') }}"></script>
        <script src="{{ asset('back/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>

        <!-- Sweet Alert js -->
        <script src="{{ asset('back/assets/plugins/bootstrap-sweetalert/sweet-alert.min.js') }}"></script>
        <script src="{{ asset('back/assets/pages/jquery.sweet-alert.init.js') }}"></script>

        <!-- Required datatable js -->
        <script src="{{ asset('back/assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('back/assets/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>

        {{--
        <!--Morris Chart-->
		<script src="{{ asset('back/assets/plugins/morris/morris.min.js') }}"></script>
		<script src="{{ asset('back/assets/plugins/raphael/raphael-min.js') }}"></script>
        

        <!-- Counter Up  -->
        <script src="{{ asset('back/assets/plugins/waypoints/lib/jquery.waypoints.js') }}"></script>
        <script src="{{ asset('back/assets/plugins/counterup/jquery.counterup.min.js') }}"></script>

        <!-- App js -->
        <script src="{{ asset('back/assets/js/jquery.core.js') }}"></script>
        <script src="{{ asset('back/assets/js/jquery.app.js') }}"></script>

        <!-- Page specific js -->
        <script src="{{ asset('back/assets/pages/jquery.dashboard.js') }}"></script>
        --}}

        <!-- Custom js -->
        <script src="{{ asset('back/assets/js/custom.js') }}"></script>
        @section('javascripts')
        @show
    </body>
</html>