<?php

namespace App\Controllers;

use App\Models\ModelSetting;

class Home extends BaseController
{
    public function __construct()
    {
        $this->ModelSetting = new ModelSetting();
    }

    public function index()
    {
        $data = [
            'title' => 'PPDB',
            'subtitle' => 'MTsN 4 ACEH BESAR',
            'setting' => $this->ModelSetting->detailSetting(),
        ];
        return view('home', $data);
    }
}
