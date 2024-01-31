<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    //

  /**
   * The function "getBooks" returns a view with all the books.
   * 
   * return a view called 'books.books' and passing an array of all books as a parameter.
   */
    public function getBooks(){
        return view('books.books', ['books' => Book::all()]);
    }
   /**
    * The function inserts a new book into the database and redirects to the books page with a success
    * message.
    * 
    * @param Request request The  parameter is an instance of the Request class, which
    * represents an HTTP request made to the server. It contains information about the request, such as
    * the request method (GET, POST, etc.), request headers, request parameters, and more. In this
    * case, the method is checking if the
    * 
    * return redirect to the 'books' route with a success message.
    */
    public function insertBook(Request $request){
        if ($request->isMethod('post')) {
            Book::create($request->all());
            return redirect()->route('books')->with('success',__('books.success_create'));
        }
        return view('books.add-books');
    }
  /**
   * The function updates a book record in the database based on the provided ID and request data, and
   * then redirects to the books page with a success message.
   * 
   * @param id The id parameter is the unique identifier of the book that needs to be updated. It is
   * used to find the specific book record in the database.
   * @param Request request The `` parameter is an instance of the `Illuminate\Http\Request`
   * class. It represents the current HTTP request made to the server and contains information such as
   * the request method, input data, headers, etc. In this case, it is used to check if the request
   * method is POST and to
   * 
   * return a redirect to the 'books' route with a success message if the request method is 'post'. If
   * the request method is not 'post', it is returning a view called 'books.edit-books' with the 'book'
   * variable passed to it.
   */
    public function updateBook($id, Request $request){
        $book = Book::find($id);
        if ($request->isMethod('post')) {
            $book->update($request->all());
        return redirect()->route('books')->with('success',__('books.success_edit'));
        }
        return view('books.edit-books')->with(compact('book'));
    }

   /**
    * The deleteBook function deletes a book record from the database and redirects the user to the
    * books page with a success message.
    * 
    * @param id The parameter `` is the unique identifier of the book that needs to be deleted. It
    * is used to find the book in the database and delete it.
    * 
    * return a redirect response to the 'books' route with a success message.
    */
    public function deleteBook($id){
        $book = Book::find($id);
        $book->delete();
        return redirect()->route('books')->with('success',__('books.success_delete',['title'=>$book->title]));
    }
}
