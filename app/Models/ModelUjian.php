<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelUjian extends Model
{
    public function insertNilai($data)
    {
        $this->db->table('tbl_siswa')
            ->where('nilai_ujian', $data)
            ->insertBatch($data);
    }
}
