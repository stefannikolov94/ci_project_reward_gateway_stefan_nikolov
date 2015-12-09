<?php
class Admin_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function findAll()
    {
        return $this->db->get('users')->result();
    }

    public function create()
    {
        $data=array(
            'username'=>$this->input->post('username'),
            'email'=>$this->input->post('email'),
            'password'=>md5($this->input->post('password')),
            'gender'=>$this->input->post('gender'),
            'registered'=>time()
        );
        $this->db->insert('users',$data);
        return true;
    }

    public function edit($id, $username, $email, $gender)
    {
        $this->db->set('username', $username);
        $this->db->set('email', $email);
        $this->db->set('gender', $gender);
        $this->db->where('user_id', $id);
        return $this->db->update('users');
    }

    public function delete($id)
    {
        $this->db->where('user_id', $id);
        $this->db->delete('users');
    }

    public function find($id)
    {
        $this->db->where('user_id', $id);
        return $this->db->get('users')->row();
    }

    function login($email,$password)
    {
        $this->db->where("email",$email);
        $this->db->where("password",md5($password));
        $query=$this->db->get("users");
        if($query->num_rows()>0)
        {
            $row=$query->row();
            $userdata = array(
                'user_id'  => $row->user_id,
                'username'  => $row->username,
                'email'    => $row->email,
            );
            $this->session->set_userdata($userdata);
            return true;
        }
        return false;
    }
}