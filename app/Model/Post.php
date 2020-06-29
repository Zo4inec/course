<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public $guarded = [];

    public function scopePublished($query)
    {
        return $query->where('published', 1);
    }
}


