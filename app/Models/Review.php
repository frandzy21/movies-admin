<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = ['author', 'rating', 'comment', 'movie_id'];

    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }
}
