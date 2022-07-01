<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class CreateUserController extends Controller
{
    //

     public function createUser(Request $request){
        $this->validate($request,[
            'name'=>'required|max:100',
            'email'=>'email|required',
            'country'=>'required|max:100',
            'phone'=>'required|max:15',
            'file'=>'required',
        ]);

        $name = $request->input('name');
        $email = $request->input('email');
        $country = $request->input('country');
        $phone= $request->input('phone');
        $file = $request->file('file');
        $filename = $file -> getClientOriginalName();
        $file->move('uploadesFiles',$filename);
        
        DB::insert('insert into test_users(name,email,country,phone,file) values (?,?,?,?,?)', [
            $name,$email,$country,$phone,$filename]);
        //return view('index');
        echo "Successfully Created";
    }
}
