<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelSetting extends Model
{
    public function detailSetting()
    {
        return $this->db->table('tbl_web')
            ->where('id_setting', '1')
            ->get()->getRowArray();
    }

    public function saveSetting($data)
    {
        $this->db->table('tbl_web')
            ->where('id_setting', '1')
            ->update($data);
    }

    public function saveSetting2($data)
    {
        $this->db->table('tbl_web')
            ->where('id_setting', '1')
            ->update($data);
    }

    public function saveSetting3($data)
    {
        $this->db->table('tbl_web')
            ->where('id_setting', '1')
            ->update($data);
    }

    public function saveSetting4($data)
    {
        return $this->db->table('tbl_web')
            ->where('id_setting', '1')
            ->update($data);
    }

    public function saveSetting5($data)
    {
        return $this->db->table('tbl_web')
            ->where('id_setting', '1')
            ->update($data);
    }

    public function saveSetting6($data)
    {
        return $this->db->table('tbl_web')
            ->where('id_setting', '1')
            ->update($data);
    }

    public function saveSetting7($data)
    {
        return $this->db->table('tbl_web')
            ->where('id_setting', '1')
            ->update($data);
    }
}
