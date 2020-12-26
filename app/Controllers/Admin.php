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
    protected $artikel;
    protected $prodak;
    public function __construct()
    {
        $this->highlightModel = new \App\Models\HighlightModel(); //bisa di taro di base controller
        $this->punggawa = new \App\Models\PunggawaModel();
        $this->artikel = new \App\Models\ArtikelModel();
        $this->prodak = new \App\Models\ProdakModel();
    }

    public function login()
    {
        return view('login_admin');
    }
    public function dashboard()
    {
        // ambil total instagram
        $username = 'ululalbaab.unj';
        $response = @file_get_contents("https://www.instagram.com/$username/?__a=1");
        $data = json_decode($response, true);
        $follower  = $data['graphql']['user']['edge_followed_by']['count'];

        // ambil total punggawa 
        $punggawa = $this->punggawa->countAll();
        $total = $punggawa;

        // ambil total artikel
        $artikel = $this->artikel->countAll();
        $totalAr = $artikel;

        // ambil total prodak
        $prodak = $this->prodak->countAll();
        $prodak = $prodak;
        $data = [
            'follower' => $follower,
            'total' => $total,
            'totalAr' => $totalAr,
            'prodak' => $prodak
        ];

        return view('admin/dashboard', $data);
    }

    // controller buat Punggawa
    public function punggawa()
    {
        $punggawa = $this->punggawa->findAll();
        $data = [
            'punggawa' => $punggawa
        ];
        return view('admin/punggawa', $data);
    }
    public function punggawa_save()
    {
        $this->punggawa->save([
            'nama' => $this->request->getVar('nama'),
            'prodi' => $this->request->getVar('prodi'),
            'angkatan' => $this->request->getVar('angkatan'),
            'departemen' => $this->request->getVar('departemen'),
        ]);
        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');
        return redirect()->to('/admin/punggawa');
    }
    public function punggawa_delete($id)
    {
        $this->punggawa->delete($id);
        session()->setFlashdata('pesan', 'Data Punggawa Berhasil Dihapus');

        return redirect()->to('/admin/punggawa');
    }

    // controller buat highlight 
    public function highlight()
    {
        session();
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
        session()->setFlashdata('pesan', 'Highlight Berhasil Ditambahkan');
        return redirect()->to('/admin/highlight')->withInput();
    }

    public function tambah_highlight()
    {
        return view('admin/tambah_highlight');
    }
    public function highlight_delete($id)
    {
        $this->highlightModel->delete($id);
        session()->setFlashdata('pesan', 'Highlight Berhasil Dihapus');
        return redirect()->to('/admin/highlight');
    }
}
