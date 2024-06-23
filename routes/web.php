<?php

use App\Http\Controllers\AboutPageController;
use App\Http\Controllers\ContactPageController;
use App\Http\Controllers\LibraryPageController;
use App\Http\Controllers\MyHubPageController;
use App\Http\Controllers\RegisterPageController;
use App\Http\Controllers\SignInPageController;
use App\Http\Controllers\StudyHubPageController;
use App\Http\Controllers\UserPageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ UserPageController::class , 'index' ] );

Route::get('/about-us', [ AboutPageController::class , 'index' ] );

Route::get('/contact-us', [ ContactPageController::class , 'index' ] );

Route::get('/library', [ LibraryPageController::class , 'index' ] );

Route::get('/myhub', [ MyHubPageController::class , 'index' ] );

Route::get('/register', [ RegisterPageController::class , 'index' ] );

Route::get('/sign-in', [ SignInPageController::class , 'index' ] );

Route::get('/studyhub', [ StudyHubPageController::class , 'index' ] );
