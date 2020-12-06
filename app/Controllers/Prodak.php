<?php

use App\Models\PunggawaModel;
use CodeIgniter\codeIgniter;

namespace App\Controllers;

class Prodak extends BaseController
{
    public function huda()
    {
        return view('prodak/huda');
    }

    public function lc()
    {
        return view('prodak/lc');
    }

    public function kader()
    {
        return view('prodak/kader');
    }

    public function syiar()
    {
        return view('prodak/syiar');
    }

    public function keputrian()
    {
        return view('prodak/keputrian');
    }
}
