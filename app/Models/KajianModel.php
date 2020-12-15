<?php

namespace App\Models;

use CodeIgniter\Model;

class KajianModel extends Model
{
    protected $table = 'kajian';
    protected $allowedFields = ['kegiatan', 'tema', 'pemateri', 'tanggal_kegiatan', 'peserta_ttl', 'file'];
    protected $useTimestamps = true;

    protected $validationRules    = [
        'kegiatan'     => 'required',
        'tema'    => 'required',
        'pemateri'    => 'required',
        'tanggal_kegiatan' => 'required',
        'peserta_ttl' => 'required',
        'file' => 'required'
    ];

    protected $validationMessages = [
        'kegiatan'        => [
            'required' => 'kegiatan harus dimasukkan'
        ],
        'tema'        => [
            'required' => 'tema harus dimasukkan'
        ],
        'pemateri'        => [
            'required' => 'pemateri harus dimasukkan'
        ],
        'tanggal_kegiatan'        => [
            'required' => 'tanggal kegiatan harus dimasukkan'
        ],
        'peserta_ttl'        => [
            'required' => 'jumlah peserta harus dimasukkan'
        ],
        'file'        => [
            'required' => 'file harus dimasukkan'
        ]
    ];
}
