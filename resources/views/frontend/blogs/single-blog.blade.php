@php
$description=$blog->seo->description;

@endphp
@extends('frontend.layout.master')
@section('title',  $blog->seo->title)
@section('style')
<link rel="stylesheet" href="{{ asset('frontend/assets/css/blogs.css') }}">
<style>
    .blog img{
        width: 100%;
        
    }
</style>
@endsection
@section('content')
<!--###############  banner start################# -->




<!--  start service section -->
<section class="section-top  section-bottom single-blog">
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
            @include("frontend.blogs.related-posts")

        </div>
    </div>
</section>
@endsection