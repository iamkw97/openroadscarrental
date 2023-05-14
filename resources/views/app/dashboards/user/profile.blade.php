@extends('app.dashboards.user.layout.app')

@section('usertitle')
    User Profile | Open Roads Car Rental
@endsection

@section('usersidebar')
    <li><a href="{{ route('user.home') }}"><i class="fa fa-home"></i>Home</a></li>
    <li><a href="{{ route('user.bookings') }}"><i class="fa fa-calendar"></i>My Bookings</a></li>
    <li><a href="{{ route('user.cars') }}"><i class="fa fa-car"></i>Cars</a></li>
    <li><a href="{{ route('user.profile') }}" class="active"><i class="fa fa-user"></i>Profile</a></li>
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
    Profile
@endsection

@section('userbody')
    <div class="col-lg-9">
        <div class="card p-4  rounded-5">
            <div class="row">
                <div class="col-lg-12">
                    <form id="form-create-item" class="form-border" method="post" action="email.php">
                        <div class="de_tab tab_simple">

                            <ul class="de_nav">
                                <li class="active"><span>Profile</span></li>
                                <li><span>Notifications</span></li>
                            </ul>

                            <div class="de_tab_content">
                                <div class="tab-1">
                                    <div class="row">
                                        <div class="col-lg-6 mb20">
                                            <h5>Username</h5>
                                            <input type="text" name="username" id="username" class="form-control"
                                                placeholder="Enter username" />
                                        </div>
                                        <div class="col-lg-6 mb20">
                                            <h5>Email Address</h5>
                                            <input type="text" name="email_address" id="email_address"
                                                class="form-control" placeholder="Enter email" />
                                        </div>
                                        <div class="col-lg-6 mb20">
                                            <h5>New Password</h5>
                                            <input type="Password" name="user_password" id="user_password"
                                                class="form-control" placeholder="********" />
                                        </div>
                                        <div class="col-lg-6 mb20">
                                            <h5>Re-enter Password</h5>
                                            <input type="Password" name="user_password_re-enter" id="user_password_re-enter"
                                                class="form-control" placeholder="********" />
                                        </div>
                                        <div class="col-md-6 mb20">
                                            <h5>Language</h5>
                                            <p class="p-info">Select your prefered language.</p>
                                            <div id="select_lang" class="dropdown fullwidth">
                                                <a href="#" class="btn-selector">English</a>
                                                <ul>
                                                    <li class="active"><span>English</span></li>
                                                    <li><span>France</span></li>
                                                    <li><span>German</span></li>
                                                    <li><span>Japan</span></li>
                                                    <li><span>Italy</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb20">
                                            <h5>Hour Format</h5>
                                            <p class="p-info">Select your prefered language.</p>
                                            <div id="select_hour_format" class="dropdown fullwidth">
                                                <a href="#" class="btn-selector">24-hour</a>
                                                <ul>
                                                    <li class="active"><span>24-hour</span></li>
                                                    <li><span>12-hour</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-2">
                                    <div class="row">
                                        <div class="col-md-6 mb-sm-20">
                                            <div class="switch-with-title s2">
                                                <h5>Discount Notifications</h5>
                                                <div class="de-switch">
                                                    <input type="checkbox" id="notif-item-sold" class="checkbox">
                                                    <label for="notif-item-sold"></label>
                                                </div>
                                                <div class="clearfix"></div>
                                                <p class="p-info">You'll get notification while new discount available.</p>
                                            </div>

                                            <div class="spacer-20"></div>

                                            <div class="switch-with-title s2">
                                                <h5>New Product Notification</h5>
                                                <div class="de-switch">
                                                    <input type="checkbox" id="notif-bid-activity" class="checkbox">
                                                    <label for="notif-bid-activity"></label>
                                                </div>
                                                <div class="clearfix"></div>
                                                <p class="p-info">You'll get notification while new product available.</p>
                                            </div>

                                        </div>

                                        <div class="col-md-6">
                                            <div class="switch-with-title s2">
                                                <h5>Daily Reports</h5>
                                                <div class="de-switch">
                                                    <input type="checkbox" id="notif-auction-expiration" class="checkbox">
                                                    <label for="notif-auction-expiration"></label>
                                                </div>
                                                <div class="clearfix"></div>
                                                <p class="p-info">We will send you a report everyday.</p>
                                            </div>

                                            <div class="spacer-20"></div>

                                            <div class="switch-with-title s2">
                                                <h5>Monthly Reports</h5>
                                                <div class="de-switch">
                                                    <input type="checkbox" id="notif-outbid" class="checkbox">
                                                    <label for="notif-outbid"></label>
                                                </div>
                                                <div class="clearfix"></div>
                                                <p class="p-info">We will send you a report each month.</p>
                                            </div>

                                        </div>

                                        <div class="spacer-20"></div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <input type="button" id="submit" class="btn-main" value="Update profile">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection