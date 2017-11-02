<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('books', function () {
    return App\Book::withTrashed()->get();
});

Route::get('delete', function () {
    $books = App\Book::all();

    return view('books.destroy', compact('books'));
});

Route::delete('destroy', function (Request $request) {
    $books = $request->get('books');

    if (count($books)) {
        App\Book::destroy($books);
    }

    return back();
});

Route::get('relationship', function () {
    $categories = App\Category::has('books')->get();

    return view('relationship', compact('categories'));
});
