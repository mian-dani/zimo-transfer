<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class AuthController extends Controller
{


    public function showLoginForm()
    {
        return view('admin.pages.auth-login-cover');
    }




    public function login(Request $request)
    {
            $credentials = $request->only('email', 'password');
            
            if (auth()->attempt($credentials)) {
                // if (auth()->user()->hasRole('admin')) {
                    if (Auth::user()->role = 1) { 
                    return redirect()->route('admin.dashboard');
                } else {
                    // Redirect to the appropriate page for non-admin users
                    return redirect()->route('home');
                }
            }
            
            return redirect()->back()->withErrors(['login' => 'Invalid credentials']);
        

        //   $credentials = $request->only('email', 'password');
        
        //  if(auth()->check() && auth()->user()->hasRole('admin')) {
        //         return redirect()->route('admin.dashboard');
        //  }
    
        // return redirect()->back()->withErrors(['login' => 'Invalid credentials']);
    }





    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }





    public function dashboard()
    {
        // return view('admin.components.aside');
         return view('admin.pages.app-user-view-security');
    }
}
