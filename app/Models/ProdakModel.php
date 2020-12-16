<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdakModel extends Model
{
    protected $table = 'prodak';
    protected $allowedFields = ['gambar', 'nama_prodak', 'detail'];
    protected $useTimestamps = true;

    // protected $validationRules    = [
    //     'judul'     => 'required',
    //     'konten'    => 'required',
    //     'gambar'    => 'required',
    // ];

    // protected $validationMessages = [
    //     'judul'        => [
    //         'required' => 'judul harus dimasukkan'
    //     ]
    // ];

    // panggil artikel 
    public function getProdak($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }
        return $this->where(['slug' => $slug])->first();
    }
}
