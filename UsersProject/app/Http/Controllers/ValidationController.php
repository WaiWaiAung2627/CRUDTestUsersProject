<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\TestUsers;

class ValidationController extends Controller
{
    //
    /*public function deleteUser(Request $request,$id){
        DB::table('test_users')->where('id',$id)->delete();
        echo "Delete Successfully!";
    }*/

    public function updateUser(Request $request,$id){

        $this->validate($request,[
            'name'=>'required|max:100',
            'email'=>'email|required',
            'country'=>'required|max:100',
            'phone'=>'required|max:15',
            
        ]);
        $name = $request->input('name');
        $email = $request->input('email');
        $country = $request->input('country');
        $phone= $request->input('phone');
        $file = $request->input('file');
        $oldfile = $request->input('filename');
        //var_dump($file);
        //$filename = $file->getClientOriginalName();
        //var_dump($filename);
        //$file->move('uploadesFiles',$filename);
        if(strlen($file) <= 0){
            DB::table('test_users')->where('id',$id)->update(['name'=> $name,'email'=> $email, 'country'=> $country,'phone'=> $phone, 'file'=> $oldfile]);
            echo "Update Successfully!";
        }
        else{
             DB::table('test_users')->where('id',$id)->update(['name'=> $name,'email'=> $email, 'country'=> $country,'phone'=> $phone, 'file'=> $file]);
            echo "Update Successfully!";
        }
    }

    public function edit($id){
      $tuser = TestUsers::find($id);
      return view('editUser')->with('TUsers',$tuser);
    }

   // Delete
   public function destroy($id){
      TestUsers::destroy($id);
      Session::flash('message', 'Delete successfully!');
      Session::flash('alert-class', 'alert-success'); 
   }


}
