<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\JadwalModel;

class Jadwal extends BaseController
{
    protected $jadwal;

    public function __construct() {
        $this->jadwal = new JadwalModel();
    }
    public function index()
    {
        $data = [
            'title' =>'jadwal',
            'jadwal'=> $this->jadwal->show()
        ];
        
        return view('jadwal', $data);
    }

    public function create()
    {
        return view('jadwal_form');
    }

    public function insert()
    {
        $data = [
            'id_dosen' => $this->request->getVar('id_dosen'),
            'id_matkul' => $this->request->getVar('id_matkul'),
            'tanggal' => $this->request->getVar('tanggal'),
            'jam_mulai' => $this->request->getVar('jam_mulai'),
            'jam_selesai' => $this->request->getVar('jam_selesai'),
        ];

        $this->jadwal->insert($data);
        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan!!');
        return redirect()->to('/jadwal');
    }
}
