<?php

namespace Database\Seeders;

use App\Models\Fleet;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FleetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    $description="Luxurious. Comfortable. limousine service in New York. An exceptional experience in your journey with luxury car service nyc, limo service nyc and airport transfer nyc";
      $fleets=[

            [
                'name'=>"Stretch Escalade/ H2",
                'description'=>"There’s no such thing as too much of a good thing.

                It always leaves you wanting more.
                
                And our 20-passenger Cadillac Escalade stretch SUV limo is no exception.
                
                While a standard Cadillac Escalade epitomizes luxury and sophistication, our Cadillac Escalade stretch SUV limo amps up the fun .
                
                big time! The high-output premium audio/video entertainment system, LED ceiling and floor lighting and laser and strobe effects will have you rockin’ down the road.
                
                And the RGB ground effects lighting and jet door will help ensure you make a grand entrance.
                
                So if you're looking to get the party started before the party, then the Cadillac Escalade stretch SUV limo is the only way to travel.
                
                ",
                'photo'=>'Stretch-EscaladeH2.jpeg',
                "alt"=>"ESCALADE STRETCH",
                "url"=>"stretch-escalade",
                "title"=>"ESCALADE STRETCH",
                "seo_description"=>$description,
                "features"=>[
                    ["name"=>"20 Passengers"],
                    ["name"=>"Luggage 3-4 Large Or 4-5 Small"],
                    ["name"=>"Plush Leather Seating"],
                    ["name"=>"AM/FM Stereo & C/D Player"],
                    ["name"=>"Privacy Partition - Color T.V"],
                    ["name"=>"Fiber Optic Lighting"]
                ]
                ],


       [
        'name'=>'luxury SUV',
        'description'=>'The GMC Yukon and Chevy Suburban, the best luxurious SUV by any standards can accommodate 6 to 7 passengers with luggage.

        All of our SUV’s have black exterior and interior.
        
        Let us be your central point of contact for all of your limo transportation needs.
        
        SUV are considered business and family friendly vehicle because It has of all those necessary features which you need during your trip to feel the comfort and luxury.
        
        Bright Empire Limousine offers 24-hour, 7 days a week luxury SUV service availability.',
        'photo'=>'luxury-SUV.jpg',
        'alt'=>'luxury-suv',
        'url'=>"luxury-suv",
        'title'=>'luxury suv',
        "seo_description"=>$description,
        'features'=>[
            ['name'=>'6-7 Passengers'],
            ['name'=>'Luggage 8-10 Small or 7-8 Large'],
            ['name'=>'Plush leather seating'],

            ['name'=>'Rear Armrest and Drink Holders'],
            ['name'=>"AM/FM Stereo & CD player"]
        ]

        ],

      








                [
                    'name'=>"luxury sedan",
                    'description'=>"Sedans are the most demanded car by the customers nowadays we have a wide range of sedan in our fleet like Cadillac, Chrysler 300, Lincoln, Lexus and other luxury sedan cars.

                    All sedan cars has features like Black Leather Seats, WiFi Capable, USB Ports, Rear Cup Holders, Heated/Cooled Seats depending on model , Wireless Charging Pad, Bluetooth, etc.
                    
                    Our Luxury sedans can fit 1-4 passengers with up to 3-4 piece of luggage depending on the size.
                    
                    Bright Empire Limousine offers 24-hour, 7 days a week sedan service availability.",
                    "photo"=>"luxury-sedan.jpg",
                    "alt"=>"luxury sedan",
                    "url"=>"luxury-sedan",
                    "title"=>"luxury sedan",
                    "seo_description"=>$description,
                    "features"=>[
                        ["name"=>"1-4 passengers"],
                        ["name"=>"Luggage 1-2 Large or 2-3 Small"],
                        ["name"=>"Plus leather seating"],
                        ["name"=>"Dual Illuminating Vanity Mirrors"],
                        ["name"=>"Rear Armrest and Drink Holders"],
                        ['name'=>"AM/FM Stereo & CD player"]
                        
                    ]
                    ],





                    [
                        'name'=>"Premium SUV",
                        'description'=>"The top notch of luxury and comfort you will ever feel while riding an premium SUV like Cadillac Escalade and Lincoln Navigator is no where other than this category.

                        This premium cars can accommodate 6 to 7 passengers with luggage.
                        
                        Let us be your central point of contact for all of your limo transportation needs.
                        
                        Bright Empire Limousine offers 24-hour, 7 days a week premium luxury service availability.",
                        "photo"=>"Premium-SUV.webp",
                        "alt"=>"Premium SUV",
                        "url"=>"premium-SUV",
                        "title"=>"Premium SUV",
                        "seo_description"=>$description,
                        "features"=>[
                            ["name"=>"6-7 Passengers"],
                            ["name"=>"Luggage 8-10 Small or 7-8 Large"],
                            ["name"=>"Plush leather seating"],
                            ["name"=>"Rear Armrest and Drink Holders"],
                            ["name"=>"Heated back seats"]
                        ]
                        ],



                        [
                            'name'=>"Executive sprinter",
                            'description'=>"In our fleet We have a Mercedes Sprinter Van and Ford Sprinters, Our Vans offers comfortable seating arrangements that can accommodate up to 14 passengers.

                            Whether traveling with family or friends, booking one of the sprinters will do the job for you.
                            
                            We have a Mercedes Sprinter Van, it can accommodate up to 11 passengers with a lot of luggage space (2 medium size bags each).
                            
                            We also have 14 Passengers Mercedes Sprinter, which can accommodate up to 14 passengers with luggage space of 14 medium size bags.
                            
                            We have Ford Transit Sprinters Van, it can accommodate up to 11 passengers with a lot of luggage space (2 medium size bags each).
                            
                            We also have 14 Passengers Ford Transit Sprinter, which can accommodate up to 14 passengers with luggage space of 14 medium size bags.",
                            "photo"=>"Executive-sprinter.jpg",
                            "alt"=>"Executive sprinter",
                            "url"=>"Executive-sprinter",
                            "title"=>"Executive sprinter",
                            "seo_description"=>$description,
                            "features"=>[
                                ["name"=>"11-14 passengers"],
                                ["name"=>"Luggage 10-12 Large or 12-14 Small"],
                                ["name"=>"Forward Facing Seating"],
                                ["name"=>"AM/FM Radio"]
                               
                            ]
                            ],





                            [
                                'name'=>"Stretch Limousine",
                                'description'=>"Stretch limo is a perfect solution for every event or occasion like weddings, bachelorette parties, proms, homecoming and birthdays,s …etc.

                                The stretch limo is every which you want.
                                
                                Our stretch limo provides you intimate seat capacity of up to 8 passengers enough trunk space for your luggage.
                                
                                It provides you lush leather seats and a BYOB beverage station full of ice, water, and glasses for your convenience are just the beginning of all these stretch features and many more.
                                
                                ",
                                "photo"=>"Stretch-Limousine.jpg",
                                "alt"=>"Stretch Limousine",
                                "url"=>"Stretch-Limousine",
                                "title"=>"Stretch Limousine",
                                "seo_description"=>$description,
                                "features"=>[
                                    ["name"=>"6-8 Passengers"],
                                    ["name"=>"Luggage 2-3 Large Or 3-4 Small"],
                                    ["name"=>"Plush Leather Seating"],
                                    ["name"=>"AM/FM Stereo & C/D Player"],
                                    ["name"=>"Privacy Partition - Color T.V"],
                                    ["name"=>"Fiber Optic Lighting"]
                                ]
                                ],



                           

            


                                    
            [
                'name'=>"Mini SUV",
                'description'=>"For those who want an extra space more than sedan and not the full size SUV , we offer our mid size SUV like Cadillac Xt6, Lincoln aviator and similar models.

                These mid size SUV cars can accommodate up to 5 passengers with luggage.
                
                All of our cars have black interiors and exteriors.
                
                Let us be your central point of contact for all of your transportation needs.
                
                Bright Empire Limousine offers 24-hour, 7 days a week Mini SUV service availability.",
                "photo"=>"Mini-SUV.jpg",
                "alt"=>"Mini SUV",
                "url"=>"Mini-SUV",
                "title"=>"Mini SUV",
                "seo_description"=>$description,
                "features"=>[
                    ["name"=>"5 Passengers"],
                  
                    ["name"=>"Luggage 6-8 Small or 4-6 Large"],
                    ["name"=>"Plush leather seating"],
                    ["name"=>"Rear Armrest and Drink Holders"],
                    ['name'=>"AM/FM Stereo & CD player"]
                ]
                ],

                [
                    'name'=>"Premium Sedan",
                    'description'=>"For those who want an extra degree of luxury, we offer a Mercedes S-class and Tesla model S.
        
                    These premium sedan cars accommodate up to 3 passengers with luggage.
                    
                    All of our sedans have black interiors and exteriors.
                    
                    Let us be your central point of contact for all of your sedan transportation needs.
                    
                    Bright Empire Limousine offers 24-hour, 7 days a week premium sedan service availability.",
                    "photo"=>"Premium-Sedan.png",
                    "alt"=>"Premium Sedan",
                    "url"=>"premium-sedan",
                    "title"=>"Premium Sedan",
                    "seo_description"=>$description,
                    "features"=>[
                        ["name"=>"1-4 passengers"],
                        ['name'=>"2-3 medium sized bags"],
                        ['name'=>"Plush leather seating"],
                        ['name'=>"Dual Illuminating Vanity Mirrors"],
                        ["name"=>"Rear Armrest and Drink Holders"],
                        ['name'=>"AM/FM Stereo & CD player"]
                    ]
                    ],
  
]
;

foreach($fleets as $fleet){


    DB::transaction(function () use ($fleet) {
        $res = Fleet::create([
            'name' => $fleet['name'],
            'description' => $fleet['description'],
            'photo' => $fleet['photo'],
            'alt' => $fleet['alt']
        ]);
        foreach($fleet['features'] as $feature){
         
            $res->features()->create([
              'name'=> $feature['name']
            ]);
        }

        $res->seo()->create([
            'title' => $fleet['title'],
            'description' => $fleet['seo_description'],
            'url' => $fleet['url'],
        ]);
    });





}
        
    


        }
}
