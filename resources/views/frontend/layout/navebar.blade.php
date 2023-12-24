
@php
  use App\Models\Category;
  use App\Models\Fleet;
  $categories=Category::with(['services','services.seo','seo'])->get();
  $fleets=Fleet::with('seo')->get();
@endphp

  <!-- navbar -->
<header class="sticky-top navbar-header">





  <div class="nav-top  ">
   <div class="container">
    <div class="row justify-content-between py-lg-2 py-1 nav-top_content">
      <div class="col-md-6 text-md-start text-center info">
    <!-- email -->
    <a  href="mailto:info@brightempirelimonyc.com"><i class="fa fa-envelope"></i> <span>info@brightempirelimonyc.com</span></a><a class="ms-1" href="tel:+1 646-750-7006"><i class="fa fa-phone"></i><span>+1 646-750-7006</span></a>
      </div>
     <div class="col-md-6 row justify-content-between nav-social">
      <div class="col-sm-6  text-center">
<a href="https://www.facebook.com/brightempirelimo"> <i class="fa-brands fa-facebook "> </i></a>

        <a class="mx-3" href="https://www.instagram.com/brightempirelimo/"> <i class="fa-brands fa-instagram ms-lg-2"></i> </a>
         <a href="https://twitter.com/BrightEmpirenyc"> <i class="fa-brands fa-twitter m-lg-2"></i> </a>
         <a href="https://api.whatsapp.com/send?phone=+1646-750-7006&text=Hello%20there!"> <i class="fa-brands fab fa-whatsapp ms-3 "></i></a>

      </div>
      <div class="col-sm-6 text-md-end text-center">
        <a  href="{{ route('system.login')}}"> <i class="fas fa-sign-in-alt "></i> <span>Login</span></a>
        <a class="ms-1" href="{{ route('system.register')}}"> <i class="fa-solid fa-user-plus ms-lg-3 ms-1"></i> <span>Register</span></a>
        </div>
     </div>
    
    </div>
   </div>
</div>

<!-- header start -->
<header class="header">
    <div class="container">
        <div class="row v-center">
            <div class="header-item item-left">
                <div class="logo">
                    <a href=""><img src="{{ asset('frontend/assets/images/bright.png') }}" alt="" srcset=""></a>
                </div>
            </div>
            <!-- menu start here -->
            <div class="header-item item-center">
                <div class="menu-overlay">
                </div>
                <nav class="menu">
                    <div class="mobile-menu-head">
                        <div class="go-back"><i class="fa fa-angle-left"></i></div>
                        <div class="current-menu-title"></div>
                        <div class="mobile-menu-close">&times;</div>
                    </div>
                    <ul class="menu-main">
                        <li>
                            <a href="{{ route('landing') }}">Home</a>
                        </li>
                    
                        <li class="menu-item-has-children">
                            <a href="#"> Services <i class="fa fa-angle-down"></i> </a>
                            <div class="sub-menu mega-menu mega-menu-column-4">

                               @foreach ( $categories as $category)
                                   

                               <div class="list-item">
                                <h4 class="title"><a href="{{ route('service',$category->seo->url) }}"class="text-gold">{{ $category->name }}</a></h4>
                                <ul>
                                  
                                    @foreach ($category->services as $service )
                            
                                    <li><a href="{{ route( 'service',$service->seo->url) }}">{{ $service->name }}</a></li>
                                    
                                    @endforeach
                                     
                                </ul>
                               
                          </div>


                               @endforeach
                            
                            </div>
                        </li>
                        
                        <li class="menu-item-has-children">
                            <a href="#">Fleet <i class="fas fa-angle-down"></i></a>
                            <div class="sub-menu single-column-menu">
                                <ul>
                                    @foreach ($fleets as $fleet)
                                    <li><a href="{{route( 'fleets',$fleet->seo->url) }}">{{ $fleet->name }}</a></li>
                                    
                                    @endforeach
                                   
                                </ul>
                            </div>
                        </li>
                        
                    </ul>
                </nav>
            </div>
            <!-- menu end here -->
            <div class="header-item item-right">
       <a href="{{ route('system.reservation') }}" class="btn btn-brand ms-lg-3 main-btn">Make Reservation</a>
                <!-- mobile menu trigger -->
                <div class="mobile-menu-trigger">
                    <span></span>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header end -->

</header>
