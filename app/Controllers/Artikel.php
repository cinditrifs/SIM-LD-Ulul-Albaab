<?php

use CodeIgniter\codeIgniter;

namespace App\Controllers;

class Artikel extends BaseController
{
    public function artikel()
    {
        return view('admin/artikel_all');
    }

    public function tambah_artikel()
    {
        return view("admin/tambah_artikel");
    }

    public function edit_artikel()
    {
        return view("admin/edit_artikel");
    }

    public function artikel_ke()
    {
        return view("admin/view_artikel");
    }
}
