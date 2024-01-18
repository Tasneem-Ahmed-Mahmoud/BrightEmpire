@extends('frontend/layout.master')
@section('title', 'Navigate NYC in luxury at an affordable price for a limo- Bright Empire')
@section('style')
<link rel="stylesheet" href="{{ asset('frontend/assets/css/blogs.css') }}">
<style>
     .bg-none li {
        background-color: var(--primary-color) !important;
        padding: .3rem !important;
    }

    .dotted-list li::before {
        content: "\2022";
        /* Unicode character for bullet (•) */
        /* color: var(--god-color)!important; Change color as needed */
        font-size: 1.2em;
        /* Adjust size if necessary */
        margin-right: 0.5em;
        /* Add space between bullet and text */
    }

    .dotted-list span {
        font-size: 1.1rem;
    }
    section{
        overflow-x: hidden;
    }
</style>
@endsection
@section('content')


<!--  start service section -->
<section class="section-top  section-bottom single-blog">
    <div class="container ">
        <div class="row">

            <div class="col-12">
                <div class="col-12 ">
                    <h1 class="main-title text-center">Navigate NYC in luxury at an affordable price for limo- Bright
                        Empire </h1>
                    <div class="title-line"></div>
                </div>
            </div>
            <div class="col-lg-8">

                <div class="pt-3">
                    <figure>
                        <img src="{{ asset('frontend/assets/images/blogs/affordable price for a limo-1.jpeg') }}" alt="limousine"
                            class="w-100 ">
                    </figure>
                    <div>
                        <div>
                            <h3 class="text-gold">Navigate NYC in luxury at an affordable price for a limo- Bright Empire
                            </h3>
                            <p>New York is a huge city with vibrant and diverse streets, it's well known for its rich culture and modern civilization.</p>
                            <p>Whether you are a resident or visitor you will find something special for you.</p>
                            <p>Imagine navigating all around New York City from your luxury limo with a private chauffeur and then arriving at your destination in style and on time.</p>
                            <p>An irresistible feeling of pleasure and luxury ever, isn't that?</p>
                            <p>But, what about the budget?</p>
                            <p>The only thing that can break that thrill is thinking about the cost of renting a limo service.</p>
                            <p>The balance between luxury and affordability is a hard formula that we solved in <a
                                    href="{{ route('landing') }}" class="text-gold">Bright Empire.</a></p>
                            <p>With <a href="{{ route('landing') }}" class="text-gold">Bright Empire</a>, you will
                                navigate all around New York City with affordable transportation options and a classy
                                luxurious fleet consisting of a wide range of modern limousine models to cater to all
                                your transportation needs such as Cadillac limo, Mercedes Sprinter limo, stretch limo,
                                SUVs, and other American limo services.</p>
                            <p>Whatever your destination in New York whether it is Brooklyn, Boston, Manhattan, or any borough in New York City you will get affordable point-to-point service prices.</p>
                        </div>

                        <div>
                          
                            <h5 class="text-gold">Bright Empire's cost-effective fleet:</h5>
                            <p>Luxury doesn't always mean expensive. </p>
                                   <p>Enjoy New York City and choose from a huge diverse and extensive fleet of vehicles that cater to all your transportation needs including</p>
                            <ul class="bg-none dotted-list">
                                <li>Luxury sedan </li>
                                <li>Stretch limousines </li>
                                <li>Party buses</li>
                                <li>SUVs </li>
                            </ul>
                           
                        </div>
                        <div>
                            <h5 class="text-gold">Luxury sedan </h5>

                          <p>Have a refined experience and a feel of classic elegance on your journeys with sedan cars such as Cadillac and Chrysler.</p>
                          <p>Luxury sedan cars can accommodate 1-4 passengers with up to 3-4 luggage.</p>
                          <p>Premium sedan car accommodate up to 3 passengers with up to 2-3 luggage.</p>
                          <p>Want to take a sedan for a ride?</p>
                          <p>experience the elegance of sedan cars at affordable rent limousine prices from Bright Empire.</p>
                           <h6 class="text-center"><a href="{{ route('fleets','luxury-sedan') }}" class="text-gold ">Rent Luxury Sedan</a></h6>
                           <h6 class="text-center"><a href="{{ route('fleets','premium-sedan') }}" class="text-gold ">Rent Premium Sedan </a></h6>
                        
                        </div>
                        <div>
                            <h5 class="text-gold">Stretch limousines:</h5>
                            <p>Add a magic touch of luxury to your special occasions, romantic dates, weddings, birthdays, etc with luxury stretch limousine models such as stretch <a href="{{ route('fleets','stretch-escalade') }}" class="text-gold">Escalade/H2</a> and Cadillac limousines.</p>
                            <p>Stretch limousines accommodate up to 8 passengers.</p>
                            <p>You can explore the magic of lush leather seats and the grandeur arrival that stretch limousine offers at a cost-effective limousine price with Bright Empire.</p>
                            <h6 class="text-center"><a href="{{ route('fleets','Stretch-Limousine') }}" class="text-gold ">Rent Stretch limousine </a></h6>
                        
                        </div>

                        <div>
                            <h5 class="text-gold">Sprinter van limo: </h5>
                      <p>Sprinter limos are perfect for groups it's accommodate 14 passengers.</p>
                      <p>Executive sprinter is a Spacious  and luxurious mode of transportation such as Mercedes sprinter limos and Ford Sprinters</p>
                       <p>You can enjoy the Sprinter limo's comfortable seating arrangements at the best price for a limo with Bright Empire.</p>
                       <h6 class="text-center"><a href="{{ route('fleets','Executive-sprinter') }}" class="text-gold ">Rent Executive sprinter </a></h6>
                        
                        </div>
                        <div>
                            <h5 class="text-gold">Party buses</h5>
                            <p>
                                Celebrate on wheels with your friends and turn any street into a dance floor with party buses equipped with all party needs.
                                </p>
                                <p>Rent your party bus with the best rental limousine from Bright Empire and let the party start.</p>
                                <h6 class="text-center"><a href="{{ route('system.reservation') }}" class="text-gold ">Rent Party Bus </a></h6>
                        

                        </div>
                        <div>

                            <h5 class="text-gold">SUVs:</h5>
                           <p>Enjoy your family travels and airport transfers with SUVs limos the family-friendly vehicles</p>
                             <p><span class="fs-5">Mini SUV:</span>  a small SUV with extra space than sedan cars
                                It can accommodate up to 5 passengers like Cadillac XT6 and Lincoln Aviator.
                                
                                </p>
                                <p><span class="fs-5">Luxury SUV and premium SUV:</span> larger than mini SUV and accommodates up to 6-7 passengers such as GMC Yukon, Chevy Suburban, Cadillac Escalade, and Lincoln Navigator.</p>
                                  <p>Travel with your family in an SUV at the best price offered by Bright Empire.</p>
                                  <h6 class="text-center"><a href="{{ route('fleets','Mini-SUV') }}" class="text-gold ">Rent Mini SUV </a></h6>
                        
                                  <h6 class="text-center"><a href="{{ route('fleets','luxury-suv') }}" class="text-gold ">Rent LUXURY SUV</a></h6>
                        
                                  <h6 class="text-center"><a href="{{ route('fleets','premium-SUV') }}" class="text-gold ">Rent Premium SUV </a></h6>

                                  <figure>
                                    <img src="{{ asset('frontend/assets/images/blogs/affordable price for a limo-2.jpeg') }}" alt="limousine"
                                        class="w-100 ">
                                </figure>
                                <p>Rent a limo Prices may vary according to the limo car model, how far the destination is, and the renting period.</p>
                           
                           <p>so, questions like what is the cost to rent a limo from New York City to Brooklyn Car Service?, how much is car service from Boston to NYC? How long does it take to get from NY to Boston by car?</p>
                           <p>can be specifically determined when you contact the limousine service provider.</p>
                           <p>Don't hesitate to contact us and ask all your questions</p>
                           <h6 class="text-center"><a href="{{ route('contact.show') }}" class="text-gold ">Contact Us</a></h6>
                        
                            </div>

                        <div>

                            <h5 class="text-gold">Chauffeur service:</h5>
                            <p>Feel unmatched comfort with our chauffeur service:</p>
            <p>
                Enjoy your journey, never mind the traffic or the hustle of driving a car along the way and let our chauffeurs take the hassle out of you.
                </p>
                <p>
                    Our chauffeurs are experienced local chauffeurs who are familiar with New York City streets and will do their best to give a great experience in an NYC limo.
                    </p>
                        </div>

                        <div>
                            <h5 class="text-gold">How to rent a limo? How do you call a car service in NYC?</h5>
                            <p>The limo rental process includes determining :</p>
                            <ul class="bg-none dotted-list">
                                <li>how long is your journey with the limousine?</li>
                                <li>The rental period.</li>
                                <li>How many passengers?</li>
                                <li>The limousine type.</li>
                                <li>Whether you want chauffeur service or not.</li>
                            </ul>
                           <p>After determining your appropriate vehicle that caters to your needs don’t forget to ask about your limo amenities and view the car you are getting picked up in.</p>
                                <p>Don't hesitate to ask about the reservation and cancellation policy.</p>
                                <p>If you are going to book a limousine for an event, ask if there are event packages.</p>
                                <p>Navigate all around New York City affordably in luxury limousine service with Bright Empire and choose your favourite limo from our prestigious and classy fleet.</p>
                            </div>
                        <div class="text-center">
                            <a href="{{ route('system.reservation') }}" class="btn main-btn">Reserve Your Limo Today </a>

                        </div>
                    </div>
                </div>
            </div>
            @include("frontend.blogs.related-posts")

        </div>
    </div>
</section>
@endsection