<?php

use App\Models\PunggawaModel;
use CodeIgniter\codeIgniter;

namespace App\Controllers;

class Admin extends BaseController
{
    public function login()
    {
        return view('login_admin');
    }
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
        return view('admin/tambah_punggawa');
    }

    public function highlight()
    {
        return view('admin/highlight');
    }

    public function tambah_highlight()
    {
        return view('admin/tambah_highlight');
    }

    //--------------------------------------------------------------------

}
