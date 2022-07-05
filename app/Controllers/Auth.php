<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelAuth;
use App\Models\ModelTahunAjaran;

class Auth extends BaseController
{
    public function __construct()
    {
        $this->ModelAuth = new ModelAuth();
        $this->ModelTahunAjaran = new ModelTahunAjaran();
        helper('form');
    }

    // begin :: register dan login siswa

    public function register()
    {
        session();
        $data = [
            'title' => 'PPDB MTsN 4 ABES',
            'subtitle' => 'Halaman Registrasi',
            'ta' => $this->ModelTahunAjaran->statusTa(),
            'validation' => \Config\Services::validation(),
        ];
        return view('auth/register', $data);
    }

    public function saveregister()
    {
        if ($this->validate([
            'nama_siswa' => [
                'label' => 'Nama Lengkap',
                'rules' => 'required',
                'errors' => [
                    'required' => '*Isikan {field} Anda ',
                ],
            ],
            'nisn' => [
                'label' => 'NISN',
                'rules' => 'required|is_unique[tbl_siswa.nisn]',
                'errors' => [
                    'required' => '*Isikan {field} Anda ',
                    'is_unique' => '*{field} Sudah Terdaftar ',
                ],
            ],
            'telepon_siswa' => [
                'label' => 'No. Telepon (Wa)',
                'rules' => 'required|max_length[12]|min_length[11]',
                'errors' => [
                    'required' => '*Isikan {field} Anda ',
                    'max_length' => '*{field} tidak boleh lebih dari 12 angka ',
                    'min_length' => '*{field} tidak boleh kurang dari 11 angka ',
                ],
            ],
            'password' => [
                'label' => 'Password',
                'rules' => 'required|min_length[6]',
                'errors' => [
                    'required' => '*Isikan {field} Anda ',
                    'min_length' => '*{field} Minimal 6 Karakter ',
                ],
            ],
            'cpassword' => [
                'label' => 'Konfirmasi Password',
                'rules' => 'required|matches[password]',
                'errors' => [
                    'required' => '*Isikan {field} Anda ',
                    'matches' => '*{field} Yang Diisi Harus Sama  ',
                ],
            ],
        ])) {
            // jika tidak ada validasi simpan data
            $no_pendaftaran = $this->ModelAuth->noPendaftaran();
            $data = [
                'no_pendaftaran' => $no_pendaftaran,
                'tgl_pendaftaran' => date('Y-m-d'),
                'nama_siswa' => $this->request->getPost('nama_siswa'),
                'telepon_siswa' => $this->request->getPost('telepon_siswa'),
                'nisn' => $this->request->getPost('nisn'),
                'password' => $this->request->getPost('password'),
            ];
            $this->ModelAuth->insertData($data);
            session()->setFlashdata('pesan', 'Pendaftaran Berhasil, Silahkan Login Untuk Melengkapi Data');
            return redirect()->to(base_url('auth/loginSiswa'));
        } else {
            // jika ada validasi 
            $validation = \Config\Services::validation();
            return redirect()->to('auth/register')->withInput()->with('validation', $validation);
        }
    }

    public function loginSiswa()
    {
        $data = [
            'title' => 'PPDB MTsN 4 ABES',
            'subtitle' => 'Halaman Login Siswa',
            'ta' => $this->ModelTahunAjaran->statusTa(),
            'validation' => \Config\Services::validation(),
        ];
        return view('auth/login_siswa', $data);
    }

    public function cek_login_siswa()
    {
        if ($this->validate([
            'nisn' => [
                'label' => 'NISN',
                'rules' => 'required',
                'errors' => [
                    'required' => '*Isikan {field} Anda ',
                ],
            ],
            'password' => [
                'label' => 'Password',
                'rules' => 'required',
                'errors' => [
                    'required' => 'Isikan {field} Anda',
                ],
            ]
        ])) {
            // Data Valid
            $nisn = $this->request->getPost('nisn');
            $password = $this->request->getPost('password');
            $cek_login = $this->ModelAuth->login_siswa($nisn, $password);
            if ($cek_login) {
                session()->set('id_siswa', $cek_login['id_siswa']);
                session()->set('nisn', $cek_login['nisn']);
                session()->set('nama_siswa', $cek_login['nama_siswa']);
                session()->set('telepon_siswa', $cek_login['telepon_siswa']);
                session()->set('level', 'siswa');
                return redirect()->to(base_url('Csiswa/index'));
            } else {
                session()->setFlashdata('message', 'NISN Atau Password Salah !');
                return redirect()->to(base_url('Auth/loginSiswa'));
            }
        } else {
            //Data tidak Valid
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            $validation = \Config\Services::validation();
            return redirect()->to('Auth/loginSiswa')->withInput()->with('validation', $validation);
        }
    }
    public function logoutSiswa()
    {
        session()->remove('nisn');
        session()->remove('nama_siswa');
        session()->remove('telepon_siswa');
        session()->remove('level');
        session()->setFlashdata('keluar', 'Logout Success !');
        return redirect()->to(base_url('auth/loginSiswa'));
    }

