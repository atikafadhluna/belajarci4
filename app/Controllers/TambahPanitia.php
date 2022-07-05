<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelTPanitia;

class TambahPanitia extends BaseController
{
    public function __construct()
    {
        $this->ModelTPanitia = new ModelTPanitia();
        helper('form');
    }

    public function index()
    {
        $data = [
            'title' => 'PPDB MTsN 4 ABES',
            'subtitle' => 'Tambah Panitia',
            'nama_panitia' => $this->ModelTPanitia->getAllData(),
        ];
        return view('kepsek/tambah_panitia', $data);
    }

    public function insertData()
    {
        //ambil file yang akan di insert
        $file = $this->request->getFile('foto');
        $nama_file = $file->getRandomName();

        //data yang di insert
        $data = [
            'nama_panitia' => $this->request->getPost('nama_panitia'),
            'email' => $this->request->getPost('email'),
            'telepon_panitia' => $this->request->getPost('telepon_panitia'),
            'password' => $this->request->getPost('password'),
            'foto' => $nama_file
        ];

        //Upload File
        $file->move('foto/', $nama_file);

        $this->ModelTPanitia->insertData($data);
        session()->setFlashdata('add', 'Data Berhasil Di Tambah');
        return redirect()->to(base_url('tambahpanitia/index'));
    }

    public function editData($id_panitia)
    {

        //edit data tanpa edit foto
        $file = $this->request->getFile('foto');
        if ($file->getError() == 4) {
            $data = [
                'id_panitia' => $id_panitia,
                'nama_panitia' => $this->request->getPost('nama_panitia'),
                'email' => $this->request->getPost('email'),
                'telepon_panitia' => $this->request->getPost('telepon_panitia'),
                'password' => $this->request->getPost('password'),
            ];
            $this->ModelTPanitia->editData($data);
        } else {

            //hapus foto dalam folder foto
            $panitia = $this->ModelTPanitia->detailData($id_panitia);
            if ($panitia['foto'] != "") {
                unlink('./foto/' . $panitia['foto']);
            }

            //edit data foto
            $nama_file = $file->getRandomName();
            $data = [
                'id_panitia' => $id_panitia,
                'nama_panitia' => $this->request->getPost('nama_panitia'),
                'email' => $this->request->getPost('email'),
                'telepon_panitia' => $this->request->getPost('telepon_panitia'),
                'password' => $this->request->getPost('password'),
                'foto' => $nama_file
            ];
            //upload file foto
            $file->move('foto/', $nama_file);
            $this->ModelTPanitia->editData($data);
        }
        session()->setFlashdata('edit', 'Data Berhasil Di Edit');
        return redirect()->to(base_url('tambahpanitia/index'));
    }

    public function deleteData($id_panitia)
    {
        //hapus foto dalam folder foto
        $panitia = $this->ModelTPanitia->detailData($id_panitia);
        if ($panitia['foto'] != "") {
            unlink('./foto/' . $panitia['foto']);
        }

        $data = [
            'id_panitia' => $id_panitia,
        ];

        $this->ModelTPanitia->deleteData($data);
        session()->setFlashdata('delete', 'Data Berhasil Di Delete');
        return redirect()->to(base_url('tambahpanitia/index'));
    }
}
