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
    <style>
        .ins_title {
            color: rgb(101, 101, 101);
            font-size: 100%;
            font-weight: 800;
        }

        .ins_list_itm {
            color: rgb(0, 186, 0);
            font-size: 120%;
            font-weight: 600;
        }

        .cars_tour_input {
            border: none;
            border-bottom: 1px solid #ccc;
            outline: none;
            color: #0745a9;
            width: 100%;
        }

        .cars_inputs_label {
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

        .cars_input_error_msg {
            font-size: 75%;
            color: red;
        }

        .btn_rent_now:hover {
            cursor: pointer;
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
                            <h1>Vehicle Fleet</h1>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section close -->

        <section id="section-cars">
            <div class="container">
                <div class="row mt-0 mb-0">
                    <div class="col-lg-12">
                        <div class="p-1 rounded-3 item_filter_group" data-bgcolor="#ffffff">
                            <div class="card-body text-center">
                                <p class="ins_title">Experience Exceptional Value: Embrace the Complete Package!</p>
                                <div class="row">
                                    <div class="col-md-6">
                                        <ul class="list-unstyled" style="text-align: right;">
                                            <li class="ins_list_itm">Comprehensive CDW, SCDW, TP, GP, SAAP
                                                Insurances&nbsp;<i class="icon_shield"></i></li>
                                            <li class="ins_list_itm">Seamless Navigation with Built-in GPS&nbsp;<i
                                                    class="icon_shield"></i></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <ul class="list-unstyled" style="text-align: left;">
                                            <li class="ins_list_itm"><i class="icon_shield"></i>&nbsp;Limitless Mileage for
                                                Endless Adventures</li>
                                            <li class="ins_list_itm"><i class="icon_shield"></i>&nbsp;Stay Safe and Prepared
                                                with Studded Winter Tires</li>
                                        </ul>
                                    </div>
                                </div>
                                <p class="ins_title">Your Journey, Our Priority: Uncompromising Excellence!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-9" id="car-list">
                        <div class="row pagi" id="pagi"></div>
                        <div class="pagination" id="pagination">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="de-box mb10">
                            <form name="form_car_tour" id='form_car_tour' method="post">
                                <div class="row">
                                    <div class="col-lg-12 mb20">
                                        <p class="cars_inputs_label">Pick Up Location</p>
                                        <select name="cars_pickup_location" id="cars_pickup_location"
                                            placeholder="Enter your pickup location" class="cars_tour_input form-control">
                                            <option selected disabled>Select Location</option>
                                            <option value="KEF-AIRPORT">KEF AIRPORT</option>
                                            <option value="REYKJAVIK">REYKJAVIK</option>
                                        </select>
                                        <div class="cars_input_error_msg" id="cars_pickup_location_error"></div>
                                    </div>

                                    <div class="col-lg-12 mb20">
                                        <p class="cars_inputs_label">Drop Off Location</p>
                                        <select name="cars_dropoff_location" id="cars_dropoff_location"
                                            placeholder="Enter your pickup location" class="cars_tour_input form-control">
                                            <option selected disabled>Select Location</option>
                                            <option value="KEF-AIRPORT">KEF AIRPORT</option>
                                            <option value="REYKJAVIK">REYKJAVIK</option>
                                            <option value="same_location">[Return to the same location]</option>
                                        </select>
                                        <div class="cars_input_error_msg" id="cars_dropoff_location_error"></div>
                                    </div>

                                    <div class="col-lg-12 mb20">
                                        <p class="cars_inputs_label">Pick Up Date & Time</p>
                                        <input class="cars_tour_input form-control" name="cars_pickup_date"
                                            id="cars_pickup_date" type="date">
                                        <div class="cars_input_error_msg" id="cars_pickup_date_error"></div>
                                        <input class="cars_tour_input form-control" name="cars_pickup_time"
                                            id="cars_pickup_time" type="time">
                                        <div class="cars_input_error_msg" id="cars_pickup_time_error"></div>
                                    </div>

                                    <div class="col-lg-12 mb20">
                                        <p class="cars_inputs_label">Return Date & Time</p>
                                        <input class="cars_tour_input form-control" name="cars_return_date"
                                            id="cars_return_date" type="date">
                                        <div class="cars_input_error_msg" id="cars_return_date_error"></div>
                                        <input class="cars_tour_input form-control" name="cars_return_time"
                                            id="cars_return_time" type="time">
                                        <div class="cars_input_error_msg" id="cars_return_time_error"></div>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="item_filter_group">
                            <h4>Vehicle Type</h4>
                            <div class="de_form">
                                <div class="de_checkbox VehicleCategory">
                                    <input id="vehicle_type_1" name="vehicle_type_1" type="checkbox"
                                        value="vehicle_type_1">
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
                </div>
            </div>
        </section>
    </div>
    <!-- content close -->
    <script>
        // list all cars open
        $(document).ready(function() {
            $.ajax({
                url: '/cars-list',
                method: 'GET',
                success: function(response) {
                    var data = response.data;
                    var inputFields = '';
                    var currentPage = 1;
                    var itemsPerPage = 9;
                    renderItems(); // Initial render

                    function renderItems() {
                        var startIndex = (currentPage - 1) * itemsPerPage;
                        var endIndex = startIndex + itemsPerPage;
                        inputFields = ''; // Reset inputFields
                        $.each(data, function(index, item) {
                            var category = item.category;
                            var vehicle_make = item.vehicle_make;
                            var vehicle_model = item.vehicle_model;
                            var no_of_seats = item.no_of_seats;
                            var no_of_seats = item.no_of_seats;
                            var images = item.images; // Access the images array
                            var vehicle_image = ''; // Variable to store the vehicle image URL

                            if (images && images.length > 0) {
                                vehicle_image = images[0]
                                    .vehicle_image; // Access the first image's vehicle_image property
                            }

                            var count = 0;
                            if (item.category == 'Sedan') {
                                if (index >= startIndex && index < endIndex) {
                                    inputFields +=
                                        '<div class="col-xl-4 col-lg-6 cart Car HatchBack seat5">' +
                                        '<div class="de-item mb30">' +
                                        '<div class="d-img">' +
                                        '<img src="img/cars/' + vehicle_image +
                                        '" class="img-fluid" alt="">' +
                                        '</div>' +
                                        '<div class="d-info">' +
                                        '<div class="d-text">' +
                                        '<h4>' + item.displaying_name + '</h4>' +
                                        '<div class="d-item_like">' +
                                        '</div>' +
                                        '<div class="d-atr-group">' +
                                        '<span class="d-atr"><img src="{{ asset('welcome/images/icons/1.svg') }}" >' +
                                        item.no_of_seats + '</span>' +
                                        '<span class="d-atr"><img src="{{ asset('welcome/images/icons/2.svg') }}" >' +
                                        item.no_of_suitcases + '</span>' +

                                        '<span class="d-atr"><img src="{{ asset('welcome/images/icons/4.svg') }}" >' +
                                        item.category + '</span>' +
                                        '</div>' +
                                        '<div class="d-price">' +
                                        'Daily rate from <span>ISK' + item
                                        .apr2sep_isk_cost_rental_per_day + '</span>' +
                                        ' Approximately' +
                                        '<h4>USD&nbsp;' + item
                                        .apr2sep_usd_cost_rental_per_day +
                                        '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;EUR&nbsp;' +
                                        item.apr2sep_eur_cost_rental_per_day + '</h4>' +
                                        '</div>' +
                                        '<div class="mt-3"><a class="btn-main btn_rent_now" id="' +
                                        item.id + '">Rent Now</a></div>' +
                                        '</div>' +
                                        '</div>' +
                                        '</div>' +
                                        '</div>';
                                }
                            }

                            if (item.category == 'SUV') {
                                if (item.no_of_seats == '5' || item.no_of_seats == '7') {
                                    if (index >= startIndex && index < endIndex) {
                                        var SUVInputFields =
                                            '<div class="col-xl-4 col-lg-6 cart Car HatchBack seat5">' +
                                            '<div class="de-item mb30">' +
                                            '<div class="d-img">' +
                                            '<img src="img/cars/' + vehicle_image +
                                            '" class="img-fluid" alt="">' +
                                            '</div>' +
                                            '<div class="d-info">' +
                                            '<div class="d-text">' +
                                            '<h4>' + item.displaying_name + '</h4>' +
                                            '<div class="d-item_like">' +
                                            '</div>' +
                                            '<div class="d-atr-group">' +
                                            '<span class="d-atr"><img src="{{ asset('welcome/images/icons/1.svg') }}" >' +
                                            item.no_of_seats + '</span>' +
                                            '<span class="d-atr"><img src="{{ asset('welcome/images/icons/2.svg') }}" >' +
                                            item.no_of_suitcases + '</span>' +

                                            '<span class="d-atr"><img src="{{ asset('welcome/images/icons/4.svg') }}" >' +
                                            item.category + '</span>' +
                                            '</div>' +
                                            '<div class="d-price">' +
                                            'Daily rate from <span>ISK' + item
                                            .apr2sep_isk_cost_rental_per_day + '</span>' +
                                            ' Approximately' +
                                            '<h4>USD&nbsp;' + item
                                            .apr2sep_usd_cost_rental_per_day +
                                            '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;EUR&nbsp;' +
                                            item.apr2sep_eur_cost_rental_per_day + '</h4>' +
                                            '</div>' +
                                            '<div class="mt-3"><a class="btn-main btn_rent_now" id="' +
                                            item.id + '">Rent Now</a></div>' +
                                            '</div>' +
                                            '</div>' +
                                            '</div>' +
                                            '</div>';
                                        inputFields += SUVInputFields;
                                    }
                                }
                            }

                            if (item.category == 'HatchBack') {
                                if (index >= startIndex && index < endIndex) {
                                    var HatchBackInputFields =
                                        '<div class="col-xl-4 col-lg-6 cart Car HatchBack seat5">' +
                                        '<div class="de-item mb30">' +
                                        '<div class="d-img">' +
                                        '<img src="img/cars/' + vehicle_image +
                                        '" class="img-fluid" alt="">' +
                                        '</div>' +
                                        '<div class="d-info">' +
                                        '<div class="d-text">' +
                                        '<h4>' + item.displaying_name + '</h4>' +
                                        '<div class="d-item_like">' +
                                        '</div>' +
                                        '<div class="d-atr-group">' +
                                        '<span class="d-atr"><img src="{{ asset('welcome/images/icons/1.svg') }}" >' +
                                        item.no_of_seats + '</span>' +
                                        '<span class="d-atr"><img src="{{ asset('welcome/images/icons/2.svg') }}" >' +
                                        item.no_of_suitcases + '</span>' +

                                        '<span class="d-atr"><img src="{{ asset('welcome/images/icons/4.svg') }}" >' +
                                        item.category + '</span>' +
                                        '</div>' +
                                        '<div class="d-price">' +
                                        'Daily rate from <span>ISK' + item
                                        .apr2sep_isk_cost_rental_per_day + '</span>' +
                                        ' Approximately' +
                                        '<h4>USD&nbsp;' + item
                                        .apr2sep_usd_cost_rental_per_day +
                                        '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;EUR&nbsp;' +
                                        item.apr2sep_eur_cost_rental_per_day + '</h4>' +
                                        '</div>' +
                                        '<div class="mt-3"><a class="btn-main btn_rent_now" id="' +
                                        item.id + '">Rent Now</a></div>' +
                                        '</div>' +
                                        '</div>' +
                                        '</div>' +
                                        '</div>';
                                    inputFields += HatchBackInputFields;
                                }
                            }

                            if (item.category == 'Van') {
                                if (item.no_of_seats == '8' || item.no_of_seats == '10' || item
                                    .no_of_seats == '12') {
                                    if (index >= startIndex && index < endIndex) {
                                        var vanInputFields =
                                            '<div class="col-xl-4 col-lg-6 cart Car HatchBack seat5">' +
                                            '<div class="de-item mb30">' +
                                            '<div class="d-img">' +
                                            '<img src="img/cars/' + vehicle_image +
                                            '" class="img-fluid" alt="">' +
                                            '</div>' +
                                            '<div class="d-info">' +
                                            '<div class="d-text">' +
                                            '<h4>' + item.displaying_name + '</h4>' +
                                            '<div class="d-item_like">' +
                                            '</div>' +
                                            '<div class="d-atr-group">' +
                                            '<span class="d-atr"><img src="{{ asset('welcome/images/icons/1.svg') }}" >' +
                                            item.no_of_seats + '</span>' +
                                            '<span class="d-atr"><img src="{{ asset('welcome/images/icons/2.svg') }}">' +
                                            item.no_of_suitcases + '</span>' +

                                            '<span class="d-atr"><img src="{{ asset('welcome/images/icons/4.svg') }}" >' +
                                            item.category + '</span>' +
                                            '</div>' +
                                            '<div class="d-price">' +
                                            'Daily rate from <span>ISK' + item
                                            .apr2sep_isk_cost_rental_per_day + '</span>' +
                                            ' Approximately' +
                                            '<h4>USD&nbsp;' + item
                                            .apr2sep_usd_cost_rental_per_day +
                                            '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;EUR&nbsp;' +
                                            item.apr2sep_eur_cost_rental_per_day + '</h4>' +
                                            '</div>' +
                                            '<div class="mt-3"><a class="btn-main btn_rent_now" id="' +
                                            item.id + '">Rent Now</a></div>' +
                                            '</div>' +
                                            '</div>' +
                                            '</div>' +
                                            '</div>';
                                        inputFields += vanInputFields;
                                    }
                                }
                            }
                        });
                        $('#pagi').html(inputFields);
                        setupPagination();
                    }
                    // redirect to selected car information page and create session with tour validations open
                    $('.btn_rent_now').on('click', function() {
                        var vehicle_id = $(this).attr('id');
                        event.preventDefault();


                        // Reset error messages
                        resetErrorMessages();

                        // Validate each form input
                        let isValid = true;

                        const cars_pickup_location = $('#cars_pickup_location').val();
                        const cars_dropoff_location = $('#cars_dropoff_location').val();
                        const cars_pickup_date = $('#cars_pickup_date').val();
                        const cars_return_date = $('#cars_return_date').val();
                        const cars_pickup_time = $('#cars_pickup_time').val();
                        const cars_return_time = $('#cars_return_time').val();

                        if (!cars_pickup_location) {
                            displayErrorMessage('cars_pickup_location',
                                'Please select a pickup location');
                            isValid = false;
                        }

                        if (!cars_dropoff_location) {
                            displayErrorMessage('cars_dropoff_location',
                                'Please select a drop-off location');
                            isValid = false;
                        }

                        if (!cars_pickup_date) {
                            displayErrorMessage('cars_pickup_date',
                                'Please select a pickup date');
                            isValid = false;
                        } else if (!isFutureDate(cars_pickup_date)) {
                            displayErrorMessage('cars_pickup_date',
                                'Pickup date should be a future date');
                            isValid = false;
                        }

                        if (!cars_return_date) {
                            displayErrorMessage('cars_return_date',
                                'Please select a return date');
                            isValid = false;
                        } else if (!isFutureDate(cars_return_date)) {
                            displayErrorMessage('cars_return_date',
                                'Return date should be a future date');
                            isValid = false;
                        } else if (!isFutureDateThan(cars_pickup_date, cars_return_date)) {
                            displayErrorMessage('cars_return_date',
                                'Return date should be after the pickup date');
                            isValid = false;
                        }

                        if (!cars_pickup_time) {
                            displayErrorMessage('cars_pickup_time',
                                'Please select a pickup time');
                            isValid = false;
                        }
                        // else if (!isFutureTime(cars_pickup_date, cars_pickup_time)) {
                        //     displayErrorMessage('cars_pickup_time',
                        //         'Pickup time should be in the future');
                        //     isValid = false;
                        // }

                        if (!cars_return_time) {
                            displayErrorMessage('cars_return_time',
                                'Please select a return time');
                            isValid = false;
                        }
                        // else if (!isFutureTime(cars_return_date, cars_return_time)) {
                        //     displayErrorMessage('cars_return_time',
                        //         'Return time should be in the future');
                        //     isValid = false;
                        // }

                        // If all validations pass, create sessions
                        if (isValid) {
                            // Save the form input values in the session
                            sessionStorage.setItem('cars_vehicle_id', vehicle_id);
                            sessionStorage.setItem('cars_pickup_location',
                            cars_pickup_location);
                            sessionStorage.setItem('cars_dropoff_location',
                                cars_dropoff_location);
                            sessionStorage.setItem('cars_pickup_date', cars_pickup_date);
                            sessionStorage.setItem('cars_return_date', cars_return_date);
                            sessionStorage.setItem('cars_pickup_time', cars_pickup_time);
                            sessionStorage.setItem('cars_return_time', cars_return_time);

                            // Redirect to the '/cars/view' page
                            var car_info_url = '/cars/' + vehicle_id + '/view';
                            window.location.href = car_info_url;
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
                    // redirect to selected car information page and create session with tour validations close
                    function setupPagination() {
                        var totalPages = Math.ceil(data.length / itemsPerPage);
                        var paginationHTML = '';

                        if (totalPages > 1) {
                            paginationHTML += '<ul class="pagination">';
                            for (var i = 1; i <= totalPages; i++) {
                                paginationHTML +=
                                    '<li class="page-item"><a class="page-link" href="#" data-page="' +
                                    i + '">' + i + '</a></li>';
                            }
                            paginationHTML += '</ul>';
                        }
                        $('#pagination').html(paginationHTML);

                        $('.page-link').on('click', function(e) {
                            e.preventDefault();
                            currentPage = parseInt($(this).data('page'));
                            renderItems();
                        });
                    }
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });

            var data;
            $('.VehicleCategory input[type="checkbox"]').on('click', function() {
                var checkboxValue = $(this).val();
                if (checkboxValue === 'vehicle_type_1') {
                    $('.cart.Van').toggle();
                } else if (checkboxValue === 'vehicle_type_2') {
                    $('.cart.Car').toggle();
                }
                // Add condition for both checkboxes selected
                var checkbox1Checked = $('#vehicle_type_1').prop('checked');
                var checkbox2Checked = $('#vehicle_type_2').prop('checked');
                if (checkbox1Checked && checkbox2Checked) {
                    $('.cart.Van, .cart.Car').toggle();
                }
            });

            $('.seatCount input[type="checkbox"]').on('click', function() {
                var checkboxValue = $(this).val();
                if (checkboxValue === 'car_seat_3') {
                    $('.seat8, .seat10, .seat5 , .seat7, .seat12').toggle();
                } else if (checkboxValue === 'car_seat_4') {
                    $('.seat8, .seat10, .seat5 , .seat7, .seat12').toggle();
                } else if (checkboxValue === 'car_seat_5') {
                    $('.seat8, .seat10, .seat12 , .seat7').toggle();
                } else if (checkboxValue === 'car_seat_6') {
                    $('.seat8, .seat10, .seat5 , .seat7, .seat12').toggle();
                } else if (checkboxValue === 'car_seat_8') {
                    $('.seat10, .seat12, .seat5, .seat7').toggle();
                } else if (checkboxValue === 'car_seat_10') {
                    $('.seat8, .seat12, .seat5, .seat7').toggle();
                } else if (checkboxValue === 'car_seat_10+') {
                    $('.seat8, .seat10, .seat5 , .seat7').toggle();
                }
            });
        });
        // list cars close

        // get and set session data from home page tour open
        $(document).ready(function() {
            // Retrieve the values from sessionStorage and display them
            var jj = sessionStorage.getItem('home_pickup_location');
            console.log(jj);
            $('#cars_pickup_location').val(sessionStorage.getItem('home_pickup_location'));
            $('#cars_dropoff_location').val(sessionStorage.getItem('home_dropoff_location'));
            $('#cars_pickup_date').val(sessionStorage.getItem('home_pickup_date'));
            $('#cars_return_date').val(sessionStorage.getItem('home_return_date'));
            $('#cars_pickup_time').val(sessionStorage.getItem('home_pickup_time'));
            $('#cars_return_time').val(sessionStorage.getItem('home_return_time'));

            // get and set session data from home page tour close
        });
    </script>
@endsection
