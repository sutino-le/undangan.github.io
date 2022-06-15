<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelMempelaiDua;
use App\Models\ModelMempelaiSatu;

class Mempelai extends BaseController
{
    protected $helpers = ['form'];

    public function __construct()
    {
        $this->mempelaisatu = new ModelMempelaiSatu();
        $this->mempelaidua = new ModelMempelaiDua();
    }


    public function satu()
    {

        $userid = session()->userid;
        $modelMempelaiSatu = new ModelMempelaiSatu();
        $data = [
            'title' => '| Mempelai',
            'tampildata' => $modelMempelaiSatu->where('nikahsatuuser', $userid)->findAll()
        ];
        return view('mempelaisatu/viewdata', $data);
    }


    public function formtambahsatu()
    {

        $userid = session()->userid;
        $modelMempelaiSatu = new ModelMempelaiSatu();
        $data = [
            'title' => 'Mempelai',
            'userid' => $userid,
            'tampildata' => $modelMempelaiSatu->where('nikahsatuuser', $userid)->findAll()
        ];
        return view('mempelaisatu/formtambahsatu', $data);
    }

    public function simpansatu()
    {
        $nikahsatuuser              = $this->request->getVar('nikahsatuuser');
        $nikahsatunamapanggilan     = $this->request->getVar('nikahsatunamapanggilan');
        $nikahsatunamalengkap       = $this->request->getVar('nikahsatunamalengkap');
        $nikahsatujenis             = $this->request->getVar('nikahsatujenis');
        $nikahsatukeluarga          = $this->request->getVar('nikahsatukeluarga');
        $nikahsatualamat            = $this->request->getVar('nikahsatualamat');

        $validation = \Config\Services::validation();

        $valid = $this->validate([
            'nikahsatuuser'    => [
                'label'     => 'User',
                'rules'     => 'required',
                'errors'    => [
                    'required'  => '{field} tidak boleh kosong'
                ]
            ],
            'nikahsatunamapanggilan'    => [
                'label'     => 'Nama Panggilan',
                'rules'     => 'required',
                'errors'    => [
                    'required'  => '{field} tidak boleh kosong'
                ]
            ],
            'nikahsatunamalengkap'    => [
                'label'     => 'Nama Lengkap',
                'rules'     => 'required',
                'errors'    => [
                    'required'  => '{field} tidak boleh kosong'
                ]
            ],
            'nikahsatujenis'    => [
                'label'     => 'Jenis',
                'rules'     => 'required',
                'errors'    => [
                    'required'  => '{field} tidak boleh kosong'
                ]
            ],
            'nikahsatukeluarga'    => [
                'label'     => 'Keluarga',
                'rules'     => 'required',
                'errors'    => [
                    'required'  => '{field} tidak boleh kosong'
                ]
            ],
            'nikahsatualamat'    => [
                'label'     => 'Alamat',
                'rules'     => 'required',
                'errors'    => [
                    'required'  => '{field} tidak boleh kosong'
                ]
            ]
        ]);

        if (!$valid) {
            $sess_Pesan = [
                'title'            => '| Mempelai',
                'errPanggilan'     => $validation->getError('nikahsatunamapanggilan'),
                'errNama'          => $validation->getError('nikahsatunamalengkap'),
                'errJenis'         => $validation->getError('nikahsatujenis'),
                'errKeluarga'      => $validation->getError('nikahsatukeluarga'),
                'errAlamat'        => $validation->getError('nikahsatualamat'),
            ];

            session()->setFlashdata($sess_Pesan);
            return redirect()->to(site_url('/mempelai/formtambahsatu'))->withInput()->with('validation', $validation);
        } else {
            $this->mempelaisatu->insert([
                'nikahsatuuser'             => $nikahsatuuser,
                'nikahsatunamapanggilan'    => $nikahsatunamapanggilan,
                'nikahsatunamalengkap'      => $nikahsatunamalengkap,
                'nikahsatujenis'            => $nikahsatujenis,
                'nikahsatukeluarga'         => $nikahsatukeluarga,
                'nikahsatualamat'           => $nikahsatualamat,
                'mempelaisatufoto'          => '',
            ]);


            $sess_Pesan = [
                'title'         => '| Mempelai',
                'berhasil'     => 'Data berhasil disimpan'
            ];

            session()->setFlashdata($sess_Pesan);
            return redirect()->to(site_url('mempelai/satu'))->withInput()->with('validation', $validation);
        }
    }





