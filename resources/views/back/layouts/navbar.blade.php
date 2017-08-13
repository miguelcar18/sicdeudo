<div class="topbar-main" style="background-color: #FFFFFF;">
    <div class="container">
        <!-- LOGO -->
        <div class="topbar-left">
            <a href="{{ URL::route('dashboard') }}" class="logo">
                <img src="{{ asset('assets/images/logos/logo_udo.svg') }}" width="60px" height="auto">
            </a>
        </div>
        <div class="topbar-left">
            <a href="#" class="logo">
                <span style="color: black; line-height: 18px !important; font-size: 12px;">UNIVERSIDAD DE ORIENTE</span><br>
                <span style="color: black; line-height: 18px !important; font-size: 12px;">DELEGACIÓN DE DESARROLLO ESTUDIANTIL</span><br>
                <span style="color: black; line-height: 18px !important; font-size: 12px;">NÚCLEO MONAGAS</span>
            </a>
        </div>
        <!-- End Logo container-->
        <div class="menu-extras">
            <ul class="nav navbar-nav pull-right">
                <li class="nav-item">
                    <!-- Mobile menu toggle-->
                    <a class="navbar-toggle">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                    <!-- End mobile menu toggle-->
                </li>
                {{--
                <li class="nav-item dropdown notification-list">
                    <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <i class="zmdi zmdi-notifications-none noti-icon"></i>
                        <span class="noti-icon-badge"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-lg" aria-labelledby="Preview">
                        <!-- item-->
                        <div class="dropdown-item noti-title">
                            <h5><small><span class="label label-danger pull-xs-right">7</span>Notification</small></h5>
                        </div>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <div class="notify-icon bg-success"><i class="icon-bubble"></i></div>
                            <p class="notify-details">Robert S. Taylor commented on Admin<small class="text-muted">1min ago</small></p>
                        </a>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <div class="notify-icon bg-info"><i class="icon-user"></i></div>
                            <p class="notify-details">New user registered.<small class="text-muted">1min ago</small></p>
                        </a>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <div class="notify-icon bg-danger"><i class="icon-like"></i></div>
                            <p class="notify-details">Carlos Crouch liked <b>Admin</b><small class="text-muted">1min ago</small></p>
                        </a>
                        <!-- All-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item notify-all">
                            View All
                        </a>
                    </div>
                </li>
                <li class="nav-item dropdown notification-list">
                    <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <i class="zmdi zmdi-email noti-icon"></i>
                        <span class="noti-icon-badge"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-arrow-success dropdown-lg" aria-labelledby="Preview">
                        <!-- item-->
                        <div class="dropdown-item noti-title bg-success">
                            <h5><small><span class="label label-danger pull-xs-right">7</span>Messages</small></h5>
                        </div>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <div class="notify-icon bg-faded">
                                <img src={{ asset('assets/images/users/avatar-2.jpg') }}" alt="img" class="img-circle img-fluid">
                            </div>
                            <p class="notify-details">
                                <b>Robert Taylor</b>
                                <span>New tasks needs to be done</span>
                                <small class="text-muted">1min ago</small>
                            </p>
                        </a>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <div class="notify-icon bg-faded">
                                <img src={{ asset('assets/images/users/avatar-3.jpg') }}" alt="img" class="img-circle img-fluid">
                            </div>
                            <p class="notify-details">
                                <b>Carlos Crouch</b>
                                <span>New tasks needs to be done</span>
                                <small class="text-muted">1min ago</small>
                            </p>
                        </a>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <div class="notify-icon bg-faded">
                                <img src={{ asset('assets/images/users/avatar-4.jpg') }}" alt="img" class="img-circle img-fluid">
                            </div>
                            <p class="notify-details">
                                <b>Robert Taylor</b>
                                <span>New tasks needs to be done</span>
                                <small class="text-muted">1min ago</small>
                            </p>
                        </a>
                        <!-- All-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item notify-all">
                            View All
                        </a>
                    </div>
                </li>
                <li class="nav-item dropdown notification-list">
                    <a class="nav-link waves-effect waves-light right-bar-toggle" href="javascript:void(0);">
                        <i class="zmdi zmdi-format-subject noti-icon"></i>
                    </a>
                </li>
                --}}
                <li class="nav-item dropdown notification-list">
                    <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        @if(Auth::user()->path == '')
                        <img src="{{ asset('assets/avatars/user.jpg') }}" alt="user" class="img-circle">
                        @else
                        <img src="{{ asset('uploads/usuarios/'.Auth::user()->path) }}" alt="Foto de {{ Auth::user()->username }}" class="img-circle">
                        @endif
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-arrow profile-dropdown " aria-labelledby="Preview">
                        <!-- item-->
                        <div class="dropdown-item noti-title">
                            <h5 class="text-overflow"><small>{!! Auth::user()->name !!}</small> </h5>
                        </div>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="zmdi zmdi-account-circle"></i> <span>Perfil</span>
                        </a>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="zmdi zmdi-power"></i> <span>Salir</span>
                        </a>
                    </div>
                </li>
                <li class="nav-item dropdown notification-list">
                    <a class="nav-link waves-effect waves-light right-bar-toggle" href="javascript:void(0);">
                        <img src="{{ asset('assets/images/logos/logo_sistema.png') }}" width="auto" height="60px">
                    </a>
                </li>
            </ul>
        </div> <!-- end menu-extras -->
        <div class="clearfix"></div>
    </div> <!-- end container -->
</div>
<!-- end topbar-main -->