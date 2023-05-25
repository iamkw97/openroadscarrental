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
            <img src="{{ asset('welcome/images/background/back1.jpg') }}" class="jarallax-img" alt="">
            <div class="center-y relative text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h1 id="vehicle_header_name"></h1>
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
                    <div class="col-lg-5">
                        <div id="slider-carousel" class="owl-carousel">
                            {{-- <div class="item">
                                <img src="{{ asset('welcome/images/car-single/1.jpg') }}" alt="">
                            </div> --}}

                        </div>
                    </div>

                    <div class="col-lg-4">
                        <h3 id="vehicle_description"></h3>
                        <p id="vehicleMoreinf"></p>

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
                                <span class="d-title">Passengers</span>
                                <spam class="d-value" id="NumberofSeats"></spam>
                            </div>
                            <div class="d-row">
                                <span class="d-title">Suitcases</span>
                                <spam class="d-value" id="NumberofSuitcases"></spam>
                            </div>
                            <div class="d-row">
                                <span class="d-title">Condition</span>
                                <spam class="d-value" id="condition"></spam>
                            </div>
                            <div class="d-row">
                                <span class="d-title">Fuel State</span>
                                <spam class="d-value" id="FuelState"></spam>
                            </div>
                        </div>

                        <div class="spacer-single"></div>

                        <h4>Additional Features</h4>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="additional_baby_seat"
                                name="additional_baby_seat" onchange="updateTotalCost()">
                            <label class="form-check-label" for="additional_baby_seat"><strong>Baby Seat</strong> <span>/ISK
                                    1000 per day</span></label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="additional_wifi"
                                name="additional_wifi" onchange="updateTotalCost()">
                            <label class="form-check-label" for="additional_wifi"><strong>WIFI (Unlimited)</strong><span>/ISK 1300 per
                                    day</span></label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="additional_driver"
                                name="additional_driver" onchange="updateTotalCost()">
                            <label class="form-check-label" for="additional_driver"><strong>Extra Driver</strong><span>/FREE</span></label>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="de-price text-center">
                            Daily Rate<h4>ISK <span id="total_cost"></span></h4>
                        </div>
                        <div class="spacer-30"></div>
                        <div class="de-box mb10">
                            <form name="contactForm" id='contact_form' method="post">
                                <div class="row">
                                    <div class="col-lg-12 mb20">
                                        <input id="car_id" name="car_engine_3" type="hidden">
                                    </div>
                                    <div class="col-lg-12 mb20">
                                        <h5>Pick Up Location</h5><select name="" id="PickupLocationfinal"
                                            style="border: none; border-bottom: 1px solid #ccc; outline: none; color:#0745a9;"
                                            name="PickupLocation" placeholder="Enter your pickup location"
                                            autocomplete="off" class="form-control">
                                            <option selected value="">Select Location</option>
                                            <option value="kef_airport">KEF Airport</option>
                                            <option value="reykjavik">Reykjavik</option>
                                        </select>
                                        <div class="jls-address-preview jls-address-preview--hidden">
                                            <div class="jls-address-preview__header">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 mb20">
                                        <h5>Drop Off Location</h5><select name="" id="DropoffLocationfinal"
                                            style="width: 100%; border: none; border-bottom: 1px solid #ccc; outline: none; color:#0745a9;"
                                            name="PickupLocation" placeholder="Enter your pickup location"
                                            autocomplete="off" class="form-control">
                                            <option selected value="">Select Location</option>
                                            <option value="reykjavik">Reykjavik</option>
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
                                        <input id="date-pickerfinal" name="car_engine_3" type="date"
                                            style=" width: 100%; border: none; border-bottom: 1px solid #ccc; outline: none; color:#0745a9;">
                                        <input id="pickup-timefinal" name="car_engine_3" type="time"
                                            style=" width: 100%; border: none; border-bottom: 1px solid #ccc; outline: none; color:#0745a9; margin-top:10px;">
                                    </div>

                                    <div class="col-lg-12 mb20">
                                        <h5>Return Date & Time</h5>
                                        <div class="date-time-field">
                                            <input id="date-dropfinal" name="car_engine_3" type="date"
                                                style=" width: 100%; border: none; border-bottom: 1px solid #ccc; outline: none; color:#0745a9;">
                                            <input id="dropoff-timefinal" name="car_engine_3" type="time"
                                                style=" width: 100%; border: none; border-bottom: 1px solid #ccc; outline: none; color:#0745a9; margin-top:10px;">
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-primary" id="submit_btn">Book Now</button>
                                <div class="clearfix"></div>

                            </form>
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
