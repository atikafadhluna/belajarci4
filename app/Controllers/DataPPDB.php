<?php

namespace App\Controllers;

use App\Models\ModelPendaftar;

class DataPPDB extends BaseController
{
    public function __construct()
    {
        $this->ModelPendaftar = new ModelPendaftar();
        helper('form');
    }

    // bagian pendaftar
    public function pendaftar()
    {
        $data = [
            'title' => 'PPDB MTsN 4 ABES',
            'subtitle' => 'Daftar Akun Pendaftar',
            'pendaftar' => $this->ModelPendaftar->getAllData(),
        ];
        return view('panitia/datappdb/pendaftar', $data);
    }

    public function deleteData($id_siswa)
    {
        $data = [
            'id_siswa' => $id_siswa,
        ];

        $this->ModelPendaftar->deleteData($data);
        session()->setFlashdata('delete', 'Data Berhasil Di Delete');
        return redirect()->to(base_url('DataPPDB/pendaftar'));
    }

    // bagian pendaftar



    // bagian formulir
    public function daftarFormulir()
    {
        $data = [
            'title' => 'PPDB MTsN 4 ABES',
            'subtitle' => 'Daftar Formulir',
            'ppdb' => $this->ModelPendaftar->getPpdbFormulir(),
        ];
        return view('panitia/datappdb/daftar_formulir', $data);
    }

    public function detailFormulir($id_siswa)
    {
        $data = [
            'id_siswa' => $id_siswa,
        ];

        return redirect()->to(base_url('dataPPDB/daftarFormulir'));
    }

    public function editFormulir($id_siswa)
    {
        $data = [
            'id_siswa' => $id_siswa,
            'nama_siswa' => $this->request->getPost('nama_siswa'),
            'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
            'tempat_lahir' => $this->request->getPost('tempat_lahir'),
            'tgl_lahir' => $this->request->getPost('tgl_lahir'),
            'alamat_rumah' => $this->request->getPost('alamat_rumah'),
            'nama_ayah' => $this->request->getPost('nama_ayah'),
            'nama_ibu' => $this->request->getPost('nama_ibu'),
            'no_ortu' => $this->request->getPost('no_ortu'),
            'telepon_siswa' => $this->request->getPost('telepon_siswa'),
            'sekolah_asal' => $this->request->getPost('sekolah_asal'),
        ];
        $this->ModelPendaftar->editData($data);

        return redirect()->to(base_url('dataPPDB/daftarFormulir'));
    }

    public function deleteDataFormulir($id_siswa)
    {
        $data = [
            'id_siswa' => $id_siswa,
        ];

        $this->ModelPendaftar->deleteDataFormulir($data);
        session()->setFlashdata('delete', 'Data Berhasil Di Delete');
        return redirect()->to(base_url('dataPPDB/daftarFormulir'));
    }
    // bagian formulir
}
