<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use App\Models\Author;
Use Session;

class AdminController extends Controller
{
    
    public function login(Request $request){
        
        if($request -> method() == 'GET'){
            return view('admin.login', ['title' => "Admin Login"]);
        }else if($request -> method() == 'POST'){
            $request->validate([
                'email_id'  =>'required|email',
                'password'=> 'required|min:8'
            ]);

            $query = Author::where('email_id', $request -> input('email_id'));
            if($query -> count() == 1){
                $getpassword = $query -> first();
                if(Hash::check($request -> input('password'), $getpassword -> password)){
                    $request -> session() -> put('email_id', $request -> email_id);
                    $request -> session() -> put('loginStatus', "true");
                    return redirect::to('/author/dashboard');
                }else{
                    return redirect::to('/author')->with('errmsg', "Password does not match!!");
                }
            }else{
                return redirect::to('/author')->with('errmsg', "Email id does not match!!");
            }

        }else{
            return view('404');
        }
    }

    public function register(Request $request){

    }

    public function forgotpassword(Request $request){
        if($request->method() =='GET'){

        }else if($request->method() == 'POST'){
            
        }

    }

    public function changepassword(Request $request){

    }

    public function logout(Request $request){
        Session::forget('loginStatus');
        return redirect::to('/author');
    }
}
