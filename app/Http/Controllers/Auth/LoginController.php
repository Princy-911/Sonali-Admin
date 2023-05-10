<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('logout');
    }

    public function login(Request $request)
    {
        $credetials = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        
        $user = User::where('email', $request->email)->first();
       
        if (Auth::attempt($credetials)) {
            echo "yes"; exit;
            return redirect('/home')->with('success', 'Login Success');
        }
 
        return back()->with('error', 'User Not Found');
    }
 
    public function logout()
    {
        Auth::logout();
 
        return redirect()->route('login');
    }
}
