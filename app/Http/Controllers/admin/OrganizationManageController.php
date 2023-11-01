<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Organization;

class OrganizationManageController extends Controller
{
    //

    public function applications($key)
    {
            if($key == "all"){
                $title = "All Applications";
                $organizations = Organization::orderBy('id', 'desc')->get();
            }
            if($key == "pending"){
                $title = "Pending Applications";
                $organizations = Organization::where('verified_status', 0)->orderBy('id', 'desc')->get();
            }
            if($key == "accepted"){
                $title = "Accepted Applications";
                $organizations = Organization::where('verified_status', 1)->orderBy('id', 'desc')->get();
            }
            if($key == "rejected"){
                $title = "Rejected Applications";
                $organizations = Organization::where('verified_status', 2)->orderBy('id', 'desc')->get();
            }
            
            $all_nos=count(Organization::orderBy('id', 'desc')->get());
            $pending_nos=count(Organization::where('verified_status', 0)->orderBy('id', 'desc')->get());
            $accepted_nos=count(Organization::where('verified_status', 1)->orderBy('id', 'desc')->get());
            $rejected_nos=count(Organization::where('verified_status', 2)->orderBy('id', 'desc')->get());

            return view('admin.organizations.applications', compact('title', 'organizations', 'all_nos', 'pending_nos', 'accepted_nos', 'rejected_nos'));
    }
    
    
    public function application_status($id, $status)
    {
               Organization::whereId($id)->update([
                    'verified_status' => $status,
               ]);

               return redirect()->back();
    }
}
