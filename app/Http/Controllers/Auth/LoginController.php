<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use App\Models\LoginLog;
use App\Events\Login;
use Session;
use Hash;
use Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function logout(Request $request)
    {  
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


    public function login(Request $request)
    {
        date_default_timezone_set("Asia/Kolkata");
        $input = $request->all();
        $this->validate($request,[
            'email'=>'required',
            'password'=>'required',
        ]);
       
        if(auth()->attempt(array('email' => $input['email'], 'password' => $input['password'])))
        {
            if(auth()->user()->is_admin == 1){
                return redirect()->route('home');
            }else{
                if($input['slug']){
                    $getId = LoginLog::create(['user_id'=>auth()->user()->id,'login'=>date("Y-m-d h:i:sa")]);
                    session(['login_id' => $getId->id,'user_id' => $getId->user_id]);
                    $userDetails = User::where('id',auth()->user()->id)->first();
                    event(new Login($userDetails->mobile,$userDetails->email));
                    return redirect()->route('agreements.name',['blank-document','slug'=>$input['slug']]);
                }else{
                    $getId = LoginLog::create(['user_id'=>auth()->user()->id,'login'=>date("Y-m-d h:i:sa")]);
                    session(['login_id' => $getId->id,'user_id' => $getId->user_id]);
                    $userDetails = User::where('id',auth()->user()->id)->first();
                    event(new Login($userDetails->mobile,$userDetails->email));
                    return redirect()->route('IsUser.home');
                }
            }
        }else{
            return back()->with('invalid','Invalid UserName And Password');
        }
    }

    public function LoginProvider($type){
        try {
            return Socialite::driver($type)->redirect();
        } catch (\Exception $e) {
            return $e;
        }
    }

    public function SocialMediaLogin($provider){
    try {
        $user = Socialite::driver($provider)->user();
        $finduser = \App\Models\User::where('social_id', $user->id)->first();
            if($finduser){
                    Auth::login($finduser);
                    if(auth()->user()->is_admin == 1){
                        return redirect()->route('home');
                    }else{
                        return redirect()->route('IsUser.home');
                    }
                    // return redirect()->with('error',"You don't have admin access."); 
                // } 
            }else{
                $newUser = App\Models\User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'social_id'=> $user->id,
                    'provider'=> $provider,
                    'is_admin'=> 0,
                    'password' => Hash::make($user->password)
                ]);
                    Auth::login($newUser);
                    if(auth()->user()->is_admin == 1){
                        return redirect()->route('home');
                    }else{
                        return redirect()->route('IsUser.home');
                    }
                    // return redirect()->with('error',"You don't have admin access."); 
            }
    } catch (\Exception $e) {
        return $e;
    }
    }


  
}
