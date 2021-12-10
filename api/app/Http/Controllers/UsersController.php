<?php

namespace App\Http\Controllers;

use App\User;

class UsersController extends BaseController
{

    public function __construct()
    {
        $this->class = User::class;
    }
}