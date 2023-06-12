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
    Cars | Open Roads Car Rental in Iceland
@endsection

@section('meta_desc')
    <meta name="keywords"
        content="Car rental Iceland, Car hire Iceland, car rental, car hire, Iceland, SUV, 4x4, automatic, Ford Kuga, Toyota Rav4, BMW, Ford Kuga 4x4 Automatic, Toyota Rav4 4x4 Automatic, Nissan X-Trail 7 Seater Automatic, BMW 5 Series Luxury Car Model 2020, Dacia Duster, VW Caravelle, CDW insurance, SCDW insurance, TP insurance, GP insurance, SAAP insurance, Unlimited mileage, GPS included, Studded tires, Winter car rental, Car rental prices, Cheap car rental, Best cars for rent, Luxury vehicles, Affordable car hire, Car hire deals, Car hire options, Car hire discounts, Car hire services, Car hire rates">
@endsection

@section('welcomebody')
    <style>
        .text_justify {
            text-align: justify;
        }
    </style>
    <!-- content begin -->
    <div class="no-bottom no-top zebra" id="content">
        <div id="top"></div>

        <!-- section begin -->
        <section id="subheader" class="jarallax text-light">
            <img src="{{ asset('welcome/images/background/back1.jpg') }}" class="jarallax-img" alt="openroadscarrental-welcome-background">
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
                    <div class="col-lg-6">
                        {{-- insuarance --}}
                        <h2>Insuarances</h2>
                        <p class="text_justify">Please Note<span style="color: red">*</span><br><strong>ALL our prices
                                include CDW, SCDW,TP,GP,
                                SAAP Insurances, unlimited mileage,GPS and studded tires during winter.</strong></p>
                        <p class="text_justify">
                            Our goal is to offer transparency throughout the booking process and during your rental period.
                            Usually, the insurance terms are hard to understand, but we want to change that. Here we try to
                            explain the insurances, so they are easy to understand. This way you know what is included and
                            what is not, so nothing should come as a surprise to you.
                        </p>
                        <p class="text_justify">
                            If you have insurance through your credit card and you wish to decline our insurance. Please
                            contact us by email at <strong>openroadscarrental@gmail.com</strong> and we will happily assist you.
                        </p>
                        <p class="text_justify">
                            Included in the price:
                        </p>
                        <p class="text_justify">
                            When you book a car through our website there are four insurances that are included in the price
                            Each insurance has a liability (excess). That means if you happen to have damage to the car when
                            you return it you will be charged the liability (excess) amount.
                        </p>
                        <p class="text_justify">
                            Collision damage waiver and super collision damage waiver (CDW/SCDW) (included)
                        </p>
                        <p class="text_justify">
                            CDW and SCDW cover the bodywork of the car. In a collision, the bodywork is usually the first
                            thing that gets damaged. The liability (excess) depends on the size of the car.
                        </p>
                        {{-- <p class="text_justify">
                            Example: You return a 2WD car with a dent on the passenger door. We inspect the car and see that
                            the damage was not there when you picked up the car. Our employee will let you know about the
                            new damage and charge you 90.000 ISK (approx. $700). The 90.000 ISK (approx. $700) is the
                            absolute maximum you will be charged. If the third-party damage repair report will estimate that
                            the repair will cost less than 90.000 ISK ($700) the difference will be refunded.
                        </p> --}}

                        <h3>GRAVEL PROTECTION (GP) (INCLUDED)</h3>
                        <p class="text_justify">
                            The gravel protection is important insurance while renting a car in Iceland. Gravel are common
                            around the whole Iceland. When driving on gravel roads the small stones will leave chipped paint
                            at the front of the bumper. Chipped paint damages are nothing to worry about and you will not be
                            charged for them.
                        </p>
                        <p class="text_justify">
                            The gravel protection also covers the windscreen, headlights, and mirrors.
                            {{-- The liability
                            (excess) for broken windscreen, headlights, and mirrors is 20.000 ISK (approx. $150). --}}
                        </p>

                        <h3>THEFT PROTECTION (TP) (INCLUDED)</h3>
                        <p class="text_justify">
                            Luckily Iceland is a very safe place and vehicle thefts are not very common. Though this is not
                            common the car is always covered by insurance if it gets stolen. Theft protection has no
                            liability (excess).
                            Keep in mind that TP does not cover items stolen within the vehicle.
                        </p>

                        <h3>SAND & ASH PROTECTION (SAAP) (INCLUDED)</h3>
                        <p class="text_justify">
                            The SAAP insurance was introduced because our standard insurance did not cover sand and ash
                            damages. Sand damage is very common damage, especially when driving on the south coast. This can
                            happen all year round.
                        </p>
                        <p class="text_justify">
                            Sand and ash damages are extremely costly and without the SAAP the cost for the damage
                            is completely the renter’s responsibility.
                            {{-- The SAAP reduces the liability down to 90.000 ISK (approx. $900)
                            The price per day is 1.650 ISK --}}
                        </p>

                        <h3>LIABILITY WAIVER (INCLUDED)</h3>
                        <p class="text_justify">
                            All our customers can reduce their liability to zero by opting for our Liability Waiver. As many
                            of our customers wanted to have a carefree experience while driving around Iceland, we
                            introduced the Liability Waiver. This allows our renters to drive carefree with <strong>Open Roads Car Rental</strong>
                            while enjoying our beautiful Iceland.
                        </P>
                        <P class="text_justify">
                            Keep in mind that the Liability Waiver is not extra insurance but an option for our renters to
                            waive their liability in case of any damage covered by our insurance. This includes CDW/SCDW,
                            GP, TP, SAAP, and Tire Protection and is subject to the terms and conditions of the Rental
                            Agreement.
                             {{-- Excluded are any damages not covered by insurance as stated in Article 29 and 32 in
                            the Rental Agreement and terms and conditions. --}}
                        </P>
                        <P class="text_justify">
                            *Note - Tire Protection only covers the damage of the tire, i.e. the repair or cost of new tire.
                            It does NOT cover the assistance required. By purchasing Roadside Assistance Waiver the cost for
                            the assistance is waived.
                        </P>
                        {{-- <P class="text_justify">
                            Example: You return a 2WD car with a dent on the passenger door and sand damages. We inspect the
                            car and see that the damage was not there when you picked up the car. Our employee will let you
                            know about the new damage but because you opt for the liability waiver there will be nothing
                            charged.
                        </P> --}}
                        <P class="text_justify">
                            Liability Waiver reduces liability on each insurance down to zero.
                        </P>
                        {{-- <P class="text_justify">
                            The price per day is 3.800 ISK for 2WD and 4.900 ISK for 4WD and vans.
                        </p> --}}
                    </div>


                    <div class="col-lg-3">
                        <h3 id="vehicle_description"></h3>
                        <p id="vehicleMoreinf"></p>

                        <div class="spacer-10"></div>

                        <h4>Specifications</h4>
                        <div class="de-spec">
                            <div class="item" id="CarImage">

                            </div>
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
                                name="additional_baby_seat">
                            <label class="form-check-label" for="additional_baby_seat"><strong>Baby Seat</strong><span>|ISK
                                    1000/daily</span></label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="additional_wifi"
                                name="additional_wifi">
                            <label class="form-check-label" for="additional_wifi"><strong>WIFI
                                    (Unlimited)</strong><span>|ISK 1300/daily</span></label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="additional_driver"
                                name="additional_driver">
                            <label class="form-check-label" for="additional_driver"><strong>Extra
                                    Driver</strong><span>|FREE</span></label>
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



    {{-- @include('layout.footer') --}}
@endsection
