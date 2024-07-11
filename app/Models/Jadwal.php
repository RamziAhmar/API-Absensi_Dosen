<?php

namespace App\Models;

use CodeIgniter\Model;

class Jadwal extends Model
{
    protected $table            = 'jadwal';
    protected $primaryKey       = 'id_jadwal';
    protected $allowedFields    = ['id_dosen', 'id_matkul', 'tanggal', 'jam_mulai', 'jam_selesai'];
}

