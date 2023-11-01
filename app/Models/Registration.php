<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    use HasFactory;
     protected $fillable = ['name','email_id','password','is_active'];
     
       public function order(){
    	return $this->hasMany(Order::class);
    }
}
