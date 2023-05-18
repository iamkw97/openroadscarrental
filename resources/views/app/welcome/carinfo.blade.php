@extends('app.welcome.layout.app')

@section('title')
    Cars | Open Roads Car Rental
@endsection

@section('welcomebody')
    <!-- content begin -->
    <div class="no-bottom no-top zebra" id="content">
        <div id="top"></div>

        <!-- section begin -->
        <section id="subheader" class="jarallax text-light">
            <img src="{{ asset('welcome/images/background/2.jpg') }}" class="jarallax-img" alt="">
            <div class="center-y relative text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h1>BMW M2 2020</h1>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section close -->

        <section id="section-car-details">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-6">
                        <div id="slider-carousel" class="owl-carousel">
                            <div class="item">
                                <img src="{{ asset('welcome/images/car-single/1.jpg') }}" alt="">
                            </div>
                            <div class="item">
                                <img src="{{ asset('welcome/images/car-single/2.jpg') }}" alt="">
                            </div>
                            <div class="item">
                                <img src="{{ asset('welcome/images/car-single/3.jpg') }}" alt="">
                            </div>
                            <div class="item">
                                <img src="{{ asset('welcome/images/car-single/4.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>

                <div class="col-lg-3">
                    <h3 id="vehicle_description"></h3>
                    <p>The BMW M2 is the high-performance version of the 2 Series 2-door coupé. The first generation of the M2 is the F87 coupé and is powered by turbocharged.</p>

                        <div class="spacer-10"></div>

                    <h4>Specifications</h4>
                    <div class="de-spec">
                        <div class="d-row">
                            <span class="d-title">Vehicle Category</span>
                            <spam class="d-value" id="VehicleCategory"></spam>
                        </div>
                        <div class="d-row">
                            <span class="d-title">Vehicle Make</span>
                            <spam class="d-value" id="VehicleMake"></spam>
                        </div>

                        <div class="d-row">
                            <span class="d-title">Vehicle Model</span>
                            <spam class="d-value" id="VehicleModel"></spam>
                        </div>
                        <div class="d-row">
                            <span class="d-title">Number of Seats</span>
                            <spam class="d-value" id="NumberofSeats"></spam>
                        </div>
                        <div class="d-row">
                            <span class="d-title">Number of Suitcases</span>
                            <spam class="d-value" id="NumberofSuitcases"></spam>
                        </div>
                        <div class="d-row">
                            <span class="d-title">Condition</span>
                            <spam class="d-value" id="condition">2020</spam>
                        </div>
                        <div class="d-row">
                            <span class="d-title">Fuel State</span>
                            <spam class="d-value" id="FuelState"></spam>
                        </div>

                    </div>

                        <div class="spacer-single"></div>

                        <h4>Features</h4>
                        <ul class="ul-style-2">
                            <li>Bluetooth</li>
                            <li>Multimedia Player</li>
                            <li>Central Lock</li>
                            <li>Sunroof</li>
                        </ul>
                    </div>

                    <div class="col-lg-3">
                        <div class="de-price text-center">
                            Daily rate
                            <h3>$265</h3>
                        </div>
                        <div class="spacer-30"></div>
                        <div class="de-box mb25">
                            <form name="contactForm" id='contact_form' method="post">
                                <h4>Booking this car</h4>

                                <div class="spacer-20"></div>

                            <div class="row">
                                <div class="col-lg-12 mb20">

                                    <input id="car_id"  name="car_engine_3" type="hidden" >

                                        {{-- <input type="text"   id="pickup-timefinal" name="Pick Up Date" value=""> --}}

                                </div>
                                <div class="col-lg-12 mb20">
                                    <h5>Pick Up Location</h5>
                                    {{-- <input type="text" name="PickupLocationfinal"  placeholder="Enter your pickup location" id="PickupLocationfinal"  class="form-control"> --}}
                                    <select name="" id="PickupLocationfinal"
                                    style="border: none; border-bottom: 1px solid #ccc; outline: none; color:#0745a9;"
                                    name="PickupLocation"
                                    placeholder="Enter your pickup location"
                                    autocomplete="off" class="form-control">
                                    <option selected value="">Select Location</option>
                                    <option  value="kef_airport">KEF Airport</option>
                                    <option value="reykjavik">Reykjavik</option>
                                </select>
                                    <div class="jls-address-preview jls-address-preview--hidden">
                                        <div class="jls-address-preview__header">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12 mb20">
                                    <h5>Drop Off Location</h5>
                                    {{-- <input type="text" name="DropoffLocationfinal"  placeholder="Enter your dropoff location" id="DropoffLocationfinal"  class="form-control"> --}}
                                    <select name="" id="DropoffLocationfinal"
                                    style="width: 100%; border: none; border-bottom: 1px solid #ccc; outline: none; color:#0745a9;"
                                                    name="PickupLocation"
                                                    placeholder="Enter your pickup location"
                                                    autocomplete="off" class="form-control" >
                                                    <option selected value="">Select Location</option>
                                                    <option  value="reykjavik">Reykjavik</option>
                                                    <option value="kef_airport">KEF Airport</option>
                                                    <option value="same_location">[Return to the same location]</option>
                                                </select>
                                    <div class="jls-address-preview jls-address-preview--hidden">
                                        <div class="jls-address-preview__header">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12 mb20">
                                    <h5>Pick Up Date & Time</h5>
                                    <input id="date-pickerfinal"  name="car_engine_3" type="date" style=" width: 100%; border: none; border-bottom: 1px solid #ccc; outline: none; color:#0745a9;">
                                    <input id="pickup-timefinal"  name="car_engine_3" type="time" style=" width: 100%; border: none; border-bottom: 1px solid #ccc; outline: none; color:#0745a9; margin-top:10px;">
                                        {{-- <input type="text"   id="pickup-timefinal" name="Pick Up Date" value=""> --}}

                                </div>

                                <div class="col-lg-12 mb20">
                                    <h5>Return Date & Time</h5>
                                    <div class="date-time-field">
                                        <input id="date-dropfinal"  name="car_engine_3" type="date" style=" width: 100%; border: none; border-bottom: 1px solid #ccc; outline: none; color:#0745a9;">
                                        <input id="dropoff-timefinal"  name="car_engine_3" type="time" style=" width: 100%; border: none; border-bottom: 1px solid #ccc; outline: none; color:#0745a9; margin-top:10px;">
                                    </div>
                                </div>
                            </div>

                            <input type='submit' id='send_message' value='Book Now' class="btn-main btn-fullwidth">

                                <div class="clearfix"></div>

                            </form>
                        </div>

                        <div class="de-box">
                            <h4>Share</h4>
                            <div class="de-color-icons">
                                <span><i class="fa fa-twitter fa-lg"></i></span>
                                <span><i class="fa fa-facebook fa-lg"></i></span>
                                <span><i class="fa fa-reddit fa-lg"></i></span>
                                <span><i class="fa fa-linkedin fa-lg"></i></span>
                                <span><i class="fa fa-pinterest fa-lg"></i></span>
                                <span><i class="fa fa-stumbleupon fa-lg"></i></span>
                                <span><i class="fa fa-delicious fa-lg"></i></span>
                                <span><i class="fa fa-envelope fa-lg"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </div>
    <!-- content close -->

<a href="#" id="back-to-top"></a>

{{-- @include('layout.footer') --}}
@endsection
