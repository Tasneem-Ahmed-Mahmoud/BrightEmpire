@extends('frontend.layout.master')
@section('title','Bright Empire About Us')
@section('content')

<!-- about us -->

<section class="about section-top section-bottom">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-12 mb-4 ">
                <h3 class="main-title">About us</h3>
                <div class="title-line"></div>
            </div>

            <div class="col-lg-6">
                <img src="{{asset('frontend/assets/images/aboutUs.jpg')}}" alt="limousin about us" srcset=""
                    class="img-fluid">
            </div>
            <div class="col-lg-5 mt-lg-0 mt-4">
                <h2>About <span class="text-capitalize text-gold">Bright empire</span></h2>
                <p class="mt-3 mb-4">The Best Limousine Company With Professional Drivers Proudly Serving NYC And The
                    TRI State Area For Decades.</p>
                <div class="d-flex pt-4 mb-3">
                    <div class="icon-box me-4">
                        <i class="fa-solid fa-check"></i>
                    </div>
                    <div>

                        <p>Bright Empire is a professional limousine service provider that offers reliable chauffeured
                            car service and limo services in NYC and the Tri-State area for decades. They have a diverse
                            fleet of vehicles, including sedans, SUVs, Mercedes Sprinter vans, limousines, corporate
                            black limos, super stretch SUV party limos, and party buses..</p>
                    </div>
                </div>
                <div class="d-flex">
                    <div class="icon-box me-4">
                        <i class="fa-solid fa-check"></i>
                    </div>
                    <div>

                        <p>The company prides itself on providing exceptional service and exceeding customer
                            expectations. Their professional chauffeurs are experienced and courteous, ensuring a
                            comfortable and enjoyable travel experience for clients.
                            We proudly can consider our company one of the best companies serving NYC for limo and
                            luxury car service.</p>
                    </div>
                </div>
                <div class="d-flex">
                    <div class="icon-box me-4">
                        <i class="fa-solid fa-check"></i>
                    </div>
                    <div>

                        <p>Bright Empire caters to both corporate and leisure clients, our limo service NYC covering a
                            wide range of occasions such as airport transfers NYC, corporate events, weddings, proms,
                            parties, and more. Bright Empire car service NYC meets all transportation needs from our
                            customers with a reliable and luxurious fleet.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>



@endsection