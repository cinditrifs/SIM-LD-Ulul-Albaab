<?php

namespace App\Models;

use CodeIgniter\Model;

class SuratkeluarModel extends Model
{
    protected $table = 'suratkeluar';
    protected $allowedFields = ['nomor', 'tanggal_buat', 'tanggal_acara', 'untuk', 'keterangan'];
    protected $useTimestamps = true;

    protected $validationRules    = [
        'nomor'     => 'required',
        'tanggal_buat'    => 'required',
        'tanggal_acara'    => 'required',
        'untuk' => 'required'
    ];

    protected $validationMessages = [
        'nomor'        => [
            'required' => 'nomor harus dimasukkan'
        ],
        'tanggal_buat'        => [
            'required' => 'tanggal buat harus dimasukkan'
        ],
        'tanggal_acara'        => [
            'required' => 'tanggal acara harus dimasukkan'
        ],
        'untuk'        => [
            'required' => 'ditujuan untuk buat harus dimasukkan'
        ]
    ];
}
