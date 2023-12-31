<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(auth()->user()){
            if(auth()->user()->is_admin == 1){
                return $next($request);
            }else{
                    auth()->logout();
                    return redirect('/');
            }
        }else{
            $request->session()->flush();
            $request->session()->regenerate();
            return redirect('/');
        }
    }
}
