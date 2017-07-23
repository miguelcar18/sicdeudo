<div class="navbar-custom">
    <div class="container">
        <div id="navigation">
            <!-- Navigation Menu-->
            <ul class="navigation-menu">
                <li>
                    <a href="{{ URL::route('dashboard') }}"><i class="zmdi zmdi-view-dashboard"></i> <span> Inicio </span> </a>
                </li>
                <li class="has-submenu">
                    <a href="#"><i class="zmdi zmdi-account-box-mail"></i> <span> Solicitudes recibidas </span> </a>
                    <ul class="submenu">
                        <li><a href="{{ URL::route('solicitudesAyudantiasOrdinariasAprobar') }}">Ayudantías ordinarias</a></li>
                        <li><a href="#">Ayudantías técnicas</a></li>
                        <li><a href="#">Becas de residencia</a></li>
                    </ul>
                </li>
                <li class="has-submenu">
                    <a href="#"><i class="zmdi zmdi-account-box-mail"></i> <span> Renovaciones recibidas </span> </a>
                    <ul class="submenu">
                        <li><a href="#">Ayudantías ordinarias</a></li>
                        <li><a href="#">Ayudantías técnicas</a></li>
                        <li><a href="#">Becas de residencia</a></li>
                    </ul>
                </li>
                <li class="has-submenu">
                    <a href="#"><i class="zmdi zmdi-collection-text"></i><span> Reportes </span> </a>
                    <ul class="submenu">
                        <li><a href="{{ URL::route('formularioReportes') }}">Listado</a></li>
                        <li><a href="{{ URL::route('formularioReporteEstadistico') }}">Estadístico</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{ URL::route('dashboard') }}"><i class="zmdi zmdi-accounts"></i> <span> Administrar usuarios </span> </a>
                </li>
            </ul>
            <!-- End navigation menu  -->
        </div>
    </div>
</div>