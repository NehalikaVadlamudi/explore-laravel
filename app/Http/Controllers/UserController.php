<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login()
    {
        $data = [];
        $data['title'] = "Login Screen";

        return view('user/login',$data);
    }

    public function validateLogin(Request $request)
    {
        try{
            $user =User::where('email',$request->inputEmail)->where('password',$request->inputPassword)->first();

            if($user){
                echo "Login successful!";
                $userDetails = $user->toArray();
                
            }
        }
    }
}
