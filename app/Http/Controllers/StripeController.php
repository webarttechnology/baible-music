<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Jackiedo\Cart\Facades\Cart;
use Illuminate\Support\Str;
use App\Models\Invoice;
use App\Models\Company;
use App\Models\Order;
use App\Models\Card;
use Session;
use Stripe;
use Mail;

class StripeController extends Controller
{
     public function handleGet(Request $request)
    {
        if($request->method() == "GET"){
           
            $invoiceno = $request -> session() ->get('invoiceno');
            $invoiceid = Invoice::where('invoice_no',$invoiceno)->first();
            //echo $invoiceid->id;die;
            $totalamount =Invoice::where('id',$invoiceid->id)->first();
            return view('frontend.stripe-payment',['totalamount'=>$totalamount]);
        }
    }

    public function handlePost(Request $request)
    {
        // Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        // Stripe\Charge::create ([
        //         "amount" => 100 * 100,
        //         "currency" => "usd",
        //         "source" => $request->stripeToken,
        //         "description" => "Making test payment." 
        // ]);

        $invoiceno = $request -> session() ->get('invoiceno');
        $invoiceid = Invoice::where('invoice_no',$invoiceno)->first();
        $orderhistory = Order::where('invoice_id',$invoiceid->id)->first();

       // print_r($invoiceid->pay_amt);die;

        $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));

        $product = $stripe->products->create(['name' => 'Bible Music']);


        $price = $stripe->prices->create(
            [
              'currency' => 'usd',
              'product' => $product -> id,
              "unit_amount" =>$invoiceid->pay_amt * 100
            ]
          );
          
          //print_r($price);die;

        $checkout = $stripe->checkout->sessions->create(
            [
              'cancel_url' => url('cancel'),
              'line_items' => [['price' => $price -> id, 'quantity' => 1]],
              'mode' => 'payment',
              'success_url' => url('success'),
            ]
          );

        //   echo "<pre/>";
        //   print_r($checkout);
        //   die;

          $update_data = Invoice::where('id', $invoiceid->id)->update([
            'pay_amt' =>intval($invoiceid->pay_amt),
            'payment_option' =>"Stripe",
           // 'payment_id' =>$checkout['payment_intent']
        ]);

         $request -> session() -> put('payment_id', $checkout['payment_intent']);
          return redirect::to($checkout['url']);
    }

    public function cancel(Request $request){
        $invoice_id =Invoice::where('invoice_no', $request -> session() ->get('invoiceno'))->first();
        $order_data =Order::where('invoice_id',$invoice_id->id)->get(); 
        $emailTo =$order_data[0]->email_id;
        // Mail::send('mail-error', ['email_id' => $emailTo,'name' =>$order_data[0]->fname], function($message) use($emailTo){
        //     $message->to($emailTo)->subject("Payment Error");
        // });
        return view("cancel");
    }

    public function success(Request $request){
        $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));
      //  $payment_id = $request->session()->get('payment_id');die;
        //   echo "<pre/>";
        //  print_r($stripe->paymentIntents);die;
        // $paymentIntent = $stripe->paymentIntents->retrieve($request -> session() -> get('payment_id')); 
        // echo "<pre/>";
        // print_r($paymentIntent);die;
       // $status = $paymentIntent->status;
       // if ($status == 'succeeded' || $status === 'processing') {

             $invoice_id =Invoice::where('invoice_no', $request -> session() ->get('invoiceno') )->first();
            
             $update_data = Invoice::where('invoice_no',$request -> session() ->get('invoiceno'))->update([
                'payment_status' =>"1"
             ]);
            

             $order_no =Invoice::where('id', $invoice_id->id)->first();
             $order_data =Order::where('invoice_id',$invoice_id->id)->get(); 
             $multipleorder =Order::where('invoice_id',$invoice_id->id)->get(); 
            //  $card_details =Card::where('id',$order_data->card_id)->first(); 
            // Session::flash('success', 'Payment Successful !');
            // return back();
             $emailTo =$order_data[0]->email_id;
            if($update_data){
                 //print_r($order_no);die;
                Cart::name('shopping')->clearItems();
                $payment_option =$order_no ->payment_option==2?"Stripe":"PayPal" ;
               
                Mail::send('mail.orderDownload', ['order'=>$order_data], function($message) use($emailTo){
                $message->to($emailTo)->subject("Payment Success");
                }); 
       
               $getCompany = Company::where('is_active',1)->first();
                //  $p = "ronatscripturesongs@gmail.com";
                Mail::send('mail.adminmail', ['order'=>$order_data], function($message) use($emailTo){
                        $message->to("ronatscripturesongs@gmail.com")->subject(" New Order Notification");
                    }); 
             return Redirect::to('thank-you/'.$order_no->invoice_no);
            }
      //  }
    }

}
