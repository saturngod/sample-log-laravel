<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class AuthController extends Controller
{
    function show(Request $request) {
        return view('login');
    }

    function login(Request $request) {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $remember = $request->remember == "on" ? true : false;
        
        $email = $request->email;
        $password = $request->password;

        if (Auth::attempt(['email' => $email, 'password' => $password], $remember)) {
            return redirect(route('home'));
        }
        else {
            return redirect(route('auth.login'))->with('error-msg', 'Invalid Username or Password');
        }
        
    }

    function logout(Request $request) {
        Auth::logout();
        return redirect(route('login'));
    }
}
