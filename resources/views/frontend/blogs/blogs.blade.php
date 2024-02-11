@extends('frontend.layout.master')
@section('title', 'Bright empire blogs ')
@section('style')
<link rel="stylesheet" href="{{ asset('frontend/assets/css/blogs.css') }}">
<style>
    .pagination a{
        background-color: var(--secondary) !important;
    }
    .pagination a:active{
        background-color: var(--gold-color) !important;
    }
    .pagination  a{
        background-color: var(--gold-color) !important;
        --bs-pagination-color: var(--text);
    }
    .active>.page-link, .page-link.active {
   
    background-color: var(--gold-color);
  
}
</style>
@endsection
@section('content')
<!--###############  banner start################# -->



<!--  start service section -->
<section class="mt-5 blog section-bottom">
    <div class="container ">
        <div class="row">

            <div class="col-12">
                <div>
                    <h1 class="main-title">Our Blogs</h1>
                    <div class="title-line"></div>
                </div>
            </div>
            <div class="col-lg-8">

               @foreach ($blogs as $blog )
            
                <div class="row   blog-item {{ !$loop->first?'mt-4':'' }} ">
                    <div class="col-md-6 col-12 ps-md-0   pe-md-2 ">
                        <div class="blog-image h-100 ">
                            <img src="{{ asset($blog::PATH.$blog->image->name) }}"
                                alt="travel-with-best-limousine" class="w-100 h-100 ">
                        </div>
                    </div>
                    <div class="col-md-6 col-12 pt-5">
                        <div class="blog-content">
                            <a href="{{ route('single-blog',$blog->seo->url) }}">
                                <h3 class="text-gold">{{ $blog->title }}</h3>
                            </a>
                            <p>{{$blog->description}}

                            </p>
                            <div class="text-end mb-2">
                                <a href="{{  route('single-blog',$blog->seo->url)}}" class="pe-3 text-gold"> Read More <i
                                        class="ps-2 fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
                      
                @endforeach
                  

             
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
      <div class="d-flex justify-content-end mt-5 pagination">
        {{ $blogs->links() }}
      </div>
    </div>
</section>
@endsection