    public function dua()
    {

        $userid = session()->userid;
        $modelMempelaiDua = new ModelMempelaiDua();
        $data = [
            'title' => '| Mempelai',
            'tampildata' => $modelMempelaiDua->where('nikahduauser', $userid)->findAll()
        ];
        return view('mempelaidua/viewdata', $data);
    }


    public function formtambahdua()
    {

        $userid = session()->userid;
        $modelMempelaiDua = new ModelMempelaiDua();
        $data = [
            'title' => 'Mempelai',
            'userid' => $userid,
            'tampildata' => $modelMempelaiDua->where('nikahduauser', $userid)->findAll()
        ];
        return view('mempelaidua/formtambahdua', $data);
    }

    public function simpandua()
    {
        $nikahduauser              = $this->request->getVar('nikahduauser');
        $nikahduanamapanggilan     = $this->request->getVar('nikahduanamapanggilan');
        $nikahduanamalengkap       = $this->request->getVar('nikahduanamalengkap');
        $nikahduajenis             = $this->request->getVar('nikahduajenis');
        $nikahduakeluarga          = $this->request->getVar('nikahduakeluarga');
        $nikahduaalamat            = $this->request->getVar('nikahduaalamat');

        $validation = \Config\Services::validation();

        $valid = $this->validate([
            'nikahduauser'    => [
                'label'     => 'User',
                'rules'     => 'required',
                'errors'    => [
                    'required'  => '{field} tidak boleh kosong'
                ]
            ],
            'nikahduanamapanggilan'    => [
                'label'     => 'Nama Panggilan',
                'rules'     => 'required',
                'errors'    => [
                    'required'  => '{field} tidak boleh kosong'
                ]
            ],
            'nikahduanamalengkap'    => [
                'label'     => 'Nama Lengkap',
                'rules'     => 'required',
                'errors'    => [
                    'required'  => '{field} tidak boleh kosong'
                ]
            ],
            'nikahduajenis'    => [
                'label'     => 'Jenis',
                'rules'     => 'required',
                'errors'    => [
                    'required'  => '{field} tidak boleh kosong'
                ]
            ],
            'nikahduakeluarga'    => [
                'label'     => 'Keluarga',
                'rules'     => 'required',
                'errors'    => [
                    'required'  => '{field} tidak boleh kosong'
                ]
            ],
            'nikahduaalamat'    => [
                'label'     => 'Alamat',
                'rules'     => 'required',
                'errors'    => [
                    'required'  => '{field} tidak boleh kosong'
                ]
            ]
        ]);

        if (!$valid) {
            $sess_Pesan = [
                'title'            => '| Mempelai',
                'errPanggilan'     => $validation->getError('nikahduanamapanggilan'),
                'errNama'          => $validation->getError('nikahduanamalengkap'),
                'errJenis'         => $validation->getError('nikahduajenis'),
                'errKeluarga'      => $validation->getError('nikahduakeluarga'),
                'errAlamat'        => $validation->getError('nikahduaalamat'),
            ];

            session()->setFlashdata($sess_Pesan);
            return redirect()->to(site_url('/mempelai/formtambahdua'))->withInput()->with('validation', $validation);
        } else {
            $this->mempelaidua->insert([
                'nikahduauser'             => $nikahduauser,
                'nikahduanamapanggilan'    => $nikahduanamapanggilan,
                'nikahduanamalengkap'      => $nikahduanamalengkap,
                'nikahduajenis'            => $nikahduajenis,
                'nikahduakeluarga'         => $nikahduakeluarga,
                'nikahduaalamat'           => $nikahduaalamat,
                'mempelaiduafoto'          => '',
            ]);


            $sess_Pesan = [
                'title'         => '| Mempelai',
                'berhasil'     => 'Data berhasil disimpan'
            ];

            session()->setFlashdata($sess_Pesan);
            return redirect()->to(site_url('mempelai/dua'))->withInput()->with('validation', $validation);
        }
    }
}
