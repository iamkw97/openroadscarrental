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
    Iceland car rental | Rent 4x4 or luxury cars in Iceland
@endsection

@section('meta_tgs')
    <meta name="keywords"
        content="Car rental Iceland, Car hire Iceland, car rental, car hire, Iceland, SUV, 4x4, automatic, Ford Kuga, Toyota Rav4, BMW, Ford Kuga 4x4 Automatic, Toyota Rav4 4x4 Automatic, Nissan X-Trail 7 Seater Automatic, BMW 5 Series Luxury Car Model 2020, Dacia Duster, VW Caravelle, CDW insurance, SCDW insurance, TP insurance, GP insurance, SAAP insurance, Unlimited mileage, GPS included, Studded tires, Winter car rental, Car rental prices, Cheap car rental, Best cars for rent, Luxury vehicles, Affordable car hire, Car hire deals, Car hire options, Car hire discounts, Car hire services, Car hire rates">
@endsection

@section('welcomebody')
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
                            <div class="container" style="position: relative; top:150px;">
                                <!-- For demo purpose -->
                                <div class="row py-5">
                                    <div class="col-lg-9 mx-auto text-white text-center">
                                        <form action="">
                                            <div class="p-1 bg-light rounded rounded-pill shadow-sm mb-4"
                                                style="opacity: 0.9;">
                                                <div class="input-group">
                                                    <input type="search" placeholder="What're you searching for?"
                                                        aria-describedby="button-addon1"
                                                        class="form-control border-0 bg-light">
                                                    <div class="input-group-append">
                                                        <button id="button-addon1" type="submit"
                                                            class="btn btn-link text-primary"><i
                                                                class="fa fa-search"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <h3 class="lead">
                                            Choose your prefered car
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
        </section>
        <!-- section close -->

        <section id="section-cars">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">

                        <div class="item_filter_group">
                            <h4>Booking Details</h4>
                            <div class="de_form">

                                <div class="de_checkbox" style=" margin-top:5px; margin-bottom:5px;">
                                    <small>Pickup Location</small>
                                    <select name="" id="picklocation"
                                        style=" width: 100%; border: none; border-bottom: 1px solid #ccc; outline: none; color:#0745a9;"
                                        name="PickupLocation" placeholder="Enter your pickup location" autocomplete="off"
                                        class="form-control">
                                        <option selected value="">Select Location</option>
                                        <option value="kef_airport">KEF Airport</option>
                                        <option value="reykjavik">Reykjavik</option>
                                    </select>

                                </div>

                                <div class="de_checkbox" style=" margin-top:5px; margin-bottom:5px;">
                                    <small>Return Location</small>
                                    <select name="" id="droplocation"
                                        style="width: 100%; border: none; border-bottom: 1px solid #ccc; outline: none; color:#0745a9;"
                                        name="PickupLocation" placeholder="Enter your pickup location" autocomplete="off"
                                        class="form-control">
                                        <option selected value="">Select Location</option>
                                        <option value="reykjavik">Reykjavik</option>
                                        <option value="kef_airport">KEF Airport</option>
                                        <option value="same_location">[Return to the same location]</option>
                                    </select>
                                </div>

                                <div class="de_checkbox" style=" margin-top:5px; margin-bottom:5px;">
                                    <small>Pickup Date</small>
                                    <input id="pickdate" name="car_engine_3" type="date"
                                        style="width: 100%; border: none; border-bottom: 1px solid #ccc; outline: none; color:#0745a9;">

                                </div>

                                <div class="de_checkbox" style="margin-top:5px; margin-bottom:5px;">
                                    <small>Drop-off Date</small>
                                    <input id="dropdate" name="car_engine_4" type="date"
                                        style="width: 100%; border: none; border-bottom: 1px solid #ccc; outline: none; color:#0745a9;">

                                </div>
                                <div class="de_checkbox" style="margin-top:5px; margin-bottom:5px;">
                                    <small>Pickup Time</small>
                                    <input id="pickup_time" name="car_engine_3" type="time"
                                        style="width: 100%; border: none; border-bottom: 1px solid #ccc; outline: none; color:#0745a9;">

                                </div>

                                <div class="de_checkbox" style="margin-top:5px; margin-bottom:5px;">
                                    <small>Drop-off Time</small>
                                    <input id="droptime" name="car_engine_4" type="time"
                                        style="width: 100%; border: none; border-bottom: 1px solid #ccc; outline: none; color:#0745a9;">

                                </div>

                            </div>
                        </div>
                        <div class="item_filter_group">
                            <h4>Vehicle Type</h4>
                            <div class="de_form">
                                <div class="de_checkbox VehicleCategory">
                                    <input id="vehicle_type_1" name="vehicle_type_1" type="checkbox" value="vehicle_type_1">
                                    <label for="vehicle_type_1">Car</label>
                                </div>

                                <div class="de_checkbox VehicleCategory">
                                    <input id="vehicle_type_2" name="vehicle_type_2" type="checkbox"
                                        value="vehicle_type_2">
                                    <label for="vehicle_type_2">Van</label>
                                </div>

                                <div class="de_checkbox VehicleCategory">
                                    <input id="vehicle_type_3" name="vehicle_type_3" type="checkbox"
                                        value="vehicle_type_3">
                                    <label for="vehicle_type_3">Minibus</label>
                                </div>

                                <div class="de_checkbox VehicleCategory">
                                    <input id="vehicle_type_4" name="vehicle_type_4" type="checkbox"
                                        value="vehicle_type_4">
                                    <label for="vehicle_type_4">Prestige</label>
                                </div>

                            </div>
                        </div>

                        <div class="item_filter_group seatCount">
                            <h4>Car Seats</h4>
                            <div class="de_form">
                                <div class="de_checkbox">
                                    <input id="car_seat_3" name="car_seat_3" type="checkbox" value="car_seat_3">
                                    <label for="car_seat_3">3 seats</label>
                                </div>
                                <div class="de_checkbox">
                                    <input id="car_seat_4" name="car_seat_4" type="checkbox" value="car_seat_4">
                                    <label for="car_seat_4">4 seats</label>
                                </div>

                                <div class="de_checkbox">
                                    <input id="car_seat_5" name="car_seat_5" type="checkbox" value="car_seat_5">
                                    <label for="car_seat_5">5 seats</label>
                                </div>

                                <div class="de_checkbox">
                                    <input id="car_seat_6" name="car_seat_6" type="checkbox" value="car_seat_6">
                                    <label for="car_seat_6">7 seats</label>
                                </div>

                                <div class="de_checkbox">
                                    <input id="car_seat_8" name="car_seat_8" type="checkbox" value="car_seat_8">
                                    <label for="car_seat_8">8 seats</label>
                                </div>
                                <div class="de_checkbox">
                                    <input id="car_seat_10" name="car_seat_10" type="checkbox" value="car_seat_10">
                                    <label for="car_seat_10">10 seats</label>
                                </div>
                                <div class="de_checkbox">
                                    <input id="car_seat_10+" name="car_seat_10+" type="checkbox" value="car_seat_10+">
                                    <label for="car_seat_10+">10+ seats</label>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-9" id="car-list">
                        <div class="row pagi" id="pagi"></div>
                        <div class="pagination" id="pagination">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- content close -->
    <script></script>
@endsection
