<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class isAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        
            if(Auth::guest() || Auth::user()->role_id == 1){
                return back()->withErrors( 'You are not Authorized to do this!');
            }
   


        return $next($request);
    }
}
