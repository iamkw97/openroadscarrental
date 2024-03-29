@extends('app.welcome.layout.app')

@section('googletag')
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
@endsection

@section('title')
    Car rental in Iceland | Rent a car at KEF airport or in Reykjavik
@endsection

@section('cananonical_tag')
    <!--<meta http-equiv="refresh" content="5; url=https://openroadscarrental.com">-->
    <link rel="canonical" href="https://openroadscarrental.com/">
@endsection

@section('meta_dsc')
    <meta name="description"
        content="Explore Iceland at your own pace with a car rental from Open Roads Car Rental. Book your Iceland car rental today and start your adventure!">
@endsection

@section('meta_tgs')
    <meta name="keywords"
        content="Car rental Iceland, Car hire Iceland, Reykjavik, Blue Lagoon, Golden Circle, Vik, Geysir, Kirkjufell, Akureyri, Skaftafell, Hiking in Iceland, Geysers in Iceland, Waterfalls in Iceland, Iceland attractions, Iceland tourism, Iceland travel, Explore Iceland, Must-visit places in Iceland, Iceland adventure, Iceland natural wonders, Renting cars in iceland, Rent a car in iceland, Iceland car rental, Van rental Reykjavik, Northmound, 4x4 car rental Iceland, KEF Airport, Cheap car rental Iceland, Icelandic culture, Icelandic people physical traits, black sand beach Iceland, black beach Iceland, Iceland black sand beach, elephant rock Iceland, Iceland elephant rock, elephant Island Iceland">
    {{-- meta opengraph --}}
    <meta property="og:url" content="https://openroadscarrental.com/" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Car rental in Iceland | Rent a car at KEF airport or in Reykjavik" />
    <meta property="og:description"
        content="Experience Iceland, rent a car from Open Roads Car Rental at Keflavik International Airport or in Reykjavik. We offer quality service and the best prices." />
    <meta property="og:video" content="https://www.facebook.com/openroadscarrental/videos/281783694224604" />
@endsection

@section('fbpage_body')
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v17.0"
        nonce="5QWrQQc3"></script>
@endsection

