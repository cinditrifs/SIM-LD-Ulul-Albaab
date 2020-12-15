<?php

namespace App\Models;

use CodeIgniter\Model;

class PunggawaModel extends Model
{
    protected $table      = 'punggawa';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama', 'prodi', 'angkatan', 'departemen'];

    protected $validationRules    = [
        'nama'     => 'required',
        'prodi'    => 'required',
        'angkatan'    => 'required',
        'departemen' => 'required'
    ];

    protected $validationMessages = [
        'nama'        => [
            'required' => 'nama harus dimasukkan'
        ],
        'prodi'        => [
            'required' => 'prodi buat harus dimasukkan'
        ],
        'angkatan'        => [
            'required' => 'angkatan acara harus dimasukkan'
        ],
        'departemen'        => [
            'required' => 'departemen untuk buat harus dimasukkan'
        ]
    ];
}
