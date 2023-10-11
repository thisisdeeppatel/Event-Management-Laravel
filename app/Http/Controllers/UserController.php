<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //

    public function login_frm()
    {

        return view("login.login" , ["err" => ""]);
    }

    public function do_login(Request $request)
    {
        $username = $request->uname;
        $password = $request->pass;
        $cred = ["name" => $username , "password" => $password];

        if(auth()->attempt($cred))
        {
            $request->session()->regenerate();
            return redirect("/dashboard");
        }
        else
        {

            return view("login.login" , ["err" => "Invalid username or password"]);
        }

    }

    Public function register_frm()
    {
        return view("login.register");
    }

    public function do_register(Request $request)
    {
        $username = $request->uname;
        $password = $request->pass;
        $email = $request->email;

        $cred = ["name" => $username , "password" => $password , "email"=> $email];
        $user = User::create($cred);
        return redirect("/dashboard");
    }

    public function logout()
    {
        auth()->logout();
        return redirect("/dashboard/login");
    }
}
