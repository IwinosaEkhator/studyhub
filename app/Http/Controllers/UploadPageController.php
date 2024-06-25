<?php

namespace App\Http\Controllers;

use App\Models\book;
use Illuminate\Http\Request;

class UploadPageController extends Controller
{
    public function index()
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
