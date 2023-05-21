@extends('app.welcome.layout.app')

@section('title')
    About Us | Open Roads Car Rental
@endsection

@section('welcomebody')
    <!-- content begin -->
    <div class="no-bottom no-top zebra" id="content">
        <div id="top"></div>

        <!-- section begin -->
        <section id="subheader" class="jarallax text-light">
            <img src="{{ asset('welcome/images/background/back1.jpg') }}" class="jarallax-img" alt="">
            <div class="center-y relative text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h1>About Us</h1>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section close -->

        <section>
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeInRight">
                        <h2>Ready for <span class="id-color">adventure? </span> We've got
                            you <span class="id-color">covered</span> for any occasion that you need a <span
                                class="id-color">ride.</span></h2>
                    </div>
                    <div class="col-lg-6 wow fadeInLeft">
                        At <span class="id-color">Open Roads Car Rental</span>, we know that choosing the right car for your
                        travel needs is crucial.
                        That's why we offer a wide selection of commercial and luxury cars to suit any occasion, from
                        compact cars for solo travelers to spacious SUVs for family road trips. Our cars are meticulously
                        maintained and regularly serviced to ensure a safe and enjoyable driving experience. With our
                        competitive pricing and exceptional customer service, renting a car with us is the perfect way to
                        elevate your travel game.
                    </div>
                </div>
                <div class="spacer-double"></div>
                <div class="row text-center">
                    <div class="col-md-3 col-sm-6 mb-sm-30">
                        <div class="de_count wow fadeInUp" data-bgcolor="#f5f5f5">
                            <h3 class="timer" data-to="15425" data-speed="3000">0</h3>
                            Hours of Work
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 mb-sm-30">
                        <div class="de_count wow fadeInUp" data-bgcolor="#f5f5f5">
                            <h3 class="timer" data-to="8745" data-speed="3000">0</h3>
                            Clients Supported
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 mb-sm-30">
                        <div class="de_count wow fadeInUp" data-bgcolor="#f5f5f5">
                            <h3 class="timer" data-to="235" data-speed="3000">0</h3>
                            Awards Winning
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 mb-sm-30">
                        <div class="de_count wow fadeInUp" data-bgcolor="#f5f5f5">
                            <h3 class="timer" data-to="15" data-speed="3000">0</h3>
                            Years Experience
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section aria-label="section" class="jarallax text-light">
            <img src="{{ asset('welcome/images/background/8.jpg') }}" class="jarallax-img" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2>Board of Directors</h2>
                        <div class="spacer-20"></div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6 mb30">
                        <div class="f-profile text-center">
                            <div class="fp-wrap f-invert">
                                <div class="fpw-overlay">
                                    <div class="fpwo-wrap">
                                        <div class="fpwow-icons">
                                            <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                                            <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                                            <a href="#"><i class="fa fa-linkedin fa-lg"></i></a>
                                            <a href="#"><i class="fa fa-pinterest fa-lg"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="fpw-overlay-btm"></div>
                                <img src="{{ asset('welcome/images/team/1.jpg') }}" class="fp-image img-fluid"
                                    alt="">
                            </div>

                            <h4>Fynley Wilkinson</h4>
                            Chief Creative Officer
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6 mb30">
                        <div class="f-profile text-center">
                            <div class="fp-wrap f-invert">
                                <div class="fpw-overlay">
                                    <div class="fpwo-wrap">
                                        <div class="fpwow-icons">
                                            <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                                            <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                                            <a href="#"><i class="fa fa-linkedin fa-lg"></i></a>
                                            <a href="#"><i class="fa fa-pinterest fa-lg"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="fpw-overlay-btm"></div>
                                <img src="{{ asset('welcome/images/team/2.jpg') }}" class="fp-image img-fluid"
                                    alt="">
                            </div>

                            <h4>Peter Welsh</h4>
                            Chief Technology Officer
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6 mb30">
                        <div class="f-profile text-center">
                            <div class="fp-wrap f-invert">
                                <div class="fpw-overlay">
                                    <div class="fpwo-wrap">
                                        <div class="fpwow-icons">
                                            <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                                            <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                                            <a href="#"><i class="fa fa-linkedin fa-lg"></i></a>
                                            <a href="#"><i class="fa fa-pinterest fa-lg"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="fpw-overlay-btm"></div>
                                <img src="{{ asset('welcome/images/team/3.jpg') }}" class="fp-image img-fluid"
                                    alt="">
                            </div>

                            <h4>John Shepard</h4>
                            Chief Executive Officer
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6 mb30">
                        <div class="f-profile text-center">
                            <div class="fp-wrap f-invert">
                                <div class="fpw-overlay">
                                    <div class="fpwo-wrap">
                                        <div class="fpwow-icons">
                                            <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                                            <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                                            <a href="#"><i class="fa fa-linkedin fa-lg"></i></a>
                                            <a href="#"><i class="fa fa-pinterest fa-lg"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="fpw-overlay-btm"></div>
                                <img src="{{ asset('welcome/images/team/4.jpg') }}" class="fp-image img-fluid"
                                    alt="">
                            </div>

                            <h4>Robyn Peel</h4>
                            Director of Finance
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section aria-label="section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 offset-lg-3 text-center">
                        <h2>Features Highlights</h2>
                        <div class="spacer-20"></div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-lg-3">
                        <div class="box-icon s2 p-small mb20 wow fadeInRight" data-wow-delay=".5s">
                            <i class="fa bg-color fa-trophy"></i>
                            <div class="d-inner">
                                <h4>First class services</h4>
                                Offer multiple channels for customer support, including email, phone, and chat. Provide a
                                FAQ section to answer common questions.
                            </div>
                        </div>
                        <div class="box-icon s2 p-small mb20 wow fadeInL fadeInRight" data-wow-delay=".75s">
                            <i class="fa bg-color fa-road"></i>
                            <div class="d-inner">
                                <h4>Flexible rental terms</h4>
                                Offer short-term and long-term rental options to accommodate different travel needs.
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <img src="{{ asset('welcome/images/misc/car.png') }}" alt=""
                            class="img-fluid wow fadeInUp">
                    </div>

                    <div class="col-lg-3">
                        <div class="box-icon s2 d-invert p-small mb20 wow fadeInL fadeInLeft" data-wow-delay="1s">
                            <i class="fa bg-color fa-tag"></i>
                            <div class="d-inner">
                                <h4>Online booking</h4>
                                Allow customers to reserve their rental car online, with options to choose pickup and
                                drop-off locations, dates, and times.
                            </div>
                        </div>
                        <div class="box-icon s2 d-invert p-small mb20 wow fadeInL fadeInLeft" data-wow-delay="1.25s">
                            <i class="fa bg-color fa-map-pin"></i>
                            <div class="d-inner">
                                <h4>Roadside assistance</h4>
                                Provide customers with 24/7 roadside assistance in case of breakdowns, accidents, or other
                                emergencies.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row align-items-center">
                    <div class="wow fadeInRight">
                        <h2>We <span class="id-color">Open Roads Car Rental</span></h2>
                    </div>
                </div>

                <div class="row g-5">
                    <div class="col-lg-6 wow fadeInLeft">
                        <div class="wow fadeInRight">
                            <h3>The Company</h3>
                        </div>
                        We are a family based company that is based in South Iceland, been operating in the car rental
                        business for about 2 years time.we cater the trusted services to our valuable clients in iceland as
                        well as regional countries.and also we provides quick and safty service for the Convenient price to
                        our clients.
                        <br>
                        Planning a trip to Iceland is more complicated than to many other countries. With its stunning
                        volcanoes, lava fields, fjords, beaches and waterfall, there is no better way to do it than by
                        renting a car. Car rentals can sometimes be extremely complicated and full of hidden cost. Our
                        approach to business is simple. We provide top quality cars to suit both your requirement and your
                        budget. We will not charge you extra cost nor will we try to sell you anything you do not need. The
                        price you see is the price you will pay. We give you the best price compared to other rental
                        companies, and we look after you, every step of the way.
                    </div>
                    <div class="col-lg-6 wow fadeInLeft">
                        <div class="wow fadeInRight">
                            <h3>Why Choose Us</h3>
                        </div>
                        <ul>
                            <li>Choose Open roads car rental if you want to book directly through a supplier and not a
                                broker.</li>
                            <li>This will give you better flexibility in terms of vehicle choice.</li>
                            <li>Vehicle make and model will be confirmed and not ‘similar’ to those you selected.</li>
                            <li>You can directly negotiate some of the terms and conditions and the payment options.</li>
                            <li>Cancel at least 24 hours ahead of your reservation.</li>
                            <li>Free cancellation on all bookings.</li>
                            <li>Modify your booking at any time without any extra cost.</li>
                            <li>No deposits or credit / debit card details required.</li>
                            <li>You can reach us 24/7 directly, via Viber, WhatsApp or IMO.</li>
                        </ul>
                    </div>
                </div>

            </div>
        </section>

        <section id="section-call-to-action" class="bg-color-2 pt60 pb60 text-light">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <h2 class="s2">Our Rentaly customer care team is here to help you 24/7! Contact us for more
                            information or assistance with your rental needs.</h2>
                    </div>

                    <div class="col-lg-4 text-lg-center text-sm-center">
                        <div class="phone-num-big">
                            <i class="fa fa-phone"></i>
                            <span class="pnb-text">
                                Call Us Now
                            </span>
                            <span class="pnb-num">
                                00354 773 7904
                            </span>
                        </div>
                        <a href="{{ route('contact.index') }}" class="btn-main">Contact Us</a>
                    </div>
                </div>
            </div>
        </section>

    </div>
    <!-- content close -->

    <a href="#" id="back-to-top"></a>
@endsection
