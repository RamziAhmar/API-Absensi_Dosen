<?php

namespace App\Controllers;

use App\Models\JadwalModel;
use App\Models\AbsensiModel;
use DeepCopy\Matcher\PropertyTypeMatcher;

class Home extends BaseController
{
    protected $jadwal;
    protected $absensi;

    public function __construct()
    {
        $this->absensi = new AbsensiModel();
        $this->jadwal = new JadwalModel();
    }
    public function index()
    {

        return view('dashboard');
    }

    public function hadir()
    {
        $data = [
            'absensi' => $this->absensi->getTerbaru(),
            'jadwal' => $this->jadwal->getJadwalDosen()
        ];
        // var_dump($data);die;
        return view('hadir', $data);
    }

    public function absen($status)
    {
        $absen = $this->absensi->getTerbaru();
        $jadwal = $this->jadwal->getJadwalDosen();
        if ($absen == null) {
            $data = [
                'id_dosen' => session()->dosen['id_dosen'],
                'id_jadwal' => $jadwal['id_jadwal'],
                'status' => $status
            ];
            $this->absensi->insert($data);

            $dosen = session()->dosen['nama_lengkap'];
            $tanggal = $jadwal['tanggal'];
            $jam_mulai = $jadwal['jam_mulai'];
            $jam_selesai = $jadwal['jam_selesai'];
            $token = getenv('TOKEN');
            $datas = [
                'text' => "Dosen $dosen akan $status pada tanggal $tanggal pada pukul $jam_mulai hingga $jam_selesai",
                'chat_id' => getenv('CHAT')
            ];
            file_get_contents("https://api.telegram.org/bot$token/sendMessage?" . http_build_query($datas));
            return redirect()->to('/');
        } else {
            return redirect()->to('/');
        }
    }
}
