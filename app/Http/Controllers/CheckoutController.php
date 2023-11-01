<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use App\Models\Invoice;
use App\Models\Order;
use Jackiedo\Cart\Facades\Cart;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Hash;
use PHPUnit\Framework\Constraint\Count;
use Config;
use Validator;
use Mail;
use Session;
use DB;

class CheckoutController extends Controller
{
     public function checkout(Request $request){     
        if($request -> method() =='GET') { 
            
                // echo "<pre/>";
                // print_r($country_list);die;
            
            $items = Cart::name('shopping')->getItems();
            if(count($items) != 0){
                $newarray =[];
                foreach ($items as  $item) {
                      
                    $newarray[] =[
                        'id' =>$item->getId(),
                        'price' =>$item->getPrice(),
                        'title' =>$item->getTitle(),
                        'quantatity' =>$item->getQuantity(),
                        'option' =>$item->getOptions(),
                        'extra_info' =>$item->getExtra_info(),
                        'hash' =>$item->getHash(),
                    ];
                
                } 
                return view('frontend.checkout',['addtocart' =>$newarray]);
            }else{
                return Redirect::to('christian-music-free');
            }
        }else if($request ->method() == 'POST'){

          // print_r($request->post());die;

          $items = Cart::name('shopping');   
          $getItems = $items -> getItems();
          foreach($getItems as $key => $val){          
              $tolalamount =$items-> getDetails() -> get('total');
          }  
          if(count($getItems) != 0){
                $request->validate([
                    'email_id'  =>'required|email',
                    'fname'  =>'required',
                    'lname'  =>'required',
                    'address1' =>'required',
                    'country' =>'required',
                    'city' =>'required',
                    'state' =>'required',
                    'pincode' =>'required',
                    'payment_option' =>'required',
                    
                ]);
               
                $lastinvoiceno =Invoice::orderBy('id', 'DESC')->first();
                
            
                $invoice = new Invoice([
                    'pay_amt' =>$tolalamount,
                    'payment_status'=>"0",
                    'payment_option'=>$request->payment_option,
                    'invoice_no' =>'',
                ]);
                
              
                if( $invoice -> save()){
                    $lastId = $invoice -> id;
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
                
                    $update_data = Invoice::where('id', $lastId)->update([
                        'invoice_no' =>$invoiceNO,
                        'order_no' =>$orderID
                    ]);
                
                        if($update_data){
                            $card_details = Cart::name('shopping')->getItems();
                            // echo "<pre/>";
                            // print_r($card_details);die;
                            foreach ($card_details as  $item) {                           
                                $price =$item->getExtra_info();
                                $option =$item->getOptions();
                                $order = Order::create([
                                    'invoice_id' =>$lastId,
                                    'email_id' =>$request->emailid,
                                    'product_id' =>$item->getId(),
                                    'name' =>$request->fname ." ".$request->lname,
                                    'email_id' =>$request->email_id,
                                    'mobile_no' =>$request->mobile_no,
                                    'address1' =>$request->address1,
                                    'address2' =>$request->address2,
                                    'country' =>$request->country,
                                    'city' =>$request->city,
                                    'price' =>$item->getPrice(),
                                    'quantatity'=>$item->getQuantity(),
                                    'pincode' =>$request->pincode,
                                    'state' =>$request->state
                                ]);
                            
                            }if($order){
                                // Cart::name('shopping')->clearItems();
                                $request -> session() -> put('invoiceno', $invoiceNO);
                                if($request->payment_option == "Paypal"){
                                   return Redirect::to('payment');
                                }else{
                                   return Redirect::to('stripe-payment');
                                }
                                //return redirect::to('handle-payment');
                                
                            }
                        
                        }
                    
                }
            }else{
                return Redirect::to('cart');
            }



        }

    }



       public function getcheckotOrdersummery(){

        $items = Cart::name('shopping');   

    
        $totalSave = 0;
        $getItems = $items -> getItems();
        $product = '';
        foreach($getItems as $key => $val){ 
            $quantity = $items -> getDetails() -> get('items') -> get($key) -> get('quantity');            
            
             $tolalamount =$items-> getDetails() -> get('total');
             
             $product = $product . '<div class="d-flex justify-content-between">
                           <p>'.$val->getTitle().'('.$val->getQuantity().')</p>
                           <p>$'.$val->getPrice().'</p>
                        </div>';
            
        }  

        echo ' <div class="border-bottom">
                        <h6 class="mb-3">Products</h6>
                         '.$product.'
                     </div>
                     <div class="border-bottom pt-3 pb-2">
                        <div class="d-flex justify-content-between mb-3">
                           <h6>Subtotal</h6>
                           <h6>$'.$tolalamount.'</h6>
                        </div>
                        <div class="d-flex justify-content-between">
                           <h6 class="font-weight-medium">Shipping</h6>
                           <h6 class="font-weight-medium">$0.00</h6>
                        </div>
                     </div>
                       <input type="hidden"  id="total_amt" value="'.$items-> getDetails() -> get('total').'" />
                         <input type="hidden"  id="pay_amt" value="'.$tolalamount.'" />
                     <div class="pt-2">
                        <div class="d-flex justify-content-between mt-2">
                           <h5>Total</h5>
                           <h5>$'.$tolalamount.'</h5>
                        </div>
                     </div>';
        

    }

}
