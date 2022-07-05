<?php

namespace App\Controllers;

use App\Models\ModelTahunAjaran;

class TahunAjaran extends BaseController
{
    public function __construct()
    {
        $this->ModelTahunAjaran = new ModelTahunAjaran();
        helper('form');
    }

    public function index()
    {
        $data = [
            'title' => 'PPDB MTsN 4 ABES',
            'subtitle' => 'Tahun Ajaran',
            'ta' => $this->ModelTahunAjaran->getAllData(),
        ];
        return view('kepsek/pengaturan/tahun_ajaran', $data);
    }

    public function insertData()
    {
        $data = [
            'tahun' => $this->request->getPost('tahun'),
            'ta' => $this->request->getPost('ta'),
        ];

        $this->ModelTahunAjaran->insertData($data);
        session()->setFlashdata('add', 'Data Berhasil Di Tambah');
        return redirect()->to(base_url('tahunajaran/index'));
    }

    public function editData($id_ta)
    {
        $data = [
            'id_ta' => $id_ta,
            'tahun' => $this->request->getPost('tahun'),
            'ta' => $this->request->getPost('ta'),
        ];

        $this->ModelTahunAjaran->editData($data);
        session()->setFlashdata('edit', 'Data Berhasil Di Edit');
        return redirect()->to(base_url('tahunajaran/index'));
    }

    public function deleteData($id_ta)
    {
        $data = [
            'id_ta' => $id_ta,
        ];

        $this->ModelTahunAjaran->deleteData($data);
        session()->setFlashdata('delete', 'Data Berhasil Di Delete !!');
        return redirect()->to(base_url('tahunajaran/index'));
    }

    public function statusAktif($id_ta)
    {
        $data = [
            'id_ta' => $id_ta,
            'status' => 1
        ];
        $this->ModelTahunAjaran->resetStatus();
        $this->ModelTahunAjaran->editData($data);
        session()->setFlashdata('add', 'Status Tahun Ajaran Berhasil Di Ganti !!');
        return redirect()->to(base_url('tahunajaran/index'));
    }

    public function statusNonaktif($id_ta)
    {
        $data = [
            'id_ta' => $id_ta,
            'status' => 0
        ];

        $this->ModelTahunAjaran->editData($data);
        session()->setFlashdata('add', 'Status Tahun Ajaran Berhasil Di Ganti !!');
        return redirect()->to(base_url('tahunajaran/index'));
    }
}