    // end :: register dan login siswa



    // begin :: login logout kepsek

    public function login()
    {
        session();
        $data = [
            'title' => 'PPDB MTsN 4 ABES',
            'subtitle' => 'Halaman Login Kepsek',
            'validation' => \Config\Services::validation(),
        ];
        return view('auth/login', $data);
    }

    public function cek_login_user()
    {
        if ($this->validate([
            'email' => [
                'label' => 'Email',
                'rules' => 'required|valid_email',
                'errors' => [
                    'required' => 'Isikan {field} Anda ',
                    'valid_email' => 'Harus Sesuai Dengan Format Email !'
                ],
            ],
            'password' => [
                'label' => 'Password',
                'rules' => 'required',
                'errors' => [
                    'required' => 'Isikan {field} Anda',
                ],
            ]
        ])) {
            // Data Valid
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');
            $cek_login = $this->ModelAuth->login_user($email, $password);
            if ($cek_login) {
                session()->set('id_user', $cek_login['id_user']);
                session()->set('nama_user', $cek_login['nama_user']);
                session()->set('email', $cek_login['email']);
                session()->set('telepon', $cek_login['telepon']);
                session()->set('foto', $cek_login['foto']);
                session()->set('level', 'kepsek');
                return redirect()->to(base_url('kepsek/index'));
            } else {
                session()->setFlashdata('message', 'Email Atau Password Salah !');
                return redirect()->to(base_url('auth/login'));
            }
        } else {
            //Data tidak Valid
            $validation = \Config\Services::validation();
            return redirect()->to('Auth/login')->withInput()->with('validation', $validation);
        }
    }

    public function logout()
    {
        session()->remove('nama_user');
        session()->remove('email');
        session()->remove('foto');
        session()->remove('level');
        session()->setFlashdata('keluar', 'Logout Success !');
        return redirect()->to(base_url('auth/login'));
    }
    // end :: login logout kepsek

    // begin :: login panitia
    public function loginPanitia()
    {
        session();
        $data = [
            'title' => 'PPDB MTsN 4 ABES',
            'subtitle' => 'Halaman Login Panitia',
            'validation' => \Config\Services::validation(),
        ];
        return view('auth/login_panitia', $data);
    }

    public function cek_login_panitia()
    {
        if ($this->validate([
            'email' => [
                'label' => 'Email',
                'rules' => 'required|valid_email',
                'errors' => [
                    'required' => 'Isikan {field} Anda ',
                    'valid_email' => 'Harus Sesuai Dengan Format Email !'
                ],
            ],
            'password' => [
                'label' => 'Password',
                'rules' => 'required',
                'errors' => [
                    'required' => 'Isikan {field} Anda',
                ],
            ]
        ])) {
            // Data Valid
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');
            $cek_login = $this->ModelAuth->login_panitia($email, $password);
            if ($cek_login) {
                session()->set('id_panitia', $cek_login['id_panitia']);
                session()->set('nama_panitia', $cek_login['nama_panitia']);
                session()->set('email', $cek_login['email']);
                session()->set('telepon_panitia', $cek_login['telepon_panitia']);
                session()->set('foto', $cek_login['foto']);
                session()->set('level', 'panitia');
                return redirect()->to(base_url('panitia/index'));
            } else {
                session()->setFlashdata('message', 'Email Atau Password Salah !');
                return redirect()->to(base_url('auth/loginpanitia'));
            }
        } else {
            //Data tidak Valid
            $validation = \Config\Services::validation();
            return redirect()->to('Auth/loginpanitia')->withInput()->with('validation', $validation);
        }
    }

    public function logoutPanitia()
    {
        session()->remove('nama_panitia');
        session()->remove('email');
        session()->remove('foto');
        session()->remove('level');
        session()->setFlashdata('keluar', 'Logout Success !');
        return redirect()->to(base_url('auth/loginpanitia'));
    }
    // end :: login panitia
}
