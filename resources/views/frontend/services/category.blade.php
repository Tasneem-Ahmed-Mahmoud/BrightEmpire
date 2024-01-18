@extends('frontend.layout.master')
@section('title', 'City-To-City Ground Transportation')
@section('style')
<link rel="stylesheet" href="{{ asset('frontend/assets/css/service-new.css') }}">

<style>
   @media (max-width:500px){
    .row>* {
        padding-right: 0!important;
    }
   }
</style>
@endsection
@section('content')

<!--  start service section -->
<section class="section-top services">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center ">
                <div class="col-12 ">
                    <h3 class="main-title">{{ $category->name }}</h3>
                    <div class="title-line"></div>
                </div>
            </div>
            <!-- start 1-->
            <div class="row  justify-content-between pb-5 ">

                <div class="  col-12 mb-5 ">
                    <div>
                        <h2 class=" services-title text-capitalize mb-4">{{ $category->title }}</h2>
                        <div>

                            @foreach (splitParagraph($category->description) as $text )
                            <p>{{ $text .'.'}}</p>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-12 row">


                    <div class="col-12 text-center ">
                        <div class="col-12 ">
                            <h3 class="main-title">{{ $category->name .' We are serve'}}</h3>
                            <div class="title-line"></div>
                        </div>

                    </div>
                    <div class="col-12 row justify-content-center align-items-center ">

                        @foreach ($category->services as $service )


                        <div class="col-lg-4 col-md-6  p-2">
                            <a href="{{ route('service',$service->seo->url) }}">
                                <div class="book-by-area-popular">
                                    <img src="{{ asset($service::PATH.$service->image->name) }}" class="w-100"
                                        style="height: 20rem" alt="Limousine Service to Boston">
                                    <h3 class="title">{{ $service->name }}</h3>
                                </div>

                            </a>
                        </div>

                        @endforeach
                    </div>
                </div>

            </div>


        </div>
</section>


@endsection