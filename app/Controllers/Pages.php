<?php

namespace App\Controllers;

use App\Models\EventModel;
use App\Models\UsersModel;

class Pages extends BaseController
{
    protected $eventModel;
    protected $userModel;

    public function __construct()
    {
        $this->db = \config\Database::connect();
        $this->builder = $this->db->table('users');
        $this->builder2 = $this->db->table('users');
        $this->eventModel = new EventModel();
        $this->userModel = new UsersModel();
    }
    public function index()
    {
        $data = [
            'title' => 'Home | Sport Event Management System'
        ];
        return view('pages/home', $data);
    }

    public function login()
    {
        $data = [
            'title' => 'Log In'
        ];
        return view('pages/login', $data);
    }
    public function event()
    {
        $data['title'] = 'Event';
        $this->builder->select('users.id as userid, event.id as eventid, nama_event, tipe_event, deskripsi, start_date, end_date, fullname');
        $this->builder->join('event', 'event.p_jawab = users.id');
        $query = $this->builder->get();


        $data['users'] = $query->getResult();
        return view('/pages/events', $data);
    }

    public function detailevent($id = 0)
    {
        $data['title'] = 'Detail Event';
        $this->builder->select('users.id as userid, event.id as eventid, nama_event, tipe_event, fullname, deskripsi, start_date, end_date, nis,nama,kelas,absensi,juara1,juara2,juara3,entry.id as entryid');
        $this->builder->join('event', 'event.p_jawab = users.id');
        $this->builder->join('entry', 'entry.e_diikuti = event.id');
        $this->builder->join('result', 'result.id_event = event.id', 'result.juara1 = entry.id', 'result.juara2 = entry.id', 'result.juara3 = entry.id');
        $this->builder->where('event.id', $id);

        $query = $this->builder->get();

        $data['events'] = $query->getResult();
        $data['event'] = $query->getRow();

        return view('/pages/detailevent', $data);
    }
    //--------------------------------------------------------------------

}
