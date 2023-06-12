@extends('app.welcome.layout.app')

@section('title')
    Destinations | Tours & Places in Iceland
@endsection

@section('meta_desc')
    <meta name="keywords"
        content="Car rental Iceland, Car hire Iceland, Reykjavik, Blue Lagoon, Golden Circle, Seljalandsfoss, Skógafoss, Jökulsárlón Glacier Lagoon, Vik, Thingvellir National Park, Snaefellsnes Peninsula, Geysir, Gullfoss, Landmannalaugar, Myvatn, Dettifoss, Kirkjufell, Akureyri, Húsavík, Skaftafell, Vatnajökull National Park, Westfjords, Hiking in Iceland, Geysers in Iceland, Waterfalls in Iceland, Iceland attractions, Iceland tourism, Iceland travel, Explore Iceland, Must-visit places in Iceland, Iceland adventure, Iceland natural wonders">
@endsection

@section('welcomebody')
    <!-- content begin -->
    <div class="no-bottom no-top" id="content">
        <div id="top"></div>

        <!-- section begin -->
        <section id="subheader" class="jarallax text-light">
            <img src="{{ asset('welcome/images/background/back1.jpg') }}" class="jarallax-img" alt="openroadscarrental-welcome-background">
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
                    <div class="widget widget-text">
                        <p class="small no-bottom">Iceland: A land of dramatic landscapes, geothermal wonders, and
                            captivating culture. From cascading waterfalls to black sand beaches, the country's natural
                            beauty is awe-inspiring. Explore glaciers, soak in geothermal hot springs, and witness the
                            mesmerizing Northern Lights. Immerse yourself in Reykjavik's vibrant arts scene, indulge in
                            delicious cuisine, and delve into Icelandic folklore.
                        </p>
                    </div>
                    <div id="sidebar" class="col-md-12">
                        <div class="widget widget-post">
                            <h4>Top Destinations</h4>
                            <div class="small-border"></div>
                            <ul class="de-bloglist-type-1 row">
                                <li class="col-3">
                                    <div class="d-image">
                                        <img style="width: 100%; height:40px; object-fit:fit;"
                                            src="{{ asset('img/destinations/blue_lagoon.jpg') }}" alt="openroadscarrental-destination-blue lagoon">
                                    </div>
                                    <div class="d-content">
                                        <a href="#blue_lagoon">
                                            <h4>The Blue Lagoon</h4>
                                        </a>
                                    </div>
                                </li>
                                <li class="col-3">
                                    <div class="d-image">
                                        <img src="{{ asset('img/destinations/vik.jpg') }}" alt="openroadscarrental-destination-vik">
                                    </div>
                                    <div class="d-content">
                                        <a href="#vik">
                                            <h4>Vík</h4>
                                        </a>
                                    </div>
                                </li>
                                <li class="col-3">
                                    <div class="d-image">
                                        <img src="{{ asset('img/destinations/kirkjufell.jpg') }}" alt="openroadscarrental-destination-kirkjufell">
                                    </div>
                                    <div class="d-content">
                                        <a href="#kirkjufell">
                                            <h4>Mt. Kirkjufell</h4>
                                        </a>
                                    </div>
                                </li>
                                <li class="col-3">
                                    <div class="d-image">
                                        <img src="{{ asset('img/destinations/akureyri.jpg') }}" alt="openroadscarrental-destination-akureyri">
                                    </div>
                                    <div class="d-content">
                                        <a href="#akureyri">
                                            <h4>Akureyri</h4>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <hr />
                </div>
                {{-- first post --}}
                <div class="row">
                    <div id="sidebar" class="col-md-5">
                        <div class="widget widget-post">
                            <h4 id="blue_lagoon">The Blue Lagoon</h4>
                            <div class="small-border"></div>
                            <div class="post-text">
                                <p>The Blue Lagoon in Iceland has captivated travelers from around the world, drawing them
                                    in with its irresistible allure. It is a natural wonder that showcases the incredible
                                    power and beauty of Iceland's geothermal activity. The juxtaposition of the vibrant blue
                                    waters against the stark volcanic landscape creates a visual spectacle that is simply
                                    mesmerizing.
                                </p>
                                <p>
                                    One of the main attractions of the Blue Lagoon is its ability to provide relaxation and
                                    rejuvenation. The lagoon's warm, mineral-rich waters offer a unique and soothing bathing
                                    experience. Visitors can immerse themselves in the therapeutic waters, allowing the
                                    natural elements to rejuvenate their body and mind. It is a place where one can truly
                                    unwind and let go of everyday stresses.

                                    In addition to relaxation, the Blue Lagoon is known for its skin benefits. The mineral
                                    content of the lagoon's waters, particularly the silica, has been lauded for its
                                    positive effects on the skin. Many visitors indulge in the lagoon's famous silica mud
                                    masks, which help cleanse and exfoliate the skin, leaving it feeling revitalized and
                                    refreshed.
                                </p>
                                <p>
                                    Beyond the physical attributes, the Blue Lagoon offers a truly immersive and enchanting
                                    experience. The setting amidst the volcanic landscape and the steam rising from the warm
                                    waters create an otherworldly ambiance. Whether visiting during the long summer days or
                                    the magical winter months, the Blue Lagoon provides an unforgettable encounter with the
                                    raw power of nature.

                                    Overall, the Blue Lagoon in Iceland has become a must-visit attraction, capturing the
                                    hearts and imaginations of travelers worldwide. Its unique combination of natural
                                    beauty, relaxation, and skin benefits make it an unparalleled haven of bliss.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="blog-read">
                            <img alt="openroadscarrental-destination-blue lagoon" src="{{ asset('img/destinations/blue_lagoon.jpg') }}"
                                class="img-fullwidth mb30">
                        </div>
                        <div class="spacer-single"></div>
                    </div>
                </div>
                {{-- second post --}}
                <div class="row">
                    <div class="col-md-7">
                        <div class="blog-read">
                            <img alt="openroadscarrental-destination-vik" src="{{ asset('img/destinations/vik.jpg') }}" class="img-fullwidth mb30">
                        </div>
                        <div class="spacer-single"></div>
                    </div>
                    <div id="sidebar" class="col-md-5">
                        <div class="widget widget-post">
                            <h4 id="vik">Vík</h4>
                            <div class="small-border"></div>
                            <div class="post-text">
                                <p>Embark on a captivating journey along the mesmerizing southern coast of Iceland, where
                                    you'll encounter the picturesque town of Vík. Prepare to be enchanted by its stunning
                                    landscapes, charming atmosphere, and rich cultural heritage.
                                </p>
                                <p>
                                    Nestled between black sand beaches and dramatic cliffs, Vík stands as a beacon of beauty
                                    along the coastline. The iconic Reynisfjara Beach, with its towering basalt columns and
                                    roaring waves, is a sight that will leave you awe-struck. Explore the unique rock
                                    formations and feel the power of the ocean as you stroll along the black sand shoreline.

                                    Venture further into Vík and you'll discover the majestic Reynisdrangar sea stacks,
                                    rising like ancient sentinels from the depths of the Atlantic Ocean. Legend has it that
                                    these towering pillars were once trolls caught in the sunlight, frozen forever in their
                                    rocky form. Their mystique adds an air of enchantment to the already captivating
                                    scenery.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <p>
                            Immerse yourself in Vík's rich cultural heritage by visiting the iconic Víkurkirkja, a
                            charming wooden church that has stood as a beacon of faith for centuries. Its tranquil
                            surroundings and traditional architecture offer a sense of serenity amidst the
                            breathtaking nature.

                            As you wander through the town, you'll encounter cozy cafes and local shops offering
                            handmade crafts, traditional Icelandic delicacies, and warm hospitality. Take a moment
                            to savor the flavors of Iceland, from freshly caught seafood to mouthwatering pastries,
                            all while basking in the friendly and welcoming atmosphere.
                        </p>
                        <p>
                            For adventure seekers, Vík serves as a gateway to thrilling experiences. Explore the
                            nearby glaciers, hike along rugged trails, or embark on a memorable horseback ride
                            through the stunning landscapes. The possibilities for outdoor exploration are endless,
                            promising unforgettable moments and breathtaking vistas.

                            As the day draws to a close, don't miss the opportunity to witness the magical
                            phenomenon of the midnight sun during summer months, casting an ethereal glow over Vík
                            and its surroundings. The lingering twilight creates a dreamscape, where time seems to
                            stand still, and nature's beauty is amplified.

                            Vík in Iceland is a destination that will capture your heart and leave an indelible
                            impression on your soul. With its breathtaking landscapes, rich culture, and warm
                            hospitality, it invites you to embrace the enchantment of this coastal gem and create
                            memories that will last a lifetime.</p>
                    </div>
                </div>
                {{-- 3rd post --}}
                <div class="row">
                    <div id="sidebar" class="col-md-5">
                        <div class="widget widget-post">
                            <h4 id="kirkjufell">Mt. Kirkjufell</h4>
                            <div class="small-border"></div>
                            <div class="post-text">
                                <p>
                                    Prepare to be spellbound by the majestic allure of Mt. Kirkjufell, the legendary 'Church
                                    Mountain' nestled along the picturesque north coast of Iceland. This iconic peak is not
                                    just a mountain; it is a symbol of awe-inspiring beauty and a testament to the
                                    enchanting landscapes that define Iceland.
                                </p>
                                <p>
                                    As you approach Mt. Kirkjufell, its distinctive triangular shape rises proudly against
                                    the sky, beckoning you to explore its grandeur. Known as one of the most photographed
                                    mountains in Iceland, it has an ethereal quality that seems straight out of a fairytale.
                                    The cascading Kirkjufellsfoss waterfall at its base adds a touch of magic, creating a
                                    scene that is nothing short of mesmerizing.

                                    Capture your own breathtaking photographs as you venture closer to the mountain. Whether
                                    you're an experienced photographer or simply an admirer of natural beauty, Mt.
                                    Kirkjufell offers endless opportunities to capture the perfect shot. The changing light,
                                    the reflections in the surrounding water, and the ever-shifting weather patterns create
                                    a symphony of visual delights that will leave you awe-struck.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="blog-read">
                            <img alt="openroadscarrental-destination-kirkjufell" src="{{ asset('img/destinations/kirkjufell.jpg') }}"
                                class="img-fullwidth mb30">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <p>
                            As you stand at the foot of Mt. Kirkjufell, you can almost feel the whispers of legends
                            echoing through the air. According to local folklore, this magnificent mountain is not
                            only a place of natural wonder but also a sacred site where mystical creatures once
                            roamed. It is said that Kirkjufell was formed when a giantess and her troll sons were
                            caught by the first rays of the sun, forever transforming them into stone. This mythical
                            tale adds an extra layer of enchantment to an already magical place.

                            Immerse yourself in the surroundings of Mt. Kirkjufell, and you'll discover that it's
                            not just a solitary peak, but part of a breathtaking landscape. The nearby Snæfellsnes
                            Peninsula boasts rugged coastlines, charming fishing villages, and dramatic cliffs that
                            showcase the raw power of nature. Explore the rugged beauty of the region, hike along
                            scenic trails, and let the awe-inspiring vistas leave you breathless.

                            Mt. Kirkjufell is a destination that ignites the imagination and stirs the soul. Its
                            majestic allure and mythical charm create an experience that will stay with you long
                            after you've left its presence. So, venture forth, embrace the magic, and let Mt.
                            Kirkjufell weave its spell upon you, forever etching its beauty in your memories.
                        </p>
                    </div>
                </div>
                {{-- fourth post --}}
                <div class="row">
                    <div class="col-md-7">
                        <div class="blog-read">
                            <img alt="openroadscarrental-destination-akureyri" src="{{ asset('img/destinations/akureyri.jpg') }}"
                                class="img-fullwidth mb30">
                        </div>
                        <div class="spacer-single"></div>
                    </div>
                    <div id="sidebar" class="col-md-5">
                        <div class="widget widget-post">
                            <h4 id="akureyri">Akureyri</h4>
                            <div class="small-border"></div>
                            <div class="post-text">
                                <p>
                                    Welcome to the vibrant gem of North Iceland, the captivating city of Akureyri. Boasting
                                    the title of Iceland's second-largest city and hailed as the "Capital of the North,"
                                    Akureyri is a destination that will enchant you with its unique charm and diverse
                                    offerings.
                                </p>
                                <p>
                                    As you wander through the city's picturesque streets, you'll be greeted by colorful
                                    houses, quaint cafés, and a lively atmosphere that exudes warmth and creativity.
                                    Akureyri's vibrant cultural scene is renowned, with art galleries, museums, and music
                                    festivals that showcase the talents of local artists and performers. Immerse yourself in
                                    the rich cultural heritage of the city as you explore its captivating museums and
                                    immerse yourself in the local art scene.Nature enthusiasts will find themselves in
                                    paradise as Akureyri is surrounded by
                                    stunning landscapes and natural wonders. With the majestic Eyjafjörður fjord as its
                                    backdrop and snow-capped mountains in the distance, the city offers breathtaking views
                                    that will leave you in awe.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <p>
                            Take a leisurely stroll along the waterfront, bask in the
                            tranquility of nearby botanical gardens, or embark on thrilling outdoor adventures such
                            as whale watching, hiking, or skiing in the nearby mountains.

                            Akureyri's culinary scene is a delight for food lovers, with a range of restaurants
                            offering fresh and locally sourced ingredients. Indulge in delicious seafood, taste
                            traditional Icelandic delicacies, or savor international cuisines prepared with a unique
                            twist. The city's thriving food culture will tantalize your taste buds and leave you
                            craving for more.
                        </p>
                        <p>
                            In the winter months, Akureyri transforms into a winter wonderland, with opportunities
                            for snowboarding, snowshoeing, and even witnessing the mesmerizing Northern Lights. The
                            pristine snow-covered landscapes provide the perfect backdrop for unforgettable
                            adventures and magical experiences.

                            But it's not just the natural beauty and cultural offerings that make Akureyri special;
                            it's the warmth and welcoming spirit of its residents. The locals embody the true
                            essence of Icelandic hospitality, making you feel like a part of the community from the
                            moment you arrive.

                            Akureyri is a city that captures the heart and imagination, offering a unique blend of
                            urban charm and natural splendor. Whether you're seeking adventure, cultural
                            exploration, or simply a peaceful escape, Akureyri has something for everyone. So,
                            embrace the vibrant spirit of this captivating city and let Akureyri work its magic on
                            you, leaving you with memories that will last a lifetime.
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- content close -->


@endsection
