<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelAuth extends Model
{
    // begin admin
    public function login_user($email, $password)
    {
        return $this->db->table('tbl_user')->where(
            [
                'email' => $email,
                'password' => $password
            ]
        )->get()->getRowArray();
    }
    // end admin

    // begin panitia

    public function login_panitia($email, $password)
    {
        return $this->db->table('tbl_panitia')->where(
            [
                'email' => $email,
                'password' => $password
            ]
        )->get()->getRowArray();
    }

    // end panitia

    // begin siswa
    public function insertData($data)
    {
        $this->db->table('tbl_siswa')->insert($data);
    }

    public function login_siswa($nisn, $password)
    {
        return $this->db->table('tbl_siswa')->where(
            [
                'nisn' => $nisn,
                'password' => $password
            ]
        )->get()->getRowArray();
    }

    public function noPendaftaran()
    {
        $kode = $this->db->table('tbl_siswa')
            ->select('RIGHT(no_pendaftaran, 4) as no_pendaftaran', false)
            ->select('LEFT(no_pendaftaran, 8) as tanggal', false)
            ->orderBy('no_pendaftaran', 'DESC')
            ->limit(1)->get()->getRowArray();

        $tanggalSekarang = date('Ymd');
        $no = 1;
        if (isset($kode) == 1) {
            if (($tanggalSekarang == $kode['tanggal']) == 1) {
                $no = intval($kode['no_pendaftaran']) + 1;
            }
        }

        $tgl = date('Ymd');
        $batas = str_pad($no, 4, "0", STR_PAD_LEFT);
        $no_pendaftaran = $tgl . $batas;
        return $no_pendaftaran;
    }
    // end siswa
}
