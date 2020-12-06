<?php

namespace App\Models;

use CodeIgniter\Model;

class PunggawaModel extends Model
{
    protected $table      = 'punggawa';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama', 'posistion', 'prodi'];

    public function getPunggawa($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }
        return $this->where(['id' => $id])->first();
    }
}
