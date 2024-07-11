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
            'absensi'=> $this->absensi->findAll()
        ];
        
        return view('absensi', $data);
    }
}
