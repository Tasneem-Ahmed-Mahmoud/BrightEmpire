@extends('frontend.layout.master')
@section('title','Bright Embire Contact')

@section('style')
<link rel="stylesheet" href="{{asset('frontend/assets/css/contact-us.css')}}">

@endsection
@section('content')

<section class="contact  section-bottom">
  <div class="container">

    <div class="row">
      <div class="col-12  ">
        <h1 class="main-title">Contact us</h1>
        <div class="title-line"></div>
      </div>
      <div class="contact__form ">

        <div class="row contact__info ">
          {{-- phone --}}
          <div class="col-lg-4 col-md-6">
            <div class="contact__content p-3 py-5 text-center">
              <a href="tel:+1 646-750-7006">
                <i class="fa-solid fa-phone"></i>
                <h6 class="mt-3">+1 646-750-7006</h6>
              </a>
            </div>
          </div>

          {{-- Email--}}
          <div class="col-lg-4 col-md-6">
            <div class="contact__content p-3 py-5 text-center">
              <a href="mailto:info@brightempirelimonyc.com">
                <i class="fa-solid fa-envelope"></i>
                <h6 class="mt-3">info@brightempirelimonyc.com</h6>
              </a>
            </div>
          </div>

          {{-- address--}}
          <div class="col-lg-4 col-md-6">
            <div class="contact__content p-3 py-5 text-center">
              <a
                href="https://www.bing.com/maps?mepi=23~MapsAnswer~TopOfPage~Direction_Button&ty=0&rtp=pos.40.751211_-73.986364__980+6th+Ave%2C+New+York%2C+NY+10018%2C+United+States__e_~&mode=d&v=2&sV=1&cp=40.751418~-73.986053&lvl=11.0">
                <i class="fa-solid fa-home"></i>
                <h6 class="mt-3">980 6th ave, New York, NY,<br> United States, New York</h6>
              </a>
            </div>
          </div>
        </div>

     <div class="form row mt-5">
      <div class="col-md-6">
        <figure>
          <img src="{{ asset('frontend/assets/images/contact.jpg') }}" alt="contact" class="w-100 h-100">
        </figure>
      </div>
      <div class="col-md-6">
        <header class="mt-4">

          <h3 class="text-center">Feel Free to Say Hello!</h3>
          <h3 class="text-center"> Get in Touch With Us</h3>
        </header>
        <form method="POST" action="{{ route('contact.store') }}">
          @csrf
          <div class="row">
            <div class="form-group col-md-6">
              <label for="exampleInputEmail1">Name</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Enter Name" value="{{ old('name')??'' }} " name="name">
                @error("name")
                  <smal class="text-danger">{{ $message }}</smal>
                @enderror
             
            </div>
            <div class="form-group col-md-6">
              <label for="exampleInputEmail1">Email address</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Enter email" value="{{ old('email')??'' }}" name="email">
                @error("email")
                <smal class="text-danger">{{ $message }}</smal>
              @enderror
             
            </div>
            <div class="form-group col-12">
              <label for="exampleInputPassword1">Subject</label>
              <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Subject" value="{{ old('subject')??'' }}" name="subject">
              @error("subject")
              <smal class="text-danger">{{ $message }}</smal>
            @enderror
            </div>
            <div class="form-group col-12">
              <label for="exampleFormControlTextarea1">Message</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="message" placeholder="Enter Message">{{ old('message')??'' }}</textarea>
              @error("message")
              <smal class="text-danger">{{ $message }}</smal>
            @enderror
            </div>
            <div class="form-group mt-3 text-center">
              <button class="btn btn-brand btn-main px-5 py-3">Send Message</button>
            </div>
          </div>
        </form>
      </div>
     </div>
        
      </div>
    </div>
  </div>
</section>
@endsection