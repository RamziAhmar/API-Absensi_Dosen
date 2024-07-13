<?php

namespace App\Models;

use CodeIgniter\Model;

class DosenModel extends Model
{
    protected $table            = 'dosen';
    protected $primaryKey       = 'id_dosen';
    protected $allowedFields    = ['id_user', 'nama_lengkap', 'email', 'no_hp'];

    public function show()
    {
        return $this->join('user', 'dosen.id_user = user.id_user')
            ->get()
            ->getResult();
    }
}
