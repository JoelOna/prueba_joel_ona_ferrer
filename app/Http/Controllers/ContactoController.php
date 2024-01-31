<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactoController extends Controller
{
    //
/**
 * The function validates a contact form submission in PHP, checking if the request is a POST method,
 * validating the email and message fields, and returning a success message if validation passes.
 * 
 * @param Request request The  parameter is an instance of the Request class, which represents
 * an HTTP request made to the server. It contains information about the request, such as the request
 * method (GET, POST, etc.), request headers, request parameters, and more.
 * 
 * return if the request method is 'post' and the validation passes, the function will return a
 * redirect to the 'contact' route with a success message. Otherwise, it will return the 'contacto'
 * view.
 */
    public function validateContact(Request $request){
        if ($request->isMethod('post')) {
            $validated = $request->validate([
                'correo' => ['required','email','min:2', 'max:20'],
                'mensaje' => ['required', 'max:50'],
              ]);
              if ($validated) {
                return redirect()->route('contact')->with('success',__('contact.success'));
              }
        }
        return view('contacto');
        }
}
