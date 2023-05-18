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
            <button class="frmbtnlgout"> <i class="fa fa-sign-out"></i>Sign Out</button>
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
                    {{-- {{route('user.update', auth()->user()->id)}} --}}
                    <form name="editUserDetailsForm" id='editUserDetailsForm' action="{{route('user.update', auth()->user()->id)}}" class="form-border" method="post">
                        @csrf
                        @method('post')
                        <div class="row">

                            <div class="col-md-6">
                                <div class="field-set">
                                    <label for='fullname'>Full Name<span style="color:rgb(255, 0, 0)">&nbsp;*</span></label>
                                    <input type='text' name='fullname' id='fullname' class="form-control" value="{{auth()->user()->fullname}}">
                                    @error('fullname')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="field-set">
                                    <label for='email'>Email Address<span
                                            style="color:rgb(255, 0, 0)">&nbsp;*</span></label>
                                    <input type='text' name='email' id='email' class="form-control" value="{{auth()->user()->email}}">
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="field-set">
                                    <label for='address'>Address<span style="color:rgb(255, 0, 0)">&nbsp;*</span></label>
                                    <input type='text' name='address' id='address' class="form-control" value="{{auth()->user()->address}}">
                                    @error('address')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="field-set">
                                    <label for='city'>City<span style="color:rgb(255, 0, 0)">&nbsp;*</span></label>
                                    <input type='text' name='city' id='city' class="form-control" value="{{auth()->user()->city}}">
                                    @error('city')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="field-set">
                                    <label for='phone1'>Phone 1<span style="color:rgb(255, 0, 0)">&nbsp;*</span></label>
                                    <input type='text' name='phone1' id='phone1' class="form-control" value="{{auth()->user()->phone1}}">
                                    @error('phone1')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="field-set">
                                    <label for='phone2'>Phone 2</label>
                                    <input type='text' name='phone2' id='phone2' class="form-control" value="{{auth()->user()->phone2}}">
                                    @error('phone2')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="field-set">
                                    <label for='dob'>Date of Birth<span
                                            style="color:rgb(255, 0, 0)">&nbsp;*</span></label>
                                    <input type='date' name='dob' id='dob' class="form-control" value="{{auth()->user()->dob}}">
                                    @error('dob')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="field-set">
                                    <label for='license_no'>Personal ID/Driving License<span
                                            style="color:rgb(255, 0, 0)">&nbsp;*</span></label>
                                    <input type='text' name='license_no' id='license_no' class="form-control" value="{{auth()->user()->license_no}}">
                                    @error('license_no')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="field-set">
                                    <label for='password'>New Password<span style="color:rgb(255, 0, 0)">&nbsp;*</span></label>
                                    <input type='password' name='password' id='password' class="form-control" placeholder="Enter new password">
                                    @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="field-set">
                                    <label for='repassword'>Re-enter New Password<span
                                            style="color:rgb(255, 0, 0)">&nbsp;*</span></label>
                                    <input type='password' name='repassword' id='repassword' class="form-control" placeholder="Re enter new password">
                                    @error('repassword')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>


                            <div class="col-md-12 mt-3">
                                <div id='submit' class="pull-right">
                                    <button type='submit' id='submiteditUserDetailsForm'
                                        class="btn-main color-2">Update</button>
                                </div>
                                <div class="clearfix"></div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
