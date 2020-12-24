<?php

use CodeIgniter\codeIgniter;
use App\Models\ArtikelModel;


namespace App\Controllers;

use CodeIgniter\Validation\Rules;

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
        $slug = url_title($this->request->getVar('judul'), '-', true);
        // dd($this->request->getVar());
        // insert data base
        // ambil file
        $fileArtikel = $this->request->getFile('gambar');
        // pindahkan file ke folder
        $fileArtikel->move('img');
        //ambil nama file
        $namaArtikel = $fileArtikel->getName();
        $this->artikel->save([
            'judul' => $this->request->getVar('judul'),
            'slug' => $slug,
            'konten' => $this->request->getVar('konten'),
            'gambar' => $namaArtikel
        ]);
        session()->setFlashdata('pesan', 'Artikel Berhasil Ditambahkan');
        return redirect()->to('/artikel/artikel');
    }

    public function edit($slug)
    {
        $data = [
            'artikel' => $this->artikel->getArtikel($slug),
        ];
        return view("admin/edit_artikel", $data);
    }

    public function update($id)
    {
        // if (!$this->validate([
        //     'judul' => [
        //         'rules' => 'is_unique(artikel.judul)',
        //         'error' => [
        //             'is_unique' => 'sudah terdaftar'
        //         ]
        //     ]
        // ])) {
        //     $validation = \Config\Services::validation();
        //     return redirect()->to('/artikel/edit_artikel');
        // }

        $slug = url_title($this->request->getVar('judul'), '-', true);
        $this->artikel->save([
            'id' => $id,
            'gambar' => $this->request->getVar('gambar'),
            'judul' => $this->request->getVar('judul'),
            'slug' => $slug,
            'konten' => $this->request->getVar('konten')
        ]);

        session()->setFlashdata('pesan', 'Artikel Berhasil Diubah');

        return redirect()->to('/artikel/artikel');
    }

    public function detail($slug)
    {
        $data = [
            'artikel' => $this->artikel->getArtikel($slug)
        ];
        return view("admin/view_artikel", $data);

        if (empty($data['komik'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('judul tidak ditemukan');
        }
    }

    public function delete($id)
    {
        $this->artikel->delete($id);
        session()->setFlashdata('pesan', 'Artikel Berhasil Dihapus');

        return redirect()->to('/artikel/artikel');
    }
}
