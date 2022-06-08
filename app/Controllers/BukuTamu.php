<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelBukuTamu;
use App\Models\ModelBukuTamuHp;

class BukuTamu extends BaseController
{
    public function index()
    {
        $userid = session()->userid;
        $modelbukuhp = new ModelBukuTamu();

        $data = [
            'title' => '| Buku Tamu',
            'tampildata'    => $modelbukuhp->where('tamuuser', $userid)->findAll()
        ];


        return view('tamu/viewdata', $data);
    }

    public function formtambah()
    {
        $data = [
            'title' => '| Buku Tamu'
        ];
        return view('tamu/formtambah', $data);
    }

    public function simpan()
    {
        $tamuuser = $this->request->getPost('tamuuser');
        $tamuhp = '+62' . $this->request->getPost('tamuhp');
        $tamunama = $this->request->getPost('tamunama');

        $validation = \Config\Services::validation();

        $valid = $this->validate([
            'tamuhp'    => [
                'label'     => 'Nomor Hp',
                'rules'     => 'required|numeric',
                'errors'    => [
                    'required'  => '{field} tidak boleh kosong',
                    'numeric'   => 'Hanya angka'
                ]
            ],
            'tamunama'    => [
                'label'     => 'Nama',
                'rules'     => 'required',
                'errors'    => [
                    'required'  => '{field} tidak boleh kosong'
                ]
            ]
        ]);



        if (!$valid) {
            $sess_Pesan = [
                'title'         => '| Buku Tamu',
                'errTamuHp'     => $validation->getError('tamuhp'),
                'errTamuNama'   => $validation->getError('tamunama')
            ];

            session()->setFlashdata($sess_Pesan);
            return redirect()->to(site_url('bukutamu/formtambah'))->withInput()->with('validation', $validation);
        } else {
            $modelbuku = new ModelBukuTamu();
            $cariDataBuku = $modelbuku->where('tamuhp', $tamuhp)->findAll();

            if ($cariDataBuku > 0) {
                $sess_Pesan = [
                    'title'         => '| Buku Tamu',
                    'errTamuHp'     => 'Nomor HP sudah ada'
                ];

                session()->setFlashdata($sess_Pesan);
                return redirect()->to(site_url('bukutamu/formtambah'))->withInput()->with('validation', $validation);
            } else {
                $modelbuku->insert([
                    'tamuuser'      => $tamuuser,
                    'tamuhp'        => $tamuhp,
                    'tamunama'      => $tamunama,
                ]);

                $sess_Pesan = [
                    'title'         => '| Buku Tamu',
                    'berhasil'     => 'Data berhasil disimpan'
                ];

                session()->setFlashdata($sess_Pesan);
                return redirect()->to(site_url('bukutamu/formtambah'))->withInput()->with('validation', $validation);
            }
        }
    }


    public function formedit($tamuid)
    {
        $modelbuku = new ModelBukuTamu();
        $dataEdit = $modelbuku->find($tamuid);

        $data = [
            'title' => '| Buku Tamu',
            'tamuid' => $dataEdit['tamuid'],
            'tamuuser' => $dataEdit['tamuuser'],
            'tamuhp' => $dataEdit['tamuhp'],
            'tamunama' => $dataEdit['tamunama'],
        ];
        return view('tamu/formedit', $data);
    }

    public function update()
    {
        $tamuid = $this->request->getPost('tamuid');
        $tamuuser = $this->request->getPost('tamuuser');
        $tamuhplama = $this->request->getPost('tamuhplama');
        $tamuhp = $this->request->getPost('tamuhp');
        $tamunama = $this->request->getPost('tamunama');

        $validation = \Config\Services::validation();

        $valid = $this->validate([
            'tamuhp'    => [
                'label'     => 'Nomor Hp',
                'rules'     => 'required|numeric',
                'errors'    => [
                    'required'  => '{field} tidak boleh kosong',
                    'numeric'   => 'Hanya angka'
                ]
            ],
            'tamuhplama'    => [
                'label'     => 'Nomor Hp Lama',
                'rules'     => 'required|numeric',
                'errors'    => [
                    'required'  => '{field} tidak boleh kosong',
                    'numeric'   => 'Hanya angka'
                ]
            ],
            'tamunama'    => [
                'label'     => 'Nama',
                'rules'     => 'required',
                'errors'    => [
                    'required'  => '{field} tidak boleh kosong'
                ]
            ]
        ]);



        if (!$valid) {
            $sess_Pesan = [
                'title'         => '| Buku Tamu',
                'errTamuHp'     => $validation->getError('tamuhp'),
                'errTamuNama'   => $validation->getError('tamunama')
            ];

            session()->setFlashdata($sess_Pesan);
            return redirect()->to(site_url('bukutamu/formedit/' . $tamuid))->withInput()->with('validation', $validation);
        } else {
            $modelbuku = new ModelBukuTamu();
            $cariDataBuku = $modelbuku->where('tamuhp', $tamuhp)->findAll();

            if ($tamuhplama != $tamuhp and $cariDataBuku > 0) {
                $sess_Pesan = [
                    'title'         => '| Buku Tamu',
                    'errTamuHp'     => 'Nomor HP sudah ada'
                ];

                session()->setFlashdata($sess_Pesan);
                return redirect()->to(site_url('bukutamu/formedit/' . $tamuid))->withInput()->with('validation', $validation);
            } else {
                $modelbuku->update($tamuid, [
                    'tamuhp'        => $tamuhp,
                    'tamunama'      => $tamunama,
                ]);

                $sess_Pesan = [
                    'title'         => '| Buku Tamu',
                    'berhasil'     => 'Data berhasil disimpan'
                ];

                session()->setFlashdata($sess_Pesan);
                return redirect()->to(site_url('bukutamu/index'))->withInput()->with('validation', $validation);
            }
        }
    }
}
