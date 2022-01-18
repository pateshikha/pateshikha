<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"><![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"><![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"><![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>im Event</title>
    <!-- CSS only -->
    <!-- JavaScript Bundle with Popper -->
    <!-- Favicons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144"
        href="{{ asset('') }}assets1/ico/apple-touch-icon-144-precomposed.png">
    <link rel="shortcut icon" href="{{ asset('') }}assets1/ico/favicon.ico">

    <!-- CSS Global -->
    <link href="{{ asset('') }}assets1/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('') }}assets1/plugins/fontawesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ asset('') }}assets1/plugins/bootstrap-select/bootstrap-select.min.css" rel="stylesheet">
    <link href="{{ asset('') }}assets1/plugins/owlcarousel2/carousel/owl.carousel.min.css" rel="stylesheet">
    <link href="{{ asset('') }}assets1/plugins/owlcarousel2/carousel/owl.theme.default.min.css" rel="stylesheet">
    <link href="{{ asset('') }}assets1/plugins/prettyphoto/css/prettyPhoto.css" rel="stylesheet">
    <link href="{{ asset('') }}assets1/plugins/animate/animate.min.css" rel="stylesheet">
    <link href="{{ asset('') }}assets1/plugins/countdown/jquery.countdown.css" rel="stylesheet">

    <link href="{{ asset('') }}assets1/css/theme.css" rel="stylesheet">
    <link href="{{ asset('') }}assets1/css/custom.css" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="{{ asset('') }}assets1/plugins/iesupport/html5shiv.js"></script>
    <script src="{{ asset('') }}assets1/plugins/iesupport/respond.min.js"></script>
    <![endif]-->
</head>

<style>
    .mybtncls {
        padding: 7px 13px 2px 13px;
        position: relative;
        border-radius: 5px;
    }

    body {
        /* font-family: Arial, Helvetica, sans-serif; */
        font-family: math;
    }

    * {
        box-sizing: border-box;
    }

    /* Button used to open the contact form - fixed at the bottom of the page */
    .open-button {
        background-color: #555;
        color: white;
        padding: 16px 20px;
        border: none;
        cursor: pointer;
        opacity: 0.8;
        position: fixed;
        bottom: 23px;
        right: 28px;
        width: 280px;
    }

    /* The popup form - hidden by default */
    .form-popup {
        display: none;
        position: fixed;
        bottom: 0;
        right: 15px;
        border: 3px solid #f1f1f1;
        z-index: 9;
    }

    /* Add styles to the form container */
    .form-container {
        max-width: 400px;
        padding-left: 20px;
        padding-right: 25px;
        padding-top: 10px;
        padding-bottom: 10px;
        /* padding: 25px 10px 21px 10px; */
        background-color: white;
    }

    /* Full-width input fields */
    .form-container input[type=text],
    .form-container input[type=password] {
        width: 100%;
        padding: 5px;
        margin: 0px 0 14px 0;
        border: none;
        background: #f1f1f1;
    }

    /* When the inputs get focus, do something */
    .form-container input[type=text]:focus,
    .form-container input[type=password]:focus {
        background-color: #ddd;
        outline: none;
    }

    /* Set a style for the submit/login button */
    .form-container .btn {
        background-color: #04AA6D;
        color: white;
        padding: 12px 20px;
        border: none;
        cursor: pointer;
        width: 30%;
        margin-bottom: 10px;
        opacity: 0.8;
    }

    /* Add a red background color to the cancel button */

    /* Add some hover effects to buttons */

</style>

<body id="home" class="wide body-light">

    <!-- Preloader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner"></div>
        </div>
    </div>

    <!-- Wrap all content -->
    <div class="wrapper">

        <!-- HEADER -->
        <header class="header fixed">
            <div class="container">
                <div class="header-wrapper clearfix">

                    <!-- Logo -->
                    <div class="logo">
                        <a href="#home" class="scroll-to">
                            <span class="fa-stack">
                                <i class="fa logo-hex fa-stack-2x"></i>
                                <i class="fa logo-fa fa-map-marker fa-stack-1x"></i>
                            </span>
                            im Event
                        </a>
                    </div>
                    <!-- /Logo -->
                    <style>
                        .imgicon {
                            width: 28px;
                            height: auto;
                            margin-top: -9px;
                            margin-right: 7px;
                        }

                    </style>
                    <!-- Navigation -->
                    <div id="mobile-menu"></div>
                    <nav class="navigation closed clearfix">
                        <a href="#" class="menu-toggle btn"><i class="fa fa-bars"></i></a>
                        <ul class="sf-menu nav">

                            @if (Route::has('login'))
                                @auth
                                    @if (Auth::user()->role === '0')
                                        <li><a href="{{ route('contest-Registration') }}"> ContestRegister</a></li>
                                        <li class="menu-item menu-item-has-children parent">
                                            <a title="My Account" href="#"><img
                                                    src="{{ asset('') }}assets1/img/user-icon.png"
                                                    class="imgicon" alt="profile-img">
                                                {{ Auth::user()->name }}</a>
                                            <ul class="submenu curency">
                                                <li class="menu-item">
                                                    <a title="Dashboard" href="{{ route('frontend.userDashboard') }}"
                                                        style=" color: #080808;font-size: 12px;font-weight: bold;">User
                                                        Dashboard</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="{{ route('logout') }}"
                                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                                        style=" color: #080808;font-size: 12px;font-weight: bold;">Logout</a>
                                                </li>
                                                <form id="logout-form" method="POST" action="{{ route('logout') }}">
                                                    @csrf
                                                </form>
                                            </ul>
                                        </li>

                                    @endif
                                @else

                                    <li class="active"><a href="#home">Home</a></li>
                                    <li><a href="#about">About</a></li>
                                    <li><a href="#schedule">Contest</a></li>
                                    <li><a href="#sponsors">Contact Us</a></li>

                                    <li class="menu-item"><a title="Register or Login"
                                            href="{{ route('login') }}">Login</a></li>
                                    <li class="menu-item"><a title="Register or Login"
                                            href="{{ route('register') }}">Register</a></li>
                                @endif
                                @endif
                            </ul>
                        </nav>
                        <!-- /Navigation -->

                    </div>
                </div>
            </header>
            <!-- /HEADER -->

            {{-- user Ragistraion --}}
            <div class="main div"></div>
            <!-- Content area -->
            <div class="content-area">


                <div id="main">


                </div>


                <div>@yield('content')</div>

                <footer class="footer">
                    <div class="footer-meta">
                        <div class="container text-center">
                            <div class="clearfix">
                                <ul class="social-line list-inline">
                                    <li data-animation="flipInY" data-animation-delay="100"><a href="#"
                                            class="twitter"><i class="fa fa-twitter"></i></a></li>
                                    <li data-animation="flipInY" data-animation-delay="200"><a href="#"
                                            class="dribbble"><i class="fa fa-dribbble"></i></a></li>
                                    <li data-animation="flipInY" data-animation-delay="300"><a href="#"
                                            class="facebook"><i class="fa fa-facebook"></i></a></li>
                                    <li data-animation="flipInY" data-animation-delay="400"><a href="#"
                                            class="google"><i class="fa fa-google-plus"></i></a></li>
                                    <li data-animation="flipInY" data-animation-delay="500"><a href="#"
                                            class="instagram"><i class="fa fa-instagram"></i></a></li>
                                    <li data-animation="flipInY" data-animation-delay="600"><a href="#"
                                            class="pinterest"><i class="fa fa-pinterest"></i></a></li>
                                    <li data-animation="flipInY" data-animation-delay="700"><a href="#"
                                            class="skype"><i class="fa fa-skype"></i></a></li>
                                </ul>
                            </div>
                            <span class="copyright" data-animation="fadeInUp" data-animation-delay="100">&copy; 2014 im
                                Event &#8212; An One Page Event Manager Theme made with passion by jThemes Studio</span>
                        </div>
                    </div>
                </footer>
                <!-- /FOOTER -->

                <div class="to-top"><i class="fa fa-angle-up"></i></div>

            </div>
            <!-- /Wrap all content -->

            <!-- JS Global -->

            <!--[if lt IE 9]><script src="{{ asset('') }}assets1/plugins/jquery/jquery-1.11.1.min.js"></script><![endif]-->
            <!--[if gte IE 9]><!--><script src="{{ asset('') }}assets1/plugins/jquery/jquery-2.1.1.min.js"></script>
            <!--<![endif]-->
            <script src="{{ asset('') }}assets1/plugins/modernizr.custom.js"></script>
            <script src="{{ asset('') }}assets1/plugins/bootstrap/js/bootstrap.min.js"></script>
            <script src="{{ asset('') }}assets1/plugins/bootstrap-select/bootstrap-select.min.js"></script>
            <script src="{{ asset('') }}assets1/plugins/superfish/js/superfish.js"></script>
            <script src="{{ asset('') }}assets1/plugins/prettyphoto/js/jquery.prettyPhoto.js"></script>
            <script src="{{ asset('') }}assets1/plugins/placeholdem.min.js"></script>
            <script src="{{ asset('') }}assets1/plugins/jquery.smoothscroll.min.js"></script>
            <script src="{{ asset('') }}assets1/plugins/jquery.easing.min.js"></script>

            <!-- JS Page Level -->
            <script src="{{ asset('') }}assets1/plugins/owlcarousel2/owl.carousel.min.js"></script>
            <script src="{{ asset('') }}assets1/plugins/waypoints/waypoints.min.js"></script>
            <script src="{{ asset('') }}assets1/plugins/countdown/jquery.plugin.min.js"></script>
            <script src="{{ asset('') }}assets1/plugins/countdown/jquery.countdown.min.js"></script>
            <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>

            <script src="{{ asset('') }}assets1/js/theme-ajax-mail.js"></script>
            <script src="{{ asset('') }}assets1/js/theme.js"></script>
            <script src="{{ asset('') }}assets1/js/custom.js"></script>

            <script type="text/javascript">
                jQuery(document).ready(function() {
                    theme.init();
                    theme.initMainSlider();
                    theme.initCountDown();
                    theme.initPartnerSlider();
                    theme.initTestimonials();
                    theme.initGoogleMap();
                });
                jQuery(window).load(function() {
                    theme.initAnimation();
                });

                jQuery(window).load(function() {
                    jQuery('body').scrollspy({
                        offset: 100,
                        target: '.navigation'
                    });
                });
                jQuery(window).load(function() {
                    jQuery('body').scrollspy('refresh');
                });
                jQuery(window).resize(function() {
                    jQuery('body').scrollspy('refresh');
                });

                jQuery(document).ready(function() {
                    theme.onResize();
                });
                jQuery(window).load(function() {
                    theme.onResize();
                });
                jQuery(window).resize(function() {
                    theme.onResize();
                });

                jQuery(window).load(function() {
                    if (location.hash != '') {
                        var hash = '#' + window.location.hash.substr(1);
                        if (hash.length) {
                            jQuery('html,body').delay(0).animate({
                                scrollTop: jQuery(hash).offset().top - 44 + 'px'
                            }, {
                                duration: 1200,
                                easing: "easeInOutExpo"
                            });
                        }
                    }
                });
            </script>

    </body>

    </html>
