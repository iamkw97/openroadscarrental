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
            <button class="frmbtnlgout"> <i class="fa fa-sign-out"></i>Sign Out</button>
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
            <div class="row">
                @forelse ($cars_for_gallery as $item)
                    <div class="col-xl-4 col-lg-6">
                        <div class="de-item mb30">
                            <div class="d-img">
                                <img src="{{ asset('img/cars/' . $item->vehicle_image) }}" class="img-fluid" alt="">
                            </div>
                            <div class="d-info">
                                <div class="d-text">
                                    <h4>{{ $item->displaying_name }}</h4>
                                    <div class="d-atr-group">
                                        <span class="d-atr"><img src="{{ asset('welcome/images/icons/1.svg') }}"
                                                alt="">{{ $item->no_of_seats }}</span>
                                        <span class="d-atr"><img src="{{ asset('welcome/images/icons/2.svg') }}"
                                                alt="">{{ $item->no_of_suitcases }}</span>
                                        <span class="d-atr"><img src="{{ asset('welcome/images/icons/4.svg') }}"
                                                alt="">{{ $item->category }}</span>
                                    </div>
                                    <div class="d-price mb-5">
                                        Daily rate from
                                        <span>{{ str_replace(',', '.', number_format($item->apr2sep_isk_cost_rental_per_day)) }}
                                            ISK</span>
                                        Approximately<H4>USD
                                            &nbsp;{{ $item->apr2sep_usd_cost_rental_per_day }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            EUR
                                            &nbsp;{{ $item->apr2sep_eur_cost_rental_per_day }} </H4>
                                    </div>
                                    <a class="btn-main" href="{{ route('user.cars.show', $item->id) }}">Rent
                                        Now</a>
                                </div>
                            </div>
                        </div>
                    </div>

                @empty
                    <div class="col-lg-12">
                        <h4>No cars found!</h4>
                    </div>
                @endforelse

            </div>
        </div>
    @endsection
