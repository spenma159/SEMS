<?php

namespace App\Models;

use CodeIgniter\Model;

class ResultModel extends Model
{
    protected $table = 'result';
    protected $primarykey = 'id';
    protected $allowedFields = [
        'id', 'id_event', 'juara1',  'juara2',  'juara3',
    ];
    public function getEvents($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }
}
