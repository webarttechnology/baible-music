<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Customer;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Hash;
use PHPUnit\Framework\Constraint\Count;
use Config;
use Validator;
use Mail;
use Session;

class UserController extends Controller
{
    public function login(Request $request){
        if($request->method() == 'GET'){
            return view('login');
        }else if($request->method() == 'POST'){
            $request->validate([
                'emailid'  =>'required|email',
                'password'  =>'required|min:8',
             ]);
             $loginData = Customer::where('email_id',$request->emailid)->first();
             //print_r($loginData);die;
             if($loginData != ''){
                if(Hash :: check($request->password, $loginData->password)){ 
                    $request->session()->put('usersLoginStatus', true);
                    $request->session()->put('frontendloginID', $loginData['id']);
                    $request->session()->put('frontendemail', $loginData['email_id']);
                    $request->session()->put('frontendname', $loginData['name']);
                    echo  $request->session()->get('usersLoginStatus', true);
                    return redirect::to('/my-account');

                }else{
                    return redirect::to('/login')->with('errmsg',Config::get('constants.PASSWORD_ERROR'))->withInput($request->all);
                }

             }else{
                return redirect::to('/login')->with('errmsg',Config::get('constants.EMAIL_ERROR'))->withInput($request->all);
             }
        }

    }


    public function logout(Request $request){
        Session::forget('usersLoginStatus');
        return redirect::to('/home');
    }


    public function registration(Request $request){
        if($request->method()=="GET"){
            return view('registration');
        }else if($request->method() =="POST"){
            //  print_r($request->post());die;
            $request->validate([
                'fname' =>'required',
                'lname' =>'required',
                'email'  =>'required|email',
                'password'  =>'required|min:8',
                'con_password'=>'required|min:8|same:password'
             ]);
            $customerDuplicateCheck =Customer::where('email_id',$request->email)->count();
            if($customerDuplicateCheck == 0){
                $hashedpassword = Hash :: make($request -> password);
                $customer = New Customer([
                    'fname' =>$request->fname,
                    'lname' =>$request->lname,
                    'name' => $request->fname." ".$request->lname,
                    'email_id' => $request -> email,
                    'password' =>  $hashedpassword,
                ]);
                if($customer->save()){
                    return redirect::to('/login');
                }

            }else{
                return redirect::to('/customer-registration')->with('errmsg',Config::get('constants.DUPLICATE_EMAIL_ID'))->withInput($request->all);
            }

        }

       
    }

  public function uploadFile(Request $request){
      if($request->method() == 'POST'){

      }else if($request->method() == 'GET'){

      }
    }



    public function passwordchange(Request $request){
        if($request->method() == 'GET'){    

        }else if($request->method() == 'POST'){
            $request->validate([
                'password' =>'required|min:8',
                'con_password'  =>'required|min:8|same:password',
               
             ]);
             $hashedpassword = Hash :: make($request->password);
             $user_id = $request->session() ->get('frontendloginID');
             $password_update =  Registration::where('id', $user_id)->update([
                'password' =>$hashedpassword,
            ]);
            if($password_update){
                return Redirect::to('/my-account')-> with('successmassage',"Password Update Succesfully")->withInput($request->all);
            }else{
                return Redirect::to('/my-account')-> with('errormsg',"Password Update Not Succesfull")->withInput($request->all);
            }
            
        }
    }


    public function forgotPasseord(Request $request){
        return view('forgot-password');
    }


    public function sendVerificationCode(Request $request){
        if($request->method() == 'POST'){
            //  print_r($request->post());die;
            $request->validate([
                'emailid' =>'required|email',              
             ]);
            $emailTo =$request->post('emailid');
            if(Customer::where(['email_id' => $emailTo]) -> count() > 0){
                $adminData = Customer::where(['email_id' => $emailTo]) -> first(); 
                $admin_id = Customer::find($adminData -> id);
                $verificationCode = rand(1000,9999);
                $update_verification_code = Customer::where('id',$adminData -> id)->update([
                    'verification_code' => $verificationCode
                ]);
                if($update_verification_code){
                    Mail::send('mail.verify-code', ['verification_code' => $verificationCode], function($message) use($emailTo){
                        $message->to($emailTo)->subject("Request For Forgot Password");
                    });
                    
                    $request->session()->put('forgotPasswordIdforfrontend',$adminData -> id );  // Session for forgot password
                    return redirect::to('/verify-record')->with('successmsg', "We have send a verification code to your Email ID.");
                }else{
                    return redirect::to('/forgot')-> with('errmsg', "You entered unregistered Email ID");
                }
            }else{
                return redirect::to('/forgot')-> with('errmsg', "You entered unregistered Email ID");
            }
        }
    }

    public function Verify_record(Request $request){
            if($request->method() == 'GET'){
                return view('verify-record');
            }else if($request->method() == 'POST'){
                // print_r($request->post());die;
                $request->validate([
                    'verification_code' =>'required',              
                 ]);
                $user_code =$request->post('verification_code');
                $VerifyMail_id = $request->session() ->get('forgotPasswordIdforfrontend');
                $mail_id = Customer::find($VerifyMail_id);
                if($user_code == $mail_id->verification_code){
                    return redirect::to('reset-password')-> with('successmsg', "Verification Succesful"); 
                }
                else{
                    return redirect::to('/verify-record')-> with('errmsg', "You entered Code Not Match");
                }
        
            }
       }


     public function reset_password(Request $request){
            if($request->method() == 'GET'){
                $VerifyMail_id = $request->session() ->get('forgotPasswordIdforfrontend');
                $data =Customer::where('id',$VerifyMail_id)->first();
                // print_r
                return view('reset-password',['usermail' => $data->email_id]);
            }else if($request->method() == 'POST'){
                // print_r($request->post());die;
                $request->validate([             
                    'email_id' =>'required|email', 
                    'password' =>'required|min:8',
                    'con_password'  =>'required|min:8|same:password',              
                ]);
                $VerifyMail_id = $request->session() ->get('forgotPasswordIdforfrontend');
                $hashedpassword = Hash :: make($request -> password);
                $update = Customer::where('id', $VerifyMail_id)->update([
                        'email_id' => $request->email_id,
                        'password' => $hashedpassword
                ]);
            
                if($update){
                    return redirect::to('/login')-> with('successmsg', "Password Reset Succesfully");
                }else{
                    return redirect::to('/reset-password')-> with('errmsg', "Email Id and Password Not Reset")->withInput($request->all());  
                }
            }
        }


   
}
