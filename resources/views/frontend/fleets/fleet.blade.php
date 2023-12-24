@php
$description=$fleet->description;
@endphp

@extends('frontend.layout.master')
@section('title',$fleet->title)

@section('style')
<link rel="stylesheet" href="{{asset('frontend/assets/css/fleet.css')}}">
@endsection

@section('content')

<section class="car section-bottom " style="margin-top: 4rem;">
    <div class="container">
        <div class="row">
            <h1 class="text-center mb-4">{{ $fleet->name }}</h1>

            <!-- left side -->
            <div class="col-md-8 col-12  row  justify-content-center   order-2 order-md-1 ">
                <div class="car_big-img col-12 mb-2 px-0 mx-0">

                    <img src="{{ asset($fleet::PATH.$fleet->photo) }}" alt="{{ $fleet->alt }}" srcset=""
                        class=" car_img h-100 w-100 px-0 mx-0" id="big_img">

                    <div class="layer d-flex justify-content-between  ">
                        <i class="fa-solid fa-angle-left fs-2" id="left"></i>
                        <i class="fa-solid fa-angle-right fs-2" id="right"></i>
                    </div>


                </div>
                <div class="car_small-img row  col-12 justify-content-start  px-0 mb-5">
                    @if (count($fleet->images) > 0)
                    @foreach ($fleet->images as $image)

                    <div class="col-2 pt-1 px-0 " style="cursor: pointer;">
                        <img src="{{ asset($fleet::PATH. $image->name) }}" alt="{{ $image->alt }}"
                            class="w-100 car_img  h-50">
                    </div>

                    @endforeach
                    @else
                    <div class="col-2 pt-1 px-0 " style="cursor: pointer;">
                        <img src="{{ asset($fleet::PATH. $fleet->photo) }}" alt="{{ $fleet->alt }}"
                            class="w-100 car_img  h-50" >
                    </div>
                    @endif

                </div>
                <div class="col-12 mb-1 ">

                    @foreach (splitParagraph($fleet->description) as $item)
                    <p class="">{{ $item . '.' }}</p>
                    @endforeach

                    <div class="mt-5">


                        <div class="text-center">
                            <a href="{{ route('system.reservation') }}" class="btn px-5"> Book Now</a>

                        </div>
                    </div>
                </div>
            </div>



            <!-- right side -->
            <div class="col-md-4 col-12 pe-2 ms-3 order-1 order-md-2 ">
                <figure class="car_img-right-side">
                    <img src="{{ asset($fleet::PATH.$fleet->photo )}}" alt="{{ $fleet->alt }}" class="w-100" style="max-height:256px">
                </figure>
                <div class="rigt_content  pt-2 px-1">
                    <h5 class="">{{ $fleet->name }}</h5>
                    <ul class="right_list pt-2">
                        @foreach ($fleet->features as $feature)
                        <li class="p-2"><i class="fa-solid fa-person-walking-luggage me-2 "></i><span>{{
                                $feature->name}}</span>
                        </li>
                        @endforeach
                    </ul>

                    <div class="text-center mb-5">
                        <a href="{{ route('system.reservation') }}" class="btn px-5"> Book Now</a>

                    </div>



                </div>
            </div>
        </div>
    </div>
</section>
@endsection


@section('script')
<script src="{{ asset('frontend/assets/js/fleets.js') }}"></script>
@endsection