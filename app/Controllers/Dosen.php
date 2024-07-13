<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DosenModel;
use CodeIgniter\HTTP\ResponseInterface;

class Dosen extends BaseController
{
    protected $dosen;

    public function __construct() {
        $this->dosen = new DosenModel();
    }
    public function index()
    {
        $data = [
            'title' =>'Absensi',
            'dosen'=> $this->dosen->show()
        ];
        
        return view('dosen', $data);
    }

    public function create()
    {
        return view('dosen_form');
    }

    public function insert()
    {
        $data = [
            'id_user' => $this->request->getVar('id_user'),
            'nama_lengkap' => $this->request->getVar('nama_lengkap'),
            'email' => $this->request->getVar('email'),
            'no_hp' => $this->request->getVar('no_hp'),
        ];

        $this->dosen->insert($data);
        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan!!');
        return redirect()->to('/dosen');
    }
}
