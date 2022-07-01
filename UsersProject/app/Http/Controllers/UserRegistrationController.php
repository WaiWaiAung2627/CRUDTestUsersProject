<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Hash;

class UserRegistrationController extends Controller
{
    //
     public function userRegister(Request $request){
        $this->validate($request,[
            'name'=>'required|max:100',
            'email'=>'email|required',
            'password'=>'required|min:6',
            'confirmpassword'=>'required|same:password'
        ]);

        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');
        $password=Hash::make($password);
        $confirmpassword = $request->input('confirmpassword');
        $confirmpassword=Hash::make($confirmpassword);

        DB::insert('insert into user_registrations(name,email,password,confirmpassword) values (?,?,?,?)', [
            $name,$email,$password,$confirmpassword]);
        return view('login');
    }
}
