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
}
