<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function attempt(Request $request)
    {
        if(\Auth::attempt(['email'=>$request->email,'password'=>$request->password] ) )
        {
            return redirect()->intended('panel/courses');
        }
        else
        {

            return "failed";
        }

    }

    public function logout()
    {
        \Auth::logout();
        return redirect()->to('/');
    }
}
