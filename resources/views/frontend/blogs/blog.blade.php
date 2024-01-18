@extends('frontend.layout.master')
@section('title', 'Bright empire blogs ')
@section('style')
<link rel="stylesheet" href="{{ asset('frontend/assets/css/blogs.css') }}">
@endsection
@section('content')
<!--###############  banner start################# -->



<!--  start service section -->
<section class="section-top blog section-bottom">
    <div class="container ">
        <div class="row">

            <div class="col-12">
                <div>
                    <h1 class="main-title">Our Blogs</h1>
                    <div class="title-line"></div>
                </div>
            </div>
            <div class="col-lg-8">



                   {{-- start 8 --}}
                   <div class="row   blog-item ">
                    <div class="col-md-6 col-12 ps-md-0   pe-md-2 ">
                        <div class="blog-image h-100 ">
                            <img src="{{ asset('frontend/assets/images/blogs/affordable price for a limo-1.jpeg') }}" alt="affordable price for a limo"
                                class="w-100 h-100 ">
                        </div>
                    </div>
                    <div class="col-md-6 col-12 pt-5">
                        <div class="blog-content">
                            <a href="{{ route('navigate-nyc-in-luxury') }}">
                                <h3 class="text-gold">Navigate NYC in luxury at an affordable price for a limo- Bright Empire </h3>
                            </a>
                           <p>
                            New York is a huge city with vibrant and diverse streets, it's well known for its rich culture and modern civilization.

