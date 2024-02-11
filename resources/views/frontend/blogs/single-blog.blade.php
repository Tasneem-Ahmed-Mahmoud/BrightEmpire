@php
$description=$blog->seo->description;

@endphp
@extends('frontend.layout.master')
@section('title',  $blog->seo->title)
@section('style')
<link rel="stylesheet" href="{{ asset('frontend/assets/css/blogs.css') }}">

@endsection
@section('content')
<!--###############  banner start################# -->




<!--  start service section -->
<section class="mt-5  section-bottom single-blog">
    <div class="container ">
        <div class="row">
            <div class="col-12">
                <div class="col-12 ">
                    <h1 class="main-title">{{ $blog->title }}</h1>
                    <div class="title-line"></div>
                </div>
            </div>
            <div class="col-lg-8">

                <div class="pt-3">
                    <figure>
                        <img src="{{ asset($blog::PATH.$blog->image->name) }}"
                            alt="advantages-of-hiring-a-limo-service" class="w-100 ">
                    </figure>
                    <h3 class="text-gold">{{ $blog->title }}</h3>
                    <div>
                        <div>
                            <p>{{ $blog->description }}</p>
                        </div>
                        <div>
                            {!! $blog->content !!}
                        </div>

                        <div class="text-center">
                            <a href="{{ route('system.reservation') }}" class="btn main-btn">make Reservation</a>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mt-5">
                <div class="related-post">
            
            
                    <div class="arrow-pointer d-flex justify-content-center align-items-center mb-3 w-75 ms-3 ">
                        <h3 class="bg-gold">Related Posts</h3>
                    </div>
            
            
                    <ul style="overflow-x: hidden;">
            
                         @foreach ($related_blogs as $blog )
                             
                      
                          <li class="row justyfy-content-between mb-3 ">
                            <a href="{{route('blogs',$blog->seo->url)}}" class="col-4">
            
                                <img src="{{ asset($blog::PATH.$blog->image->name)  }}"
                                    alt="navigate-nyc-in-luxury" class="w-100  h-100">
            
                            </a>
                            <a href="{{ route('blogs',$blog->seo->url) }}" class="col-8"><span class="text-white">{{ $blog->title }}
                            </span></a>
                        </li>
                        @endforeach
            
                    </ul>
            
                </div>
            </div>
        </div>
    </div>
</section>
@endsection