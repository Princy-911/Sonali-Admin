<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $user = User::where('Email', '=', $request->email)->first();

        if ($user && $request->password == $user->Password) {
            Auth::login($user);     
            if (Auth::check()) {
                $user = Auth::user();
                return redirect('/dashboard');
                // return view('backend.project.overview.project_overview_live', compact('user'));
            } else {
                return redirect('/'); 
            }
        } else {
            return back()->with('error', 'User Not Found');
        }
    }

    public function dashboard(Request $request)
    {
        $user = Auth::user();

        if(!$user){
            return redirect('/login'); 
        } else {
            return view('dashboard', compact('user'));  
        }
    }

    public function changePassword(Request $request)
    {
        $user = Auth::user();

        if(!$user){
            return redirect('/login'); 
        } else {
            $password = Crypt::decrypt($user->password);
            return view('change-password', compact('user', 'password'));  
        }
    }

    public function editProfile(Request $request)
    {
        $user = Auth::user();

        if(!$user){
            return redirect('/login'); 
        } else {
            return view('edit-profile', compact('user'));  
        }  
    }

    public function updatePassword(Request $request)
    {
        $user = Auth::user();
echo "<pre>"; print_r($user); exit;
        if(!$user){
            return redirect('/login'); 
        } else {
            return view('change-password', compact('user'));  
        }
    }

    public function logout()
    {
        Auth::logout();
        Session::flush();
        return redirect('/');
    }
}
