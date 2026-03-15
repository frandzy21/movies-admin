<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable = ['buyer_email', 'seat_number', 'showtime_id'];

    public function showtime()
    {
        return $this->belongsTo(Showtime::class, 'showtime_id');
    }
}
