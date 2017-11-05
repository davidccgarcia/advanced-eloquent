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
    $categories = App\Category::whereHas('books', function ($query) {
        $query->where('status', 'public');
    })->get();

    return view('relationship', compact('categories'));
});

Route::get('manytomany', function () {
    $users = App\User::all();

    return view('manytomany.index', compact('users'));
});

Route::get('edit-manytomany/{user_id}', [
    'as' => 'getEdit', 
    'uses' => 'UserController@getEditManyToMany'
]);

Route::put('putEdit/{user_id}', [
    'as' => 'putEdit', 
    'uses' => 'UserController@putEditManyToMany'
]);

Route::get('querybuilder', function () {
    // $users = DB::table('users')->get();
    // $users =  DB::table('users')->where('name', 'Virginia Simonis PhD')->get();
    // $users = DB::table('users')->where('name', 'Virginia Simonis PhD')
        // ->value('email'); - Retrieving value = {{ $users }} 

    // $users = DB::table('users')->select('name', 'email')->get();
    $users = DB::table('users')->select('name as user_name', 'email')->get();


    return view('querybuilder.index', compact('users'));
});

Route::get('joins', function () {
    $books = DB::table('categories')
        ->join('books', 'categories.id', '=', 'books.category_id')
        ->where('books.status', 'public')
        ->select('categories.name as category', 'books.title')
        ->get();

    return view('querybuilder.joins', compact('books'));
});

Route::get('pivotfields', function () {
    $user = App\User::find(1);

    echo $user->name;

    foreach ($user->exams as $exam) {
        echo "
            <li>
                {$exam->title} Nota: {$exam->pivot->score} 
                Fecha: {$exam->pivot->created_at}
            </li>
            ";
    }
});

Route::get('n+1', function () {
    $books = App\Book::with('category', 'users')
        ->get();

    return view('n+1.index', compact('books'));
});
