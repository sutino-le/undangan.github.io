<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Undangan extends BaseController
{
    public function index()
    {
        return view('undangan/index');
    }

    public function slide()
    {
        return view('undangan/slide');
    }
}
