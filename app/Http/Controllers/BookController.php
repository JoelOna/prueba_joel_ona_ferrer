<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    //

    public function getBooks(){
        return view('books.books', ['books' => Book::all()]);
    }

    public function insertBook(Request $request){
        
    }
}
