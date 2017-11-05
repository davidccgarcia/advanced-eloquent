<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = ['title', 'body'];

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
}
