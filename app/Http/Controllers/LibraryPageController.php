<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LibraryPageController extends Controller
{
    public function index()
    {
        return view('library');
    }
}
