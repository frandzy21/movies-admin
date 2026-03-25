<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $fillable = ['title', 'release_year', 'artist_id'];

    public function artist()
    {
        return $this->belongsTo(Artist::class);
    }

    public function track()
    {
        return $this->hasMany(Track::class);
    }
}
