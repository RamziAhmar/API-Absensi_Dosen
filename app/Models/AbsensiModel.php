<?php

namespace App\Models;

use CodeIgniter\Model;

class AbsensiModel extends Model
{
    protected $table            = 'absensi';
    protected $primaryKey       = 'id_absensi';
    protected $allowedFields    = ['id_dosen', 'id_jadwal', 'status'];

    public function show()
    {
        return $this->join('jadwal', 'absensi.id_jadwal = jadwal.id_jadwal')
            ->join('dosen', 'absensi.id_dosen = dosen.id_dosen')
            ->get()
            ->getResult();
    }
    
    public function getTerbaru()
    {   
        $now = date('Y-m-d');
        return $this->join('dosen', 'absensi.id_dosen = dosen.id_dosen')
            ->join('jadwal', 'absensi.id_jadwal = jadwal.id_jadwal')
            ->where('absensi.id_dosen', session()->dosen['id_dosen'])
            ->where('jadwal.tanggal >=', $now)
            ->orderBy('jadwal.tanggal', 'DESC')
            ->first();
    }
}
