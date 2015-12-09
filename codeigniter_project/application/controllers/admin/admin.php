<?php
class Admin extends CI_Controller
{
    function __construct()
    {
        parent:: __construct();
        // load library
        $this->load->library(array('table', 'form_validation'));

        // load helper
        $this->load->helper('url');

        // load model
        $this->load->model('admin_model');
    }
    // retrieve
    function index()
    {
        $data = array();
        $data['users'] = $this->admin_model->getUsers();
       // var_dump($data['users']);die();
        $this->load->view('admin/users_list', $data);
    }

    function admin()
    {

    }

    function add()
    {

    }

}