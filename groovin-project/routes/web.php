<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminPhotoController;
use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/login', [UserAuthController::class, 'showLogin'])->name('login.show');
Route::post('/login', [UserAuthController::class, 'login'])->name('login');
Route::get('/register', [UserAuthController::class, 'showRegistration'])->name('register');
Route::post('/register', [UserAuthController::class, 'register'])->name('register.save');
Route::get('/logout',[UserAuthController::class, 'logout'])->name('logout');

//User Auth Routes
Route::group(['middleware' => 'authCheck'], function (){
    Route::get('/dashboard',[UserController::class, 'dashboard'])->name('user.dashboard');
    Route::post('/upload', [UserController::class, 'upload'])->name('user.upload');
    Route::get('/gallery', [UserController::class, 'gallery'])->name('user.gallery');
    Route::get('/photo/updateStatus/{id}/{status}', [UserController::class, 'updatePhotoStatus'])->name('user.gallery.photoStatus');
    Route::get('/cashOut',[UserController::class, 'cashOut'])->name('user.cashOut');
    Route::post('/cashOut',[UserController::class, 'processCashOut'])->name('user.cashOut.process');
});

//====================================================

//Admin Routes
Route::get('/admin/login', [AdminController::class, 'index'])->name('admin.login.show');
Route::post('/admin/login', [AdminController::class, 'login'])->name('admin.login');
Route::get('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');
//Admin Auth Routes
Route::group(['middleware' => 'adminAuthCheck', 'prefix' => 'admin'],function (){
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/dashboard/status/{id}/{status}', [AdminPhotoController::class, 'updatePendingImage'])->name('admin.image.approve');
    Route::get('/selling', [AdminPhotoController::class, 'sellingImage'])->name('admin.selling.show');
    Route::post('/selling/photo', [AdminPhotoController::class, 'processPhoto'])->name('admin.selling.process');
    Route::get('/cashouts', [AdminController::class, 'showCashouts'])->name('admin.showCashouts');
    Route::get('/cashouts/status/{id}/{status}', [AdminController::class, 'updateCashouts'])->name('admin.updateCashouts');
});
