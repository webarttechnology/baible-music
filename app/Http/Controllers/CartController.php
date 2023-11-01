<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Jackiedo\Cart\Facades\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Hash;
use PHPUnit\Framework\Constraint\Count;
use Config;
use Validator;
use Mail;
use Session;
use DB;

class CartController extends Controller
{
    public function cartView(Request $request){
        if($request->method() == 'GET'){
             $items = Cart::name('shopping')->getItems();
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
        // echo "<pre/>";
        // print_r($newarray[0]);die;
        return view('frontend.cart',['addtocart' =>$newarray,'totalitem'=>count($newarray)]);
        }
    }


     public function addItem(Request $request ,array $attributes = [], $withEvent = true){
        $shoppingCart   = Cart::name('shopping');
        $product_id = $request->get('product_id');
        $quantity =$request->get('quantatity');
        $addtocartdetails = Product::where('id',$product_id)->first();

        // print_r($addtocartdetails->album->title);die;

        $productItem  = $shoppingCart->addItem([
            'id'       => $addtocartdetails->id,
            'title'    => $addtocartdetails->album->title,
            'quantity' => $quantity,
            'price'    => $addtocartdetails->amount,   // Final price with discount
            'options' => [
                'size' => [   // Size for Rope chain option
                    'label' => $addtocartdetails->type,
                    'value' => $addtocartdetails->type,
                ],
                // 'color' => [   // Gold Color
                //     'label' => $addtocartdetails['color'],
                //     'value' => $addtocartdetails['color'],
                // ]
            ],
            'extra_info' => [
                'date_time' => [
                    'added_at' => time(),
                ],
                'image' =>[
                    'img' =>$addtocartdetails->album->image,
                ],
                'album_id' =>[
                    'amount' =>$addtocartdetails->album->id,   // Product amount
                ],
            ]

           
        ]);
        
        $hashCode  = $productItem->get('hash');
        $title     = $productItem->get('title');
        $quantity  = $productItem->get('quantity');
        $extraInfo = $productItem->get('extra_info');     
        $items = Cart::name('shopping')->getItems();
        echo count($items);
    //   echo $title;
       
    }

    public function removeItem(Request $request,$id =''){
        if($request -> method() =='GET') { 
            Cart::name('shopping')->removeItem($id);
            return Redirect::to('/cart');
        }
       
    }

    public function getOrdersummery(){

        $items = Cart::name('shopping');   
        $totalSave = 0;
        $getItems = $items -> getItems();
        
        //echo $discountPrice;die;
       
        foreach($getItems as $key => $val){ 
            $quantity = $items -> getDetails() -> get('items') -> get($key) -> get('quantity');            
           // $saveamount = $items -> getDetails() -> get('items') -> get($key) -> get('extra_info') -> get('saveamount');
           // $normaldiscount = $totalSave + $saveamount['saveamount']*$quantity;
            //$totalSave = $totalSave + $saveamount['saveamount']*$quantity + $discountPrice;

            //normal discount
           
            $tolalamount =$items-> getDetails() -> get('total');
            
        } 
        // echo $tolalamount;
        // die;
            echo ' 
                    <h5 class="mt-3 mb-4"><span class="pr-3">Cart Summary</span></h5>
                    <div class="sub-part mb-5">
                        <div class="border-bottom pb-2">
                            <div class="d-flex justify-content-between mb-3">
                                <h6>Subtotal</h6>
                                <h6>$'.number_format($tolalamount,2).'</h6>
                            </div>
                            <div class="d-flex justify-content-between">
                                <h6 class="font-weight-medium">Shipping</h6>
                                <h6 class="font-weight-medium">$0.00</h6>
                            </div>
                        </div>
                        <div class="pt-2">
                            <div class="d-flex justify-content-between mt-2">
                                <h5>Total</h5>
                                <h5>$'.number_format($tolalamount,2).'</h5>
                            </div>
                            <a href="'.url("checkout").'" class="btn btn-block font-weight-bold my-3 py-3">Proceed To Checkout</a>
                        </div>
                    </div> ';
    }


    public function order_update_quantities(Request $request){
        $lastQt = $request -> get('latestQnt');
        $hashCode = $request -> get('hashCode');
        $cart = Cart::name('shopping');  
        $updatedItem = $cart->updateItem($hashCode, [
            'quantity'      => $lastQt,
        ]);

        $this -> getOrdersummery();

    }

}
