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
}