@section('welcomebody')
    <!-- content begin -->
    <style>
        #mainmenu a:hover {
            color: #3273ff;
            transform: scale(1.2)
        }

        .shadow-soft {
            background: linear-gradient(to bottom, rgb(255, 255, 255, .8) 100%, #000 100%)
        }

        .radio-img img:hover {
            transition: transform .2s;
            transform: scale(1.2)
        }

        .dark-image {
            filter: brightness(70%)
        }

        @media (max-width:767px) {
            .de_form {
                display: none
            }
        }

        .home_inputs {
            border: none;
            border-bottom: 1px solid #ccc;
            outline: none;
            width: 100%
        }

        .home_inputs_label {
            font-size: 90%;
            font-weight: 700;
            margin-bottom: 0.5rem;
        }

        .home_input_error_msg {
            font-size: 80%;
            color: red;
        }
    </style>
    <div class="no-bottom no-top" id="content">
        <div id="top"></div>
        <section id="section-hero" aria-label="section" class="jarallax full-height vertical-center">
            <img fetchpriority="high" src="{{ asset('welcome/images/background/icelandbg3.webp') }}"
                class="jarallax-img dark-image" alt="openroadscarrental-welcome-background">
            <div class="container position-relative z1000" style="position: relative; top:70px;">
                <div class="row align-items-center">
                    <div class="col-lg-5 text-light">
                        <h4><span>Rent the Adventure: </span></h4>
                        <div class="spacer-10"></div>
                        <h1 class="mb-2">Explore the <span style="color:rgb(245, 245, 245);">Iceland</span> on Your Terms
                        </h1>
                        <div class="spacer-10"></div>
                        <p class="lead">Whether you're planning a weekend getaway, a business trip, or simply need a car
                            for everyday use, we've got you covered. Our wide range of vehicles suits every occasion and
                            budget.</p>
                        <p style="font-size: 120%"><strong>ALL our prices include
                                CDW, SCDW,TP,GP, SAAP Insurances, unlimited mileage,GPS and studded tires during
                                winter</strong></p>
                    </div>

                    <div class="col-lg-7 mb-5">
                        <div class="spacer-single sm-hide"></div>
<div class="my-4">
    <form name="form_home_input" id='form_home_input' method="post">
        <div class="col-md-12">
            <div class="row my-1">
                <div class="col-md-6">
                    <div class="p-2 my-1 rounded-3 shadow-soft">
                        <p class="home_inputs_label">Pick Up Location</p>
                        <select class="home_inputs form-control" name="home_pickup_location"
                            id="home_pickup_location" placeholder="Enter your pickup location"
                            autocomplete="off" class="form-control">
                            <option selected disabled>Select Location</option>
                            <option value="KEF-AIRPORT">KEF AIRPORT</option>
                            <option value="REYKJAVIK">REYKJAVIK</option>
                        </select>
                        <div class="home_input_error_msg" id="home_pickup_location_error"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="p-2 my-1 rounded-3 shadow-soft">
                        <p class="home_inputs_label">Drop Off Location</p>
                        <select class="home_inputs form-control" name="home_dropoff_location"
                            id="home_dropoff_location" placeholder="Enter your pickup location"
                            autocomplete="off" class="form-control">
                            <option selected disabled>Select Location</option>
                            <option value="REYKJAVIK">REYKJAVIK</option>
                            <option value="KEF-AIRPORT">KEF AIRPORT</option>
                            <option value="same_location">[Return to the same location]</option>
                        </select>
                        <div class="home_input_error_msg" id="home_dropoff_location_error"></div>
                    </div>
                </div>
            </div>

            <div class="row  my-1">
                <div class="col-md-6">
                    <div class="p-2 my-1 rounded-3 shadow-soft">
                        <p class="home_inputs_label">Pick Up Date</p>
                        <div class="date-time-field">
                            <input class="home_inputs form-control" type="date" id="home_pickup_date"
                                name="home_pickup_date">
                            <div class="home_input_error_msg" id="home_pickup_date_error"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="p-2 my-1 rounded-3 shadow-soft">
                        <p class="home_inputs_label">Return Date</p>
                        <div class="date-time-field">
                            <input class="home_inputs form-control" type="date" id="home_return_date"
                                name="home_return_date">
                            <div class="home_input_error_msg" id="home_return_date_error"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row  mt-2 mb-2">
                <div class="col-md-6">
                    <div class="p-2 my-1 rounded-3 shadow-soft">
                        <p class="home_inputs_label">Pick Up Time</p>
                        <div class="date-time-field">
                            <input class="home_inputs form-control" type="time"
                                name="home_pickup_time" id="home_pickup_time">
                            <div class="home_input_error_msg" id="home_pickup_time_error"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="p-2 my-1 rounded-3 shadow-soft">
                        <p class="home_inputs_label">Return Time</p>
                        <div class="date-time-field">
                            <input class="home_inputs form-control" type="time"
                                name="home_return_time" id="home_return_time">
                            <div class="home_input_error_msg" id="home_return_time_error"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-md-12">
                    <button type='button' id='btn_home_input' class="btn-main pull-right"
                        style="background-color:#004EC2">
                        Find a Vehicle
                    </button>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </form>
</div>
                    </div>
                </div>
            </div>


        </section>

        <section aria-label="section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 offset-lg-3 text-center">
                        <h2>Our Features</h2>
                        <p>Seamless car rental. Wide vehicle selection, online booking, and contactless options. Plus, enjoy
                            customer support, roadside assistance, insurance, GPS, and airport services for added
                            convenience. Rent with us now.</p>
                        <div class="spacer-20"></div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-lg-3">
                        <div class="box-icon s2 p-small mb20 wow fadeInRight" data-wow-delay=".5s">
                            <i class="fa bg-color fa-trophy"></i>
                            <div class="d-inner">
                                <h4>First class services</h4>
                                Offer multiple channels for customer support, including email, phone, and chat. Provide a
                                FAQ section to answer common questions.
                            </div>
                        </div>
                        <div class="box-icon s2 p-small mb20 wow fadeInL fadeInRight" data-wow-delay=".75s">
                            <i class="fa bg-color fa-road"></i>
                            <div class="d-inner">
                                <h4>Flexible rental terms</h4>
                                Offer short-term and long-term rental options to accommodate different travel needs.
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <img src="{{ asset('welcome/images/cars/kuga_mca_sport.webp') }}"
                            alt="openroadscarrental-welcome-background" class="img-fluid wow fadeInUp">
                    </div>

                    <div class="col-lg-3">
                        <div class="box-icon s2 d-invert p-small mb20 wow fadeInL fadeInLeft" data-wow-delay="1s">
                            <i class="fa bg-color fa-tag"></i>
                            <div class="d-inner">
                                <h4>Online booking</h4>
                                Allow customers to reserve their rental car online, with options to choose pickup and
                                drop-off locations, dates, and times.
                            </div>
                        </div>
                        <div class="box-icon s2 d-invert p-small mb20 wow fadeInL fadeInLeft" data-wow-delay="1.25s">
                            <i class="fa bg-color fa-map-pin"></i>
                            <div class="d-inner">
                                <h4>Roadside assistance</h4>
                                Provide customers with 24/7 roadside assistance in case of breakdowns, accidents, or other
                                emergencies.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="text-light jarallax">
            <img src="{{ asset('welcome/images/background/back0.webp') }}" class="jarallax-img dark-image"
                alt="openroadscarrental-welcome-background">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeInRight">
                        <h2>Just tell us <span class="id-color">where you need to go,</span> and we'll take care of the
                            rest!</h2>
                    </div>
                    <div class="col-lg-6 wow fadeInLeft">
                        Iceland: A land of dramatic landscapes, geothermal wonders, and captivating culture. From cascading
                        waterfalls to black sand beaches, the country's natural beauty is awe-inspiring. Explore glaciers,
                        soak in geothermal hot springs, and witness the mesmerizing Northern Lights. Immerse yourself in
                        Reykjavik's vibrant arts scene, indulge in delicious cuisine, and delve into Icelandic folklore.
                        With its compact size and well-developed infrastructure, Iceland offers a unique and unforgettable
                        travel experience for all adventurers.
                    </div>
                </div>
                <div class="spacer-double"></div>
            </div>
        </section>

        <section id="section-cars">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 offset-lg-3 text-center">
                        <h2>Our Vehicle Fleet</h2>
                        <p>We provide a wide range of vehicles to suit any travel need, from compact cars to spacious SUVs.
                            With our meticulously maintained fleet, you can enjoy a safe and comfortable ride wherever your
                            journey takes you.</p>
                        <div class="spacer-20"></div>
                    </div>

                    <div id="items-carousel" class="owl-carousel wow fadeIn">
                        @forelse ($cars_for_gallery as $item)
                            <div class="col-lg-12">
                                <div class="de-item mb30">
                                    <div class="d-img">
                                        <img src="{{ asset('img/cars/' . $item->vehicle_image) }}" class="img-fluid"
                                            style="width: 387px; height: 271px;">
                                    </div>
                                    <div class="d-info">
                                        <div class="d-text">
                                            <h4>{{ $item->displaying_name }}</h4>

                                            <div class="d-atr-group">
                                                <span class="d-atr"><img
                                                        src="{{ asset('welcome/images/icons/1.svg') }}">{{ $item->no_of_seats }}</span>
                                                <span class="d-atr"><img
                                                        src="{{ asset('welcome/images/icons/2.svg') }}">{{ $item->no_of_suitcases }}</span>
                                                <span class="d-atr"><img
                                                        src="{{ asset('welcome/images/icons/4.svg') }}">{{ $item->category }}</span>
                                            </div>
                                            <div class="d-price">
                                                Daily rate from
                                                <span>{{ str_replace(',', '.', number_format($item->apr2sep_isk_cost_rental_per_day)) }}
                                                    ISK</span>
                                                Approximately<H4>USD
                                                    &nbsp;{{ $item->apr2sep_usd_cost_rental_per_day }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    EUR
                                                    &nbsp;{{ $item->apr2sep_eur_cost_rental_per_day }} </H4>
                                                <a class="btn-main RentNowCar" id={{ $item->id }}>Rent Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="col-lg-12">
                                No vehicle is found!
                            </div>
                        @endforelse
                    </div>

                </div>
            </div>
        </section>

        <section class="text-light jarallax" aria-label="section">
            <img src="{{ asset('welcome/images/background/back1.webp') }}" alt="openroadscarrental-welcome-background"
                class="jarallax-img">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-light">
                        <div class="container-timeline">
                            <ul>
                                <li>
                                    <p style="font-size: 120%; font-weight: 700;">Choose a vehicle</p>
                                    <p><strong>Browse our selection of vehicles and choose the one that suits your travel
                                            needs.</strong></p>
                                </li>
                                <li>
                                    <p style="font-size: 120%; font-weight: 700;">Pick location &amp; date</p>
                                    <p><strong>Select your preferred pickup location and date to book your ride in just a
                                            few
                                            clicks.
                                        </strong></p>
                                </li>
                                <li>
                                    <p style="font-size: 120%; font-weight: 700;">Make a booking</p>
                                    <p><strong>Book your ride in just a few clicks - it's that easy!</strong>
                                    </p>
                                </li>
                                <li>
                                    <p style="font-size: 120%; font-weight: 700;">Sit back &amp; relax</p>
                                    <p><strong>Get ready to hit the road! Sit back and relax while we prepare your ride for
                                            the
                                            ultimate driving experience.</strong>
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="section-news">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 offset-lg-3 text-center">
                        <h1>Iceland Destinations</h1>
                        <p>Discover the untamed beauty of Iceland's most famous places, where fire and ice collide in a
                            mesmerizing dance. Iceland awaits, ready to awaken your wanderlust and leave you spellbound.
                        </p>
                        <div class="spacer-20"></div>
                    </div>
                    <div class="d_carousel_container">
                        <div class="col-lg-4 mb10 px-2 d_carousel_slider">
                            <div class="bloglist s2 item">
                                <div class="post-content">
                                    <div class="post-image">
                                        {{-- <div class="date-box">
                                                    <div class="m">10</div>
                                                    <div class="d">MAR</div>
                                                </div> --}}
                                        <img alt="openroadscarrental-welcome-destination"
                                            src="{{ asset('img/destinations/blue_lagoon.webp') }}" class="lazy">
                                    </div>
                                    <div class="post-text">
                                        <p style="font-size: 120%; font-weight: 700;"><a
                                                href="{{ route('destinationinfo.index') }}">The Blue
                                                Lagoon<span></span></a>
                                        </p>
                                        <p>
                                            Indulge in pure bliss at Iceland's ultimate relaxation haven, the enchanting
                                            Blue Lagoon. A serendipitous marvel born from the geothermal power plant,...
                                        </p>
                                        <a class="btn-main" href="{{ route('destinationinfo.index') }}">Read
                                            More...</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb10 px-2 d_carousel_slider">
                            <div class="bloglist s2 item">
                                <div class="post-content">
                                    <div class="post-image">
                                        {{-- <div class="date-box">
                                                    <div class="m">10</div>
                                                    <div class="d">MAR</div>
                                                </div> --}}
                                        <img alt="openroadscarrental-welcome-destination"
                                            src="{{ asset('img/destinations/vik.webp') }}" class="lazy">
                                    </div>
                                    <div class="post-text">
                                        <p style="font-size: 120%; font-weight: 700;"><a
                                                href="{{ route('destinationinfo.index') }}">Vík<span></span></a>
                                        </p>
                                        <p>
                                            Embark on a captivating journey along the mesmerizing southern coast of
                                            Iceland, where you'll encounter the picturesque town of Vík. Prepare...
                                        </p>
                                        <a class="btn-main" href="{{ route('destinationinfo.index') }}">Read
                                            More...</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb10 px-2 d_carousel_slider">
                            <div class="bloglist s2 item">
                                <div class="post-content">
                                    <div class="post-image">
                                        {{-- <div class="date-box">
                                                    <div class="m">10</div>
                                                    <div class="d">MAR</div>
                                                </div> --}}
                                        <img alt="openroadscarrental-welcome-destination"
                                            src="{{ asset('img/destinations/akureyri.webp') }}" class="lazy">
                                    </div>
                                    <div class="post-text">
                                        <p style="font-size: 120%; font-weight: 700;">
                                            <a href="{{ route('destinationinfo.index') }}">Akureyri<span></span></a>
                                        </p>
                                        <p>
                                            Welcome to the vibrant gem of North Iceland, the captivating city of
                                            Akureyri. Boasting the title of Iceland's second largest city and hailed...
                                        </p>
                                        <a class="btn-main" href="{{ route('destinationinfo.index') }}">Read
                                            More...</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb10 px-2 d_carousel_slider">
                            <div class="bloglist s2 item">
                                <div class="post-content">
                                    <div class="post-image">
                                        {{-- <div class="date-box">
                                                    <div class="m">10</div>
                                                    <div class="d">MAR</div>
                                                </div> --}}
                                        <img alt="openroadscarrental-welcome-destination"
                                            src="{{ asset('img/destinations/kirkjufell.webp') }}" class="lazy">
                                    </div>
                                    <div class="post-text">
                                        <p style="font-size: 120%; font-weight: 700;"><a
                                                href="{{ route('destinationinfo.index') }}">Mt.
                                                Kirkjufell<span></span></a>
                                        </p>
                                        <p>
                                            Prepare to be spellbound by the majestic allure of Mt. Kirkjufell, the
                                            legendary 'Church Mountain' nestled along the picturesque north coast...
                                        </p>

                                        <a class="btn-main" href="{{ route('destinationinfo.index') }}">Read
                                            More...</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="section-testimonials" class="no-top no-bottom">
            <div class="container-fluid">

                <div class="row g-0 align-items-center t_carousel_container">
                    <div class="col-md-4 t_carousel_slider">
                        <div class="de-image-text">
                            <div class="d-text">
                                <blockquote>
                                    ประทับใจการเช่ารถกับ Open Roads car rental รถใหม่สะอาด ราคาเช่าถูกกว่าหลายๆ
                                    ที่ที่เคยสอบถาม ให้คำแนะนำข้อมูลการขับรถในไอซ์แลนด์ คืนรถง่ายสะดวก ไม่มีค่าใช้จ่ายแอบแฝง
                                    ⭐⭐⭐⭐⭐.
                                    <span class="by">
                                        <p style="font-size: 120%; font-weight: 700;">Phanidaporn Jaisaen</p>
                                    </span>
                                </blockquote>
                            </div>
                            <img src="{{ asset('img/testimonials/phanidaporn_jaisaen.webp') }}" class="img-fluid"
                                alt="openroadscarrental-welcome-testimonial">
                        </div>
                    </div>
                    <div class="col-md-4 t_carousel_slider">
                        <div class="de-image-text">
                            <div class="d-text">
                                <blockquote>
                                    I highly recommend this company. The pick up process was very efficient (it only took
                                    around 15 mins or less); they were waiting for us at the airport on time.
                                    Car was in good condition. We took the Toyota rav4 AWD, which was an excellent option
                                    for our trip through the ring road in winter time. Everything ran super smoothly.
                                    On the top of that they include wireless internet, so no need to get an additional SIM
                                    card. We had a power bank for our cellphones and also helped with the provided internet
                                    devices in our hiking activities.
                                    The delivery process also was super simple at the airport, which make it very efficient
                                    for the customers.
                                    Last, but not least, service was excellent. They reply in within minutes.
                                    <span class="by">
                                        <p style="font-size: 120%; font-weight: 700;">Flavio Rodriguez</p>
                                    </span>
                                </blockquote>
                            </div>
                            <img src="{{ asset('img/testimonials/flavio_rodriguez.webp') }}" class="img-fluid"
                                alt="openroadscarrental-welcome-testimonial">
                        </div>
                    </div>
                    <div class="col-md-4 t_carousel_slider">
                        <div class="de-image-text">
                            <div class="d-text">
                                <blockquote>
                                    We picked Open Roads Car Rental after comparing their service against some of the larger
                                    providers. We were a little unsure but I am so glad we did. The personal service offered
                                    by the team was excellent. No hidden charges or longs waits to collect your car. We were
                                    greeted at the airport on time and taken to our vehicle. We were also provided lots of
                                    useful local information on roads and directed to services that supported our self drive
                                    trip. The car was in good condition - no issues at all. Drop off was smooth and without
                                    issue. Communications were instant before and after our trip. Based on my experience I
                                    would not hesitate to recommend them for your rental needs. Thank you to the Open Roads
                                    Team for making our trip hassle free.
                                    <span class="by">
                                        <p style="font-size: 120%; font-weight: 700;">Kam Bains</p>
                                    </span>
                                </blockquote>
                            </div>
                            <img src="{{ asset('img/testimonials/kam_bains.webp') }}" class="img-fluid"
                                alt="openroadscarrental-welcome-testimonial">
                        </div>
                    </div>
                    <div class="col-md-4 t_carousel_slider">
                        <div class="de-image-text">
                            <div class="d-text">
                                <blockquote>
                                    Highly recommended. Good service and a nice car, good communication and handling. 👍
                                    <span class="by">
                                        <p style="font-size: 120%; font-weight: 700;">Tryggve Kainert</p>
                                    </span>
                                </blockquote>
                            </div>
                            <img src="{{ asset('img/testimonials/tryggve_ainert.webp') }}" class="img-fluid"
                                alt="openroadscarrental-welcome-testimonial">
                        </div>
                    </div>
                    <div class="col-md-4 t_carousel_slider">
                        <div class="de-image-text">
                            <div class="d-text">
                                <blockquote>
                                    I highly recommend this company. Good car for good price. Unlimited mileage, no deposit,
                                    no hidden fees, fuel discount prices, full insurance plus Wi-fi. Definitely will use
                                    them next time 👍
                                    <span class="by">
                                        <p style="font-size: 120%; font-weight: 700;">Tomas Richter</p>
                                    </span>
                                </blockquote>
                            </div>
                            <img src="{{ asset('img/testimonials/tomas_richter.webp') }}" class="img-fluid"
                                alt="openroadscarrental-welcome-testimonial">
                        </div>
                    </div>
                    <div class="col-md-4 t_carousel_slider">
                        <div class="de-image-text">
                            <div class="d-text">
                                <blockquote>
                                    I had a good trip in Iceland and was glad to have this car, a new Honda CR-V, everything
                                    was clear and went well, also good price/quality!
                                    <span class="by">
                                        <p style="font-size: 120%; font-weight: 700;">Jim Verschooten</p>
                                    </span>
                                </blockquote>
                            </div>
                            <img src="{{ asset('img/testimonials/jim_verschooten.webp') }}" class="img-fluid"
                                alt="openroadscarrental-welcome-testimonial">
                        </div>
                    </div>
                    <div class="col-md-4 t_carousel_slider">
                        <div class="de-image-text">
                            <div class="d-text">
                                <blockquote>
                                    Rented a car off these guys , arrived in airport, guy waiting with name board , took us
                                    too car , handed over the money , no hassle , great car , we got snowed in outside of
                                    Reykjavik, had too cancel flights home , text these guys , needed the car for 2 more
                                    days , no problem, carry on .
                                    Very good service, no hassle , top marks.
                                    we will be using them again.
                                    <span class="by">
                                        <p style="font-size: 120%; font-weight: 700;">Ken Fitzgerald</p>
                                    </span>
                                </blockquote>
                            </div>
                            <img src="{{ asset('img/testimonials/ken_fitzgerald.webp') }}" class="img-fluid"
                                alt="openroadscarrental-welcome-testimonial">
                        </div>
                    </div>
                    <div class="col-md-4 t_carousel_slider">
                        <div class="de-image-text">
                            <div class="d-text">
                                <blockquote>
                                    Two weeks ago I rented a car with Open Roads Car rental. I would recommend it to
                                    everyone!! They answer very fast and clear on the socials and are open to help. When we
                                    arrived in Iceland the car was there! We had a nice car, drove very good and I felt
                                    safe. The service was so good that even when the car had a little problem. They came
                                    immediately ( 7:00 AM) with a new car. So as you can read, the service is great, the
                                    people are nice and the price is lower than renting it ‘official’. Thank you Open Roads
                                    car rental for the great car!
                                    <span class="by">
                                        <p style="font-size: 120%; font-weight: 700;">Sara Piantanida</p>
                                    </span>
                                </blockquote>
                            </div>
                            <img src="{{ asset('img/testimonials/sara_piantanida.webp') }}" class="img-fluid"
                                alt="openroadscarrental-welcome-testimonial">
                        </div>
                    </div>
                    <div class="col-md-4 t_carousel_slider">
                        <div class="de-image-text">
                            <div class="d-text">
                                <blockquote>
                                    Really satisfied with their service and cars! Easy to communicate with and very
                                    understandable! I highly recommend! We had the Toyota Rav4, quite new with all extras.
                                    The car was really clean and well maintained! We had no issues!
                                    <span class="by">
                                        <p style="font-size: 120%; font-weight: 700;">Diana Kovacheva</p>
                                    </span>
                                </blockquote>
                            </div>
                            <img src="{{ asset('img/testimonials/diana_kovacheva.webp') }}" class="img-fluid"
                                alt="openroadscarrental-welcome-testimonial">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- <section id="section-faq">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <h2>Have Any Questions?</h2>
                        <div class="spacer-20"></div>
                    </div>
                </div>
                <div class="row g-custom-x">
                    <div class="col-md-6 wow fadeInUp">
                        <div class="accordion secondary">
                            <div class="accordion-section">
                                <div class="accordion-section-title" data-tab="#accordion-1">
                                    How do I get started with Tips &amp; Trick?
                                </div>
                                <div class="accordion-section-content" id="accordion-1">
                                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                                        voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint
                                        occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt
                                        mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et
                                        expedita distinctio.</p>
                                </div>
                                <div class="accordion-section-title" data-tab="#accordion-2">
                                    What is difference for each plan?
                                </div>
                                <div class="accordion-section-content" id="accordion-2">
                                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                                        voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint
                                        occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt
                                        mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et
                                        expedita distinctio.</p>
                                </div>
                                <div class="accordion-section-title" data-tab="#accordion-3">
                                    What kind of Tips &amp; Trick do I need?
                                </div>
                                <div class="accordion-section-content" id="accordion-3">
                                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                                        voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint
                                        occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt
                                        mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et
                                        expedita distinctio.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 wow fadeInUp">
                        <div class="accordion secondary">
                            <div class="accordion-section">
                                <div class="accordion-section-title" data-tab="#accordion-b-4">
                                    Why do I need domain name?
                                </div>
                                <div class="accordion-section-content" id="accordion-b-4">
                                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                                        voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint
                                        occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt
                                        mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et
                                        expedita distinctio.</p>
                                </div>
                                <div class="accordion-section-title" data-tab="#accordion-b-5">
                                    What my website protected from hackers?
                                </div>
                                <div class="accordion-section-content" id="accordion-b-5">
                                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                                        voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint
                                        occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt
                                        mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et
                                        expedita distinctio.</p>
                                </div>
                                <div class="accordion-section-title" data-tab="#accordion-b-6">
                                    How do I backup my website?
                                </div>
                                <div class="accordion-section-content" id="accordion-b-6">
                                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                                        voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint
                                        occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt
                                        mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et
                                        expedita distinctio.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}

    </div>
    {{-- destination_slider to view destinations --}}
    <script>
        // destination & testimonials slider open
        $(document).ready(function() {
            $(".d_carousel_container").slick({
                dots: !1,
                infinite: !0,
                speed: 200,
                autoplay: !0,
                autoplaySpeed: 3e3,
                slidesToShow: 3,
                slidesToScroll: 1,
                prevArrow: !1,
                nextArrow: !1,
                responsive: [{
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 2
                    }
                }, {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }]
            })
        }), $(document).ready(function() {
            $(".t_carousel_container").slick({
                dots: !1,
                infinite: !0,
                speed: 300,
                autoplay: !0,
                autoplaySpeed: 2500,
                slidesToShow: 3,
                slidesToScroll: 1,
                prevArrow: !1,
                nextArrow: !1,
                responsive: [{
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 2
                    }
                }, {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }]
            })
        });
        // destination & testimonials slider close

        // home inputs validations and create sessions for passing to next page
        $(document).ready(function() {
            // Add a click event listener to the button
            $('#btn_home_input').click(function(event) {
                event.preventDefault(); // Prevent form submission

                // Reset error messages
                resetErrorMessages();

                // Validate each form input
                let isValid = true;

                const home_pickup_location = $('#home_pickup_location').val();
                const home_dropoff_location = $('#home_dropoff_location').val();
                const home_pickup_date = $('#home_pickup_date').val();
                const home_return_date = $('#home_return_date').val();
                const home_pickup_time = $('#home_pickup_time').val();
                const home_return_time = $('#home_return_time').val();

                if (!home_pickup_location) {
                    displayErrorMessage('home_pickup_location', 'Please select a pickup location');
                    isValid = false;
                }

                if (!home_dropoff_location) {
                    displayErrorMessage('home_dropoff_location', 'Please select a drop-off location');
                    isValid = false;
                }

                if (!home_pickup_date) {
                    displayErrorMessage('home_pickup_date', 'Please select a pickup date');
                    isValid = false;
                } else if (!isFutureDate(home_pickup_date)) {
                    displayErrorMessage('home_pickup_date', 'Pickup date should be a date ahead from today');
                    isValid = false;
                }

                if (!home_return_date) {
                    displayErrorMessage('home_return_date', 'Please select a return date');
                    isValid = false;
                } else if (!isFutureDate(home_return_date)) {
                    displayErrorMessage('home_return_date', 'Return date should be a future date');
                    isValid = false;
                } else if (!isFutureDateThan(home_pickup_date, home_return_date)) {
                    displayErrorMessage('home_return_date', 'Return date should be after the pickup date');
                    isValid = false;
                }

                if (!home_pickup_time) {
                    displayErrorMessage('home_pickup_time', 'Please select a pickup time');
                    isValid = false;
                }
                // else if (!isFutureTime(home_pickup_date, home_pickup_time)) {
                //     displayErrorMessage('home_pickup_time', 'Pickup time should be in the future');
                //     isValid = false;
                // }

                if (!home_return_time) {
                    displayErrorMessage('home_return_time', 'Please select a return time');
                    isValid = false;
                }

                // else if (!isFutureTime(home_return_date, home_return_time)) {
                //     displayErrorMessage('home_return_time', 'Return time should be in the future');
                //     isValid = false;
                // }

                // If all validations pass, create sessions
                if (isValid) {
                    // Save the form input values in the session
                    sessionStorage.setItem('home_pickup_location', home_pickup_location);
                    sessionStorage.setItem('home_dropoff_location', home_dropoff_location);
                    sessionStorage.setItem('home_pickup_date', home_pickup_date);
                    sessionStorage.setItem('home_return_date', home_return_date);
                    sessionStorage.setItem('home_pickup_time', home_pickup_time);
                    sessionStorage.setItem('home_return_time', home_return_time);

                    // Redirect to the '/cars' page
                    window.location.href = '/cars';
                }
            });

            // Function to display an error message for a specific input field
            function displayErrorMessage(inputId, message) {
                $(`#${inputId}_error`).text(message);
            }

            // Function to reset all error messages
            function resetErrorMessages() {
                $('[id$="_error"]').text('');
            }

            // Function to check if a date is in the future
            function isFutureDate(date) {
                const selectedDate = new Date(date);
                const currentDate = new Date();
                return selectedDate >= currentDate;
            }

            // Function to check if a date is in the future compared to another date
            function isFutureDateThan(date1, date2) {
                const selectedDate1 = new Date(date1);
                const selectedDate2 = new Date(date2);
                return selectedDate2 >= selectedDate1;
            }

            // Function to check if a time is in the future (relative to a given date)
            function isFutureTime(date, time) {
                const selectedDateTime = new Date(`${date} ${time}`);
                const currentDateTime = new Date();
                return selectedDateTime >= currentDateTime;
            }
        });
    </script>

    <!-- content close -->
@endsection
