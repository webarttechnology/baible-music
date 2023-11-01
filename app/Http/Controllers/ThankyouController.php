<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invoice;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Hash;
use PHPUnit\Framework\Constraint\Count;
use Config;
use Validator;
use Mail;
use Session;

class ThankyouController extends Controller
{
     public function thankyou(Request $request,$invoiceid=''){
        if($request->method() == "GET" || $invoiceid != '' ){

            $invoiceNo =Invoice::where('transaction_id',$invoiceid)->first();
    
            return view('thankyou',['invoiceNo'=>$invoiceNo]);
        }

    }
}
