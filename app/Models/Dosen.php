<?php

namespace App\Models;

use CodeIgniter\Model;

class Dosen extends Model
{
    protected $table            = 'dosen';
    protected $primaryKey       = 'id_dosen';
    protected $allowedFields    = ['id_user', 'nama_lengkap', 'email', 'no_hp'];
}
