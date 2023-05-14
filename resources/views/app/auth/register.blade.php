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
        <img src="{{asset('welcome/images/background/subheader.jpg')}}" class="jarallax-img" alt="">
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
                    <h3>Don't have an account?&nbsp; Sign up now.</h3>

                    <div class="spacer-10"></div>

                    <form name="contactForm" id='contact_form' class="form-border" method="post" action='blank.php'>

                        <div class="row">

                            <div class="col-md-6">
                                <div class="field-set">
                                    <label for='fullname'>Full Name<span style="color:rgb(255, 0, 0)">&nbsp;*</span></label>
                                    <input type='text' name='fullname' id='fullname' class="form-control">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="field-set">
                                    <label for='email'>Email Address<span style="color:rgb(255, 0, 0)">&nbsp;*</span></label>
                                    <input type='text' name='email' id='email' class="form-control">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="field-set">
                                    <label for='address'>Address<span style="color:rgb(255, 0, 0)">&nbsp;*</span></label>
                                    <input type='text' name='address' id='address' class="form-control">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="field-set">
                                    <label for='city'>City<span style="color:rgb(255, 0, 0)">&nbsp;*</span></label>
                                    <input type='text' name='city' id='city' class="form-control">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="field-set">
                                    <label for='phone1'>Phone 1<span style="color:rgb(255, 0, 0)">&nbsp;*</span></label>
                                    <input type='text' name='phone1' id='phone1' class="form-control">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="field-set">
                                    <label for='phone2'>Phone 2</label>
                                    <input type='text' name='phone2' id='phone2' class="form-control">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="field-set">
                                    <label for='dob'>Date of Birth<span style="color:rgb(255, 0, 0)">&nbsp;*</span></label>
                                    <input type='date' name='dob' id='dob' class="form-control">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="field-set">
                                    <label for='license'>Personal ID/Driving License<span style="color:rgb(255, 0, 0)">&nbsp;*</span></label>
                                    <input type='text' name='license' id='license' class="form-control">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="field-set">
                                    <label for='password'>Password<span style="color:rgb(255, 0, 0)">&nbsp;*</span></label>
                                    <input type='password' name='password' id='password' class="form-control">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="field-set">
                                    <label for='repassword'>Re-enter Password<span style="color:rgb(255, 0, 0)">&nbsp;*</span></label>
                                    <input type='password' name='repassword' id='repassword' class="form-control">
                                </div>
                            </div>


                            <div class="col-md-12">

                                <div id='submit' class="pull-right">
                                    <input type='submit' id='send_message' value='Sign up' class="btn-main color-2">
                                </div>

                                <div id='mail_success' class='success'>Your message has been sent successfully.</div>
                                <div id='mail_fail' class='error'>Sorry, error occured this time sending your message.</div>
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
