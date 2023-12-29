
@extends('frontend.layout.master')
@section('title', 'limo service nyc')

@section('content')

<!--  start service section -->
<section class="section-top services mb-3">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center pb-5">
                <div class="col-12 ">
                    <h3 class="main-title">Limo Service NYC</h3>
                    <div class="title-line"></div>
                </div>
            </div>
            <!-- start 1-->
            <div class="row justify-content-between pb-5">
                <div class=" col-lg-6 col-12 mb-5">
                    <div class="limod border-0 me-lg-5">
                        <img src="{{ asset('frontend/assets/images/services/limo-service-nyc.jpg') }}" alt="limo service" class="w-100">
                    </div>
                </div>
                <div class=" col-lg-6 col-12 mb-5 order-2 order-lg-1">
                    <div>
                        <h2 class=" services-title text-capitalize mb-4 text-gold">Limo Service NYC</h2>
                        <div>
                           <p>Bright Empire limo. Take pride in providing exceptional service for all of our customers. Our professional chauffeurs are experienced and courteous, ensuring a comfortable and enjoyable travel experience for clients. We proudly can consider our company one of the best companies serving NYC for limo and luxury car service.
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
