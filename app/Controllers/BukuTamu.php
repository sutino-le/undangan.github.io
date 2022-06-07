<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class BukuTamu extends BaseController
{
    public function index()
    {
        $data = [
            'title' => '| Buku Tamu'
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
        }
    }
}
