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
                                        <h3 class="lead">𝙲𝚑𝚘𝚘𝚜𝚎 𝚊 𝚟𝚎𝚑𝚒𝚌𝚕𝚎 𝚊𝚜 𝚢𝚘𝚞 𝚠𝚒𝚜𝚑

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
                                    <input id="vehicle_type_2" name="vehicle_type_2" type="checkbox" value="vehicle_type_2">
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



                        {{-- <div class="item_filter_group">
                        <h4>Price ($)</h4>
                          <div class="price-input">
                            <div class="field">
                              <span>Min</span>
                              <input type="number" class="input-min" value="0">
                            </div>
                            <div class="field">
                              <span>Max</span>
                              <input type="number" class="input-max" value="2000">
                            </div>
                          </div>
                          <div class="slider">
                            <div class="progress"></div>
                          </div>
                          <div class="range-input">
                            <input type="range" class="range-min" min="0" max="2000" value="0" step="1">
                            <input type="range" class="range-max" min="0" max="2000" value="2000" step="1">
                          </div>
                    </div> --}}
                    </div>

                    <div class="col-lg-9" id="car-list">
                        <div class="row pagi" id="pagi">
                            {{-- <div class="row pagi" id="pagi" style="display: none"> --}}
                            {{-- <div class="col-xl-4 col-lg-6 cart">
                            <div class="de-item mb30">
                                <div class="d-img">
                                    <img src="{{ asset('welcome/images/cars/jeep-renegade.jpg')}}" class="img-fluid" alt="">
                                </div>
                                <div class="d-info">
                                    <div class="d-text">
                                        <h4>Jeep Renegade</h4>
                                        <div class="d-item_like">
                                    <i class="fa fa-heart"></i><span>25</span>
                                </div>
                                <div class="d-atr-group">
                                            <span class="d-atr"><img src="{{ asset('welcome/images/icons/1.svg')}}" alt="">5</span>
                                            <span class="d-atr"><img src="{{ asset('welcome/images/icons/2.svg')}}" alt="">2</span>
                                            <span class="d-atr"><img src="{{ asset('welcome/images/icons/3.svg')}}" alt="">4</span>
                                            <span class="d-atr"><img src="{{ asset('welcome/images/icons/4.svg')}}" alt="">SUV</span>
                                        </div>
                                        <div class="d-price">
                                            Daily rate from <span>$265</span>
                                            <a class="btn-main" href="{{route('cars.show')}}">Rent Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-6 cart">
                            <div class="de-item mb30">
                                <div class="d-img">
                                    <img src="{{ asset('welcome/images/cars/bmw-m5.jpg')}}" class="img-fluid" alt="">
                                </div>
                                <div class="d-info">
                                    <div class="d-text">
                                        <h4>Mini Cooper</h4>
                                        <div class="d-item_like">
                                    <i class="fa fa-heart"></i><span>79</span>
                                </div>
                                <div class="d-atr-group">
                                            <span class="d-atr"><img src="{{ asset('welcome/images/icons/1.svg')}}" alt="">5</span>
                                            <span class="d-atr"><img src="{{ asset('welcome/images/icons/2.svg')}}" alt="">2</span>
                                            <span class="d-atr"><img src="{{ asset('welcome/images/icons/3.svg')}}" alt="">4</span>
                                            <span class="d-atr"><img src="{{ asset('welcome/images/icons/4.svg')}}" alt="">Sedan</span>
                                        </div>
                                        <div class="d-price">
                                            Daily rate from <span>$244</span>
                                            <a class="btn-main" href="{{route('cars.show')}}">Rent Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-6 cart">
                            <div class="de-item mb30">
                                <div class="d-img">
                                    <img src="{{ asset('welcome/images/cars/ferrari-enzo.jpg')}}" class="img-fluid" alt="">
                                </div>
                                <div class="d-info">
                                    <div class="d-text">
                                        <h4>Ferarri Enzo</h4>
                                        <div class="d-item_like">
                                    <i class="fa fa-heart"></i><span>55</span>
                                </div>
                                <div class="d-atr-group">
                                            <span class="d-atr"><img src="{{ asset('welcome/images/icons/1.svg')}}" alt="">5</span>
                                            <span class="d-atr"><img src="{{ asset('welcome/images/icons/2.svg')}}" alt="">2</span>
                                            <span class="d-atr"><img src="{{ asset('welcome/images/icons/3.svg')}}" alt="">4</span>
                                            <span class="d-atr"><img src="{{ asset('welcome/images/icons/4.svg')}}" alt="">Exotic Car</span>
                                        </div>
                                        <div class="d-price">
                                            Daily rate from <span>$167</span>
                                            <a class="btn-main" href="{{route('cars.show')}}">Rent Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-6 cart">
                            <div class="de-item mb30">
                                <div class="d-img">
                                    <img src="{{ asset('welcome/images/cars/ford-raptor.jpg')}}" class="img-fluid" alt="">
                                </div>
                                <div class="d-info">
                                    <div class="d-text">
                                        <h4>Ford Raptor</h4>
                                        <div class="d-item_like">
                                    <i class="fa fa-heart"></i><span>89</span>
                                </div>
                                <div class="d-atr-group">
                                            <span class="d-atr"><img src="{{ asset('welcome/images/icons/1.svg')}}" alt="">5</span>
                                            <span class="d-atr"><img src="{{ asset('welcome/images/icons/2.svg')}}" alt="">2</span>
                                            <span class="d-atr"><img src="{{ asset('welcome/images/icons/3.svg')}}" alt="">4</span>
                                            <span class="d-atr"><img src="{{ asset('welcome/images/icons/4.svg')}}" alt="">Pickup Truck</span>
                                        </div>
                                        <div class="d-price">
                                            Daily rate from <span>$147</span>
                                            <a class="btn-main" href="{{route('cars.show')}}">Rent Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-6 cart">
                            <div class="de-item mb30">
                                <div class="d-img">
                                    <img src="{{ asset('welcome/images/cars/mini-cooper.jpg')}}" class="img-fluid" alt="">
                                </div>
                                <div class="d-info">
                                    <div class="d-text">
                                        <h4>Mini Cooper</h4>
                                        <div class="d-item_like">
                                    <i class="fa fa-heart"></i><span>87</span>
                                </div>
                                <div class="d-atr-group">
                                            <span class="d-atr"><img src="{{ asset('welcome/images/icons/1.svg')}}" alt="">5</span>
                                            <span class="d-atr"><img src="{{ asset('welcome/images/icons/2.svg')}}" alt="">2</span>
                                            <span class="d-atr"><img src="{{ asset('welcome/images/icons/3.svg')}}" alt="">4</span>
                                            <span class="d-atr"><img src="{{ asset('welcome/images/icons/4.svg')}}" alt="">Hatchback</span>
                                        </div>
                                        <div class="d-price">
                                            Daily rate from <span>$238</span>
                                            <a class="btn-main" href="{{route('cars.show')}}">Rent Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-6 cart">
                            <div class="de-item mb30">
                                <div class="d-img">
                                    <img src="{{ asset('welcome/images/cars/vw-polo.jpg')}}" class="img-fluid" alt="">
                                </div>
                                <div class="d-info">
                                    <div class="d-text">
                                        <h4>VW Polo</h4>
                                        <div class="d-item_like">
                                    <i class="fa fa-heart"></i><span>37</span>
                                </div>
                                <div class="d-atr-group">
                                            <span class="d-atr"><img src="{{ asset('welcome/images/icons/1.svg')}}" alt="">5</span>
                                            <span class="d-atr"><img src="{{ asset('welcome/images/icons/2.svg')}}" alt="">2</span>
                                            <span class="d-atr"><img src="{{ asset('welcome/images/icons/3.svg')}}" alt="">4</span>
                                            <span class="d-atr"><img src="{{ asset('welcome/images/icons/4.svg')}}" alt="">Hatchback</span>
                                        </div>
                                        <div class="d-price">
                                            Daily rate from <span>$106</span>
                                            <a class="btn-main" href="{{route('cars.show')}}">Rent Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-6 cart">
                            <div class="de-item mb30">
                                <div class="d-img">
                                    <img src="{{ asset('welcome/images/cars/chevrolet-camaro.jpg')}}" class="img-fluid" alt="">
                                </div>
                                <div class="d-info">
                                    <div class="d-text">
                                        <h4>Chevrolet Camaro</h4>
                                        <div class="d-item_like">
                                    <i class="fa fa-heart"></i><span>39</span>
                                </div>
                                <div class="d-atr-group">
                                            <span class="d-atr"><img src="{{ asset('welcome/images/icons/1.svg')}}" alt="">5</span>
                                            <span class="d-atr"><img src="{{ asset('welcome/images/icons/2.svg')}}" alt="">2</span>
                                            <span class="d-atr"><img src="{{ asset('welcome/images/icons/3.svg')}}" alt="">4</span>
                                            <span class="d-atr"><img src="{{ asset('welcome/images/icons/4.svg')}}" alt="">Exotic Car</span>
                                        </div>
                                        <div class="d-price">
                                            Daily rate from <span>$245</span>
                                            <a class="btn-main" href="{{route('cars.show')}}">Rent Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-6 cart">
                            <div class="de-item mb30">
                                <div class="d-img">
                                    <img src="{{ asset('welcome/images/cars/hyundai-staria.jpg')}}" class="img-fluid" alt="">
                                </div>
                                <div class="d-info">
                                    <div class="d-text">
                                        <h4>Hyundai Staria</h4>
                                        <div class="d-item_like">
                                    <i class="fa fa-heart"></i><span>23</span>
                                </div>
                                <div class="d-atr-group">
                                            <span class="d-atr"><img src="{{ asset('welcome/images/icons/1.svg')}}" alt="">5</span>
                                            <span class="d-atr"><img src="{{ asset('welcome/images/icons/2.svg')}}" alt="">2</span>
                                            <span class="d-atr"><img src="{{ asset('welcome/images/icons/3.svg')}}" alt="">4</span>
                                            <span class="d-atr"><img src="{{ asset('welcome/images/icons/4.svg')}}" alt="">Minivan</span>
                                        </div>
                                        <div class="d-price">
                                            Daily rate from <span>$191</span>
                                            <a class="btn-main" href="{{route('cars.show')}}">Rent Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 cart">
                            <div class="de-item mb30">
                                <div class="d-img">
                                    <img src="{{ asset('welcome/images/cars/mini-cooper.jpg')}}" class="img-fluid" alt="">
                                </div>
                                <div class="d-info">
                                    <div class="d-text">
                                        <h4>Mini Cooper</h4>
                                        <div class="d-item_like">
                                    <i class="fa fa-heart"></i><span>87</span>
                                </div>
                                <div class="d-atr-group">
                                            <span class="d-atr"><img src="{{ asset('welcome/images/icons/1.svg')}}" alt="">5</span>
                                            <span class="d-atr"><img src="{{ asset('welcome/images/icons/2.svg')}}" alt="">2</span>
                                            <span class="d-atr"><img src="{{ asset('welcome/images/icons/3.svg')}}" alt="">4</span>
                                            <span class="d-atr"><img src="{{ asset('welcome/images/icons/4.svg')}}" alt="">Hatchback</span>
                                        </div>
                                        <div class="d-price">
                                            Daily rate from <span>$238</span>
                                            <a class="btn-main" href="{{route('cars.show')}}">Rent Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-6 cart">
                            <div class="de-item mb30">
                                <div class="d-img">
                                    <img src="{{ asset('welcome/images/cars/vw-polo.jpg')}}" class="img-fluid" alt="">
                                </div>
                                <div class="d-info">
                                    <div class="d-text">
                                        <h4>VW Polo</h4>
                                        <div class="d-item_like">
                                    <i class="fa fa-heart"></i><span>37</span>
                                </div>
                                <div class="d-atr-group">
                                            <span class="d-atr"><img src="{{ asset('welcome/images/icons/1.svg')}}" alt="">5</span>
                                            <span class="d-atr"><img src="{{ asset('welcome/images/icons/2.svg')}}" alt="">2</span>
                                            <span class="d-atr"><img src="{{ asset('welcome/images/icons/3.svg')}}" alt="">4</span>
                                            <span class="d-atr"><img src="{{ asset('welcome/images/icons/4.svg')}}" alt="">Hatchback</span>
                                        </div>
                                        <div class="d-price">
                                            Daily rate from <span>$106</span>
                                            <a class="btn-main" href="{{route('cars.show')}}">Rent Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-6 cart">
                            <div class="de-item mb30">
                                <div class="d-img">
                                    <img src="{{ asset('welcome/images/cars/chevrolet-camaro.jpg')}}" class="img-fluid" alt="">
                                </div>
                                <div class="d-info">
                                    <div class="d-text">
                                        <h4>Chevrolet Camaro</h4>
                                        <div class="d-item_like">
                                    <i class="fa fa-heart"></i><span>39</span>
                                </div>
                                <div class="d-atr-group">
                                            <span class="d-atr"><img src="{{ asset('welcome/images/icons/1.svg')}}" alt="">5</span>
                                            <span class="d-atr"><img src="{{ asset('welcome/images/icons/2.svg')}}" alt="">2</span>
                                            <span class="d-atr"><img src="{{ asset('welcome/images/icons/3.svg')}}" alt="">4</span>
                                            <span class="d-atr"><img src="{{ asset('welcome/images/icons/4.svg')}}" alt="">Exotic Car</span>
                                        </div>
                                        <div class="d-price">
                                            Daily rate from <span>$245</span>
                                            <a class="btn-main" href="{{route('cars.show')}}">Rent Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-6 cart">
                            <div class="de-item mb30">
                                <div class="d-img">
                                    <img src="{{ asset('welcome/images/cars/hyundai-staria.jpg')}}" class="img-fluid" alt="">
                                </div>
                                <div class="d-info">
                                    <div class="d-text">
                                        <h4>Hyundai Staria</h4>
                                        <div class="d-item_like">
                                    <i class="fa fa-heart"></i><span>23</span>
                                </div>
                                <div class="d-atr-group">
                                            <span class="d-atr"><img src="{{ asset('welcome/images/icons/1.svg')}}" alt="">5</span>
                                            <span class="d-atr"><img src="{{ asset('welcome/images/icons/2.svg')}}" alt="">2</span>
                                            <span class="d-atr"><img src="{{ asset('welcome/images/icons/3.svg')}}" alt="">4</span>
                                            <span class="d-atr"><img src="{{ asset('welcome/images/icons/4.svg')}}" alt="">Minivan</span>
                                        </div>
                                        <div class="d-price">
                                            Daily rate from <span>$191</span>
                                            <a class="btn-main" href="{{route('cars.show')}}">Rent Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}



                        </div>
                        <div class="pagination" id="pagination">
                            {{-- <li class="page-item previous-page disable"><a class="page-link" href="#">Prev</a></li>
                        <li class="page-item current-page active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item dots"><a class="page-link" href="#">...</a></li>
                        <li class="page-item current-page"><a class="page-link" href="#">5</a></li>
                        <li class="page-item current-page"><a class="page-link" href="#">6</a></li>
                        <li class="page-item dots"><a class="page-link" href="#">...</a></li>
                        <li class="page-item current-page"><a class="page-link" href="#">10</a></li>
                        <li class="page-item next-page"><a class="page-link" href="#">Next</a></li> --}}
                        </div>
                    </div>
                    <!--<div class="col-lg-3">-->

                    <!--</div>-->
                </div>
            </div>
        </section>


    </div>
    <!-- content close -->
    <script>
        // var pickupLocationSelect = document.getElementById("picklocation");


        //     document.addEventListener("DOMContentLoaded", function() {
        //     var queryString = window.location.search;
        //     var urlParams = new URLSearchParams(queryString);
        //     var pickupLocation = urlParams.get("pickupLocation");
        //     var dropoffLocation = urlParams.get("dropoffLocation");
        //     var pickupDate = urlParams.get("pickupDate");

        //     if(pickupLocation!=null && dropoffLocation!=null && pickupDate!=null ){
        //         for (var i = 0; i < pickupLocationSelect.options.length; i++) {

        //          if (pickupLocationSelect.options[i].value === pickupLocation) {

        //             pickupLocationSelect.options[i].selected = true;
        //             break; // Exit the loop once the option is found
        //         }
        //     }
        // }


        // });
    </script>
@endsection
