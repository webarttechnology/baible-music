<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
     protected $fillable = ['name', 'isActive', 'slug_name', 'details'];

       public function album(){
    	return $this->hasMany(Album::class);
    }
}
