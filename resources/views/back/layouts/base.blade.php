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
        <title>Panel de control - Sicdeudo</title>
        <!--Morris Chart CSS -->
		<link rel="stylesheet" href="{{ asset('back/assets/plugins/morris/morris.css') }}">
        <!-- Switchery css -->
        <link href="{{ asset('back/assets/plugins/switchery/switchery.min.css') }}" rel="stylesheet" />
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
		<header id="topnav">
        	@include('back.layouts.navbar')
        	@if(Auth::user()->rol == 1)
        	@include('back.layouts.horizontalbar')
        	@elseif(Auth::user()->rol == 2)
        	@include('back.layouts.horizontalBarEstudiante')
        	@endif
    	</header>
		<!-- End Navigation Bar-->
        <div class="wrapper">
            <div class="container">
                @section('content')
                    {{--
                    @include('back.layouts.content-title', ['titulo' => 'Panel de control'])
                    @include('back.layouts.content-base')
                    --}}
                @show
            </div> <!-- container -->
            @include('back.layouts.right-sidebar')
        </div> <!-- End wrapper -->
        @include('back.layouts.footer')
        <!-- jQuery  -->
        <script src="{{ asset('back/assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('back/assets/js/tether.min.js') }}"></script><!-- Tether for Bootstrap -->
        <script src="{{ asset('back/assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('back/assets/js/waves.js') }}"></script>
        <script src="{{ asset('back/assets/js/jquery.nicescroll.js') }}"></script>
        <script src="{{ asset('back/assets/plugins/switchery/switchery.min.js') }}"></script>
        <script src="{{ asset('back/assets/plugins/jquery-validation/dist/jquery.validate.min.js') }}"></script>

        <!-- Modernizr js -->
        <script src="{{ asset('back/assets/js/modernizr.min.js') }}"></script>

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

    </body>
</html>