<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-0E1P706JRR"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-0E1P706JRR');
    </script>

    <title>Rentaly - Multipurpose Vehicle Car Rental Website Template</title>
    <link rel="icon" href="{{ asset('welcome/images/icon.png') }}" type="image/gif" sizes="16x16">
    <meta charset="UTF-8">
    <meta http-equiv="Content-Language" content="en">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Rentaly - Multipurpose Vehicle Car Rental Website Template" name="description">
    <meta content="" name="keywords">
    <meta content="" name="author">
    <!-- CSS Files
    ================================================== -->
    <link href="{{ asset('welcome/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" id="bootstrap">
    <link href="{{ asset('welcome/css/mdb.min.css') }}" rel="stylesheet" type="text/css" id="mdb">
    <link href="{{ asset('welcome/css/plugins.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('welcome/css/style.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('welcome/css/coloring.css') }}" rel="stylesheet" type="text/css">
    <!-- color scheme -->
    <link id="colors" href="{{ asset('welcome/css/colors/scheme-08.css') }}" rel="stylesheet" type="text/css" />
    <!-- countdown -->
    <link id="colors" href="{{ asset('welcome/css/jquery.countdown.css') }}" rel="stylesheet" type="text/css" />
</head>

<body class="dark-scheme">
    <div id="wrapper">

        <!-- page preloader begin -->
        <div id="de-preloader"></div>
        <!-- page preloader close -->

        <!-- content begin -->
        <div class="no-bottom no-top" id="content">
            <div id="top"></div>
            <div class="no-bottom no-top" id="content">
                <div id="top"></div>
                <section id="section-hero" class="jarallax text-light pt50 pb50 vertical-center" aria-label="section">
                    <img src="{{ asset('welcome/images/background/11.jpg') }}" class="jarallax-img" alt="">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <h1>Something's missing.</h1>
                                <p>Looks like this page is missing. Don't worry though, our best team is on the case.
                                </p>
                                <a href="{{ route('home.index') }}" class="btn-main">Go Back</a>
                                <div class="spacer-10"></div>
                            </div>
                            <div class="col-lg-6 text-center">
                                <h1 class="s2">
                                    <span class="c1">404</span>
                                    <span class="spacer-single"></span>
                                    <span class="c3">Not Found</span>
                                </h1>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <!-- content close -->
    </div>

    <!-- Javascript Files
    ================================================== -->
    <script src="{{ asset('welcome/js/plugins.js') }}"></script>
    <script src="{{ asset('welcome/js/designesia.js') }}"></script>

</body>

</html>
