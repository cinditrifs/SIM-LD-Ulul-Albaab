<?php

use CodeIgniter\codeIgniter;
use App\Models\SuratkeluarModel;
use App\Models\SyuroModel;


namespace App\Controllers;

class Sekre extends BaseController
{
    // surat keluar yeaaa
    protected $suratkeluar;
    protected $syuro;
    public function __construct()
    {
        $this->suratkeluar = new \App\Models\SuratkeluarModel(); //bisa di taro di base controller
        $this->syuro = new \App\Models\SyuroModel(); //bisa di taro di base controller

    }

    public function surat_keluar()
    {
        $suratkeluar = $this->suratkeluar->findAll();
        $data = [
            'suratkeluar' => $suratkeluar
        ];
        return view('sekre/surat_keluar', $data);
    }

    // untuk syuro yeaaaa
    public function syuro()
    {
        $syuro = $this->syuro->findAll();
        $data = [
            'syuro' => $syuro
        ];
        return view("sekre/syuro", $data);
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
