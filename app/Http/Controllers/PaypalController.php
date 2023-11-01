<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Epmnzava\PaypalLaravel\PaypalLaravel as Paypal;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use App\Models\Invoice;
use App\Models\Order;
use App\Models\Product;
use App\Models\Company;
use Mail;
use Session;

class PaypalController extends Controller
{
    public function success(Request $request,$pid = ''){
     if($request->method() == 'GET' || $pid != ''){

         $getProductDetails = Product::where('product_id',$pid)->first();
         $order = new Order([
                      'order_no' =>'',
                      'album_id'=>$getProductDetails->album_id,
                      'product_id'=>$getProductDetails->id,
                      'registration_id'=>$request->session()->get('frontendloginID')
                  ]);
          if($order->save()){
                      $lastId = $order -> id;
                      if(strlen($lastId) == 1){
                          $invoiceNO = 'IN00000'.$lastId;
                          $orderID ='ORD00000'.$lastId;
                      }else if(strlen($lastId) == 2){
                          $invoiceNO = 'IN0000'.$lastId;
                          $orderID ='ORD0000'.$lastId;
                      }else if(strlen($lastId) == 3){
                          $invoiceNO = 'IN000'.$lastId;
                          $orderID ='ORD000'.$lastId;
                      }else if(strlen($lastId) == 4){
                          $invoiceNO = 'IN00'.$lastId;
                          $orderID ='ORD00'.$lastId;
                      }else if(strlen($lastId) == 5){
                          $invoiceNO = 'IN0'.$lastId;
                          $orderID ='ORD0'.$lastId;
                      }else if(strlen($lastId) == 6){
                          $invoiceNO = 'IN'.$lastId;
                          $orderID ='ORD'.$lastId;
                      }

                      $update_data = Order::where('id', $lastId)->update([
                          'order_no' =>$orderID,
    
                      ]);
                     
        }
        $emailTo =  $request->session()->get('frontendemail');
        $orderDetails = Order::where('id', $lastId)->first();
        if($getProductDetails->type == 'CD'){
            Mail::send('mail.orderplace', ['order'=>$getProductDetails,'userNmae'=>$request->session()->get('frontendname')], function($message) use($emailTo){
                $message->to($emailTo)->subject("Payment Success");
            });
        }else{
             Mail::send('mail.orderDownload', ['order'=>$getProductDetails,'userNmae'=>$request->session()->get('frontendname')], function($message) use($emailTo){
                $message->to($emailTo)->subject("Payment Success");
            }); 
        }

        $getCompany = Company::where('is_active',1)->first();
        //  $p = "ronatscripturesongs@gmail.com";
          Mail::send('mail.adminmail', ['order'=>$orderDetails,'product_type'=>$getProductDetails], function($message) use($emailTo){
                $message->to("ronatscripturesongs@gmail.com")->subject(" New Order Notification");
            }); 
        
        return view("thankyou",['company'=>$getCompany]);
    }
    }

    public function cancel(Request $request){
         //echo "cancel";die;
             return view("cancel");
    }
}
