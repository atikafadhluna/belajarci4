<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class DaftarUlang extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'PPDB MTsN 4 ABES',
            'subtitle' => 'Halaman Daftar Ulang',
        ];
        return view('csiswa/daftar_ulang', $data);
    }
}
