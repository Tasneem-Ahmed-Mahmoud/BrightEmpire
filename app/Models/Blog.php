<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blog extends Model
{
  use HasFactory;
  protected $fillable = ["title", "content", "description",'blog_category_id'];
  const PATH = "images/blogs/";

  public function seo(): MorphOne
  {
    return $this->morphOne(Seo::class, 'seoable');
  }
  public function image(): MorphOne
  {
    return $this->morphOne(Image::class, 'imageable');
  }

  function blog_category(){
    return $this->belongsTo(BlogCategory::class);
  }
}
