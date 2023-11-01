<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Album;
use App\Models\Song;
use App\Models\Songbook;
use App\Models\Product;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Hash;
use PHPUnit\Framework\Constraint\Count;
use Config;
use Validator;
use Mail;
use Session;

class AlbumController extends Controller
{
    public function list(Request $request){
        if($request -> method() == 'GET'){
            $albumsList = Album::where(['isActive'=> "1"])-> get();
            // echo "<pre/>";
            // print_r($albumsList[0]->song);die;
            return view("admin.album.list", ['title' => "Albums", 'album' => $albumsList]);
        }else if($request -> method() == 'POST'){

        }else{
            return view('404');
        }
    }

    public function add(Request $request)
    { 
        if($request -> method() == 'GET')
        {
            $category =Category::all();
            return view("admin.album.add", ['title' => "Album","category"=>$category]);
        }else if($request -> method() == 'POST')
        {    
            $songs = $request->post('song_name');
            $song_book = $request->post('song_book');
            $slug_name = Str::slug($request->input('title'));
            $amount =$request->post('amount');
            $song_book =$request->post('song_book');
            $type =$request->post('type');

            $duplicateCategaryCheck = Album::where('title',$request->title)->count();

            if($duplicateCategaryCheck == 0) {
                $random_num = rand(100000,1000);

                $file = $request->file('image');
                $name = $file->getClientOriginalName();
                $path = "uploads/image/";
                $file->move($path, "img_".$random_num.".png");
                $image_name = $path."img_".$random_num.".png";
                $pdf_file = "";
            
                $album = New Album([
                    'category_id' => $request -> category_id,
                    'title' => $request -> title,
                    'pageheading' => $request -> pageheading,
                    'details' => $request ->details ,
                    'details2'=>$request->details2,
                    'testimonial'=>$request->testimonial,
                    'slug_name'=>$slug_name ,
                    'image' => $image_name ,
                ]);

                if($album->save()){
                    // Songs  table insert
                         foreach($songs as $key => $val){
                             if($_FILES['music_file']['name'][$key] != "")
                             {
                                $file = $request->file('music_file')[$key];
                                $name = $file->getClientOriginalName();
                                $path = "uploads/music/";
                                $file->move($path, $key.time().'.mp3');
                                $music_f = $path. $key.time().'.mp3';
                            }
                            else{
                                $music_f = "";
                            }
                            $ropeChain = Song::create([         
                            'album_id' =>$album->id,
                            'name' =>$val,
                            'music_file' => $music_f
                            ]);
                         }

                         // Songs Book table insert
                         foreach($song_book as $key => $val){
                               $book = Songbook::create([         
                                    'album_id' =>$album->id,
                                    'name' =>$val,
                                ]);
                         }


                         // product table insert

                        foreach($amount as $key => $val){
                            if(isset($_FILES['file']['name'][$key])){
                                if($_FILES['file']['name'][$key] != ""){
                                    $file = $request->file('file')[$key];
                                    $name = $file->getClientOriginalName();
                                    $path = "uploads/doc/";
                                    $file->move($path, $type[$key].$key.time().".".$file->getClientOriginalExtension());
                                    $music_f = $path. $type[$key].$key.time().".".$file->getClientOriginalExtension();
                                }
                            }else{
                                    $music_f = "";
                            }
                            
                            $ropeChain = Product::create([         
                                'album_id' =>$album->id,
                                'type' =>$type[$key],
                                'amount' => $amount[$key],
                                'file' => $music_f
                            ]);
                        }
                        if($ropeChain){
                            return Redirect::to('/author/album')-> with('successmsg',Config::get('constants.ADD_SUCCESS'))->withInput($request->all);
                        }
                }else{
                    return Redirect::to('/author/album/add')-> with('errmsg',Config::get('constants.ADD_ERROR'))->withInput($request->all);
                }
            }else{
                return Redirect::to('/author/album')-> with('errmsg',"Already Exist This album")->withInput($request->all);
            }

        }else{
            return view('404');
        }
    }

    

    public function update(Request $request,$id='')
    {
        if($request -> method() == 'GET' || $id != '')
        {
            $categoryName = Category::where(['isActive'=> "1"])-> get();
            $getAlbum = Album::where(['id'=> $id])-> first();
            return view("admin.album.update", ['title' => "Album" ,'category'=>$categoryName,'album'=>$getAlbum]);

        }else if($request -> method() == 'PUT'|| $id != '')
        {     
            
           $getAlbum = Album::where(['id'=> $id])-> first();

             

            $songs = $request->post('song_name');
            $song_id = $request->post('song_id');
            $song_book = $request->post('song_book');
            $song_book_id = $request->post('song_book_id');
            $slug_name = Str::slug($request->input('title'));
           
            $duplicateCategaryCheck = Album::where('title',$request->title)->where('id','!=',$request->album_id)->count();

            if($duplicateCategaryCheck == 0) {
                $random_num = rand(100000,1000);
                
                    // Songs  table insert
                         foreach($songs as $key => $val)
                         {
                             if($_FILES['music_file']['name'][$key] != ""){
                                 $get_file_name = Song::where('id',$song_id[$key])->select('music_file')->get();
                                    foreach($get_file_name as $value){
                                    @unlink($value->music_file);
                                    }
                                $file = $request->file('music_file')[$key];
                                $name = $file->getClientOriginalName();
                                $path = "uploads/music/";
                                $file->move($path, $key.time().'.mp3');
                                $music_f = $path. $key.time().'.mp3';
                                
                                $musicfileupdate = Song::where('id', $song_id[$key])->update([         
                                    'music_file' => $music_f
                                ]);
                                
                            }

                            $ropeChain = Song::where('id', $song_id[$key])->update([            
                                'name' =>$val,
                            ]);
                         }

                        return Redirect::to('/author/album')-> with('successmsg',Config::get('constants.ADD_SUCCESS'))->withInput($request->all);                        
               
                    }else{
                        return Redirect::to('/author/album')-> with('errmsg',"Already Exist This album")->withInput($request->all);
                    }

           
                }else{
                    return view('404');
                }
    }
    

    public function updateFunction(Request $request, $id)
    {
        // Find the album by ID
        $album = Album::with('songbook')->find($id);

        if (!$album) {
            return redirect()->back()->with('errmsg', 'Album not found');
        }

        // Update the album
        $album->update([
            "category_id" => $request->category_id,
            "title" => $request->title,
            "details" => $request->details,
            "details2" => $request->details2,
            "testimonial" => $request->testimonial,
            "slug_name" => Str::slug($request->title),
            "album_id" => $request->album_id,
        ]);

        $song_book = $request->post('song_book');


        $album->songbook()->delete();

        foreach ($song_book as $key => $val) {
            Songbook::create([
                'album_id' => $album->id,
                'name' => $val,
            ]);
        }

        return Redirect::to('/author/album')-> with('successmsg',Config::get('constants.ADD_SUCCESS'));                        
    
    }



    






    public function delete(Request $request,$id=''){
        if($request -> method() == 'GET'|| $id != ''){
            $data =Album ::find($id);
            $delete = $data->delete();
            if($delete){
                return Redirect::to('/author/album')-> with('successmsg',Config::get('constants.DELETE_SUCCESS'))->withInput($request->all);
            }else{
                return Redirect::to('/author/album')-> with('errmsg',Config::get('constants.DELETE_ERROR'))->withInput($request->all);
            }

        }else if($request -> method() == 'POST'){

        }else{
            return view('404');
        }
    }








    

}
