<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album;
use App\Models\Category;
use App\Models\Song;
use Illuminate\Support\Str;
use Mail;
use Config;
use App\Models\Scripture_songs_i;

class MusicController extends Controller
{
    public function christianMusic(Request $request){
        if($request->method() == "GET"){
            $category = Category::all();
            $album =Album::where(['isActive'=> "1"])-> get();
            return view('frontend.christian-music',["album"=>$album,'category'=>$category]);
        }
    }

    public function albumgetByID(Request $request,$slug_name=""){
        if($request->method() == "GET" || $slug_name != ''){
             $album =Album::where(['slug_name'=> $slug_name])->orderBy('id', 'asc')->first();
             $related_song =Album::where(['category_id'=> $album->category_id])->where('id','!=',$album->id)->limit(4)->get();
             $songs = Song::all();
             //$albumdata = Scripture_songs_i::orderBy('id', 'asc')->get();
             return view('frontend.album-details',["album"=>$album,'songs'=>$songs,'related_song'=>$related_song]);
        }
    }
}
