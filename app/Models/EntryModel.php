<?php

namespace App\Models;

use CodeIgniter\Model;

class EntryModel extends Model
{
    protected $table = 'entry';
    protected $allowedFields = [
        'nis', 'nama', 'kelas', 'kontak', 'absensi', 'e_diikuti',
    ];
    public function getEntry($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }
}
