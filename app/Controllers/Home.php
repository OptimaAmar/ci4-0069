<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['judul'] = "Halaman Index";
        $data['footer'] = "Optima Amar";
        echo view('template/header', $data);
        echo view('index');
        echo view('template/footer', $data);
    }
}
