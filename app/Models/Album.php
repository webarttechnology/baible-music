<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;
     protected $fillable = ['category_id', 'pageheading', 'title', 'details','details2','image','testimonial','isActive','slug_name'];

      public function song(){
    	return $this->hasMany(Song::class);
    }

      public function product(){
    	return $this->hasMany(Product::class);
    }
    
     public function songbook(){
    	return $this->hasMany(Songbook::class);
    }


     public function order(){
    	return $this->hasMany(Order::class);
    }

    public function category(){
    	return $this->belongsTo(Category::class);
    }
}
