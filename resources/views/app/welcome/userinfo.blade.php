@extends('app.welcome.layout.app')

@section('title')
    Personal Details | Open Roads Car Rental
@endsection

@section('welcomebody')
    <!-- content begin -->
    <div class="no-bottom no-top zebra" id="content">
        <div id="top"></div>

        <!-- section begin -->
        <section id="subheader" class="jarallax text-light">
            <img src="{{ asset('welcome/images/background/2.jpg') }}" class="jarallax-img" alt="">
            <div class="center-y relative text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h1>User Details</h1>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section close -->

        <section id="section-car-details">
            <div class="container">
                <div class="row g-2">
                    <div class="col-lg-9">
                        <h3>User Details</h3>
                        <form name="registerForm" id='registerForm' action=""
                            class="form-border" method="post">
                            @csrf
                            @method('post')
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="field-set">
                                        <label for='fullname'>Full Name<span
                                                style="color:rgb(255, 0, 0)">&nbsp;*</span></label>
                                        <input type='text' name='fullname' id='fullname' class="form-control">
                                        @error('fullname')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="field-set">
                                        <label for='email'>Email Address<span
                                                style="color:rgb(255, 0, 0)">&nbsp;*</span></label>
                                        <input type='text' name='email' id='email' class="form-control">
                                        @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="field-set">
                                        <label for='address'>Address<span
                                                style="color:rgb(255, 0, 0)">&nbsp;*</span></label>
                                        <input type='text' name='address' id='address' class="form-control">
                                        @error('address')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="field-set">
                                        <label for='city'>City<span style="color:rgb(255, 0, 0)">&nbsp;*</span></label>
                                        <input type='text' name='city' id='city' class="form-control">
                                        @error('city')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="field-set">
                                        <label for='phone1'>Phone 1<span
                                                style="color:rgb(255, 0, 0)">&nbsp;*</span></label>
                                        <input type='text' name='phone1' id='phone1' class="form-control">
                                        @error('phone1')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="field-set">
                                        <label for='phone2'>Phone 2</label>
                                        <input type='text' name='phone2' id='phone2' class="form-control">
                                        @error('phone2')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="field-set">
                                        <label for='dob'>Date of Birth<span
                                                style="color:rgb(255, 0, 0)">&nbsp;*</span></label>
                                        <input type='date' name='dob' id='dob' class="form-control">
                                        @error('dob')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="field-set">
                                        <label for='license_no'>Personal ID/Driving License<span
                                                style="color:rgb(255, 0, 0)">&nbsp;*</span></label>
                                        <input type='text' name='license_no' id='license_no' class="form-control">
                                        @error('license_no')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="field-set">
                                        <label for='password'>Password<span
                                                style="color:rgb(255, 0, 0)">&nbsp;*</span></label>
                                        <input type='password' name='password' id='password' class="form-control">
                                        @error('password')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="field-set">
                                        <label for='repassword'>Re-enter Password<span
                                                style="color:rgb(255, 0, 0)">&nbsp;*</span></label>
                                        <input type='password' name='repassword' id='repassword' class="form-control">
                                        @error('repassword')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="col-md-12 mt-3">
                                    <div id='submit' class="pull-right">
                                        <button type='submit' id='submitRegisterForm' class="btn-main color-2">Proceed</button>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>

                            </div>
                        </form>
                    </div>


                    <div class="col-lg-3">
                        <div class="de-item mb10">
                            <div class="d-img">
                                <img src="{{ asset('welcome/images/cars/bmw-m5.jpg') }}" class="img-fluid"
                                    alt="">
                            </div>
                            <div class="d-info">
                                <div class="d-text">
                                    <h4>BMW M2</h4>
                                    <div class="d-item_like">
                                        <i class="fa fa-heart"></i><span>36</span>
                                    </div>
                                    <div class="d-atr-group">
                                        <span class="d-atr"><img src="{{ asset('welcome/images/icons/1.svg') }}"
                                                alt="">5</span>
                                        <span class="d-atr"><img src="{{ asset('welcome/images/icons/2.svg') }}"
                                                alt="">2</span>
                                        <span class="d-atr"><img src="{{ asset('welcome/images/icons/3.svg') }}"
                                                alt="">4</span>
                                        <span class="d-atr"><img src="{{ asset('welcome/images/icons/4.svg') }}"
                                                alt="">Sedan</span>
                                    </div>
                                    <div class="de-price text-center">
                                        Total<h4>$265</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="de-box mb25">
                            <form name="contactForm" id='contact_form' method="post">
                                <div class="row">
                                    <div class="col-lg-12 mb20">
                                        <h5>Pick Up Location</h5>
                                        <input type="text" name="PickupLocation" onfocus="geolocate()"
                                            placeholder="Enter your pickup location" id="autocomplete" autocomplete="off"
                                            class="form-control">

                                        <div class="jls-address-preview jls-address-preview--hidden">
                                            <div class="jls-address-preview__header">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 mb20">
                                        <h5>Drop Off Location</h5>
                                        <input type="text" name="DropoffLocation" onfocus="geolocate()"
                                            placeholder="Enter your dropoff location" id="autocomplete2"
                                            autocomplete="off" class="form-control">

                                        <div class="jls-address-preview jls-address-preview--hidden">
                                            <div class="jls-address-preview__header">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 mb20">
                                        <h5>Pick Up Date & Time</h5>
                                        <div class="date-time-field">
                                            <input type="text" id="date-picker" name="Pick Up Date" value="">
                                            <select name="Pick Up Time" id="pickup-time">
                                                <option selected disabled value="Select time">Time</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 mb20">
                                        <h5>Return Date & Time</h5>
                                        <div class="date-time-field">
                                            <input type="text" id="date-picker-2" name="Collection Date"
                                                value="">
                                            <select name="Collection Time" id="collection-time">
                                                <option selected disabled value="Select time">Time</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </div>
    <!-- content close -->

    <a href="#" id="back-to-top"></a>
    <script>
        
    </script>
@endsection
