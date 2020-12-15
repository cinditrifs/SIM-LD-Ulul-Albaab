<?php

namespace App\Models;

use CodeIgniter\Model;

class LpjModel extends Model
{
    protected $table = 'lpj';
    protected $allowedFields = ['kegiatan', 'tanggal_kegiatan', 'file'];
    protected $useTimestamps = true;

    protected $validationRules    = [
        'kegiatan'     => 'required',
        'tanggal_kegiatan' => 'required',
        'file' => 'required'
    ];

    protected $validationMessages = [
        'kegiatan'        => [
            'required' => 'kegiatan harus dimasukkan'
        ],
        'tanggal_kegiatan'        => [
            'required' => 'tanggal kegiatan harus dimasukkan'
        ],
        'file'        => [
            'required' => 'file harus dimasukkan'
        ]
    ];
}
