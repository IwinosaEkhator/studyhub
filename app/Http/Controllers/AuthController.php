<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function signin()
    {
        return view('sign_in');
    }



    public function register()
    {
        return view('register');
    }
}
