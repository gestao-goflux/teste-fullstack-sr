<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'price',
        'quantity',
        'offer_id',
        'user_id',
        'accepted'
    ];

    public function order ()
    {
        return $this->belongsTo(Offer::class, 'offer_id', 'id');
    }
}