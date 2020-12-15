<?php

use App\Models\PunggawaModel;
use CodeIgniter\codeIgniter;

namespace App\Controllers;

class Prodak extends BaseController
{
    public function index()
    {
        return view('prodak/prodak');
    }
}
