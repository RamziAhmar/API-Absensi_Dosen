<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use CodeIgniter\HTTP\ResponseInterface;

class User extends BaseController
{
    protected $user;

    public function __construct() {
        $this->user = new UserModel();
    }
    public function index()
    {
        $data = [
            'title' =>'Absensi',
            'user'=> $this->user->findAll()
        ];
        
        return view('user', $data);
    }

    public function create()
    {
        return view('user_form');
    }

    public function insert()
    {
        $data = [
            'username' => $this->request->getVar('username'),
            'password' => md5($this->request->getVar('password')),
            'akses' => $this->request->getVar('akses'),
        ];
        $username = $data['username'];
        $password = $data['password'];
        $akses = $data['akses'];

        $this->user->insert($data);
        $token = "7034180779:AAE-jH6Li6wWRu2_1f0hXj971766k6nIBK4";
        $datas = [
            'text' => "Tambah data User
Username = $username
Password = $password
Akses = $akses",
            'chat_id' => '-4141617308'
        ];
        file_get_contents("https://api.telegram.org/bot$token/sendMessage?" . http_build_query($datas));
        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan!!');
        return redirect()->to('/user');
    }
}
