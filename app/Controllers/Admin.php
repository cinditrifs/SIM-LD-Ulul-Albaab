<?php

use App\Models\PunggawaModel;
use App\Models\HighlightModel;
use CodeIgniter\codeIgniter;

namespace App\Controllers;

use CodeIgniter\Validation\Rules;

class Admin extends BaseController
{
    protected $highlightModel;
    protected $punggawa;
    public function __construct()
    {
        $this->highlightModel = new \App\Models\HighlightModel(); //bisa di taro di base controller
        $this->punggawa = new \App\Models\PunggawaModel();
    }

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
        $punggawa = $this->punggawa->findAll();
        $data = [
            'punggawa' => $punggawa
        ];
        return view('admin/punggawa', $data);
    }

    public function tambah_punggawa()
    {
        return view('admin/tambah_punggawa');
    }


    // controller buat highlight 
    public function highlight()
    {
        #variable gambar namanya slider
        $slider = $this->highlightModel->findAll();
        $data = [
            'slider' => $slider
        ];
        return view('admin/highlight', $data);
    }
    public function save_highlight()
    {
        if (!$this->validate([
            'gambar' => [
                'rules' => 'uploaded[gambar]| max_size[gambar, 1024] | is_image[gambar] | mime_in[gambar, image/png, image/jpg, image/jpeg]',
                'errors' => [
                    'uploaded' => "pilih gambar terlebih dahulu",
                    'max_size' => 'ukuran gambar tidak memenuhi',
                    'is_image' => 'file bukan gambar',
                    'mime_in' => "type file salah"
                ]
            ]
        ]))
            $this->highlightModel->save(
                [
                    'gambar' => $this->request->getVar('gambar')
                ]
            );
        return redirect()->to('/admin/highlight')->withInput();
    }


    public function tambah_highlight()
    {
        return view('admin/tambah_highlight');
    }
}
