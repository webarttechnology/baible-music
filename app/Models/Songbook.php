<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Songbook extends Model
{
    use HasFactory;
    protected $fillable = ['album_id','name','music_file'];
}
