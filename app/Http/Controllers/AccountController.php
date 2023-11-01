<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Psubcategory;
use App\Models\Productfeature;
use App\Models\Image;
use App\Models\Reviews;
use App\Models\Comment;
use App\Models\Order;
use App\Models\Customer;
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
use DB;

class AccountController extends Controller
{
    public function myaccount(Request $request){
        if($request->method() == "GET"){
            $categoryId =Session::get('categoryId') == ''?'1':Session::get('categoryId');
            $categoryList = Category::where('isActive', "1")->get();
            $fastcategory = Category::where('id', $categoryId) ->first();
            $psubcategory =Psubcategory::where('category_id',$fastcategory->id)->get();
            $subcategory =Subcategory::where(['category_id'=>$fastcategory->id])->get();
            $product =Product::where('is_active', "1")->inRandomOrder()->limit(8)-> get();
            $showpsuncategory =Psubcategory::where('is_active', "1")->inRandomOrder()->limit(6)-> get();
            $user_id =$request->session()->get('frontendloginID');
            $order =Customer::where('id',$user_id)->first();
            // echo "<pre/>";
            // print_r($psubcategory[0]->category_id);die;
           
            return view('my-account', ['categories' => $categoryList,'fastcategory' => $fastcategory,'psubcategory' => $psubcategory,'subcategory'=>$subcategory,'product'=>$product,'showpsuncategory'=>$showpsuncategory,'userdetails'=>$order]);

        }

    }


    public function editprofile(Request $request){
        if($request->method() == "POST"){
            // print_r($request->post());die;
            $request->validate([
                'fname' =>'required',
                'lname' =>'required',
                // 'email_id'  =>'required|email',
                'mobile_no'=>'min:10'
             ]);


            //  $customerDuplicateCheck =Customer::where('email_id',$request->email_id)->where('id','!=',$request->id)->count();
           
            // if($customerDuplicateCheck == 0){
                $hashedpassword = Hash :: make($request -> password);
                $customer =Customer::where('id', $request->id)->update([
                    'fname' =>$request->fname,
                    'lname' =>$request->lname,
                    'name' => $request->fname." ".$request->lname,
                    // 'email_id' => $request -> email_id,
                    'mobile_no' =>$request->mobile_no,
                    'address' =>$request->address,
                    'address1' =>$request->address1,
                    'city' =>$request->city,
                    'country' =>$request->country,
                    'pincode' =>$request->pincode
                ]);
                if($customer){
                    return redirect::to('/my-account')->with('successmsg',Config::get('constants.UPDATE_SUCCESS'))->withInput($request->all);
                }else{
                    return redirect::to('/my-account')->with('errmsg',Config::get('constants.UPDATE_ERROR'))->withInput($request->all);
                }

            // }else{
            //     return redirect::to('/my-account')->with('errmsg',Config::get('constants.DUPLICATE_EMAIL_ID'))->withInput($request->all);
            // }
        }
    }

    public function download(Request $request){
        if($request->method() == "GET"){
            $categoryList = Category::where('isActive', "1")->get();
            $fastcategory = Category::where('isActive', "1") ->first();
            $psubcategory =Psubcategory::where('category_id',$fastcategory->id)->get();
            $subcategory =Subcategory::where(['category_id'=>$fastcategory->id])->get();
            $product =Product::where('is_active', "1")->inRandomOrder()->limit(8)-> get();
            $showpsuncategory =Psubcategory::where('is_active', "1")->inRandomOrder()->limit(6)-> get();

            $user_id =$request->session()->get('frontendloginID');
            
            $order = Invoice::select(['productName'=>'products.name','thumbnail'=>'products.thumbnail','paymentamont'=>'invoices.pay_amt','main_file'=>'products.main_file','final_pay_amt'=>'orders.final_price'])
                     ->join('orders', 'orders.invoice_id', '=', 'invoices.id')
                     ->join('products', 'products.id', '=', 'orders.product_id')
                     ->where('invoices.payment_status', '1')->where('invoices.customer_id',$user_id)
                     -> get() ->toArray();
            // echo "<pre/>";
            // print_r($order);

            // die;

            // $invoice_no =Invoice::where('customer_id',$user_id)->where('payment_status',1)->get();
            // $orderproduct =DB::table('invoices')->join('orders','orders.invoice_id','=','invoices.id')
            //                     ->join('products','products.id','=','orders.product_id');
            // $order =Order::where('customer_id',$user_id)->get();
            // foreach($order as $item ){
            //     echo "<pre/>";
            //     print_r($item['thumbnail']);
            // }
            // die;
            // echo "<pre/>";
            // print_r($order);die;
           
            return view('download', ['categories' => $categoryList,'fastcategory' => $fastcategory,'psubcategory' => $psubcategory,'subcategory'=>$subcategory,'product'=>$product,'showpsuncategory'=>$showpsuncategory,'order'=>$order]);
        }

    }
}
