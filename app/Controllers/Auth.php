<?php

namespace App\Controllers;

use App\Models\DosenModel;
use App\Models\UserModel;
use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Auth extends BaseController
{
    protected $user;
    protected $dosen;

    public function __construct()
    {
        $this->user = new UserModel();
        $this->dosen = new DosenModel();
    }
    public function index()
    {
        return view('login');
    }

    public function proses()
    {
        $username = $this->request->getVar('username');
        $password = md5($this->request->getVar('password'));

        $data = $this->user->where('username', $username)->first();

        if ($password == $data['password']) {
            // $profil = $this->profile->getProfilId($data['id_user']);
            // $nim = $this->profile->getNim($data['id_user']);
            $dosen = $this->dosen->where('id_user', $data['id_user'])->first();
            $simpan_session = [
                'user' => $data,
                'akses' => $data['akses'],
                'dosen' => $dosen,
                'logged_in' => true
            ];
            session()->set($simpan_session);
            session()->setFlashdata('sukses', ['welcome' => 'Selamat Datang']);
            return redirect()->to('/home');
            if ($data['akses'] == 1) {
                return redirect()->to('/admin');
            } else {
                session()->setFlashdata('error', ['gagal' => 'Email atau Password Anda Salah!!']);
                return redirect()->to('/');
            }
        } else {
            session()->setFlashdata('error', ['gagal' => 'Email atau Password Anda Salah!!']);
            return redirect()->back()->withInput();
        }

    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        session()->setFlashdata('logout', 'Anda Berhasil Logout!');
        return redirect()->to('/');
    }
}
