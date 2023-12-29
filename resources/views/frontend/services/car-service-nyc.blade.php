@extends('frontend.layout.master')
@section('title', 'car service nyc')

@section('content')

<!--  start service section -->
<section class="section-top services mb-3">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center pb-5">
                <div class="col-12 ">
                    <h3 class="main-title">Car Service NYC</h3>
                    <div class="title-line"></div>
                </div>
            </div>
            <!-- start 1-->
            <div class="row justify-content-between pb-5">
                <div class=" col-lg-6 col-12 mb-5">
                    <div class="card border-0 me-lg-5">
                        <img src="{{ asset('frontend/assets/images/services/car-service-nyc.jpg') }}"
                            alt="Airport Pick-up">
                    </div>
                </div>
                <div class=" col-lg-6 col-12 mb-5 order-2 order-lg-1">
                    <div>
                        <h2 class=" services-title text-capitalize mb-4 text-gold">Car Service NYC</h2>
                        <div>
                            <p>Indulge in luxury with our exclusive limousine service. Enjoy the finest amenities and
                                personalized attention from our experienced chauffeurs. Whether it's a night out in
                                town, a special occasion or corporate event, arrive in style and comfort with our luxury
                                limo service.
                            </p>
                            <p>Bright Empire Limo. Will never come to terms when it’s about customer satisfaction. All
                                of our drivers are well-trained professionals who can ensure you have a safe and smooth
                                ride. We will keep tracking your flight on our end to ensure that our driver is right
                                there for you on time .
                            </p>
                            <a href="{{ route('system.reservation') }}" class="btn main-btn mt-4">Make Reservation</a>
                        </div>
                    </div>
                </div>

            </div>
            {{-- end --}}


        </div>
</section>

</section>
@endsection