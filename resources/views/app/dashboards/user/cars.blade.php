@extends('app.dashboards.user.layout.app')

@section('usertitle')
    User Cars | Open Roads Car Rental
@endsection

@section('usersidebar')
    <li><a href="{{ route('user.home') }}"><i class="fa fa-home"></i>Home</a></li>
    <li><a href="{{ route('user.bookings') }}"><i class="fa fa-calendar"></i>My Bookings</a></li>
    <li><a href="{{ route('user.cars') }}" class="active"><i class="fa fa-car"></i>Cars</a></li>
    <li><a href="{{ route('user.profile') }}"><i class="fa fa-user"></i>Profile</a></li>
    <li>
        <form action="{{ route('logout') }}" method="post">
            @csrf
            @method('post')
            <button class="frmbtnlgout"> <i
                    class="fa fa-sign-out"></i>Sign Out</button>
        </form>
    </li>
@endsection

@section('usersubheader')
    Cars
@endsection

@section('userbody')
    <div class="col-lg-9">
        <div class="card p-4 rounded-5">
            <h4>Cars</h4>
            <div class="spacer-10"></div>
            <div class="de-item-list no-border mb30">
                <div class="d-img">
                    <img src="images/cars/jeep-renegade.jpg" class="img-fluid" alt="">
                </div>
                <div class="d-info">
                    <div class="d-text">
                        <h4>Jeep Renegade</h4>
                        <div class="d-atr-group">
                            <ul class="d-atr">
                                <li><span>Seats:</span>4</li>
                                <li><span>Luggage:</span>2</li>
                                <li><span>Doors:</span>4</li>
                                <li><span>Fuel:</span>Petrol</li>
                                <li><span>Horsepower:</span>500</li>
                                <li><span>Engine:</span>3000</li>
                                <li><span>Drive:</span>4x4</li>
                                <li><span>Type:</span>Hatchback</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="d-price">
                    Daily rate from <span>$265</span>
                    <a class="btn-main" href="car-single.html">Rent Now</a>
                </div>
                <div class="clearfix"></div>
            </div>

            <div class="de-item-list no-border mb30">
                <div class="d-img">
                    <img src="images/cars/bmw-m5.jpg" class="img-fluid" alt="">
                </div>
                <div class="d-info">
                    <div class="d-text">
                        <h4>BMW M2</h4>
                        <div class="d-atr-group">
                            <ul class="d-atr">
                                <li><span>Seats:</span>4</li>
                                <li><span>Luggage:</span>2</li>
                                <li><span>Doors:</span>4</li>
                                <li><span>Fuel:</span>Petrol</li>
                                <li><span>Horsepower:</span>500</li>
                                <li><span>Engine:</span>3000</li>
                                <li><span>Drive:</span>4x4</li>
                                <li><span>Type:</span>Hatchback</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="d-price">
                    Daily rate from <span>$244</span>
                    <a class="btn-main" href="car-single.html">Rent Now</a>
                </div>
                <div class="clearfix"></div>
            </div>

            <div class="de-item-list no-border mb30">
                <div class="d-img">
                    <img src="images/cars/ferrari-enzo.jpg" class="img-fluid" alt="">
                </div>
                <div class="d-info">
                    <div class="d-text">
                        <h4>Ferarri Enzo</h4>
                        <div class="d-atr-group">
                            <ul class="d-atr">
                                <li><span>Seats:</span>4</li>
                                <li><span>Luggage:</span>2</li>
                                <li><span>Doors:</span>4</li>
                                <li><span>Fuel:</span>Petrol</li>
                                <li><span>Horsepower:</span>500</li>
                                <li><span>Engine:</span>3000</li>
                                <li><span>Drive:</span>4x4</li>
                                <li><span>Type:</span>Hatchback</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="d-price">
                    Daily rate from <span>$167</span>
                    <a class="btn-main" href="car-single.html">Rent Now</a>
                </div>
                <div class="clearfix"></div>
            </div>

        </div>
    </div>
@endsection
