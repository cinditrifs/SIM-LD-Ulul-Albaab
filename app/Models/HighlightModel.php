<?php

namespace App\Models;

use CodeIgniter\Model;

class HighlightModel extends Model
{
    protected $table = 'highlight';
    protected $allowedFields = ['gambar'];
    protected $useTimestamps = true;
}
