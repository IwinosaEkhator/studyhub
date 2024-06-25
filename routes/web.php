<?php

use App\Http\Controllers\AdminPageController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserPageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ UserPageController::class , 'index' ] );

Route::get('/about-us', [ UserPageController::class , 'about' ] );

Route::get('/contact-us', [ UserPageController::class , 'contact' ] );

Route::get('/library', [ UserPageController::class , 'library' ] );

Route::get('/myhub', [ UserPageController::class , 'myhub' ] );

Route::get('/register', [ AuthController::class, 'register' ]);

Route::get('/sign-in', [ AuthController::class, 'signin' ]);

Route::get('/studyhub', [ UserPageController::class , 'studyhub' ] );

Route::get('/admin', [ AdminPageController::class , 'admin' ] );

Route::get('/admin/upload', [ AdminPageController::class , 'upload' ] );
