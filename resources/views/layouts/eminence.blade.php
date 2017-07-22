<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Eminence México</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('img/logo/favicon.ico') }}">
    <!-- Google Fonts
============================================ -->
    <link href='https://fonts.googleapis.com/css?family=Josefin+Sans:400,600,700,300,500' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>
    <!-- Bootstrap CSS
============================================ -->
    <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}">
    <!-- Material icon CSS
============================================ -->
    <link rel="stylesheet" href="{{ url('css/material-design-iconic-font.css') }}">
    <link rel="stylesheet" href="{{ url('css/material-design-iconic-font.min.css') }}">
    <!-- Nivo slider CSS
============================================ -->
    <link rel="stylesheet" type="text/css" href="{{ url('lib/custom-slider/css/nivo-slider.css') }}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{ url('lib/custom-slider/css/preview.css') }}" media="screen" />
    <!-- Fontawsome CSS
============================================ -->
    <link rel="stylesheet" href="{{ url('css/font-awesome.min.css') }}">
    <!-- owl.carousel CSS
============================================ -->
    <link rel="stylesheet" href="{{ url('css/owl.carousel.css') }}">
    <!-- jquery-ui CSS
============================================ -->
    <link rel="stylesheet" href="{{ url('css/jquery-ui.css') }}">
    <!-- meanmenu CSS
============================================ -->
    <link rel="stylesheet" href="{{ url('css/meanmenu.min.css') }}">
    <!-- animate CSS
============================================ -->
    <link rel="stylesheet" href="{{ url('css/animate.css') }}">
    <!-- style CSS
============================================ -->
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
    <!-- responsive CSS
============================================ -->
    <link rel="stylesheet" href="{{ url('css/responsive.css') }}">
    <!-- personal changes CSS
============================================ -->
    <link rel="stylesheet" href="{{ url('css/changes.css') }}">
    <!-- modernizr JS
============================================ -->
    <script src="{{ url('js/vendor/modernizr-2.8.3.min.js') }}"></script>
</head>

