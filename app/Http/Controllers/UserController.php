<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;

class UserController extends AppController
{
    public function signUp(Request $request)
    {
        $name="shyam";
        $email="abcd@tudip.nl";
        $password="1234567";

        $userconrtoller=new UserModel();
        $response=$userconrtoller->saveUser($name,$email,$password);




    }
}
