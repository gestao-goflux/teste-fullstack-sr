<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public $timestamps = false;

    protected $fillable = [];

    public function user ()
    {
        return $this->hasMany(Offer::class);
    }
}