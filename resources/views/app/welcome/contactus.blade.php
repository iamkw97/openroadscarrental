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
    Contact | Open Roads Car Rental in Iceland
@endsection

@section('meta_tgs')
    <meta name="keywords"
        content="Car rental contact, Car hire inquiry, Contact information, Get in touch, Customer support, Reservation assistance, Booking inquiries, Car rental quote, Contact form, Email contact, Phone contact, Office location, Customer service team, Feedback and suggestions, Assistance with rental, Rental terms and conditions, Car rental policies, Rental duration and availability, Modifications and cancellations">
@endsection

@section('welcomebody')
    <!-- content begin -->
    <div class="no-bottom no-top" id="content">
        <div id="top"></div>

        <!-- section begin -->
        <section id="subheader" class="jarallax text-light">
            <img src="{{ asset('welcome/images/background/back1.png') }}" class="jarallax-img" alt="openroadscarrental-welcome-background">
            <div class="center-y relative text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h1>Contact Us</h1>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section close -->


        <section aria-label="section">
            <div class="container">
                <div class="row g-custom-x">

                    <div class="col-lg-8 mb-sm-30">

                        <h3>Do you have any question?</h3>

                        <form name="contactForm" id="contact_form" class="form-border" method="post" action="#">
                            <div class="row">
                                <div class="col-md-4 mb10">
                                    <div class="field-set">
                                        <input type="text" name="Name" id="name" class="form-control"
                                            placeholder="Your Name" required>
                                    </div>
                                </div>
                                <div class="col-md-4 mb10">
                                    <div class="field-set">
                                        <input type="text" name="Email" id="email" class="form-control"
                                            placeholder="Your Email" required>
                                    </div>
                                </div>
                                <div class="col-md-4 mb10">
                                    <div class="field-set">
                                        <input type="text" name="phone" id="phone" class="form-control"
                                            placeholder="Your Phone" required>
                                    </div>
                                </div>
                            </div>

                            <div class="field-set mb20">
                                <textarea name="message" id="message" class="form-control" placeholder="Your Message" required></textarea>
                            </div>
                            <div class="g-recaptcha" data-sitekey="copy-your-site-key-here"></div>
                            <div id='submit' class="mt20">
                                <input type='submit' id='send_message' value='Send Message' class="btn-main">
                            </div>

                            <div id="success_message" class='success'>
                                Your message has been sent successfully. Refresh this page if you want to send more
                                messages.
                            </div>
                            <div id="error_message" class='error'>
                                Sorry there was an error sending your form.
                            </div>
                        </form>
                    </div>

                    <div class="col-lg-4">

                        <div class="de-box mb30">
                            <h4>Contact</h4>
                            <address class="s1">
                                <span><i class="id-color fa fa-map-marker fa-lg"></i>Hveragerdi, Iceland</span>
                                <span><i class="id-color fa fa-phone fa-lg"></i>00354 773 7904 / 00354 764 8773</span>
                                <span><i class="id-color fa fa-envelope-o fa-lg"></i><a
                                        href="mailto:openroadscarrental@gmail.com">openroadscarrental@gmail.com</a></span>
                            </address>
                        </div>


                        {{-- <div class="de-box mb30">
                        <h4>AU Office</h4>
                        <address class="s1">
                            <span><i class="fa fa-map-marker fa-lg"></i>100 Mainstreet Center, Sydney</span>
                            <span><i class="fa fa-phone fa-lg"></i>+61 333 9296</span>
                            <span><i class="fa fa-envelope-o fa-lg"></i><a href="mailto:contact@example.com">contact@example.com</a></span>
                            <span><i class="fa fa-file-pdf-o fa-lg"></i><a href="#">Download Brochure</a></span>
                        </address>
                    </div> --}}

                    </div>

                </div>
            </div>

        </section>

    </div>
    <!-- content close -->


@endsection
