@extends('app.welcome.layout.app')

@section('title')
Booking | Open Roads Car Rental in Iceland
@endsection

@section('welcomebody')
    <!-- content begin -->
    <div class="no-bottom no-top zebra" id="content">
        <div id="top"></div>

        <!-- section begin -->
        <section id="subheader" class="jarallax text-light">
            <img src="{{ asset('welcome/images/background/back1.jpg')}}" class="jarallax-img" alt="openroadscarrental-welcome-background">
            <div class="center-y relative text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h1>Booking</h1>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section close -->

        <section id="section-hero" aria-label="section" class="no-top mt-80 sm-mt-0">
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-lg-12">
                        <div class="spacer-single sm-hide"></div>
                        <div class="p-4 rounded-3 shadow-soft" data-bgcolor="#ffffff">


                            <form name="contactForm" id='contact_form' method="post">
                                <div id="step-1" class="row">
                                    <div class="col-lg-6 mb30">
                                        <h5>What is your vehicle type?</h5>

                                        <div class="de_form de_radio row g-3">
                                            <div class="radio-img col-lg-3 col-sm-3 col-6">
                                                <input id="radio-1a" name="Car_Type" type="radio" value="Residential"
                                                    checked="checked">
                                                <label for="radio-1a"><img src="{{ asset('welcome/images/select-form/car.png')}}"
                                                        alt="openroadscarrental-welcome-car">Car</label>
                                            </div>

                                            <div class="radio-img col-lg-3 col-sm-3 col-6">
                                                <input id="radio-1b" name="Car_Type" type="radio" value="Office">
                                                <label for="radio-1b"><img src="{{ asset('welcome/images/select-form/van.png')}}"
                                                        alt="openroadscarrental-welcome-van">Van</label>
                                            </div>

                                            <div class="radio-img col-lg-3 col-sm-3 col-6">
                                                <input id="radio-1c" name="Car_Type" type="radio" value="Commercial">
                                                <label for="radio-1c"><img src="{{ asset('welcome/images/select-form/minibus.png')}}"
                                                        alt="openroadscarrental-welcome-minibus">Minibus</label>
                                            </div>

                                            <div class="radio-img col-lg-3 col-sm-3 col-6">
                                                <input id="radio-1d" name="Car_Type" type="radio" value="Retail">
                                                <label for="radio-1d"><img src="{{ asset('welcome/images/select-form/sportscar.png')}}"
                                                        alt="openroadscarrental-welcome-prestige">Prestige</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="col-lg-6 mb20">
                                                <h5>Pick Up Location</h5>
                                                <input type="text" name="PickupLocation" onfocus="geolocate()"
                                                    placeholder="Enter your pickup location" id="autocomplete"
                                                    autocomplete="off" class="form-control">

                                                <div class="jls-address-preview jls-address-preview--hidden">
                                                    <div class="jls-address-preview__header">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 mb20">
                                                <h5>Drop Off Location</h5>
                                                <input type="text" name="DropoffLocation" onfocus="geolocate()"
                                                    placeholder="Enter your dropoff location" id="autocomplete2"
                                                    autocomplete="off" class="form-control">

                                                <div class="jls-address-preview jls-address-preview--hidden">
                                                    <div class="jls-address-preview__header">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 mb20">
                                                <h5>Pick Up Date & Time</h5>
                                                <div class="date-time-field">
                                                    <input type="text" id="date-picker" name="Pick Up Date"
                                                        value="">
                                                    <select name="Pick Up Time" id="pickup-time">
                                                        <option selected disabled value="Select time">Time</option>
                                                        <option value="00:00">00:00</option>
                                                        <option value="00:30">00:30</option>
                                                        <option value="01:00">01:00</option>
                                                        <option value="01:30">01:30</option>
                                                        <option value="02:00">02:00</option>
                                                        <option value="02:30">02:30</option>
                                                        <option value="03:00">03:00</option>
                                                        <option value="03:30">03:30</option>
                                                        <option value="04:00">04:00</option>
                                                        <option value="04:30">04:30</option>
                                                        <option value="05:00">05:00</option>
                                                        <option value="05:30">05:30</option>
                                                        <option value="06:00">06:00</option>
                                                        <option value="06:30">06:30</option>
                                                        <option value="07:00">07:00</option>
                                                        <option value="07:30">07:30</option>
                                                        <option value="08:00">08:00</option>
                                                        <option value="08:30">08:30</option>
                                                        <option value="09:00">09:00</option>
                                                        <option value="09:30">09:30</option>
                                                        <option value="10:00">10:00</option>
                                                        <option value="10:30">10:30</option>
                                                        <option value="11:00">11:00</option>
                                                        <option value="11:30">11:30</option>
                                                        <option value="12:00">12:00</option>
                                                        <option value="12:30">12:30</option>
                                                        <option value="13:00">13:00</option>
                                                        <option value="13:30">13:30</option>
                                                        <option value="14:00">14:00</option>
                                                        <option value="14:30">14:30</option>
                                                        <option value="15:00">15:00</option>
                                                        <option value="15:30">15:30</option>
                                                        <option value="16:00">16:00</option>
                                                        <option value="16:30">16:30</option>
                                                        <option value="17:00">17:00</option>
                                                        <option value="17:30">17:30</option>
                                                        <option value="18:00">18:00</option>
                                                        <option value="18:30">18:30</option>
                                                        <option value="19:00">19:00</option>
                                                        <option value="19:30">19:30</option>
                                                        <option value="20:00">20:00</option>
                                                        <option value="20:30">20:30</option>
                                                        <option value="21:00">21:00</option>
                                                        <option value="21:30">21:30</option>
                                                        <option value="22:00">22:00</option>
                                                        <option value="22:30">22:30</option>
                                                        <option value="23:00">23:00</option>
                                                        <option value="23:30">23:30</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 mb20">
                                                <h5>Return Date & Time</h5>
                                                <div class="date-time-field">
                                                    <input type="text" id="date-picker-2" name="Collection Date"
                                                        value="">
                                                    <select name="Collection Time" id="collection-time">
                                                        <option selected disabled value="Select time">Time</option>
                                                        <option value="00:00">00:00</option>
                                                        <option value="00:30">00:30</option>
                                                        <option value="01:00">01:00</option>
                                                        <option value="01:30">01:30</option>
                                                        <option value="02:00">02:00</option>
                                                        <option value="02:30">02:30</option>
                                                        <option value="03:00">03:00</option>
                                                        <option value="03:30">03:30</option>
                                                        <option value="04:00">04:00</option>
                                                        <option value="04:30">04:30</option>
                                                        <option value="05:00">05:00</option>
                                                        <option value="05:30">05:30</option>
                                                        <option value="06:00">06:00</option>
                                                        <option value="06:30">06:30</option>
                                                        <option value="07:00">07:00</option>
                                                        <option value="07:30">07:30</option>
                                                        <option value="08:00">08:00</option>
                                                        <option value="08:30">08:30</option>
                                                        <option value="09:00">09:00</option>
                                                        <option value="09:30">09:30</option>
                                                        <option value="10:00">10:00</option>
                                                        <option value="10:30">10:30</option>
                                                        <option value="11:00">11:00</option>
                                                        <option value="11:30">11:30</option>
                                                        <option value="12:00">12:00</option>
                                                        <option value="12:30">12:30</option>
                                                        <option value="13:00">13:00</option>
                                                        <option value="13:30">13:30</option>
                                                        <option value="14:00">14:00</option>
                                                        <option value="14:30">14:30</option>
                                                        <option value="15:00">15:00</option>
                                                        <option value="15:30">15:30</option>
                                                        <option value="16:00">16:00</option>
                                                        <option value="16:30">16:30</option>
                                                        <option value="17:00">17:00</option>
                                                        <option value="17:30">17:30</option>
                                                        <option value="18:00">18:00</option>
                                                        <option value="18:30">18:30</option>
                                                        <option value="19:00">19:00</option>
                                                        <option value="19:30">19:30</option>
                                                        <option value="20:00">20:00</option>
                                                        <option value="20:30">20:30</option>
                                                        <option value="21:00">21:00</option>
                                                        <option value="21:30">21:30</option>
                                                        <option value="22:00">22:00</option>
                                                        <option value="22:30">22:30</option>
                                                        <option value="23:00">23:00</option>
                                                        <option value="23:30">23:30</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        {{-- <input type='submit' id='send_message' value='Find a Vehicle'
                                            class="btn-main pull-right"> --}}
                                            <a href="{{route('cars.index')}}" class="btn-main pull-right">Find a Vehicle</a>
                                    </div>

                                </div>

                            </form>
                        </div>
                    </div>
                </div>

                <div class="spacer-single"></div>

                <div class="row">

                    <div class="col-md-3 wow fadeInRight" data-wow-delay=".2s">
                        <div class="feature-box style-4 text-center">
                            <a href="#"><i class="bg-color text-light i-boxed fa fa-car"></i></a>
                            <div class="text">
                                <a href="#">
                                    <h4>Choose a vehicle</h4>
                                </a>
                                Browse our selection of vehicles and choose the one that suits your travel needs.
                            </div>
                            <span class="wm">1</span>
                        </div>
                    </div>

                    <div class="col-md-3 wow fadeInRight" data-wow-delay=".4s">
                        <div class="feature-box style-4 text-center">
                            <a href="#"><i class="bg-color text-light i-boxed fa fa-calendar"></i></a>
                            <div class="text">
                                <a href="#">
                                    <h4>Pick location &amp; date</h4>
                                </a>
                                Select your preferred pickup location and date to book your ride in just a few clicks.
                            </div>
                            <span class="wm">2</span>
                        </div>
                    </div>

                    <div class="col-md-3 wow fadeInRight" data-wow-delay=".6s">
                        <div class="feature-box style-4 text-center">
                            <a href="#"><i class="bg-color text-light i-boxed fa fa-pencil-square-o"></i></a>
                            <div class="text">
                                <a href="#">
                                    <h4>Make a booking</h4>
                                </a>
                                Book your ride in just a few clicks - it's that easy!
                            </div>
                            <span class="wm">3</span>
                        </div>
                    </div>

                    <div class="col-md-3 wow fadeInRight" data-wow-delay=".6s">
                        <div class="feature-box style-4 text-center">
                            <a href="#"><i class="bg-color text-light i-boxed fa fa-smile-o"></i></a>
                            <div class="text">
                                <a href="#">
                                    <h4>Sit back & relax</h4>
                                </a>
                                Get ready to hit the road! Sit back and relax while we prepare your ride for the ultimate driving experience.
                            </div>
                            <span class="wm">3</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="text-light jarallax">
            <img src="{{ asset('welcome/images/background/back3.jpg')}}" class="jarallax-img" alt="openroadscarrental-welcome-background">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeInRight">
                        <h2>Ready for <span class="id-color">adventure? </span> We've got
                            you <span class="id-color">covered</span> for any occasion that you need a <span
                                class="id-color">ride.</span></h2>
                    </div>
                    <div class="col-lg-6 wow fadeInLeft">
                        At <span class="id-color">Open Roads Car Rental</span>, we know that choosing the right car for your travel needs is crucial.
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

        <section aria-label="section" class="pt40 pb40 text-light" data-bgcolor="#181818">
            <div class="wow fadeInRight d-flex">
                <div class="de-marquee-list">
                    <div class="d-item">
                        <span class="d-item-txt">SUV</span>
                        <span class="d-item-display">
                            <i class="d-item-dot"></i>
                        </span>
                        <span class="d-item-txt">Hatchback</span>
                        <span class="d-item-display">
                            <i class="d-item-dot"></i>
                        </span>
                        <span class="d-item-txt">Crossover</span>
                        <span class="d-item-display">
                            <i class="d-item-dot"></i>
                        </span>
                        <span class="d-item-txt">Convertible</span>
                        <span class="d-item-display">
                            <i class="d-item-dot"></i>
                        </span>
                        <span class="d-item-txt">Sedan</span>
                        <span class="d-item-display">
                            <i class="d-item-dot"></i>
                        </span>
                        <span class="d-item-txt">Sports Car</span>
                        <span class="d-item-display">
                            <i class="d-item-dot"></i>
                        </span>
                        <span class="d-item-txt">Coupe</span>
                        <span class="d-item-display">
                            <i class="d-item-dot"></i>
                        </span>
                        <span class="d-item-txt">Minivan</span>
                        <span class="d-item-display">
                            <i class="d-item-dot"></i>
                        </span>
                        <span class="d-item-txt">Station Wagon</span>
                        <span class="d-item-display">
                            <i class="d-item-dot"></i>
                        </span>
                        <span class="d-item-txt">Pickup Truck</span>
                        <span class="d-item-display">
                            <i class="d-item-dot"></i>
                        </span>
                        <span class="d-item-txt">Minivans</span>
                        <span class="d-item-display">
                            <i class="d-item-dot"></i>
                        </span>
                        <span class="d-item-txt">Exotic Cars</span>
                        <span class="d-item-display">
                            <i class="d-item-dot"></i>
                        </span>
                    </div>
                </div>

                <div class="de-marquee-list">
                    <div class="d-item">
                        <span class="d-item-txt">SUV</span>
                        <span class="d-item-display">
                            <i class="d-item-dot"></i>
                        </span>
                        <span class="d-item-txt">Hatchback</span>
                        <span class="d-item-display">
                            <i class="d-item-dot"></i>
                        </span>
                        <span class="d-item-txt">Crossover</span>
                        <span class="d-item-display">
                            <i class="d-item-dot"></i>
                        </span>
                        <span class="d-item-txt">Convertible</span>
                        <span class="d-item-display">
                            <i class="d-item-dot"></i>
                        </span>
                        <span class="d-item-txt">Sedan</span>
                        <span class="d-item-display">
                            <i class="d-item-dot"></i>
                        </span>
                        <span class="d-item-txt">Sports Car</span>
                        <span class="d-item-display">
                            <i class="d-item-dot"></i>
                        </span>
                        <span class="d-item-txt">Coupe</span>
                        <span class="d-item-display">
                            <i class="d-item-dot"></i>
                        </span>
                        <span class="d-item-txt">Minivan</span>
                        <span class="d-item-display">
                            <i class="d-item-dot"></i>
                        </span>
                        <span class="d-item-txt">Station Wagon</span>
                        <span class="d-item-display">
                            <i class="d-item-dot"></i>
                        </span>
                        <span class="d-item-txt">Pickup Truck</span>
                        <span class="d-item-display">
                            <i class="d-item-dot"></i>
                        </span>
                        <span class="d-item-txt">Minivans</span>
                        <span class="d-item-display">
                            <i class="d-item-dot"></i>
                        </span>
                        <span class="d-item-txt">Exotic Cars</span>
                        <span class="d-item-display">
                            <i class="d-item-dot"></i>
                        </span>
                    </div>
                </div>
            </div>
        </section>


    </div>
    <!-- content close -->


@endsection
