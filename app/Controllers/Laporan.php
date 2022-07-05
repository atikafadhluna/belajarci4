<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelPendaftar;

class Laporan extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->ModelPendaftar = new ModelPendaftar();
    }

    public function siswaLulus()
    {
        $data = [
            'title' => 'PPDB MTsN 4 ABES',
            'subtitle' => 'Halaman Siswa Lulus',
            'ppdb' => $this->ModelPendaftar->getPpdbFormulir(),
        ];
        return view('panitia/laporan/siswa_lulus', $data);
    }

    public function siswaTLulus()
    {
        $data = [
            'title' => 'PPDB MTsN 4 ABES',
            'subtitle' => 'Halaman Siswa Lulus',
            'ppdb' => $this->ModelPendaftar->getPpdbFormulir(),
        ];
        return view('panitia/laporan/siswa_tdk_lulus', $data);
    }
}
