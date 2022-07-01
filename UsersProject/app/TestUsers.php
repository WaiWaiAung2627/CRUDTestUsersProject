<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class TestUsers extends Model
{
    //
    public function createTestUser($name,$email,$country,$phone,$file){
            $testUser = new TestUsers;
            $testUser->name=$name;
            $testUser->email=$email;
            $testUser->country=$country;
            $testUser->phone=$phone;
            $testUser->file=$file;
            $testUser->save();
    }

    public function retrieve(){
        //$result=test_users -> get();
        //return $result;
    }
}
