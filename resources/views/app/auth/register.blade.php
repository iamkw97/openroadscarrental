@extends('app.welcome.layout.app')

@section('title')
    Register | Open Roads Car Rental
@endsection

@section('welcomebody')
    <!-- content begin -->
    <div class="no-bottom no-top" id="content">
        <div id="top"></div>

        <!-- section begin -->
        <section id="subheader" class="jarallax text-light">
            <img src="{{ asset('welcome/images/background/back1.jpg') }}" class="jarallax-img" alt="">
            <div class="center-y relative text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h1>Register</h1>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section close -->


        <section aria-label="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <h3>Don't have an account?&nbsp; Sign Up now.</h3>

                        <div class="spacer-10"></div>

                        <form name="registerForm" id='registerForm' action="{{ route('register.store') }}"
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


                                <div class="col-md-12">
                                    <div id='submit' class="pull-right">
                                        <button type='submit' id='submitRegisterForm' class="btn-main color-2">Sign
                                            up</button>
                                    </div>

                                    <div class="clearfix"></div>
                                </div>

                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </section>


    </div>
    <!-- content close -->

    <a href="#" id="back-to-top"></a>
@endsection
