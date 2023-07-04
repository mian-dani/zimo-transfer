<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{


    public function showLoginForm()
    {
        return view('admin.pages.auth-login-cover');
    }




    public function login(Request $request)
    {
        
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            if (auth()->user()->hasRole('admin')) {
                return redirect()->route('admin.aside');
            }
        }

        return redirect()->back()->withErrors(['login' => 'Invalid credentials']);
    }





    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }





    public function aside()
    {
        // return view('admin.components.aside');
         return view('admin.pages.app-user-view-security');
    }
}
