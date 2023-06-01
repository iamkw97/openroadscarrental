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
    <!--<link href="{{ asset('welcome/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" id="bootstrap">-->
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
    function validateForm(){var e=document.getElementById("pickup-location"),t=document.getElementById("dropoff-location"),r=document.getElementById("pickup-date"),o=document.getElementById("return-date"),n=document.getElementById("pickup-time"),i=document.getElementById("return-time"),l=!0;return e.style.outline="none",t.style.outline="none",r.style.outline="none",o.style.outline="none",n.style.outline="none",i.style.outline="none",""===e.value.trim()&&(e.style.outline="2px solid red",l=!1,document.getElementById("PickupLocation_error").innerHTML="pickup location required",document.getElementById("PickupLocation_error").style.color="red"),""===t.value.trim()&&(t.style.outline="2px solid red",l=!1,document.getElementById("dropoff-location_error").innerHTML="drop-off location required",document.getElementById("dropoff-location_error").style.color="red"),""===r.value.trim()&&(r.style.outline="2px solid red",l=!1,document.getElementById("pickup_date_error").innerHTML="pickup date required",document.getElementById("pickup_date_error").style.color="red"),""===o.value.trim()&&(o.style.outline="2px solid red",l=!1,document.getElementById("return-date-error").innerHTML="return date required",document.getElementById("return-date-error").style.color="red"),""===n.value.trim()&&(n.style.outline="2px solid red",l=!1,document.getElementById("pickup-time-error").innerHTML="pickup time required",document.getElementById("pickup-time-error").style.color="red"),""===i.value.trim()&&(i.style.outline="2px solid red",l=!1,document.getElementById("return-time-error").innerHTML="return date required",document.getElementById("return-time-error").style.color="red"),l&&(window.location.href="{{ route('cars.index') }}?pickupLocation="+encodeURIComponent(e.value)+"&dropoffLocation="+encodeURIComponent(t.value)+"&pickupDate="+encodeURIComponent(r.value)+"&dropoffDate="+encodeURIComponent(o.value)+"&pickupTime="+encodeURIComponent(n.value)+"&returnTime="+encodeURIComponent(i.value)),l}$(document).ready(function(){$(".RentNowCar").on("click",function(){var e=$(this).attr("id"),t="{{ route('cars.bookingstep2') }}";t+="?id="+encodeURIComponent(e),window.location.href=t})});

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
                                    '<h4>' + item.displaying_name + '</h4>' +
                                    '<div class="d-item_like">' +
                                    '</div>' +
                                    '<div class="d-atr-group">' +
                                    '<span class="d-atr"><img src="{{ asset('welcome/images/icons/1.svg') }}" alt="">' +
                                    item.no_of_seats + '</span>' +
                                    '<span class="d-atr"><img src="{{ asset('welcome/images/icons/2.svg') }}" alt="">' +
                                    item.no_of_suitcases + '</span>' +

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
                                        '<h4>' + item.displaying_name + '</h4>' +
                                        '<div class="d-item_like">' +
                                        '</div>' +
                                        '<div class="d-atr-group">' +
                                        '<span class="d-atr"><img src="{{ asset('welcome/images/icons/1.svg') }}" alt="">' +
                                        item.no_of_seats + '</span>' +
                                        '<span class="d-atr"><img src="{{ asset('welcome/images/icons/2.svg') }}" alt="">' +
                                        item.no_of_suitcases + '</span>' +

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
                                    '<h4>' + item.displaying_name + '</h4>' +
                                    '<div class="d-item_like">' +
                                    '</div>' +
                                    '<div class="d-atr-group">' +
                                    '<span class="d-atr"><img src="{{ asset('welcome/images/icons/1.svg') }}" alt="">' +
                                    item.no_of_seats + '</span>' +
                                    '<span class="d-atr"><img src="{{ asset('welcome/images/icons/2.svg') }}" alt="">' +
                                    item.no_of_suitcases + '</span>' +

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
                                        '<h4>' + item.displaying_name + '</h4>' +
                                        '<div class="d-item_like">' +
                                        '</div>' +
                                        '<div class="d-atr-group">' +
                                        '<span class="d-atr"><img src="{{ asset('welcome/images/icons/1.svg') }}" alt="">' +
                                        item.no_of_seats + '</span>' +
                                        '<span class="d-atr"><img src="{{ asset('welcome/images/icons/2.svg') }}" alt="">' +
                                        item.no_of_suitcases + '</span>' +

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
$(document).ready(function(){var e,a=$("#PickupLocationfinal"),i=$("#DropoffLocationfinal"),t=$("#date-pickerfinal"),n=$("#pickup-timefinal"),o=$("#date-dropfinal"),l=$("#dropoff-timefinal"),c=$("#car_id"),d=window.location.search,s=new URLSearchParams(d),r=s.get("pickupLocationf"),p=s.get("dropoffLocationf"),f=s.get("pickupDatef"),m=s.get("dropoffDatef"),v=s.get("pickupTimef"),h=s.get("returnTimef"),g=s.get("id");a.val(r),i.val(p),t.val(f),n.val(v),o.val(m),l.val(h),c.val(g);var u=$("#car_id").val();$.ajax({url:"/cars/view/"+u,headers:{"X-CSRF-TOKEN":$('meta[name="csrf-token"]').attr("content")},type:"GET",contentType:!1,processData:!1,success:function(a){var i=a.data;console.log(i),$.each(i,function(a,i){$("#VehicleCategory").html(i.category),$("#VehicleMake").html(i.vehicle_make),$("#VehicleModel").html(i.vehicle_model),$("#NumberofSeats").html(i.no_of_seats),$("#NumberofSuitcases").html(i.no_of_suitcases),$("#condition").html(i.gear_box_type),$("#FuelState").html(i.fuel_state),$("#vehicle_description").html(i.displaying_name),$("#vehicle_header_name").html(i.displaying_name),$("#vehicleMoreinf").html(i.vehicle_description),$("#total_cost").html(i.apr2sep_isk_cost_rental_per_day);var t=i.images,n=$("#slider-carousel");n.empty(),$.each(t,function(e,a){var i='<div class="item"><img src="img/cars/'+a.vehicle_image+'"alt=""></div>';n.append(i)}),t&&t.length>0&&(e=t[0].vehicle_image);var o='<img src="img/cars/'+e+'" class="img-fluid" alt="">';$("#CarImage").append(o),n.owlCarousel({loop:!0,margin:10,nav:!0,dots:!0,responsive:{0:{items:1},600:{items:3},1e3:{items:5}}});var l=document.getElementById("additional_baby_seat"),c=document.getElementById("additional_wifi"),d=document.getElementById("additional_driver"),s=document.getElementById("total_cost"),r=parseFloat($("#total_cost").html());function p(){var e=r;l.checked&&(e+=1e3),c.checked&&(e+=1300),d.checked&&(e+=0),s.innerText=e}l.addEventListener("change",p),c.addEventListener("change",p),d.addEventListener("change",p),p()})}}),$("#submit_btn").on("click",function(){var d=a.val(),s=i.val(),r=t.val(),p=n.val(),f=o.val(),m=l.val(),v=c.val(),h=$("#vehicle_description").html(),g=$("#VehicleCategory").html(),u=$("#NumberofSeats").html(),k=$("#NumberofSuitcases").html(),b=$("#total_cost").html(),y=$("#additional_baby_seat").prop("checked"),w=$("#additional_wifi").prop("checked"),_=$("#additional_driver").prop("checked"),x="{{ route('personal.index') }}";x+="?Pickup_loc="+encodeURIComponent(d),x+="&Drop_off_loc="+encodeURIComponent(s),x+="&date_picker="+encodeURIComponent(r),x+="&date_drop="+encodeURIComponent(f),x+="&drop_Timeinfo="+encodeURIComponent(m),x+="&pickup_Tinmeinfo="+encodeURIComponent(p),x+="&card_id="+encodeURIComponent(v),x+="&vehicle_des="+encodeURIComponent(h),x+="&VehicleCategory="+encodeURIComponent(g),x+="&NumberofSeats="+encodeURIComponent(u),x+="&NumberofSuitcases="+encodeURIComponent(k),x+="&total_cost="+encodeURIComponent(b),x+="&carimg="+encodeURIComponent(e),x+="&add_baby_seat="+encodeURIComponent(y),x+="&add_wifi="+encodeURIComponent(w),x+="&add_driver="+encodeURIComponent(_),window.location.href=x})}),$(document).ready(function(){var e=window.location.search,a=new URLSearchParams(e),i=a.get("Pickup_loc"),t=a.get("Drop_off_loc"),n=a.get("date_picker"),o=a.get("date_drop"),l=a.get("pickup_Tinmeinfo"),c=a.get("drop_Timeinfo"),d=a.get("card_id"),s=a.get("vehicle_des"),r=a.get("VehicleCategory"),p=a.get("NumberofSeats"),f=a.get("NumberofSuitcases"),m=a.get("total_cost"),v=a.get("add_baby_seat"),h=a.get("add_wifi"),g=a.get("add_driver"),u=a.get("carimg");$(".d-img").append('<img src="img/cars/'+u+'" class="img-fluid" alt="">');var k,b=new Date(n),y=Math.ceil((new Date(o)-b)/864e5);if(y<1)var w=1*m;else var w=m*y;$("#finalpicklocation").val(i),$("#finaldroplocation").val(t),$("#finalpickdateinfo").val(n),$("#finalpicktimeinfo").val(l),$("#finaldropdateinfo").val(o),$("#finaldroptimeinfo").val(c),$("#vehicleDisplayName").html(s),$("#seatcounts").html(p),$("#bagscount").html(f),$("#VehicleCategoryinfomation").html(r),$("#total_cost").html(w),"true"===v?$("#additional_baby_seat_status").html('<i class="fa fa-check-circle text-success"></i>'):$("#additional_baby_seat_status").html('<i class="fa fa-times-circle text-danger"></i>'),"true"===h?$("#additional_wifi_status").html('<i class="fa fa-check-circle text-success"></i>'):$("#additional_wifi_status").html('<i class="fa fa-times-circle text-danger"></i>'),"true"===g?$("#additional_driver_status").html('<i class="fa fa-check-circle text-success"></i>'):$("#additional_driver_status").html('<i class="fa fa-times-circle text-danger"></i>'),$("#submitRegister").on("click",function(e){e.preventDefault();var i=$("#fullname").val(),t=$("#email").val(),n=$("#address").val(),o=$("#city").val(),l=$("#phone1").val(),c=$("#phone2").val(),s=$("#dob").val(),r=$("#flight_no").val(),p=$("#driver_name").val(),f=$("#license_valid_date").val(),m=$("#license_no").val(),v=$("#password").val(),h=$("#repassword").val(),g=$("#finalpicklocation").val(),u=$("#finaldroplocation").val(),k=$("#finalpickdateinfo").val(),b=$("#finaldropdateinfo").val(),y=$("#finalpicktimeinfo").val(),w=$("#finaldroptimeinfo").val(),_=a.get("add_baby_seat"),x=a.get("add_wifi"),T=a.get("add_driver"),C=$("#total_cost").text(),S=new FormData;S.append("fullname",i),S.append("email",t),S.append("address",n),S.append("city",o),S.append("phone1",l),S.append("phone2",c),S.append("dob",s),S.append("flight_no",r),S.append("driver_name",p),S.append("license_valid_date",f),S.append("license_no",m),S.append("password",v),S.append("repassword",h),S.append("finalpickupLionformation",g),S.append("finaldroplocationinformation",u),S.append("finalpickdateinfomation",k),S.append("finaldropdateinfomation",b),S.append("finalpicktimeinformation",y),S.append("finaldroptimeinformation",w),S.append("additional_baby_seat",_),S.append("additional_wifi",x),S.append("additional_driver",T),S.append("car_id",d),S.append("total_cost",C),$.ajax({type:"POST",url:"/booking/complete",headers:{"X-CSRF-TOKEN":$('meta[name="csrf-token"]').attr("content")},data:S,contentType:!1,processData:!1,success:function(e,a,i){200===i.status?Swal.fire({position:"center",icon:"success",title:"Your booking has been successfully added!",text:"Use your given email & password to login.",showConfirmButton:!0}).then(e=>{e.isConfirmed&&(window.location.href="/login")}):Swal.fire({position:"center",icon:"success",title:"Error",text:"Booking Failed!",showConfirmButton:!1,timer:1500})}})})});
</script>
