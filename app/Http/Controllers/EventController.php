<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Hash;
use App\Models\Category;
use App\Models\Event;
use Auth;
use Config;

class EventController extends Controller
{

    public function list(Request $request,$key){
        if($request->method() == "GET"){
            if($key == "all"){
                 $event = Event::all();
            }else if($key == "paid"){
                 $event = Event::where("entry_fees","!=",0)->get();
            }else if($key == "free"){
                 $event = Event::where("entry_fees",0)->get();
            }
            $all =Event::all();
            $paid =Event::where("entry_fees","!=",0)->get();
            $free =Event::where("entry_fees",0)->get();
            return view('admin.event-list',['event'=>$event,'title'=>"Event List",'all'=>$all,'paid'=>$paid,'free'=>$free]);
        }
    }

    public function add(Request $request){
        if($request->method() == "GET"){
          $category = Category::all();
          return view('admin.event-add',['title'=>"Event",'category'=>$category]);
        }else if($request->method() == "POST"){
              $event = New Event([
                    'name' => $request ->name,
                    'category_id' => $request->category_id,
                    'description'=>$request->description,
                    'max_person' => $request->max_person,
                    'start_date'=>$request->start_date,
                    'end_date'=>$request->end_date,
                    'event_time'=>$request->event_time,
                    'entry_fees'=>$request->entry_fees,
                    'is_active' =>"1"
                ]);
                if($event->save()){
                     return Redirect::to('author/event')-> with('successmsg',Config::get('constants.ADD_SUCCESS'))->withInput($request->all);
                }else{
                     return Redirect::to('author/event/add')-> with('errmsg',Config::get('constants.ADD_ERROR'))->withInput($request->all);
                }
        }
    }
 


    public function eventbooking_action(Request $request){
        if($request->method() == "GET"){
             $organization = Organization::where('verified_status',1)->get();
             return view('parents.event-booking', ['title'=>"Event Booking",'organization'=>$organization]); 
        }else if($request->method() == "POST"){

        }
    }
}
