<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

class ContactManageController extends Controller
{
    public function send_msg(Request $request){
            // send email
            // dd($request->all());
            // $msg = "biblemusic4me@gmail.com";
            $msg = "Name - ".$request->name ."  Email - ".$request->email."  Website - ".$request->Website."  Comment - ".$request->comment;
            mail("biblemusic4me@gmail.com","New Contact enquiry", $msg);
            return redirect()->back()->with('errmsg',"Mail send to admin");
    }
}