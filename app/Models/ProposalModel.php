<?php

namespace App\Models;

use CodeIgniter\Model;

class ProposalModel extends Model
{
    protected $table = 'proposal';
    protected $allowedFields = ['kegiatan', 'tanggal_kegiatan', 'ketua_kegiatan', 'file'];
    protected $useTimestamps = true;

    protected $validationRules    = [
        'kegiatan'     => 'required',
        'tanggal_kegiatan' => 'required',
        'file' => 'required',
        'ketua_kegiatan' => 'required'
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
        ],
        'ketua_kegiatan'    => [
            'required' => 'nama ketua harus diisi'
        ]
    ];
}
