<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsUser
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
                if(auth()->user() ?? auth()->user()->is_admin == 0){
                    return $next($request);
                }else{
                    date_default_timezone_set("Asia/Kolkata");
                    if(session()->get('user_id') == auth()->user()->id ){
                        $getId = LoginLog::where('user_id',auth()->user()->id)->where('id',session()->get('login_id'))->get();
                        LoginLog::where('id',session()->get('login_id'))->update(['logout'=>date("Y-m-d h:i:sa")]);
                    }
                    $this->guard()->logout();
                    $request->session()->flush();
                    $request->session()->regenerate();
                    return redirect('/');
                }
            }else{
                    $request->session()->flush();
                    $request->session()->regenerate();
                    return redirect('/');
            }
    }
}
