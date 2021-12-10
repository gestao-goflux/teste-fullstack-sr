<?php

namespace App\Http\Controllers;

use App\Offer;
class OffersController extends BaseController
{
    public function __construct()
    {
        $this->class = Offer::class;
    }

    public function getOffersByUser($user_id)
    {
        return $this->class::where('user_id', $user_id);
    }
}
