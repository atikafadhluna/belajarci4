<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelLampiran;

class ManageLampiran extends BaseController
{
    public function __construct()
    {
        $this->ModelLampiran = new ModelLampiran();
        helper('form');
    }

    public function index()
    {
        $data = [
            'title' => 'PPDB MTsN 4 ABES',
            'subtitle' => 'Manage lampiran',
            'lampiran' => $this->ModelLampiran->getAllData(),
        ];
        return view('kepsek/biodata/manage_lampiran', $data);
    }

    public function insertData()
    {
        $data = [
            'lampiran' => $this->request->getPost('lampiran'),
        ];

        $this->ModelLampiran->insertData($data);
        session()->setFlashdata('add', 'Data Berhasil Di Tambah');
        return redirect()->to(base_url('managelampiran/index'));
    }

    public function editData($id_lampiran)
    {
        $data = [
            'id_lampiran' => $id_lampiran,
            'lampiran' => $this->request->getPost('lampiran'),
        ];

        $this->ModelLampiran->editData($data);
        session()->setFlashdata('edit', 'Data Berhasil Di Edit');
        return redirect()->to(base_url('managelampiran/index'));
    }

    public function deleteData($id_lampiran)
    {
        $data = [
            'id_lampiran' => $id_lampiran,
        ];

        $this->ModelLampiran->deleteData($data);
        session()->setFlashdata('delete', 'Data Berhasil Di Delete');
        return redirect()->to(base_url('managelampiran/index'));
    }
}
