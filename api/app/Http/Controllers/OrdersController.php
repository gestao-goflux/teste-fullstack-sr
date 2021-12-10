<?php

namespace App\Http\Controllers;

use App\Order;
class OrdersController extends BaseController
{
    public function __construct()
    {
        $this->class = Order::class;
    }
}
