<div class="navbar-custom">
    <div class="container">
        <div id="navigation">
            <!-- Navigation Menu-->
            <ul class="navigation-menu">
                <li>
                    <a href="{{ URL::route('front') }}"><i class="zmdi zmdi-view-dashboard"></i> <span> Inicio </span> </a>
                </li>
                <li>
                    <a href="{{ URL::route('desarrolloEstudiantil') }}"><i class="zmdi zmdi-balance"></i><span> Desarrollo estudiantil </span> </a>
                </li>
                <li>
                    <a href="{{ URL::route('contactos') }}"><i class="zmdi zmdi-account-box-mail"></i><span> Contactos </span> </a>
                </li>
                <li>
                    <a href="{{ URL::route('login') }}"><i class="zmdi zmdi-key"></i><span> Iniciar sesión </span> </a>
                </li>
                @foreach($redes as $red)
                <li style="float: right">
                    <a href="{{ $red->url }}" target="_blank" style="padding-top: 17px; padding-bottom: 17px">
                        <i class="zmdi zmdi-{!!$red->nombre!!}-box" style="font-size: 28px;"></i>
                    </a>
                </li>
                @endforeach
            </ul>
            <!-- End navigation menu  -->
        </div>
    </div>
</div>