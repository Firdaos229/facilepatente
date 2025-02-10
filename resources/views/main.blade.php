<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="description" content="" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="apple-touch-icon" href="apple-touch-icon.html" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/logo 3.png') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.carousel.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/slick.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/off-canvas.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/fonts/linea-fonts.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/fonts/flaticon.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/rsmenu-main.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/rs-spacing.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}" />
    <title>@yield('title')</title>
</head>

<body class="defult-home">
    <!--Preloader area start here-->
    <div id="loader" class="loader green-color">
        <div class="loader-container">
            <div class="loader-icon">
                <img src="{{ asset('assets/images/logo 3.png') }}" alt="" />
            </div>
        </div>
    </div>
    <!--Preloader area End here-->

    <!--Full width header Start-->
    <div class="full-width-header header-style1 home1-modifiy home12-modifiy">
        <!--Header Start-->
        <header id="rs-header" class="rs-header">
            <!-- Menu Start -->
            <div class="menu-area menu-sticky">
                <div class="container">
                    <div class="row y-middle">
                        <div class="col-lg-2">
                            <div class="logo-cat-wrap">
                                <div class="logo-part">
                                    <a href="{{ route('index') }}">
                                        <img src="{{ asset('assets/images/logo 1.png') }}" alt="" />
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 text-right">
                            <div class="rs-menu-area">
                                <div class="main-menu">
                                    <div class="mobile-menu">
                                        <a class="rs-menu-toggle">
                                            <i class="fa fa-bars"></i>
                                        </a>
                                    </div>
                                    <nav class="rs-menu">
                                        <ul class="nav-menu">
                                            <li class="rs-mega-menu mega-rs menu-item-no-children current-menu-item">
                                                <a href="{{ route('index') }}">Casa</a>
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a href="#">Patente di guida</a>
                                                <ul class="sub-menu">
                                                    <li><a href="{{ route('course') }}">I nostri corsi</a></li>
                                                    <li><a href="{{ route('tarif') }}">Tariffe</a></li>
                                                    <li><a href="{{ route('permis') }}">Patenti per moto</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-no-children">
                                                <a href="{{ route('about') }}">Chi siamo</a>
                                            </li>

                                            <li class="menu-item-no-children">
                                                <a href="{{ route('contact') }}">Contattateci</a>
                                            </li>

                                            <li class="menu-item-no-children">
                                                <a href="{{ route('faq') }}">Faq</a>
                                            </li>
                                        </ul>
                                        <!-- //.nav-menu -->
                                    </nav>
                                </div>
                                <!-- //.main-menu -->
                            </div>
                        </div>
                        <div class="col-lg-2 text-right">
                            <div class="expand-btn-inner d-flex align-items-center justify-content-end">
                                <!-- Icône de recherche -->
                                <a class="hidden-xs rs-search mr-3" data-target=".search-modal" data-toggle="modal"
                                    href="#">
                                    <i class="flaticon-search"></i>
                                </a>

                                <!-- Bouton d'inscription -->
                                <div class="banner-btn wow fadeInUp" data-wow-delay="1500ms"
                                    data-wow-duration="2000ms">
                                    <a class="readon green-banner" href="{{ route('check_serial') }}">Verifica</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Menu End -->
        </header>
        <!--Header End-->
    </div>
    <!--Full width header End-->
    <div class="main-content">

        <div>
            @yield('content')
        </div>


        <!-- Newsletter section start -->
        <div class="rs-newsletter style1 green-color mb--90 sm-mb-0 sm-pb-70">
            <div class="container">
                <div class="newsletter-wrap">
                    <div class="row y-middle">
                        <div class="col-lg-6 col-md-12 md-mb-30">
                            <div class="content-part">
                                <div class="sec-title">
                                    <div class="title-icon md-mb-15">
                                        <img src="{{ asset('assets/images/white-newsletter3.png') }}"
                                            alt="images" />
                                    </div>
                                    <h2 class="title mb-0 white-color">
                                        Iscriviti alla nostra newsletter !
                                    </h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <form class="newsletter-form">
                                <input type="email" name="email" placeholder="E-mail" required="" />
                                <button type="submit">Iscriviti ora !</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Newsletter section end -->
    </div>
    <!-- Main content End -->

    <!-- Footer Start -->
    <footer id="rs-footer" class="rs-footer home9-style home12-style">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-12 col-sm-12 footer-widget md-mb-50">
                        <div class="footer-logo mb-30">
                            <a href="{{ route('index') }}"><img src="{{ asset('assets/images/logo 1.png') }}"
                                    alt="" /></a>
                        </div>
                        <div class="textwidget pr-60 md-pr-15">
                            <p>
                                Odriverr è un’autoscuola di qualità, approvata dalle
                                prefetture e certificata Qualiopi da AFNOR. In quanto ente di
                                formazione Qualiopi, la nostra autoscuola soddisfa i 21
                                criteri di qualità richiesti per ottenere i finanziamenti CPF.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12 col-sm-12 footer-widget md-mb-50">
                        <h3 class="widget-title">Contatti</h3>
                        <ul class="address-widget">
                            <li>
                                <i class="flaticon-location"></i>
                                <div class="desc">
                                    374 William S Canning Blvd, River MA 2721, USA
                                </div>
                            </li>
                            <li>
                                <i class="flaticon-call"></i>
                                <div class="desc">
                                    <a href="tel:(+880)155-69569">(+880)155-69569</a>
                                </div>
                            </li>
                            <li>
                                <i class="flaticon-email"></i>
                                <div class="desc">
                                    <a href="mailto:support@rstheme.com">support@rstheme.com</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-12 col-sm-12 pl-50 md-pl-15 footer-widget md-mb-50">
                        <h3 class="widget-title">I nostri servizi</h3>
                        <ul class="site-map">
                            <li><a href="{{ route('about') }}">Chi siamo</a></li>
                            <li><a href="{{ route('course') }}">I nostri corsi</a></li>
                            <li><a href="{{ route('tarif') }}">Le nostre tariffe</a></li>
                            <li><a href="{{ route('permis') }}">Patenti per motocicli</a></li>
                            <li><a href="{{ route('contact') }}">Contattateci</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-12 col-sm-12 pl-50 md-pl-15 footer-widget md-mb-50">
                        <h3 class="widget-title">Link utili</h3>
                        <ul class="site-map">
                            <li><a href="{{ route('politique') }}">Informazioni legali</a></li>
                            <li><a href="{{ route('condition') }}">Politica di riservatezza</a></li>
                            <li><a href="{{ route('politique') }}">Politica sui cookie</a></li>
                            <li><a href="{{ route('politique') }}">Risorse</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row y-middle">
                    <div class="col-lg-6 md-mb-20">
                        <div class="copyright">
                            <p>
                                &copy; 2024 Tutti i diritti riservati. Design di
                                <a href="https://www.avalonsecure.org/">AVALON SECURE</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer End -->

    <!-- start scrollUp  -->
    <div id="scrollUp" class="green-color">
        <i class="fa fa-angle-up"></i>
    </div>
    <!-- End scrollUp  -->

    <!-- Search Modal Start -->
    <div aria-hidden="true" class="modal fade search-modal" role="dialog" tabindex="-1">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span class="flaticon-cross"></span>
        </button>
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="search-block clearfix">
                    <form>
                        <div class="form-group">
                            <input class="form-control" placeholder="Search Here..." type="text" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Search Modal End -->

    <script src="{{ asset('assets/js/modernizr-2.8.3.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/rsmenu-main.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.nav.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/skill.bars.jquery.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.mb.YTPlayer.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/tilt.jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/js/contact.form.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
