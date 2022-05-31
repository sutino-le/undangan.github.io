<?php

namespace App\Controllers;

use App\Models\ModelBarang;

class Main extends BaseController
{
    public function __construct()
    {
        $this->barang   = new Modelbarang();
    }

    public function index()
    {
        $data = [
            'title' => 'Halaman pertama',
            'tampildata' => $this->barang->tampildata()
        ];
        return view('main/layout', $data);
    }

    public function detailbarang($brgid)
    {

        $data = [
            'title' => 'Halaman Detail',
            'tampildata' => $this->barang->detailbarang($brgid)
        ];
        return view('main/detailbarang', $data);
    }
}
