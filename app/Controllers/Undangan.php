<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelUsers;

class Undangan extends BaseController
{
    public function index($userid)
    {
        $modelUser = new ModelUsers();
        $cekData = $modelUser->find($userid);


        $data = [
            'usernama' => $cekData['usernama']
        ];
        return view('undangan/index', $data);
    }

    public function slide()
    {
        return view('undangan/slide');
    }
}
