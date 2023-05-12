@extends('app.welcome.layout.app')

@section('title')
    Open Roads Car Rental
@endsection

@section('welcomebody')
    <!-- content begin -->
    <style>
        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 20%;
            z-index: 1;
            background: linear-gradient(to bottom, rgb(255, 255, 255,0.8) 100%, rgba(0, 0, 0, 1) 100%);
            backdrop-filter: blur(5px);
        }

        .shadow-soft{
            background: linear-gradient(to bottom, rgb(255, 255, 255,0.8) 100%, rgba(0, 0, 0, 1) 100%);
        }

        #mainmenu a {
    position: relative;
    display: inline-block;
    padding: 30px;
    text-decoration: none;
    color: #323232;
    text-align: center;
    outline: none;
}
    </style>
    <div class="no-bottom no-top" id="content">
        <div id="top"></div>
        <section id="section-hero" aria-label="section" class="jarallax full-height vertical-center">
            <div class="hero-overlay"></div>
            <img src="{{ asset('welcome/images/background/iceland taxi.jpg') }}" class="jarallax-img" alt="" >
            <div class="container position-relative z1000" style="position: relative; top:70px;">
                <div class="row align-items-center">
                    <div class="col-lg-5 text-light">
                        <h4><span >Rent the Adventure: </span></h4>
                        <div class="spacer-10"></div>
                        <h1 class="mb-2">Explore the <span style="color:rgb(245, 245, 245);">Iceland</span> on Your Terms</h1>
                        <div class="spacer-10"></div>
                        <p class="lead">Whether you're planning a weekend getaway, a business trip, or simply need a car
                            for everyday use, we've got you covered. Our wide range of vehicles suits every occasion and
                            budget.</p>
                    </div>

                    <div class="col-lg-7">
                        <div class="spacer-single sm-hide"></div>

                        <form name="contactForm" id='contact_form' method="post">

                            <div class="col-md-12">
                                <div class="row my-1">
                                    <div class="col-md-6">
                                        <div class="p-2 my-1 rounded-3 shadow-soft" >
                                            <h6>Pick Up Location</h6>
                                            <select name="" id="pickup-location"
                                                style="border: none; border-bottom: 1px solid #ccc; outline: none;"
                                                name="PickupLocation" onfocus="geolocate()"
                                                placeholder="Enter your pickup location" id="autocomplete"
                                                autocomplete="off" class="form-control">
                                                <option selected value="">Select Location</option>
                                                <option  value="kef_airport">KEF Airport</option>
                                                <option value="reykjavik">Reykjavik</option>
                                            </select>
                                            <div id="PickupLocation_error"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="p-2 my-1 rounded-3 shadow-soft" >
                                            <h6>Drop Off Location</h6>
                                            <select name="" id="dropoff-location"
                                                style="border: none; border-bottom: 1px solid #ccc; outline: none;"
                                                name="PickupLocation" onfocus="geolocate()"
                                                placeholder="Enter your pickup location" id="autocomplete"
                                                autocomplete="off" class="form-control">
                                                <option selected value="">Select Location</option>
                                                <option  value="reykjavik">Reykjavik</option>
                                                <option value="kef_airport">KEF Airport</option>
                                                <option value="same_location">[Return to the same location]</option>
                                            </select>
                                            <div id="dropoff-location_error"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row  my-1">
                                    <div class="col-md-6">
                                        <div class="p-2 my-1 rounded-3 shadow-soft" >
                                            <h6>Pick Up Date</h6>
                                            <div class="date-time-field">
                                                <input
                                                    style="width: 100%;
                                                            border: none;
                                                            border-bottom: 1px solid #ccc;"
                                                    type="date" id="pickup-date" name="" value="">
                                                    <div id="pickup_date_error"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="p-2 my-1 rounded-3 shadow-soft" >
                                            <h6>Return Date</h6>
                                            <div class="date-time-field">
                                                <input
                                                    style="width: 100%;
                                                            border: none;
                                                            border-bottom: 1px solid #ccc;"
                                                    type="date" id="return-date" name="" value="">
                                                    <div id="return-date-error"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row  mt-2 mb-2">
                                    <div class="col-md-6">
                                        <div class="p-2 my-1 rounded-3 shadow-soft" >
                                            <h6>Pick Up Time</h6>
                                            <div class="date-time-field">
                                                <input
                                                    style="width: 100%;
                                                            border: none;
                                                            border-bottom: 1px solid #ccc;"
                                                    type="time" name="Pick Up Time" id="pickup-time">
                                                    <div id="pickup-time-error"></div> 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="p-2 my-1 rounded-3 shadow-soft" >
                                            <h6>Return Time</h6>
                                            <div class="date-time-field">
                                                <input
                                                    style="width: 100%;
                                                            border: none;
                                                            border-bottom: 1px solid #ccc;"
                                                    type="time" name="Pick Up Time" id="return-time">
                                                    <div id="return-time-error"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row  mt-2">
                                    <div class="col-md-12">
                                        {{-- <div class="p-2 rounded-3 shadow-soft" data-bgcolor="#fff"> --}}
                                        {{-- <h6 style="color:#fff">What is your vehicle type?</h6> --}}

                                        <div class="de_form de_radio row g-3">
                                            <div class="radio-img col-lg-2 col-sm-2 col-2">
                                                <input id="radio-1a" name="Car_Type" type="radio" value="Residential"
                                                    checked="checked">
                                                <label for="radio-1a"><img
                                                        src="{{ asset('welcome/images/select-form/car.png') }}"
                                                        alt="">SUV</label>
                                            </div>

                                            <div class="radio-img col-lg-2 col-sm-2 col-2">
                                                <input id="radio-1b" name="Car_Type" type="radio" value="Office">
                                                <label for="radio-1b"><img
                                                        src="{{ asset('welcome/images/select-form/sportscar.png') }}"
                                                        alt="">Coupe</label>
                                            </div>

                                            <div class="radio-img col-lg-2 col-sm-2 col-2">
                                                <input id="radio-1c" name="Car_Type" type="radio" value="Commercial">
                                                <label for="radio-1c"><img
                                                        src="{{ asset('welcome/images/select-form/minibus.png') }}"
                                                        alt="">Hback</label>
                                            </div>

                                            <div class="radio-img col-lg-2 col-sm-2 col-2">
                                                <input id="radio-1d" name="Car_Type" type="radio" value="Retail">
                                                <label for="radio-1d"><img
                                                        src="{{ asset('welcome/images/select-form/minibus.png') }}"
                                                        alt="">SWgon</label>
                                            </div>

                                            <div class="radio-img col-lg-2 col-sm-2 col-2">
                                                <input id="radio-1e" name="Car_Type" type="radio" value="Commercial">
                                                <label for="radio-1e"><img
                                                        src="{{ asset('welcome/images/select-form/sportscar.png') }}"
                                                        alt="">Convertible</label>
                                            </div>

                                            <div class="radio-img col-lg-2 col-sm-2 col-2">
                                                <input id="radio-1f" name="Car_Type" type="radio" value="Retail">
                                                <label for="radio-1f"><img
                                                        src="{{ asset('welcome/images/select-form/van.png') }}"
                                                        alt="">Minivan</label>
                                            </div>
                                        </div>
                                        {{-- </div> --}}
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-12">
                                        <a href="#" type='' id='' onclick="validateForm()"
                                            class="btn-main pull-right">
                                            Find a Vehicle
                                        </a>
                                        {{-- <a href="{{ route('booking.index') }}" type='' id=''
                                            class="btn-main pull-right">
                                            Find a Vehicle
                                        </a> --}}
                                    </div>
                                </div>

                                <div class="clearfix"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            
        </section>

        <section aria-label="section" >
            <div class="container">
                <div class="row align-items-center" >
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
                        <img src="{{ asset('welcome/images/misc/car.png') }}" alt=""
                            class="img-fluid wow fadeInUp">
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
            <img src="{{ asset('welcome/images/background/2.jpg') }}" class="jarallax-img" alt="">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeInRight">
                        <h2>Ready for <span class="id-color">adventure? </span> We've got
                            you <span class="id-color">covered</span> for any occasion that you need a <span
                                class="id-color">ride.</span></h2>
                    </div>
                    <div class="col-lg-6 wow fadeInLeft">
                        At <span class="id-color">Open Roads Car Rental</span>, we know that choosing the right car for
                        your travel needs is crucial.
                        That's why we offer a wide selection of commercial and luxury cars to suit any occasion, from
                        compact cars for solo travelers to spacious SUVs for family road trips. Our cars are meticulously
                        maintained and regularly serviced to ensure a safe and enjoyable driving experience. With our
                        competitive pricing and exceptional customer service, renting a car with us is the perfect way to
                        elevate your travel game.
                    </div>
                </div>
                <div class="spacer-double"></div>
                <div class="row text-center">
                    <div class="col-md-3 col-sm-6 mb-sm-30">
                        <div class="de_count transparent text-light wow fadeInUp">
                            <h3 class="timer" data-to="15425" data-speed="3000">0</h3>
                            Hours of Work
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 mb-sm-30">
                        <div class="de_count transparent text-light wow fadeInUp">
                            <h3 class="timer" data-to="8745" data-speed="3000">0</h3>
                            Clients Supported
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 mb-sm-30">
                        <div class="de_count transparent text-light wow fadeInUp">
                            <h3 class="timer" data-to="235" data-speed="3000">0</h3>
                            Awards Winning
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 mb-sm-30">
                        <div class="de_count transparent text-light wow fadeInUp">
                            <h3 class="timer" data-to="15" data-speed="3000">0</h3>
                            Years Experience
                        </div>
                    </div>
                </div>
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

                        <div class="col-lg-12">
                            <div class="de-item mb30">
                                <div class="d-img">
                                    <img src="{{ asset('welcome/images/cars/jeep-renegade.jpg') }}" class="img-fluid"
                                        alt="">
                                </div>
                                <div class="d-info">
                                    <div class="d-text">
                                        <h4>Jeep Renegade</h4>
                                        <div class="d-item_like">
                                            <i class="fa fa-heart"></i><span>74</span>
                                        </div>
                                        <div class="d-atr-group">
                                            <span class="d-atr"><img src="{{ asset('welcome/images/icons/1.svg') }}"
                                                    alt="">5</span>
                                            <span class="d-atr"><img src="{{ asset('welcome/images/icons/2.svg') }}"
                                                    alt="">2</span>
                                            <span class="d-atr"><img src="{{ asset('welcome/images/icons/3.svg') }}"
                                                    alt="">4</span>
                                            <span class="d-atr"><img src="{{ asset('welcome/images/icons/4.svg') }}"
                                                    alt="">SUV</span>
                                        </div>
                                        <div class="d-price">
                                            Daily rate from <span>$265</span>
                                            <a class="btn-main" href="{{ route('cars.show') }}">Rent Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="de-item mb30">
                                <div class="d-img">
                                    <img src="{{ asset('welcome/images/cars/bmw-m5.jpg') }}" class="img-fluid"
                                        alt="">
                                </div>
                                <div class="d-info">
                                    <div class="d-text">
                                        <h4>BMW M2</h4>
                                        <div class="d-item_like">
                                            <i class="fa fa-heart"></i><span>36</span>
                                        </div>
                                        <div class="d-atr-group">
                                            <span class="d-atr"><img src="{{ asset('welcome/images/icons/1.svg') }}"
                                                    alt="">5</span>
                                            <span class="d-atr"><img src="{{ asset('welcome/images/icons/2.svg') }}"
                                                    alt="">2</span>
                                            <span class="d-atr"><img src="{{ asset('welcome/images/icons/3.svg') }}"
                                                    alt="">4</span>
                                            <span class="d-atr"><img src="{{ asset('welcome/images/icons/4.svg') }}"
                                                    alt="">Sedan</span>
                                        </div>
                                        <div class="d-price">
                                            Daily rate from <span>$244</span>
                                            <a class="btn-main" href="{{ route('cars.show') }}">Rent Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="de-item mb30">
                                <div class="d-img">
                                    <img src="{{ asset('welcome/images/cars/ferrari-enzo.jpg') }}" class="img-fluid"
                                        alt="">
                                </div>
                                <div class="d-info">
                                    <div class="d-text">
                                        <h4>Ferarri Enzo</h4>
                                        <div class="d-item_like">
                                            <i class="fa fa-heart"></i><span>85</span>
                                        </div>
                                        <div class="d-atr-group">
                                            <span class="d-atr"><img src="{{ asset('welcome/images/icons/1.svg') }}"
                                                    alt="">5</span>
                                            <span class="d-atr"><img src="{{ asset('welcome/images/icons/2.svg') }}"
                                                    alt="">2</span>
                                            <span class="d-atr"><img src="{{ asset('welcome/images/icons/3.svg') }}"
                                                    alt="">4</span>
                                            <span class="d-atr"><img src="{{ asset('welcome/images/icons/4.svg') }}"
                                                    alt="">Exotic
                                                Car</span>
                                        </div>
                                        <div class="d-price">
                                            Daily rate from <span>$167</span>
                                            <a class="btn-main" href="{{ route('cars.show') }}">Rent Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="de-item mb30">
                                <div class="d-img">
                                    <img src="{{ asset('welcome/images/cars/ford-raptor.jpg') }}" class="img-fluid"
                                        alt="">
                                </div>
                                <div class="d-info">
                                    <div class="d-text">
                                        <h4>Ford Raptor</h4>
                                        <div class="d-item_like">
                                            <i class="fa fa-heart"></i><span>59</span>
                                        </div>
                                        <div class="d-atr-group">
                                            <span class="d-atr"><img src="{{ asset('welcome/images/icons/1.svg') }}"
                                                    alt="">5</span>
                                            <span class="d-atr"><img src="{{ asset('welcome/images/icons/2.svg') }}"
                                                    alt="">2</span>
                                            <span class="d-atr"><img src="{{ asset('welcome/images/icons/3.svg') }}"
                                                    alt="">4</span>
                                            <span class="d-atr"><img src="{{ asset('welcome/images/icons/4.svg') }}"
                                                    alt="">Pickup
                                                Truck</span>
                                        </div>
                                        <div class="d-price">
                                            Daily rate from <span>$147</span>
                                            <a class="btn-main" href="{{ route('cars.show') }}">Rent Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="de-item mb30">
                                <div class="d-img">
                                    <img src="{{ asset('welcome/images/cars/mini-cooper.jpg') }}" class="img-fluid"
                                        alt="">
                                </div>
                                <div class="d-info">
                                    <div class="d-text">
                                        <h4>Mini Cooper</h4>
                                        <div class="d-item_like">
                                            <i class="fa fa-heart"></i><span>19</span>
                                        </div>
                                        <div class="d-atr-group">
                                            <span class="d-atr"><img src="{{ asset('welcome/images/icons/1.svg') }}"
                                                    alt="">5</span>
                                            <span class="d-atr"><img src="{{ asset('welcome/images/icons/2.svg') }}"
                                                    alt="">2</span>
                                            <span class="d-atr"><img src="{{ asset('welcome/images/icons/3.svg') }}"
                                                    alt="">4</span>
                                            <span class="d-atr"><img src="{{ asset('welcome/images/icons/4.svg') }}"
                                                    alt="">Hatchback</span>
                                        </div>
                                        <div class="d-price">
                                            Daily rate from <span>$238</span>
                                            <a class="btn-main" href="{{ route('cars.show') }}">Rent Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="de-item mb30">
                                <div class="d-img">
                                    <img src="{{ asset('welcome/images/cars/vw-polo.jpg') }}" class="img-fluid"
                                        alt="">
                                </div>
                                <div class="d-info">
                                    <div class="d-text">
                                        <h4>VW Polo</h4>
                                        <div class="d-item_like">
                                            <i class="fa fa-heart"></i><span>79</span>
                                        </div>
                                        <div class="d-atr-group">
                                            <span class="d-atr"><img src="{{ asset('welcome/images/icons/1.svg') }}"
                                                    alt="">5</span>
                                            <span class="d-atr"><img src="{{ asset('welcome/images/icons/2.svg') }}"
                                                    alt="">2</span>
                                            <span class="d-atr"><img src="{{ asset('welcome/images/icons/3.svg') }}"
                                                    alt="">4</span>
                                            <span class="d-atr"><img src="{{ asset('welcome/images/icons/4.svg') }}"
                                                    alt="">Hatchback</span>
                                        </div>
                                        <div class="d-price">
                                            Daily rate from <span>$106</span>
                                            <a class="btn-main" href="{{ route('cars.show') }}">Rent Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </section>

        <section class="text-light jarallax" aria-label="section">
            <img src="{{ asset('welcome/images/background/3.jpg') }}" alt="" class="jarallax-img">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-light">
                        <div class="container-timeline">
                            <ul>
                                <li>
                                    <h4>Choose a vehicle</h4>
                                    <p>Browse our selection of vehicles and choose the one that suits your travel needs.</p>
                                </li>
                                <li>
                                    <h4>Pick location &amp; date</h4>
                                    <p>Select your preferred pickup location and date to book your ride in just a few
                                        clicks.
                                    </p>
                                </li>
                                <li>
                                    <h4>Make a booking</h4>
                                    <p> Book your ride in just a few clicks - it's that easy!
                                    </p>
                                </li>
                                <li>
                                    <h4>Sit back &amp; relax</h4>
                                    <p>Get ready to hit the road! Sit back and relax while we prepare your ride for the
                                        ultimate driving experience.
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
                        <h2>Latest News</h2>
                        <p>Sit labore et officia eiusmod tempor officia eiusmod dolor exercitation nulla dolore ut id velit
                            et ut anim.</p>
                        <div class="spacer-20"></div>
                    </div>

                    <div class="col-lg-4 mb10">
                        <div class="bloglist s2 item">
                            <div class="post-content">
                                <div class="post-image">
                                    <div class="date-box">
                                        <div class="m">10</div>
                                        <div class="d">MAR</div>
                                    </div>
                                    <img alt="" src="{{ asset('welcome/images/news/pic-blog-1.jpg') }}"
                                        class="lazy">
                                </div>
                                <div class="post-text">
                                    <h4><a href="news-single.html">Enjoy Best Travel Experience<span></span></a></h4>
                                    <p>Dolore officia sint incididunt non excepteur ea mollit commodo ut enim reprehenderit
                                        cupidatat labore ad laborum consectetur.</p>
                                    <a class="btn-main" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 mb10">
                        <div class="bloglist s2 item">
                            <div class="post-content">
                                <div class="post-image">
                                    <div class="date-box">
                                        <div class="m">12</div>
                                        <div class="d">MAR</div>
                                    </div>
                                    <img alt="" src="{{ asset('welcome/images/news/pic-blog-2.jpg') }}"
                                        class="lazy">
                                </div>
                                <div class="post-text">
                                    <h4><a href="news-single.html">The Future of Car Rent<span></span></a></h4>
                                    <p>Dolore officia sint incididunt non excepteur ea mollit commodo ut enim reprehenderit
                                        cupidatat labore ad laborum consectetur.</p>
                                    <a class="btn-main" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 mb10">
                        <div class="bloglist s2 item">
                            <div class="post-content">
                                <div class="post-image">
                                    <div class="date-box">
                                        <div class="m">14</div>
                                        <div class="d">MAR</div>
                                    </div>
                                    <img alt="" src="{{ asset('welcome/images/news/pic-blog-3.jpg') }}"
                                        class="lazy">
                                </div>
                                <div class="post-text">
                                    <h4><a href="news-single.html">Holiday Tips For Backpacker<span></span></a></h4>
                                    <p>Dolore officia sint incididunt non excepteur ea mollit commodo ut enim reprehenderit
                                        cupidatat labore ad laborum consectetur.</p>
                                    <a class="btn-main" href="news-single.html">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="section-testimonials" class="no-top no-bottom">
            <div class="container-fluid">
                <div class="row g-0 align-items-center">

                    <div class="col-md-4">
                        <div class="de-image-text">
                            <div class="d-text">
                             
                                <h4>Vatnajökull National Park</h4>
                                <blockquote>
                                    Iceland is a country that is known for its natural beauty and unique geological features, drawing visitors from all over the world. However, despite its popularity as a tourist destination, many visitors often stick to the well-trodden path, missing out on the many hidden gems that Iceland has to offer. In this article, we will explore why Iceland has so many hidden gems, provide an overview of lesser-known destinations, and offer tips for finding and visiting these hidden gems, including car rental services.
                                    <span class="by">read more.....</span>
                                </blockquote>
                            </div>
                            <img src="{{ asset('welcome/images/destination/Vatnajökull National Park.jpg') }}" class="img-fluid" alt="">
                        </div>
                    </div>


                    <div class="col-md-4">
                        <div class="de-image-text">
                            <div class="d-text">
                                
                                <h4>Midnight Sun in Iceland</h4>
                                <blockquote>
                                    The Midnight Sun is a natural phenomenon that occurs during the summer months in Iceland, where the sun remains visible at all hours of the day and night. This is due to Iceland's location just south of the Arctic Circle, which means that the country experiences long days and short nights during the summer months. The best time to visit Iceland to experience the Midnight Sun is typically between late May and early August, with the longest days of the year occurring in June. During this time, the sun remains visible for 24 hours a day in some parts of the country, providing ample opportunity to experience the Midnight Sun.
                                    <span class="by">read more.....</span>
                                </blockquote>
                            </div>
                            <img src="{{ asset('welcome/images/destination/Midnight Sun in Iceland.jpg') }}" class="img-fluid" alt="">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="de-image-text">
                            <div class="d-text">
                                
                                <h4>Gullfoss Waterfall</h4>
                                <blockquote>
                                    Iceland is a country known for its unique and beautiful landscapes, making it a popular destination for road trips. The rugged terrain, dramatic cliffs, and natural wonders that can be found throughout the country make it a paradise for nature lovers and adventure seekers alike.
                                    <span class="by">read more.....</span>
                                </blockquote>
                            </div>
                            <img src="{{ asset('welcome/images/destination/Gullfoss Waterfall.jpg') }}" class="img-fluid" alt="">
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section id="section-faq">
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
        </section>

    </div>
    <!-- content close -->
@endsection
