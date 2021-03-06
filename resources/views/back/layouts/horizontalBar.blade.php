<div class="navbar-custom">
    <div class="container">
        <div id="navigation">
            <!-- Navigation Menu-->
            <ul class="navigation-menu">
                <li>
                    <a href="{{ URL::route('dashboard') }}"><i class="zmdi zmdi-view-dashboard"></i> <span> Inicio </span> </a>
                </li>
                @if(Auth::user()->rol == 1)
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
                @elseif(Auth::user()->rol == 2)
                <li class="has-submenu">
                    <a href="#"><i class="zmdi zmdi-account-box-mail"></i> <span> Solicitudes recibidas </span> </a>
                    <ul class="submenu">
                        <li><a href="{{ URL::route('solicitudesAyudantiasOrdinarias') }}">Ayudantías ordinarias</a></li>
                        <li><a href="{{ URL::route('solicitudesAyudantiasTecnicas') }}">Ayudantías técnicas</a></li>
                        <li><a href="{{ URL::route('solicitudesBecasResidencia') }}">Becas de residencia</a></li>
                        <li><a href="{{ URL::route('solicitudesCambioEspecialidad') }}">Cambios de especialidad</a></li>
                    </ul>
                </li>
                <li class="has-submenu">
                    <a href="#"><i class="zmdi zmdi-account-box-mail"></i> <span> Renovaciones recibidas </span> </a>
                    <ul class="submenu">
                        <li><a href="{{ URL::route('renovacionesAyudantiasOrdinarias') }}">Ayudantías ordinarias</a></li>
                        <li><a href="{{ URL::route('renovacionesAyudantiasTecnicas') }}">Ayudantías técnicas</a></li>
                        <li><a href="{{ URL::route('renovacionesBecasResidencia') }}">Becas de residencia</a></li>
                    </ul>
                </li>
                @elseif(Auth::user()->rol == 3)
                <li class="has-submenu">
                    <a href="#"><i class="zmdi zmdi-account-box-mail"></i> <span> Solicitudes recibidas </span> </a>
                    <ul class="submenu">
                        <li><a href="{{ URL::route('solicitudesAyudantiasOrdinariasEs') }}">Ayudantías ordinarias</a></li>
                        <li><a href="{{ URL::route('solicitudesAyudantiasTecnicasEs') }}">Ayudantías técnicas</a></li>
                        <li><a href="{{ URL::route('solicitudesBecasResidenciaEs') }}">Becas de residencia</a></li>
                    </ul>
                </li>
                <li class="has-submenu">
                    <a href="#"><i class="zmdi zmdi-account-box-mail"></i> <span> Renovaciones recibidas </span> </a>
                    <ul class="submenu">
                        <li><a href="{{ URL::route('renovacionesAyudantiasOrdinariasEs') }}">Ayudantías ordinarias</a></li>
                        <li><a href="{{ URL::route('renovacionesAyudantiasTecnicasEs') }}">Ayudantías técnicas</a></li>
                        <li><a href="{{ URL::route('renovacionesBecasResidenciaEs') }}">Becas de residencia</a></li>
                    </ul>
                </li>
                @elseif(Auth::user()->rol == 4)
                <li class="has-submenu">
                    <a href="#"><i class="zmdi zmdi-account-box-mail"></i> <span> Solicitudes recibidas </span> </a>
                    <ul class="submenu">
                        <li><a href="{{ URL::route('solicitudesAyudantiasOrdinariasAprobar') }}">Ayudantías ordinarias</a></li>
                        <li><a href="{{ URL::route('solicitudesAyudantiasTecnicasAprobar') }}">Ayudantías técnicas</a></li>
                        <li><a href="{{ URL::route('solicitudesBecasResidenciaAprobar') }}">Becas de residencia</a></li>
                        <li><a href="{{ URL::route('solicitudesCambioEspecialidadAprobar') }}">Cambios de especialidad</a></li>
                    </ul>
                </li>
                <li class="has-submenu">
                    <a href="#"><i class="zmdi zmdi-account-box-mail"></i> <span> Renovaciones recibidas </span> </a>
                    <ul class="submenu">
                        <li><a href="{{ URL::route('renovacionesAyudantiasOrdinariasAprobar') }}">Ayudantías ordinarias</a></li>
                        <li><a href="{{ URL::route('renovacionesAyudantiasTecnicasAprobar') }}">Ayudantías técnicas</a></li>
                        <li><a href="{{ URL::route('renovacionesBecasResidenciaAprobar') }}">Becas de residencia</a></li>
                    </ul>
                </li>
                <li class="has-submenu">
                    <a href="#"><i class="zmdi zmdi-collection-text"></i><span> Reportes </span> </a>
                    <ul class="submenu">
                        <li><a href="{{ URL::route('formularioReportes') }}">Generales</a></li>
                        <li><a href="{{ URL::route('formularioReporteCita') }}">Cambio de especialidad</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{ URL::route('usuarios.index') }}"><i class="zmdi zmdi-accounts"></i> <span> Administrar usuarios </span> </a>
                </li>
                @elseif(Auth::user()->rol == 6)
                <li>
                    <a href="{{ URL::route('redes-sociales.index') }}"><i class="zmdi zmdi-laptop"></i> <span> Redes sociales </span> </a>
                </li>
                <li class="has-submenu">
                    <a href="#"><i class="zmdi zmdi-link"></i> <span> Enlaces de interés </span> </a>
                    <ul class="submenu">
                        <li><a href="{{ URL::route('enlaces-interes.index') }}">Listado</a></li>
                        <li><a href="{{ URL::route('enlaces-interes.create') }}">Nuevo</a></li>
                    </ul>
                </li>
                @endif
            </ul>
            <!-- End navigation menu  -->
        </div>
    </div>
</div>