<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    public $timestamps = false;
    protected $fillable = ['customer_email', 'concert_id'];

    public function concert()
    {
        return $this->belongsTo(Concert::class);
    }
}
