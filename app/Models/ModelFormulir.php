<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelFormulir extends Model
{
    public function getFormulir()
    {
        return $this->db->table('tbl_siswa')
            ->where('id_siswa', session()->get('id_siswa'))
            ->get()
            ->getRowArray();
    }

    public function editData($data)
    {
        $this->db->table('tbl_siswa')
            ->where('id_siswa', $data['id_siswa'])
            ->update($data);
    }
}
