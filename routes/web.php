<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\ContactoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::group(['prefix' => LaravelLocalization::setLocale(),	'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]], function()
{
    Route::get('/', function () {
        return view('home');
    })->name('home');
Route::group(['prefix' => 'libros'], function () {
    Route::get('/', [BookController::class, 'getBooks'])->name('books');
    Route::match(['get', 'post'], '/add', [BookController::class, 'insertBook'])->name('insert-books');
    Route::match(['get', 'post'], '/edit/{id}', [BookController::class, 'updateBook'])->name('edit-books');
    Route::get('/delete/{id}', [BookController::class, 'deleteBook'])->name('delete-book');
});

Route::match(['get', 'post'], '/contacto', [ContactoController::class, 'validateContact'])->name('contact');
});
