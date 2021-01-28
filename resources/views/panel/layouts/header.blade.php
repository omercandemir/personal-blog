<html lang="tr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Responsive Admin Dashboard Template">
        <meta name="keywords" content="admin,dashboard">
        <meta name="author" content="stacks">
        <!-- Remove Tap Highlight on Windows Phone IE -->
        <meta name="msapplication-tap-highlight" content="no"/>
        <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        
        <!-- Title -->
        <title>@yield('title')</title>

        <!-- Styles -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
        <link href="{{asset('panel/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{asset('panel/plugins/font-awesome/css/all.min.css')}}" rel="stylesheet">
        <link href="{{asset('panel/plugins/waves/waves.min.css') }}" rel="stylesheet">
        <link href="{{asset('panel/plugins/nvd3/nv.d3.min.css')}}" rel="stylesheet">

      
        <!-- Theme Styles -->
        <link href="{{asset('panel/css/alpha.min.css')}}" rel="stylesheet">
        <link href="{{asset('panel/css/custom.css')}}" rel="stylesheet">
        @yield('js')

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="loader">
            <div class="spinner-border text-primary" role="status">
                <span class="sr-only">Yükleniyor...</span>
            </div>
        </div>
        <div class="alpha-app">
            <div class="page-header">
                <nav class="navbar navbar-expand primary">
                    <section class="material-design-hamburger navigation-toggle">
                        <a href="javascript:void(0)" data-activates="slide-out" class="button-collapse material-design-hamburger__icon">
                            <span class="material-design-hamburger__layer"></span>
                        </a>
                    </section>
                    <a class="navbar-brand" href="#">@yield('siteadi')</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </nav>
            </div><!-- Page Header -->
            <div class="page-sidebar">
                <div class="page-sidebar-inner">
                    <div class="page-sidebar-profile">
                        <div class="sidebar-profile-image">
                            <img src="{{asset('panel/images/avatars/avatar1.png')}}">
                        </div>
                        <div class="sidebar-profile-info">
                            <p>{{Auth::user()->name}} </p>
                            <span>{{Auth::user()->email}} </span>
                        </div>
                    </div>
                    <div class="page-sidebar-menu">
                        <div class="page-sidebar-settings hidden">
                            <ul class="sidebar-menu list-unstyled">
                                <li><a href="#" class="waves-effect waves-grey"><i class="material-icons">inbox</i>Inbox</a></li>
                                <li><a href="#" class="waves-effect waves-grey"><i class="material-icons">star_border</i>Starred</a></li>
                                <li><a href="#" class="waves-effect waves-grey"><i class="material-icons">done</i>Sent Mail</a></li>
                                <li><a href="#" class="waves-effect waves-grey"><i class="material-icons">history</i>History</a></li>
                                <li class="divider"></li>
                                <li><a href="#" class="waves-effect waves-grey"><i class="material-icons">exit_to_app</i>Sign Out</a></li>
                            </ul>
                        </div>
                        <div class="sidebar-accordion-menu">
                            <ul class="sidebar-menu list-unstyled">
                                <li>
                                    <a href="{{ url('/admin') }}" class="waves-effect waves-grey @if (Request::segment(2) == '') active @endif">
                                        <i class="material-icons">settings_input_svideo</i>Anasayfa
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="waves-effect waves-grey @if (Request::segment(2) === 'ayar' || Request::segment(2) === 'logo' || Request::segment(2) === 'hakkimizda') active @endif">
                                        <i class="material-icons">settings</i>Site Ayarları<i class="material-icons sub-arrow">keyboard_arrow_right</i>
                                    </a>
                                    <ul class="accordion-submenu list-unstyled">
                                        <li><a href="{{url('admin/logo')}}">Logo Değiştir</a></li>
                                        <li><a href="{{url('admin/ayar')}}">Site Bilgilerini Değiştir</a></li>
                                        <li><a href="{{url('admin/hakkimizda')}}">Hakkımda Kısmı</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" class="waves-effect waves-grey">
                                        <i class="material-icons">desktop_windows</i>Blog<i class="material-icons sub-arrow">keyboard_arrow_right</i>
                                    </a>
                                    <ul class="accordion-submenu list-unstyled">
                                        <li><a href="{{url('admin/bloglar/create')}}">Yeni Yazı</a></li>
                                        <li><a href="{{url('admin/bloglar')}}">Tüm Yazılar</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" class="waves-effect waves-grey">
                                        <i class="material-icons">code</i>Proje<i class="material-icons sub-arrow">keyboard_arrow_right</i>
                                    </a>
                                    <ul class="accordion-submenu list-unstyled">
                                        <li><a href="ui-alerts.html">Yeni Proje</a></li>
                                        <li><a href="ui-accordion.html">Tüm Projeler</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" class="waves-effect waves-grey">
                                        <i class="material-icons">star_border</i>Plugins<i class="material-icons sub-arrow">keyboard_arrow_right</i>
                                    </a>
                                    <ul class="accordion-submenu list-unstyled">
                                        <li><a href="plugins-code-editor.html">Code Editor</a></li>
                                        <li><a href="plugins-nestable.html">Nestable List</a></li>
                                        <li><a href="plugins-masonry.html">Masonry</a></li>
                                        <li><a href="plugins-idle.html">Idle Timer</a></li>
                                        <li><a href="plugins-image-crop.html">Image Crop</a></li>
                                        <li><a href="plugins-image-zoom.html">Image Zoom</a></li>
                                        <li><a href="plugins-select2.html">Select2</a></li>
                                        <li><a href="plugins-plupload.html">Plupload</a></li>
                                        <li><a href="plugins-toastr.html">Toastr</a></li>
                                        <li><a href="plugins-range-sliders.html">Range Sliders</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="forms.html" class="waves-effect waves-grey">
                                        <i class="material-icons">mode_edit</i>Forms
                                    </a>
                                </li>
                                <li>
                                    <a href="tables.html" class="waves-effect waves-grey">
                                        <i class="material-icons">grid_on</i>Tables
                                    </a>
                                </li>
                                <li>
                                    <a href="charts.html" class="waves-effect waves-grey">
                                        <i class="material-icons">trending_up</i>Charts
                                    </a>
                                </li>
                                <li>
                                    <form action="{{route('logout')}}" method="post">
                                        @csrf
                                    <div class="text-center"><br>
                                        <button type="submit" class="btn btn-danger">ÇIKIŞ YAP</button>
                                    </div>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="sidebar-footer text-center">
                        <a href="https://omercn.net" target="_blank">reatweb admin panel</a>
                    </div>
                </div>
            </div><!-- Left Sidebar -->
                    <!-- Javascripts -->
        <script src="{{asset('panel/plugins/jquery/jquery-3.4.1.min.js')}}"></script>
        <script src="{{asset('panel/plugins/bootstrap/popper.min.js')}}"></script>
        <script src="{{asset('panel/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('panel/plugins/waves/waves.min.js')}}"></script>
        <script src="{{asset('panel/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
        <script src="{{asset('panel/plugins/d3/d3.min.js')}}"></script>
        <script src="{{asset('panel/plugins/nvd3/nv.d3.min.js')}}"></script>
        <script src="{{asset('panel/plugins/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
        <script src="{{asset('panel/plugins/apexcharts/dist/apexcharts.min.js')}}"></script>
        <script src="{{asset('panel/plugins/flot/jquery.flot.min.js')}}"></script>
        <script src="{{asset('panel/plugins/flot/jquery.flot.time.min.js')}}"></script>
        <script src="{{asset('panel/plugins/flot/jquery.flot.symbol.min.js')}}"></script>
        <script src="{{asset('panel/plugins/flot/jquery.flot.resize.min.js')}}"></script>
        <script src="{{asset('panel/plugins/flot/jquery.flot.tooltip.min.js')}}"></script>
        <script src="{{asset('panel/js/alpha.min.js')}}"></script>
        <script src="{{asset('panel/js/pages/dashboard.js')}}"></script>