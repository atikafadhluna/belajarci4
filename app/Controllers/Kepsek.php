<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelSetting;

class Kepsek extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->ModelSetting = new ModelSetting();
    }

    public function index()
    {
        $data = [
            'title' => 'PPDB MTsN 4 ABES',
            'subtitle' => 'Dashboard',
        ];
        return view('kepsek/index', $data);
    }

    public function setting()
    {
        $data = [
            'title' => 'PPDB MTsN 4 ABES',
            'subtitle' => 'Setting Website',
            'setting' => $this->ModelSetting->detailSetting(),
        ];
        return view('kepsek/pengaturan/setting_web', $data);
    }

    //profile
    public function saveSetting()
    {
        //gambar tidak diganti
        $file = $this->request->getFile('logo_sekolah');
        // echo json_encode($file);
        // exit;
        if ($file->getError() == 4) {
            $data = [
                'nsm' => $this->request->getPost('nsm'),
                'npsn' => $this->request->getPost('npsn'),
                'nama_sekolah' => $this->request->getPost('nama_sekolah'),
                'jenjang_sekolah' => $this->request->getPost('jenjang_sekolah'),
                'status_sekolah' => $this->request->getPost('status_sekolah'),
            ];
            $this->ModelSetting->saveSetting($data);
        } else {
            //hapus foto lama dalam folder foto
            $setting = $this->ModelSetting->detailSetting();
            if ($setting['logo_sekolah'] != "") {
                unlink('./logo/' . $setting['logo_sekolah']);
            }

            //edit data logo
            $nama_file = $file->getRandomName();
            $data = [
                'nsm' => $this->request->getPost('nsm'),
                'npsn' => $this->request->getPost('npsn'),
                'nama_sekolah' => $this->request->getPost('nama_sekolah'),
                'jenjang_sekolah' => $this->request->getPost('jenjang_sekolah'),
                'status_sekolah' => $this->request->getPost('status_sekolah'),
                'logo_sekolah' => $nama_file,
            ];
            //upload file foto
            $file->move('logo/', $nama_file);
            $this->ModelSetting->saveSetting($data);
        }
        session()->setFlashdata('message', 'Data Berhasil di ganti !!');
        return redirect()->to(base_url('kepsek/setting'));
    }

    //alamat
    public function saveSetting2()
    {
        $data = [
            'alamat_lengkap' => $this->request->getPost('alamat_lengkap'),
            'provinsi' => $this->request->getPost('provinsi'),
            'kabupaten' => $this->request->getPost('kabupaten'),
            'kecamatan' => $this->request->getPost('kecamatan'),
        ];

        $this->ModelSetting->saveSetting2($data);
        session()->setFlashdata('message', 'Data Berhasil Di Ganti!!');
        return redirect()->to(base_url('kepsek/setting'));
    }

    //kontak
    public function saveSetting3()
    {
        $data = [
            'telepon_sekolah' => $this->request->getPost('telepon_sekolah'),
            'email' => $this->request->getPost('email'),
            'website' => $this->request->getPost('website'),
            'peta' => $this->request->getPost('peta'),
        ];

        $this->ModelSetting->saveSetting3($data);
        session()->setFlashdata('message', 'Data Berhasil Di Ganti!!');
        return redirect()->to(base_url('kepsek/setting'));
    }

    //data ppdb
    public function saveSetting4()
    {
        $data = [
            'beranda' => $this->request->getPost('beranda'),
            'keterangan_print' => $this->request->getPost('keterangan_print'),
            'info_ujian' => $this->request->getPost('info_ujian'),
        ];

        $this->ModelSetting->saveSetting4($data);
        session()->setFlashdata('message', 'Data Berhasil Di Ganti!!');
        return redirect()->to(base_url('kepsek/setting'));
    }

    //data kepala
    public function saveSetting5()
    {
        //gambar tidak diganti
        $file = $this->request->getFile('ttd_kepsek');
        // echo json_encode($file);
        // exit;
        if ($file->getError() == 4) {
            $data = [
                'nama_kepsek' => $this->request->getPost('nama_kepsek'),
                'nip_kepsek' => $this->request->getPost('nip_kepsek'),
            ];
            $this->ModelSetting->saveSetting5($data);
        } else {
            //hapus foto lama dalam folder foto
            $setting = $this->ModelSetting->detailSetting();
            if ($setting['ttd_kepsek'] != "") {
                unlink('./ttd/' . $setting['ttd_kepsek']);
            }

            //edit data ttd
            $nama_file = $file->getRandomName();
            $data = [
                'nama_kepsek' => $this->request->getPost('nama_kepsek'),
                'nip_kepsek' => $this->request->getPost('nip_kepsek'),
                'ttd_kepsek' => $nama_file,
            ];
            //upload file foto
            $file->move('ttd/', $nama_file);
            $this->ModelSetting->saveSetting5($data);
        }
        session()->setFlashdata('message', 'Data Berhasil di ganti !!');
        return redirect()->to(base_url('kepsek/setting'));
    }

    //data ketua
    public function saveSetting6()
    {
        //gambar tidak diganti
        $file = $this->request->getFile('ttd_ketua');
        // echo json_encode($file);
        // exit;
        if ($file->getError() == 4) {
            $data = [
                'nama_ketua' => $this->request->getPost('nama_ketua'),
                'nip_ketua' => $this->request->getPost('nip_ketua'),
            ];
            $this->ModelSetting->saveSetting6($data);
        } else {
            //hapus foto lama dalam folder foto
            $setting = $this->ModelSetting->detailSetting();
            if ($setting['ttd_ketua'] != "") {
                unlink('./ttd/' . $setting['ttd_ketua']);
            }

            //edit data ttd
            $nama_file = $file->getRandomName();
            $data = [
                'nama_ketua' => $this->request->getPost('nama_ketua'),
                'nip_ketua' => $this->request->getPost('nip_ketua'),
                'ttd_ketua' => $nama_file,
            ];
            //upload file foto
            $file->move('ttd/', $nama_file);
            $this->ModelSetting->saveSetting6($data);
        }

        session()->setFlashdata('message', 'Data Berhasil Di Ganti!!');
        return redirect()->to(base_url('kepsek/setting'));
    }

    //tahapan pendaftaran
    public function saveSetting7()
    {
        $data = [
            'tahapan1' => $this->request->getPost('tahapan1'),
            'tahapan2' => $this->request->getPost('tahapan2'),
            'tahapan3' => $this->request->getPost('tahapan3'),
            'tahapan4' => $this->request->getPost('tahapan4'),
            'tahapan5' => $this->request->getPost('tahapan5'),
            'tahapan6' => $this->request->getPost('tahapan6'),
            'tahapan7' => $this->request->getPost('tahapan7'),
        ];

        $this->ModelSetting->saveSetting7($data);
        session()->setFlashdata('message', 'Data Berhasil Di Ganti!!');
        return redirect()->to(base_url('kepsek/setting'));
    }
}
