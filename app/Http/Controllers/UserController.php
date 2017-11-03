<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Book;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function getEditManyToMany($user_id)
    {
        $user = User::find($user_id);
        $books = Book::orderBy('title', 'ASC')->lists('title', 'id');

        return view('manytomany.edit', compact('user', 'books'));
    }

    public function putEditManyToMany(Request $request, $user_id)
    {
        $user = User::find($user_id);
        $user->manyBooks()->sync($request->get('books'));

        return redirect('manytomany');
    }
}
