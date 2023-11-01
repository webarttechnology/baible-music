<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
     protected $fillable = ['album_id','type', 'code', 'amount', 'product_id','file'];

    public function album(){
    	return $this->belongsTo(Album::class);
    }

    public function order(){
    	return $this->hasMany(Order::class);
    }
}
