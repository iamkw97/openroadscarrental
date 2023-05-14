<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>
        @yield('title')
    </title>
    <link rel="icon" href="{{ asset('welcome/images/icon.png') }}" type="image/gif" sizes="16x16">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Rentaly - Multipurpose Vehicle Car Rental Website Template" name="description">
    <meta content="" name="keywords">
    <meta content="" name="author">
    <!-- CSS Files
    ================================================== -->
    <link href="{{ asset('welcome/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" id="bootstrap">
    <link href="{{ asset('welcome/css/mdb.min.css') }}" rel="stylesheet" type="text/css" id="mdb">
    <link href="{{ asset('welcome/css/plugins.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('welcome/css/style.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('welcome/css/coloring.css') }}" rel="stylesheet" type="text/css">
    <!-- color scheme -->
    <link id="colors" href="{{ asset('welcome/css/colors/scheme-08.css') }}" rel="stylesheet" type="text/css">
</head>

<body onload="initialize()">
    <div id="wrapper">

        <!-- page preloader begin -->
        <div id="de-preloader"></div>
        <!-- page preloader close -->

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
                            <div class="topbar-widget"><a href="#"><i class="fa fa-clock-o"></i>24/7 Customer Service</a></div>
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
                                        <a href="{{route('home.index')}}">
                                            <img class="logo-1" src="{{ asset('welcome/images/orcr-logo.png') }}"
                                                alt="">
                                            <img class="logo-2" src="{{ asset('welcome/images/orcr-logo.png') }}"
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
                                    <li>
                                        <a class="menu-item" href="{{ route('booking.index') }}">Booking</a>
                                    </li>
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
    <script
        src="https://maps.googleapis.com/maps/api/js?key=insert_your_api_key_here&amp;libraries=places&amp;callback=initPlaces"
        async="" defer=""></script>
        {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> --}}
        

        <!-- Include jQuery Pagination plugin -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-pagination/1.2.7/jquery.pagination.min.js"></script>
        
</html>
<script type="text/javascript">
// $(document).ready(function() {

//     function getPageList(totalPages, page, maxLength){
//       function range(start, end){
//         return Array.from(Array(end - start + 1), (_, i) => i + start);
//       }
    
//       var sideWidth = maxLength < 9 ? 1 : 2;
//       var leftWidth = (maxLength - sideWidth * 2 - 3) >> 1;
//       var rightWidth = (maxLength - sideWidth * 2 - 3) >> 1;
    
//       if(totalPages <= maxLength){
//         return range(1, totalPages);
//       }
    
//       if(page <= maxLength - sideWidth - 1 - rightWidth){
//         return range(1, maxLength - sideWidth - 1).concat(0, range(totalPages - sideWidth + 1, totalPages));
//       }
    
//       if(page >= totalPages - sideWidth - 1 - rightWidth){
//         return range(1, sideWidth).concat(0, range(totalPages- sideWidth - 1 - rightWidth - leftWidth, totalPages));
//       }
    
//       return range(1, sideWidth).concat(0, range(page - leftWidth, page + rightWidth), 0, range(totalPages - sideWidth + 1, totalPages));
//     }
    
//     $(function(){
//       var numberOfItems = $(".pagi .cart").length;
//       var limitPerPage = 9; //How many card items visible per a page
//       var totalPages = Math.ceil(numberOfItems / limitPerPage);
//       var paginationSize = 7; //How many page elements visible in the pagination
//       var currentPage;
    
//       function showPage(whichPage){
//         if(whichPage < 1 || whichPage > totalPages) return false;
    
//         currentPage = whichPage;
    
//         $(".pagi .cart").hide().slice((currentPage - 1) * limitPerPage, currentPage * limitPerPage).show();
    
//         $(".pagination li").slice(1, -1).remove();
    
//         getPageList(totalPages, currentPage, paginationSize).forEach(item => {
//           $("<li>").addClass("page-item").addClass(item ? "current-page" : "dots")
//           .toggleClass("active", item === currentPage).append($("<a>").addClass("page-link")
//           .attr({href: "javascript:void(0)"}).text(item || "...")).insertBefore(".next-page");
//         });
    
//         $(".previous-page").toggleClass("disable", currentPage === 1);
//         $(".next-page").toggleClass("disable", currentPage === totalPages);
//         return true;
//       }
    
