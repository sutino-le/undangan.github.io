<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelMempelaiDua;
use App\Models\ModelMempelaiSatu;

class Mempelai extends BaseController
{

    public function __construct()
    {
        $this->mempelaisatu = new ModelMempelaiSatu();
        $this->mempelaidua = new ModelMempelaiDua();
    }


    public function satu()
    {
        $data = [
            'title' => 'Mempelai',
            'tampildata' => $this->mempelaisatu->tampildata()
        ];
        return view('mempelaisatu/viewdata', $data);
    }
}
