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

@section('meta_tgs')
    <meta name="keywords"
        content="Car rental Iceland, Car hire Iceland, car rental, car hire, Iceland, SUV, 4x4, automatic, Ford Kuga, Toyota Rav4, BMW, Ford Kuga 4x4 Automatic, Toyota Rav4 4x4 Automatic, Nissan X-Trail 7 Seater Automatic, BMW 5 Series Luxury Car Model 2020, Dacia Duster, VW Caravelle, CDW insurance, SCDW insurance, TP insurance, GP insurance, SAAP insurance, Unlimited mileage, GPS included, Studded tires, Winter car rental, Car rental prices, Cheap car rental, Best cars for rent, Luxury vehicles, Affordable car hire, Car hire deals, Car hire options, Car hire discounts, Car hire services, Car hire rates">
@endsection
{{-- form wizard stylesheet --}}
<link rel="stylesheet" href="{{ asset('plugins/bs-stepper/css/bs-stepper.min.css') }}">

@section('welcomebody')
    <style>
        .text_justify {
            text-align: justify;
        }

        .carinfo_tour_input {
            border: none;
            border-bottom: 1px solid #ccc;
            outline: none;
            color: #0745a9;
            width: 100%;
        }

        .carinfo_tour_input[readonly] {
            background-color: #ffffff;
        }

        .carinfo_inputs_label {
            padding: 5px;
            padding-left: 8px;
            font-size: 90%;
            font-weight: 700;
            margin-bottom: 0.5rem;
            color: #252525;
            background-color: rgb(228, 228, 228);
            width: 100%;
            border-radius: 3px;
        }

        .carinfo_input_error_msg {
            font-size: 75%;
            color: red;
        }

        .btns_stepper {
            text-align: right;
        }

        .total_ {
            color: rgb(3, 209, 0);
            font-weight: 500;
        }
    </style>
    <!-- content begin -->
    <div class="no-bottom no-top zebra" id="content">
        <div id="top"></div>

        <!-- section begin -->
        <section id="subheader" class="jarallax text-light">
            <img src="{{ asset('welcome/images/background/back1.png') }}" class="jarallax-img"
                alt="openroadscarrental-welcome-background">
            <div class="center-y relative text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h1>Booking Process</h1>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section close -->

        <section id="section-car-details">
            <div class="container">
                {{-- stepper open --}}
                <div class="bs-stepper">
                    <div class="bs-stepper-header" role="tablist">
                        <!-- Step 1 -->
                        <div class="step" data-target="#step3_cars_info">
                            <button type="button" class="step-trigger" role="tab" aria-controls="step3_cars_info"
                                id="step3_cars_info-trigger">
                                <span class="bs-stepper-circle">
                                    <span aria-hidden="true" class="icon_compass_alt"></span>
                                </span>
                                <span class="bs-stepper-label">Car Information</span>
                            </button>
                        </div>
                        <div class="line"></div>
                        <!-- Step 2 -->
                        <div class="step" data-target="#step4_insuarance">
                            <button type="button" class="step-trigger" role="tab" aria-controls="step4_insuarance"
                                id="step4_insuarance-trigger">
                                <span class="bs-stepper-circle">
                                    <span aria-hidden="true" class="icon_shield"></span>
                                </span>
                                <span class="bs-stepper-label">Insuarance</span>
                            </button>
                        </div>
                        <div class="line"></div>
                        <!-- Step 3 -->
                        <div class="step" data-target="#step5_additional_features">
                            <button type="button" class="step-trigger" role="tab"
                                aria-controls="step5_additional_features" id="step5_additional_features-trigger">
                                <span class="bs-stepper-circle">
                                    <span aria-hidden="true" class="icon_link_alt"></span>
                                </span>
                                <span class="bs-stepper-label">Additional Options</span>
                            </button>
                        </div>
                        <div class="line"></div>
                        <!-- Step 4 -->
                        <div class="step" data-target="#step6_user_info">
                            <button type="button" class="step-trigger" role="tab" aria-controls="step6_user_info"
                                id="step6_user_info-trigger">
                                <span class="bs-stepper-circle">
                                    <span aria-hidden="true" class="icon_documents_alt"></span>
                                </span>
                                <span class="bs-stepper-label">User Information</span>
                            </button>
                        </div>
                        <div class="line"></div>
                        <!-- Step 5 -->
                        <div class="step" data-target="#step7_confirmation">
                            <button type="button" class="step-trigger" role="tab" aria-controls="step7_confirmation"
                                id="step7_confirmation-trigger">
                                <span class="bs-stepper-circle">
                                    <span aria-hidden="true" class="icon_check"></span>
                                </span>
                                <span class="bs-stepper-label">Confirmation</span>
                            </button>
                        </div>
                    </div>
                    <div class="line mb-4"></div>
                    <div class="bs-stepper-content">
                        <!-- Step 1 content -->
                        <div id="step3_cars_info" class="content" role="tabpanel" aria-labelledby="step3_cars_info-trigger">
                            {{-- step 1 cars_info content open --}}
                            <div class="row g-3">
                                <div class="col-lg-6">
                                    <div id="slider-carousel" class="owl-carousel">
                                        <div class="item">
                                            <img src="{{ asset('img/cars/' . $selected_car_img->vehicle_image) }}"
                                                alt="">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3">
                                    <div class="de-price text-center">
                                        <h4>ISK <span class="text-danger"
                                                id="step1_rental_cost_isk"><strong>{{ $rental_cost_isk }}</strong></span>/daily
                                        </h4>

                                    </div>
                                    <div class="spacer-20"></div>
                                    <h3>{{ $selected_car_info->displaying_name }}</h3>
                                    <p class="text_justify">{{ $selected_car_info->vehicle_description }}</p>
                                    <div class="spacer-10"></div>
                                    <h4>SPECIFICATIONS</h4>
                                    <div class="de-spec">
                                        <div class="d-row">
                                            <span class="d-title">Category</span>
                                            <spam class="d-value">{{ $selected_car_info->category }}</spam>
                                        </div>
                                        <div class="d-row">
                                            <span class="d-title">Make</span>
                                            <spam class="d-value">{{ $selected_car_info->vehicle_make }}</spam>
                                        </div>
                                        <div class="d-row">
                                            <span class="d-title">Model</span>
                                            <spam class="d-value">{{ $selected_car_info->vehicle_model }}</spam>
                                        </div>
                                        <div class="d-row">
                                            <span class="d-title">Passengers</span>
                                            <spam class="d-value">{{ $selected_car_info->no_of_seats }}</spam>
                                        </div>
                                        <div class="d-row">
                                            <span class="d-title">Suitcases</span>
                                            <spam class="d-value">{{ $selected_car_info->no_of_suitcases }}</spam>
                                        </div>
                                        <div class="d-row">
                                            <span class="d-title">Fuel State</span>
                                            <spam class="d-value">{{ $selected_car_info->fuel_state }}</spam>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3">
                                    <div class="de-box mb10">
                                        <form name="form_carinfo_step1_tour" id='form_carinfo_step1_tour' method="post">
                                            <div class="row">
                                                <div class="col-lg-12 mb20">
                                                    <p class="carinfo_inputs_label">Pick Up Location</p>
                                                    <input readonly name="carinfo_step1_pickup_location"
                                                        id="carinfo_step1_pickup_location"
                                                        placeholder="Enter your pickup location"
                                                        class="carinfo_tour_input form-control">
                                                    <div class="carinfo_input_error_msg"
                                                        id="carinfo_step1_pickup_location_error"></div>
                                                </div>

                                                <div class="col-lg-12 mb20">
                                                    <p class="carinfo_inputs_label">Drop Off Location</p>
                                                    <input readonly name="carinfo_step1_dropoff_location"
                                                        id="carinfo_step1_dropoff_location"
                                                        placeholder="Enter your pickup location"
                                                        class="carinfo_tour_input form-control">
                                                    <div class="carinfo_input_error_msg"
                                                        id="carinfo_step1_dropoff_location_error"></div>
                                                </div>

                                                <div class="col-lg-12 mb20">
                                                    <p class="carinfo_inputs_label">Pick Up Date & Time</p>
                                                    <input readonly class="carinfo_tour_input form-control"
                                                        name="carinfo_step1_pickup_date" id="carinfo_step1_pickup_date"
                                                        type="date">
                                                    <div class="carinfo_input_error_msg"
                                                        id="carinfo_step1_pickup_date_error">
                                                    </div>
                                                    <input readonly class="carinfo_tour_input form-control"
                                                        name="carinfo_step1_pickup_time" id="carinfo_step1_pickup_time"
                                                        type="time">
                                                    <div class="carinfo_input_error_msg"
                                                        id="carinfo_step1_pickup_time_error">
                                                    </div>
                                                </div>

                                                <div class="col-lg-12 mb10">
                                                    <p class="carinfo_inputs_label">Return Date & Time</p>
                                                    <input readonly class="carinfo_tour_input form-control"
                                                        name="carinfo_step1_return_date" id="carinfo_step1_return_date"
                                                        type="date">
                                                    <div class="carinfo_input_error_msg"
                                                        id="carinfo_step1_return_date_error">
                                                    </div>
                                                    <input readonly class="carinfo_tour_input form-control"
                                                        name="carinfo_step1_return_time" id="carinfo_step1_return_time"
                                                        type="time">
                                                    <div class="carinfo_input_error_msg"
                                                        id="carinfo_step1_return_time_error">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            {{-- step 1 cars_info content close --}}
                            <div class="line my-4"></div>
                            <div class="btns_stepper">
                                <button class="btn btn-lg btn-primary btn_next">Next</button>
                            </div>
                        </div>
                        <!-- Step 2 content -->
                        <div id="step4_insuarance" class="content" role="tabpanel"
                            aria-labelledby="step4_insuarance-trigger">
                            {{-- step 2 insuarance content open --}}
                            <div class="row g-3">
                                <div class="col-lg-6">
                                    <h2>Insurance Coverage</h2>
                                    <table class="table table-bordered">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th>INSURANCE COVERAGE TYPE</th>
                                                <th>SILVER</th>
                                                <th>GOLD</th>
                                                <th>PLATINUM</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Third Party Liability Insurance</td>
                                                <td>YES</td>
                                                <td>YES</td>
                                                <td>YES</td>
                                            </tr>
                                            <tr>
                                                <td>Super Collision Damage Waiver</td>
                                                <td>YES</td>
                                                <td>YES</td>
                                                <td>YES</td>
                                            </tr>
                                            <tr>
                                                <td>Theft Protection</td>
                                                <td>YES</td>
                                                <td>YES</td>
                                                <td>YES</td>
                                            </tr>
                                            <tr>
                                                <td>Gravel Protection</td>
                                                <td></td>
                                                <td>YES</td>
                                                <td>YES</td>
                                            </tr>
                                            <tr>
                                                <td>Sand &amp; Ash Protection</td>
                                                <td></td>
                                                <td>YES</td>
                                                <td>YES</td>
                                            </tr>
                                            <tr>
                                                <td>Tire Insurance</td>
                                                <td></td>
                                                <td>YES</td>
                                                <td>YES</td>
                                            </tr>
                                            <tr>
                                                <td>River Crossing Protection</td>
                                                <td></td>
                                                <td></td>
                                                <td>YES</td>
                                            </tr>
                                            <tr>
                                                <td>F-road Insurance</td>
                                                <td></td>
                                                <td></td>
                                                <td>YES</td>
                                            </tr>
                                            <tr>
                                                <td>Damages caused by Animals</td>
                                                <td></td>
                                                <td></td>
                                                <td>YES</td>
                                            </tr>
                                            <tr>
                                                <td>Towing cost - Deductible: 35.000 ISK</td>
                                                <td></td>
                                                <td></td>
                                                <td>YES</td>
                                            </tr>
                                            <tr>
                                                <td>Free Car wifi &amp; Online Check-in</td>
                                                <td></td>
                                                <td></td>
                                                <td>YES</td>
                                            </tr>
                                            <tr>
                                                <td>Damages Not covered by any Insurance</td>
                                                <td></td>
                                                <td></td>
                                                <td>YES</td>
                                            </tr>
                                            <tr>
                                                <td>Insurance Deductible</td>
                                                <td>150.000 ISK</td>
                                                <td>65.000 ISK</td>
                                                <td>0 ISK</td>
                                            </tr>
                                            <tr>
                                                <td>Prices</td>
                                                <td>0 ISK PER DAY</td>
                                                <td>3.250 ISK PER DAY</td>
                                                <td>5.250 ISK PER DAY</td>
                                            </tr>
                                            <tr>
                                                <td>Select insurances</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="col-lg-3">
                                    <div class="de-item mb10">
                                        <div class="d-img">
                                            <h4 class="carinfo_inputs_label">{{ $selected_car_info->displaying_name }}
                                            </h4>
                                            <div class="line my-1"></div>
                                            <img src="{{ asset('img/cars/' . $selected_car_img->vehicle_image) }}"
                                                alt="">
                                        </div>
                                        <div class="spacer-20"></div>
                                        <div class="de-spec">
                                            <h4 class="carinfo_inputs_label">PRICE SUMMARY</h4>
                                            <div class="d-row">
                                                <span class="d-title"><span aria-hidden="true"
                                                        class="icon_calendar"></span></span>
                                                <spam class="d-value" id="step2_date_count"></spam>
                                            </div>
                                            <div class="d-row">
                                                <span class="d-title">Vehicle</span>
                                                <spam class="d-value" id="step2_vehicle_total_price_isk"></spam>
                                            </div>
                                            <div class="d-row">
                                                <span class="d-title">Total</span>
                                                <spam class="d-value total_" id="step2_total"></spam>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-lg-3">
                                    <div class="de-box mb10">
                                        <form name="form_carinfo_step2_tour" id='form_carinfo_step2_tour' method="post">
                                            <div class="row">
                                                <div class="col-lg-12 mb20">
                                                    <p class="carinfo_inputs_label">Pick Up Location</p>
                                                    <input readonly name="carinfo_step2_pickup_location"
                                                        id="carinfo_step2_pickup_location"
                                                        placeholder="Enter your pickup location"
                                                        class="carinfo_tour_input form-control">
                                                    <div class="carinfo_input_error_msg"
                                                        id="carinfo_step2_pickup_location_error"></div>
                                                </div>

                                                <div class="col-lg-12 mb20">
                                                    <p class="carinfo_inputs_label">Drop Off Location</p>
                                                    <input readonly name="carinfo_step2_dropoff_location"
                                                        id="carinfo_step2_dropoff_location"
                                                        placeholder="Enter your pickup location"
                                                        class="carinfo_tour_input form-control">
                                                    <div class="carinfo_input_error_msg"
                                                        id="carinfo_step2_dropoff_location_error"></div>
                                                </div>

                                                <div class="col-lg-12 mb20">
                                                    <p class="carinfo_inputs_label">Pick Up Date & Time</p>
                                                    <input readonly class="carinfo_tour_input form-control"
                                                        name="carinfo_step2_pickup_date" id="carinfo_step2_pickup_date"
                                                        type="date">
                                                    <div class="carinfo_input_error_msg"
                                                        id="carinfo_step2_pickup_date_error">
                                                    </div>
                                                    <input readonly class="carinfo_tour_input form-control"
                                                        name="carinfo_step2_pickup_time" id="carinfo_step2_pickup_time"
                                                        type="time">
                                                    <div class="carinfo_input_error_msg"
                                                        id="carinfo_step2_pickup_time_error">
                                                    </div>
                                                </div>

                                                <div class="col-lg-12 mb10">
                                                    <p class="carinfo_inputs_label">Return Date & Time</p>
                                                    <input readonly class="carinfo_tour_input form-control"
                                                        name="carinfo_step2_return_date" id="carinfo_step2_return_date"
                                                        type="date">
                                                    <div class="carinfo_input_error_msg"
                                                        id="carinfo_step2_return_date_error">
                                                    </div>
                                                    <input readonly class="carinfo_tour_input form-control"
                                                        name="carinfo_step2_return_time" id="carinfo_step2_return_time"
                                                        type="time">
                                                    <div class="carinfo_input_error_msg"
                                                        id="carinfo_step2_return_time_error">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            {{-- step 2 insuarance content close --}}
                            <div class="line my-4"></div>
                            <div class="btns_stepper">
                                <button class="btn btn-lg btn-primary btn_previous">Previous</button>
                                <button class="btn btn-lg btn-primary btn_next">Next</button>
                            </div>
                        </div>
                        <!-- Step 3 content -->
                        <div id="step5_additional_features" class="content" role="tabpanel"
                            aria-labelledby="step5_additional_features-trigger">
                            {{-- step 3 additioanal features content open --}}
                            {{-- step 3 additioanal features content close --}}
                            <div class="line my-4"></div>
                            <div class="btns_stepper">
                                <button class="btn btn-lg btn-primary btn_previous">Previous</button>
                                <button class="btn btn-lg btn-primary btn_next">Next</button>
                            </div>
                        </div>
                        <!-- Step 4 content -->
                        <div id="step6_user_info" class="content" role="tabpanel"
                            aria-labelledby="step6_user_info-trigger">
                            {{-- step 4 user info content open --}}
                            {{-- step 4 user info content close --}}
                            <div class="line my-4"></div>
                            <div class="btns_stepper">
                                <button class="btn btn-lg btn-primary btn_previous">Previous</button>
                                <button class="btn btn-lg btn-primary btn_next">Next</button>
                            </div>
                        </div>
                        <!-- Step 3 content -->
                        <div id="step7_confirmation" class="content" role="tabpanel"
                            aria-labelledby="step7_confirmation-trigger">
                            {{-- step 5 confirmation content open --}}
                            {{-- step 5 confirmation content close --}}
                            <div class="line my-4"></div>
                            <div class="btns_stepper">
                                <button class="btn btn-lg btn-primary btn_previous">Previous</button>
                                <button class="btn btn-lg btn-primary" type="submit">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- stepper close --}}
            </div>
        </section>
    </div>
    <script src="{{ asset('plugins/bs-stepper/js/bs-stepper.min.js') }}"></script>
    <script>
        // stepper navigator open
        $(document).ready(function() {
            var stepper = new Stepper($('.bs-stepper')[0]);
            // Next button click event
            $('.btn_next').on('click', function() {
                stepper.next();
            });
            // Previous button click event
            $('.btn_previous').on('click', function() {
                stepper.previous();
            });
        });
        // stepper navigator close
        // get and set session data from cars page tour open
        $(document).ready(function() {
            // Retrieve the values from sessionStorage and display them
            // step 1
            $('#carinfo_step1_pickup_location').val(sessionStorage.getItem('cars_pickup_location'));
            $('#carinfo_step1_dropoff_location').val(sessionStorage.getItem('cars_dropoff_location'));
            $('#carinfo_step1_pickup_date').val(sessionStorage.getItem('cars_pickup_date'));
            $('#carinfo_step1_return_date').val(sessionStorage.getItem('cars_return_date'));
            $('#carinfo_step1_pickup_time').val(sessionStorage.getItem('cars_pickup_time'));
            $('#carinfo_step1_return_time').val(sessionStorage.getItem('cars_return_time'));
            // step 2
            $('#carinfo_step2_pickup_location').val(sessionStorage.getItem('cars_pickup_location'));
            $('#carinfo_step2_dropoff_location').val(sessionStorage.getItem('cars_dropoff_location'));
            $('#carinfo_step2_pickup_date').val(sessionStorage.getItem('cars_pickup_date'));
            $('#carinfo_step2_return_date').val(sessionStorage.getItem('cars_return_date'));
            $('#carinfo_step2_pickup_time').val(sessionStorage.getItem('cars_pickup_time'));
            $('#carinfo_step2_return_time').val(sessionStorage.getItem('cars_return_time'));

        });
        // get and set session data from cars page tour close
        // step 2 calculation open
        $(document).ready(function() {
            var vehicle_rental_cost_isk = parseFloat($('#step1_rental_cost_isk').text());
            var pickup_date = $('#carinfo_step1_pickup_date').val();
            var return_date = $('#carinfo_step1_return_date').val();
            // Convert pickup and return dates to JavaScript Date objects
            var pickupDateObj = new Date(pickup_date);
            var returnDateObj = new Date(return_date);
            // Calculate the difference in milliseconds between the two dates
            var dateDifference = returnDateObj.getTime() - pickupDateObj.getTime();
            // Convert the date difference from milliseconds to days
            var dateCount = Math.ceil(dateDifference / (1000 * 60 * 60 * 24));
            // Calculate the total cost by multiplying date count and vehicle daily rental
            var vehicle_total_cost_isk = dateCount * vehicle_rental_cost_isk;
            // Display the total cost in the designated element

            $('#step2_date_count').text(dateCount + ' Days');
            $('#step2_vehicle_total_price_isk').text(vehicle_total_cost_isk + ' ISK');
            $('#step2_total').text(vehicle_total_cost_isk + ' ISK');

        });

        // step 2 calculation close
    </script>
    <!-- content close -->
@endsection
