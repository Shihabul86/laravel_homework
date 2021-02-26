<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserAuthController extends Controller
{
    //Show Registration
    public function showRegister()
    {
        return view('user.register');
    }
    //Registration
    public function register()
    {
        $this->validate(request(), [
            'name' => 'required|min:6|unique:users,name',
            'age' => 'required',
            'height' => 'required',
            'weight' => 'required',
            'health' => 'required',
            'address' => 'required',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required',
            'group' => 'required',
            'playPosition' => 'required',
            'password' => 'required|confirmed'
        ]);
        User::create([
            'name' => request('name'),
            'age' => request('age'),
            'height' => request('height'),
            'weight' => request('weight'),
            'health' => request('health'),
            'address' =>request('address'),
            'email' => request('email'),
            'phone' => request('phone'),
            'group' => request('group'),
            'playPosition' => request('playPosition'),
            'password' => bcrypt(request('password'))
        ]);

        return redirect()->route('login.show')->with('registerOk', 'Registered Successfully!');
    }

    //Show Login
    public function showLogin()
    {
        return view('user.login');
    }

    //Login
    public function login()
    {
        $this->validate(request(), [
            'name' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt([
            'name' => request('name'),
            'password' => request('password')
        ])){
            return redirect()->route('user.dashboard');
        }else{
            return redirect()->route('login.show')->with('loginError', 'Credentials dose not match!');
        }
    }
    //Logout
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login.show');
    }
}
