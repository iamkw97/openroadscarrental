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
    Blog | Tours & Places in Iceland
@endsection

@section('meta_tgs')
    <meta name="keywords"
        content="Car rental Iceland, Car hire Iceland, Reykjavik, Blue Lagoon, Golden Circle, Seljalandsfoss, Skógafoss, Jökulsárlón Glacier Lagoon, Vik, Thingvellir National Park, Snaefellsnes Peninsula, Geysir, Gullfoss, Landmannalaugar, Myvatn, Dettifoss, Kirkjufell, Akureyri, Húsavík, Skaftafell, Vatnajökull National Park, Westfjords, Hiking in Iceland, Geysers in Iceland, Waterfalls in Iceland, Iceland attractions, Iceland tourism, Iceland travel, Explore Iceland, Must-visit places in Iceland, Iceland adventure, Iceland natural wonders">
@endsection

@section('welcomebody')
    <div class="no-bottom no-top" id="content">
        <div id="top"></div>
        <!-- section begin -->
        <section id="subheader" class="jarallax text-light">
            <img src="images/background/subheader.jpg" class="jarallax-img" alt="">
            <div class="center-y relative text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h1>News &amp; Updates</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section close -->

        <section id="section-hero" aria-label="section">
            <div class="container">
                <div class="row gx-5">
                    <div class="col-lg-8">
                        <div class="row">

                            <div class="col-lg-6 mb20">
                                <div class="bloglist s2 item">
                                    <div class="post-content">
                                        <div class="post-image">
                                            <div class="date-box">
                                                <div class="m">20</div>
                                                <div class="d">MAR</div>
                                            </div>
                                            <img alt="" src="images/news/pic-blog-1.jpg" class="lazy">
                                        </div>
                                        <div class="post-text">
                                            <h4><a href="news-single.html">Enjoy Best Travel Experience<span></span></a>
                                            </h4>
                                            <p>Dolore officia sint incididunt non excepteur ea mollit commodo ut enim
                                                reprehenderit cupidatat labore ad laborum consectetur.</p>
                                            <a class="btn-main" href="news-single.html">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 mb20">
                                <div class="bloglist s2 item">
                                    <div class="post-content">
                                        <div class="post-image">
                                            <div class="date-box">
                                                <div class="m">19</div>
                                                <div class="d">MAR</div>
                                            </div>
                                            <img alt="" src="images/news/pic-blog-2.jpg" class="lazy">
                                        </div>
                                        <div class="post-text">
                                            <h4><a href="news-single.html">The Future of Car Rent<span></span></a></h4>
                                            <p>Dolore officia sint incididunt non excepteur ea mollit commodo ut enim
                                                reprehenderit cupidatat labore ad laborum consectetur.</p>
                                            <a class="btn-main" href="news-single.html">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 mb20">
                                <div class="bloglist s2 item">
                                    <div class="post-content">
                                        <div class="post-image">
                                            <div class="date-box">
                                                <div class="m">18</div>
                                                <div class="d">MAR</div>
                                            </div>
                                            <img alt="" src="images/news/pic-blog-3.jpg" class="lazy">
                                        </div>
                                        <div class="post-text">
                                            <h4><a href="news-single.html">Holiday Tips For Backpacker<span></span></a></h4>
                                            <p>Dolore officia sint incididunt non excepteur ea mollit commodo ut enim
                                                reprehenderit cupidatat labore ad laborum consectetur.</p>
                                            <a class="btn-main" href="news-single.html">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 mb20">
                                <div class="bloglist s2 item">
                                    <div class="post-content">
                                        <div class="post-image">
                                            <div class="date-box">
                                                <div class="m">17</div>
                                                <div class="d">MAR</div>
                                            </div>
                                            <img alt="" src="images/news/pic-blog-4.jpg" class="lazy">
                                        </div>
                                        <div class="post-text">
                                            <h4><a href="news-single.html">Travel Destination For Couple<span></span></a>
                                            </h4>
                                            <p>Dolore officia sint incididunt non excepteur ea mollit commodo ut enim
                                                reprehenderit cupidatat labore ad laborum consectetur.</p>
                                            <a class="btn-main" href="news-single.html">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 mb20">
                                <div class="bloglist s2 item">
                                    <div class="post-content">
                                        <div class="post-image">
                                            <div class="date-box">
                                                <div class="m">16</div>
                                                <div class="d">MAR</div>
                                            </div>
                                            <img alt="" src="images/news/pic-blog-5.jpg" class="lazy">
                                        </div>
                                        <div class="post-text">
                                            <h4><a href="news-single.html">The Essential Guide to Hotel<span></span></a>
                                            </h4>
                                            <p>Dolore officia sint incididunt non excepteur ea mollit commodo ut enim
                                                reprehenderit cupidatat labore ad laborum consectetur.</p>
                                            <a class="btn-main" href="news-single.html">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 mb20">
                                <div class="bloglist s2 item">
                                    <div class="post-content">
                                        <div class="post-image">
                                            <div class="date-box">
                                                <div class="m">15</div>
                                                <div class="d">MAR</div>
                                            </div>
                                            <img alt="" src="images/news/pic-blog-6.jpg" class="lazy">
                                        </div>
                                        <div class="post-text">
                                            <h4><a href="news-single.html">Travel on a Budget<span></span></a></h4>
                                            <p>Dolore officia sint incididunt non excepteur ea mollit commodo ut enim
                                                reprehenderit cupidatat labore ad laborum consectetur.</p>
                                            <a class="btn-main" href="news-single.html">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="spacer-single"></div>

                            <div class="col-md-12">
                                <ul class="pagination">
                                    <li><a href="#">Prev</a></li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li><a href="#">Next</a></li>
                                </ul>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="widget widget-post">
                            <h4>Recent Posts</h4>
                            <div class="small-border"></div>
                            <ul class="de-bloglist-type-1">
                                <li>
                                    <div class="d-image">
                                        <img src="images/news-thumbnail/pic-blog-1.jpg" alt="">
                                    </div>
                                    <div class="d-content">
                                        <a href="#">
                                            <h4>Enjoy Best Travel Experience</h4>
                                        </a>
                                        <div class="d-date">June 15, 2022</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-image">
                                        <img src="images/news-thumbnail/pic-blog-2.jpg" alt="">
                                    </div>
                                    <div class="d-content">
                                        <a href="#">
                                            <h4>The Future of Car Rent</h4>
                                        </a>
                                        <div class="d-date">June 15, 2022</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-image">
                                        <img src="images/news-thumbnail/pic-blog-3.jpg" alt="">
                                    </div>
                                    <div class="d-content">
                                        <a href="#">
                                            <h4>Holiday Tips For Backpacker</h4>
                                        </a>
                                        <div class="d-date">June 15, 2022</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-image">
                                        <img src="images/news-thumbnail/pic-blog-4.jpg" alt="">
                                    </div>
                                    <div class="d-content">
                                        <a href="#">
                                            <h4>Travel Destination For Couple</h4>
                                        </a>
                                        <div class="d-date">June 15, 2022</div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="widget widget_tags">
                            <h4>Popular Tags</h4>
                            <div class="small-border"></div>
                            <ul>
                                <li><a href="#link">accommodation</a></li>
                                <li><a href="#link">holiday</a></li>
                                <li><a href="#link">hostel</a></li>
                                <li><a href="#link">hotel</a></li>
                                <li><a href="#link">travel</a></li>
                                <li><a href="#link">inn</a></li>
                                <li><a href="#link">lodge</a></li>
                                <li><a href="#link">motel</a></li>
                                <li><a href="#link">resort</a></li>
                                <li><a href="#link">travel</a></li>
                                <li><a href="#link">tourism</a></li>
                                <li><a href="#link">vacation</a></li>
                            </ul>
                        </div>

                        <div class="widget">
                            <h4>Testimonials</h4>
                            <div class="small-border"></div>
                            <div class="owl-carousel owl-theme" id="testimonial-carousel-1-col">
                                <div class="item">
                                    <div class="de_testi type-2">
                                        <blockquote>
                                            <h4>Excellent Service!</h4>
                                            <p>Great support, like i have never seen before. Thanks to the support team,
                                                they are very helpfull. This company provide customers great solution, that
                                                makes them best.
                                            </p>
                                            <div class="de_testi_by">
                                                <img alt="" class="rounded-circle" src="images/people/1.jpg">
                                                <span>John, Pixar Studio</span>
                                            </div>
                                        </blockquote>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="de_testi type-2">
                                        <blockquote>
                                            <h4>Excellent Service!</h4>
                                            <p>Great support, like i have never seen before. Thanks to the support team,
                                                they are very helpfull. This company provide customers great solution, that
                                                makes them best.</p>
                                            <div class="de_testi_by">
                                                <img alt="" class="rounded-circle" src="images/people/2.jpg">
                                                <span>Sarah, Microsoft</span>
                                            </div>
                                        </blockquote>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="de_testi type-2">
                                        <blockquote>
                                            <h4>Excellent Service!</h4>
                                            <p>Great support, like i have never seen before. Thanks to the support team,
                                                they are very helpfull. This company provide customers great solution, that
                                                makes them best.</p>
                                            <div class="de_testi_by">
                                                <img alt="" class="rounded-circle" src="images/people/3.jpg">
                                                <span>Michael, Apple</span>
                                            </div>
                                        </blockquote>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="de_testi type-2">
                                        <blockquote>
                                            <h4>Excellent Service!</h4>
                                            <p>Great support, like i have never seen before. Thanks to the support team,
                                                they are very helpfull. This company provide customers great solution, that
                                                makes them best.</p>
                                            <div class="de_testi_by">
                                                <img alt="" class="rounded-circle" src="images/people/4.jpg">
                                                <span>Thomas, Samsung</span>
                                            </div>
                                        </blockquote>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="de_testi type-2">
                                        <blockquote>
                                            <h4>Excellent Service!</h4>
                                            <p>Great support, like i have never seen before. Thanks to the support team,
                                                they are very helpfull. This company provide customers great solution, that
                                                makes them best.</p>
                                            <div class="de_testi_by">
                                                <img alt="" class="rounded-circle" src="images/people/1.jpg">
                                                <span>John, Pixar Studio</span>
                                            </div>
                                        </blockquote>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="de_testi type-2">
                                        <blockquote>
                                            <h4>Excellent Service!</h4>
                                            <p>Great support, like i have never seen before. Thanks to the support team,
                                                they are very helpfull. This company provide customers great solution, that
                                                makes them best.</p>
                                            <div class="de_testi_by">
                                                <img alt="" class="rounded-circle" src="images/people/2.jpg">
                                                <span>Sarah, Microsoft</span>
                                            </div>
                                        </blockquote>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="de_testi type-2">
                                        <blockquote>
                                            <h4>Excellent Service!</h4>
                                            <p>Great support, like i have never seen before. Thanks to the support team,
                                                they are very helpfull. This company provide customers great solution, that
                                                makes them best.</p>
                                            <div class="de_testi_by">
                                                <img alt="" class="rounded-circle" src="images/people/3.jpg">
                                                <span>Michael, Apple</span>
                                            </div>
                                        </blockquote>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="de_testi type-2">
                                        <blockquote>
                                            <h4>Excellent Service!</h4>
                                            <p>Great support, like i have never seen before. Thanks to the support team,
                                                they are very helpfull. This company provide customers great solution, that
                                                makes them best.</p>
                                            <div class="de_testi_by">
                                                <img alt="" class="rounded-circle" src="images/people/4.jpg">
                                                <span>Thomas, Samsung</span>
                                            </div>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- content close -->
@endsection
