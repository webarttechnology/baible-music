<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
     protected $fillable = ['name','mobile_no','email_id','logo','address','banner_image', 'com_tittle','com_details','is_active', 'image','mobile_no1', 'fax'];
}
