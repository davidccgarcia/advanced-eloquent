<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use SoftDeletes;
    
    // relación - belongsTo
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
