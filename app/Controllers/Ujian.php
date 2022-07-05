<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelPendaftar;
use App\Models\ModelUjian;

class Ujian extends BaseController
{
    public function __construct()
    {
        $this->ModelPendaftar = new ModelPendaftar();
        $this->ModelUjian = new ModelUjian();
        helper('form');
    }

    public function index()
    {
        $data = [
            'title' => 'PPDB MTsN 4 ABES',
            'subtitle' => 'Halaman Informasi Pelaksanaan Ujian',
        ];
        return view('csiswa/info_ujian', $data);
    }

    public function ujianppdb()
    {
        $data = [
            'title' => 'PPDB MTsN 4 ABES',
            'subtitle' => 'Halaman Ujian PPDB',
        ];
        return view('csiswa/ujian', $data);
    }

    // begin :: panitia

    public function inputNilai()
    {
        $data = [
            'title' => 'PPDB MTsN 4 ABES',
            'subtitle' => 'Halaman Input Nilai Ujian',
            'ppdb' => $this->ModelPendaftar->getPpdbFormulir(),
        ];
        return view('panitia/ujian/input_nilai', $data);
    }

    public function insertNilai($data)
    {
        $data = [
            'nilai_ujian' => $this->request->getPost('nilai_ujian'),

        ];

        $this->ModelUjian->insertNilai($data);
        session()->setFlashdata('add', 'Data Berhasil Di Tambah');
        return redirect()->to(base_url('Ujian/inputNilai'));
    }

    // end :: panitia
}
