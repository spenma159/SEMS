<?php

namespace App\Controllers;

use \App\Models\UsersModel;
use \App\Models\EventModel;
use \App\Models\EntryModel;

class Admin extends BaseController
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
    }
    public function index()
    {
        $data['title'] = 'List User';
        // $user = new \Myth\Auth\Models\UserModel();
        // $data['users'] = $user->findAll();

        $this->builder->select('users.id as userid, fullname, name');
        $this->builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $query = $this->builder->get();

        $data['users'] = $query->getResult();
        return view('/admin/index', $data);
    }
    public function detail($id = 0)
    {
        $data['title'] = 'Detail';
        $this->builder->select('users.id as userid, username, email, name, fullname, nohp ');
        $this->builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $this->builder->where('users.id', $id);

        $query = $this->builder->get();

        $data['users'] = $query->getRow();
        if (empty($data['users'])) {
            return redirect()->to('/admin');
        }
        return view('/admin/detailuser', $data);
    }

    public function adduser()
    {
        $data['title'] = 'Add User';

        return view('/admin/adduser', $data);
    }

    public function delete($id)
    {
        $this->builder->where('id', $id);
        $this->builder->delete();
        return redirect()->to('/Admin');
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Form Edit',
            'validation' => \Config\Services::validation(),
            'user' => $this->userModel->getUser($id),
        ];

        return view('admin/edit', $data);
    }
    public function update($id)
    {

        $this->userModel->save([
            'id' => $id,
            'fullname' => $this->request->getVar('fullname'),
            'username' => $this->request->getVar('fullname'),
            'email' => $this->request->getVar('email'),
            'nohp' => $this->request->getVar('nohp'),
            'password_hash' => $this->request->getVar('password'),
        ]);

        return redirect()->to('/Admin');
    }


    public function tables()
    {
        $data['title'] = 'Tables';
        $this->builder->select('users.id as userid, event.id as eventid, nama_event, tipe_event, deskripsi, start_date, end_date, fullname');
        $this->builder->join('event', 'event.p_jawab = users.id');
        $query = $this->builder->get();


        $data['users'] = $query->getResult();
        return view('/admin/tables', $data);
    }

    public function addevent()
    {
        $data['title'] = 'Add Event';
        $data['users'] = $this->userModel->getUser();

        return view('/admin/addevent', $data);
    }

    public function tambahevent()
    {
        $this->eventModel->save([
            'nama_event' => $this->request->getVar('nama_event'),
            'tipe_event' => $this->request->getVar('tipe_event'),
            'deskripsi' => $this->request->getVar('deskripsi'),
            'start_date' => $this->request->getVar('start_date'),
            'end_date' => $this->request->getVar('end_date'),
            'p_jawab' => $this->request->getVar('id'),
        ]);

        return redirect()->to('/Admin/tables');
    }
    public function addsiswa()
    {
        $data['title'] = 'Add Event';
        $data['events'] = $this->eventModel->getEvents();
        $data['event'] = $this->entryModel->getEntry();

        return view('/admin/addsiswa', $data);
    }

    public function tambahsiswa()
    {
        $this->entryModel->save([
            'nis' => $this->request->getVar('nis'),
            'nama' => $this->request->getVar('nama'),
            'kelas' => $this->request->getVar('kelas'),
            'kontak' => $this->request->getVar('kontak'),
            'e_diikuti' => $this->request->getVar('id'),
        ]);



        return redirect()->to('/Admin/tables');
    }

    public function detailevent($id = 0)
    {
        $data['title'] = 'Detail Event';
        $this->builder->select('users.id as userid, event.id as eventid, nama_event, tipe_event, fullname, deskripsi, start_date, end_date, nis, nama ');
        $this->builder->join('event', 'event.p_jawab = users.id');
        $this->builder->join('entry', 'entry.e_diikuti = event.id');
        $this->builder->where('event.id', $id);

        $query = $this->builder->get();

        $data['event'] = $query->getRow();
        if (empty($data['event'])) {
            return redirect()->to('/admin');
        }
        $data['entry'] = $query->getResult();
        if (empty($data['event'])) {
            return redirect()->to('/admin');
        }

        return view('/admin/detailevent', $data);
    }
    public function editevent($id)
    {
        $data = [
            'title' => 'Edit Event',
            'validation' => \Config\Services::validation(),
            'event' => $this->eventModel->getEvents($id),
            'eventsuser' => $this->userModel->getUser(),
        ];

        return view('admin/editevent', $data);
    }
    public function updateevent($id = 0)
    {

        $this->eventModel->save([
            'id' => $id,
            'nama_event' => $this->request->getVar('nama_event'),
            'tipe_event' => $this->request->getVar('tipe_event'),
            'deskripsi' => $this->request->getVar('deskripsi'),
            'start_date' => $this->request->getVar('start_date'),
            'end_date' => $this->request->getVar('end_date'),
            'p_jawab' => $this->request->getVar('id'),
        ]);

        return redirect()->to('/Admin/tables');
    }

    public function deleteevent($id)
    {
        $this->eventModel->where('id', $id);
        $this->eventModel->delete();
        $this->builder2->where('e_diikuti', $id);
        $this->builder2->delete();
        return redirect()->to('/Admin/tables');
    }







    //--------------------------------------------------------------------

}
