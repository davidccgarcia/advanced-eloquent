<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // relacion - hasMany
    public function books()
    {
        return $this->hasMany(Book::class);
    }

    // Accesor - num_books
    public function getNumBooksAttribute()
    {
        return count($this->books);
    }
}
