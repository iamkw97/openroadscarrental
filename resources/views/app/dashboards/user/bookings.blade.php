@extends('app.dashboards.user.layout.app')

@section('usertitle')
    User Bookings | Open Roads Car Rental
@endsection

@section('usersidebar')
    <li><a href="{{ route('user.home') }}"><i class="fa fa-home"></i>Home</a></li>
    <li><a href="{{route('user.bookings')}}" class="active"><i class="fa fa-calendar"></i>My Bookings</a></li>
    <li><a href="{{route('user.cars')}}"><i class="fa fa-car"></i>Cars</a></li>
    <li><a href="{{route('user.profile')}}"><i class="fa fa-user"></i>Profile</a></li>
    <li><a href=""><i class="fa fa-sign-out"></i>Sign Out</a></li>
@endsection

@section('usersubheader')
    Bookings
@endsection

@section('userbody')
<div class="col-lg-9">

    <div class="card p-4 rounded-5 mb25">
        <h4>Scheduled Orders</h4>

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
            <tr>
              <td><span class="d-lg-none d-sm-block">Order ID</span><div class="badge bg-gray-100 text-dark">#01245</div></td>
              <td><span class="d-lg-none d-sm-block">Car Name</span><span class="bold">Ferrari Enzo</span></td>
              <td><span class="d-lg-none d-sm-block">Pick Up Location</span>Kentucky</td>
              <td><span class="d-lg-none d-sm-block">Drop Off Location</span>Michigan</td>
              <td><span class="d-lg-none d-sm-block">Pick Up Date</span>March 14, 2023</td>
              <td><span class="d-lg-none d-sm-block">Return Date</span>March 16, 2023</td>
              <td><div class="badge rounded-pill bg-warning">scheduled</div></td>
            </tr>
            <tr>
              <td><span class="d-lg-none d-sm-block">Order ID</span><div class="badge bg-gray-100 text-dark">#01245</div></td>
              <td><span class="d-lg-none d-sm-block">Car Name</span><span class="bold">VW Polo</span></td>
              <td><span class="d-lg-none d-sm-block">Pick Up Location</span>Philadelphia</td>
              <td><span class="d-lg-none d-sm-block">Drop Off Location</span>Washington</td>
              <td><span class="d-lg-none d-sm-block">Pick Up Date</span>March 16, 2023</td>
              <td><span class="d-lg-none d-sm-block">Return Date</span>March 18, 2023</td>
              <td><div class="badge rounded-pill bg-warning">scheduled</div></td>
            </tr>
            <tr>
              <td><span class="d-lg-none d-sm-block">Order ID</span><div class="badge bg-gray-100 text-dark">#01216</div></td>
              <td><span class="d-lg-none d-sm-block">Car Name</span><span class="bold">Toyota Rav 4</span></td>
              <td><span class="d-lg-none d-sm-block">Pick Up Location</span>Baltimore</td>
              <td><span class="d-lg-none d-sm-block">Drop Off Location</span>Sacramento</td>
              <td><span class="d-lg-none d-sm-block">Pick Up Date</span>March 19, 2023</td>
              <td><span class="d-lg-none d-sm-block">Return Date</span>March 20, 2023</td>
              <td><div class="badge rounded-pill bg-warning">scheduled</div></td>
            </tr>
          </tbody>
        </table>
    </div>

    <div class="card p-4 rounded-5 mb25">
        <h4>Completed Orders</h4>

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
            <tr>
              <td><span class="d-lg-none d-sm-block">Order ID</span><div class="badge bg-gray-100 text-dark">#01236</div></td>
              <td><span class="d-lg-none d-sm-block">Car Name</span><span class="bold">Jeep Renegade</span></td>
              <td><span class="d-lg-none d-sm-block">Pick Up Location</span>New York</td>
              <td><span class="d-lg-none d-sm-block">Drop Off Location</span>Los Angeles</td>
              <td><span class="d-lg-none d-sm-block">Pick Up Date</span>March 2, 2023</td>
              <td><span class="d-lg-none d-sm-block">Return Date</span>March 11, 2023</td>
              <td><div class="badge rounded-pill bg-success">completed</div></td>
            </tr>
            <tr>
              <td><span class="d-lg-none d-sm-block">Order ID</span><div class="badge bg-gray-100 text-dark">#01287</div></td>
              <td><span class="d-lg-none d-sm-block">Car Name</span><span class="bold">Hyundai Staria</span></td>
              <td><span class="d-lg-none d-sm-block">Pick Up Location</span>Nevada</td>
              <td><span class="d-lg-none d-sm-block">Drop Off Location</span>New Mexico</td>
              <td><span class="d-lg-none d-sm-block">Pick Up Date</span>March 6, 2023</td>
              <td><span class="d-lg-none d-sm-block">Return Date</span>March 12, 2023</td>
              <td><div class="badge rounded-pill bg-success">completed</div></td>
            </tr>
            <tr>
              <td><span class="d-lg-none d-sm-block">Order ID</span><div class="badge bg-gray-100 text-dark">#01236</div></td>
              <td><span class="d-lg-none d-sm-block">Car Name</span><span class="bold">Range Rover</span></td>
              <td><span class="d-lg-none d-sm-block">Pick Up Location</span>Virginia</td>
              <td><span class="d-lg-none d-sm-block">Drop Off Location</span>Oregon</td>
              <td><span class="d-lg-none d-sm-block">Pick Up Date</span>March 2, 2023</td>
              <td><span class="d-lg-none d-sm-block">Return Date</span>March 13, 2023</td>
              <td><div class="badge rounded-pill bg-success">completed</div></td>
            </tr>
            <tr>
              <td><span class="d-lg-none d-sm-block">Order ID</span><div class="badge bg-gray-100 text-dark">#01287</div></td>
              <td><span class="d-lg-none d-sm-block">Car Name</span><span class="bold">BMW M2</span></td>
              <td><span class="d-lg-none d-sm-block">Pick Up Location</span>Kansas City</td>
              <td><span class="d-lg-none d-sm-block">Drop Off Location</span>Houston</td>
              <td><span class="d-lg-none d-sm-block">Pick Up Date</span>March 1, 2023</td>
              <td><span class="d-lg-none d-sm-block">Return Date</span>March 14, 2023</td>
              <td><div class="badge rounded-pill bg-success">completed</div></td>
            </tr>
          </tbody>
        </table>
    </div>

    <div class="card p-4 rounded-5 mb25">
        <h4>Cancelled Orders</h4>

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
            <tr>
              <td><span class="d-lg-none d-sm-block">Order ID</span><div class="badge bg-gray-100 text-dark">#01263</div></td>
              <td><span class="d-lg-none d-sm-block">Car Name</span><span class="bold">Mini Cooper</span></td>
              <td><span class="d-lg-none d-sm-block">Pick Up Location</span>San Fransisco</td>
              <td><span class="d-lg-none d-sm-block">Drop Off Location</span>Chicago</td>
              <td><span class="d-lg-none d-sm-block">Pick Up Date</span>March 8, 2023</td>
              <td><span class="d-lg-none d-sm-block">Return Date</span>March 12, 2023</td>
              <td><div class="badge rounded-pill bg-danger">cancelled</div></td>
            </tr>
            <tr>
              <td><span class="d-lg-none d-sm-block">Order ID</span><div class="badge bg-gray-100 text-dark">#01263</div></td>
              <td><span class="d-lg-none d-sm-block">Car Name</span><span class="bold">Ford Raptor</span></td>
              <td><span class="d-lg-none d-sm-block">Pick Up Location</span>Georgia</td>
              <td><span class="d-lg-none d-sm-block">Drop Off Location</span>Lousiana</td>
              <td><span class="d-lg-none d-sm-block">Pick Up Date</span>March 8, 2023</td>
              <td><span class="d-lg-none d-sm-block">Return Date</span>March 13, 2023</td>
              <td><div class="badge rounded-pill bg-danger">cancelled</div></td>
            </tr>
          </tbody>
        </table>
    </div>
</div>
@endsection
