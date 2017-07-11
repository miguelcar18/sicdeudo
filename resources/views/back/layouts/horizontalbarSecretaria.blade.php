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
                        <li><a href="{{ URL::route('solicitudesAyudantiasOrdinarias') }}">Ayudantías ordinarias</a></li>
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
                    <a href="#"><i class="zmdi zmdi-search"></i><span> Consultas </span> </a>
                    <ul class="submenu">
                        <li><a href="form-elements.html">General Elements</a></li>
                        <li><a href="form-advanced.html">Advanced Form</a></li>
                        <li><a href="form-validation.html">Form Validation</a></li>
                        <li><a href="form-pickers.html">Form Pickers</a></li>
                        <li><a href="form-wizard.html">Form Wizard</a></li>
                        <li><a href="form-mask.html">Form Masks</a></li>
                        <li><a href="form-uploads.html">Multiple File Upload</a></li>
                        <li><a href="form-xeditable.html">X-editable</a></li>
                    </ul>
                </li>
            </ul>
            <!-- End navigation menu  -->
        </div>
    </div>
</div>