<body>
    <!-- [if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif] -->

    <!-- header start -->
    <header class="header-area">
        <!-- Login start -->
        <div class="header-top-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 hidden-sm hidden-xs">
                        <div class="header-top-right">
                            <div class="account-login">
                                <ul>
                                    <li class="login"><a href="{{ route('login') }}">login</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Login end -->
        <!-- Menu start -->
        <div class="main-header-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-4 col-sm-6 col-xs-6">
                        <div class="logo">
                            <a href="{{ url('/') }}"><img src="{{ url('img/logo/milogo.png') }}" alt="eminence"></a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-8 col-sm-6 col-xs-6">
                        <div class="mainmenu-area">
                            <div class="mainmenu">
                                <nav>
                                    <ul id="nav">
                                        <li><a href="#">productos</a>
                                            <ul class="submenu-mainmenu">
                                                <li><a href="productos">All Products</a></li>
                                                @forelse($catalogues as $catalogue)
                                                <li><a href="face">{{$catalogue->title}}</a></li>
                                                @empty
                                                    <li><a href="starterSets">Sin productos</a></li>
                                                @endforelse
                                            </ul>
                                        </li>
                                        <li><a href="clients">Clientes</a></li>
                                        <li><a href="#">Extras</a>
                                            <ul class="submenu-mainmenu">
                                                <li><a href="green-company">Empresa Verde</a></li>
                                                <li role="separator" class="divider"></li>
                                                <li><a href="https://eminenceorganics.com/us" target="_blank">Éminence EUA</a></li>
                                                <li><a href="https://eminenceorganics.com/us/awards" target="_blank">Awards</a></li>
                                                <li><a href="https://www.latiendadesuperfoods.com" target="_blank">Tienda</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="https://www.latiendadesuperfoods.com" target="_blank">Tienda</a></li>
                                        <li><a href="contact">Contacto</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Menu end -->
        <!-- Mobile Menu Area start -->
        <div class="mobile-menu-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="mobile-menu">
                            <nav id="dropdown">
                                <ul>
                                    <li><a href="#">productos</a>
                                        <ul>
                                            <li><a href="products">All Products</a></li>
                                            <li><a href="./face.php">Face</a></li>
                                            <li><a href="./body.php">Body</a></li>
                                            <li><a href="./cosmetics.php">Cosmetics</a></li>
                                            <li><a href="./starterSets.php">Starter Sets & Specialty Items</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="clients">Nuestros Clientes</a></li>
                                    <li><a href="#">Extras</a>
                                        <ul>
                                            <li><a href="green-company">Empresa Verde</a></li>
                                            <li role="separator" class="divider"></li>
                                            <li><a href="https://eminenceorganics.com/us" target="_blank">Éminence EUA</a></li>
                                            <li><a href="https://eminenceorganics.com/us/awards" target="_blank">Awards</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact">Contacto</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Mobile Menu Area end -->
    </header>
    <!-- header end -->


    @yield('content')


    <!-- footer start -->
    <footer class="footer-area">
        <div class="main-footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="footer-widget address">
                            <div class="footer-logo">
                                <a href="{{ url('/') }}"><img src="{{ url('img/logo/milogo.png') }}" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="footer-address">
                            <div class="footer-icon"> <i class="zmdi zmdi-account-o"></i> </div>
                            <div class="footer-info">
                                <p>Claudia Mendez Cuervo<br/> Mexico Managing Director</p>
                            </div>
                        </div>
                        <div class="footer-address">
                            <div class="footer-icon"> <i class="fa fa-phone"></i> </div>
                            <div class="footer-info">
                                <p>(55) 3722 6299</p>
                            </div>
                        </div>
                        <div class="footer-address">
                            <div class="footer-icon"> <i class="fa fa-envelope"></i> </div>
                            <div class="footer-info">
                                <p>claudia@eminence.mx</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 hidden-sm col-xs-12">
                        <div class="footer-widget">
                            <h5>links</h5>
                            <ul>
                                <li><a href="clients">Nuestros Clientes</a></li>
                                <li><a href="green-company">Empresa Verde</a></li>
                                <li><a href="https://eminenceorganics.com/us" target="_blank">Éminence EUA</a></li>
                                <li><a href="https://eminenceorganics.com/us/awards" target="_blank">Awards</a></li>
                                <li><a href="https://www.latiendadesuperfoods.com" target="_blank">Tienda</a></li>
                                <li><a href="contact">Contacto</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 hidden-sm col-xs-12">
                        <div class="footer-widget payment">
                            <h5>redes sociales</h5>
                            <p>Visita nuestras redes sociales y
                                <br><strong>no olvides comprartir</strong></p>
                            <div class="newsletter-social-icon">
                                <ul>
                                    <li class="google-plus"><a href="https://www.instagram.com/eminencemx/" target="_blank"><i class="zmdi zmdi-instagram"></i></a></li>
                                    <li><a href="https://www.facebook.com/MexicoEminence" target="_blank"><i class="zmdi zmdi-facebook"></i></a></li>
                                    <li class="pinterest"><a href="https://www.latiendadesuperfoods.com" target="_blank"><i class="zmdi zmdi-mall"></i></a></li>
                                    <li class="google-plus"></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom-area">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="copyright">
                            <p>2017 ® All Rights Reserved - <a href="https://smartsystem.mx/">SmartSystems </a> - Custom Systems</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer end -->
    <!-- jquery
		============================================ -->
    <script type="text/javascript" src="{{ url('js/vendor/jquery-1.12.4.min.js') }}"></script>
    <!-- bootstrap JS
============================================ -->
    <script type="text/javascript" src="{{ url('js/bootstrap.min.js') }}"></script>
    <!-- meanmenu JS
============================================ -->
    <script type="text/javascript" src="{{ url('js/jquery.meanmenu.js') }}"></script>
    <!-- wow JS
============================================ -->
    <script type="text/javascript" src="{{ url('js/wow.min.js') }}"></script>
    <!-- owl.carousel JS
============================================ -->
    <script type="text/javascript" src="{{ url('js/owl.carousel.min.js') }}"></script>
    <!-- price-slider JS
============================================ -->
    <script type="text/javascript" src="{{ url('js/jquery-price-slider.js') }}"></script>
    <!-- scrollUp JS
============================================ -->
    <script type="text/javascript" src="{{ url('js/jquery.scrollUp.min.js') }}"></script>
    <!-- plugins JS
============================================ -->
    <script type="text/javascript" src="{{ url('js/plugins.js') }}"></script>
    <!-- Nevo Slider js
============================================ -->
    <script type="text/javascript" src="{{ url('lib/custom-slider/js/jquery.nivo.slider.js') }}"></script>
    <script type="text/javascript" src="{{ url('lib/custom-slider/home.js') }}"></script>
    <!-- Elevate Zoom js
============================================ -->
    <script type="text/javascript" src="{{ url('js/jquery.elevateZoom-3.0.8.min.js') }}"></script>
    <!-- main JS
============================================ -->
    <script type="text/javascript" src="{{ url('js/main.js') }}"></script>
</body>

</html>