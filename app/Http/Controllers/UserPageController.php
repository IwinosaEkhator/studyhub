<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserPageController extends Controller
{

    // Home

    public function home()
    {
        return view('index');
    }

    // Library

    public function index()
    {
        return view('library');
    }

    // Contact Us
    
    public function contact()
    {
        return view('contact');
    }

    
}
