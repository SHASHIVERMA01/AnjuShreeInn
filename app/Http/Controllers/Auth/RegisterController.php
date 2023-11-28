<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Controllers\SmsController;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Mail\RegisterVerify;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Events\Registers;
use App\Events\Password;
use Mail;
use Auth;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;
    public $SmsController;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(SmsController $SmsController)
    {
        $this->SmsController = $SmsController;
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'mobile' => ['required', 'integer', 'min:10','unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:4', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return  User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'is_admin'=> 0,
            'mobile'=> $data['mobile'],
            'password' => Hash::make($data['password']),
        ]);

        //  back()->with('success','Registation Successfully');
    }

      // user register
      protected function userRegister()
      {
        try{
          return view('auth.userRegister');
        }catch(\Excaption $e){
          return back()->with('error','Something Went Worng!');
        }
      }

        
      protected function userRegisterStore(Request $request)
      {
        $validator = Validator::make($request->all(), [
          'name' => ['required', 'string', 'max:255'],
          'mobile' => ['required', 'integer', 'min:10','unique:users'],
          'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
          'password' => ['required', 'string', 'min:4', 'confirmed'],
      ]);

      if($validator->fails()){
        return  response()->json(['error'=>$validator->getMessageBag()->toArray()]);
      }
      try{
          $data = $request->all();
          $data['mobile_verified'] = rand(1231,7879);
          $data['email_verified_at'] = rand(1231,7879);
          $data['password'] = Hash::make($data['password']);
          $item =User::create($data);
          if(!empty($item)){
            Mail::to($item->email)->send(New RegisterVerify($item->email_verified_at));
            $this->SmsController->SendSms($item->mobile,'Register Verifcation SMS Call: '.$item->mobile_verified,'1407161786383549716');
            $useid= $item->id;
            return view('auth.pages.verfiy',compact('useid'));
          }
      }catch(\Excaption $e){
        return back()->with('error','Something Went Worng!');
      }
    }

    public function VerifiyOTPsend($id){
      try{
           $data = ['mobile_verified'=> rand(1231,7879),'email_verified_at'=> rand(1231,7879)];
           $obj = User::where('id',$id)->first();
      if(!empty($obj)){
              User::where('id',$obj->id)->update($data);
              $response =  $this->SmsController->SendSms($obj->mobile,'Register Verifcation SMS Call: '.$data['mobile_verified'],'1407161786383549716');
              unset($response);
              Mail::to($obj->email)->send(New RegisterVerify($data['email_verified_at']));
              return response()->json(['status'=>200,'msg'=>'OTP Sended On Mobile No.-'.$obj->mobile.' Email.-'.$obj->email]);
      }else{
              return response()->json(['status'=>400,'error'=>'Something went worng!']);
          }
      }catch (\Exception $e) {
          return $e;
          return redirect()->back()->with('error','Something went worng');
      }
  }


  public function RegisterVerifiyOTP(Request $request){
     try{
           $data = $request->all();
           $obj = User::where('id',$data['id'])->where('mobile_verified',$data['mobile_verified'])->where('email_verified_at',$data['email_verified_at'])->first();
            if(!empty($obj)){
                    $data['mobile_verified']= 1;
                    $data['email_verified_at']= 1;
                    unset($data['_token']);
                    User::where('id',$data['id'])->update($data);
                    return response()->json(['status'=>200,'data'=>$obj,'type'=>'success','msg'=>'Verify SuccessFully..']);
                }
          else{
              return response()->json(['status'=>400,'type'=>'error','msg'=>'Invaid OTP']);
          }
    }catch (\Exception $e) {
        return $e;  
        return redirect()->back()->with('error','Server Error');
    }
  }

  protected function userRedirectDeshboard(Request $req){
    try {
      $data =  $req->all();
      $obj =  User::where('id',$data['id'])->first();
      Auth::login($obj);
      event(new Registers($obj));
      $response =  $this->SmsController->SendSms($obj->mobile,'Register Verifcation SMS Call: '.$obj->mobile_verified,'1407161786383549716');
      unset($response);
      return response()->json(['status'=>200,'data'=>$data,'msg'=>'SuccessFully Login..']);
    } catch (\Excaption $e) {
      return $e;
    }
  }


  protected function forgetpassword($id=null){
    try {
      if($id){
        $item = User::orwhere('email',$id)->orwhere('mobile',$id)->first();
        if(!empty($item)){
          $otp = rand(1231,7879);
          User::where('id',$item->id)->update(['forget_password_otp'=>$otp]);
          event(new Password(['otp'=>$otp,'obj'=>$item]));
          return  response()->json(['status'=>200,'data'=>$item,'msg'=>'Otp Send Successfully..']);
        }else{
          return  response()->json(['status'=>404,'msg'=>'User Not Found..']);
        }
      }
      return view('auth.forgetPassword');
    } catch (\Excaption $e) {
      return $e;
      return redirect()->back()->with('error','Server Error');
    }
  }

}
