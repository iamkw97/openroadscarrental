<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>
        @yield('title')
    </title>
    <link rel="icon" href="{{ asset('welcome/images/icon.png') }}" type="image/gif" sizes="16x16">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <meta name="description"
        content="Renting an open car road rental in Iceland allows you to experience Iceland's breathtaking landscapes in a unique way. Find the best Iceland car rental options and get tips for renting a car in Iceland.">
    <meta name="keywords"
        content="Iceland car rental,
                car rental Iceland,
                renting a car in Iceland,Iceland people,
                Icelandic culture,
                Icelandic people physical traits,black sand beach Iceland,
                black beach Iceland,
                Iceland black sand beach,lephant rock Iceland,
                Iceland elephant rock,
                elephant island Iceland,
                KEF Airport,
                Reykjavik,
                Open Roads Car Rental">
    <meta name="author" content="openroadscarrental.com">

    <!-- CSS Files
    ================================================== -->
    <link href="{{ asset('welcome/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" id="bootstrap">
    <link href="{{ asset('welcome/css/mdb.min.css') }}" rel="stylesheet" type="text/css" id="mdb">
    <link href="{{ asset('welcome/css/plugins.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('welcome/css/style.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('welcome/css/coloring.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.7.5/sweetalert2.min.css"
        integrity="sha512-InYSgxgTnnt8BG3Yy0GcpSnorz5gxHvT6OEoRWj91Gg+RvNdCiAharnBe+XFIDS754Kd9TekdjXw3V7TAgh6Vw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- color scheme -->
    <link id="colors" href="{{ asset('welcome/css/colors/scheme-08.css') }}" rel="stylesheet" type="text/css">
</head>

