<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('user.dashboard');
    }
    public function home()
    {
        return view('user.home');
    }
}
