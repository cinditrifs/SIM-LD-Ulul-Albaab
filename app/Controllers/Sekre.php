<?php

use CodeIgniter\codeIgniter;

namespace App\Controllers;

class Sekre extends BaseController
{
    public function surat_keluar()
    {
        return view('sekre/surat_keluar');
    }

    public function syuro()
    {
        return view("sekre/syuro");
    }

    public function proposal()
    {
        return view("sekre/proposal");
    }

    public function lpj()
    {
        return view("sekre/lpj");
    }

    public function presensi_kajian()
    {
        return view("sekre/presensi_kajian");
    }
}
