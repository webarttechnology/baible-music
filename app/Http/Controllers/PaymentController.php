<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//use Srmklive\PayPal\Services\ExpressCheckout;
use Epmnzava\PaypalLaravel\PaypalLaravel as Paypal;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use App\Models\Invoice;
use Carbon\Carbon;
use App\Models\Company;
use App\Models\Order;
use App\Models\Card;
use Jackiedo\Cart\Facades\Cart;
use Session;
use Mail;
class PaymentController extends Controller
{
      public function payment(Request $request){

        $orderDetails = Invoice::where('invoice_no', $request -> session() -> get('invoiceno'))->first();
        $paypal_payments=new paypal;    
        $amount = $orderDetails->pay_amt;
       // $amount = 1;
        $tax = 0.00;
        $shipping= 0;
        $handling_fee=1;
        $description="Scripture Song";  
        $response=$paypal_payments->CreatePayment($amount, $tax, $shipping, $handling_fee, $description);
        $payment_id=$response["payment_id"];
        $payment = Invoice::where(['id' => $orderDetails->id])-> update([
            'payment_status' => "0"  ,
            'pay_amt' =>intval($amount),
            'payment_id'=>$payment_id,
            'payment_option' =>"Paypal"]);
        
        return redirect($response["checkout_link"]);
    }

    public function success(Request $request){

        $paypal=new Paypal;
        $response=$paypal->executePayment($request->paymentId,$request->PayerID);
        $resposeArray = json_decode($response);
        // echo "<pre/>";
        // print_r($resposeArray);
        // die;
        $order_no =Invoice::where('invoice_no', $request -> session() -> get('invoiceno'))->first();
         $updatePaymentstatus = Invoice::where(['payment_id' => $resposeArray->id])-> update([
            'payment_status' => "1" 
        ]);
        $order_data =Order::where('invoice_id',$order_no->id)->get(); 
        $multipleorder =Order::where('invoice_id',$order_no->id)->get(); 
       // print_r($order_data);die;
        $emailTo =$order_data[0]->email_id;
        if($resposeArray){
            Cart::name('shopping')->clearItems();
            $payment_option =$order_no ->payment_option=="Paypal"?"PayPal":"Stripe" ;
            // print_r($card_details);die;
             Mail::send('mail.orderDownload', ['order'=>$order_data], function($message) use($emailTo){
                $message->to($emailTo)->subject("Payment Success");
            }); 
   
             $getCompany = Company::where('is_active',1)->first();
            //  $p = "ronatscripturesongs@gmail.com";
          Mail::send('mail.adminmail', ['order'=>$order_data], function($message) use($emailTo){
                $message->to("ronatscripturesongs@gmail.com")->subject(" New Order Notification");
            }); 
            return Redirect::to('thank-you/'.$order_no->invoice_no);
            
          // return view("thankyou",['company'=>$getCompany]);
     }else{
        //  Mail::send('mail-error', ['email_id' => $order_data->email_id,'name' =>$order_data->fname], function($message) use($emailTo){
        //      $message->to($emailTo)->subject("Payment Error");
        //  });
         return view("cancel");   
         // return redirect("/join")-> with('errormsg', "Payment error please try again."); 
     }
        
    }

    public function cancel(Request $request){
         return view("cancel");
    }



    public function thankyou(Request $request,$payment_id){
            if($request->method() == "GET"  ||$payment_id != '' ){
                 $getCompany = Company::where('is_active',1)->first();
                 $invoive =Invoice::where('invoice_no',$payment_id)->first();
             return view("thankyou",['company'=>$getCompany,'invoice_no'=>$invoive]);
            }
            
    }
}
