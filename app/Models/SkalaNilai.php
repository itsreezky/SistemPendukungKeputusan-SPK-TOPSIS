<?php

namespace App\Models;

use CodeIgniter\Model;

class SkalaNilaiModel extends Model
{
    protected $table = 'skalanilai';
    protected $primaryKey = 'id';
    protected $allowedFields = ['kriteria1', 'kriteria2', 'intensitas'];

    public function getSkala()
    {
        return $this->findAll();
    }
}
