<?php

namespace App\Controllers;

class Artikel extends BaseController
{
    public function showALl()
    {
        return view('admin/artikel_all');
    }

    public function tambah()
    {
        return view("admin/tambah_artikel");
    }

    //--------------------------------------------------------------------

}
