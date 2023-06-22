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
    Destinations | Tours & Places in Iceland
@endsection

@section('meta_tgs')
    <meta name="keywords"
        content="Car rental Iceland, Car hire Iceland, Reykjavik, Blue Lagoon, Golden Circle, Seljalandsfoss, Skógafoss, Jökulsárlón Glacier Lagoon, Vik, Thingvellir National Park, Snaefellsnes Peninsula, Geysir, Gullfoss, Landmannalaugar, Myvatn, Dettifoss, Kirkjufell, Akureyri, Húsavík, Skaftafell, Vatnajökull National Park, Westfjords, Hiking in Iceland, Geysers in Iceland, Waterfalls in Iceland, Iceland attractions, Iceland tourism, Iceland travel, Explore Iceland, Must-visit places in Iceland, Iceland adventure, Iceland natural wonders">
@endsection

@section('welcomebody')
    <!-- content begin -->
    <div class="no-bottom no-top" id="content">
        <div id="top"></div>

        <!-- section begin -->
        <section id="subheader" class="jarallax text-light">
            <img src="{{ asset('welcome/images/background/back1.jpg') }}" class="jarallax-img"
                alt="openroadscarrental-welcome-background">
            <div class="center-y relative text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h1>Destinations</h1>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section close -->

        <!-- section begin -->
        <section aria-label="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="blog-read">
                            <img alt="" src="{{ asset('img/destinations/destination_golden_circle.webp') }}"
                                class="img-fullwidth mb30">
                            <div class="post-text">
                                <p style="text-align: justify;">
                                    Iceland is a land of natural wonders, from towering glaciers to geysers to black sand
                                    beaches. But one of the most popular tourist destinations in Iceland is the Golden
                                    Circle, a 300-kilometer (186-mile) loop that takes in three of the country's most iconic
                                    natural attractions: Þingvellir National Park, Gullfoss waterfall, and Geysir geothermal
                                    area.
                                </p>
                                <p style="text-align: justify;">
                                    Þingvellir National Park is a UNESCO World Heritage Site and is home to the Alþingi, the
                                    world's oldest parliament. The park is also a geological wonder, as it sits on the
                                    Mid-Atlantic Ridge, where the North American and Eurasian tectonic plates are slowly
                                    moving apart.
                                    Gullfoss waterfall is one of the most powerful waterfalls in Iceland, with a drop of 32
                                    meters (105 feet). The waterfall is located on the Hvítá River, which flows from
                                    Langjökull glacier.
                                    Geysir geothermal area is home to Strokkur, one of the most active geysers in the world.
                                    Strokkur erupts every 5-10 minutes, shooting a column of boiling water up to 70 meters
                                    (230 feet) into the air.
                                </p>
                                <p style="text-align: justify;">
                                    The Golden Circle is a great way to experience the best of Iceland in a single day. The
                                    loop can be easily driven by car, and there are plenty of opportunities to stop and take
                                    in the scenery. If you're looking for an action-packed day of sightseeing, the Golden
                                    Circle is definitely worth considering.
                                </p>
                            </div>
                        </div>

                        <div class="spacer-single"></div>
                    </div>

                    <div id="sidebar" class="col-md-4">
                        <div class="widget">
                            <h4>Share With Friends</h4>
                            <div class="small-border"></div>
                            <div class="de-color-icons">
                                <span><i class="fa fa-twitter fa-lg"></i></span>
                                <span><i class="fa fa-facebook fa-lg"></i></span>
                                <span><i class="fa fa-reddit fa-lg"></i></span>
                                <span><i class="fa fa-linkedin fa-lg"></i></span>
                                <span><i class="fa fa-pinterest fa-lg"></i></span>
                                <span><i class="fa fa-stumbleupon fa-lg"></i></span>
                                <span><i class="fa fa-delicious fa-lg"></i></span>
                                <span><i class="fa fa-envelope fa-lg"></i></span>
                            </div>
                        </div>

                        <div class="widget widget_tags">
                            <h4>Tags</h4>
                            <div class="small-border"></div>
                            <ul>
                                <li><a href="#">Golden Circle</a></li>
                                <li><a href="#">Iceland</a></li>
                                <li><a href="#">Travel</a></li>
                                <li><a href="#">Tourism</a></li>
                                <li><a href="#">Þingvellir National Park</a></li>
                                <li><a href="#">Gullfoss waterfall</a></li>
                                <li><a href="#">Geysir geothermal area</a></li>
                            </ul>
                        </div>

                        <div class="widget widget-text">
                            <h4>About Us</h4>
                            <div class="small-border"></div>
                            <p style="text-align: justify;" class="small no-bottom">
                                We are a family based company that is based in South Iceland, been operating in the car
                                rental business for about 2 years time.we cater the trusted services to our valuable clients
                                in iceland as well as regional countries.and also we provides quick and safty service for
                                the Convenient price to our clients.
                                Planning a trip to Iceland is more complicated than to many other countries. With its
                                stunning volcanoes, lava fields, fjords, beaches and waterfall, there is no better way to do
                                it than by renting a car. Car rentals can sometimes be extremely complicated and full of
                                hidden cost. Our approach to business is simple. We provide top quality cars to suit both
                                your requirement and your budget. We will not charge you extra cost nor will we try to sell
                                you anything you do not need. The price you see is the price you will pay. We give you the
                                best price compared to other rental companies, and we look after you, every step of the way.
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- content close -->
@endsection
