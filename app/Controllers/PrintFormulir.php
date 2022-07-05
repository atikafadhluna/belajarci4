<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelPendaftar;

class PrintFormulir extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->ModelPendaftar = new ModelPendaftar();
    }

    public function index()
    {
        $data = [
            'title' => 'PPDB MTsN 4 ABES',
            'subtitle' => 'Halaman Print Formulir',
            'ppdb' => $this->ModelPendaftar->getPpdbFormulir(),
        ];
        return view('csiswa/print_formulir', $data);
    }

    public function print($id_siswa)
    {
        $data = [
            'id_siswa' => $id_siswa,
        ];

        return redirect()->to(base_url('formulir'));
    }
}
