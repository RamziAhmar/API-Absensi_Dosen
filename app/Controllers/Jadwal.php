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
            'jadwal'=> $this->jadwal->findAll()
        ];
        
        return view('jadwal', $data);
    }
}
