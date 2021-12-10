<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'name',
        'quantity',
        'current_address',
        'destiny_address',
        'accepted_order',
        'user_id'
    ];

    public function offer ()
    {
        return $this->hasMany(Order::class, 'accepted_order', 'id');
    }
}