<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


//Roure without controller
Route::get('/CTG-home', function (){
   return '<h1>I love Coder Trust.</h1>';
});

Route::get('/CTG-service', function (){
    return '<h1>Advance Web Development & Web Developer.</h1>';
});

Route::get('/CTG-contact', function (){
    return '<h1>Bangladesh</h1>';
});
Route::get('/CTG-product', function (){
    return '<h1>PHP, Python, laravel, Javascript</h1>';
});
Route::get('/CTG-blog', function (){
    return '<h1>Freelancing is a very hard profession</h1>';
});

//Route with controller
Route::get('/product/{name}/{model}', [ProductController::class, 'ShowProduct']);


//Route with controller with view files
Route::get('/', [UserController::class, 'index']);

Route::get('/profile/{name?}', [UserController::class, 'profile']);

Route::get('/contact',[ContactController::class, 'ShowContact']);
