<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use Session;
use App\Models\Author;
use App\Models\Order;


class DashboardController extends Controller
{
    
    public function index(Request $request){

            if($request -> method() == 'GET'){
               $order = Order::all();
                return view('admin.dashboard',['order'=>$order]);
            }
    }

      public function order(Request $request){

            if($request -> method() == 'GET'){
              $order = Order::all();
                return view('admin.order',['order'=>$order]);
            }
    }
    
     // update password..

    public function update_pass_page()
    {
           $details = Author::where('email_id', Session::get('email_id'))->first();
           return view('admin.update_password', compact('details'));
    }

    public function update_pass(Request $request, $id)
    {
           $request->validate([
                 'new_pass' => 'required|min:8|max:100',
                 'conf_pass' => 'required|same:new_pass'
           ],[
                  'new_pass.min' => 'New Password Must be 8 charecter long',
                  'new_pass.max' => 'New Password Must be less than 100 charecter long',
            ]);

           Author::whereId($id)->update([
                'password' => bcrypt($request->new_pass),
           ]);

           return back()->with('change_pass', 'Password Updated Succesfully');
    }
}
