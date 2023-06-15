@extends('app.welcome.layout.app')

@section('googletag')
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-0E1P706JRR"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-0E1P706JRR');
    </script>
@endsection

@section('title')
    Personal Details | Open Roads Car Rental
@endsection

@section('welcomebody')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.7.5/sweetalert2.min.css"
        integrity="sha512-InYSgxgTnnt8BG3Yy0GcpSnorz5gxHvT6OEoRWj91Gg+RvNdCiAharnBe+XFIDS754Kd9TekdjXw3V7TAgh6Vw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- content begin -->
    <div class="no-bottom no-top zebra" id="content">
        <div id="top"></div>

        <!-- section begin -->
        <section id="subheader" class="jarallax text-light">
            <img src="{{ asset('welcome/images/background/back1.jpg') }}" class="jarallax-img"
                alt="openroadscarrental-welcome-background">
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
                        <form name="registerForm" id='registerForm' action="" class="form-border" method="post">
                            @csrf
                            @method('post')
                            <div class="row">

                                <div class="col-md-6 mb-2">
                                    <div class="field-set">
                                        <label for='fullname'>Full Name<span
                                                style="color:rgb(255, 0, 0)">&nbsp;*</span></label>
                                        <input type='text' name='fullname' id='fullname' class="form-control">
                                        @error('fullname')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6 mb-2">
                                    <div class="field-set">
                                        <label for='email'>Email Address<span
                                                style="color:rgb(255, 0, 0)">&nbsp;*</span></label>
                                        <input type='text' name='email' id='email' class="form-control">
                                        @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6 mb-2">
                                    <div class="field-set">
                                        <label for='address'>Address<span
                                                style="color:rgb(255, 0, 0)">&nbsp;*</span></label>
                                        <input type='text' name='address' id='address' class="form-control">
                                        @error('address')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6 mb-2">
                                    <div class="field-set">
                                        <label for='city'>City<span style="color:rgb(255, 0, 0)">&nbsp;*</span></label>
                                        <input type='text' name='city' id='city' class="form-control">
                                        @error('city')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6 mb-2">
                                    <div class="field-set">
                                        <label for='phone1'>Phone 1 (with country code)<span
                                                style="color:rgb(255, 0, 0)">&nbsp;*</span></label>
                                        <input type='text' name='phone1' id='phone1' class="form-control"
                                            placeholder="+354">
                                        @error('phone1')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6 mb-2">
                                    <div class="field-set">
                                        <label for='phone2'>Phone 2 (with country code)</label>
                                        <input type='text' name='phone2' pid='phone2' class="form-control"
                                            placeholder="+354">
                                        @error('phone2')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>



                                <div class="col-md-6 mb-2">
                                    <div class="field-set">
                                        <label for='flight_no'>Flight Number<span
                                                style="color:rgb(255, 0, 0)">&nbsp;*</span></label>
                                        <input type='text' name='flight_no' id='flight_no' class="form-control">
                                        @error('flight_no')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6 mb-2">
                                    <div class="field-set">
                                        <label for='driver_name'>Driver's Name<span
                                                style="color:rgb(255, 0, 0)">&nbsp;*</span></label>
                                        <input type='text' name='driver_name' id='driver_name' class="form-control">
                                        @error('driver_name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-5 mb-2">
                                    <div class="field-set">
                                        <label for='license_no'>Driving License<span
                                                style="color:rgb(255, 0, 0)">&nbsp;*</span></label>
                                        <input type='text' name='license_no' id='license_no' class="form-control">
                                        @error('license_no')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-3 mb-2">
                                    <div class="field-set">
                                        <label for='license_valid_date'>License Valid Date<span
                                                style="color:rgb(255, 0, 0)">&nbsp;*</span></label>
                                        <input type='date' name='license_valid_date' id='license_valid_date'
                                            class="form-control">
                                        @error('license_valid_date')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-4 mb-2">
                                    <div class="field-set">
                                        <label for='license_img'>Upload an Image of License<span
                                                style="color:rgb(255, 0, 0)">&nbsp;*</span></label>
                                        <input type='file' name='license_img[]' id='license_img' class="form-control">
                                        @error('license_img')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6 mb-2 tobe_hidden">
                                    <div class="field-set">
                                        <label for='password'>Password<span
                                                style="color:rgb(255, 0, 0)">&nbsp;*</span></label>
                                        <input type='password' name='password' id='password' class="form-control">
                                        @error('password')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6 mb-2 tobe_hidden">
                                    <div class="field-set">
                                        <label for='repassword'>Re-enter Password<span
                                                style="color:rgb(255, 0, 0)">&nbsp;*</span></label>
                                        <input type='password' name='repassword' id='repassword' class="form-control">
                                        @error('repassword')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="col-md-12">
                                    <h4>Please Note<span style="color:red;">*</span><br><strong>The payments are done in
                                            cash after you receive the car at the airport.</strong></h4>
                                    <div id='submit' class="pull-right">
                                        <button type='button' id='submitRegister'
                                            class="btn-main color-2">Proceed</button>
                                    </div>

                                    <div class="clearfix"></div>
                                </div>

                            </div>
                        </form>
                    </div>


                    <div class="col-lg-3">
                        <div class="de-item mb10">
                            <div class="d-img">

                            </div>
                            <div class="d-info">
                                <div class="d-text">
                                    <h4 id="vehicleDisplayName"></h4>

                                    <div class="d-atr-group">
                                        <span class="d-atr"><img src="{{ asset('welcome/images/icons/1.svg') }}"
                                                alt="openroadscarrental-welcome-background">
                                            <h5 id="seatcounts"></h5>
                                        </span>
                                        <span class="d-atr"><img src="{{ asset('welcome/images/icons/2.svg') }}"
                                                alt="openroadscarrental-welcome-background">
                                            <h5 id="bagscount"></h5>
                                        </span>

                                        <span class="d-atr"><img src="{{ asset('welcome/images/icons/4.svg') }}"
                                                alt="openroadscarrental-welcome-background">
                                            <h5 id="VehicleCategoryinfomation"></h5>
                                        </span>
                                    </div>
                                    <div class="de-price text-center" id="totalPrice">
                                        Total<h4>ISK <span id="total_cost"></span></h4>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <ul class="list-group list-group-flush">
                                    <h5>Additional Features</h5>
                                    <li class="list-group-item"><span id="additional_baby_seat_status"></span> Baby Seat
                                    </li>
                                    <li class="list-group-item"> <span id="additional_wifi_status"></span> WiFi(unlimited)
                                    </li>
                                    <li class="list-group-item"> <span id="additional_driver_status"></span> Driver</li>
                                </ul>
                            </div>
                        </div>
                        <div class="de-box mb25">
                            <form name="contactForm" id='contact_form' method="post">
                                <div class="row">
                                    <div class="col-lg-12 mb20">
                                        <h5>Pick Up Location</h5>
                                        <input type="text" name="PickupLocation"
                                            placeholder="Enter your pickup location" id="finalpicklocation"
                                            autocomplete="off" class="form-control"
                                            style=" width: 100%; border: none; border-bottom: 1px solid #ccc; outline: none; ">

                                        <div class="jls-address-preview jls-address-preview--hidden">
                                            <div class="jls-address-preview__header">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 mb20">
                                        <h5>Drop Off Location</h5>
                                        <input type="text" name="finaldroplocation"
                                            placeholder="Enter your dropoff location" id="finaldroplocation"
                                            autocomplete="off" class="form-control"
                                            style=" width: 100%; border: none; border-bottom: 1px solid #ccc; outline: none; ">

                                        <div class="jls-address-preview jls-address-preview--hidden">
                                            <div class="jls-address-preview__header">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 mb20">
                                        <h5>Pick Up Date & Time</h5>
                                        <input id="finalpickdateinfo" name="car_engine_3" type="date"
                                            style=" width: 100%; border: none; border-bottom: 1px solid #ccc; outline: none; ">
                                        <input id="finalpicktimeinfo" name="car_engine_3" type="time"
                                            style=" width: 100%; border: none; border-bottom: 1px solid #ccc; outline: none;  margin-top:10px;">
                                        {{-- <input type="text"   id="pickup-timefinal" name="Pick Up Date" value=""> --}}

                                    </div>

                                    <div class="col-lg-12 mb20">
                                        <h5>Return Date & Time</h5>
                                        <div class="date-time-field">
                                            <input id="finaldropdateinfo" name="car_engine_3" type="date"
                                                style=" width: 100%; border: none; border-bottom: 1px solid #ccc; outline: none; ">
                                            <input id="finaldroptimeinfo" name="car_engine_3" type="time"
                                                style=" width: 100%; border: none; border-bottom: 1px solid #ccc; outline: none;  margin-top:10px;">
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
    <script>
        $(document).ready(function() {
            $('#email').on('input', function() {
                var enteredEmail = $(this).val();
                var url = '/userdetails/view';
                $.ajax({
                    url: url,
                    type: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: {
                        email: enteredEmail
                    },
                    success: function(response) {
                        // console.log(response);
                        // var emailList = response.emails;
                        // $('#email').find('option').remove();
                        // $.each(emailList, function(index, email) {
                        //     var option = $('<option>').text(email).val(email);
                        //     $('#email').append(option);
                        // });
                        // Fill relevant data into other input fields
                        $('#fullname').val(response.fullname);
                        $('#address').val(response.address);
                        $('#city').val(response.city);
                        $('#phone1').val(response.phone1);
                        $('#phone2').val(response.phone2);
                        $('#flight_no').val(response.flight_no);
                        $('#driver_name').val(response.driver_name);
                        $('#license_no').val(response.license_no);
                        $('#license_valid_date').val(response.license_valid_date);

                        // Check if email exists in the database
                        if (enteredEmail == response.email) {
                            $('.tobe_hidden').hide();
                            $('#fullname').prop('disabled', true);
                        } else {
                            $('.tobe_hidden').show();
                            $('#fullname').prop('disabled', false);
                        }
                    },
                    error: function(xhr, status, error) {}
                });
            });
        });

    </script>
@endsection
