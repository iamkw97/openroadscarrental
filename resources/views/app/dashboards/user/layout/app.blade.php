<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>
        @yield('usertitle')
    </title>
    <link rel="icon" href="images/icon.png" type="image/gif" sizes="16x16">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Rentaly - Multipurpose Vehicle Car Rental Website Template" name="description">
    <meta content="" name="keywords">
    <meta content="" name="author">
    <!-- CSS Files
    ================================================== -->
    <link href="{{ asset('welcome/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" id="bootstrap">
    <link href="{{ asset('welcome/css/mdb.min.css')}}" rel="stylesheet" type="text/css" id="mdb">
    <link href="{{ asset('welcome/css/plugins.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('welcome/css/style.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('welcome/css/coloring.css')}}" rel="stylesheet" type="text/css">
    <!-- color scheme -->
    <link id="colors" href="{{ asset('welcome/css/colors/scheme-08.css')}}" rel="stylesheet" type="text/css">
</head>

<body>
    <div id="wrapper">

        <!-- page preloader begin -->
        <div id="de-preloader"></div>
        <!-- page preloader close -->

        <!-- header begin -->
        <header class="transparent scroll-light has-topbar">
            <div id="topbar" class="topbar-dark text-light">
                <div class="container">
                    <div class="topbar-left xs-hide">
                        <div class="topbar-widget">
                            <div class="topbar-widget">
                                <div class="topbar-widget">
                                    <a href="tel:+003547737904">
                                        <i class="fa fa-phone"></i>
                                        00354 773 7904</a>
                                </div>
                                <div class="topbar-widget">
                                    <a href="mailto:openroadscarrental@gmail.com">
                                        <i class="fa fa-envelope"></i>
                                        openroadscarrental@gmail.com</a>
                                </div>
                                <div class="topbar-widget"><a href="#"><i class="fa fa-clock-o"></i>24/7 Customer Service</a></div>
                            </div>
                        </div>
                    </div>

                    <div class="topbar-right">
                        <div class="social-icons">
                            <a href="https://wa.me/003547737904"><i class="fa fa-whatsapp fa-lg"></i></a>
                                <a href="https://www.facebook.com/openroadscarrental"><i
                                        class="fa fa-facebook fa-lg"></i></a>
                            {{-- <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                            <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                            <a href="#"><i class="fa fa-youtube fa-lg"></i></a>
                            <a href="#"><i class="fa fa-instagram fa-lg"></i></a> --}}
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="de-flex sm-pt10">
                            <div class="de-flex-col">
                                <div class="de-flex-col">
                                    <!-- logo begin -->
                                    <div id="logo">
                                        <a href="{{route('home.index')}}">
                                            <img class="logo-1" src="{{ asset('welcome/images/orcr-logo.png') }}"
                                                alt="">
                                            <img class="logo-2" src="{{ asset('welcome/images/orcr-logo.png') }}"
                                                alt="">
                                        </a>
                                    </div>
                                    <!-- logo close -->
                                </div>
                            </div>
                            <div class="de-flex-col header-col-mid">
                                <ul id="mainmenu">
                                    <li>
                                        <a class="menu-item" href="{{ route('home.index') }}">Home</a>
                                    </li>
                                    <li>
                                        <a class="menu-item" href="{{ route('cars.index') }}">Cars</a>
                                    </li>
                                    <li>
                                        <a class="menu-item" href="{{ route('booking.index') }}">Booking</a>
                                    </li>
                                    <li>
                                        <a class="menu-item" href="{{ route('about.index') }}">About Us</a>
                                    </li>
                                    <li>
                                        <a class="menu-item" href="{{ route('contact.index') }}">Contact Us</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="de-flex-col">
                                <div class="menu_side_area">
                                    <div class="de-login-menu">

                                        <span id="de-click-menu-profile" class="de-menu-profile">
                                            <img src="{{ asset('welcome/images/profile/1.jpg')}}" class="img-fluid" alt="">
                                        </span>



                                        <div id="de-submenu-profile" class="de-submenu">
                                            <div class="d-name">
                                                <h4>Monica Lucas</h4>
                                                <span class="text-gray">monica@rentaly.com</span>
                                            </div>

                                            <div class="d-line"></div>

                                            <ul class="menu-col">
                                                <li><a href="account-dashboard.html"><i class="fa fa-home"></i>Dashboard</a></li>
                                                <li><a href="account-profile.html"><i class="fa fa-user"></i>My Profile</a></li>
                                                <li><a href="account-booking.html"><i class="fa fa-calendar"></i>My Orders</a></li>
                                                <li><a href="account-favorite.html"><i class="fa fa-car"></i>My Favorite Cars</a></li>
                                                <li><a href="#"><i class="fa fa-sign-out"></i>Sign Out</a></li>
                                            </ul>
                                        </div>
                                        <span id="menu-btn"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
            <!-- header close -->
        <!-- content begin -->
        <div class="no-bottom no-top zebra" id="content">
            <div id="top"></div>

            <!-- section begin -->
            <section id="subheader" class="jarallax text-light">
                <img src="{{ asset('welcome/images/background/14.jpg')}}" class="jarallax-img" alt="">
                    <div class="center-y relative text-center">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 text-center">
									<h1>
                                        @yield('usersubheader')
                                    </h1>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
            </section>
            <!-- section close -->

            <section id="section-cars" class="bg-gray-100">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 mb30">
                            <div class="card p-4 rounded-5">
                                <div class="profile_avatar">
                                    <div class="profile_img">
                                        <img src="{{ asset('welcome/images/profile/1.jpg')}}" alt="">
                                    </div>
                                    <div class="profile_name">
                                        <h4>
                                            Monica Lucas
                                            <span class="profile_username text-gray">monica@rentaly.com</span>
                                        </h4>
                                    </div>
                                </div>
                                <div class="spacer-20"></div>
                                <ul class="menu-col">
                                    @yield('usersidebar')
                                </ul>
                            </div>
                        </div>

                        @yield('userbody')
                    </div>
                </div>
            </section>


        </div>
        <!-- content close -->

        <a href="#" id="back-to-top"></a>

        <!-- footer begin -->
        <footer class="text-light">
            <div class="container">
                <div class="row g-custom-x">
                    <div class="col-lg-3">
                        <div class="widget">
                            <h5>About<span class="id-color">&nbsp; Open Roads Car Rental</span></h5>
                            <p>We're a family-based car rental company in South Iceland, providing top-quality cars at
                                affordable prices. Enjoy a hassle-free trip with our reliable and personalized services.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="widget">
                            <h5>Contact Info</h5>
                            <address class="s1">
                                <span>
                                    <i class="id-color fa fa-map-marker fa-lg"></i>
                                    Hveragerdi, Iceland
                                </span>
                                <span><i class="id-color fa fa-phone fa-lg">
                                    </i>00354 773 7904 / 00354 764 8773</span>
                                <span><i class="id-color fa fa-envelope-o fa-lg"></i>
                                    <a href="mailto:openroadscarrental@gmail.com">openroadscarrental@gmail.com /
                                        mayura.premasiri@yahoo.com</a></span>
                            </address>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <h5>Quick Links</h5>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="widget">
                                    <ul>
                                        <li><a href="{{ route('cars.index') }}">Cars</a></li>
                                        <li><a href="{{ route('booking.index') }}">Booking</a></li>
                                        <li><a href="{{ route('contact.index') }}">Contact Us</a></li>
                                        <li><a href="{{ route('about.index') }}">About Us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="widget">
                            <h5>Social Network</h5>
                            <div class="social-icons">
                                <a href="tel:+003547737904"><i class="fa fa-phone fa-lg"></i></a>
                                <a href="https://wa.me/003547737904"><i class="fa fa-whatsapp fa-lg"></i></a>
                                <a href="https://www.facebook.com/openroadscarrental"><i
                                        class="fa fa-facebook fa-lg"></i></a>
                                {{-- <a href="#"><i class="fa fa-linkedin fa-lg"></i></a>
                                <a href="#"><i class="fa fa-pinterest fa-lg"></i></a>
                                <a href="#"><i class="fa fa-rss fa-lg"></i></a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="subfooter">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="de-flex">
                                <div class="de-flex-col">
                                    <a href="https://realit.lk/">
                                        Copyright 2023 - Real IT PVT (LTD)
                                    </a>
                                </div>
                                <ul class="menu-simple">
                                    <li><a href="#">Terms &amp; Conditions</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer close -->

    </div>


    <!-- Javascript Files
    ================================================== -->
    <script src="{{ asset('welcome/js/plugins.js')}}"></script>
    <script src="{{ asset('welcome/js/designesia.js')}}"></script>

</body>

</html>
