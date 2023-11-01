<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
     protected $fillable = ['invoice_id','order_no','album_id','product_id','price','quantatity','name','email_id','mobile_no','address1','address2','country','city','state','pincode'];

    public function album(){
    	return $this->belongsTo(Album::class);
    }

    public function invoice(){
    	return $this->belongsTo(Invoice::class);
    }

     public function registration(){
    	return $this->belongsTo(Registration::class);
    }

     public function product(){
    	return $this->belongsTo(Product::class);
    }
}
