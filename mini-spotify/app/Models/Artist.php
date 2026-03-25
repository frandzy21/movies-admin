<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    protected $fillable = ['name', 'genre'];

    public function album()
    {
        return $this->hasMany(Album::class);
    }
}
