<?php

namespace App\Models;

use CodeIgniter\Model;

class ArtikelModel extends Model
{
    protected $table = 'artikel';
    protected $allowedFields = ['judul', 'konten', 'gambar', 'slug'];
    protected $useTimestamps = true;

    protected $validationRules    = [
        'judul'     => 'required',
        'konten'    => 'required',
        'gambar'    => 'required',
    ];

    protected $validationMessages = [
        'judul'        => [
            'required' => 'judul harus dimasukkan'
        ]
    ];

    // panggil artikel 
    public function getArtikel($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }
        return $this->where(['slug' => $slug])->first();
    }
}
