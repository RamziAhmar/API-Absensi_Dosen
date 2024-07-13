<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\AbsensiModel;

class Absensi extends BaseController
{
    protected $absensi;

    public function __construct() {
        $this->absensi = new AbsensiModel();
    }
    public function index()
    {
        $data = [
            'title' =>'Absensi',
            'absensi'=> $this->absensi->show()
        ];
        
        return view('absensi', $data);
    }

    public function create()
    {
        return view('absensi_form');
    }

    public function insert()
    {
        $data = [
            'id_dosen' => $this->request->getVar('id_dosen'),
            'id_jadwal' => $this->request->getVar('id_jadwal'),
            'status' => $this->request->getVar('status'),
        ];

        $this->absensi->insert($data);
        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan!!');
        return redirect()->to('/absensi');
    }
}
