<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelLevels;
use App\Models\ModelUsers;

class Login extends BaseController
{
    public function index()
    {
        $data = [
            'title' => '| Login'
        ];
        return view('login/login', $data);
    }

    public function cekUser()
    {
        $userid = $this->request->getPost('userid');
        $password = $this->request->getPost('password');

        $validation = \Config\Services::validation();



        $valid = $this->validate([
            'userid'    => [
                'label'     => 'ID User',
                'rules'     => 'required',
                'errors'    => [
                    'required'  => '{field} tidak boleh kosong'
                ]
            ],
            'password'    => [
                'label'     => 'Password',
                'rules'     => 'required',
                'errors'    => [
                    'required'  => '{field} tidak boleh kosong'
                ]
            ]
        ]);

        if (!$valid) {
            $sess_Pesan = [
                'errUserId'     => $validation->getError('userid'),
                'errPassword'   => $validation->getError('password')
            ];

            session()->setFlashdata($sess_Pesan);
            return redirect()->to(site_url('login/index'))->withInput()->with('validation', $validation);
        } else {
            $modelLogin  = new ModelUsers();

            $cekUserLogin = $modelLogin->find($userid);
            if ($cekUserLogin == null) {
                $sess_Pesan = [
                    'errUserId'     => 'Maaf user tidak terdaftar',
                ];

                session()->setFlashdata($sess_Pesan);
                return redirect()->to(site_url('login/index'));
            } else {
                $passwordUser = $cekUserLogin['userpassword'];

                if (password_verify($password, $passwordUser)) {
                    //lanjutkan
                    $idlevel = $cekUserLogin['userlevelid'];

                    $modelLevel = new ModelLevels();
                    $cekLevel = $modelLevel->find($idlevel);

                    $simpan_session = [
                        'userid'    => $userid,
                        'namauser'  => $cekUserLogin['usernama'],
                        'levelnama'  => $cekLevel['levelnama'],
                        'idlevel'   => $idlevel
                    ];
                    session()->set($simpan_session);

                    return redirect()->to('/main/index')->withInput()->with('validation', $validation);
                } else {
                    $sess_Pesan = [
                        'errPassword'     => 'Maaf password anda salah !!',
                    ];

                    session()->setFlashdata($sess_Pesan);
                    return redirect()->to(site_url('login/index'))->withInput()->with('validation', $validation);
                }
            }
        }
    }

    public function keluar()
    {
        session()->destroy();
        return redirect()->to('/login/index');
    }


    public function daftar()
    {
        $data = [
            'title' => '| Daftar'
        ];
        return view('login/daftar', $data);
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
            // return redirect()->to('/login/daftar');
            return redirect()->to('/login/daftar')->withInput()->with('validation', $sess_Pesan);
        } else {
            $modelUser = new ModelUsers();
            $cekDataUser = $modelUser->find($userid);
            if ($cekDataUser > 0) {

                $sess_Pesan = [
                    'errUserId' => 'User ID sudah ada'
                ];




                session()->setFlashdata($sess_Pesan);
                // return redirect()->to('/login/daftar');
                return redirect()->to('/login/daftar')->withInput()->with('validation', $sess_Pesan);
            } else {
                $modelUser->insert([
                    'userid' => $userid,
                    'usernama' => $usernama,
                    'userfoto' => '',
                    'useremail' => $useremail,
                    'userpassword' => password_hash($userpassword, PASSWORD_BCRYPT),
                    'userlevelid' => '2',
                ]);

                $sukses = [
                    'berhasil' => 'Selamat anda sudah terdaftar, silahkan login'
                ];

                session()->setFlashdata($sukses);
                // return redirect()->to('/login/daftar');
                return redirect()->to('/login/daftar')->withInput()->with('validation', $sukses);
            }
        }
    }
}
