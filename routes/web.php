<?php

use App\Http\Controllers\AdminPageController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserPageController;
use Illuminate\Support\Facades\Route;


Route::controller(UserPageController::class)->group(function () {
    Route::get('/', 'home')->name('home');

    Route::get('/about-us', 'about')->name('about');

    Route::get('/contact-us', 'contact')->name('contact');

    Route::get('/library', 'library')->name('library');

    Route::get('/myhub', 'myhub')->name('myhub');

    Route::get('/studyhub', 'studyhub')->name('studyhub');
});

Route::controller(AdminPageController::class)->group(function () {
    Route::get('/admin', 'admin');

    Route::get('/admin/upload', 'upload');
});


Route::controller(AuthController::class)->group(function () {
    Route::get('/register', 'register')->name('register');
    Route::post('/postRegister', 'signup');

    Route::get('/sign-in', 'signin')->name('signin');
    Route::post('/auth', 'login');
});
