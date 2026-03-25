<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Concert extends Model
{
    public $timestamps = false;

    protected $fillable = ['city', 'venue', 'date', 'time', 'price', 'artist_id'];

    public function artist()
    {
        return $this->belongsTo(Artist::class);
    }
}
