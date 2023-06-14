<!DOCTYPE html>
<html lang="en">

<head>
    <title>
        @yield('usertitle')
    </title>
    <link rel="icon" href="images/icon.png" type="image/gif" sizes="16x16">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
  <meta http-equiv="Content-Language" content="en">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <meta name="description"
        content="Renting an open car road rental in Iceland allows you to experience Iceland's breathtaking landscapes in a unique way. Find the best Iceland car rental options and get tips for renting a car in Iceland.">
    <meta name="keywords"
        content="Iceland car rental,
                car rental Iceland,
                renting a car in Iceland,Iceland people,
                Icelandic culture,
                Icelandic people physical traits,black sand beach Iceland,
                black beach Iceland,
                Iceland black sand beach,lephant rock Iceland,
                Iceland elephant rock,
                elephant Iceland Iceland,
                KEF Airport,
                Reykjavik,
                Open Roads Car Rental">
    <meta name="author" content="openroadscarrental.com">

    <!-- CSS Files
    ================================================== -->
    <link href="{{ asset('welcome/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" id="bootstrap">
    <link href="{{ asset('welcome/css/mdb.min.css') }}" rel="stylesheet" type="text/css" id="mdb">
    <link href="{{ asset('welcome/css/plugins.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('welcome/css/style.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('welcome/css/coloring.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('admin/plugins/datatable/css/dataTables.bootstrap5.min.css')}}" rel="stylesheet" />
    <script src="{{asset('js/jquery-3.7.0.min.js')}}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.7.5/sweetalert2.min.css"
        integrity="sha512-InYSgxgTnnt8BG3Yy0GcpSnorz5gxHvT6OEoRWj91Gg+RvNdCiAharnBe+XFIDS754Kd9TekdjXw3V7TAgh6Vw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
	<!-- color scheme -->
    <link id="colors" href="{{ asset('welcome/css/colors/scheme-08.css') }}" rel="stylesheet" type="text/css">
    <style>
        .frmbtnlgout {
            padding: 5px 10px;
            display: block;
            color: #333333;
            -webkit-border-radius: 6;
            -moz-border-radius: 6;
            border-radius: 6px;
            background-color: #ffffff;
            text-decoration: none;
            border: none;
            font-weight: 500;
        }

        .frmbtnlgout i {
            color: #619FFF;
        }
    </style>
</head>

<body>
    <div id="wrapper">
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
                                <div class="topbar-widget"><a href="#"><i class="fa fa-clock-o"></i>24/7 Customer
                                        Service</a></div>
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
                                        <a href="{{ route('home.index') }}">
                                            <img class="logo-1" src="{{ asset('welcome/images/logo.png') }}"
                                                alt="">
                                            <img class="logo-2" src="{{ asset('welcome/images/logo.png') }}"
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
                                            <img src="{{ asset('welcome/images/profile/1.jpg') }}" class="img-fluid"
                                                alt="">
                                        </span>

                                        <div id="de-submenu-profile" class="de-submenu">
                                            <div class="d-name">
                                                <h4>
                                                    {{ auth()->user()->fullname }}
                                                </h4>
                                                <span class="text-gray">
                                                    {{ auth()->user()->email }}
                                                </span>
                                            </div>

                                            <div class="d-line"></div>

                                            <ul class="menu-col">
                                                <li><a href="{{ route('user.home') }}"><i
                                                            class="fa fa-home"></i>Home</a></li>
                                                <li><a href="{{ route('user.bookings') }}"><i
                                                            class="fa fa-calendar"></i>My Bookings</a></li>
                                                <li><a href="{{ route('user.cars') }}"><i
                                                            class="fa fa-car"></i>Cars</a></li>
                                                <li><a href="{{ route('user.profile') }}"><i
                                                            class="fa fa-user"></i>Profile</a></li>
                                                <li>
                                                    <form action="{{ route('logout') }}" method="post">
                                                        @csrf
                                                        @method('post')
                                                        <button class="frmbtnlgout"> <i
                                                                class="fa fa-sign-out"></i>Sign Out</button>
                                                    </form>
                                                </li>
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
                <img src="{{ asset('welcome/images/background/14.jpg') }}" class="jarallax-img" alt="">
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
                                        <img src="{{ asset('welcome/images/profile/1.jpg') }}" alt="">
                                    </div>
                                    <div class="profile_name">
                                        <h4>
                                            {{ auth()->user()->fullname }}
                                            <span class="profile_username text-gray">
                                                {{ auth()->user()->email }}</span>
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
    <script src="{{ asset('welcome/js/plugins.js') }}"></script>
    <script src="{{ asset('welcome/js/designesia.js') }}"></script>
    <script src="{{ asset('admin/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
	<script src="{{ asset('admin/plugins/datatable/js/dataTables.bootstrap5.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.7.5/sweetalert2.all.min.js"
    integrity="sha512-2JsZvEefv9GpLmJNnSW3w/hYlXEdvCCfDc+Rv7ExMFHV9JNlJ2jaM+uVVlCI1MAQMkUG8K83LhsHYx1Fr2+MuA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>
