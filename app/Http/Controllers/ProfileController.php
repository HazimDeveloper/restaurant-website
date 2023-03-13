<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    public function index(){
        
       $data = User::find(auth()->user()->id);
        return view('dashboard.profile.profile',compact('data',$data));
    }

    public function update(Request $request){

        $id = auth()->user()->id;

        $data = $request->validate([

            'name' => 'required',
            'email' => 'required',
            'phone' => 'min: 10',
            'image' =>'image/file',
            'address' => 'required',


        ]);

        
        if($request->file('img')){
            $data['image'] = $request->file('img')->store('image');
        }
        $data['status'] = 'ACTIVE';
        User::where('id',$id)->update($data);


        return redirect('dashboard')->with('success','Profile Update Succesfull!!');

    }
}
