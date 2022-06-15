<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelMempelaiSatu;
use App\Models\ModelUsers;

class Undangan extends BaseController
{
    public function index($userid)
    {
        $modelUser = new ModelUsers();
        $cekDataUser = $modelUser->find($userid);

        $modelMempelai = new ModelMempelaiSatu();
        $cekDataSatu = $modelMempelai->find($userid);


        $data = [
            'usernama' => $cekDataUser['usernama'],
            'nikahsatunamapanggilan' => $cekDataSatu['nikahsatunamapanggilan'],
        ];
        return view('undangan/index', $data);
    }

    public function slide()
    {
        return view('undangan/slide');
    }
}
