<?php

use CodeIgniter\codeIgniter;
use App\Models\ArtikelModel;


namespace App\Controllers;

class Artikel extends BaseController
{
    protected $artikel;
    public function __construct()
    {
        $this->artikel = new \App\Models\ArtikelModel(); //bisa di taro di base controller
    }
    public function artikel()
    {
        $artikel = $this->artikel->getArtikel();
        $data = [
            'artikel' => $artikel
        ];
        return view('admin/artikel_all', $data);
    }

    public function tambah_artikel()
    {
        return view("admin/tambah_artikel");
    }

    public function save()
    {
    }


    public function edit_artikel()
    {
        return view("admin/edit_artikel");
    }

    public function detail($slug)
    {
        $data = [
            'artikel' => $this->artikel->getArtikel($slug)
        ];
        return view("admin/view_artikel", $data);
    }
}