//       $(".pagination").append(
//         $("<li>").addClass("page-item").addClass("previous-page").append($("<a>").addClass("page-link").attr({href: "javascript:void(0)"}).text("Prev")),
//         $("<li>").addClass("page-item").addClass("next-page").append($("<a>").addClass("page-link").attr({href: "javascript:void(0)"}).text("Next"))
//       );
    
//       $(".pagi").show();
//       showPage(1);
    
//       $(document).on("click", ".pagination li.current-page:not(.active)", function(){
//         return showPage(+$(this).text());
//       });
    
//       $(".next-page").on("click", function(){
//         return showPage(currentPage + 1);
//       });
    
//       $(".previous-page").on("click", function(){
//         return showPage(currentPage - 1);
//       });
//     });

// });

 function validateForm() {
    var pickupLocation = document.getElementById("pickup-location");
    var dropoffLocation = document.getElementById("dropoff-location");
    var pickupDate = document.getElementById("pickup-date");
    var returnDate = document.getElementById("return-date");
    var pickupTime = document.getElementById("pickup-time");
    var returnTime = document.getElementById("return-time");

    var isValid = true;

    // Resetting previous validation state
    pickupLocation.style.outline = "none";
    dropoffLocation.style.outline = "none";
    pickupDate.style.outline = "none";
    returnDate.style.outline = "none";
    pickupTime.style.outline = "none";
    returnTime.style.outline = "none";

    // Checking pickup location
    if (pickupLocation.value.trim() === "") {
        pickupLocation.style.outline = "2px solid red";
        isValid = false;
        document.getElementById("PickupLocation_error").innerHTML = "𝘗𝘪𝘤𝘬 𝘜𝘱 𝘓𝘰𝘤𝘢𝘵𝘪𝘰𝘯 𝘤𝘢𝘯𝘯𝘰𝘵 𝘣𝘦 𝘣𝘭𝘢𝘯𝘬.";
        document.getElementById("PickupLocation_error").style.color = "red";
    }

    // Checking dropoff location
    if (dropoffLocation.value.trim() === "") {
        dropoffLocation.style.outline = "2px solid red";
        isValid = false;
        document.getElementById("dropoff-location_error").innerHTML = "𝘋𝘳𝘰𝘱𝘰𝘧𝘧 𝘓𝘰𝘤𝘢𝘵𝘪𝘰𝘯 𝘤𝘢𝘯𝘯𝘰𝘵 𝘣𝘦 𝘣𝘭𝘢𝘯𝘬.";
        document.getElementById("dropoff-location_error").style.color = "red";
    }

    // Checking pickup date
    if (pickupDate.value.trim() === "") {
        pickupDate.style.outline = "2px solid red";
        isValid = false;
        document.getElementById("pickup_date_error").innerHTML = "𝘗𝘪𝘤𝘬 𝘜𝘱 𝘋𝘢𝘵𝘦 𝘤𝘢𝘯𝘯𝘰𝘵 𝘣𝘦 𝘣𝘭𝘢𝘯𝘬";
        document.getElementById("pickup_date_error").style.color = "red";
    }

    // Checking return date
    if (returnDate.value.trim() === "") {
        returnDate.style.outline = "2px solid red";
        isValid = false;
        document.getElementById("return-date-error").innerHTML = "𝘙𝘦𝘵𝘶𝘳𝘯 𝘋𝘢𝘵𝘦 𝘤𝘢𝘯𝘯𝘰𝘵 𝘣𝘦 𝘣𝘭𝘢𝘯𝘬";
        document.getElementById("return-date-error").style.color = "red";
        
    }

    // Checking pickup time
    if (pickupTime.value.trim() === "") {
        pickupTime.style.outline = "2px solid red";
        isValid = false;
        document.getElementById("pickup-time-error").innerHTML = "𝘗𝘪𝘤𝘬𝘶𝘱 𝘵𝘪𝘮𝘦 𝘤𝘢𝘯𝘯𝘰𝘵 𝘣𝘦 𝘣𝘭𝘢𝘯𝘬.";
        document.getElementById("pickup-time-error").style.color = "red";
    }
    
    // Checking return time
    if (returnTime.value.trim() === "") {
        returnTime.style.outline = "2px solid red";
        isValid = false;
        document.getElementById("return-time-error").innerHTML = "𝘙𝘦𝘵𝘶𝘳𝘯 𝘵𝘪𝘮𝘦 𝘤𝘢𝘯𝘯𝘰𝘵 𝘣𝘦 𝘣𝘭𝘢𝘯𝘬.";
        document.getElementById("return-time-error").style.color = "red";
    }

    // Displaying error message
    if (isValid) {
        // alert(pickupLocation)
        // window.location.href = "{{ route('cars.index') }}";
        window.location.href = "{{ route('cars.index') }}?pickupLocation=" + encodeURIComponent(pickupLocation.value) + "&dropoffLocation=" + encodeURIComponent(dropoffLocation.value) + "&pickupDate=" + encodeURIComponent(pickupDate.value)
        + "&dropoffDate=" + encodeURIComponent(returnDate.value)
        + "&pickupTime=" + encodeURIComponent(pickupTime.value)
        + "&returnTime=" + encodeURIComponent(returnTime.value);
  
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
});



