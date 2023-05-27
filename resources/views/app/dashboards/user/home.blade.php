@extends('app.dashboards.user.layout.app')

@section('usertitle')
    User Home | Open Roads Car Rental
@endsection

@section('usersidebar')
    <li><a href="{{ route('user.home') }}" class="active"><i class="fa fa-home"></i>Home</a></li>
    <li><a href="{{ route('user.bookings') }}"><i class="fa fa-calendar"></i>My Bookings</a></li>
    <li><a href="{{ route('user.cars') }}"><i class="fa fa-car"></i>Cars</a></li>
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
    Home
@endsection

@section('userbody')
    <div class="col-lg-9">
        {{-- add new order --}}
        <div class="card p-4 rounded-5 mb10">
            <a class="btn btn-main col-md-3" href="{{ route('user.cars') }}">New Booking</a>
        </div>
        {{-- recent bookings --}}
        <div class="card p-4 rounded-5 mb25">
            <h4>My Recent Bookings</h4>
            <table class="table de-table">
                <thead>
                    <tr>
                        <th scope="col"><span class="text-uppercase fs-12 text-gray">Order ID</span></th>
                        <th scope="col"><span class="text-uppercase fs-12 text-gray">Car Name</span></th>
                        <th scope="col"><span class="text-uppercase fs-12 text-gray">Pick Up Location</span></th>
                        <th scope="col"><span class="text-uppercase fs-12 text-gray">Drop Off Location</span></th>
                        <th scope="col"><span class="text-uppercase fs-12 text-gray">Pick Up Date</span></th>
                        <th scope="col"><span class="text-uppercase fs-12 text-gray">Return Date</span></th>
                        <th scope="col"><span class="text-uppercase fs-12 text-gray">Status</span></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($bookings as $item)
                        <tr>
                            <td>
                                <span class="d-lg-none d-sm-block">Order ID</span>
                                <div class="badge bg-gray-100 text-dark">#{{ $item->id }}</div>
                            </td>
                            <td>
                                <span class="d-lg-none d-sm-block">Car Name</span>
                                <span class="bold"> {{ $item->displaying_name }}</span>
                            </td>
                            <td>
                                <span class="d-lg-none d-sm-block">Pick Up Location</span>
                                {{ $item->pickup_location }}
                            </td>
                            <td>
                                <span class="d-lg-none d-sm-block">Drop Off Location</span>
                                {{ $item->dropoff_location }}
                            </td>
                            <td>
                                <span class="d-lg-none d-sm-block">Pick Up Date</span>
                                {{ $item->pickup_date }}
                            </td>
                            <td>
                                <span class="d-lg-none d-sm-block">Return Date</span>
                                {{ $item->return_date }}
                            </td>
                            <td>
                                @if ($item->booking_status == 'scheduled')
                                    <div class="badge rounded-pill bg-primary">scheduled</div>
                                @elseif ($item->status == 'completed')
                                    <div class="badge rounded-pill bg-success">completed</div>
                                @elseif ($item->status == 'cancelled')
                                    <div class="badge rounded-pill bg-danger">cancelled</div>
                                @endif
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7">
                                <span class="d-lg-none d-sm-block">Order ID</span>
                                <div class="badge bg-gray-100 text-dark">No bookings yet!</div>
                            </td>
                        </tr>
                    @endforelse

                </tbody>
            </table>
        </div>
    </div>
@endsection
