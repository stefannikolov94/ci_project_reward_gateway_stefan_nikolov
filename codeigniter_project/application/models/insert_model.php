<?php
class insert_model extends CI_Model
{
    function __construct()
    {
        parent:: __construct();
    }

    function insert()
    {
        $data = array
        (
            'full_name' => $this->input->post('fullName'),
            'email' => $this->input->post('email'),
            'message' => $this->input->post('message')
        );

        $this->db->insert('contact', $data);
    }
}