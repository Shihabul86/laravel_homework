<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('Welcome');
    }

    public function profile($name)
    {
        return view('profile', compact('name'));
    }
}
