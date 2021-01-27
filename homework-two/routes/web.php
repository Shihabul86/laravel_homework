<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;



Route::get('/',[HomeController::class, 'index']);
Route::get('/project', [ProjectController::class, 'project']);
