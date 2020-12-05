<?php

use App\Models\PunggawaModel;
use CodeIgniter\codeIgniter;

namespace App\Controllers;

class Admin extends BaseController
{
    // protected $punggawaModel;
    // public function __construct()
    // {
    //     $this->punggawaModel = new PunggawaModel();
    // }

    public function dashboard()
    {
        return view('admin/dashboard');
    }

    public function punggawa()
    {
        // $Allpunggawa = $this->punggawaModel->findAll();
        // $data = [
        //     'Allpunggawa' => $Allpunggawa
        // ];
        // // dd($Allflim);

        return view('admin/punggawa');
    }

    public function tambah_punggawa()
    {
        return view('admin/addpunggawa');
    }

    //--------------------------------------------------------------------

}
