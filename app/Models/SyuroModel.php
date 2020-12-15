<?php

namespace App\Models;

use CodeIgniter\Model;

class SyuroModel extends Model
{
    protected $table = 'syuro';
    protected $allowedFields = ['departemen', 'tanggal', 'file'];
    protected $useTimestamps = true;

    protected $validationRules    = [
        'departemen'     => 'required',
        'tanggal'    => 'required',
        'file'    => 'required',
    ];

    protected $validationMessages = [
        'departemen'        => [
            'required' => 'departemen harus dimasukkan'
        ],
        'tanggal'        => [
            'required' => 'tanggal buat harus dimasukkan'
        ],
        'file'        => [
            'required' => 'file harus dimasukkan'
        ]
    ];
}
