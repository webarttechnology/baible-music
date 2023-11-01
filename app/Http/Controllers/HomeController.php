<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album;
use App\Models\Registration;
use Illuminate\Support\Str;
use App\Models\Order;
use Illuminate\Support\Facades\Hash;
use PHPUnit\Framework\Constraint\Count;
use Illuminate\Support\Facades\Redirect;
use Mail;
use Config;
use DB;
use Session;

class HomeController extends Controller
{

  
    
    public function home(Request $request){
        if($request->method() == 'GET'){
            $album =Album::where('category_id',1)->limit(4)->get();
            return view('frontend.home',['album'=>$album]);
        }
    }

    public function login(Request $request){
        if($request->method() == 'GET'){
            return view('frontend.login');
        }else if($request->method() == 'POST'){
            $request->validate([
                'email_id'  =>'required|email',
                'password'  =>'required|min:8',
             ]);
             $loginData = Registration::where('email_id',$request->email_id)->first();
             //print_r($loginData);die;
             if($loginData != ''){
                if(Hash :: check($request->password, $loginData->password)){ 
                    $request->session()->put('usersLoginStatus', true);
                    $request->session()->put('frontendloginID', $loginData['id']);
                    $request->session()->put('frontendemail', $loginData['email_id']);
                    $request->session()->put('frontendname', $loginData['name']);
                  //  echo  $request->session()->get('usersLoginStatus', true);
                    return redirect::to('/christian-music-free');

                }else{
                    return redirect::to('/login')->with('errmsg',Config::get('constants.PASSWORD_ERROR'))->withInput($request->all);
                }

             }else{
                return redirect::to('/login')->with('errmsg',Config::get('constants.EMAIL_ERROR'))->withInput($request->all);
             }
        }
    }



     public function registration(Request $request){
        if($request->method() == 'GET'){
            return view('frontend.registration');
        }else if($request->method() == 'POST'){
            $request->validate([
                'name' =>'required|string',
                'email_id'  =>'required|email',
                'password'  =>'required|min:8',
                'con_password' =>'required|min:8|same:password',
             ]);
             $duplicateEmailCheck = Registration::where('email_id',$request->email_id)->count();
             if($duplicateEmailCheck == 0){
                    $hashedpassword = Hash :: make($request->password);
                    $registration = new Registration([
                        'name' =>$request->name,
                        'email_id' =>$request->email_id,
                        'password'=>$hashedpassword,
                    ]);
                    if($registration->save()){
                        return redirect::to('/login')->with('successmsg', "Registration Successful.");
                    }
                }else{
                    return Redirect::to('/registration')-> with('errmsg',"Email Id Already Register")->withInput($request->all);
                }
        }
    }


    public function logout(Request $request){
       Session::forget('usersLoginStatus');
        return redirect::to('/');

    }

    public function payment(Request $request){
        return view('pay');

    }

    public function contactus(Request $request){
        if($request->method() == 'GET'){
            // $album =Album::where('category_id',1)->limit(4)->get();
            $detail = \DB::table('companies')->first();
            return view('frontend.contact-us', compact('detail'));
        }
    }

      public function benefits(Request $request){
        if($request->method() == 'GET'){
            // $album =Album::where('category_id',1)->limit(4)->get();
            return view('frontend.benefits');
        }
    }

    public function testimonial(Request $request){
        if($request->method() == 'GET'){
            // $album =Album::where('category_id',1)->limit(4)->get();
            return view('frontend.testimonial');
        }
    }



   
}
