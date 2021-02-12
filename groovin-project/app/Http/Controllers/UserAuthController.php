<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserAuthController extends Controller
{
    //Show Registration Page
    public function showRegistration()
    {
        return view('user.register');
    }

    //Registration
    public function register()
    {
        $this->validate(request(),[
            'username' => 'required|min:6|unique:users,username',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed'
            ]);
        User::create([
            'username' => request('username'),
            'email' => request('email'),
            'password' => bcrypt(request('password'))
        ]);
        return redirect()->route('login.show')->with('registerOk', 'Registered Successfully!!');
    }

    //Show Login Page
    public function showLogin()
    {
        return view('user.login');
    }

    //Login
    public function login()
    {
        $this->validate(request(),[
           'username' => 'required',
           'password' => 'required'
        ]);
        if (Auth::attempt([
            'username' => request('username'),
            'password' => request('password')
        ])){

            return redirect()->route('user.dashboard');

        }else{
            return redirect()->route('login.show')->with('loginError', 'Credential dose not match!!');
        }

    }

    //Logout
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login.show');
    }
}
