<?php

namespace App\Models;

use CodeIgniter\Model;

class JadwalModel extends Model
{
    protected $table            = 'jadwal';
    protected $primaryKey       = 'id_jadwal';
    protected $allowedFields    = ['id_dosen', 'id_matkul', 'tanggal', 'jam_mulai', 'jam_selesai'];

    public function show()
    {
        return $this->join('matkul', 'jadwal.id_matkul = matkul.id_matkul')
            ->join('dosen', 'jadwal.id_dosen = dosen.id_dosen')
            ->get()
            ->getResult();
    }
    
    public function getTerbaru()
    {
        $now = date('Y-m-d');
        return $this->where('tanggal >=', $now)
            ->orderBy('jam_mulai', 'ASC')
            ->first();
    }

    public function getJadwalDosen()
    {
        $now = date('Y-m-d');
        return $this->join('dosen', 'jadwal.id_dosen = dosen.id_dosen')
            ->join('matkul', 'jadwal.id_matkul = matkul.id_matkul')
            ->where('jadwal.id_dosen', session()->dosen['id_dosen'])
            ->where('tanggal >=' ,$now)
            ->orderBy('tanggal','ASC')
            ->first();
    }
}

