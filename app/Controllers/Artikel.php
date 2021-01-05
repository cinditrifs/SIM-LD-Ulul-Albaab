<?php

use CodeIgniter\codeIgniter;
use App\Models\ArtikelModel;



namespace App\Controllers;

use CodeIgniter\Validation\Rules;

class Artikel extends BaseController
{
    protected $artikel;
    protected $logs;
    public function __construct()
    {
        $this->artikel = new \App\Models\ArtikelModel(); //bisa di taro di base controller
        $this->logs = new \App\Models\LogsModel();
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
        $this->logs->insertLogByRoute('/admin/save_artikel');
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
        $this->logs->insertLogByRoute('/admin/edit_artikel/' . $id);
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
            'id' => $id,
            'judul' => $this->request->getVar('judul'),
            'slug' => $slug,
            'konten' => $this->request->getVar('konten'),
            'gambar' => $namaArtikel
        ]);
        session()->setFlashdata('pesan', 'Artikel Berhasil Diupdate');
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
        $this->logs->insertLogByRoute('/admin/delete_artikel/' . $id);
        $this->artikel->delete($id);
        session()->setFlashdata('pesan', 'Artikel Berhasil Dihapus');

        return redirect()->to('/artikel/artikel');
    }
}
