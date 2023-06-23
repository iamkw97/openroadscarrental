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
        <section id="section-hero" aria-label="section">
            <div class="container">
                <div class="row gx-5">
                    <div class="col-lg-4">
                        <div class="widget widget-post">
                            <h4>Destinations</h4>
                            <div class="small-border"></div>
                            <p style="text-align: justify;">
                                Discover the allure of Iceland as you explore its most famous and captivating destinations.
                                Begin in Reykjavik, a vibrant city blending modernity and Icelandic traditions. Experience
                                the iconic Golden Circle, featuring Thingvellir National Park's tectonic plates, Geysir's
                                erupting geysers, and the powerful Gullfoss waterfall. Relax in the mineral-rich Blue
                                Lagoon, nestled in a lava field. Venture to Vatnajökull National Park for glacier
                                adventures, and witness the ethereal Jökulsárlón Glacier Lagoon and Diamond Beach. Chase the
                                enchanting Northern Lights and indulge in Landmannalaugar's geothermal paradise. Lastly,
                                explore the diverse Snaefellsnes Peninsula with its black sand beaches and mystical
                                Snaefellsjökull volcano. Iceland awaits, offering untouched beauty and unforgettable
                                experiences.
                            </p>
                        </div>

                        <div class="widget widget_tags">
                            <h4>Popular Tags</h4>
                            <div class="small-border"></div>
                            <ul>
                                <li><a href="#">accommodation</a></li>
                                <li><a href="#">travel</a></li>
                                <li><a href="#">iceland</a></li>
                                <li><a href="#">nature</a></li>
                                <li><a href="#">travelphotography</a></li>
                                <li><a href="#">reykjavik</a></li>
                                <li><a href="#">bluelagoon</a></li>
                                <li><a href="#">jokulsarlon</a></li>
                                <li><a href="#">gullfoss</a></li>
                                <li><a href="#">thingvellir</a></li>
                                <li><a href="#">geysir</a></li>
                                <li><a href="#">snaefellsnes</a></li>
                                <li><a href="#">vatnajokull</a></li>
                                <li><a href="#">northernlights</a></li>
                                <li><a href="#">ringroad</a></li>
                                <li><a href="#">waterfalls</a></li>
                                <li><a href="#">glacier</a></li>
                                <li><a href="#">hotsprings</a></li>
                                <li><a href="#">hiking</a></li>
                                <li><a href="#">volcano</a></li>
                                <li><a href="#">adventure</a></li>
                            </ul>
                        </div>

                        <div class="widget">
                            <h4>Testimonials</h4>
                            <div class="small-border"></div>
                            <div class="owl-carousel owl-theme" id="testimonial-carousel-1-col">
                                <div class="item">
                                    <div class="de_testi type-2">
                                        <blockquote>
                                            <p>
                                                ประทับใจการเช่ารถกับ Open Roads car rental รถใหม่สะอาด ราคาเช่าถูกกว่าหลายๆ
                                                ที่ที่เคยสอบถาม ให้คำแนะนำข้อมูลการขับรถในไอซ์แลนด์ คืนรถง่ายสะดวก
                                                ไม่มีค่าใช้จ่ายแอบแฝง
                                                ⭐⭐⭐⭐⭐.
                                            </p>
                                            <div class="de_testi_by">
                                                <span>- Phanidaporn Jaisaen</span>
                                            </div>
                                        </blockquote>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="de_testi type-2">
                                        <blockquote>
                                            <p style="text-align: justify;">
                                                I highly recommend this company. The pick up process was very efficient (it
                                                only took
                                                around 15 mins or less); they were waiting for us at the airport on time.
                                                Car was in good condition. We took the Toyota rav4 AWD, which was an
                                                excellent option...
                                            </p>
                                            <div class="de_testi_by">
                                                <span>- Flavio Rodriguez</span>
                                            </div>
                                        </blockquote>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="de_testi type-2">
                                        <blockquote>
                                            <p style="text-align: justify;">
                                                We picked Open Roads Car Rental after comparing their service against some
                                                of the larger providers. We were a little unsure but I am so glad we did.
                                                The personal
                                                service offered
                                                by the team was excellent. No hidden charges or longs waits to collect your
                                                car...
                                            </p>
                                            <div class="de_testi_by">
                                                <span>- Kam Bains</span>
                                            </div>
                                        </blockquote>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="de_testi type-2">
                                        <blockquote>
                                            <p style="text-align: justify;">
                                                Highly recommended. Good service and a nice car, good communication and
                                                handling. 👍
                                            </p>
                                            <div class="de_testi_by">
                                                <span>- Tryggve Kainert</span>
                                            </div>
                                        </blockquote>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="de_testi type-2">
                                        <blockquote>
                                            <p style="text-align: justify;">
                                                I highly recommend this company. Good car for good price. Unlimited mileage,
                                                no deposit,
                                                no hidden fees, fuel discount prices, full insurance plus Wi-fi. Definitely
                                                will use
                                                them next time 👍
                                            </p>
                                            <div class="de_testi_by">
                                                <span>- Tomas Richter</span>
                                            </div>
                                        </blockquote>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="de_testi type-2">
                                        <blockquote>
                                            <p style="text-align: justify;">
                                                I had a good trip in Iceland and was glad to have this car, a new Honda
                                                CR-V, everything
                                                was clear and went well, also good price/quality!
                                            </p>
                                            <div class="de_testi_by">
                                                <span>- Jim Verschooten</span>
                                            </div>
                                        </blockquote>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="de_testi type-2">
                                        <blockquote>
                                            <p style="text-align: justify;">
                                                Rented a car off these guys , arrived in airport, guy waiting with name
                                                board , took us
                                                too car , handed over the money , no hassle , great car , we got snowed in
                                                outside of
                                                Reykjavik, had too cancel flights home , text these guys , needed the car
                                                for 2 more
                                                days , no problem, carry on .
                                                Very good service, no hassle , top marks.
                                                we will be using them again.
                                            </p>
                                            <div class="de_testi_by">
                                                <span>- Ken Fitzgerald</span>
                                            </div>
                                        </blockquote>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="de_testi type-2">
                                        <blockquote>
                                            <p style="text-align: justify;">
                                                Two weeks ago I rented a car with Open Roads Car rental. I would recommend
                                                it to
                                                everyone!! They answer very fast and clear on the socials and are open to
                                                help. When we
                                                arrived in Iceland the car was there! We had a nice car, drove very good and
                                                I felt...
                                            </p>
                                            <div class="de_testi_by">
                                                <span>- Sara Piantanida</span>
                                            </div>
                                        </blockquote>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="de_testi type-2">
                                        <blockquote>
                                            <p style="text-align: justify;">
                                                Really satisfied with their service and cars! Easy to communicate with and
                                                very
                                                understandable! I highly recommend! We had the Toyota Rav4, quite new with
                                                all extras.
                                                The car was really clean and well maintained! We had no issues!
                                            </p>
                                            <div class="de_testi_by">
                                                <span>- Diana Kovacheva</span>
                                            </div>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-8">
                        <div class="row">

                            <div class="col-lg-6 mb20">
                                <div class="bloglist s2 item">
                                    <div class="post-content">
                                        <div class="post-image">
                                            {{-- <div class="date-box">
                                                <div class="m">20</div>
                                                <div class="d">MAR</div>
                                            </div> --}}
                                            <img alt=""
                                                src="{{ asset('img/destinations/destination_golden_circle.webp') }}"
                                                class="lazy">
                                        </div>
                                        <div class="post-text">
                                            <h4>
                                                <a href="/destinations/1/view">
                                                    Golden Circle
                                                    <span style="font-weight: 300;">: A Must-Visit for Any Iceland
                                                        Traveler</span></a>
                                            </h4>
                                            <p style="text-align: justify;">
                                                Iceland is a land of natural wonders, from towering glaciers to geysers to
                                                black sand beaches. But one of the...
                                            </p>
                                            <a class="btn-main" href="/destinations/1/view">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb20">
                                <div class="bloglist s2 item">
                                    <div class="post-content">
                                        <div class="post-image">
                                            {{-- <div class="date-box">
                                                <div class="m">20</div>
                                                <div class="d">MAR</div>
                                            </div> --}}
                                            <img alt=""
                                                src="{{ asset('img/destinations/destination_jökulsárlón_glacier_lagoon.webp') }}"
                                                class="lazy">
                                        </div>
                                        <div class="post-text">
                                            <h4>
                                                <a href="/destinations/2/view">
                                                    Jökulsárlón Glacier Lagoon
                                                    <span style="font-weight: 300;">: A Natural Wonder in
                                                        Iceland</span></a>
                                            </h4>
                                            <p style="text-align: justify;">
                                                Jökulsárlón glacier lagoon is one of Iceland's most popular tourist
                                                destinations. Located in the...
                                            </p>
                                            <a class="btn-main" href="/destinations/2/view">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb20">
                                <div class="bloglist s2 item">
                                    <div class="post-content">
                                        <div class="post-image">
                                            {{-- <div class="date-box">
                                                <div class="m">20</div>
                                                <div class="d">MAR</div>
                                            </div> --}}
                                            <img alt=""
                                                src="{{ asset('img/destinations/destination_skógafoss.webp') }}"
                                                class="lazy">
                                        </div>
                                        <div class="post-text">
                                            <h4>
                                                <a href="/destinations/3/view">
                                                    Skógafoss
                                                    <span style="font-weight: 300;">: Iceland's Majestic Waterfall
                                                    </span></a>
                                            </h4>
                                            <p style="text-align: justify;">
                                                Skógafoss is one of Iceland's most popular waterfalls, and for good reason.
                                                The waterfall is 60 meters...
                                            </p>
                                            <a class="btn-main" href="/destinations/3/view">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb20">
                                <div class="bloglist s2 item">
                                    <div class="post-content">
                                        <div class="post-image">
                                            {{-- <div class="date-box">
                                                <div class="m">20</div>
                                                <div class="d">MAR</div>
                                            </div> --}}
                                            <img alt=""
                                                src="{{ asset('img/destinations/destination_reynisdrangar_sea_stacks.webp') }}"
                                                class="lazy">
                                        </div>
                                        <div class="post-text">
                                            <h4>
                                                <a href="/destinations/4/view">
                                                    Reynisdrangar Sea Stacks
                                                    <span style="font-weight: 300;">: Iceland's Mysterious and Photogenic
                                                        Rock Formations</span></a>
                                            </h4>
                                            <p style="text-align: justify;">
                                                The Reynisdrangar sea stacks are a group of three basalt rock pillars that
                                                rise out of the Atlantic...
                                            </p>
                                            <a class="btn-main" href="/destinations/4/view">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb20">
                                <div class="bloglist s2 item">
                                    <div class="post-content">
                                        <div class="post-image">
                                            {{-- <div class="date-box">
                                                <div class="m">20</div>
                                                <div class="d">MAR</div>
                                            </div> --}}
                                            <img alt=""
                                                src="{{ asset('img/destinations/destination_blue_lagoon.webp') }}"
                                                class="lazy">
                                        </div>
                                        <div class="post-text">
                                            <h4>
                                                <a href="/destinations/5/view">
                                                    The Blue Lagoon
                                                    <span style="font-weight: 300;">: Iceland's Iconic Geothermal
                                                        Spa</span></a>
                                            </h4>
                                            <p style="text-align: justify;">
                                                The Blue Lagoon is a geothermal spa located in a lava field in southwest
                                                Iceland. The lagoon is fed...
                                            </p>
                                            <a class="btn-main" href="/destinations/5/view">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb20">
                                <div class="bloglist s2 item">
                                    <div class="post-content">
                                        <div class="post-image">
                                            {{-- <div class="date-box">
                                                <div class="m">20</div>
                                                <div class="d">MAR</div>
                                            </div> --}}
                                            <img alt=""
                                                src="{{ asset('img/destinations/destination_reykjavík.webp') }}"
                                                class="lazy">
                                        </div>
                                        <div class="post-text">
                                            <h4>
                                                <a href="/destinations/6/view">
                                                    Reykjavík
                                                    <span style="font-weight: 300;">: The Capital of Iceland</span></a>
                                            </h4>
                                            <p style="text-align: justify;">
                                                Reykjavík is the capital of Iceland and the most populous city in the
                                                country. It is located...
                                            </p>
                                            <a class="btn-main" href="/destinations/6/view">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb20">
                                <div class="bloglist s2 item">
                                    <div class="post-content">
                                        <div class="post-image">
                                            {{-- <div class="date-box">
                                                <div class="m">20</div>
                                                <div class="d">MAR</div>
                                            </div> --}}
                                            <img alt=""
                                                src="{{ asset('img/destinations/destination_westfjords.webp') }}"
                                                class="lazy">
                                        </div>
                                        <div class="post-text">
                                            <h4>
                                                <a href="/destinations/9/view">
                                                    Westfjords
                                                    <span style="font-weight: 300;">: A Land of Untamed Beauty</span></a>
                                            </h4>
                                            <p style="text-align: justify;">
                                                The Westfjords of Iceland are a remote and rugged region, located on the
                                                country's northwestern coast...
                                            </p>
                                            <a class="btn-main" href="/destinations/9/view">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb20">
                                <div class="bloglist s2 item">
                                    <div class="post-content">
                                        <div class="post-image">
                                            {{-- <div class="date-box">
                                                <div class="m">20</div>
                                                <div class="d">MAR</div>
                                            </div> --}}
                                            <img alt=""
                                                src="{{ asset('img/destinations/destination_Þingvellir.webp') }}"
                                                class="lazy">
                                        </div>
                                        <div class="post-text">
                                            <h4>
                                                <a href="/destinations/7/view">
                                                    Þingvellir National Park
                                                    <span style="font-weight: 300;">: Iceland's Historical and Natural
                                                        Gem</span></a>
                                            </h4>
                                            <p style="text-align: justify;">
                                                Þingvellir National Park is a UNESCO World Heritage Site located in
                                                southwest Iceland. The...
                                            </p>
                                            <a class="btn-main" href="/destinations/7/view">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb20">
                                <div class="bloglist s2 item">
                                    <div class="post-content">
                                        <div class="post-image">
                                            {{-- <div class="date-box">
                                                <div class="m">20</div>
                                                <div class="d">MAR</div>
                                            </div> --}}
                                            <img alt=""
                                                src="{{ asset('img/destinations/destination_vatnajökull .webp') }}"
                                                class="lazy">
                                        </div>
                                        <div class="post-text">
                                            <h4>
                                                <a href="/destinations/8/view">
                                                    Vatnajökull National Park
                                                    <span style="font-weight: 300;">: Iceland's Largest National
                                                        Park</span></a>
                                            </h4>
                                            <p style="text-align: justify;">
                                                Vatnajökull National Park is the largest national park in Iceland, and it is
                                                home to some of the most...
                                            </p>
                                            <a class="btn-main" href="/destinations/8/view">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb20">
                                <div class="bloglist s2 item">
                                    <div class="post-content">
                                        <div class="post-image">
                                            {{-- <div class="date-box">
                                                <div class="m">20</div>
                                                <div class="d">MAR</div>
                                            </div> --}}
                                            <img alt=""
                                                src="{{ asset('img/destinations/destination_akureyri.webp') }}"
                                                class="lazy">
                                        </div>
                                        <div class="post-text">
                                            <h4>
                                                <a href="/destinations/10/view">
                                                    Akureyri
                                                    <span style="font-weight: 300;">: The Capital of the North</span></a>
                                            </h4>
                                            <p style="text-align: justify;">
                                                Akureyri is the second-largest city in Iceland, located in the north of the
                                                country. The city is known for...
                                            </p>
                                            <a class="btn-main" href="/destinations/10/view">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb20">
                                <div class="bloglist s2 item">
                                    <div class="post-content">
                                        <div class="post-image">
                                            {{-- <div class="date-box">
                                                <div class="m">20</div>
                                                <div class="d">MAR</div>
                                            </div> --}}
                                            <img alt=""
                                                src="{{ asset('img/destinations/destination_seljalandsfoss.webp') }}"
                                                class="lazy">
                                        </div>
                                        <div class="post-text">
                                            <h4>
                                                <a href="/destinations/11/view">
                                                    Seljalandsfoss
                                                    <span style="font-weight: 300;">: Iceland's Hidden Waterfall</span></a>
                                            </h4>
                                            <p style="text-align: justify;">
                                                Seljalandsfoss is one of Iceland's most popular waterfalls, and for good
                                                reason. The waterfall is 60...
                                            </p>
                                            <a class="btn-main" href="/destinations/11/view">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="spacer-single"></div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>
    <!-- content close -->
@endsection
