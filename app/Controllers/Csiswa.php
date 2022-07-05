<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Csiswa extends BaseController
{

    public function index()
    {
        $data = [
            'title' => 'PPDB MTsN 4 ABES',
            'subtitle' => 'Halaman Dashboard',

        ];
        return view('csiswa/index', $data);
    }
}
