<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function login(){
        return view('login.login');
    }

     public function signup(){
        return view('login.register');
    }

    public function logincheck(Request $request){
        $credential = $request->validate([
            
            'email'=>'required|email',
            'password'=>'required',

        ]);

        if(Auth::attempt($credential)){
            return redirect()->route('dashboard');
        }
    }

    public function registercheck(Request $request){
        $validation = $request->validate([
            'username'=>'required',
            'email'=>'required|email',
            'password'=>'required',
            'repassword'=>'required'

        ]);

        $user = USER::Create($validation);
        Auth::login($user);

        return redirect()->route('login');
    }

    public function goDashboard(){
        if(Auth::check() && Auth::user()->usertype=='admin'){
            return view('admin.dashboard');
        } 
        else if(Auth::check() && Auth::user()->usertype=='user'){
            return view('login.dashboard');
        }
        else if(Auth::check() && Auth::user()->usertype=='sadmin'){
            return view('supadmin.dashboard');
        }
        else {
            return view('login.login');
        }
    }

    public function logout(Request $request){
        Auth::logout();
        return redirect()->route('login');
    }
}
