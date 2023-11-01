<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;
use App\Models\Organization;

class OrganizationCheckMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::guard('organization')->user()){
             if(Auth::guard('organization')->user()->verified_status == 1){
                 return $next($request);
               }else{
                    if(Auth::guard('organization')->user()->verified_status == 0){
                    return redirect()->route('organization.login')->with('errmsg', 'Sorry! Your Application is Pending Yet');
                    }else{
                        return redirect()->route('organization.login')->with('errmsg', 'Sorry! Your Application is Rejected. You Can not login in this account');
                    }
               }
           
        }
        else{
            return redirect()->route('organization.login');
        }
    }
}
