<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Matkul extends BaseController
{
    public function index()
    {
        return view('matkul');
    }
}
