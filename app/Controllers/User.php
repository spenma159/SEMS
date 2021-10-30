<?php

namespace App\Controllers;

use \App\Models\UsersModel;
use \App\Models\EventModel;
use \App\Models\EntryModel;
use \App\Models\ResultModel;

class User extends BaseController
{
    protected $db, $builder;
    public function __construct()
    {
        $this->db = \config\Database::connect();
        $this->builder = $this->db->table('users');
        $this->builder2 = $this->db->table('entry');
        $this->userModel = new UsersModel();
        $this->eventModel = new EventModel();
        $this->entryModel = new EntryModel();
        $this->resultModel = new ResultModel();
    }
    public function index()
    {
        $data['title'] = 'Selamat Datang';
        $this->builder->select('users.id as userid, event.id as eventid, nama_event, tipe_event, deskripsi, start_date, end_date, fullname, p_jawab');
        $this->builder->join('event', 'event.p_jawab = users.id');
        $where = user_id();
        $this->builder->where('p_jawab', $where);

        $query = $this->builder->get();

        $data['users'] = $query->getResult();

        return view('/user/index', $data);
    }
    public function absensi($id = 0)
    {
        $data['title'] = 'Absensi siswa';
        $this->eventModel->where('event.id', $id);
        $this->builder2->where('e_diikuti', $id);

        $query = $this->eventModel->get();
        $query2 = $this->builder2->get();

        $data['event'] = $query->getRow();

        $data['entry'] = $query2->getResult();


        return view('/user/absensi', $data);
    }

    public function tambahabsensi($id = 0)
    {
        $this->builder2->where('e_diikuti', $id);
        $this->builder2->update([
            'absensi' => $this->request->getVar('absensi'),
        ]);

        return redirect()->to('/user');
    }


    public function hasil($id = 0)
    {
        $data['title'] = 'Absensi siswa';
        $this->eventModel->select('entry.id as entryid, nama_event, nama, event.id');
        $this->eventModel->join('entry', 'entry.e_diikuti = event.id');
        $this->eventModel->where('event.id', $id);

        $query = $this->eventModel->get();

        $data['event'] = $query->getRow();
        $data['events'] = $query->getResult();

        return view('/user/hasil', $data);
    }

    public function tambahhasil()
    {
        $this->resultModel->insert([
            'id_event' => $this->request->getVar('id_event'),
            'juara1' => $this->request->getVar('juara1'),
            'juara2' => $this->request->getVar('juara2'),
            'juara3' => $this->request->getVar('juara3'),
        ]);

        return redirect()->to('/user');
    }
    //--------------------------------------------------------------------

}
