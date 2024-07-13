<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MatkulModel;
use CodeIgniter\HTTP\ResponseInterface;

class Matkul extends BaseController
{
    protected $matkul;

    public function __construct() {
        $this->matkul = new MatkulModel();
    }
    public function index()
    {
        $data = [
            'title' =>'Absensi',
            'matkul'=> $this->matkul->findAll()
        ];
        
        return view('matkul', $data);
    }

    public function create()
    {
        return view('matkul_form');
    }

    public function insert()
    {
        $data = [
            'nama_matkul' => $this->request->getVar('nama_matkul'),
            'sks' => $this->request->getVar('sks'),
            'keterangan' => $this->request->getVar('keterangan'),
        ];

        $this->matkul->insert($data);
        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan!!');
        return redirect()->to('/matkul');
    }
}