Whether you are a resident or visitor you will find something special for you.

                           </p>
                            <div class="text-end mb-2">
                                <a href="{{ route('navigate-nyc-in-luxury') }}" class="pe-3 text-gold"> Read More <i
                                        class="ps-2 fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                </div>

                

                {{-- start 7 --}}
                <div class="row   blog-item mt-5">
                    <div class="col-md-6 col-12 ps-md-0   pe-md-2 ">
                        <div class="blog-image h-100 ">
                            <img src="{{ asset('frontend/assets/images/blogs/limousine-1.jpg') }}" alt="limousine"
                                class="w-100 h-100 ">
                        </div>
                    </div>
                    <div class="col-md-6 col-12 pt-5">
                        <div class="blog-content">
                            <a href="{{ route('types-of-limousines') }}">
                                <h3 class="text-gold">Unveiling the different types of limos services- Bright Empire
                                </h3>
                            </a>
                            <p>

                                New York is a huge diverse and vibrant city where every inch reflects a thing of
                                civilization and elegance.

                                But, how to enjoy the journey when you are the driver who needs to deal with the traffic
                                along the way?

                            </p>
                            <div class="text-end mb-2">
                                <a href="{{ route('types-of-limousines') }}" class="pe-3 text-gold"> Read More <i
                                        class="ps-2 fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                </div>

                {{-- start 6 --}}
                <div class="row   blog-item mt-5 ">
                    <div class="col-md-6 col-12 ps-md-0   pe-md-2 ">
                        <div class="blog-image h-100 ">
                            <img src="{{ asset('frontend/assets/images/blogs/travel-with-best-limousine.jpeg') }}"
                                alt="travel-with-best-limousine" class="w-100 h-100 ">
                        </div>
                    </div>
                    <div class="col-md-6 col-12 pt-5">
                        <div class="blog-content">
                            <a href="{{ route('travel-with-best-limousine') }}">
                                <h3 class="text-gold">Travel With Best Limousine Service Brooklyn - Bright Empire</h3>
                            </a>
                            <p> Brooklyn the city of Kings!

                                Brooklyn is one of the 5 boroughs in New York City and the second largest one. Although
                                Brooklyn is part of New York, Brooklyn has its own beautiful appearance with stunning
                                architecture and rich culture.


                            </p>
                            <div class="text-end mb-2">
                                <a href="{{ route('travel-with-best-limousine') }}" class="pe-3 text-gold"> Read More <i
                                        class="ps-2 fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
                {{-- start 5 --}}
                <div class="row   blog-item mt-5 ">
                    <div class="col-md-6 col-12 ps-md-0   pe-md-2 ">
                        <div class="blog-image h-100 ">
                            <img src="{{ asset('frontend/assets/images/blogs/transportation-to-airport.jpeg') }}"
                                alt="transportation-to-airport" class="w-100 h-100 ">
                        </div>
                    </div>
                    <div class="col-md-6 col-12 pt-5">
                        <div class="blog-content">
                            <a href="{{ route('transportation-to-airport') }}">
                                <h3 class="text-gold">Navigating
                                    How To Choose The Best Transportation To Airport Service - Bright Empire</h3>
                            </a>
                            <p>When it comes to Preparing for a new flight first thing you think about is how to
                                transport to the airport and arrive on time. That’s where transportation to airport
                                service comes in.</p>
                            <div class="text-end mb-2">
                                <a href="{{ route('transportation-to-airport') }}" class="pe-3 text-gold"> Read More <i
                                        class="ps-2 fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
                {{-- start 4 --}}
                <div class="row   blog-item mt-5">
                    <div class="col-md-6 col-12 ps-md-0   pe-md-2 ">
                        <div class="blog-image h-100 ">
                            <img src="{{ asset('frontend/assets/images/blogs/advantages-of-hiring-a-limo-service.jpg') }}"
                                alt="advantages-of-hiring-a-limo-service" class="w-100 h-100 ">
                        </div>
                    </div>
                    <div class="col-md-6 col-12 pt-5">
                        <div class="blog-content">
                            <a href="{{ route('advantage-of-limo') }}">
                                <h3 class="text-gold">What are the advantages of hiring a limo service?</h3>
                            </a>
                            <p> In the business world, it is common to carry out different types of activities that
                                involve traveling from a place to another. Executives often spend much of their time
                                between flights, meetings, events and business trips. For this reason, an effective
                                transportation service makes all the difference. If you are asking yourself what are the
                                advantages of hiring a limo service, keep reading.
                            </p>
                            <div class="text-end mb-2">
                                <a href="{{ route('advantage-of-limo') }}" class="pe-3 text-gold"> Read More <i
                                        class="ps-2 fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                </div>



                {{-- start 3 --}}
                <div class="row   blog-item  mt-5">
                    <div class="col-md-6 col-12 ps-md-0   pe-md-2 ">
                        <div class="blog-image h-100 ">
                            <img src="{{ asset('frontend/assets/images/blogs/elegant-uber-driver-giving-taxi-ride.jpg') }}"
                                alt="elegant-uber-driver-giving-taxi-ride" class="w-100 h-100">
                        </div>
                    </div>
                    <div class="col-md-6 col-12 pt-5">
                        <div class="blog-content">
                            <a href="{{ route('black-car-service') }}">
                                <h3 class="text-gold">5 Reasons Why Using a Black Car Service is Better than Uber</h3>
                            </a>
                            <p> We all remember using a limo service for prom or for another special event in which we
                                needed to arrive fashionably late, or perhaps, just fashionably. However, in recent
                                years, with ride-share apps becoming popular and now, the norm, it seems that limos and
                                other black car services have all but gone by the wayside. … </p>

                            <div class="text-end mb-2">
                                <a href="{{ route('black-car-service') }}" class="pe-3 text-gold"> Read More <i
                                        class="ps-2 fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                </div>

                {{-- start 2 --}}
                <div class="row   blog-item  mt-5">
                    <div class="col-md-6 col-12 ps-md-0   pe-md-2 ">
                        <div class="blog-image h-100 ">
                            <img src="{{ asset('frontend/assets/images/blogs/sweet-16.jpeg') }}"
                                alt="elegant-uber-driver-giving-taxi-ride" class="w-100 h-100">
                        </div>
                    </div>
                    <div class="col-md-6 col-12 pt-5">
                        <div class="blog-content">
                            <a href="{{ route('sweet-16') }}">
                                <h3 class="text-gold ">Sweet 16 with Bright Empire
                                </h3>
                            </a>
                            <p>In the realm of unforgettable milestones, a Sweet 16 celebration holds a special place.
                                As teenagers embark on the journey into adulthood, creating lasting memories becomes
                                paramount.
                                ...</p>
                            <div class="text-end mb-2">
                                <a href="{{ route('sweet-16') }}" class="pe-3 text-gold"> Read More <i
                                        class="ps-2 fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                </div>

                {{-- start 1--}}
                <div class="row   blog-item  mt-5">
                    <div class="col-md-6 col-12 ps-md-0   pe-md-2 ">
                        <div class="blog-image h-100 ">
                            <img src="{{ asset('frontend/assets/images/blogs/Navigating-Local.jpeg') }}"
                                alt="elegant-uber-driver-giving-taxi-ride" class="w-100 h-100">
                        </div>
                    </div>
                    <div class="col-md-6 col-12 pt-5">
                        <div class="blog-content">
                            <a href="{{ route('navigating-local') }}">
                                <h3 class="text-gold ">Navigating Local Limo Services: A Comprehensive Guide with Bright
                                    Empire Limousine NYC
                                </h3>
                            </a>
                            <p>
                                In recent years, the demand for limo services has experienced a significant surge, with
                                individuals seeking luxurious and reliable transportation options for various
                                occasions...
                            </p>
                            <div class="text-end mb-2">
                                <a href="{{ route('navigating-local') }}" class="pe-3 text-gold"> Read More <i
                                        class="ps-2 fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            @include("frontend.blogs.related-posts")
        </div>
    </div>
</section>
@endsection