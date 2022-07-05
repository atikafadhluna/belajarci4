<?php

namespace App\Controllers;

class Pendaftaran extends BaseController
{
    public function pendaftaran()
    {
        $data = [
            'title' => 'PPDB',
            'subtitle' => 'Halaman Register',
        ];
        return view('auth/register', $data);
    }
}
