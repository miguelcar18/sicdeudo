<div class="navbar-custom">
    <div class="container">
        <div id="navigation">
            <!-- Navigation Menu-->
            <ul class="navigation-menu">
                <li>
                    <a href="{{ URL::route('dashboard') }}"><i class="zmdi zmdi-view-dashboard"></i> <span> Inicio </span> </a>
                </li>
                <li class="has-submenu">
                    <a href="#"><i class="zmdi zmdi-assignment-account"></i> <span> Ayudantías</span> </a>
                    <ul class="submenu">
                        <li><a href="{{ URL::route('solicitudAyudantiaOrdinaria') }}">Solicitud de ayudantías ordinarias</a></li>
                        <li><a href="{{ URL::route('renovacionAyudantiaOrdinaria') }}">Renovación de ayudantías ordinarias</a></li>
                        <li><a href="{{ URL::route('solicitudAyudantiaTecnica') }}">Solicitud de ayudantías técnicas</a></li>
                        <li><a href="{{ URL::route('renovacionAyudantiaTecnica') }}">Renovación de ayudantías técnicas</a></li>
                    </ul>
                </li>
                <li class="has-submenu">
                    <a href="#"><i class="zmdi zmdi-home"></i> <span> Becas de residencia </span> </a>
                    <ul class="submenu">
                        <li><a href="{{ URL::route('solicitudBecasResidencia') }}">Solicitud</a></li>
                        <li><a href="{{ URL::route('renovacionBecasResidencia') }}">Renovación</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{ URL::route('citaCambioEspecialidad') }}"><i class="zmdi zmdi-collection-text"></i><span> Cambios de especialidad </span> </a>
                </li>
            </ul>
            <!-- End navigation menu  -->
        </div>
    </div>
</div>