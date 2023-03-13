<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function login(){
        return view('/login');
    }

    public function loginUser(Request $request){

        $data = $request->validate([
            'email' => 'required',
            'password' => 'required | min:8'
        ]);

        if(Auth::attempt($data)){
            return redirect('/dashboard')->with('successfull','Login Successfull !!');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
