<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserPageController extends Controller
{

    // Home

    public function home()
    {

        if (Auth::check()) {
            $username = Auth::user()->name;
            return view('index');
        } else {
           return redirect()->route('signin')->withErrors('Login to view home page');
        }
        
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