<body onload="initialize()">
    <div id="wrapper">
        <!-- header begin -->
        <header class="transparent scroll-light has-topbar">
            <div id="topbar" class="topbar-dark text-light">
                <div class="container">
                    <div class="topbar-left xs-hide">
                        <div class="topbar-widget">
                            <div class="topbar-widget">
                                <a href="tel:+003547737904">
                                    <i class="fa fa-phone"></i>
                                    00354 773 7904</a>
                            </div>
                            <div class="topbar-widget">
                                <a href="mailto:openroadscarrental@gmail.com">
                                    <i class="fa fa-envelope"></i>
                                    openroadscarrental@gmail.com</a>
                            </div>
                            <div class="topbar-widget"><a href="#"><i class="fa fa-clock-o"></i>24/7 Customer
                                    Service</a></div>
                        </div>
                    </div>

                    <div class="topbar-right">
                        <div class="social-icons">
                            <a href="https://wa.me/003547737904"><i class="fa fa-whatsapp fa-lg"></i></a>
                            <a href="https://www.facebook.com/openroadscarrental"><i
                                    class="fa fa-facebook fa-lg"></i></a>
                            {{-- <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                            <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                            <a href="#"><i class="fa fa-youtube fa-lg"></i></a>
                            <a href="#"><i class="fa fa-instagram fa-lg"></i></a> --}}
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="de-flex sm-pt10">
                            <div class="de-flex-col">
                                <div class="de-flex-col">
                                    <!-- logo begin -->
                                    <div id="logo">
                                        <a href="{{ route('home.index') }}">
                                            <img class="logo-1" src="{{ asset('welcome/images/logo.png') }}"
                                                alt="">
                                            <img class="logo-2" src="{{ asset('welcome/images/logo.png') }}"
                                                alt="">
                                        </a>
                                    </div>
                                    <!-- logo close -->
                                </div>
                            </div>
                            <div class="de-flex-col header-col-mid">
                                <ul id="mainmenu">
                                    <li>
                                        <a class="menu-item" href="{{ route('home.index') }}">Home</a>
                                    </li>
                                    <li>
                                        <a class="menu-item" href="{{ route('cars.index') }}">Cars</a>
                                    </li>
                                    {{-- <li>
                                        <a class="menu-item" href="{{ route('booking.index') }}">Booking</a>
                                    </li> --}}
                                    <li>
                                        <a class="menu-item" href="{{ route('about.index') }}">About Us</a>
                                    </li>
                                    <li>
                                        <a class="menu-item" href="{{ route('contact.index') }}">Contact Us</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="de-flex-col">
                                <div class="menu_side_area">
                                    <a href="{{ route('login.index') }}" class="btn-main">Sign In</a>
                                    <span id="menu-btn"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header close -->

        @yield('welcomebody')

        <a href="#" id="back-to-top"></a>
        <!-- footer begin -->
        <footer class="text-light">
            <div class="container">
                <div class="row g-custom-x">
                    <div class="col-lg-3">
                        <div class="widget">
                            <h5>About<span class="id-color">&nbsp; Open Roads Car Rental</span></h5>
                            <p>We're a family-based car rental company in South Iceland, providing top-quality cars at
                                affordable prices. Enjoy a hassle-free trip with our reliable and personalized services.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="widget">
                            <h5>Contact Info</h5>
                            <address class="s1">
                                <span>
                                    <i class="id-color fa fa-map-marker fa-lg"></i>
                                    Hveragerdi, Iceland
                                </span>
                                <span><i class="id-color fa fa-phone fa-lg">
                                    </i>00354 773 7904 / 00354 764 8773</span>
                                <span><i class="id-color fa fa-envelope-o fa-lg"></i>
                                    <a href="mailto:openroadscarrental@gmail.com">openroadscarrental@gmail.com /
                                        mayura.premasiri@yahoo.com</a></span>
                            </address>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <h5>Quick Links</h5>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="widget">
                                    <ul>
                                        <li><a href="{{ route('cars.index') }}">Cars</a></li>
                                        <li><a href="{{ route('booking.index') }}">Booking</a></li>
                                        <li><a href="{{ route('contact.index') }}">Contact Us</a></li>
                                        <li><a href="{{ route('about.index') }}">About Us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="widget">
                            <h5>Social Network</h5>
                            <div class="social-icons">
                                <a href="tel:+003547737904"><i class="fa fa-phone fa-lg"></i></a>
                                <a href="https://wa.me/003547737904"><i class="fa fa-whatsapp fa-lg"></i></a>
                                <a href="https://www.facebook.com/openroadscarrental"><i
                                        class="fa fa-facebook fa-lg"></i></a>
                                {{-- <a href="#"><i class="fa fa-linkedin fa-lg"></i></a>
                                <a href="#"><i class="fa fa-pinterest fa-lg"></i></a>
                                <a href="#"><i class="fa fa-rss fa-lg"></i></a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="subfooter">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="de-flex">
                                <div class="de-flex-col">
                                    <a href="https://realit.lk/">
                                        Copyright 2023 - Real IT PVT (LTD)
                                    </a>
                                </div>
                                <ul class="menu-simple">
                                    <li><a href="#">Terms &amp; Conditions</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer close -->
    </div>

    <!-- Javascript Files
    ================================================== -->
    <script src="{{ asset('welcome/js/plugins.js') }}"></script>
    <script src="{{ asset('welcome/js/designesia.js') }}"></script>
    {{-- <script
        src="https://maps.googleapis.com/maps/api/js?key=insert_your_api_key_here&amp;libraries=places&amp;callback=initPlaces"
        async="" defer=""></script> --}}

    <!-- Include jQuery Pagination plugin -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-pagination/1.2.7/jquery.pagination.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.7.5/sweetalert2.all.min.js"
        integrity="sha512-2JsZvEefv9GpLmJNnSW3w/hYlXEdvCCfDc+Rv7ExMFHV9JNlJ2jaM+uVVlCI1MAQMkUG8K83LhsHYx1Fr2+MuA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</html>
<script type="text/javascript">
    function validateForm() {
        var pickupLocation = document.getElementById("pickup-location");
        var dropoffLocation = document.getElementById("dropoff-location");
        var pickupDate = document.getElementById("pickup-date");
        var returnDate = document.getElementById("return-date");
        var pickupTime = document.getElementById("pickup-time");
        var returnTime = document.getElementById("return-time");
        var isValid = true;

        pickupLocation.style.outline = "none";
        dropoffLocation.style.outline = "none";
        pickupDate.style.outline = "none";
        returnDate.style.outline = "none";
        pickupTime.style.outline = "none";
        returnTime.style.outline = "none";

        if (pickupLocation.value.trim() === "") {
            pickupLocation.style.outline = "2px solid red";
            isValid = false;
            document.getElementById("PickupLocation_error").innerHTML =
                "pickup location required";
            document.getElementById("PickupLocation_error").style.color = "red";
        }

        if (dropoffLocation.value.trim() === "") {
            dropoffLocation.style.outline = "2px solid red";
            isValid = false;
            document.getElementById("dropoff-location_error").innerHTML =
                "drop-off location required";
            document.getElementById("dropoff-location_error").style.color = "red";
        }

        if (pickupDate.value.trim() === "") {
            pickupDate.style.outline = "2px solid red";
            isValid = false;
            document.getElementById("pickup_date_error").innerHTML =
                "pickup date required";
            document.getElementById("pickup_date_error").style.color = "red";
        }

        if (returnDate.value.trim() === "") {
            returnDate.style.outline = "2px solid red";
            isValid = false;
            document.getElementById("return-date-error").innerHTML =
                "return date required";
            document.getElementById("return-date-error").style.color = "red";
        }

        if (pickupTime.value.trim() === "") {
            pickupTime.style.outline = "2px solid red";
            isValid = false;
            document.getElementById("pickup-time-error").innerHTML =
                "pickup time required";
            document.getElementById("pickup-time-error").style.color = "red";
        }

        if (returnTime.value.trim() === "") {
            returnTime.style.outline = "2px solid red";
            isValid = false;
            document.getElementById("return-time-error").innerHTML =
                "return date required";
            document.getElementById("return-time-error").style.color = "red";
        }

        if (isValid) {
            window.location.href = "{{ route('cars.index') }}?pickupLocation=" + encodeURIComponent(pickupLocation
                    .value) + "&dropoffLocation=" + encodeURIComponent(dropoffLocation.value) + "&pickupDate=" +
                encodeURIComponent(pickupDate.value) +
                "&dropoffDate=" + encodeURIComponent(returnDate.value) +
                "&pickupTime=" + encodeURIComponent(pickupTime.value) +
                "&returnTime=" + encodeURIComponent(returnTime.value);
        }
        return isValid;
    }

    $(document).ready(function() {
        var pickupLocationSelect = $("#picklocation");
        var droplocationSelect = $("#droplocation");
        var pickdate = $("#pickdate");
        var dropoff_date = $("#dropdate");
        var pickupTime = $("#pickup_time");
        var dropoff_time = $("#droptime");
        var queryString = window.location.search;
        var urlParams = new URLSearchParams(queryString);
        var pickupLocation = urlParams.get("pickupLocation");
        var dropoffLocation = urlParams.get("dropoffLocation");
        var pickupDate = urlParams.get("pickupDate");
        var dropoffDate = urlParams.get("dropoffDate");
        var pickTime = urlParams.get("pickupTime");
        var dropTime = urlParams.get("returnTime");

        if (pickupLocation != null && dropoffLocation != null && pickupDate != null) {
            pickupLocationSelect.val(pickupLocation);
            droplocationSelect.val(dropoffLocation);
            pickdate.val(pickupDate);
            dropoff_date.val(dropoffDate);
            pickupTime.val(pickTime);
            dropoff_time.val(dropTime);
        }

        $.ajax({
            url: '/getcars',
            method: 'GET',
            success: function(response) {
                var data = response.data;
                console.log(data);
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
                                    '<h4>' + item.vehicle_model + '</h4>' +
                                    '<div class="d-item_like">' +
                                    '</div>' +
                                    '<div class="d-atr-group">' +
                                    '<span class="d-atr"><img src="{{ asset('welcome/images/icons/1.svg') }}" alt="">5</span>' +
                                    '<span class="d-atr"><img src="{{ asset('welcome/images/icons/2.svg') }}" alt="">2</span>' +
                                    '<span class="d-atr"><img src="{{ asset('welcome/images/icons/3.svg') }}" alt="">4</span>' +
                                    '<span class="d-atr"><img src="{{ asset('welcome/images/icons/4.svg') }}" alt="">' +
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
                                    '<div class="mt-3"><a class="btn-main RentNow" id="' +
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
                                        '<h4>' + item.vehicle_model + '</h4>' +
                                        '<div class="d-item_like">' +
                                        '</div>' +
                                        '<div class="d-atr-group">' +
                                        '<span class="d-atr"><img src="{{ asset('welcome/images/icons/1.svg') }}" alt="">5</span>' +
                                        '<span class="d-atr"><img src="{{ asset('welcome/images/icons/2.svg') }}" alt="">2</span>' +
                                        '<span class="d-atr"><img src="{{ asset('welcome/images/icons/3.svg') }}" alt="">4</span>' +
                                        '<span class="d-atr"><img src="{{ asset('welcome/images/icons/4.svg') }}" alt="">' +
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
                                        '<div class="mt-3"><a class="btn-main RentNow" id="' +
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
                                    '<h4>' + item.vehicle_model + '</h4>' +
                                    '<div class="d-item_like">' +
                                    '</div>' +
                                    '<div class="d-atr-group">' +
                                    '<span class="d-atr"><img src="{{ asset('welcome/images/icons/1.svg') }}" alt="">5</span>' +
                                    '<span class="d-atr"><img src="{{ asset('welcome/images/icons/2.svg') }}" alt="">2</span>' +
                                    '<span class="d-atr"><img src="{{ asset('welcome/images/icons/3.svg') }}" alt="">4</span>' +
                                    '<span class="d-atr"><img src="{{ asset('welcome/images/icons/4.svg') }}" alt="">' +
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
                                    '<div class="mt-3"><a class="btn-main RentNow" id="' +
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
                                        '<h4>' + item.vehicle_model + '</h4>' +
                                        '<div class="d-item_like">' +
                                        '</div>' +
                                        '<div class="d-atr-group">' +
                                        '<span class="d-atr"><img src="{{ asset('welcome/images/icons/1.svg') }}" alt="">5</span>' +
                                        '<span class="d-atr"><img src="{{ asset('welcome/images/icons/2.svg') }}" alt="">2</span>' +
                                        '<span class="d-atr"><img src="{{ asset('welcome/images/icons/3.svg') }}" alt="">4</span>' +
                                        '<span class="d-atr"><img src="{{ asset('welcome/images/icons/4.svg') }}" alt="">' +
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
                                        '<div class="mt-3"><a class="btn-main RentNow" id="' +
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

                $('.RentNow').on('click', function() {
                    var id = $(this).attr('id');
                    var pickLocation = pickupLocationSelect.val();
                    var dropofflocation = droplocationSelect.val();
                    var pick_d = pickdate.val();
                    var dropoff_d = dropoff_date.val();
                    var pickup_t = pickupTime.val();
                    var dropOff_t = dropoff_time.val();

                    var url = "{{ route('cars.bookingstep2') }}";
                    url += "?pickupLocationf=" + encodeURIComponent(pickLocation);
                    url += "&dropoffLocationf=" + encodeURIComponent(dropofflocation);
                    url += "&pickupDatef=" + encodeURIComponent(pick_d);
                    url += "&dropoffDatef=" + encodeURIComponent(dropoff_d);
                    url += "&pickupTimef=" + encodeURIComponent(pickup_t);
                    url += "&returnTimef=" + encodeURIComponent(dropOff_t);
                    url += "&id=" + encodeURIComponent(id);
                    window.location.href = url;
                });

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

    $(document).ready(function() {
        var PickupLocationfinal = $("#PickupLocationfinal");
        var DropoffLocationfinal = $("#DropoffLocationfinal");
        var datepickerfinal = $("#date-pickerfinal");
        var pickuptimefinal = $("#pickup-timefinal");
        var datedropfinal = $("#date-dropfinal");
        var dropofftimefinal = $("#dropoff-timefinal");
        var car_id = $("#car_id");

        var queryString = window.location.search;
        var urlParams = new URLSearchParams(queryString);
        var pickupLocationf = urlParams.get("pickupLocationf");
        var dropoffLocationf = urlParams.get("dropoffLocationf");
        var pickupDatef = urlParams.get("pickupDatef");
        var dropoffDatef = urlParams.get("dropoffDatef");
        var pickupTimef = urlParams.get("pickupTimef");
        var returnTimef = urlParams.get("returnTimef");
        var id = urlParams.get("id");

        PickupLocationfinal.val(pickupLocationf);
        DropoffLocationfinal.val(dropoffLocationf);
        datepickerfinal.val(pickupDatef);
        pickuptimefinal.val(pickupTimef);
        datedropfinal.val(dropoffDatef);
        dropofftimefinal.val(returnTimef);
        car_id.val(id);

        var Car_details = $("#car_id").val();

        $.ajax({
            url: "/cars/view/" + Car_details,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: "GET",
            contentType: false,
            processData: false,
            success: function(response) {
                var data = response.data;
                console.log(data);
                $.each(data, function(index, item) {
                    $('#VehicleCategory').html(item.category);
                    $('#VehicleMake').html(item.vehicle_make);
                    $('#VehicleModel').html(item.vehicle_model);
                    $('#NumberofSeats').html(item.no_of_seats);
                    $('#NumberofSuitcases').html(item.no_of_suitcases);
                    $('#condition').html(item.gear_box_type);
                    $('#FuelState').html(item.fuel_state);
                    $('#vehicle_description').html(item.displaying_name);
                    $('#vehicle_header_name').html(item.displaying_name);
                    $('#vehicleMoreinf').html(item.vehicle_description);
                    $('#total_cost').html(item.apr2sep_isk_cost_rental_per_day);

                    // total calculation
                    var babySeatCheckbox = document.getElementById('additional_baby_seat');
                    var wifiCheckbox = document.getElementById('additional_wifi');
                    var driverCheckbox = document.getElementById('additional_driver');
                    var totalCostElement = document.getElementById('total_cost');
                    var babySeatCost = 1000;
                    var wifiCost = 1300;
                    var driverCost = 0;
                    var initialTotalCost = parseFloat($('#total_cost').html());

                    function updateTotalCost() {
                        var totalCost = initialTotalCost;
                        if (babySeatCheckbox.checked) {
                            totalCost += babySeatCost;
                        }
                        if (wifiCheckbox.checked) {
                            totalCost += wifiCost;
                        }
                        if (driverCheckbox.checked) {
                            totalCost += driverCost;
                        }
                        totalCostElement.innerText = totalCost;
                    }

                    babySeatCheckbox.addEventListener('change', updateTotalCost);
                    wifiCheckbox.addEventListener('change', updateTotalCost);
                    driverCheckbox.addEventListener('change', updateTotalCost);
                    updateTotalCost();
                });
            }
        });
        $("#submit_btn").on("click", function() {
            var Pickup_l = PickupLocationfinal.val();
            var Drop_off_l = DropoffLocationfinal.val();
            var date_pick = datepickerfinal.val();
            var pickup_T = pickuptimefinal.val();
            var datedrop_Off = datedropfinal.val();
            var drop_T = dropofftimefinal.val();
            var cardetails_id = car_id.val();

            var vehicle_description = $("#vehicle_description").html()
            var VehicleCategory = $("#VehicleCategory").html()
            var NumberofSeats = $("#NumberofSeats").html()
            var NumberofSuitcases = $("#NumberofSuitcases").html()
            var total_cost = $("#total_cost").html()

            var add_baby_seat = $("#additional_baby_seat").prop("checked");
            var add_wifi = $("#additional_wifi").prop("checked");
            var add_driver = $("#additional_driver").prop("checked");

            var url = "{{ route('personal.index') }}";
            url += "?Pickup_loc=" + encodeURIComponent(Pickup_l);
            url += "&Drop_off_loc=" + encodeURIComponent(Drop_off_l);
            url += "&date_picker=" + encodeURIComponent(date_pick);
            url += "&date_drop=" + encodeURIComponent(datedrop_Off);
            url += "&drop_Timeinfo=" + encodeURIComponent(drop_T);
            url += "&pickup_Tinmeinfo=" + encodeURIComponent(pickup_T);
            url += "&card_id=" + encodeURIComponent(cardetails_id);
            url += "&vehicle_des=" + encodeURIComponent(vehicle_description);
            url += "&VehicleCategory=" + encodeURIComponent(VehicleCategory);
            url += "&NumberofSeats=" + encodeURIComponent(NumberofSeats);
            url += "&NumberofSuitcases=" + encodeURIComponent(NumberofSuitcases);
            url += "&total_cost=" + encodeURIComponent(total_cost);
            url += "&add_baby_seat=" + encodeURIComponent(add_baby_seat);
            url += "&add_wifi=" + encodeURIComponent(add_wifi);
            url += "&add_driver=" + encodeURIComponent(add_driver);

            window.location.href = url;
        });
    });

    $(document).ready(function() {
        // Get the query parameters from the URL
        var queryString = window.location.search;
        var urlParams = new URLSearchParams(queryString);

        // Get the values from the query parameters
        var finalpickupLocationf = urlParams.get("Pickup_loc");
        var finaldropoffLocationf = urlParams.get("Drop_off_loc");
        var pickupDateifo = urlParams.get("date_picker");
        var dropoffDatef = urlParams.get("date_drop");
        var pickupTimef = urlParams.get("drop_Timeinfo");
        var returnTimef = urlParams.get("pickup_Tinmeinfo");
        var id = urlParams.get("card_id");
        var vehicle_d = urlParams.get("vehicle_des");
        var VehicleCategoryinfo = urlParams.get("VehicleCategory");
        var SeatsCount = urlParams.get("NumberofSeats");
        var SuitcasesCount = urlParams.get("NumberofSuitcases");
        var total_cost = urlParams.get("total_cost");
        var add_baby_seat = urlParams.get("add_baby_seat");
        var add_wifi = urlParams.get("add_wifi");
        var add_driver = urlParams.get("add_driver");

        // Parse the pickup and dropoff dates
        var pickupDate = new Date(pickupDateifo);
        var dropoffDate = new Date(dropoffDatef);
        // Calculate the date difference in milliseconds
        var dateDifference = dropoffDate - pickupDate;
        // Convert the date difference to days
        var dateDifferenceInDays = Math.ceil(dateDifference / (1000 * 60 * 60 * 24));
        // Calculate the total cost
        var totalCost = total_cost * dateDifferenceInDays;

        // Update the values in the HTML elements
        $("#finalpicklocation").val(finalpickupLocationf);
        $("#finaldroplocation").val(finaldropoffLocationf);
        $("#finalpickdateinfo").val(pickupDateifo);
        $("#finalpicktimeinfo").val(pickupTimef);
        $("#finaldropdateinfo").val(dropoffDatef);
        $("#finaldroptimeinfo").val(returnTimef);
        $("#vehicleDisplayName").html(vehicle_d);
        $("#seatcounts").html(SeatsCount);
        $("#bagscount").html(SuitcasesCount);
        $("#VehicleCategoryinfomation").html(VehicleCategoryinfo);
        $("#total_cost").html(totalCost);

        if (add_baby_seat === "true") {
            $("#additional_baby_seat_status").html('<i class="fa fa-check-circle text-success"></i>');
        } else {
            $("#additional_baby_seat_status").html('<i class="fa fa-times-circle text-danger"></i>');
        }
        if (add_wifi === "true") {
            $("#additional_wifi_status").html('<i class="fa fa-check-circle text-success"></i>');
        } else {
            $("#additional_wifi_status").html('<i class="fa fa-times-circle text-danger"></i>');
        }
        if (add_driver === "true") {
            $("#additional_driver_status").html('<i class="fa fa-check-circle text-success"></i>');
        } else {
            $("#additional_driver_status").html('<i class="fa fa-times-circle text-danger"></i>');
        }

        $("#submitRegister").on("click", function(e) {
            e.preventDefault();
            var fullname = $("#fullname").val();
            var email = $("#email").val();
            var address = $("#address").val();
            var city = $("#city").val();
            var phone1 = $("#phone1").val();
            var phone2 = $("#phone2").val();
            var dob = $("#dob").val();
            var flight_no = $("#flight_no").val();
            var driver_name = $("#driver_name").val();
            var license_valid_date = $("#license_valid_date").val();
            var license_no = $("#license_no").val();
            var password = $("#password").val();
            var repassword = $("#repassword").val();
            var finalpickupLionformation = $("#finalpicklocation").val();
            var finaldroplocationinformation = $("#finaldroplocation").val();
            var finalpickdateinfomation = $("#finalpickdateinfo").val();
            var finaldropdateinfomation = $("#finaldropdateinfo").val();
            var finalpicktimeinformation = $("#finalpicktimeinfo").val();
            var finaldroptimeinformation = $("#finaldroptimeinfo").val();
            var additional_baby_seat_ = urlParams.get("add_baby_seat");
            var additional_wifi_ = urlParams.get("add_wifi");
            var additional_driver_ = urlParams.get("add_driver");
            var total_cost = $("#total_cost").text();

            var formData = new FormData();
            formData.append('fullname', fullname);
            formData.append('email', email);
            formData.append('address', address);
            formData.append('city', city);
            formData.append('phone1', phone1);
            formData.append('phone2', phone2);
            formData.append('dob', dob);
            formData.append('flight_no', flight_no);
            formData.append('driver_name', driver_name);
            formData.append('license_valid_date', license_valid_date);
            formData.append('license_no', license_no);
            formData.append('password', password);
            formData.append('repassword', repassword);
            formData.append('finalpickupLionformation', finalpickupLionformation);
            formData.append('finaldroplocationinformation', finaldroplocationinformation);
            formData.append('finalpickdateinfomation', finalpickdateinfomation);
            formData.append('finaldropdateinfomation', finaldropdateinfomation);
            formData.append('finalpicktimeinformation', finalpicktimeinformation);
            formData.append('finaldroptimeinformation', finaldroptimeinformation);
            formData.append('additional_baby_seat', additional_baby_seat_);
            formData.append('additional_wifi', additional_wifi_);
            formData.append('additional_driver', additional_driver_);
            formData.append('car_id', id);
            formData.append('total_cost', total_cost);

            $.ajax({
                type: 'POST',
                url: '{{ route('booking.store') }}',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: formData,
                contentType: false,
                processData: false,
                success: function(data, status, xhr) {
                    var statusCode = xhr.status;
                    if (statusCode === 200) {
                        Swal.fire({
                            position: 'center',
                            icon: 'success',
                            title: "Your booking has been successfully added!",
                            text: "Use your given email & password to login.",
                            showConfirmButton: true
                        }).then((result) => {
                            if (result.isConfirmed) {
                                // Redirect to another page
                                window.location.href =
                                    "/login";
                            }
                        });
                    } else {
                        // Do something with failure message here
                        Swal.fire({
                            position: 'center',
                            icon: 'success',
                            title: "Error",
                            text: "Booking Failed!",
                            showConfirmButton: false,
                            timer: 1500
                        })
                    }
                },

            });
        });
    });
</script>
