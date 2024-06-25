<?php

use App\Http\Controllers\AboutPageController;
use App\Http\Controllers\AdminPageController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactPageController;
use App\Http\Controllers\LibraryPageController;
use App\Http\Controllers\MyHubPageController;
use App\Http\Controllers\RegisterPageController;
use App\Http\Controllers\SignInPageController;
use App\Http\Controllers\StudyHubPageController;
use App\Http\Controllers\UploadPageController;
use App\Http\Controllers\UserPageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ UserPageController::class , 'index' ] );

Route::get('/about-us', [ AboutPageController::class , 'index' ] );

Route::get('/contact-us', [ ContactPageController::class , 'index' ] );

Route::get('/library', [ LibraryPageController::class , 'index' ] );

Route::get('/myhub', [ MyHubPageController::class , 'index' ] );

Route::get('/register', [ AuthController::class, 'register' ]);

Route::get('/sign-in', [ AuthController::class, 'signin' ]);

Route::get('/studyhub', [ StudyHubPageController::class , 'index' ] );

Route::get('/administrator', [ AdminPageController::class , 'index' ] );

Route::get('/administrator/upload', [ UploadPageController::class , 'index' ] );
