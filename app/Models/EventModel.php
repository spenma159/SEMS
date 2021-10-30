<?php

namespace App\Models;

use CodeIgniter\Model;

class EventModel extends Model
{
    protected $table = 'event';
    protected $allowedFields = [
        'id', 'nama_event', 'tipe_event', 'deskripsi', 'start_date', 'end_date', 'p_jawab', 'fullname',
    ];
    public function getEvents($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }
}
