<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;

use Closure;

class LoginMiddleware
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
        if(Auth::check()){

            $user=Auth::user();
                if($user->member_type == 3)
                {   
                    return redirect(route('home'));
                }else
                {
                    return $next($request);
                }   
        }else
        {
            return redirect(route('login'));
        }           
    }
}

