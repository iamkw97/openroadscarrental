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
    {{ $selected_car_info->displaying_name }} | Open Roads Car Rental in Iceland
@endsection

@section('meta_tgs')
    <meta name="keywords"
        content="Car rental Iceland, Car hire Iceland, car rental, car hire, Iceland, SUV, 4x4, automatic, Ford Kuga, Toyota Rav4, BMW, Ford Kuga 4x4 Automatic, Toyota Rav4 4x4 Automatic, Nissan X-Trail 7 Seater Automatic, BMW 5 Series Luxury Car Model 2020, Dacia Duster, VW Caravelle, CDW insurance, SCDW insurance, TP insurance, GP insurance, SAAP insurance, Unlimited mileage, GPS included, Studded tires, Winter car rental, Car rental prices, Cheap car rental, Best cars for rent, Luxury vehicles, Affordable car hire, Car hire deals, Car hire options, Car hire discounts, Car hire services, Car hire rates">
@endsection
{{-- form wizard stylesheet --}}

@section('welcomebody')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.7.5/sweetalert2.min.css"
        integrity="sha512-InYSgxgTnnt8BG3Yy0GcpSnorz5gxHvT6OEoRWj91Gg+RvNdCiAharnBe+XFIDS754Kd9TekdjXw3V7TAgh6Vw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('plugins/bs-stepper/css/bs-stepper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('welcome/fonts/et-line-font/style.css') }}">
    <link rel="stylesheet" href="{{ asset('welcome/fonts/font-awesome/css/font-awesome.min.css') }}">
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

        .carinfo_inputs_label_ {
            padding: 7px;
            padding-left: 8px;
            font-size: 100%;
            font-weight: 700;
            margin-bottom: 1rem;
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

        .align_text_center {
            text-align: center;
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
                                <span class="bs-stepper-label">Personal Information</span>
                            </button>
                        </div>
                        <div class="line"></div>
                        <!-- Step 5 -->
                        {{-- <div class="step" data-target="#step7_confirmation">
                            <button type="button" class="step-trigger" role="tab" aria-controls="step7_confirmation"
                                id="step7_confirmation-trigger">
                                <span class="bs-stepper-circle">
                                    <span aria-hidden="true" class="icon_check"></span>
                                </span>
                                <span class="bs-stepper-label">Confirmation</span>
                            </button>
                        </div> --}}
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
                                            <img src="{{ asset('img/cars/' . $selected_car_info->vehicle_image) }}"
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
                                    <input type="hidden" name="vehicle_ID" id="vehicle_ID"
                                        value="{{ $selected_car_info->id }}">
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
                                                        class="carinfo_tour_input carinfo_pickup_location form-control">
                                                    <div class="carinfo_input_error_msg"
                                                        id="carinfo_step1_pickup_location_error"></div>
                                                </div>

                                                <div class="col-lg-12 mb20">
                                                    <p class="carinfo_inputs_label">Drop Off Location</p>
                                                    <input readonly name="carinfo_step1_dropoff_location"
                                                        id="carinfo_step1_dropoff_location"
                                                        placeholder="Enter your pickup location"
                                                        class="carinfo_tour_input carinfo_dropoff_location form-control">
                                                    <div class="carinfo_input_error_msg"
                                                        id="carinfo_step1_dropoff_location_error"></div>
                                                </div>

                                                <div class="col-lg-12 mb20">
                                                    <p class="carinfo_inputs_label">Pick Up Date & Time</p>
                                                    <input readonly
                                                        class="carinfo_tour_input carinfo_pickup_date form-control"
                                                        name="carinfo_step1_pickup_date" id="carinfo_step1_pickup_date"
                                                        type="date">
                                                    <div class="carinfo_input_error_msg"
                                                        id="carinfo_step1_pickup_date_error">
                                                    </div>
                                                    <input readonly
                                                        class="carinfo_tour_input carinfo_pickup_time form-control"
                                                        name="carinfo_step1_pickup_time" id="carinfo_step1_pickup_time"
                                                        type="time">
                                                    <div class="carinfo_input_error_msg"
                                                        id="carinfo_step1_pickup_time_error">
                                                    </div>
                                                </div>

                                                <div class="col-lg-12 mb10">
                                                    <p class="carinfo_inputs_label">Return Date & Time</p>
                                                    <input readonly
                                                        class="carinfo_tour_input carinfo_return_date form-control"
                                                        name="carinfo_step1_return_date" id="carinfo_step1_return_date"
                                                        type="date">
                                                    <div class="carinfo_input_error_msg"
                                                        id="carinfo_step1_return_date_error">
                                                    </div>
                                                    <input readonly
                                                        class="carinfo_tour_input carinfo_return_time form-control"
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
                                <a href="/cars" class="btn btn-lg btn-secondary">Back</a>
                                <button class="btn btn-lg btn-primary btn_next">Next</button>
                            </div>
                        </div>
                        <!-- Step 2 content -->
                        <div id="step4_insuarance" class="content" role="tabpanel"
                            aria-labelledby="step4_insuarance-trigger">
                            {{-- step 2 insuarance content open --}}
                            <div class="row g-3">
                                <div class="col-lg-6">
                                    <h3 class="carinfo_inputs_label_">INSURANCE COVERAGE</h3>
                                    <div class="table-responsive">
                                    <table id="ins_table" class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">
                                                    <span class="text-uppercase fs-16 text-gray bold">INSURANCE
                                                        COVERAGE</span>
                                                </th>
                                                <th scope="col" class="align_text_center">
                                                    <span class="text-uppercase fs-16 text-gray"><strong>SILVER</strong>
                                                        <br> (BASIC)</span>
                                                </th>
                                                <th scope="col" class="align_text_center">
                                                    <span class="text-uppercase fs-16 text-gray"><strong>GOLD</strong> <br>
                                                        (GOOD VALUE)<span>
                                                </th>
                                                <th scope="col" class="align_text_center">
                                                    <span class="text-uppercase fs-16 text-gray"><strong>PLATINUM</strong>
                                                        <br> (BEST COVER)</span>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><span class="bold">Third Party Liability Insurance</span>
                                                </td>
                                                <td class="align_text_center"> <div class="badge badge-lg rounded-pill bg-secondary">YES</div>
                                                </td>
                                                <td class="align_text_center"><div class="badge badge-lg rounded-pill bg-warning">YES</div>
                                                </td>
                                                <td class="align_text_center">  <div class="badge badge-lg rounded-pill bg-primary">YES</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                     <span class="bold">Super Collision Damage Waiver</span>
                                                </td>
                                                <td class="align_text_center">
                                                    <div class="badge badge-lg rounded-pill bg-secondary">YES</div>
                                                </td>
                                                <td class="align_text_center">
                                                    <div class="badge badge-lg rounded-pill bg-warning">YES</div>
                                                </td>
                                                <td class="align_text_center">
                                                    <div class="badge badge-lg rounded-pill bg-primary">YES</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                     <span class="bold">Theft Protection</span>
                                                </td>
                                                <td class="align_text_center">
                                                    <div class="badge badge-lg rounded-pill bg-secondary">YES</div>
                                                </td>
                                                <td class="align_text_center">
                                                    <div class="badge badge-lg rounded-pill bg-warning">YES</div>
                                                </td>
                                                <td class="align_text_center">
                                                    <div class="badge badge-lg rounded-pill bg-primary">YES</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                     <span class="bold">Gravel Protection</span>
                                                </td>
                                                <td class="align_text_center">
                                                    <div class="">-</div>
                                                </td>
                                                <td class="align_text_center">
                                                    <div class="badge badge-lg rounded-pill bg-warning">YES</div>
                                                </td>
                                                <td class="align_text_center">
                                                    <div class="badge badge-lg rounded-pill bg-primary">YES</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="bold">Sand &amp; Ash Protection</span>
                                                </td>
                                                <td class="align_text_center">
                                                    <div class="">-</div>
                                                </td>
                                                <td class="align_text_center">
                                                    <div class="badge badge-lg rounded-pill bg-warning">YES</div>
                                                </td>
                                                <td class="align_text_center">
                                                    <div class="badge badge-lg rounded-pill bg-primary">YES</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="bold">Tire Insurance</span>
                                                </td>
                                                <td class="align_text_center">
                                                    <div class="">-</div>
                                                </td>
                                                <td class="align_text_center">
                                                    <div class="badge badge-lg rounded-pill bg-warning">YES</div>
                                                </td>
                                                <td class="align_text_center">
                                                    <div class="badge badge-lg rounded-pill bg-primary">YES</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="bold">River Crossing Protection</span>
                                                </td>
                                                <td class="align_text_center">
                                                    <div class="">-</div>
                                                </td>
                                                <td class="align_text_center">
                                                    <div class="">-</div>
                                                </td>
                                                <td class="align_text_center">
                                                    <div class="badge badge-lg rounded-pill bg-primary">YES</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="bold">F-road Insurance</span>
                                                </td>
                                                <td class="align_text_center">
                                                    <div class="">-</div>
                                                </td>
                                                <td class="align_text_center">
                                                    <div class="">-</div>
                                                </td>
                                                <td class="align_text_center">
                                                    <div class="badge badge-lg rounded-pill bg-primary">YES</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                   <span class="bold">Damages caused by Animals</span>
                                                </td>
                                                <td class="align_text_center">
                                                    <div class="">-</div>
                                                </td>
                                                <td class="align_text_center">
                                                    <div class="">-</div>
                                                </td>
                                                <td class="align_text_center">
                                                    <div class="badge badge-lg rounded-pill bg-primary">YES</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="bold">Towing cost - Deductible : 35.000 ISK</span>
                                                </td>
                                                </td>
                                                <td class="align_text_center">
                                                    <div class="">-</div>
                                                </td>
                                                <td class="align_text_center">
                                                    <div class="">-</div>
                                                </td>
                                                <td class="align_text_center">
                                                    <div class="badge badge-lg rounded-pill bg-primary">YES</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="bold">Damages Not covered by any
                                                        Insurance</span>
                                                </td>
                                                <td class="align_text_center">
                                                    <div class="">-</div>
                                                </td>
                                                <td class="align_text_center">
                                                    <div class="">-</div>
                                                </td>
                                                <td class="align_text_center">
                                                    <div class="badge badge-lg rounded-pill bg-primary">YES</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                   <span class="bold">Insurance Deductible</span>
                                                </td>
                                                </td>
                                                <td class="align_text_center">
                                                    <div class="badge badge-lg rounded-pill bg-danger">150.000 ISK</div>
                                                </td>
                                                <td class="align_text_center">
                                                    <div class="badge badge-lg rounded-pill bg-danger">65.000 ISK</div>
                                                </td>
                                                <td class="align_text_center">
                                                    <div class="badge badge-lg rounded-pill bg-danger">0 ISK</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                   <span class="bold">Prices</span>
                                                </td>
                                                <td class="align_text_center">
                                                    <div class="badge badge-lg rounded-pill bg-success">0 ISK / Daily</div>
                                                </td>
                                                <td class="align_text_center">
                                                    <div class="badge badge-lg rounded-pill bg-success">3.250 ISK / Daily
                                                    </div>
                                                </td>
                                                <td class="align_text_center">
                                                    <div class="badge badge-lg rounded-pill bg-success">5.250 ISK / Daily
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="carinfo_inputs_label p-1">
                                                <td class="ml-1 fs-16">
                                                    <span class="bold">SELECT INSURANCE</span>
                                                </td>
                                                <td class="align_text_center">
                                                    <div class="form-check align_text_center">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="silver_insurance">
                                                    </div>
                                                </td>
                                                <td class="align_text_center">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="gold_insurance">
                                                    </div>
                                                </td>
                                                <td class="align_text_center">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="platinum_insurance">
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>

                                </div>

                                <div class="col-lg-3">
                                    <div class="de-item mb10">
                                        <div class="d-img mt-1">
                                            <h4 class="carinfo_inputs_label">{{ $selected_car_info->displaying_name }}
                                            </h4>
                                            <div class="my-2"></div>
                                            <img src="{{ asset('img/cars/' . $selected_car_info->vehicle_image) }}"
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
                                            <div class="d-row carinfo_inputs_label p-1" id="div_step2_insurance_label">
                                                <span class="d-title">INSURANCE</span>
                                                <spam class="d-value"></spam>
                                            </div>
                                            <div class="d-row" id="div_step2_insurance_cost">
                                                <span class="d-title" id="step2_insurance_type"></span>
                                                <spam class="d-value" id="step2_insurance_cost"></spam>
                                            </div>
                                            <div class="d-row">
                                                <span class="d-title">Vehicle</span>
                                                <spam class="d-value" id="step2_vehicle_total_price_isk"></spam>
                                            </div>
                                            <div class="my-1"></div>
                                            <div class="d-row carinfo_inputs_label p-1">
                                                <span class="d-title">Total</span>
                                                <spam class="d-value" id="step2_total"></spam>
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
                                <button class="btn btn-lg btn-primary" id="btn_insurance_required">Next</button>
                            </div>
                        </div>
                        <!-- Step 3 content -->
                        <div id="step5_additional_features" class="content" role="tabpanel"
                            aria-labelledby="step5_additional_features-trigger">
                            {{-- step 3 additioanal features content open --}}
                            <div class="row g-3">
                                <div class="col-lg-6">
                                    <h3 class="carinfo_inputs_label_">ADDITIONAL OPTIONS</h3>
                                    <div class="row g-custom-x">
                                        <div class="col-lg-12 mb30">
                                            <div class="d-card">
                                                <div class="row align-items-center">
                                                    <!-- Added align-items-center class -->
                                                    <div class="col-md-9">
                                                        <i class="fa fa-arrows-alt"></i>
                                                        {{-- <i class="fa fa-fw"></i> --}}
                                                        <div class="text">
                                                            <h4>Baby Seat</h4>
                                                            ISK 1000 / Per a Day
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check form-switch d-flex justify-content-center">
                                                            <!-- Added d-flex and justify-content-center classes -->
                                                            <input class="form-check-input" type="checkbox"
                                                                role="switch" id="add_option_baby_seat"
                                                                name="add_option_baby_seat">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 mb30">
                                            <div class="d-card">
                                                <div class="row align-items-center">
                                                    <!-- Added align-items-center class -->
                                                    <div class="col-md-9">
                                                        <i class="fa fa-microchip"></i>
                                                        {{-- <i class="fa fa-fw"></i> --}}
                                                        <div class="text">
                                                            <h4>WIFI (Unlimited)</h4>
                                                            ISK 1300 / Per a Day
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check form-switch d-flex justify-content-center">
                                                            <!-- Added d-flex and justify-content-center classes -->
                                                            <input class="form-check-input" type="checkbox"
                                                                role="switch" id="add_option_wifi"
                                                                name="add_option_wifi">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 mb30">
                                            <div class="d-card">
                                                <div class="row align-items-center">
                                                    <!-- Added align-items-center class -->
                                                    <div class="col-md-9">
                                                        <i class="fa fa-trophy"></i>
                                                        {{-- <i class="fa fa-fw"></i> --}}
                                                        <div class="text">
                                                            <h4>Additional Driver</h4>
                                                            Free of Charge
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check form-switch d-flex justify-content-center">
                                                            <!-- Added d-flex and justify-content-center classes -->
                                                            <input class="form-check-input" type="checkbox"
                                                                role="switch" id="add_option_driver"
                                                                name="add_option_driver">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3">
                                    <div class="de-item mb10">
                                        <div class="d-img mt-1">
                                            <h4 class="carinfo_inputs_label">{{ $selected_car_info->displaying_name }}
                                            </h4>
                                            <div class="my-2"></div>
                                            <img src="{{ asset('img/cars/' . $selected_car_info->vehicle_image) }}"
                                                alt="">
                                        </div>
                                        <div class="spacer-20"></div>
                                        <div class="de-spec">
                                            <h4 class="carinfo_inputs_label">PRICE SUMMARY</h4>
                                            <div class="d-row">
                                                <span class="d-title"><span aria-hidden="true"
                                                        class="icon_calendar"></span></span>
                                                <spam class="d-value" id="step3_date_count"></spam>
                                            </div>
                                            <div class="d-row carinfo_inputs_label p-1" id="div_step3_insurance_label">
                                                <span class="d-title">INSURANCE</span>
                                                <spam class="d-value"></spam>
                                            </div>
                                            <div class="d-row" id="div_step3_insurance_cost">
                                                <span class="d-title" id="step3_insurance_type"></span>
                                                <spam class="d-value" id="step3_insurance_cost"></spam>
                                            </div>
                                            <div class="d-row carinfo_inputs_label p-1" id="div_step3_addons_label">
                                                <span class="d-title">OPTIONS</span>
                                                <spam class="d-value"></spam>
                                            </div>
                                            <div class="d-row" id="div_step3_addons_baby_seat">
                                                <span class="d-title" id="step3_addons_type_baby_seat"></span>
                                                <spam class="d-value" id="step3_addons_cost_baby_seat"></spam>
                                            </div>
                                            <div class="d-row" id="div_step3_addons_wifi">
                                                <span class="d-title" id="step3_addons_type_wifi"></span>
                                                <spam class="d-value" id="step3_addons_cost_wifi"></spam>
                                            </div>
                                            <div class="d-row" id="div_step3_addons_driver">
                                                <span class="d-title" id="step3_addons_type_driver"></span>
                                                <spam class="d-value" id="step3_addons_cost_driver"></spam>
                                            </div>
                                            <div class="d-row">
                                                <span class="d-title">Vehicle</span>
                                                <spam class="d-value" id="step3_vehicle_total_price_isk"></spam>
                                            </div>
                                            <div class="my-1"></div>
                                            <div class="d-row carinfo_inputs_label p-1">
                                                <span class="d-title">Total</span>
                                                <spam class="d-value" id="step3_total"></spam>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-lg-3">
                                    <div class="de-box mb10">
                                        <form name="form_carinfo_step3_tour" id='form_carinfo_step3_tour' method="post">
                                            <div class="row">
                                                <div class="col-lg-12 mb20">
                                                    <p class="carinfo_inputs_label">Pick Up Location</p>
                                                    <input readonly name="carinfo_step3_pickup_location"
                                                        id="carinfo_step3_pickup_location"
                                                        placeholder="Enter your pickup location"
                                                        class="carinfo_tour_input form-control">
                                                    <div class="carinfo_input_error_msg"
                                                        id="carinfo_step3_pickup_location_error"></div>
                                                </div>

                                                <div class="col-lg-12 mb20">
                                                    <p class="carinfo_inputs_label">Drop Off Location</p>
                                                    <input readonly name="carinfo_step3_dropoff_location"
                                                        id="carinfo_step3_dropoff_location"
                                                        placeholder="Enter your pickup location"
                                                        class="carinfo_tour_input form-control">
                                                    <div class="carinfo_input_error_msg"
                                                        id="carinfo_step3_dropoff_location_error"></div>
                                                </div>

                                                <div class="col-lg-12 mb20">
                                                    <p class="carinfo_inputs_label">Pick Up Date & Time</p>
                                                    <input readonly class="carinfo_tour_input form-control"
                                                        name="carinfo_step3_pickup_date" id="carinfo_step3_pickup_date"
                                                        type="date">
                                                    <div class="carinfo_input_error_msg"
                                                        id="carinfo_step3_pickup_date_error">
                                                    </div>
                                                    <input readonly class="carinfo_tour_input form-control"
                                                        name="carinfo_step3_pickup_time" id="carinfo_step3_pickup_time"
                                                        type="time">
                                                    <div class="carinfo_input_error_msg"
                                                        id="carinfo_step3_pickup_time_error">
                                                    </div>
                                                </div>

                                                <div class="col-lg-12 mb10">
                                                    <p class="carinfo_inputs_label">Return Date & Time</p>
                                                    <input readonly class="carinfo_tour_input form-control"
                                                        name="carinfo_step3_return_date" id="carinfo_step3_return_date"
                                                        type="date">
                                                    <div class="carinfo_input_error_msg"
                                                        id="carinfo_step3_return_date_error">
                                                    </div>
                                                    <input readonly class="carinfo_tour_input form-control"
                                                        name="carinfo_step3_return_time" id="carinfo_step3_return_time"
                                                        type="time">
                                                    <div class="carinfo_input_error_msg"
                                                        id="carinfo_step3_return_time_error">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
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
                            <div class="row g-3">
                                <div class="col-lg-6">
                                    <h3 class="carinfo_inputs_label_">PERSONAL INFORMATION</h3>
                                    <form name="form_user_info" id='form_user_info' action="" class="form-border"
                                        method="post">
                                        @csrf
                                        @method('post')
                                        <div class="row">
                                            <div class="col-md-6 mb-2">
                                                <div class="field-set">
                                                    <label for='email'>Email Address<span
                                                            style="color:rgb(255, 0, 0)">&nbsp;*</span></label>
                                                    <input type='text' name='email' id='email'
                                                        class="form-control">
                                                    <span id="error_msg_email" class="text-danger errmsg"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-12 mb-2">
                                                <div class="field-set">
                                                    <label for='fullname'>Full Name<span
                                                            style="color:rgb(255, 0, 0)">&nbsp;*</span></label>
                                                    <input type='text' name='fullname' id='fullname'
                                                        class="form-control">
                                                    <span id="error_msg_fullname" class="text-danger errmsg"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-2">
                                                <div class="field-set">
                                                    <label for='address'>Address<span
                                                            style="color:rgb(255, 0, 0)">&nbsp;*</span></label>
                                                    <input type='text' name='address' id='address'
                                                        class="form-control">
                                                    <span id="error_msg_address" class="text-danger errmsg"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-2">
                                                <div class="field-set">
                                                    <label for='city'>City<span
                                                            style="color:rgb(255, 0, 0)">&nbsp;*</span></label>
                                                    <input type='text' name='city' id='city'
                                                        class="form-control">
                                                    <span id="error_msg_city" class="text-danger errmsg"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-2">
                                                <div class="field-set">
                                                    <label for='phone1'>Phone 1 (with country code)<span
                                                            style="color:rgb(255, 0, 0)">&nbsp;*</span></label>
                                                    <input type='text' name='phone1' id='phone1'
                                                        class="form-control" placeholder="+354">
                                                    <span id="error_msg_phone1" class="text-danger errmsg"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-2">
                                                <div class="field-set">
                                                    <label for='phone2'>Phone 2 (with country code)</label>
                                                    <input type='text' name='phone2' pid='phone2'
                                                        class="form-control" placeholder="+354">
                                                    <span id="error_msg_phone2" class="text-danger errmsg"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="line my-2"></div>
                                        <div class="row">
                                            <div class="col-md-6 mb-2">
                                                <div class="field-set">
                                                    <label for='flight_no'>Flight Number<span
                                                            style="color:rgb(255, 0, 0)">&nbsp;*</span></label>
                                                    <input type='text' name='flight_no' id='flight_no'
                                                        class="form-control">
                                                    <span id="error_msg_flight_no" class="text-danger errmsg"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 mb-2">
                                                <div class="field-set">
                                                    <label for='driver_name'>Driver's Name<span
                                                            style="color:rgb(255, 0, 0)">&nbsp;*</span></label>
                                                    <input type='text' name='driver_name' id='driver_name'
                                                        class="form-control">
                                                    <span id="error_msg_driver_name" class="text-danger errmsg"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-2">
                                                <div class="field-set">
                                                    <label for='license_no'>Driving License<span
                                                            style="color:rgb(255, 0, 0)">&nbsp;*</span></label>
                                                    <input type='text' name='license_no' id='license_no'
                                                        class="form-control">
                                                    <span id="error_msg_license_no" class="text-danger errmsg"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-2">
                                                <div class="field-set">
                                                    <label for='license_valid_date'>License Valid Date<span
                                                            style="color:rgb(255, 0, 0)">&nbsp;*</span></label>
                                                    <input type='date' name='license_valid_date'
                                                        id='license_valid_date' class="form-control">
                                                    <span id="error_msg_license_valid_date" class="text-danger errmsg"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-2">
                                                <div class="field-set">
                                                    <label for='license_img'>Upload an Image of License<span
                                                            style="color:rgb(255, 0, 0)">&nbsp;*</span></label>
                                                    <input type='file' name='license_img[]' id='license_img'
                                                        class="form-control">
                                                    <span id="error_msg_license_img" class="text-danger errmsg"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-2 tobe_hidden">
                                                <div class="field-set">
                                                    <label for='password'>Password<span
                                                            style="color:rgb(255, 0, 0)">&nbsp;*</span></label>
                                                    <input type='password' name='password' id='password'
                                                        class="form-control">
                                                    <span id="error_msg_password" class="text-danger errmsg"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-2 tobe_hidden">
                                                <div class="field-set">
                                                    <label for='repassword'>Re-enter Password<span
                                                            style="color:rgb(255, 0, 0)">&nbsp;*</span></label>
                                                    <input type='password' name='repassword' id='repassword'
                                                        class="form-control">
                                                    <span id="error_msg_repassword" class="text-danger errmsg"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <div class="col-lg-3">
                                    <div class="de-item mb10">
                                        <div class="d-img mt-1">
                                            <h4 class="carinfo_inputs_label">{{ $selected_car_info->displaying_name }}
                                            </h4>
                                            <div class="my-2"></div>
                                            <img src="{{ asset('img/cars/' . $selected_car_info->vehicle_image) }}"
                                                alt="">
                                        </div>
                                        <div class="spacer-20"></div>
                                        <div class="de-spec">
                                            <h4 class="carinfo_inputs_label">PRICE SUMMARY</h4>
                                            <div class="d-row">
                                                <span class="d-title"><span aria-hidden="true"
                                                        class="icon_calendar"></span></span>
                                                <spam class="d-value" id="step4_date_count"></spam>
                                            </div>
                                            <div class="d-row carinfo_inputs_label p-1" id="div_step4_insurance_label">
                                                <span class="d-title">INSURANCE</span>
                                                <spam class="d-value"></spam>
                                            </div>
                                            <div class="d-row" id="div_step4_insurance_cost">
                                                <span class="d-title" id="step4_insurance_type"></span>
                                                <spam class="d-value" id="step4_insurance_cost"></spam>
                                            </div>
                                            <div class="d-row carinfo_inputs_label p-1" id="div_step4_addons_label">
                                                <span class="d-title">OPTIONS</span>
                                                <spam class="d-value"></spam>
                                            </div>
                                            <div class="d-row" id="div_step4_addons_baby_seat">
                                                <span class="d-title" id="step4_addons_type_baby_seat"></span>
                                                <spam class="d-value" id="step4_addons_cost_baby_seat"></spam>
                                            </div>
                                            <div class="d-row" id="div_step4_addons_wifi">
                                                <span class="d-title" id="step4_addons_type_wifi"></span>
                                                <spam class="d-value" id="step4_addons_cost_wifi"></spam>
                                            </div>
                                            <div class="d-row" id="div_step4_addons_driver">
                                                <span class="d-title" id="step4_addons_type_driver"></span>
                                                <spam class="d-value" id="step4_addons_cost_driver"></spam>
                                            </div>
                                            <div class="d-row">
                                                <span class="d-title">Vehicle</span>
                                                <spam class="d-value" id="step4_vehicle_total_price_isk"></spam>
                                            </div>
                                            <div class="my-1"></div>
                                            <div class="d-row carinfo_inputs_label p-1">
                                                <span class="d-title">Total</span>
                                                <spam class="d-value" id="step4_total"></spam>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-lg-3">
                                    <div class="de-box mb10">
                                        <form name="form_carinfo_step4_tour" id='form_carinfo_step4_tour' method="post">
                                            <div class="row">
                                                <div class="col-lg-12 mb20">
                                                    <p class="carinfo_inputs_label">Pick Up Location</p>
                                                    <input readonly name="carinfo_step4_pickup_location"
                                                        id="carinfo_step4_pickup_location"
                                                        placeholder="Enter your pickup location"
                                                        class="carinfo_tour_input form-control">
                                                    <div class="carinfo_input_error_msg"
                                                        id="carinfo_step4_pickup_location_error"></div>
                                                </div>

                                                <div class="col-lg-12 mb20">
                                                    <p class="carinfo_inputs_label">Drop Off Location</p>
                                                    <input readonly name="carinfo_step4_dropoff_location"
                                                        id="carinfo_step4_dropoff_location"
                                                        placeholder="Enter your pickup location"
                                                        class="carinfo_tour_input form-control">
                                                    <div class="carinfo_input_error_msg"
                                                        id="carinfo_step4_dropoff_location_error"></div>
                                                </div>

                                                <div class="col-lg-12 mb20">
                                                    <p class="carinfo_inputs_label">Pick Up Date & Time</p>
                                                    <input readonly class="carinfo_tour_input form-control"
                                                        name="carinfo_step4_pickup_date" id="carinfo_step4_pickup_date"
                                                        type="date">
                                                    <div class="carinfo_input_error_msg"
                                                        id="carinfo_step4_pickup_date_error">
                                                    </div>
                                                    <input readonly class="carinfo_tour_input form-control"
                                                        name="carinfo_step4_pickup_time" id="carinfo_step4_pickup_time"
                                                        type="time">
                                                    <div class="carinfo_input_error_msg"
                                                        id="carinfo_step4_pickup_time_error">
                                                    </div>
                                                </div>

                                                <div class="col-lg-12 mb10">
                                                    <p class="carinfo_inputs_label">Return Date & Time</p>
                                                    <input readonly class="carinfo_tour_input form-control"
                                                        name="carinfo_step4_return_date" id="carinfo_step4_return_date"
                                                        type="date">
                                                    <div class="carinfo_input_error_msg"
                                                        id="carinfo_step4_return_date_error">
                                                    </div>
                                                    <input readonly class="carinfo_tour_input form-control"
                                                        name="carinfo_step4_return_time" id="carinfo_step4_return_time"
                                                        type="time">
                                                    <div class="carinfo_input_error_msg"
                                                        id="carinfo_step4_return_time_error">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 mb20">
                                <div class="d-card" style="background-color: #ffeff4;">
                                    <div class="row align-items-center">
                                        <div class="p-2 mt-2">
                                            <p style="text-align: center; color:rgb(15, 166, 7); font-size:18px;"><span
                                                    style="color:red;">*</span>PLEASE NOTE : <strong>THE PAYMENTS ARE DONE
                                                    IN CASH AFTER YOU RECEIVE THE CAR AT THE AIRPORT.</strong></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- step 4 user info content close --}}
                            <div class="line my-4"></div>
                            <div class="text-center">
                                <button class="btn btn-lg btn-primary btn_previous">Previous</button>
                                <button class="btn btn-lg btn-success" id="btn_confirm_booking"
                                    type="submit">Confirm</button>
                            </div>
                        </div>
                        <!-- Step 3 content -->
                        {{-- <div id="step7_confirmation" class="content" role="tabpanel"
                            aria-labelledby="step7_confirmation-trigger"> --}}
                        {{-- step 5 confirmation content open --}}
                        {{-- step 5 confirmation content close --}}
                        {{-- <div class="line my-4"></div>
                            <div class="btns_stepper">
                                <button class="btn btn-lg btn-primary btn_previous">Previous</button>
                                <button class="btn btn-lg btn-primary" type="submit">Submit</button>
                            </div>
                        </div> --}}
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

            $('#btn_insurance_required').on('click', function(e) {
                e.preventDefault();
                if (validateInsuranceSelection()) {
                    stepper.next();
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'You should select at least one insurance!',
                    });
                }
            });

            // Previous button click event
            $('.btn_previous').on('click', function() {
                stepper.previous();
            });

            // Function to validate insurance selection
            function validateInsuranceSelection() {
                var silverChecked = $('#silver_insurance').is(':checked');
                var goldChecked = $('#gold_insurance').is(':checked');
                var platinumChecked = $('#platinum_insurance').is(':checked');

                return silverChecked || goldChecked || platinumChecked;
            }
        });

        // stepper navigator close
        // get and set session data from cars page tour open
        $(document).ready(function() {
            $('#carinfo_step1_pickup_location,#carinfo_step2_pickup_location,#carinfo_step3_pickup_location,#carinfo_step4_pickup_location')
                .val(sessionStorage.getItem('cars_pickup_location'));
            $('#carinfo_step1_dropoff_location,#carinfo_step2_dropoff_location,#carinfo_step3_dropoff_location,#carinfo_step4_dropoff_location')
                .val(sessionStorage.getItem('cars_dropoff_location'));
            $('#carinfo_step1_pickup_date,#carinfo_step2_pickup_date,#carinfo_step3_pickup_date,#carinfo_step4_pickup_date')
                .val(sessionStorage.getItem('cars_pickup_date'));
            $('#carinfo_step1_return_date,#carinfo_step2_return_date,#carinfo_step3_return_date,#carinfo_step4_return_date')
                .val(sessionStorage.getItem('cars_return_date'));
            $('#carinfo_step1_pickup_time,#carinfo_step2_pickup_time,#carinfo_step3_pickup_time,#carinfo_step4_pickup_time')
                .val(sessionStorage.getItem('cars_pickup_time'));
            $('#carinfo_step1_return_time,#carinfo_step2_return_time,#carinfo_step3_return_time,#carinfo_step4_return_time')
                .val(sessionStorage.getItem('cars_return_time'));
        });
        // get and set session data from cars page tour close
        // step 2 calculation open
        $(document).ready(function() {
            // Retrieve initial vehicle rental cost
            var vehicle_rental_cost_isk = parseFloat($('#step1_rental_cost_isk').text());
            // Retrieve pickup and return dates
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
            $('#step3_date_count').text(dateCount + ' Days');
            $('#step4_date_count').text(dateCount + ' Days');
            $('#step2_vehicle_total_price_isk').text(vehicle_total_cost_isk + ' ISK');
            $('#step3_vehicle_total_price_isk').text(vehicle_total_cost_isk + ' ISK');
            $('#step4_vehicle_total_price_isk').text(vehicle_total_cost_isk + ' ISK');
            $('#step2_total').text(vehicle_total_cost_isk + ' ISK');
            // Select the silver_insurance checkbox by default
            $('#silver_insurance').prop('checked', false);
            // Calculate the insurance cost and update the values
            var step2_insurance_cost = 0;
            var step2_insurance_type = 'SILVER';
            $('#step2_insurance_type').text(step2_insurance_type);
            $('#step3_insurance_type').text(step2_insurance_type);
            $('#step4_insurance_type').text(step2_insurance_type);
            $('#step2_insurance_cost').text(step2_insurance_cost * dateCount + ' ISK');
            $('#step3_insurance_cost').text(step2_insurance_cost * dateCount + ' ISK');
            $('#step4_insurance_cost').text(step2_insurance_cost * dateCount + ' ISK');
            // Update the total cost by adding the insurance cost and vehicle total price
            var step2_total_cost = vehicle_total_cost_isk + (step2_insurance_cost * dateCount);
            $('#step2_total').text(step2_total_cost + ' ISK');
            var step2_insurance_cost_total = 0;

            // hide divs by default
            $('#div_step3_addons_label').hide();
                $('#div_step3_addons_baby_seat').hide();
                $('#div_step3_addons_wifi').hide();
                $('#div_step3_addons_driver').hide();
                $('#div_step4_addons_label').hide();
                $('#div_step4_addons_baby_seat').hide();
                $('#div_step4_addons_wifi').hide();
                $('#div_step4_addons_driver').hide();

            // When any checkbox is changed
            $('input[type="checkbox"]').change(function() {
                if ($(this).attr('id') === 'silver_insurance' || $(this).attr('id') ===
                    'gold_insurance' ||
                    $(this).attr('id') === 'platinum_insurance') {
                    // Unselect the other two checkboxes
                    $('input[type="checkbox"]').not(this).prop('checked', false);
                    // Hide the insurance label and cost divs
                    $('#div_step2_insurance_label').hide();
                    $('#div_step2_insurance_cost').hide();
                    // Reset insurance cost and type
                    step2_insurance_cost = 0;
                    step2_insurance_type = 'SILVER';
                    if ($('#silver_insurance').is(':checked')) {
                        step2_insurance_cost = 0;
                        step2_insurance_type = 'SILVER';
                    } else if ($('#gold_insurance').is(':checked')) {
                        step2_insurance_cost = 3250;
                        step2_insurance_type = 'GOLD';
                    } else if ($('#platinum_insurance').is(':checked')) {
                        step2_insurance_cost = 5250;
                        step2_insurance_type = 'PLATINUM';
                    }
                    // Show the insurance label and cost divs
                    $('#div_step2_insurance_label').show();
                    $('#div_step2_insurance_cost').show();
                    // Update the insurance type and cost with the calculated values
                    $('#step2_insurance_type').text(step2_insurance_type);
                    $('#step3_insurance_type').text(step2_insurance_type);
                    $('#step4_insurance_type').text(step2_insurance_type);
                    step2_insurance_cost_total = step2_insurance_cost * dateCount;
                    $('#step2_insurance_cost').text(step2_insurance_cost_total + ' ISK');
                    $('#step3_insurance_cost').text(step2_insurance_cost_total + ' ISK');
                    $('#step4_insurance_cost').text(step2_insurance_cost_total + ' ISK');
                    // Update the total cost by adding the insurance cost and vehicle total price
                    var step2_total_cost = vehicle_total_cost_isk + step2_insurance_cost_total;
                    $('#step2_total').text(step2_total_cost + ' ISK');
                    $('#step3_total').text(step2_total_cost + ' ISK');
                    $('#step4_total').text(step2_total_cost + ' ISK');
                }

                // step 3 calculations
                var step3_insurance_type_ = $('#step3_insurance_type').text();
                var step3_insurance_cost_ = step2_insurance_cost_total;

                var step3_option_baby_seat_cost = 0;
                var step3_option_wifi_cost = 0;
                var step3_option_wifi_driver = 0;

                // hide options when page loads
                $('#div_step3_addons_label').hide();
                $('#div_step3_addons_baby_seat').hide();
                $('#div_step3_addons_wifi').hide();
                $('#div_step3_addons_driver').hide();
                $('#div_step4_addons_label').hide();
                $('#div_step4_addons_baby_seat').hide();
                $('#div_step4_addons_wifi').hide();
                $('#div_step4_addons_driver').hide();


                if ($(this).attr('id') === 'add_option_baby_seat' || $(this).attr('id') ===
                    'add_option_wifi' || $(this).attr('id') === 'add_option_driver') {
                    var option_baby_seat_cost = 1000;
                    var option_baby_seat_type = 'Baby Seat';
                    var option_wifi_cost = 1300;
                    var option_wifi_type = 'WIFI';
                    var option_driver_cost = 0;
                    var option_driver_type = 'Driver';


                    // Show the addons label and the corresponding addon if any of the checkboxes are checked
                    if ($('#add_option_baby_seat').is(':checked') || $('#add_option_wifi').is(':checked') ||
                        $('#add_option_driver').is(':checked')) {
                        $('#div_step3_addons_label').show();
                        $('#div_step4_addons_label').show();
                        // Show the addons label and the corresponding addon if the checkbox is checked
                        if ($('#add_option_baby_seat').is(':checked')) {
                            $('#div_step3_addons_baby_seat').show();
                            $('#step3_addons_type_baby_seat').text(option_baby_seat_type);
                            $('#div_step4_addons_baby_seat').show();
                            $('#step4_addons_type_baby_seat').text(option_baby_seat_type);
                            step3_option_baby_seat_cost = option_baby_seat_cost * dateCount;
                            $('#step3_addons_cost_baby_seat').text(step3_option_baby_seat_cost + ' ISK');
                            $('#step4_addons_cost_baby_seat').text(step3_option_baby_seat_cost + ' ISK');
                        } else {
                            // Hide the div and set the cost to 0 if the checkbox is unchecked
                            $('#div_step3_addons_baby_seat').hide();
                            $('#div_step4_addons_baby_seat').hide();
                            step3_option_baby_seat_cost = 0;
                            $('#step3_addons_cost_baby_seat').text(step3_option_baby_seat_cost + ' ISK');
                            $('#step4_addons_cost_baby_seat').text(step3_option_baby_seat_cost + ' ISK');
                        }

                        if ($('#add_option_wifi').is(':checked')) {
                            $('#div_step3_addons_wifi').show();
                            $('#step3_addons_type_wifi').text(option_wifi_type);
                            $('#div_step4_addons_wifi').show();
                            $('#step4_addons_type_wifi').text(option_wifi_type);
                            step3_option_wifi_cost = option_wifi_cost * dateCount;
                            $('#step3_addons_cost_wifi').text(step3_option_wifi_cost + ' ISK');
                            $('#step4_addons_cost_wifi').text(step3_option_wifi_cost + ' ISK');
                        } else {
                            // Hide the div and set the cost to 0 if the checkbox is unchecked
                            $('#div_step3_addons_wifi').hide();
                            $('#div_step4_addons_wifi').hide();
                            step3_option_wifi_cost = 0;
                            $('#step3_addons_cost_wifi').text(step3_option_wifi_cost + ' ISK');
                            $('#step4_addons_cost_wifi').text(step3_option_wifi_cost + ' ISK');
                        }

                        if ($('#add_option_driver').is(':checked')) {
                            $('#div_step3_addons_driver').show();
                            $('#step3_addons_type_driver').text(option_driver_type);
                            $('#div_step4_addons_driver').show();
                            $('#step4_addons_type_driver').text(option_driver_type);
                            step3_option_driver_cost = option_driver_cost * dateCount;
                            $('#step3_addons_cost_driver').text(step3_option_driver_cost + ' ISK');
                            $('#step4_addons_cost_driver').text(step3_option_driver_cost + ' ISK');
                        } else {
                            // Hide the div and set the cost to 0 if the checkbox is unchecked
                            $('#div_step3_addons_driver').hide();
                            $('#div_step4_addons_driver').hide();
                            step3_option_driver_cost = 0;
                            $('#step3_addons_cost_driver').text(step3_option_driver_cost + ' ISK');
                            $('#step4_addons_cost_driver').text(step3_option_driver_cost + ' ISK');
                        }
                    } else {
                        $('#div_step3_addons_label').hide();
                        $('#div_step4_addons_label').hide();
                    }
                    console.log(step3_option_driver_cost);
                    // Update the total cost by adding the insurance cost, vehicle total price, and addon costs
                    step3_total_cost = vehicle_total_cost_isk + parseInt(step3_insurance_cost_, 10) +
                        step3_option_baby_seat_cost + step3_option_wifi_cost + step3_option_driver_cost;
                    $('#step3_total').text(step3_total_cost + ' ISK');
                    $('#step4_total').text(step3_total_cost + ' ISK');
                }
            });
        });
        // step 2 calculation close
        // pass data into backend open
        $("#btn_confirm_booking").on("click", function(e) {
            e.preventDefault();

            // Perform input field validations
            // Clear previous error messages
            $(".errmsg").text("");

            // Perform validations for each input field
            if ($("#email").val() === "") {
                $("#error_msg_email").text("Email Address is required.");
                isValid = false;
            }

            if ($("#fullname").val() === "") {
                $("#error_msg_fullname").text("Full Name is required.");
                isValid = false;
            }

            if ($("#address").val() === "") {
                $("#error_msg_address").text("Address is required.");
                isValid = false;
            }

            if ($("#city").val() === "") {
                $("#error_msg_city").text("City is required.");
                isValid = false;
            }

            var phone1Value = $("#phone1").val();
            if (phone1Value === "") {
                $("#error_msg_phone1").text("Phone 1 is required.");
                isValid = false;
            } else if (!/^(\+\d{1,3})?\d+$/.test(phone1Value)) {
                $("#error_msg_phone1").text("Invalid phone number.");
                isValid = false;
            }

            if ($("#flight_no").val() === "") {
                $("#error_msg_flight_no").text("Flight Number is required.");
                isValid = false;
            }

            if ($("#driver_name").val() === "") {
                $("#error_msg_driver_name").text("Driver's Name is required.");
                isValid = false;
            }

            if ($("#license_no").val() === "") {
                $("#error_msg_license_no").text("Driving License is required.");
                isValid = false;
            }

            if ($("#license_valid_date").val() === "") {
                $("#error_msg_license_valid_date").text("License Valid Date is required.");
                isValid = false;
            }

            var passwordValue = $("#password").val();
            if (passwordValue === "") {
                $("#error_msg_password").text("Password is required.");
                isValid = false;
            } else if (passwordValue !== $("#repassword").val()) {
                $("#error_msg_repassword").text("Passwords do not match.");
                isValid = false;
            }

            if ($("#license_img").get(0).files.length === 0) {
                $("#error_msg_license_img").text("License Image is required.");
                isValid = false;
            }

            // Get vehicle ID
            var car_id = $("#vehicle_ID").val();
            // Get tour details
            var pickupLocation = $("#carinfo_step4_pickup_location").val();
            var dropOffLocation = $("#carinfo_step4_dropoff_location").val();
            var pickupDate = $("#carinfo_step4_pickup_date").val();
            var returnDate = $("#carinfo_step4_return_date").val();
            var pickupTime = $("#carinfo_step4_pickup_time").val();
            var returnTime = $("#carinfo_step4_return_time").val();
            // Price details
            var total_with_currency = $('#step4_total').text();
            var total_without_currency = total_with_currency.replace(' ISK', '');
            var totalCost = parseInt(total_without_currency);
            // Additional options
            var additionalBabySeat = $("#add_option_baby_seat").is(":checked");
            var additionalWifi = $("#add_option_wifi").is(":checked");
            var additionalDriver = $("#add_option_driver").is(":checked");
            // Get personal information
            var fullname = $("#fullname").val();
            var email = $("#email").val();
            var address = $("#address").val();
            var city = $("#city").val();
            var phone1 = $("#phone1").val();
            var phone2 = $("#phone2").val();
            var license_img = $('input[name="license_img[]"]').prop('files')[0];
            var flight_no = $("#flight_no").val();
            var driver_name = $("#driver_name").val();
            var license_valid_date = $("#license_valid_date").val();
            var license_no = $("#license_no").val();
            var password = $("#password").val();
            var repassword = $("#repassword").val();

            // Create a FormData object and append data
            var formData = new FormData();

            formData.append("car_id", car_id);
            formData.append("pickupLocation", pickupLocation);
            formData.append("dropOffLocation", dropOffLocation);
            formData.append("pickupDate", pickupDate);
            formData.append("returnDate", returnDate);
            formData.append("pickupTime", pickupTime);
            formData.append("returnTime", returnTime);
            formData.append("totalCost", totalCost);
            formData.append("additionalBabySeat", additionalBabySeat);
            formData.append("additionalWifi", additionalWifi);
            formData.append("additionalDriver", additionalDriver);
            formData.append("fullname", fullname);
            formData.append("email", email);
            formData.append("address", address);
            formData.append("city", city);
            formData.append("phone1", phone1);
            formData.append("phone2", phone2);
            formData.append("license_img", license_img);
            formData.append("flight_no", flight_no);
            formData.append("driver_name", driver_name);
            formData.append("license_valid_date", license_valid_date);
            formData.append("license_no", license_no);
            formData.append("password", password);
            formData.append("repassword", repassword);

            // Make an AJAX request to submit the form data
            $.ajax({
                type: "POST",
                url: "/booking/complete",
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
                },
                data: formData,
                contentType: false,
                processData: false,
                success: function(response, status, xhr) {
                    if (xhr.status === 200) {
                        console.log('success');
                        Swal.fire({
                            position: "center",
                            icon: "success",
                            title: "Your booking has been successfully added!",
                            text: "Use your given email & password to login.",
                            showConfirmButton: true
                        }).then(function(result) {
                            if (result.isConfirmed) {
                                window.location.href = "/login";
                            }
                        });
                    } else {
                        console.log(5);
                        Swal.fire({
                            position: "center",
                            icon: "error",
                            title: "Error",
                            text: "Booking Failed!",
                            showConfirmButton: false,
                            timer: 1500
                        });
                    }
                }
            });
        });
        // pass data into backend close
        // validate personal email already exit or not open
        $(document).ready(function() {
            $('#email').on('input', function() {
                var enteredEmail = $(this).val();
                var url = '/userdetails/view';
                $.ajax({
                    url: url,
                    type: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: {
                        email: enteredEmail
                    },
                    success: function(response) {
                        // console.log(response);
                        // var emailList = response.emails;
                        // $('#email').find('option').remove();
                        // $.each(emailList, function(index, email) {
                        //     var option = $('<option>').text(email).val(email);
                        //     $('#email').append(option);
                        // });
                        // Fill relevant data into other input fields
                        $('#fullname').val(response.fullname);
                        $('#address').val(response.address);
                        $('#city').val(response.city);
                        $('#phone1').val(response.phone1);
                        $('#phone2').val(response.phone2);
                        $('#flight_no').val(response.flight_no);
                        $('#driver_name').val(response.driver_name);
                        $('#license_no').val(response.license_no);
                        $('#license_valid_date').val(response.license_valid_date);

                        // Check if email exists in the database
                        if (enteredEmail == response.email) {
                            $('.tobe_hidden').hide();
                            $('#fullname').prop('disabled', true);
                        } else {
                            $('.tobe_hidden').show();
                            $('#fullname').prop('disabled', false);
                        }
                    },
                    error: function(xhr, status, error) {}
                });
            });
        });
        // validate personal email already exit or not open
        
    </script>
    <!-- content close -->
@endsection
