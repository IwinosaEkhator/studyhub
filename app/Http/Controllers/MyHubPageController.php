<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyHubPageController extends Controller
{
    public function index()
    {
        return view('myhub');
    }
}
