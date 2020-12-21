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
    public function prodak_save()
    {
        // ambil file
        $fileProdak = $this->request->getFile('gambar');
        // pindahkan file ke folder
        $fileProdak->move('img');
        //ambil nama file
        $namaProdak = $fileProdak->getName();
        $this->prodak->save([
            'nama_prodak' => $this->request->getVar('nama_prodak'),
            'detail' => $this->request->getVar('detail'),
            'gambar' => $namaProdak
        ]);
        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');
        return redirect()->to('/admin/prodak');
    }
    public function prodak_delete($id)
    {
        $this->prodak->delete($id);
        session()->setFlashdata('pesan', 'Program Dakwah Berhasil Dihapus');
        return redirect()->to('/admin/prodak');
    }
}
