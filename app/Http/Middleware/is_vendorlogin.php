<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Vendor;
use Session;

class is_vendorlogin
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

        if($request->session()->get('usersLoginStatus') == true){
            $isvendor = Vendor::where('customer_id',Session::get('frontendloginID'))->where('is_approve',1)->count();
            if($isvendor == 0){
                    return redirect('/vendor/registration');
            }else{
                    return $next($request);
            }
        }else{
            return redirect('login');
        }

       
       
    }
}
