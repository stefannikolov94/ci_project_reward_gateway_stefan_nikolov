<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User_model extends CI_Model {
    public function __construct()
    {
        parent::__construct();
    }
    public function register_user($data)
    {
        $this->db->insert('users',$data);
        return true;
    }
/* not working verifymail user
    public function verifyEmailUser($key)
    {
        $data = array('active_status' => 1, $key);
        $this->db->where('md5(email)', $key);
        return $this->db->update('users', $data);
    }
*/
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