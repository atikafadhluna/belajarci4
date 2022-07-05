<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class HasilUjian extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'PPDB MTsN 4 ABES',
            'subtitle' => 'Halaman Pengumuman Hasil Ujian',
        ];
        return view('csiswa/hasil_ujian', $data);
    }
}
