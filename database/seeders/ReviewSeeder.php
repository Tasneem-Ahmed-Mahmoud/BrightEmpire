<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $reviews = [
            ["name" => "Anna Marie Asaro", "message" => "So so good experience I have used them numerous times never disappoint", "image" => "_1.png", "alt" => "client 1"],
            ["name" => "Kate F", "message" => "Bright Empire Limousine provided excellent car services when we needed help for a round trip between Newark International Airport, NJ and Long Island, NY. Adam was a friendly, professional, and safe driver. The car was very clean and comfortable. Thank you very much.
            ", "image" => "2.png", "alt" => "client 2"],
            ["name" => "Paige Miller", "message" => " Booked a pick up at LGA for my dad so he wouldn’t have to deal with hectic uber pick up. They were fantastic, great car and great service.
            ", "image" => "3.png", "alt" => "client 3"],
            ["name" => "Marilyn Flinchum", "message" => "  A fabulous car service. I I’ve been a customer for many years and travel worldwide, using many drivers.  I can say, without reservation, just great on all levels. Five stars.
            ", "image" => "4.png", "alt" => "client 4"],
            ["name" => "Doug Tomlinson", "message" => " We had five ladies, heading to New York City for our first visit to see Times Square and attend Broadway musicals. This is a five star PLUS limousine service! All our drivers were wonderful, conversed with us, shared information about the city. We will definitely call them on our next visit.
            ", "image" => "5.png", "alt" => "client 5"],
        ];

        foreach ($reviews as $review) {
            DB::transaction(function () use ($review) {
                $res = Review::create([
                    'name' => $review['name'],
                    'message' => $review['message'],

                ]);
                $res->image()->create([
                    'name' => $review['image'],
                    'alt' => $review['alt']
                ]);
            });
        }
    }
}
