<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    // public function login(Request $request){
    //     $input = $request->all();
    //     $email = $input['email'];
    //     $password = $input['password'];
    //     $this->validate($request,[
    //         'email' => 'required|email',
    //         'password' => 'required',
    //     ]);
    //     if(Auth::attempt(['email' => $email, 'password' => $password])){
    //         if(Auth::user()->is_admin == 1){
    //             return redirect()->route('admin.home')->with('message',"Login Successfully!");
    //         }
    //         elseif(Auth::user()->is_admin == 0){
    //             return redirect()->route('home')->with('message',"Login Successfully!");
    //         }
    //     }
    //     else{
    //         return redirect()->route('login')->with('message',"E-mail or Password is wrong!");
    //     }
    // }
    public function login(Request $request){
        if($request->isMethod('post')){

            $data = $request->all();
            // echo "<pre>";
            // print_r($data);
            // die;
            $this->validate($request,[
                'email'=>'required',
                'password'=>'required',
            ],
            );
            
            if(Auth::guard('admin')->attempt(['email' => $data['email'], 'password' => $data['password']])){
                return redirect('admin/dashboard');
            }else{
                // $request->session()->flash('error', 'Invalid email or password');
                Session::flash('error','Invalid email or password');
                return redirect()->back();
            }

        }
        return view('home');
    }    
}
