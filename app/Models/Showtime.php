<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Showtime extends Model
{
    protected $fillable = ['date','time', 'movie_id', 'price'];

    public function movie()
    {
        return $this->belongsTo(Movie::class, 'movie_id');
    }

    public function ticket()
    {
        return $this->hasMany(Ticket::class);
    }
}
