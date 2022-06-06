<?php

namespace App\Controllers;

use App\Models\ModelBarang;
use App\Models\ModelKategori;
use App\Models\ModelSubKategori;
use App\Models\ModelUsers;

class Main extends BaseController
{
    public function __construct()
    {
        $this->barang   = new Modelbarang();
    }

    public function index()
    {
        $data = [
            'title' => '',
            'tampildata' => $this->barang->tampildata()
        ];
        return view('main/layout', $data);
    }


    public function detailbarang($brgid)
    {
        $modelBarang = new ModelBarang();
        $cekData = $modelBarang->find($brgid);

        $modelKategori = new ModelKategori();
        $cekKat = $modelKategori->find($cekData['brgkat']);

        $modelsubkategori = new ModelSubKategori();
        $cekSubKat = $modelsubkategori->find($cekData['brgsubkat']);

        $data = [
            'title'             => '| Detail',
            'brgid'             => $cekData['brgid'],
            'brgnama'           => $cekData['brgnama'],
            'brgkat'            => $cekKat['katnama'],
            'brgsubkat'         => $cekSubKat['subkatnama'],
            'brgharga'          => $cekData['brgharga'],
            'brgstok'           => $cekData['brgstok'],
            'brggambar'         => $cekData['brggambar'],
            'brgdeskripsi'      => $cekData['brgdeskripsi'],
        ];
        return view('main/detailbarang', $data);
    }
}
