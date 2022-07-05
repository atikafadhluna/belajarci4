<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelPendaftar extends Model
{
    //controller datappdb -> daftar peserta
    public function getAllData()
    {
        return $this->db->table('tbl_siswa')
            ->orderBy('id_siswa', 'ASC')
            ->get()
            ->getResultArray();
    }

    public function deleteData($data)
    {
        $this->db->table('tbl_siswa')
            ->where('id_siswa', $data['id_siswa'])
            ->delete($data);
    }
    //controller datappdb -> daftar peserta


    //controller datappdb -> daftar formulir
    public function getPpdbFormulir()
    {
        return $this->db->table('tbl_siswa')
            ->where('status_ppdb', '0')
            ->where('status_pendaftaran', '1')
            ->get()
            ->getResultArray();
    }


    public function detailData($data)
    {
        return $this->db->table('tbl_siswa')
            ->where('id_siswa', $data['id_siswa'])
            ->get()
            ->getResultArray();
    }

    public function editData($data)
    {
        $this->db->table('tbl_siswa')
            ->where('id_siswa', $data['id_siswa'])
            ->update($data);
    }
    public function deleteDataFormulir($data)
    {
        $this->db->table('tbl_siswa')
            ->where('id_siswa', $data['id_siswa'])
            ->delete($data);
    }


    //controller datappdb -> daftar formulir
}
