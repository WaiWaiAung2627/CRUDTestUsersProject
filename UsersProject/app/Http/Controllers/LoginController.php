<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\UserRegistration;
use Redirect;
use Auth;
use Input;
use Illuminate\Foundation\BusDispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\AuthAccess\Authorizes\Requests;
use Illuminate\Foundation\AuthAccess\Authorizes\Resources;
use Illuminate\Html\HtmlServiceProvider;

class LoginController extends Controller
{
    //
    public function login(Request $request){
        $messages = [
            'email.required' => 'We need to know your email address!',];
            $validator = Validator::make($request->all(),
                ['email'=>'email|required',
                'password'=>'required|min:6'],$messages);
            if($validator->fails()){
                //Following is watching error in login page itself
                return redirect('login')
                ->withErrors($validator)
                ->withInput();
        }
        //validation required fields
        $this->validate($request,[
            'email'=>'email|required',
            'password'=>'required|min:6'
        ]);

        $email = $request->input('email');
        $password = $request->input('password');

        $reguser = DB::table('user_registrations')->where('email','like',$email)->first();
        //var_dump($reguser);
        $demail = $reguser -> email;
        $dpassword = $reguser -> password;
         
        if(!empty($reguser) && Hash::check($password,$dpassword)){
            //echo "success";
            //$testUsers = DB::table('test_users')->select('id','name','email','country','phone','file')->get();
            //return view('index',['TestUsers'=> $testUsers]);
            return Redirect::to('index');
        }
        else
            echo"Login Error";

    }

    public function doLogout()
    {
    Auth::logout(); // logging out user
    return Redirect::to('login'); // redirection to login screen
    }

    public function retrieveAll(Request $request){
        
          $testUsers = DB::table('test_users')->select('id','name','email','country','phone','file')->get();
            return view('index',['TestUsers'=> $testUsers]);
    }
}
