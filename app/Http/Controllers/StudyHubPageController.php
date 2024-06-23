<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudyHubPageController extends Controller
{
    public function index()
    {
        return view('studyhub');
    }
}
