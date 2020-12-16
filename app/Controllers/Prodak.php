<?php

use App\Models\ProdakModel;
use CodeIgniter\codeIgniter;

namespace App\Controllers;

class Prodak extends BaseController
{
    protected $prodak;
    public function __construct()
    {
        $this->prodak = new \App\Models\ProdakModel(); //bisa di taro di base controller
    }
    public function index()
    {
        $prodak = $this->prodak->getProdak();
        $data = [
            'prodak' => $prodak
        ];
        return view('prodak/prodak', $data);
    }
}
