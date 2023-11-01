<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use App\Models\Company;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Hash;
use PHPUnit\Framework\Constraint\Count;
use Config;
use Validator;
use Mail;
use Session;


class CompanyController extends Controller
{
     public function list(){
           $details = Company::first();
           return view('admin.company.list', ['details' => $details, 'title' =>"Company"]);
        }

    public function update(Request $request, $id = ''){
        if($request ->method() == 'GET' || $id != ''){
            $details = Company::first();
            return view('admin.company.update', ['details' => $details, 'title' =>"Company"]);
        }else{
            $request->validate([
                 'name' => 'required',
                 'mobile_no' => 'required',
                 'email_id' => 'required',
                 'address' => 'required',
                 'facebook_link' => 'required',
                 'twitter_link' => 'required',
                 'instagram_link' => 'required',
                 'fax' => 'required'
            ]);

            if($request -> hasFile('logo') != ''){
                $file = $request->file('logo');
                $name = $file->getClientOriginalName();
                $path = "uploads/company/";
                $file->move($path, $path.time().'.'.$file->getClientOriginalExtension());
                
                Company::whereId($request->id)->update([
                      'logo' => $path.time().'.'.$file->getClientOriginalExtension(),
                ]);
            }

            Company::whereId($request->id)->update([
                'name' => $request->name,
                'mobile_no' => $request->mobile_no,
                'email_id' => $request->email_id,
                'address' => $request->address,
                'facebook_link' => $request->facebook_link,
                'twitter_link' => $request->twitter_link,
                'instagram_link' => $request->instagram_link,
                'fax' => $request->fax,
            ]);

            return redirect()->back()->with('comp_updatemsg', Config::get('constants.UPDATE_SUCCESS'));
        }
    }
}