$(document).ready(function() {

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
            vehicle_image = images[0].vehicle_image; // Access the first image's vehicle_image property
          }

        var count = 0;
     
        if (item.category == 'Sedan') {
          if (index >= startIndex && index < endIndex) {
            inputFields += '<div class="col-xl-4 col-lg-6 cart Car">' +
              '<div class="de-item mb30">' +
              '<div class="d-img">' +
              '<img src="{{ asset('storage/app/public/cars/16840625461.jpeg')}}" class="img-fluid" alt="">' +
              '</div>' +
              '<div class="d-info">' +
              '<div class="d-text">' +
              '<h4>' + category + '</h4>' +
              '<div class="d-item_like">' +
              '<i class="fa fa-heart"></i><span>23</span>' +
              '</div>' +
              '<div class="d-atr-group">' +
              '<span class="d-atr"><img src="{{ asset('welcome/images/icons/1.svg')}}" alt="">5</span>' +
              '<span class="d-atr"><img src="{{ asset('welcome/images/icons/2.svg')}}" alt="">2</span>' +
              '<span class="d-atr"><img src="{{ asset('welcome/images/icons/3.svg')}}" alt="">4</span>' +
              '<span class="d-atr"><img src="{{ asset('welcome/images/icons/4.svg')}}" alt="">' + item.category + '</span>' +
              '</div>' +
              '<div class="d-price">' +
              'Daily rate from <span>$191</span>' +
              '<a class="btn-main" href="{{route('cars.show')}}">Rent Now</a>' +
              '</div>' +
              '</div>' +
              '</div>' +
              '</div>' +
              '</div>';
          }
        }
        
        if (item.category == 'Van' ) {
            if (index >= startIndex && index < endIndex) {
          var vanInputFields =
          '<div class="col-xl-4 col-lg-6 cart Van">'+
          '<div class="de-item mb30">'+
          '<div class="d-img">'+
          '<img src="{{ asset('welcome/images/cars/hyundai-staria.jpg')}}" class="img-fluid" alt="">'+
          '</div>'+
          '<div class="d-info">' + 
          '<div class="d-text">' +
          '<h4>' + item.vehicle_model + '</h4>'+
          '<div class="d-item_like">' +
          '<i class="fa fa-heart"></i><span>23</span>' +
          '</div>' +
          '<div class="d-atr-group">' +
          '<span class="d-atr"><img src="{{ asset('welcome/images/icons/1.svg')}}" alt="">5</span>' +
          '<span class="d-atr"><img src="{{ asset('welcome/images/icons/2.svg')}}" alt="">2</span>' +
          '<span class="d-atr"><img src="{{ asset('welcome/images/icons/3.svg')}}" alt="">4</span>' +
          '<span class="d-atr"><img src="{{ asset('welcome/images/icons/4.svg')}}" alt="">'+ item.category + '</span>' +
          '</div>' +
          '<div class="d-price">' +
          'Daily rate from <span>$191</span>' +
          '<a class="btn-main" href="{{route('cars.show')}}">Rent Now</a>' +
          '</div>' +
          '</div>' +
          '</div>' +
          '</div>' +
          '</div>';

        inputFields += vanInputFields;
      }
    }
});
    $('#pagi').html(inputFields);
    setupPagination();

  }

 
function setupPagination() {
  var totalPages = Math.ceil(data.length / itemsPerPage);
  var paginationHTML = '';

  if (totalPages > 1) {
    paginationHTML += '<ul class="pagination">';
    for (var i = 1; i <= totalPages; i++) {
      paginationHTML += '<li class="page-item"><a class="page-link" href="#" data-page="' + i + '">' + i + '</a></li>';
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
    
var data; // Placeholder for the data retrieved from the server

// ...

// Click event listener for checkboxes in item_filter_group
$('.de_checkbox input[type="checkbox"]').on('click', function() {
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

});

    </script>

