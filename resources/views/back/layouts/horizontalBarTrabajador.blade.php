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
                        <li><a href="{{ URL::route('solicitudesAyudantiasOrdinariasEs') }}">Ayudantías ordinarias</a></li>
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
                <li>
                    <a href="#"><i class="zmdi zmdi-search"></i><span> Consultas </span> </a>
                </li>
            </ul>
            <!-- End navigation menu  -->
        </div>
    </div>
</div>