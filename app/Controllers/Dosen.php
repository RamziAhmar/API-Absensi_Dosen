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
            'absensi'=> $this->dosen->findAll()
        ];
        
        return view('absensi', $data);
    }
}
