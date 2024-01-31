<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\BlogCategory;
class BlogCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $blogCategories=[
            ["name"=>"category-1"],
            ["name"=>"category-2"],
            ["name"=>"category-3"],
        ];


        foreach($blogCategories as $category){
            BlogCategory::create(["name"=>$category['name']]);
        }
    }
}
