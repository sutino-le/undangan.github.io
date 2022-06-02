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

    public function daftar()
    {
        $data = [
            'title' => '| Daftar'
        ];
        return view('main/daftar', $data);
    }

    public function daftarsimpan()
    {
        $userid = $this->request->getPost('userid');
        $usernama = $this->request->getPost('usernama');
        $useremail = $this->request->getPost('useremail');
        $userpassword = $this->request->getPost('userpassword');

        $validation     = \config\Services::validation();

        $valid          = $this->validate([
            'userid'    => [
                'rules'     => 'required',
                'label'     => 'User ID',
                'errors'    => [
                    'required'  => '{field} tidak boleh kosong'
                ]
            ],
            'usernama'    => [
                'rules'     => 'required',
                'label'     => 'User Nama',
                'errors'    => [
                    'required'  => '{field} tidak boleh kosong'
                ]
            ],
            'useremail'    => [
                'rules'     => 'required',
                'label'     => 'Email',
                'errors'    => [
                    'required'  => '{field} tidak boleh kosong'
                ]
            ],
            'userpassword'    => [
                'rules'     => 'required',
                'label'     => 'Password',
                'errors'    => [
                    'required'  => '{field} tidak boleh kosong'
                ]
            ]
        ]);

        if (!$valid) {
            $sess_Pesan = [
                'errUserId' => $validation->getError('userid'),
                'errUserNama' => $validation->getError('usernama'),
                'errUserEmail' => $validation->getError('useremail'),
                'errUserPassword' => $validation->getError('userpassword'),
            ];




            session()->setFlashdata($sess_Pesan);
            // return redirect()->to('/main/daftar');
            return redirect()->to('/main/daftar')->withInput()->with('validation', $sess_Pesan);
        } else {
            $modelUser = new ModelUsers();
            $cekDataUser = $modelUser->find($userid);
            if ($cekDataUser > 0) {

                $sess_Pesan = [
                    'errUserId' => 'User ID sudah ada'
                ];




                session()->setFlashdata($sess_Pesan);
                // return redirect()->to('/main/daftar');
                return redirect()->to('/main/daftar')->withInput()->with('validation', $sess_Pesan);
            } else {
                $modelUser->insert([
                    'userid' => $userid,
                    'usernama' => $usernama,
                    'userfoto' => '',
                    'useremail' => $useremail,
                    'userpassword' => $userpassword,
                    'userlevelid' => '2',
                ]);

                $sukses = [
                    'berhasil' => 'Selamat anda sudah terdaftar, silahkan login'
                ];

                session()->setFlashdata($sukses);
                // return redirect()->to('/main/daftar');
                return redirect()->to('/main/daftar')->withInput()->with('validation', $sukses);
            }
        }
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
