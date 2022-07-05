<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelPekerjaan;

class ManagePekerjaan extends BaseController
{
    public function __construct()
    {
        $this->ModelPekerjaan = new ModelPekerjaan();
        helper('form');
    }

    public function index()
    {
        $data = [
            'title' => 'PPDB MTsN 4 ABES',
            'subtitle' => 'Manage Pekerjaan',
            'pekerjaan' => $this->ModelPekerjaan->getAllData(),
        ];
        return view('kepsek/biodata/manage_pekerjaan', $data);
    }

    public function insertData()
    {
        $data = [
            'pekerjaan' => $this->request->getPost('pekerjaan'),
        ];

        $this->ModelPekerjaan->insertData($data);
        session()->setFlashdata('add', 'Data Berhasil Di Tambah');
        return redirect()->to(base_url('managepekerjaan/index'));
    }

    public function editData($id_pekerjaan)
    {
        $data = [
            'id_pekerjaan' => $id_pekerjaan,
            'pekerjaan' => $this->request->getPost('pekerjaan'),
        ];

        $this->ModelPekerjaan->editData($data);
        session()->setFlashdata('edit', 'Data Berhasil Di Edit');
        return redirect()->to(base_url('managepekerjaan/index'));
    }

    public function deleteData($id_pekerjaan)
    {
        $data = [
            'id_pekerjaan' => $id_pekerjaan,
        ];

        $this->ModelPekerjaan->deleteData($data);
        session()->setFlashdata('delete', 'Data Berhasil Di Delete');
        return redirect()->to(base_url('managepekerjaan/index'));
    }
}
