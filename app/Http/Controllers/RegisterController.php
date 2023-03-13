<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //
    public function register(){
        return view('register');
    }
    public function storeUser(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required | email',
            'password' => 'required | min:8',
        ]);

        $data['password'] = Hash::make($data['password']);

        User::create($data);
        return redirect('/login')->with('success','Register Successfull');
    }
}
