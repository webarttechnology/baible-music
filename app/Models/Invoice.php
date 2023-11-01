<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
     protected $fillable = ['invoice_no','order_no','pay_amt','payment_status','payment_id','payment_option'];

    public function order(){
    	return $this->hasMany(Order::class);
    }


}
