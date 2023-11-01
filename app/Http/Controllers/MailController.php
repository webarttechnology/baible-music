<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Session;

class MailController extends Controller
{
    //

    public static function enquiryMail($email, $enquiry, $invoice, $payment_type)
    {
        Session::put('invoice_mail', $invoice);

        $emails = [
            $email, 'admin@klicsports.com', 'zapagility@gmail.com'
        ];

        // campen enquiry
        if($enquiry == "Campen Enquiry"){
              $page_name = "campen_enquiry";
        }
        
        if($enquiry == "League Enquiry"){
            $page_name = "league_enquiry";
        }
        
        if($enquiry == "Tournament Enquiry"){
            $page_name = "tournament_enquiry";
        }
        
        if($enquiry == "Training Enquiry"){
            $page_name = "training_enquiry";
        }
        
        
        foreach($emails as $email){
            Mail::send('mail.'.$page_name, ['email' => $email], function ($message) use($enquiry, $email, $payment_type) {  
                $message->to($email)->subject($enquiry.'-'.$payment_type);
            });
        }
           
    }
}