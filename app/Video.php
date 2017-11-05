<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $fillable = ['title', 'body'];

    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }
}
