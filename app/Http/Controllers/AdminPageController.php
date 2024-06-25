<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class AdminPageController extends Controller
{


    // Admin Main

    public function admin()
    {
        return view('admin.admin');
    }

    // Upload 

    public function upload()
    {
        // $book = new book;
        // $book->book_name = "Physics Practical Manual";
        // $book->category = "Physics";
        // $book->description = "Mauris tempus erat laoreet turpis lobortis, eu tincidunt erat fermentum. Aliquam non tincidunt urna. Integer tincidunt nec nisl vitae ullamcorper. Proin sed ultrices erat. Praesent varius ultrices massa at faucibus. Aenean dignissim, orci sed faucibus pharetra, dui mi dignissim tortor, sit amet condimentum mi ligula sit amet augue. Pellentesque vitae eros eget enim mollis placerat. Aliquam non tincidunt urna. Integer tincidunt nec nisl vitae ullamcorper. Proin sed ultrices erat. Praesent varius ultrices massa at faucibus. Aenean dignissim, orci sed faucibus pharetra, dui mi dignissim tortor, sit amet condimentum mi ligula sit amet augue. Pellentesque vitae eros eget enim mollis placerat.";
        // $book->likes = 0;
        // $book->save();

        

        return view('admin.upload');
    }
}
