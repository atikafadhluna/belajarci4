<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Panitia extends BaseController
{
    public function __construct()
    {
        helper('form');
    }

    public function index()
    {
        $data = [
            'title' => 'PPDB MTsN 4 ABES',
            'subtitle' => 'Dashboard',
        ];
        return view('panitia/index', $data);
    }
}
