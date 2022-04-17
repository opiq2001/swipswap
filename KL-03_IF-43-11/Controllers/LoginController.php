<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function login(){
        return view('User.login');
    }

    public function loginprocess(Request $request){
        if(Auth::attempt($request->only('email','password'))){
            $data = $request->input();
            $request->session()->put("email", $data['email']);
            return redirect('/home');
        }

        return redirect('/login');
    }

    public function post_login(Request $request){
       dd($request->all());

    }

    public function register(){
        return view('User.register');
    }

    public function registeruser(Request $request){
        User::create(
            [
                'name'=> $request->name,
                'email'=> $request->email,
                'password'=> bcrypt($request->password),
                'remember_token' => Str::random(60),
            ]
            );

            return redirect('/login');
    }

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }
}
