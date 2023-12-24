<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $categories = [
            [
                'name' => 'Limo Service',
                'title'=>"LIMOSINE SERVICES",
                'description' => "We treat our drivers as a family and not just as partners and we share an excellent personalized relationship with them. We always listen to our drivers and our customers to ensure that all parties (customers and drivers) are happy with our service.",
                "url" => "limo-service",
                "seo_title" => "limosine services decades and years",
                "seo_description" => "Luxurious. Comfortable. limousine service in New York. limosine services decades and years, limo service nyc and airport transfer nyc"
            ],

            [
                'name' => "Airport Car Service",
                'title'=>"Airport Transfers:",
                'description' => "Arrive in style and comfort with our NYC limo airport transfer services.

                We provide prompt and reliable transportation to and from all major airports in the New York City area, including John F.
                
                Kennedy International Airport (JFK), LaGuardia Airport (LGA), and Newark Liberty International Airport (EWR).
                
                Our chauffeurs will track your flight, ensuring an on-time pickup and drop-off for a hassle-free travel experience.",
                "url" => "airport-car-service",
                "seo_title" => "nyc airport shuttle",
                "seo_description" => "nyc airporter shuttle"
            ],

            [
                'name' => "Point To Point Transfer",
                'title'=>"Point To Point Limousine Service",
                'description' => "
               
                Point-to-point limousine service is a chauffeur service that provides transportation from one specific location to another.
                
                it requires reliable and comfortable transportation to your specific destination.
                
                which you will find in Bright Empire , it offers a higher level of luxury and professionalism, with well-maintained and comfortable vehicles, trained and experienced chauffeurs, and personalized service tailored to the needs of each client.
                
                it is designed to make transportation convenient, comfortable, and stress-free, allowing passengers to relax and focus on their destination without worrying about traffic, directions, or parking.
                
                The cost of point-to-point limousine service varies depending on several factors, such as the distance between the pickup and drop-off locations, the type of vehicle selected, and any additional services or amenities requested by the client.
                
                However, many clients find the cost to be reasonable, especially considering the level of comfort, convenience, and peace of mind that the service provides.",
                "url" => "point-to-point",
                "seo_title" => "point to point",
                "seo_description" => "Luxurious. Comfortable. limousine service in New York. An exceptional experience in your journey with luxury car service nyc, limo service nyc and airport transfer nyc"
            ],
            [
                'name' => "Book By Area",
                'title'=>"City-To-City Ground Transportation",
                'description' => "You can travel from New York to any nearby city, airport, town, or village. Some of the most popular destinations for long-distance travelers are",
                "url" => "book-by-area",
                "seo_title" => "City-To-City Ground Transportation",
                "seo_description" => "Luxurious. Comfortable. Professional. A premium limousine service in New York. An exceptional experience in your journey with elegance and luxury."
            ],
        ];


        foreach ($categories as $category) {
            DB::transaction(function ($query) use ($category) {
                $main = Category::create([
                    'name' => $category['name'],
                    'description' => $category['description'],
                    'title'=>$category['title']
                ]);

                $main->seo()->create([
                    'title' => $category['seo_title'],
                    'description' => $category['seo_description'],
                    'url' => $category['url']
                ]);
            });
        }
    }
}
