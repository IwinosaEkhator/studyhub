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

    public function library()
    {
        return view('library');
    }


    // MyHub

    public function myhub()
    {
        return view('myhub');
    }


    // StudyHub
    
    public function studyhub()
    {
        return view('studyhub');
    }


    // Contact Us

    public function contact()
    {
        return view('contact');
    }


    // About Us

    public function about()
    {
        return view('about');
    }

    
}
